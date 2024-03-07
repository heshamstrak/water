<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use App\Models\File;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Weight;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private $name = 'products';
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
        $products = Product::get();

        return DataTables::of($products)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->addColumn('poster', function (Product $product) {
                return view('admin.'.$this->name.'.data_table.poster', compact('product'));
            })
            ->addColumn('category', function (Product $product) {
                return $product->category->name;
            })
            ->editColumn('created_at', function (Product $product) {
                return $product->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $categories = Category::get();
        $ingredients = Ingredient::get();
        $weights = Weight::get();
        return view('admin.'.$this->name.'.create', compact('categories', 'ingredients' ,'weights'));

    }// end of create

    public function store(ProductRequest $request)
    {
        $requestData = $request->validated();

        if ($request->hasFile('icon')) {
            $request->icon->store('public/uploads/products');
            $requestData['icon'] = $request->icon->hashName();
        }

        if ($request->hasFile('small_image')) {
            $request->small_image->store('public/uploads/products');
            $requestData['small_image'] = $request->small_image->hashName();
        }

        $product = Product::create($requestData);
        $product->ingredients()->sync($request->ingredients);
        $product->weights()->sync($request->weights);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $image->store('public/uploads/products/'.$product->id.'/');
                $imageName = $image->hashName();
                File::create(['image'=>$imageName, 'product_id' => $product->id]); 
            }
        }
        session()->flash('success', 'Added Successfully');
        return redirect()->route('admin.'.$this->name.'.index');

    }// end of store

    public function edit(Product $product)
    {
        $categories = Category::get();
        $ingredients = Ingredient::get();
        $weights = Weight::get();
        return view('admin.'.$this->name.'.edit', compact('product', 'categories', 'ingredients' ,'weights'));

    }// end of edit

    public function update(ProductRequest $request, Product $product)
    {
        $requestData = $request->validated();
        if ($request->hasFile('icon')) {
            Storage::disk('local')->delete('public/uploads/products/' . $product->icon);
            $request->icon->store('public/uploads/products');
            $requestData['icon'] = $request->icon->hashName();
        }

        if ($request->hasFile('small_image')) {
            Storage::disk('local')->delete('public/uploads/products/' . $product->small_image);
            $request->small_image->store('public/uploads/products');
            $requestData['small_image'] = $request->small_image->hashName();
        }
        $product->update($requestData);
        $product->ingredients()->sync($request->ingredients);
        $product->weights()->sync($request->weights);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.'.$this->name.'.index');

    }// end of update

    public function destroy(Product $product)
    {
        $this->delete($product);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));
    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {
            $product = Product::FindOrFail($recordId);
            $this->delete($product);
        }//end of for each
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));
    }// end of bulkDelete

    private function delete(Product $product)
    {
        Storage::disk('local')->delete('public/uploads/'.$this->name.'/' . $product->poster);
        $product->delete();
    }// end of delete

}//end of controller
