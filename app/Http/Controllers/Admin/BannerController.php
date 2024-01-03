<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ConstantHelper;
use App\Helpers\MediaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerRequest;
use App\Models\Province;
use App\Repositories\BannerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    protected $banner;

    public function __construct(BannerRepository $banner)
    {
        $this->middleware(['permission:banner-list|banner-add|banner-edit|banner-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:banner-add'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:banner-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:banner-delete'], ['only' => ['destroy']]);
        $this->middleware(['permission:banner-change-status'], ['only' => ['changeStatus']]);
        $this->banner = $banner;
    }

    public function index(Request $request)
    {
        $dataProvider = $this->banner->dataProvider($request);
        return view('admin.banner.index', ['dataProvider' => $dataProvider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }
    public function store(BannerRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->except('image');
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;

            if ($request->hasFile('image')) {
                $filelocation = MediaHelper::upload($request->file('image'), 'banner');
                $data['image'] = $filelocation['storage'];
            }

            $this->banner->create($data);
            DB::commit();
            return redirect()->route('admin.banner.index')->with('flash_success', 'The record has been added successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->withInput()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function edit($id)
    {
        $model = $this->banner->findByUuid($id);
        return view('admin.banner.edit', ['model' => $model]);
    }

    public function update(Request $request, $id)
    {

        $model = $this->banner->findByUuid($id);
        $rules = [
            'title' => 'required'
        ];
        if ($model->image == '') {
            $rules['image'] = 'required';
        }
        $this->validate($request, $rules);
        try {
            DB::beginTransaction();
            $data = $request->except('image');
            $data['status'] = $request->has('status') ? $request->status : ConstantHelper::STATUS_INACTIVE;
            if ($request->hasFile('image')) {
                if (file_exists('storage/' . $model->image) && !empty($model->image)) {
                    MediaHelper::destroy($model->image);
                }
                $filelocation = MediaHelper::upload($request->file('image'), 'banner');
                $data['image'] = $filelocation['storage'];
            }
            $this->banner->update($id, $data);
            DB::commit();
            return redirect()->route('admin.banner.index')->with('flash_success', 'The record has been updated successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('flash_error', 'Oops! record cannot be added.');
        }
    }
    public function changeStatus(Request $request, $id)
    {
        if ($request->ajax()) {
            $model = $this->banner->findByUuid($id);
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
        $model = $this->banner->find($id);
        if ($model) {
            switch ($request->post('type')) {

                case 'image':
                    MediaHelper::destroy($model->image);
                    $model->image = null;
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
            $model = $this->banner->findByUuid($id);
            if ($model->delete()) {
                return response()->json(['status' => 0, 'message' => 'The record has been deleted successfully.'], 200);
            }
            return response()->json(['status' => 1, 'message' => 'Oops! record cannot be deleted.'], 200);
        }
        return response()->json(['status' => 1, 'message' => 'Oops! access denied.'], 200);
    }
}
