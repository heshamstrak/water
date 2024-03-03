@php $name = 'products' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$product->name}}</h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="{{ route('admin.'.$name.'.update', $product->id) }}">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{-- Name --}}
                @php $nameInput = 'name' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $product->{$nameInput}) }}" required>
                </div>

                {{--Main Description--}}
                @php $nameInput = 'main_description' @endphp
                <div class="form-group">
                    <label class="text-capitalize">>Main Description <span class="text-danger">*</span></label>
                    <textarea name="{{$nameInput}}" class="form-control" cols="30" rows="10">{{ old($nameInput, $product->{$nameInput}) }}</textarea>
                </div>

                {{--Description--}}
                @php $nameInput = 'description' @endphp
                <div class="form-group">
                    <label class="text-capitalize">>{{$nameInput}} <span class="text-danger">*</span></label>
                    <textarea name="{{$nameInput}}" class="form-control" cols="30" rows="10">{{ old($nameInput, $product->{$nameInput}) }}</textarea>
                </div>

                <div class="row">
                    <div class="col-3">
                        {{-- Count --}}
                        @php $nameInput = 'count' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                            <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $product->{$nameInput}) }}" required>
                        </div>

                    </div>
                    <div class="col-3">
                        {{-- Price --}}
                        @php $nameInput = 'price' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                            <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $product->{$nameInput}) }}" required>
                        </div>
                    </div>
                    <div class="col-3">
                        @php $nameInput = 'discount_type' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                            <select name="{{$nameInput}}" class=form-control>
                                <option value="">Select Your Discount Type</option>
                                <option value="0" {{$product->discount_type == 0 ? 'selected' : '' }}>Percent</option>
                                <option value="1" {{$product->discount_type == 1 ? 'selected' : '' }}>Amount</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        {{-- discount --}}
                        @php $nameInput = 'discount' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">{{$nameInput}}</label>
                            <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $product->{$nameInput}) }}" required>
                        </div> 
                    </div>
                </div>

                {{-- Category --}}
                @php $nameInput = 'category_id' @endphp
                <div class="form-group">
                    <label class="text-capitalize">Category</label>
                    <select name="{{$nameInput}}" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{$category->id == old($nameInput, $product->{$nameInput}) ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
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




