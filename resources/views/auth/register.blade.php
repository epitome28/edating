@extends('layouts.header')
@section('content')
    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1" style="background:url(assets/images/page-header.jpg)">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>TuruLav Registation</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{url('home')}}">Home</a></li>
                        <li class="active">Sign up</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->
    <div class="login-section padding-tb">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Register Now</h3>
    <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="account-form">
            @csrf
            <div class="form-group">
                <input type="text" placeholder="Full Name" name="name">
            </div>
            <div class="form-group">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Confirm Password" name="password_confirmation">
            </div>
            <div class="form-group">
                <button class="d-block lab-btn"><span>Get Started Now</span></button>
            </div>
        </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a href="{{route('login')}}">Login</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Register With Social Media</h5>
                    <ul class="social-media social-color justify-content-center d-flex lab-ul">
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
    <!-- ==========Sign up Section ends Here========== -->
@endsection

