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
                            <h2 class="card-title">{{__('New Admin')}}</h2>
                        </div>
                        <!--begin::Form-->
                        <form class="form" id="kt_form" action="{{route('dashboard.admins.store')}}" method = "POST">
                            @csrf
                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-custom alert-light-danger" role="alert" id="kt_form_2_msg" >
                                    <div class="alert-icon">
                                        <i class="flaticon2-bell-5"></i>
                                    </div>
                                    <div class="alert-text font-weight-bold">Validation Error , Change a few things up and try submitting again.</div>
                                    <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span>
                                                <i class="ki ki-close"></i>
                                            </span>
                                    </button>
                                    </div>
                                </div>
                                @endif
                                <div class="mb-3">
                                    <div class="mb-2">
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* {{__('Name')}} :</label>
                                                <input type="text" name="name" class="form-control" placeholder="{{__('Enter Your Name')}}" value="{{old('name')}}" />
                                                @if ($errors->has('name'))
                                                <div>
                                                    <p class="invalid-input">{{ $errors->first('name') }}</p>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* {{__('E-mail')}} :</label>
                                                <input type="email" name="email" class="form-control" placeholder="{{__('Enter Your E-mail')}}" value="{{old('email')}}" />
                                                @if ($errors->has('email'))
                                                <div>
                                                    <p class="invalid-input">{{ $errors->first('email') }}</p>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* {{__('Address')}} :</label>
                                                <input type="text" name="address" class="form-control" placeholder="{{__('Enter Your Address')}}" value="{{old('address')}}" />
                                                @if ($errors->has('address'))
                                                <div>
                                                    <p class="invalid-input">{{ $errors->first('address') }}</p>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* {{__('Phone')}} :</label>
                                                <input type="number" name="phone" class="form-control" placeholder="{{__('Enter Your Phone')}}" value="{{old('phone')}}" />
                                                @if ($errors->has('phone'))
                                                <div>
                                                    <p class="invalid-input">{{ $errors->first('phone') }}</p>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* {{__('Password')}} :</label>
                                                <input type="password" name="password" class="form-control" placeholder="{{__('Enter Your Password')}}" value="{{old('password')}}" />
                                                @if ($errors->has('password'))
                                                <div>
                                                    <p class="invalid-input">{{ $errors->first('password') }}</p>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* {{__('Confirm Password')}} :</label>
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="{{__('Enter Your Password Again')}}" value="{{old('password_confirmation')}}" />
                                                @if ($errors->has('password_confirmation'))
                                                <div>
                                                    <p class="invalid-input">{{ $errors->first('password_confirmation') }}</p>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <button type="reset" class="btn btn-light-primary font-weight-bold">{{__('Cancel')}}</button>
                                        <button type="submit" class="btn btn-primary font-weight-bold mr-2">{{__('Submit')}}</button>
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
