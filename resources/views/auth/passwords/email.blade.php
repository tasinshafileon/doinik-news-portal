@extends('layouts.auth')

@section('title', 'Doinik News Portal | Reset Password')

@section('content')
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary"> {{ __('Reset Password') }}</h5>
                                    <p>Reset Password with Doinik.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ url('img/profile-img.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0"> 
                        <div>
                            <a href="index.html">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{ url('img/logo.png') }}" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        
                        <div class="p-2">
                            <div class="alert alert-success text-center mb-4" role="alert">
                                Enter your Email and instructions will be sent to you!
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">                                
                                @csrf
    
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email') }}</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus id="email" placeholder="Enter email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
            
                                <div class="text-end">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Reset Password') }}</button>
                                </div>

                            </form>
                        </div>
    
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>Remember It ? <a href="{{ route('login') }}" class="fw-medium text-primary"> {{ __('Sign In here') }}</a> </p>
                    <p>© <script>document.write(new Date().getFullYear())</script> Doinik. Crafted with <i class="mdi mdi-heart text-danger"></i> by Tasin Shafi Leon</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
