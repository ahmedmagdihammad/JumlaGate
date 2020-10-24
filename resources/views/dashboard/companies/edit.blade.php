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
                            <h2 class="card-title">Edit Factory</h2>
                        </div>
                        <!--begin::Form-->
                        <form class="form" id="kt_form" action="{{route('dashboard.companies.update',$company->id)}}" method = "POST" enctype="multipart/form-data">
                            @method('PUT')
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
                                        <label class="col-12 text-center mb-5">Edit Logo For The Factory</label>
                                        <div class="form-group row">
                                            <div class="col-12 text-center">
                                                <div class="image-input image-input-outline image-input-circle" id="kt_image">
                                                    <div class="image-input-wrapper" style="background-image: url({{   asset($company->logo ? 'factory_logos/'.$company->logo : 'admin_assets/media/logos/logo.png' ) }})"></div>
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove" />
                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
                                                </div>
                                                <span class="form-text text-muted mt-5 mb-5">Allowed file types: png, jpg, jpeg, svg.</span>
                                                @if ($errors->has('logo'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('logo') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* Name ( English ) :</label>
                                                <input type="text" name="name_en" class="form-control"  value="{{old('name_en') ?? $company->name_en}}" />
                                                @if ($errors->has('name_en'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('name_en') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* Name ( Arabic ):</label>
                                                <input type="text" name="name_ar" class="form-control"  value="{{old('name_ar') ?? $company->name_ar}}" />
                                                @if ($errors->has('name_ar'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('name_ar') }}</p>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* Phone ( 1 ) :</label>
                                                <input type="number" name="phone_1" class="form-control" value="{{old('phone_1') ?? $company->phone_1}}" />
                                                @if ($errors->has('phone_1'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('phone_1') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* Phone ( 2 ) :</label>
                                                <input type="number" name="phone_2" class="form-control"  value="{{old('phone_2') ?? $company->phone_2}}" />
                                                @if ($errors->has('phone_2'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('phone_2') }}</p>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* email :</label>
                                                <input type="email" name="email" class="form-control" value="{{old('email') ?? $company->email}}" />
                                                @if ($errors->has('email'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('email') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* Owner :</label>
                                                <input type="text" name="owner" class="form-control" value="{{old('owner') ?? $company->owner}}" />
                                                @if ($errors->has('owner'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('owner') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* About the factory :</label>
                                                <textarea class="form-control" id="kt_autosize" rows="1" name="brief" placeholder="Enter A Brief About The Factory">{{old('brief') ?? $company->brief}}</textarea>
                                                @if ($errors->has('brief'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('brief') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* Address :</label>
                                                <input type="text" name="address" class="form-control" placeholder="Enter Your Address" value="{{old('address') ?? $company->address}}" />
                                                @if ($errors->has('address'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('address') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>* Factory Categories :</label>
                                                <select class="form-control select2" id="kt_select2_3" name="categories[]" multiple="multiple">
                                                    @foreach($categories as $category)

                                                        <option value="{{$category->id}}" @if(in_array($category->id,$company_categories)) selected @endif >{{$category->name_en}}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
                                        <button type="submit" class="btn btn-primary font-weight-bold mr-2">Submit</button>
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
@push('scripts')
    <script src="{{asset('admin_assets/js/pages/crud/forms/widgets/autosize.js')}}"></script>
    <script src="{{asset('admin_assets/js/pages/crud/file-upload/image-input.js')}}"></script>
    <script>
        // multi select
        $('#kt_select2_3, #kt_select2_3_validate').select2({
            placeholder: "Select The Factory Categories",
        });
    </script>
@endpush
