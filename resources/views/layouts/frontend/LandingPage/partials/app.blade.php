<!DOCTYPE html>
<html lang="en">

@include('layouts.frontend.LandingPage.partials.header')

<body>
<div class="site-wrap">
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
@include('layouts.frontend.LandingPage.partials.navbar')
    @yield('top-section')

    </div>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
@yield('mid-section')
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


@include('layouts.frontend.LandingPage.partials.footer')
</div>
@include('layouts.frontend.LandingPage.partials.scripts')
</body>

</html>
