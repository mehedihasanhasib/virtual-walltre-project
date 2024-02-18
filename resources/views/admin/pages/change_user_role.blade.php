@extends('admin.admin_dashboard')
@section('content')
    <div class="card">
       
        <div class="card-body">
    
            <div id="pay-invoice">
                <div class="card-body">

                    <form action="{{ route('role_change') }}" method="POST">
                        @csrf
                        {{-- role name --}}

                        <input type="hidden" name="user_id" value="{{ $user_id }}">
                        <div class="form-group has-success">
                            <label for="role_name" class="control-label mb-1">Select Role:</label>
                            <select name="user_role" class="form-select" aria-label="Default select example">
                                @foreach ($roles as $role)
                                <option value="{{ $role->role_name }}">{{ $role->role_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-lg btn-info btn-block">
                                <span>Change Role</span>
                            </button>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div> <!-- .card -->
@endsection
