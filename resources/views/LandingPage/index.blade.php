@extends('layouts.frontend.LandingPage.partials.app')
@section('top-section')
    <div class="site-blocks-cover overlay" style="background-image: url({{asset('assets/frontend/images/hero_bg_3.jpg')}});" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">


    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-white font-weight-light mb-2 display-4">Podbuilder is your powerful tool to build your
            podcast presence
        </h2>
        @auth
            <p><a href="{{route('dashboard.home')}}" class="btn btn-info btn-sm py-3 px-4 mt-5 small">Edit my Podsite</a></p>

        @else
            <p><a href="{{route('login')}}" class="btn btn-info btn-sm py-3 px-4 mt-5 small">Create my Podsite</a></p>

        @endauth
    </div>
            </div>
        </div>
@endsection
@section('mid-section')
    <div class="col-lg-5 d-none d-lg-block side_image">
        <img src="{{asset('assets/frontend/images/person_1.jpg')}}" class="img-thumbnail border-0 rounded-0 p-0" alt="...">
    </div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 text-capitalize">create my podcast website</h1>
            </div>
            <form class="user" method="post" action="{{route('podcasts.store')}}">
                @method('POST')
                @csrf
                <div class="form-group">
                    @include('layouts.general._errors')
                    <input type="text" class="form-control form-control-user" id="exampleInputRss"
                           aria-describedby="rss" name="rss_feed" placeholder="ENTER PODCAST RSS FEED..." value="{{old('rss_feed')}}">
                    <input type="text" class="form-control form-control-user" id="exampleInputRss"
                           aria-describedby="rss" name="sub_domain" placeholder="ENTER PODCAST DOMAIN NAME">
                </div>
                @auth
                    <p><input type="submit" class="btn btn-info btn-sm py-3 px-4 small btn-block" value="Create my
                        Podsite">
                    </p>
                @else
                    <p><a class="btn btn-info btn-sm py-3 px-4 small btn-block" href="{{route('login')}}">Create my
                            Podsite</a>
                    </p>
                @endauth


            </form>
        </div>
    </div>
@endsection
