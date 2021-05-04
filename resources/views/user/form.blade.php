@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">{{ $params['action'] }}</h3>
                </div>
                <!--begin::Form-->
                <form class="form" method="POST" action="{{ $params['url'] }}">
                    @csrf
                    @if($params['method'] === 'PUT')
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>User Role:</label>
                                <div class="radio-inline">
                                    <label class="radio radio-solid">
                                        <input type="radio" name="user_role" checked="checked" value="ADMIN" />ADMIN
                                        <span></span></label>
                                    <label class="radio radio-solid">
                                        <input type="radio" name="user_role" value="CASHIER" />CASHIER
                                        <span></span></label>
                                </div>
                                <span class="form-text text-muted">Please select user role</span>
                            </div>
                            <div class="col-lg-6">
                                <label>User Type:</label>
                                <div class="radio-inline">
                                    <label class="radio radio-solid">
                                        <input type="radio" name="user_type" checked="checked" value="OFFICER" />OFFICER
                                        <span></span></label>
                                    <label class="radio radio-solid">
                                        <input type="radio" name="user_type" value="MEMBER" />MEMBER
                                        <span></span></label>
                                </div>
                                <span class="form-text text-muted">Please select user type</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control" value="{{ is_null($params['data']) ? '' : $params['data']->name }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ is_null($params['data']) ? '' : $params['data']->email }}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="{{ is_null($params['data']) ? '' : $params['data']->username }}"/>
                            </div>
                            <div class="col-lg-6">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Telephone</label>
                                <input type="number" min="0" name="telephone" class="form-control" value="{{ is_null($params['data']) ? '' : $params['data']->telephone }}"/>
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
    </div>
@stop
@section('js')
    <script src="{{asset('assets/js/pages/crud/forms/editors/summernote.js?v=7.0.4')}}"></script>
@stop
