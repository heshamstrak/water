@php $name = 'roles' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$role->name}}</h3>
    </div>
    <div class="card-body">
        <form class="form" action="{{ route('admin.'.$name.'.update', $role->id) }}" method="POST">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--name--}}
                <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" autofocus class="form-control"  value="{{ old('name', $role->name) }}" required>
                </div>

                <h5>Permissions <span class="text-danger">*</span></h5>

                @php
                    $models = ['roles', 'admins', 'categories', 'blogs'];
                @endphp


                <table class="table">
                    <thead>
                    <tr>
                        <th>Model</th>
                        <th>Permissions</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($models as $model)
                            <tr>
                                <td>{{$model}}</td>
                                <td>

                                    @php
                                        $permissionMaps = ['create', 'read', 'update', 'delete'];
                                    @endphp

                                    @foreach ($permissionMaps as $permissionMap)
                                        <div class="animated-checkbox mx-2" style="display:inline-block;">
                                            <label class="m-0">
                                                <input type="checkbox" value="{{ $permissionMap . '_' . $model }}" name="permissions[]" {{ $role->hasPermission( $permissionMap . '_' . $model) ? 'checked' : '' }} class="role">
                                                <span class="label-text">{{$permissionMap}} </span>
                                            </label>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table><!-- end of table -->

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






