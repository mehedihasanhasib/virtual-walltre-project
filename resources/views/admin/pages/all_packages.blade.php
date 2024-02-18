@extends('admin.admin_dashboard', ['all_package' => 'active'])

@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Package List</strong>
                        </div>

                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Package Name</th>
                                        <th>Package Features</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($packages as $package)
                                        <tr>
                                            <td>{{ $package->package_name }}</td>
                                            <td>
                                                @foreach ($package->features as $feature)
                                                    <ul class="mx-3">
                                                        <li>{{ $feature }}</li>
                                                    </ul>
                                                @endforeach

                                            </td>
                                            <td>$ {{ $package->price }}/month</td>

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
