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
                            <h3 class="card-title">Advanced Validation</h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form" id="kt_form">
                            <div class="card-body">
                                <div class="alert alert-custom alert-light-success d-none" role="alert" id="kt_form_2_msg">
                                    <div class="alert-icon">
                                        <i class="flaticon2-bell-5"></i>
                                    </div>
                                    <div class="alert-text font-weight-bold">Oh snap! Change a few things up and try submitting again.</div>
                                    <div class="alert-close">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span>
																	<i class="ki ki-close"></i>
																</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="mb-2">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>* Cardholder Name:</label>
                                                <input type="text" name="billing_card_name" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>* Card Number:</label>
                                                <input type="text" name="billing_card_number" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>* Exp Month:</label>
                                                <select class="form-control" name="billing_card_exp_month">
                                                    <option value="">Select</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>* Exp Year:</label>
                                                <select class="form-control" name="billing_card_exp_year">
                                                    <option value="">Select</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>* CVV:</label>
                                                <input type="number" class="form-control" name="billing_card_cvv" placeholder="" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>
                                <div class="mb-3">
                                    <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">Billing Address
                                        <i data-toggle="tooltip" data-width="auto" class="mb-3__help" title="If different than the corresponding address"></i></h3>
                                    <div class="mb-2">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>* Address 1:</label>
                                                <input type="text" name="billing_address_1" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Address 2:</label>
                                                <input type="text" name="billing_address_2" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-5">
                                                <label>* City:</label>
                                                <input type="text" class="form-control" name="billing_city" placeholder="" value="" />
                                            </div>
                                            <div class="col-lg-5">
                                                <label>* State:</label>
                                                <input type="text" class="form-control" name="billing_state" placeholder="" value="" />
                                            </div>
                                            <div class="col-lg-2">
                                                <label>* ZIP:</label>
                                                <input type="text" class="form-control" name="billing_zip" placeholder="" value="" />
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
    <script src="{{asset('js/form_validations/products.js')}}"></script>
@endpush
