@extends('admin.admin_dashboard', ['create_role' => 'active'])
@section('content')
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Contact Information</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        {{-- role name --}}
                        <div class="form-group has-success">
                            <label for="role_name" class="control-label mb-1">Package Name</label>
                            <input id="role_name" name="role_name" type="text" class="form-control cc-name valid"
                                value="{{ old('role_name') }}">
                            <x-input-error :messages="$errors->get('role_name')" class="mt-2 text-danger" />
                        </div>

                        <div>
                            <button type="submit" class="btn btn-lg btn-info btn-block">
                                <span>Create Role</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div> <!-- .card -->
@endsection
