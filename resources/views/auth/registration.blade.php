@extends('layouts.app')

@section('title', 'Registration')

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
                                <h4 class="mb-5">Join Our Team</h4>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-outline mb-4 w-100">
                                        <input type="text" id="first_name" name="first_name" class="form-control form-control-md @error('first_name') is-invalid @enderror" placeholder="First Name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus />
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4 w-100">
                                        <input type="text" id="last_name" name="last_name" class="form-control form-control-md @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{ old('last_name') }}" required autocomplete="last_name" />
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4 w-100">
                                        <input type="email" id="email" name="email" class="form-control form-control-md @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4 w-100">
                                        <input type="password" id="password" name="password" class="form-control form-control-md @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password" />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4 w-100">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-md" placeholder="Confirm Password" required autocomplete="new-password" />
                                    </div>
                                    <div class="pt-1 mb-4 w-100">
                                        <button type="submit" class="btn btn-md btn-block gradient-custom-2 text-white w-100">Register</button>
                                    </div>
                                </form>
                                <div class="d-flex align-items-center justify-content-center pt-4">
                                    <p class="mb-0 me-2 text-white">Already have an account?</p>
                                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-md">Log In</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center gradient-background">
                            <div class="text-white p-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">We are more than just a company</h4>
                                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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