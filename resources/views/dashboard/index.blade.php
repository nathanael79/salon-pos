@extends('layout.master')
@section('css')
    <style>
        .wrap{
            position: relative;
        }
        .wrap a{
            position: absolute;
            width:100%;
            height:100%;
            top:0px;
            left:0px;
        }
    </style>
@stop
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-lg-6 col-xl-4 mb-5">
            <!--begin::Iconbox-->
            <a href="{{ route('transaction_page') }}">
                <div class="card card-custom mb-8 mb-lg-0">
                <div class="card-body">
                    <div class="d-flex align-items-center p-5">
                        <div class="mr-6">
                            <span class="svg-icon svg-icon-4x">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                        <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <div class="d-flex flex-column">
                            <p class="text-dark font-weight-bold font-size-h4 mb-3">Transaction</p>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            <!--end::Iconbox-->
        </div>
        <div class="col-lg-6 col-xl-4 mb-5">
            <a href="{{ route('service_page') }}">
                <!--begin::Iconbox-->
                <div class="card card-custom mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-4x">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="text-dark font-weight-bold font-size-h4 mb-3">Services</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Iconbox-->
            </a>
        </div>
        <div class="col-lg-6 col-xl-4 mb-5">
            <a href="{{ route('stock_page') }}">
                <!--begin::Iconbox-->
                <div class="card card-custom mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                            <span class="svg-icon svg-icon-4x">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="text-dark font-weight-bold font-size-h4 mb-3">Report</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Iconbox-->
            </a>
        </div>
        <div class="col-lg-6 col-xl-4 mb-5">
            <a href="{{ route('stock_page') }}">
                <!--begin::Iconbox-->
                <div class="card card-custom mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                            <span class="svg-icon svg-icon-4x">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="text-dark font-weight-bold font-size-h4 mb-3">Stock</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Iconbox-->
            </a>
        </div>
        <div class="col-lg-6 col-xl-4 mb-5">
            <a href="{{ route('item_page') }}">
                <!--begin::Iconbox-->
                <div class="card card-custom wave mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-4x svg-icon-success">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="9" cy="15" r="6" />
                                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="text-dark font-weight-bold font-size-h4 mb-3">Item</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Iconbox-->
            </a>
        </div>
        <div class="col-lg-6 col-xl-4 mb-5">
            <a href="{{ route('user_page') }}">
                <!--begin::Iconbox-->
                <div class="card card-custom wave mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-4x svg-icon-success">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="9" cy="15" r="6" />
                                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="text-dark font-weight-bold font-size-h4 mb-3">User</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Iconbox-->
            </a>
        </div>
{{--        <div class="col-lg-6 col-xl-4 mb-5">--}}
{{--            <!--begin::Iconbox-->--}}
{{--            <div class="card card-custom wave wave-animate-slow mb-8 mb-lg-0">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="d-flex align-items-center p-5">--}}
{{--                        <div class="mr-6">--}}
{{--														<span class="svg-icon svg-icon-warning svg-icon-4x">--}}
{{--															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->--}}
{{--															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--																	<rect x="0" y="0" width="24" height="24" />--}}
{{--																	<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />--}}
{{--																	<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />--}}
{{--																	<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />--}}
{{--																	<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />--}}
{{--																</g>--}}
{{--															</svg>--}}
{{--                                                            <!--end::Svg Icon-->--}}
{{--														</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex flex-column">--}}
{{--                            <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Get Started</a>--}}
{{--                            <div class="text-dark-75">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy since the 1500s.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Iconbox-->--}}
{{--            <!--begin::Code example-->--}}
{{--            <div class="example example-compact mt-2">--}}
{{--                <div class="example-tools">--}}
{{--                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>--}}
{{--                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>--}}
{{--                </div>--}}
{{--                <div class="example-code">--}}
{{--                    <div class="example-highlight">--}}
{{--													<pre>--}}
{{--<code class="language-html">--}}
{{--                &lt;div class="card card-custom wave wave-animate-slow mb-8 mb-lg-0"&gt;--}}
{{--                 &lt;div class="card-body"&gt;--}}
{{--                  &lt;div class="d-flex align-items-center p-5"&gt;--}}
{{--                   &lt;div class="mr-6"&gt;--}}
{{--                    &lt;span class="svg-icon svg-icon-warning svg-icon-4x"&gt;--}}
{{--                     &lt;svg&gt;--}}
{{--                      ...--}}
{{--                     &lt;/svg&gt;--}}
{{--                    &lt;/span&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                   &lt;div class="d-flex flex-column"&gt;--}}
{{--                    &lt;a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3"&gt;--}}
{{--                    Get Started--}}
{{--                    &lt;/a&gt;--}}
{{--                    &lt;div class="text-dark-75"&gt;--}}
{{--                     ...--}}
{{--                    &lt;/div&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                  &lt;/div&gt;--}}
{{--                 &lt;/div&gt;--}}
{{--                &lt;/div&gt;--}}
{{--    </code>--}}
{{--</pre>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Code example-->--}}
{{--        </div>--}}
{{--        <div class="col-lg-6 col-xl-4 mb-5">--}}
{{--            <!--begin::Iconbox-->--}}
{{--            <div class="card card-custom wave wave-animate-slower mb-8 mb-lg-0">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="d-flex align-items-center p-5">--}}
{{--                        <div class="mr-6">--}}
{{--														<span class="svg-icon svg-icon-success svg-icon-4x">--}}
{{--															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Settings.svg-->--}}
{{--															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--																	<rect opacity="0.200000003" x="0" y="0" width="24" height="24" />--}}
{{--																	<path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" fill="#000000" opacity="0.3" />--}}
{{--																	<path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" fill="#000000" />--}}
{{--																</g>--}}
{{--															</svg>--}}
{{--                                                            <!--end::Svg Icon-->--}}
{{--														</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex flex-column">--}}
{{--                            <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Tutorials</a>--}}
{{--                            <div class="text-dark-75">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy since the 1500s.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Iconbox-->--}}
{{--            <!--begin::Code example-->--}}
{{--            <div class="example example-compact mt-2">--}}
{{--                <div class="example-tools">--}}
{{--                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>--}}
{{--                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>--}}
{{--                </div>--}}
{{--                <div class="example-code">--}}
{{--                    <div class="example-highlight">--}}
{{--													<pre>--}}
{{--<code class="language-html">--}}
{{--                &lt;div class="card card-custom wave wave-animate-slower mb-8 mb-lg-0"&gt;--}}
{{--                 &lt;div class="card-body"&gt;--}}
{{--                  &lt;div class="d-flex align-items-center p-5"&gt;--}}
{{--                   &lt;div class="mr-6"&gt;--}}
{{--                    &lt;span class="svg-icon svg-icon-success svg-icon-4x"&gt;--}}
{{--                     &lt;svg&gt;--}}
{{--                      ...--}}
{{--                     &lt;/svg&gt;--}}
{{--                    &lt;/span&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                   &lt;div class="d-flex flex-column"&gt;--}}
{{--                    &lt;a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3"&gt;--}}
{{--                    Tutorials--}}
{{--                    &lt;/a&gt;--}}
{{--                    &lt;div class="text-dark-75"&gt;--}}
{{--                     ...--}}
{{--                    &lt;/div&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                  &lt;/div&gt;--}}
{{--                 &lt;/div&gt;--}}
{{--                &lt;/div&gt;--}}
{{--    </code>--}}
{{--</pre>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Code example-->--}}
{{--        </div>--}}
{{--        <div class="col-lg-6 col-xl-4 mb-5">--}}
{{--            <!--begin::Iconbox-->--}}
{{--            <div class="card card-custom wave wave-animate-fast">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="d-flex align-items-center p-5">--}}
{{--                        <div class="mr-6">--}}
{{--														<span class="svg-icon svg-icon-primary svg-icon-4x">--}}
{{--															<!--begin::Svg Icon | path:assets/media/svg/icons/Weather/Cloud2.svg-->--}}
{{--															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--																	<polygon points="0 0 24 0 24 24 0 24" />--}}
{{--																	<circle fill="#000000" opacity="0.3" cx="16" cy="10" r="5" />--}}
{{--																	<path d="M5.74714567,18.0425758 C4.09410362,16.9740356 3,15.1147886 3,13 C3,9.6862915 5.6862915,7 9,7 C11.7957591,7 14.1449096,8.91215918 14.8109738,11.5 L17.25,11.5 C19.3210678,11.5 21,13.1789322 21,15.25 C21,17.3210678 19.3210678,19 17.25,19 L8.25,19 C7.28817895,19 6.41093178,18.6378962 5.74714567,18.0425758 Z" fill="#000000" />--}}
{{--																</g>--}}
{{--															</svg>--}}
{{--                                                            <!--end::Svg Icon-->--}}
{{--														</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex flex-column">--}}
{{--                            <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">User Guide</a>--}}
{{--                            <div class="text-dark-75">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy since the 1500s.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Iconbox-->--}}
{{--            <!--begin::Code example-->--}}
{{--            <div class="example example-compact mt-2">--}}
{{--                <div class="example-tools">--}}
{{--                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>--}}
{{--                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>--}}
{{--                </div>--}}
{{--                <div class="example-code">--}}
{{--                    <div class="example-highlight">--}}
{{--													<pre>--}}
{{--<code class="language-html">--}}
{{--                &lt;div class="card card-custom wave wave-animate-fast"&gt;--}}
{{--                 &lt;div class="card-body"&gt;--}}
{{--                  &lt;div class="d-flex align-items-center p-5"&gt;--}}
{{--                   &lt;div class="mr-6"&gt;--}}
{{--                    &lt;span class="svg-icon svg-icon-primary svg-icon-4x"&gt;--}}
{{--                     &lt;svg&gt;--}}
{{--                      ...--}}
{{--                     &lt;/svg&gt;--}}
{{--                    &lt;/span&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                   &lt;div class="d-flex flex-column"&gt;--}}
{{--                    &lt;a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3"&gt;--}}
{{--                    User Guide--}}
{{--                    &lt;/a&gt;--}}
{{--                    &lt;div class="text-dark-75"&gt;--}}
{{--                     ...--}}
{{--                    &lt;/div&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                  &lt;/div&gt;--}}
{{--                 &lt;/div&gt;--}}
{{--                &lt;/div&gt;--}}
{{--    </code>--}}
{{--</pre>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Code example-->--}}
{{--        </div>--}}
{{--        <div class="col-lg-6 col-xl-4 mb-5">--}}
{{--            <!--begin::Iconbox-->--}}
{{--            <div class="card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-0">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="d-flex align-items-center p-5">--}}
{{--                        <div class="mr-6">--}}
{{--														<span class="svg-icon svg-icon-primary svg-icon-4x">--}}
{{--															<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Mirror.svg-->--}}
{{--															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--																	<rect x="0" y="0" width="24" height="24" />--}}
{{--																	<path d="M13,17.0484323 L13,18 L14,18 C15.1045695,18 16,18.8954305 16,20 L8,20 C8,18.8954305 8.8954305,18 10,18 L11,18 L11,17.0482312 C6.89844817,16.5925472 3.58685702,13.3691811 3.07555009,9.22038742 C3.00799634,8.67224972 3.3975866,8.17313318 3.94572429,8.10557943 C4.49386199,8.03802567 4.99297853,8.42761593 5.06053229,8.97575363 C5.4896663,12.4577884 8.46049164,15.1035129 12.0008191,15.1035129 C15.577644,15.1035129 18.5681939,12.4043008 18.9524872,8.87772126 C19.0123158,8.32868667 19.505897,7.93210686 20.0549316,7.99193546 C20.6039661,8.05176407 21.000546,8.54534521 20.9407173,9.09437981 C20.4824216,13.3000638 17.1471597,16.5885839 13,17.0484323 Z" fill="#000000" fill-rule="nonzero" />--}}
{{--																	<path d="M12,14 C8.6862915,14 6,11.3137085 6,8 C6,4.6862915 8.6862915,2 12,2 C15.3137085,2 18,4.6862915 18,8 C18,11.3137085 15.3137085,14 12,14 Z M8.81595773,7.80077353 C8.79067542,7.43921955 8.47708263,7.16661749 8.11552864,7.19189981 C7.75397465,7.21718213 7.4813726,7.53077492 7.50665492,7.89232891 C7.62279197,9.55316612 8.39667037,10.8635466 9.79502238,11.7671393 C10.099435,11.9638458 10.5056723,11.8765328 10.7023788,11.5721203 C10.8990854,11.2677077 10.8117724,10.8614704 10.5073598,10.6647638 C9.4559885,9.98538454 8.90327706,9.04949813 8.81595773,7.80077353 Z" fill="#000000" opacity="0.3" />--}}
{{--																</g>--}}
{{--															</svg>--}}
{{--                                                            <!--end::Svg Icon-->--}}
{{--														</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex flex-column">--}}
{{--                            <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Get Started</a>--}}
{{--                            <div class="text-dark-75">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy since the 1500s.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Iconbox-->--}}
{{--            <!--begin::Code example-->--}}
{{--            <div class="example example-compact mt-2">--}}
{{--                <div class="example-tools">--}}
{{--                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>--}}
{{--                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>--}}
{{--                </div>--}}
{{--                <div class="example-code">--}}
{{--                    <div class="example-highlight">--}}
{{--													<pre>--}}
{{--<code class="language-html">--}}
{{--                &lt;div class="card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-0"&gt;--}}
{{--                 &lt;div class="card-body"&gt;--}}
{{--                  &lt;div class="d-flex align-items-center p-5"&gt;--}}
{{--                   &lt;div class="mr-6"&gt;--}}
{{--                    &lt;span class="svg-icon svg-icon-success svg-icon-4x"&gt;--}}
{{--                     &lt;svg&gt;--}}
{{--                      ...--}}
{{--                     &lt;/svg&gt;--}}
{{--                    &lt;/span&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                   &lt;div class="d-flex flex-column"&gt;--}}
{{--                    &lt;a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3"&gt;--}}
{{--                    Get Started--}}
{{--                    &lt;/a&gt;--}}
{{--                    &lt;div class="text-dark-75"&gt;--}}
{{--                     ...--}}
{{--                    &lt;/div&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                  &lt;/div&gt;--}}
{{--                 &lt;/div&gt;--}}
{{--                &lt;/div&gt;--}}
{{--    </code>--}}
{{--</pre>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Code example-->--}}
{{--        </div>--}}
{{--        <div class="col-lg-6 col-xl-4 mb-5">--}}
{{--            <!--begin::Iconbox-->--}}
{{--            <div class="card card-custom wave wave-animate wave-danger mb-8 mb-lg-0">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="d-flex align-items-center p-5">--}}
{{--                        <div class="mr-6">--}}
{{--														<span class="svg-icon svg-icon-danger svg-icon-4x">--}}
{{--															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->--}}
{{--															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--																	<rect x="0" y="0" width="24" height="24" />--}}
{{--																	<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />--}}
{{--																	<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />--}}
{{--																</g>--}}
{{--															</svg>--}}
{{--                                                            <!--end::Svg Icon-->--}}
{{--														</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex flex-column">--}}
{{--                            <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Tutorials</a>--}}
{{--                            <div class="text-dark-75">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy since the 1500s.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Iconbox-->--}}
{{--            <!--begin::Code example-->--}}
{{--            <div class="example example-compact mt-2">--}}
{{--                <div class="example-tools">--}}
{{--                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>--}}
{{--                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>--}}
{{--                </div>--}}
{{--                <div class="example-code">--}}
{{--                    <div class="example-highlight">--}}
{{--													<pre>--}}
{{--<code class="language-html">--}}
{{--                &lt;div class="card card-custom wave wave-animate wave-danger mb-8 mb-lg-0"&gt;--}}
{{--                 &lt;div class="card-body"&gt;--}}
{{--                  &lt;div class="d-flex align-items-center p-5"&gt;--}}
{{--                   &lt;div class="mr-6"&gt;--}}
{{--                    &lt;span class="svg-icon svg-icon-danger svg-icon-4x"&gt;--}}
{{--                     &lt;svg&gt;--}}
{{--                      ...--}}
{{--                     &lt;/svg&gt;--}}
{{--                    &lt;/span&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                   &lt;div class="d-flex flex-column"&gt;--}}
{{--                    &lt;a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3"&gt;--}}
{{--                    Tutorials--}}
{{--                    &lt;/a&gt;--}}
{{--                    &lt;div class="text-dark-75"&gt;--}}
{{--                     ...--}}
{{--                    &lt;/div&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                  &lt;/div&gt;--}}
{{--                 &lt;/div&gt;--}}
{{--                &lt;/div&gt;--}}
{{--    </code>--}}
{{--</pre>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Code example-->--}}
{{--        </div>--}}
{{--        <div class="col-lg-6 col-xl-4">--}}
{{--            <!--begin::Iconbox-->--}}
{{--            <div class="card card-custom wave wave-animate-fast wave-success">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="d-flex align-items-center p-5">--}}
{{--                        <div class="mr-6">--}}
{{--														<span class="svg-icon svg-icon-success svg-icon-4x">--}}
{{--															<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Sketch.svg-->--}}
{{--															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--																	<rect x="0" y="0" width="24" height="24" />--}}
{{--																	<polygon fill="#000000" opacity="0.3" points="5 3 19 3 23 8 1 8" />--}}
{{--																	<polygon fill="#000000" points="23 8 12 20 1 8" />--}}
{{--																</g>--}}
{{--															</svg>--}}
{{--                                                            <!--end::Svg Icon-->--}}
{{--														</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex flex-column">--}}
{{--                            <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">User Guide</a>--}}
{{--                            <div class="text-dark-75">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy since the 1500s.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Iconbox-->--}}
{{--            <!--begin::Code example-->--}}
{{--            <div class="example example-compact mt-2">--}}
{{--                <div class="example-tools">--}}
{{--                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>--}}
{{--                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>--}}
{{--                </div>--}}
{{--                <div class="example-code">--}}
{{--                    <div class="example-highlight">--}}
{{--													<pre>--}}
{{--<code class="language-html">--}}
{{--                &lt;div class="card card-custom wave wave-animate-fast wave-success"&gt;--}}
{{--                 &lt;div class="card-body"&gt;--}}
{{--                  &lt;div class="d-flex align-items-center p-5"&gt;--}}
{{--                   &lt;div class="mr-6"&gt;--}}
{{--                    &lt;span class="svg-icon svg-icon-success svg-icon-4x"&gt;--}}
{{--                     &lt;svg&gt;--}}
{{--                      ...--}}
{{--                     &lt;/svg&gt;--}}
{{--                    &lt;/span&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                   &lt;div class="d-flex flex-column"&gt;--}}
{{--                    &lt;a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3"&gt;--}}
{{--                    User Guide--}}
{{--                    &lt;/a&gt;--}}
{{--                    &lt;div class="text-dark-75"&gt;--}}
{{--                     ...--}}
{{--                    &lt;/div&gt;--}}
{{--                   &lt;/div&gt;--}}
{{--                  &lt;/div&gt;--}}
{{--                 &lt;/div&gt;--}}
{{--                &lt;/div&gt;--}}
{{--    </code>--}}
{{--</pre>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Code example-->--}}
{{--        </div>--}}
    </div>
    <!--end::Row-->
@stop

