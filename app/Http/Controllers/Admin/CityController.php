<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Helpers\MediaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CityRequest;
use App\Models\Province;
use App\Repositories\CityRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    protected $city;

    public function __construct(CityRepository $city)
    {
        $this->middleware(['permission:city-list|city-add|city-edit|city-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:city-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:city-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:city-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:city-change-status'], ['only' => ['changeStatus']]);
        $this->city = $city;
    }

    public function index(Request $request)
    {
        $dataProvider = $this->city->dataProvider($request);
        return view('admin.city.index', ['dataProvider' => $dataProvider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('admin.city.create', compact('provinces'));
    }
    public function store(CityRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->except('image', 'icon');
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;

            if ($request->hasFile('image')) {
                $filelocation = MediaHelper::upload($request->file('image'), 'city');
                $data['image'] = $filelocation['storage'];
            }
            if ($request->hasFile('icon')) {
                $filelocation = MediaHelper::upload($request->file('icon'), 'city');
                $data['icon'] = $filelocation['storage'];
            }
            $this->city->create($data);
            DB::commit();
            return redirect()->route('admin.city.index')->with('flash_success', 'The record has been added successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function edit($id)
    {
        $model = $this->city->findByUuid($id);
        $provinces = Province::all();
        return view('admin.city.edit', ['model' => $model, 'provinces' => $provinces]);
    }

    public function update(CityRequest $request, $id)
    {
        $model = $this->city->findByUuid($id);
        try {
            DB::beginTransaction();
            $data = $request->except('image');
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;
            if ($request->hasFile('image')) {
                if (file_exists('storage/' . $model->image) && !empty($model->image)) {
                    MediaHelper::destroy($model->image);
                }
                $filelocation = MediaHelper::upload($request->file('image'), 'city');
                $data['image'] = $filelocation['storage'];
            }
            if ($request->hasFile('icon')) {
                if (file_exists('storage/' . $model->icon) && !empty($model->icon)) {
                    MediaHelper::destroy($model->icon);
                }
                $filelocation = MediaHelper::upload($request->file('icon'), 'city');
                $data['icon'] = $filelocation['storage'];
            }
            $this->city->update($id, $data);
            DB::commit();
            return redirect()->route('admin.city.index')->with('flash_success', 'The record has been updated successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function changeStatus(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->city->findByUuid($id);
            $model->status = $model->status == ConstantHelper::STATUS_ACTIVE ? ConstantHelper::STATUS_INACTIVE : ConstantHelper::STATUS_ACTIVE;
            if ($model->save()) {
                return response()->json(['status' => 0, 'message' => 'The status has been updated successfully.', 'data' => $model->status], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! status cannot be updated.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function destroyImage(Request $request, $id)
    {
        $model = $this->city->find($id);
        if ($model) {
            switch ($request->post('type')) {

                case 'image':
                    MediaHelper::destroy($model->image);
                    $model->image = null;
                    break;
                case 'icon':
                    MediaHelper::destroy($model->icon);
                    $model->icon = null;
                    break;
            }
            $model->save();
            $message = 'Deleted successfully.';
            return response()->json(['status' => 'ok', 'message' => $message], 200);
        }

        return response()->json(['status' => 'error', 'message' => ''], 422);
    }
    public function destroy(Request $request, $id)
    {

        if ($request->ajax()) {
            $model = $this->city->findByUuid($id);
            if ($model->delete()) {
                return response()->json(['status' => 0, 'message' => 'The record has been deleted successfully.'], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! record cannot be deleted.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
    public function getDistrict($province)
    {
        $districts = DB::table('districts')->where('province_id', $province)->orderBy('name', 'asc')->get();
        return response()->json([
            'success' => true,
            'districts' => $districts,
        ], 200);
    }
}
