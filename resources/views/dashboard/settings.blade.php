@extends('layouts.dashboard')
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                @if(session()->has('message'))
                    <div class="alert alert-custom alert-light-success" role="alert" id="kt_form_2_msg" >
                        <div class="alert-icon">
                            <i class="flaticon2-bell-5"></i>
                        </div>
                        <div class="alert-text font-weight-bold">{{session()->get('message')}}</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span>
                                                <i class="ki ki-close"></i>
                                            </span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="card-header">
                    <h3 class="card-title">{{__('System Settings')}}</h3>
                </div>
                <!--begin::Form-->
                <form class="form" action="{{route('dashboard.settings.update',$settings)}}" method = "POST">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">{{__('Language')}}</label>
                            <div class="col-lg-8 col-md-9 col-sm-12">
                                <select class="form-control select2" id="kt_select_lang" name="lang">
                                    <option @if( $settings['lang'] == "ar") selected @endif value="ar">{{__('Arabic')}}</option>
                                    <option @if( $settings['lang'] == "en") selected @endif value="en">{{__('English')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">{{__('Theme')}}</label>
                            <div class="col-lg-8 col-md-9 col-sm-12">
                                <select class="form-control select2" id="kt_select_theme" name="theme">
                                    <option @if( $settings['theme'] == "light") selected @endif value="light">{{__('Light')}}</option>
                                    <option @if( $settings['theme'] == "dark")  selected @endif value="dark" >{{__('Dark')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">{{__('Website Status')}}</label>
                            <div class="col-lg-8 col-md-9 col-sm-12">
                                <select class="form-control select2" id="kt_select_locked" name="web_available">
                                    <option label="Label"></option>
                                    <option @if( $settings['web_available'] == "1") selected @endif value="1">{{__('Opened')}}</option>
                                    <option @if( $settings['web_available'] == "0") selected @endif value="0">{{__('Closed')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-12 ml-lg-auto text-center">
                                <button type="submit" class="btn btn-primary mr-2">{{__('Submit')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

@endsection
@push('scripts')
    <script>
        $('#kt_select_lang, #kt_select_theme ,#kt_select_locked').select2({
            placeholder: "Select",
        });
    </script>
@endpush
