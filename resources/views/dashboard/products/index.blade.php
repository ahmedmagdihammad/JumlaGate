@extends('layouts.dashboard')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->
            <div class="alert alert-custom alert-white alert-shadow gutter-b" style="margin-top:-20px">
                <div class="alert-text">
                    <!--begin: Search Form-->
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                            <select class="form-control" id="kt_datatable_search_status">
                                                <option value="">All</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Delivered</option>
                                                <option value="3">Canceled</option>
                                                <option value="4">Success</option>
                                                <option value="5">Info</option>
                                                <option value="6">Danger</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                            <select class="form-control" id="kt_datatable_search_type">
                                                <option value="">All</option>
                                                <option value="1">Online</option>
                                                <option value="2">Retail</option>
                                                <option value="3">Direct</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                            </div>
                        </div>
                    <!--end::Search Form-->
                </div>
            </div>
            <!--end::Notice-->
            <!--begin::Row-->
            <div class="row">
                @foreach( $products as $product)
                <div class="col-lg-4">
                    <!--begin::List Widget 8-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">{{$product->name}}</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-ver"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon-eye"></i>
																		</span>
                                                    <span class="navi-text">Show</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-edit"></i>
																		</span>
                                                    <span class="navi-text">Edit</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-trash"></i>
																		</span>
                                                    <span class="navi-text">Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0 pb-1">
                            <!--begin::Item-->
                            <div class="mb-10">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center col-12">
                                    <img src="{{asset('test.jpg')}}" style="margin:auto;height:150px" alt="" />
                                </div>
                                <!--end::Section-->
                                <!--begin::Desc-->
                                <h3 class="text-dark-50 mt-10 font-weight-boldest text-center">{{$product->company->name_en}}</h3>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row col-12 m-0">
                            @foreach($product->prices as $price)
                                <div class="d-flex align-items-center mb-9 bg-gray-300 rounded p-5 col-5 m-3 ">
                                    <!--begin::Icon-->

                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1 text-center">{{$price->price}} EGP</a>
                                        <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1 text-center"><del>{{$price->discount}} EGP</del></a>
                                        <span style="font-weight:bold;color:red;text-align:center">Dozen : {{$price->from}} - {{$price->to}}</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            @endforeach
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end: Card-->
                    <!--end::List Widget 8-->
                </div>
                @endforeach
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
@push('scripts')
    <script src="{{asset('admin_assets/js/pages/crud/ktdatatable/base/data-ajax.js')}}"></script>
@endpush
