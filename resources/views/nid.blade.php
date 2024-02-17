@extends('layouts.app', ['nid' => 'active'])
@section('content')
    <div class="card">
        <div class="card-header">
            <strong class="card-title">NID Information</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <form action="#" method="post" novalidate="novalidate">
                        {{-- <div class="form-group text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                            </ul>
                        </div> --}}

                        {{-- name on Card --}}
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Full Name</label>
                            <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid"
                                data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name"
                                aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                data-valmsg-replace="true"></span>
                        </div>

                        {{-- Father Name --}}
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Father Name</label>
                            <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid"
                                data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name"
                                aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                data-valmsg-replace="true"></span>
                        </div>

                        {{-- Contact number --}}
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">NID Number</label>
                            <input id="cc-number" name="cc-number" type="tel"
                                class="form-control cc-number identified visa" value="">
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>

                        {{-- Email --}}
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Date of Birth</label>
                            <input id="cc-number" name="cc-number" type="date"
                                class="form-control cc-number identified visa" value="" data-val="true"
                                data-val-required="Please enter the card number"
                                data-val-cc-number="Please enter a valid card number">
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>



                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div> <!-- .card -->
@endsection
