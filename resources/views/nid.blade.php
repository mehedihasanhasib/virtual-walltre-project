@extends('layouts.app', ['nid' => 'active', 'title' => 'NID Information Upload', 'container' => 'container'])
@section('content')
    <div class="card">
        <div class="card-header">
            <strong class="card-title">NID Information</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <form action="{{ route('nid') }}" method="post">
                        @csrf

                        {{-- name on Card --}}
                        <div class="form-group has-success">
                            <label for="name" class="control-label mb-1">Full Name</label>
                            <input id="name" name="name" type="text" class="form-control"
                                value="{{ old('name') }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />

                        </div>

                        {{-- Father Name --}}
                        <div class="form-group has-success">
                            <label for="father_name" class="control-label mb-1">Father Name</label>
                            <input id="father_name" name="father_name" type="text" class="form-control"
                                value="{{ old('father_name') }}">
                            <x-input-error :messages="$errors->get('father_name')" class="mt-2 text-danger" />
                        </div>

                        {{-- Mother Name --}}
                        <div class="form-group has-success">
                            <label for="mother_name" class="control-label mb-1">Mother Name</label>
                            <input id="mother_name" name="mother_name" type="text" class="form-control"
                                value="{{ old('mother_name') }}">
                            <x-input-error :messages="$errors->get('mother_name')" class="mt-2 text-danger" />
                        </div>

                        {{-- NID number --}}
                        <div class="form-group">
                            <label for="nid_number" class="control-label mb-1">NID Number</label>
                            <input id="nid_number" name="nid_number" type="tel" class="form-control"
                                value="{{ old('nid_number') }}">
                            <x-input-error :messages="$errors->get('nid_number')" class="mt-2 text-danger" />

                        </div>

                        {{-- DOB --}}
                        <div class="form-group">
                            <label for="dob" class="control-label mb-1">Date of Birth</label>
                            <input id="dob" name="dob" type="date" class="form-control"
                                value="{{ old('dob') }}">
                            <x-input-error :messages="$errors->get('dob')" class="mt-2 text-danger" />
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
