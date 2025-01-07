<!-- resources/views/success.blade.php -->
@extends('frontend.layout.layout')
@section('content')

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Success</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{ url('/') }}">Home </a></li>
                    <li>Success</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Success Section Start -->
    <section class="success-wrap ptb-100 pb-75">
        <div class="container text-center">
            <h2 class="display-1">Success!</h2>
            <h4>Your action was completed successfully.</h4>
            <a href="{{ url('/') }}" class="btn btn-primary mt-3">Go to Home</a>
        </div>
    </section>
    <!-- Success Section End -->

</div>
<!-- Content wrapper end -->
@endsection
