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
                            <h2 class="card-title">Add New Product</h2>
                        </div>
                        <!--begin::Form-->
                        <form class="form" id="kt_form" action="{{route('dashboard.products.store')}}" method = "POST" enctype="multipart/form-data">
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
                                            <label>* Factory :</label>
                                            <select class="form-control select2" id="kt_select_fac" name="company_id">
                                                <option></option>
                                            @foreach($companies as $company)
                                                <option value="{{$company->id}}">{{$company->name_en}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('company_id'))
                                                <div>
                                                    <p class="invalid-input">{{ $errors->first('company_id') }}</p>
                                                </div>
                                            @endif
                                        </div>
                                            <div class="col-lg-6">
                                            <label>* Category :</label>
                                            <select class="form-control select2" id="kt_select_cat" name="category_id">
                                                <option></option>
                                            </select>
                                            @if ($errors->has('category_id'))
                                                <div>
                                                    <p class="invalid-input">{{ $errors->first('category_id') }}</p>
                                                </div>
                                            @endif
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* Name :</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter The Product Name" value="{{old('name')}}" />
                                                @if ($errors->has('name'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('name') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* Minimum Quantity:</label>
                                                <input type="number" name="min_quantity" class="form-control" placeholder="أقل كميه للطلب 1 دسنه" value="{{old('min_quantity')}}" />
                                                @if ($errors->has('min_quantity'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('min_quantity') }}</p>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>* Product Description</label>
                                                <textarea class="form-control" id="kt_autosize_1" rows="1" name="prod_desc" placeholder="Enter The Product Description">{{old('prod_desc')}}</textarea>
                                                @if ($errors->has('prod_desc'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('prod_desc') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <label>* Delivery And Payment Details :</label>
                                                <textarea class="form-control" id="kt_autosize_2" rows="1" name="shipping_pay_desc" placeholder="Enter The Delivery And Payment Details">{{old('shipping_pay_desc')}}</textarea>
                                                @if ($errors->has('shipping_pay_desc'))
                                                    <div>
                                                        <p class="invalid-input">{{ $errors->first('shipping_pay_desc') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-8"></div>
                                        <div id="kt_repeater_1">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label text-right mt-7"><h5><b>Price : </b></h5></label>
                                                <div data-repeater-list="prices" class="col-lg-10">
                                                    <div data-repeater-item="" class="form-group row align-items-center">
                                                        <div class="col-md-2">
                                                            <label>From:</label>
                                                            <input type="number" class="form-control" name="from" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>To :</label>
                                                            <input type="number" class="form-control" name="to" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Price :</label>
                                                            <input type="number" class="form-control" name="price" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Discount :</label>
                                                            <input type="number" class="form-control" name="discount" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger mt-8">
                                                                <i class="la la-trash-o"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label text-right"></label>
                                                <div class="col-lg-4">
                                                    <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                        <i class="la la-plus"></i>Add</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
                                        <button type="submit" class="btn btn-primary font-weight-bold mr-2">Next</button>
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
        $('#kt_select_fac,#kt_select_cat').select2({
            placeholder: "Select",
        });
    </script>
    <script>
        // multi select
        $('#kt_select2_3, #kt_select2_3_validate').select2({
            placeholder: "Select The Factory Categories",
        });
    </script>
    <script src="{{asset('admin_assets/js/pages/crud/forms/widgets/form-repeater.js')}}"></script>

    <script type="text/javascript">
        $("select[name='company_id']").change(function(){
            const company_id = $(this).val();
            $.ajax({
                url: "/dashboard/getCategories",
                method: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    company_id:company_id
                },
                success: function(data) {
                    $('select[name="category_id"]').empty();

                    $.each(JSON.parse(data), function(key, value){

                        $('select[name="category_id"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                }
            });
        });
    </script>

@endpush
