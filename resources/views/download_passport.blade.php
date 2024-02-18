@extends('layouts.app', ['download' => 'active', 'title' => 'Passport Download'])

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
                                @foreach ($data as $passport)
                                    <tr>
                                        <td>Name :</td>
                                        <td>{{ $passport->name }}</td>
                                    </tr>

                                    <tr>
                                        <td>Passport Number :</td>
                                        <td>{{ $passport->passport_number }}</td>
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
