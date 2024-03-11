<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Yajra\DataTables\DataTables;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_blogs')->only(['index']);
        $this->middleware('permission:create_blogs')->only(['create', 'store']);
        $this->middleware('permission:update_blogs')->only(['edit', 'update']);
        $this->middleware('permission:delete_blogs')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.orders.index');

    }// end of index

    public function data()
    {
        $orders = Order::get();

        return DataTables::of($orders)
            ->addColumn('record_select', 'admin.blogs.data_table.record_select')
            ->addColumn('name', function (Order $order) {
                return $order->user->name;
            })
            ->addColumn('price', function (Order $order) {
                return $order->price * $order->quantity .'.00';
            })
            ->editColumn('created_at', function (Order $order) {
                return $order->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.orders.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data



    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));

    }// end of edit

    public function update(Order $order)
    {
        $order->update(['type'=>request()->type]);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.orders.index');

    }// end of update

    public function destroy(Order $order)
    {
        $this->delete($order);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $order = Order::FindOrFail($recordId);
            $this->delete($blog);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Order $order)
    {
        $order->delete();
    }// end of delete

    public function show(Order $order) {
        return view('admin.orders.show', compact('order'));
    }
}//end of controller
