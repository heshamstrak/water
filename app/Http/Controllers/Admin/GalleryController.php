<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Models\Gallery;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }// end of __construct

    public function index()
    {
         return view('admin.galleries.index');

    }// end of index

    public function data()
    {
        $galleries = Gallery::get();

        return DataTables::of($galleries)
            ->addColumn('record_select', 'admin.galleries.data_table.record_select')
            ->addColumn('image', function (Gallery $gallery) {
                return view('admin.galleries.data_table.image', compact('gallery'));
            })
            ->editColumn('created_at', function (Gallery $gallery) {
                return $gallery->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.galleries.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.galleries.create');

    }// end of create

    public function store(GalleryRequest $request)
    {
        $requestData = $request->validated();
        if ($request->image) {
            $request->image->store('public/uploads/galleries');
            $requestData['image'] = $request->image->hashName();
        }

        Gallery::create($requestData);
        session()->flash('success', 'Added Successfully');
        return redirect()->route('admin.galleries.index');

    }// end of store

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));

    }// end of edit

    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $requestData = $request->validated();

        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/galleries/' . $gallery->image);
            $request->image->store('public/uploads/galleries/');
            $requestData['image'] = $request->image->hashName();
        }

        $gallery->update($requestData);

        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.galleries.index');

    }// end of update

    public function destroy(Gallery $gallery)
    {
        $this->delete($gallery);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $gallery = Gallery::FindOrFail($recordId);
            $this->delete($gallery);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Gallery $gallery)
    {
        Storage::disk('local')->delete('public/uploads/galleries/' . $gallery->image);

        $gallery->delete();

    }// end of delete

}//end of controller
