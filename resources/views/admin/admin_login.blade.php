@extends('layouts.guest')

@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">

                <div class="login-form">
                    <h3 style="color: blue; text-align: center">Admin Login</h3>
                    <form action="{{ route('admin.login') }}" method="POST">
                        @csrf
                        <div class="text-center">
                            <x-input-error :messages="session('message')" class="mt-2 text-danger" />
                        </div>
                        {{-- email --}}
                        <div class="form-group">
                            <label>Email address</label>
                            <input name="email" type="email" class="form-control" placeholder="Email">
                        </div>

                        {{-- password --}}
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            {{-- <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" /> --}}

                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>

                        <div class="register-link m-t-15 text-center">
                            <p>email: admin@admin.com</p>
                            <p>password: 12345678</p>
                        </div>

                        <div class="register-link m-t-15 text-center">
                            <p>
                                <a href="{{ route('login') }}" class="text-primary">Login</a> <span>as User</span>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
