@extends('admin.admin_dashboard', ['dashboard' => 'active'])

@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Users List</strong>
                        </div>

                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                {{ $user->user_role ?? 'user' }} <br>
                                            </td>
                                            <td>
                                                <form action="{{ route('role_change') }}" method="GET"
                                                    style="display: inline-block">
                                                    @csrf
                                                    <input name="user_id" type="hidden" value="{{ $user->id }}">
                                                    <button class="btn btn-sm btn-primary">Change Role</button>
                                                </form>
                                                {{-- 
                                                <form action="" style="display: inline-block">
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger" href="">Delete User</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
