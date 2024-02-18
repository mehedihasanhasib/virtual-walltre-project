@extends('layouts.app', ['dashboard' => 'active', 'title' => 'Dashboard'])

@section('navigation')
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="menu-item active">
                        <a href="{{ route('dashboard') }}" class="dropdown-toggle ">
                            <i class="menu-icon fa fa-laptop"></i>
                            Dashboard
                        </a>
                    </li>


                    <li class="menu-item {{ $passport ?? null }}">
                        <a href="{{ route('passport') }}">
                            <i class="menu-icon fa fa-passport"></i>
                            Passport
                        </a>
                    </li>

                    <li class="menu-item {{ $nid ?? null }}">
                        <a href="{{ route('nid') }}">
                            <i class="menu-icon fa fa-id-card"></i>
                            National ID
                        </a>
                    </li>



                </ul><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('images/admin.jpg') }}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" id="logoutButton" style="cursor: pointer"><i
                                    class="fa fa-power -off"></i>Logout</a>
                        </div>

                        <form method="POST" action="{{ route('logout') }}" id="logout">
                            @csrf
                        </form>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
    @endsection

    @section('content')
        <div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    {{-- contact Information --}}
                    @foreach ($contact_info as $contact)
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
            <form method="POST" action="{{ route('logout') }}" id="logout">
                @csrf
            </form>
        @endsection

        @section('script')
            <script>
                jQuery(document).ready(function($) {
                    "use strict";

                    //logout function
                    $(document).ready(function() {
                        // Attach a click event to the anchor tag
                        $('#logoutButton').on('click', function(e) {
                            e.preventDefault(); // Prevent the default behavior (opening a link)

                            // Submit the form
                            $('#logout').submit();
                        });
                    });
                });
            </script>
        @endsection
