<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\IngredientRequest;
use App\Models\Ingredient;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class IngredientController extends Controller
{

    private $name = 'ingredients';

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
        $ingredients = Ingredient::get();

        return DataTables::of($ingredients)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->editColumn('created_at', function (Ingredient $ingredient) {
                return $ingredient->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.'.$this->name.'.create');

    }// end of create

    public function store(IngredientRequest $request)
    {
        $requestData = $request->validated();
        Ingredient::create($requestData);
        session()->flash('success', 'Added Successfully');
        return redirect()->route('admin.'.$this->name.'.index');

    }// end of store

    public function edit(Ingredient $ingredient)
    {
        return view('admin.'.$this->name.'.edit', compact('ingredient'));

    }// end of edit

    public function update(IngredientRequest $request, Ingredient $ingredient)
    {
        $requestData = $request->validated();
        $ingredient->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.'.$this->name.'.index');

    }// end of update

    public function destroy(Ingredient $ingredient)
    {
        $this->delete($ingredient);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $ingredient = Ingredient::FindOrFail($recordId);
            $this->delete($ingredient);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Ingredient $ingredient)
    {
        $ingredient->delete();
    }// end of delete

}//end of controller
