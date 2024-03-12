@php $name = 'galleries' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$gallery->name}}</h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="{{ route('admin.'.$name.'.update', $gallery->id) }}"  enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--image--}}
                <div class="form-group">
                    <label class="text-capitalize">Image</label>
                    <input type="file" name="image" id="input-file-now" class="dropify" @if(isset($gallery)) data-default-file="{{$gallery->image_path}}" data-show-remove="false" @endif data-height="585"/>
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




