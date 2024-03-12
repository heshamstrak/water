@php $name = 'galleries' @endphp
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
                {{--poster--}}
                <div class="form-group">
                    <label class="text-capitalize">Image</label>
                    <input type="file" name="image" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
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




