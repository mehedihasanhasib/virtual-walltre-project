@extends('layouts.app', ['contact' => 'active', 'title' => 'Contact Information Upload', 'container' => 'container'])
@section('content')
    <h4 class="text-success text-center mb-3">{{ session('message') }}</h4>
    <div class="card mt-2">
        <div class="card-header">
            <strong class="card-title">Contact Information</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <form action="{{ route('contact') }}" method="post" novalidate="novalidate">
                        @csrf

                        {{-- name on Card --}}
                        <div class="form-group has-success">
                            <label for="full_name" class="control-label mb-1">Full Name</label>
                            <input id="full_name" name="full_name" type="text" class="form-control cc-name valid"
                                value="{{ old('full_name') }}">
                            <x-input-error :messages="$errors->get('full_name')" class="mt-2 text-danger" />
                        </div>

                        {{-- Contact number --}}
                        <div class="form-group">
                            <label for="contact_number" class="control-label mb-1">Contact number</label>
                            <input id="contact_number" name="contact_number" type="tel" class="form-control"
                                value="{{ old('contact_number') }}">
                            <x-input-error :messages="$errors->get('contact_number')" class="mt-2 text-danger" />

                        </div>

                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email" class="control-label mb-1">Email</label>
                            <input id="email" name="email" type="email" class="form-control"
                                value="{{ old('email') }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                        </div>

                        {{-- address --}}
                        <div class="form-group">
                            <label for="address" class="control-label mb-1">Address</label>
                            <input id="address" name="address" type="text" class="form-control"
                                value="{{ old('address') }}">
                            <x-input-error :messages="$errors->get('address')" class="mt-2 text-danger" />
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
