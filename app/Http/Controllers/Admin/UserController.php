<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Email;
use App\Helpers\ConstantHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\District;
use App\Repositories\AgentRepository;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    protected $user, $role, $agent;
    public function __construct(UserRepository $user, Role $role, AgentRepository $agent)
    {
        $this->middleware(['permission:user-view|user-add|user-edit|user-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:user-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:user-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:user-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:user-change-status'], ['only' => ['changeStatus']]);
        $this->user = $user;
        $this->role = $role;
        $this->agent = $agent;
    }

    public function index(Request $request)
    {
        $dataProvider = $this->user->dataProvider($request);

        return view('admin.user.index', ['dataProvider' => $dataProvider]);
    }
    public function create(Request $request)
    {
        $request->is_active = ConstantHelper::STATUS_ACTIVE;
        $request->status = ConstantHelper::STATUS_ACTIVE;
        $roles = Role::where('is_visible')->pluck('name', 'name')->all();
        $agents = $this->agent->dataProvider($request);
        $selectedAgent = null;
        if ($request->has('agent')) {
            $selectedAgent = $this->agent->findByUuid($request->agent);
        }
        if ($request->has('agent') || auth()->user()->agent_id != '') {
            $roles = Role::where('is_visible', 1)->where('agent_available', 1)->pluck('name', 'name')->all();
        }
        return view('admin.user.create', ['roles' => $roles, 'agents' => $agents, 'selectedAgent' => $selectedAgent]);
    }
    public function store(UserRequest $request)
    {
        try {
            DB::BeginTransaction();

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password ?? 'password'),
                'agent_id' => $request->agent_id
            ];
            $user = $this->user->create($data);
            $user->assignRole($request->input('roles'));
            DB::commit();
            if ($request->has('agent')) {
                return redirect()->route('admin.user.index', ['agent' => $request->agent])->with('flash_success', 'The record has been added successfully.');
            }
            return redirect()->route('admin.user.index')->with('flash_success', 'The record has been added successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function changeStatus(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->user->find($id);
            $model->status = $model->status == ConstantHelper::STATUS_ACTIVE ? ConstantHelper::STATUS_INACTIVE : ConstantHelper::STATUS_ACTIVE;
            if ($model->save()) {
                return response()->json(['status' => 0, 'message' => 'The status has been updated successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! status cannot be updated.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function show($id)
    {
        abort(404);
    }
    public function edit(Request $request, $id)
    {
        $model = $this->user->find($id);
        if (auth()->user()->agent_id && $model->agent_id != auth()->user()->agent_id) {
            abort(403);
        }
        $request->status = ConstantHelper::STATUS_ACTIVE;
        $roles = Role::where('is_visible',1)->where('agent_available', 0)->pluck('name', 'name')->all();
        $agents = $this->agent->dataProvider($request);
        $selectedAgent = null;
        if ($request->has('agent')) {
            $selectedAgent = $this->agent->findByUuid($request->agent);
        }
        if ($request->has('agent') || auth()->user()->agent_id != '' || $model->agent_id != '') {
            $roles = Role::where('is_visible', 1)->where('agent_available', 1)->pluck('name', 'name')->all();
        }
        $userRole = $model->roles->pluck('name', 'name')->all();
        return view('admin.user.edit', ['model' => $model, 'roles' => $roles, 'userRole' => $userRole, 'agents' => $agents, 'selectedAgent' => $selectedAgent]);
    }
    public function update(UserRequest $request, $id)
    {

        try {
            DB::BeginTransaction();
            $model = $this->user->find($id);
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'agent_id' => $request->agent_id ?? null,

            ];
            if ($request->password) {
                $data['password'] = Hash::make($request->password);
            }
            $this->user->updateById($id, $data);
            DB::table('model_has_roles')->where('model_id', $id)->delete();
            $model->assignRole($request->input('roles'));
            DB::commit();
            if ($request->has('agent')) {
                return redirect()->route('admin.user.index', ['agent' => $request->agent])->with('flash_success', 'The record has been updated successfully.');
            }
            return redirect()->route('admin.user.index')->with('flash_success', 'The record has been updated successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be updated.');
        }
    }
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->user->find($id);
            if ($model->delete()) {
                return response()->json(['status' => 0, 'message' => 'The record has been deleted successfully.'], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! record cannot be deleted.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function trash(Request $request)
    {
        $request->trash = true;

        $dataProvider = $this->user->dataProvider($request);

        return view('admin.user.trash', ['dataProvider' => $dataProvider]);
    }

    public function restore(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->user->where('id', $id)->withTrashed()->firstOrFail();
            if ($model->restore()) {
                return response()->json(['status' => 0, 'message' => 'The data has been restored successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! data cannot be restored.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function changePassword(Request $request)
    {
        $messages = [
            'current_password.required' => 'Please enter current password',
            'new_password.required' => 'Please enter new password',
            'confirm_password.required' => 'Please enter confirm password',
            'confirm_password.same' => 'Confirm password should match with new password'
        ];

        $rules = array(
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        );

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['status' => 'false', 'errors' => $validator->errors()]);
        } else {
            $user = Auth::user();
            if (Hash::check($request->current_password, Auth::user()->password)) {
                $data['password'] = Hash::make($request->new_password);
                $message = 'Password updated successfully';
                $user = $this->user->updateById($user->id, $data);

                return response()->json(['status' => 'ok', 'message' => $message, 'response' =>  $user], 200);
            } else {
                $message = 'Current password is incorrect';

                return response()->json(['error' => 'false', 'message' => $message], 200);
            }
        }
    }
    public function getRole($company)
    {
        $company = $this->company->findBy('id', $company);
        return response()->json([
            'success' => true,
            'roles' => $company->companyType->roles,
        ], 200);
    }
}
