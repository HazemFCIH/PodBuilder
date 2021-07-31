@extends('layouts.frontend.LandingPage.partials.app')
@section('top-section')
    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url({{asset('assets/frontend/images/hero_bg_2.jpg')}});"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="text-white font-weight-light mb-2 display-4">Verify Your Email</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('mid-section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-2">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
