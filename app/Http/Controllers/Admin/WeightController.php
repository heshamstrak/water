<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WeightRequest;
use App\Models\Weight;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class WeightController extends Controller
{

    private $name = 'weights';

    public function __construct()
    {
        $this->middleware('permission:read_'.$this->name)->only(['index']);
        $this->middleware('permission:create_'.$this->name)->only(['create', 'store']);
        $this->middleware('permission:update_'.$this->name)->only(['edit', 'update']);
        $this->middleware('permission:delete_'.$this->name)->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.'.$this->name.'.index');

    }// end of index

    public function data()
    {
        $weights = Weight::get();

        return DataTables::of($weights)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->editColumn('created_at', function (Weight $weight) {
                return $weight->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.'.$this->name.'.create');

    }// end of create

    public function store(WeightRequest $request)
    {
        $requestData = $request->validated();
        Weight::create($requestData);
        session()->flash('success', 'Added Successfully');
        return redirect()->route('admin.'.$this->name.'.index');

    }// end of store

    public function edit(Weight $weight)
    {
        return view('admin.'.$this->name.'.edit', compact('weight'));

    }// end of edit

    public function update(WeightRequest $request, Weight $weight)
    {
        $requestData = $request->validated();
        $weight->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.'.$this->name.'.index');

    }// end of update

    public function destroy(Weight $weight)
    {
        $this->delete($weight);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $weight = Weight::FindOrFail($recordId);
            $this->delete($weight);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Weight $weight)
    {
        $weight->delete();
    }// end of delete

}//end of controller
