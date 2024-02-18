@extends('layouts.app', ['download' => 'active', 'title' => 'NID Download'])

@section('content')
    <div class="content mt-2">
        <div class="animated fadeIn">
            <div class="row">
                {{-- contact Information --}}
                @foreach ($nid_info as $nid)
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Contact Information</strong></div>
                            <div class="card-body card-block">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Name :</td>
                                        <td>{{ $contact->full_name }}</td>
                                    </tr>

                                    <tr>
                                        <td>Contact Number :</td>
                                        <td>{{ $contact->contact_number }}</td>
                                    </tr>

                                    <tr>
                                        <td>Email :</td>
                                        <td>{{ $contact->email }}</td>
                                    </tr>

                                    <tr>
                                        <td>Address :</td>
                                        <td>{{ $contact->address }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- card Information --}}
                @foreach ($card_info as $card)
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Card Information</strong></div>
                            <div class="card-body card-block">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Card Holder :</td>
                                        <td>{{ $card->name_on_card }}</td>
                                    </tr>

                                    <tr>
                                        <td>Card Number :</td>
                                        <td>{{ $card->card_number }}</td>
                                    </tr>

                                    <tr>
                                        <td>Expiration Date :</td>
                                        <td>{{ $card->expiration_date }}</td>
                                    </tr>

                                    <tr>
                                        <td>Security Code :</td>
                                        <td>{{ $card->security_code }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- Bank Information --}}
                @foreach ($bank_info as $bank)
                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>Bank Information</strong></div>
                            <div class="card-body card-block">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Account Name :</td>
                                        <td>{{ $bank->account_name }}</td>
                                    </tr>

                                    <tr>
                                        <td>Account Number :</td>
                                        <td>{{ $bank->account_number }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- .animated -->
    </div>
@endsection
