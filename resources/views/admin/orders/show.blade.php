@php $name = 'orders' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Show {{$order->user->name}}</h3>
    </div>
    <div class="card-body">
        {!!$order->notes != null ? '<h4>'.$order->notes.'</h4>' : ''!!}
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @php
                    if($order->type == 'pending') {
                        $rows = \App\Models\Order::where('user_id', $order->user_id)->where('type', 'pending')->get();
                    } elseif($order->type == 'shipping') {
                        $rows = \App\Models\Order::where('user_id', $order->user_id)->where('type', 'shipping')->get();
                    }
                @endphp
                @foreach($rows as $row)
                <tr>
                  <th><img src="{{ Storage::url('uploads/products/'.$row->product_id.'/'.$row->product->images->first()->image) }}" alt="" style="max-width: 150px; height: 99px;"></th>
                  <td>{{$row->product->name}}</td>
                  <td>{{$row->quantity}}</td>
                  <td>{{$row->price * $row->quantity}}.00</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        @php
            if($order->type == 'pending') {
                $rowsPirce = \App\Models\Order::where('user_id', $order->user_id)->where('type', 'pending')->sum(\DB::raw('price * quantity'));
            } elseif($order->type == 'shipping') {
                $rowsPirce = \App\Models\Order::where('user_id', $order->user_id)->where('type', 'shipping')->sum(\DB::raw('price * quantity'));
            }
        @endphp
        <h3>Total Price : {{$rowsPirce}}</h3>
    </div>  
</div>
@endsection




