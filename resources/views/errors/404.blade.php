<!-- resources/views/errors/404.blade.php -->
@extends('frontend.layout.layout')
@section('content')

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>404 - Page Not Found</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{ url('/') }}">Home </a></li>
                    <li>404</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- 404 Section Start -->
    <section class="error-wrap ptb-100 pb-75">
        <div class="container text-center">
            <h2 class="display-1">404</h2>
            <h4>Oops! The page you're looking for doesn't exist.</h4>
            <a href="{{ url('/') }}" class="btn btn-primary mt-3">Go to Home</a>
        </div>
    </section>
    <!-- 404 Section End -->

</div>
<!-- Content wrapper end -->
@endsection
