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
                                <label>Service Name:</label>
                                <input type="text" name="name" class="form-control" value="{{ is_null($params['data']) ? '' : $params['data']->name }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>Price:</label>
                                <input type="number" min="0" name="price" class="form-control" value="{{ is_null($params['data']) ? '' : $params['data']->price }}"/>
                            </div>
                            <div class="col-lg-12" style="top: 14px;">
                                <label>Information</label>
                                <textarea class="form-control summernote" name="information">{{ is_null($params['data']) ? '' : $params['data']->information }}</textarea>
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
