@extends('layouts.app', ['title' => 'NID Download'])

@section('content')
    <div class="content mt-2">
        <div class="animated fadeIn">
            <div class="row">
                {{-- contact Information --}}

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header"><strong>Contact Information</strong></div>
                        <div class="card-body card-block">
                            <table class="table table-borderless">
                                @foreach ($data as $nid)
                                    <tr>
                                        <td>Name :</td>
                                        <td>{{ $nid->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Father Name :</td>
                                        <td>{{ $nid->father_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Mother Name :</td>
                                        <td>{{ $nid->mother_name }}</td>
                                    </tr>

                                    <tr>
                                        <td>NID Number :</td>
                                        <td>{{ $nid->nid_number }}</td>
                                    </tr>

                                    <tr>
                                        <td>Date of Birth :</td>
                                        <td>{{ $nid->dob }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>
@endsection
