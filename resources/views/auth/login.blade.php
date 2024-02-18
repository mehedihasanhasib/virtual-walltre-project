@extends('layouts.guest')

@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">

                <div class="login-form">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        {{-- email --}}
                        <div class="form-group">
                            <label>Email address</label>
                            <input name="email" type="email" class="form-control" placeholder="Email">
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                        </div>

                        {{-- password --}}
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

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
                            <p>Don't have account ?
                                <a href="{{ route('register') }}" class="text-success"> Sign Up Here</a>
                            </p>

                            <p>
                                <a href="{{ route('admin.login') }}" class="text-success">Login</a> <span>as Admin</span>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
