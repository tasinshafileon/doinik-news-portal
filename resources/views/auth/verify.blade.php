@extends('layouts.auth')

@section('title', 'Doinik News Portal | Verify Email')

@section('content')
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5 text-muted">
                        <a href="{{ route('home') }}" class="d-block auth-logo">
                            <img src="{{ url('img/logo-dark.png') }}" alt="" height="20"
                                class="auth-logo-dark mx-auto">
                            <img src="{{ url('img/logo-light.png') }}" alt="" height="20"
                                class="auth-logo-light mx-auto">
                        </a>
                        <p class="mt-3">Doinik News Portal</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="p-2">
                                <div class="text-center">
                                    <div class="avatar-md mx-auto">
                                        <div class="avatar-title rounded-circle bg-light">
                                            <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <h4>{{ __('Verify Your Email Address') }}</h4>
                                        @if (session('resent'))
                                            <p>{{ __('A fresh verification link has been sent to your email address.') }}
                                            </p>
                                            <div class="mt-4">
                                                <a href="{{ route('home') }}" class="btn btn-success w-md">Verify email</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="mt-5 text-center">
                            <p>Didn't receive an email ? <button type="submit"
                                    class="fw-medium text-primary">{{ __('click here to request another') }}</button>.</p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Doinik. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                Tasin Shafi Leon
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
