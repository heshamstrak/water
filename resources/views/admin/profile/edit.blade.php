@extends('layouts.admin.app')
@section('content')

<div class="content-body"><!-- users edit start -->
    <section class="users-edit">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                                <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Password</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">

                            <!-- users edit account form start -->
                            <form action="{{route('admin.profile.update')}}" method="POST">
                                @csrf
                                @method('put')
            
                                @include('admin.partials._errors')
            
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('email', auth()->user()->name)}}" required="" data-validation-required-message="This name field is required" >
                                            <div class="help-block"></div></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>E-mail</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email', auth()->user()->email)}}" required="" data-validation-required-message="This email field is required" >
                                            <div class="help-block"></div></div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save changes</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <!-- users edit account form ends -->
                        </div>
                        <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                            <!-- users edit Info form start -->
                            <form action="{{ route('admin.profile.password.update') }}" method="POST">
                                @csrf
                                @method('put')
            
                                @include('admin.partials._errors')
            
                                {{--old_password--}}
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" name="old_password" class="form-control" value="" required>
                                </div>
            
                                {{--password--}}
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" value="" required>
                                </div>
            
                                {{--password_confirmation--}}
                                <div class="form-group">
                                    <label>Password Confirmation</label>
                                    <input type="password" name="password_confirmation" class="form-control" value="" required>
                                </div>
            
                                {{--submit--}}
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Save changes</button>
                                </div>
            
                            </form>
                            <!-- users edit Info form ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection