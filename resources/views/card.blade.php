@extends('layouts.app', ['card' => 'active'])
@section('content')
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Card Information</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <form action="#" method="post" novalidate="novalidate">
                        @csrf

                        {{-- name on Card --}}
                        <div class="form-group has-success">
                            <label for="name_on_card" class="control-label mb-1">Name on card</label>
                            <input id="name_on_card" name="name_on_card" type="text" class="form-control">
                            <x-input-error :messages="$errors->get('name_on_card')" class="mt-2 text-danger" />

                        </div>

                        {{-- card number --}}
                        <div class="form-group">
                            <label for="card_number" class="control-label mb-1">Card number</label>
                            <input id="card_number" name="card_number" type="tel" class="form-control">
                            <x-input-error :messages="$errors->get('card_number')" class="mt-2 text-danger" />

                        </div>

                        {{-- card expiration --}}
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="expiration_date" class="control-label mb-1">Expiration</label>
                                    <input id="expiration_date" name="expiration_date" type="date" class="form-control"
                                        placeholder="YYYY/MM/DD">
                                    <x-input-error :messages="$errors->get('expiration_date')" class="mt-2 text-danger" />
                                </div>
                            </div>

                            {{-- security code --}}
                            <div class="col-6">
                                <label for="security_code" class="control-label mb-1">Security code</label>
                                <div class="input-group">
                                    <input id="security_code" name="security_code" type="tel" class="form-control">
                                    <x-input-error :messages="$errors->get('security_code')" class="mt-2 text-danger" />
                                </div>
                            </div>
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
