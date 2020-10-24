@extends('layouts.dashboard')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Card-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom example example-compact">
                        <div class="card-header">
                            <h2 class="card-title">Admin Information</h2>
                        </div>
                        <!--begin::Form-->
                        <form class="form">
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="mb-2">
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>Name :</label>
                                                <input name="name" class="form-control" value="{{$admin->name}}" disabled />
                                            </div>
                                            <div class="col-lg-6">
                                                <label>email :</label>
                                                <input  name="email" class="form-control" value="{{$admin->email}}" disabled />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>Address :</label>
                                                <input class="form-control" value="{{$admin->address}}" disabled />
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Phone :</label>
                                                <input class="form-control" value="{{$admin->phone}}" disabled />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <a href="{{route('dashboard.admins.index')}}">
                                            <button type="button" class="btn btn-primary font-weight-bold mr-2">Back</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
