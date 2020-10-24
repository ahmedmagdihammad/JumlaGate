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
                            <h1 class="card-title">{{$company->name_en}} Factory</h1 class="card-title">
                        </div>
                        <!--begin::Form-->
                        <form>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="mb-2">
                                        <div class="form-group row">
                                            <div class="col-12 text-center">
                                                <div class="image-input image-input-outline image-input-circle" id="kt_image">
                                                    <div class="image-input-wrapper" style="background-image: url({{asset('factory_logos/'.$company->logo)}})"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* Name ( English ) :</label>
                                                <input class="form-control"value="{{$company->name_en}}" disabled />
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* Name ( Arabic ):</label>
                                                <input  class="form-control" value="{{$company->name_ar}}" disabled />
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* Phone ( 1 ) :</label>
                                                <input  class="form-control" value="{{$company->phone_1}}" disabled />
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* Phone ( 2 ) :</label>
                                                <input class="form-control"  value="{{$company->phone_2}}" disabled />
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* email :</label>
                                                <input  class="form-control" value="{{$company->email}}"disabled  />
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* Owner :</label>
                                                <input  class="form-control"  value="{{$company->owner}}" disabled />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* About the factory :</label>
                                                <textarea class="form-control" id="kt_autosize" rows="1" disabled >{{$company->brief}}</textarea>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* Address :</label>
                                                <input class="form-control"  value="{{$company->address}}" disabled />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>* Factory Categories :</label>
                                                <select class="form-control select2" id="kt_select2_3" name="categories[]" multiple="multiple">
                                                    @foreach($company_categories as $category)

                                                        <option value="{{$category->id}}" selected disabled >{{$category->name_en}}</option>

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
                                        <a href="{{route('dashboard.companies.index')}}">
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
@push('scripts')
    <script src="{{asset('admin_assets/js/pages/crud/forms/widgets/autosize.js')}}"></script>
    <script>
        // multi select
        $('#kt_select2_3, #kt_select2_3_validate').select2({
            placeholder: "Select The Factory Categories",
        });
    </script>
@endpush
