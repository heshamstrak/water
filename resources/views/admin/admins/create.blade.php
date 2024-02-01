@php $name = 'admins' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Create</h3>
    </div>
    <div class="card-body">
        <form class="form" action="{{ route('admin.'.$name.'.store') }}" method="POST">
            <div class="card-body">
  
                @csrf
                @method('post')
                @include('admin.partials._errors')

                {{--name--}}
                <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" autofocus class="form-control" value="{{ old('name') }}" required>
                </div>

                {{--email--}}
                <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>

                {{--password--}}
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control" value="" required>
                </div>

                {{--password_confirmation--}}
                <div class="form-group">
                    <label>Password Confirmation <span class="text-danger">*</span></label>
                    <input type="password" name="password_confirmation" class="form-control" value="" required>
                </div>

                {{--role_id--}}
                <div class="form-group">
                    <label>Role <span class="text-danger">*</span></label>
                    <select name="role_id" class="form-control" required>
                        <option value="">Choose Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $role->id == old('role_id') ? 'selected' : '' }}>{{ $role->name }}</option>
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




