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
                            <div class="col-lg-12">
                                <label>Item Name</label>
                                <input type="text" name="name" class="form-control" value="{{ is_null($params['data']) ? '' : $params['data']->name }}" />
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
