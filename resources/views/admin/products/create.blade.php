@php $name = 'products' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Create</h3>
    </div>
    <div class="card-body">
        <form class="form" action="{{ route('admin.'.$name.'.store') }}" method="POST" enctype="multipart/form-data">
            <div class="card-body">
  
                @csrf
                @method('post')
                @include('admin.partials._errors')
                {{-- Name --}}
                @php $nameInput = 'name' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput) }}" required>
                </div>

                {{--Main Description--}}
                @php $nameInput = 'main_description' @endphp
                <div class="form-group">
                    <label class="text-capitalize">Main Description <span class="text-danger">*</span></label>
                    <textarea name="{{$nameInput}}" class="form-control" cols="30" rows="10">{{ old($nameInput) }}</textarea>
                </div>

                {{--Description--}}
                @php $nameInput = 'description' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                    <textarea name="{{$nameInput}}" class="form-control" cols="30" rows="10">{{ old($nameInput) }}</textarea>
                </div>

                <div class="row">
                    <div class="col-3">
                        {{-- Count --}}
                        @php $nameInput = 'count' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                            <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput) }}" required>
                        </div>
 
                    </div>
                    <div class="col-3">
                        {{-- Price --}}
                        @php $nameInput = 'price' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                            <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput) }}" required>
                        </div>
                    </div>
                    <div class="col-3">
                        @php $nameInput = 'discount_type' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                            <select name="{{$nameInput}}" class=form-control>
                                <option value="">Select Your Discount Type</option>
                                <option value="0">Percent</option>
                                <option value="1">Amount</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        {{-- discount --}}
                        @php $nameInput = 'discount' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">{{$nameInput}}</label>
                            <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput) }}" required>
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
                            <option value="{{$category->id}}" {{$category->id == old($nameInput) ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div> 

                <div class="input-images-2" style="padding-top: .5rem;padding-bottom: .5rem;"></div>

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
@push('js')
<script>
    $('.input-images-2').imageUploader({
        imagesInputName: 'images',
        preloadedInputName: 'old'
    });
</script>

@endpush


