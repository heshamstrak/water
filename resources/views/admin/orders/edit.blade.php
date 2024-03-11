@php $name = 'orders' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$order->name}}</h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="{{ route('admin.'.$name.'.update', $order->id) }}">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--Type--}}
                <div class="form-group">
                    <label>Type</label>
                    <select name="type" class="form-control">
                        <option value="pending" {{$order->type == 'pending' ? 'selected' : ''}}>Pending</option>
                        <option value="shipping" {{$order->type == 'shipping' ? 'selected' : ''}}>Shipping</option>
                        <option value="receipt" {{$order->type == 'receipt' ? 'selected' : ''}}>Receipt</option>
                    </select>
                </div>
            
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection




