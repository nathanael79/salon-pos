@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">TRANSACTION (FIDELIA-{{ $params['transaction']->UUID }})</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <!-- Button trigger modal-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                Add Service
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Service</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Total</th>
                            <th>Officer</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!-- Modal-->
        <div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--begin::Form-->
                        <form class="form" method="POST" action="{{ $params['url'] }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Service</label>
                                    <select class="form-control select2" id="service_select2" name="service_id">
                                        <option label="Label"></option>
                                        @foreach($params['services'] as $datum)
                                            <option value="{{ $datum->id }}">{{ $datum->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Officer</label>
                                    <select class="form-control select2" id="officer_select2" name="officer_id">
                                        <option label="Label"></option>
                                        @foreach($params['officers'] as $datum)
                                            <option value="{{ $datum->id }}">{{ $datum->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Discount</label>
                                    <select class="form-control select2" id="discount_select2" name="discount">
                                        <option label="Label"></option>
                                        <option value="0">0%</option>
                                        @for($i=10;$i<=100;$i+=10)
                                            <option value="{{ $i }}">{{ $i  }} %</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">CUSTOMER INFORMATION</h3>
                </div>
                <!--begin::Form-->
                <form class="form" action="{{ $params['information']['url'] }}" method="POST">
                    @if($params['information']['method'] === 'PUT')
                        @method('PUT')
                    @endif
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Member:</label>
                            <select class="form-control select2" id="member_select2" name="member_id">
                                <option label="Label"></option>
                                @foreach($params['members'] as $datum)
                                    <option value="{{ $datum->id }}">{{ $datum->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Customer Name:</label>
                            <input type="text" class="form-control form-control-solid" name="customer_name" id="customer_name" />
                        </div>
                        <div class="form-group">
                            <label>Total: </label>
                            <input type="text" name="total" class="form-control form-control-solid" value="{{ \App\Http\Helper\RupiahFormatter::format($params['transaction']->details->sum('total')) }}" id="total" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Discount: </label>
                            <select class="form-control select2" id="discount_info_select2" name="discount_info">
                                <option label="Label"></option>
                                <option value="0">0%</option>
                                @for($i=10;$i<=100;$i+=10)
                                    <option value="{{ $i }}">{{ $i  }} %</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Must PAID: </label>
                            <input type="text" name="must_paid" class="form-control form-control-solid" id="mustPaid" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Payment Amount: </label>
                            <input type="text" class="form-control form-control-solid" id="paymentAmount" onkeyup="changeCalculation()"/>
                        </div>
                        <div class="form-group">
                            <label>Change: </label>
                            <input type="text" name="change" class="form-control form-control-solid" id="change" readonly/>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="button" name="draft" class="btn btn-warning mr-2">Draft</button>
                            </div>
                            <div class="col-lg-6 text-right">
                                <a href="{{ route('transaction_delete', ['transaction' => $params['transaction']]) }}" class="btn btn-secondary mr-2">Cancel</a>
                                <button type="submit" name="submit" class="btn btn-primary">Paid</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@stop
@section('js')
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.4')}}"></script>
    <script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js?v=7.0.4')}}"></script>
    <script>
        // basic
        $('#service_select2').select2({
            placeholder: "Select a service",
            allowClear: true
        });

        $('#officer_select2').select2({
            placeholder: "Select an officer",
            allowClear: true
        });

        $('#discount_select2').select2({
            placeholder: "Select a discount",
            allowClear: true
        });

        $('#discount_info_select2').select2({
            placeholder: "Select a discount",
            allowClear: true
        }).on('select2:select', function (e) {
            var data = e.params.data;
            var total = parseInt($('#total').val().replace(/,.*|[^0-9]/g, ''), 10);
            var discount = parseInt(data.text.replace(' %', ''));
            var mustPaid = total - (total*(discount/100));
            $('#mustPaid').val(convertToRupiah(mustPaid));
        });

        $('#member_select2').select2({
            placeholder: "Select a member",
            allowClear: true
        }).on('select2:select', function (e) {
            var data = e.params.data;
            $('#customer_name').val(data.text).prop('readonly', true);
        });

        function convertToRupiah(angka)
        {
            var rupiah = '';
            var angkarev = angka.toString().split('').reverse().join('');
            for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
            return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
        }

        function changeCalculation(){
            var mustPaid = parseInt($('#mustPaid').val().replace(/,.*|[^0-9]/g, ''), 10);
            var paymentAmount = parseInt($('#paymentAmount').val());
            var change = paymentAmount - mustPaid;
            $('#change').val(convertToRupiah(change));
        }

    </script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script>
        var KTDatatablesDataSourceAjaxServer = function() {

            var initTable1 = function() {
                var table = $('#kt_datatable');

                // begin first table
                table.DataTable({
                    responsive: true,
                    searchDelay: 500,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: '{{ route('transaction_details_datatable', ['uuid' => $params['transaction']->UUID ]) }}',
                        type: 'GET',
                    },
                    bLengthChange: false,
                    searching: false,
                    columns: [
                        {data: 'DT_RowIndex'},
                        {data: 'service_name'},
                        {data: 'service_price'},
                        {data: 'discount'},
                        {data: 'total'},
                        {data: 'officer'},
                        {data: 'Actions'},
                    ],
                });
            };

            return {

                //main function to initiate the module
                init: function() {
                    initTable1();
                },

            };

        }();

        jQuery(document).ready(function() {
            KTDatatablesDataSourceAjaxServer.init();
        });
    </script>
    <!--end::Page Scripts-->
@stop

