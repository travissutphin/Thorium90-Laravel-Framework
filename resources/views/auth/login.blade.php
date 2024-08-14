@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <div class="p-4 p-md-5 d-flex flex-column align-items-center gradient-form text-white h-100">
                                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid mb-4" style="width: 100px;">
                                <h4 class="mb-5">Team</h4>
                                <div class="form-outline mb-4 w-100">
                                     <input type="text" id="username" class="form-control form-control-md" placeholder="Username" />
                                </div>
                                <div class="form-outline mb-4 w-100">
                                    <input type="password" id="password" class="form-control form-control-md" placeholder="Password" />
                                </div>
                                <div class="pt-1 mb-4 w-100">
                                    <button type="submit" class="btn btn-md btn-block gradient-custom-2 text-white w-100">Log In</button>
                                </div>
                                <div class="text-center mb-4">
                                    <a href="{{ route('password.request') }}" class="text-white small no-underline">Forgot password?</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center pt-4">
                                    <span>Don't have an account?</span>
                                    <a href="{{ route('register') }}" class="ml-2 text-white">Create New</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center gradient-background">
                            <div class="text-white p-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">We are more than just a company</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection