@php $name = 'admins' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$admin->name}}</h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="{{ route('admin.'.$name.'.update', $admin->id) }}">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--name--}}
                <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" autofocus class="form-control" value="{{ old('name', $admin->name) }}" required>
                </div>

                {{--email--}}
                <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $admin->email) }}" required>
                </div>

                {{--role_id--}}
                <div class="form-group">
                    <label>Role <span class="text-danger">*</span></label>
                    <select name="role_id" class="form-control" required>
                        <option value="">Choose Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $admin->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
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




