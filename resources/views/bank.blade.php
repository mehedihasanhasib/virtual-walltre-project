@extends('layouts.app', ['bank' => 'active', 'title' => 'Bank Information Upload', 'container' => 'container'])
@section('content')
    <h4 class="text-success text-center mb-3">{{ session('message') }}</h4>

    <div class="card mt-2">
        <div class="card-header">
            <strong class="card-title">Bank Information</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">

                    <form action="{{ route('bank') }}" method="post">
                        @csrf
                        {{-- account name --}}
                        <div class="form-group has-success">
                            <label for="account_name" class="control-label mb-1">Bank Account Name</label>
                            <input id="account_name" name="account_name" type="text" class="form-control cc-name valid"
                                value="{{ old('account_name') }}">
                            <x-input-error :messages="$errors->get('account_name')" class="mt-2 text-danger" />
                        </div>

                        {{-- account number --}}
                        <div class="form-group">
                            <label for="account_number" class="data-label mb-1">Bank Account Number</label>
                            <input id="account_number" name="account_number" type="tel" class="form-control"
                                value="{{ old('account_number') }}">
                            <x-input-error :messages="$errors->get('account_number')" class="mt-2 text-danger" />
                        </div>

                        <div>
                            <button type="submit" class="btn btn-lg btn-info btn-block">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div> <!-- .card -->
@endsection
