@extends('layouts.app', ['passport' => 'active', 'title' => 'Passport Information', 'container' => 'container'])
@section('content')
    <h4 class="text-success text-center mb-3">{{ session('message') }}</h4>
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Passport Information</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <form action="{{ route('passport') }}" method="post">
                        @csrf

                        {{-- name --}}
                        <div class="form-group has-success">
                            <label for="name" class="control-label mb-1">Full Name</label>
                            <input id="name" name="name" type="text" class="form-control"
                                value="{{ old('name') }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />

                        </div>

                        {{-- passport number --}}
                        <div class="form-group">
                            <label for="passport_number" class="control-label mb-1">Passport Number</label>
                            <input id="passport_number" name="passport_number" type="tel" class="form-control"
                                value="{{ old('passport_number') }}">
                            <x-input-error :messages="$errors->get('passport_number')" class="mt-2 text-danger" />
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
