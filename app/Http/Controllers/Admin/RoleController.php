<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\CompanyType;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    protected $role;

    public function __construct(Role $role)
    {
        $this->middleware(['permission:role-list|role-add|role-edit|role-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:role-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:role-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:role-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:role-change-status'], ['only' => ['changeStatus']]);
        $this->role = $role;
    }

    public function index(Request $request)
    {
        $role = $this->role->where('is_visible',true)->orderBy('id', 'ASC')->get();
        return view('admin.roles.index')->with('dataProvider', $role);
    }
    public function create()
    {
        $permissions = Permission::get()->groupBy('group');
        $rolePermissions = [];
        return view('admin.roles.create', compact('permissions', 'rolePermissions'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'nullable',
        ]);

        try {
            DB::beginTransaction();
            $role = Role::create(['name' => $request->input('name')]);
            $role->syncPermissions($request->input('permission'));
            DB::commit();
            return redirect()->route('admin.roles.index')->with('flash_success', 'The record has been added successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }

        return redirect()->route('roles.index');
    }
    public function edit($id)
    {
        $this->role = $this->role->find($id);
        $permissions = Permission::get()->groupBy('group');
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        return view('admin.roles.edit', compact('permissions', 'rolePermissions'))->with('role_data', $this->role);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'permission' => 'sometimes',
        ]);
        try {
            DB::beginTransaction();
            $this->role = $this->role->find($id);

            $this->role->syncPermissions($request->input('permission'));
            DB::commit();
            return redirect()->route('admin.roles.index')->with('flash_success', 'The record has been updated successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be updated.');
        }

        return redirect()->route('roles.index');
    }
}
