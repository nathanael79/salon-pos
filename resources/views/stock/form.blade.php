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
                                <label>Date</label>
                                <div class="input-group date">
                                    <input type="text" name="date" class="form-control" value="{{ date('d/m/Y') }}" id="kt_datepicker_3_modal" />
                                    <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Item</label>
                                @if($params['method'] === 'PUT')
                                    <select class="form-control select2" id="item_select2" name="item_id">
                                        <option label="Label"></option>
                                        @foreach($params['items'] as $item)
                                            @if($item->id === $params['data']->id)
                                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                            @else
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                @else
                                    <select class="form-control select2" id="item_select2" name="item_id">
                                        <option label="Label"></option>
                                        @foreach($params['data'] as $datum)
                                            <option value="{{ $datum->id }}">{{ $datum->name }}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label>Amount:</label>
                                <input type="number" min="0" name="value" class="form-control" value="{{ is_null($params['data']) ? '' : $params['data']->value}}"/>
                            </div>
                            <div class="col-lg-4">
                                <label>Type</label>
                                <select class="form-control select2" id="type_select2" name="type">
                                    @if($params['method'] === 'PUT')
                                        <option label="Label"></option>
                                        <option value="IN" {{ $params['data']->type === 'IN' ? 'selected' : ''}}>IN</option>
                                        <option value="OUT" {{ $params['data']->type === 'OUT' ? 'selected' : '' }}>OUT</option>
                                    @endif
                                </select>
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
    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.0.4')}}"></script>
    <script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js?v=7.0.4')}}"></script>
    <script>
        // basic
        $('#item_select2').select2({
            placeholder: "Select an item",
            allowClear: true
        });

        $('#type_select2').select2({
            placeholder: "Select a type",
            allowClear: true
        });
    </script>
@stop
