@extends('layouts.header')
@section('content')
    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1" style="background:url(assets/images/page-header.jpg)">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>TuruLav Login Page</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{url('home')}}">Home</a></li>
                        <li class="active">Login</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->
    <!-- ==========login Section start Here========== -->
    <div class="login-section padding-tb">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">Login</h3>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
                <x-jet-validation-errors class="alert alert-danger" />

        <form method="POST" action="{{ route('login') }}" class="account-form">
            @csrf
            <div class="form-group">
                <input type="email"  placeholder="Your email address" name="email" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                    <div class="checkgroup">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <a href="#">Forget Password?</a>
                </div>
            </div>
            <div class="form-group">
                <button class="d-block lab-btn"><span>Submit Now</span></button>
            </div>
        </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Don’t Have any Account? <a href="{{route('register')}}"> Sign
                            Up</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Login With Social Media</h5>
                    <ul class="social-media social-color lab-ul d-flex justify-content-center">
                        <li>
                            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="pinterest"><i class="icofont-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Login Section ends Here========== -->
@endsection

