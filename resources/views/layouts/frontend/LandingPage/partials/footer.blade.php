<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <h3 class="footer-heading mb-4 text-uppercase">podbuilder</h3>
                    <p>it's a podcast centric website builder. You add your RSS feed and it creates a website that has all of your podcast episodes.
                        The sweet spot is the following:
                        1. You can create pages like podcast creators, podcast guests, buy me coffee, store fronts, ...
                        2. The tool work in the background with the best SEO practises to index your website using the episodes and pages you create.
                        3. We build it to help you scale and control your brand around your podcast.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Quick Menu</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <!-- DASHBOARD ATTRIBUTE! Add depending on pages created -->
                            @auth
                                <li><a href="{{route('welcome')}}">Home</a></li>

                                <li><a href="#">Contact</a></li>
                            @else
                                <li><a href="{{route('welcome')}}">Home</a></li>
                                <li><a href="{{route('register')}}">Signup</a></li>
                                <li><a href="#{{route('login')}}">Login</a></li>
                                <li><a href="#">Contact</a></li>
                            @endauth

                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-5">
{{--                    <h3 class="footer-heading mb-4">Watch Tutorial</h3>--}}
{{--                    <div class="block-16">--}}
{{--                        <figure>--}}
{{--                            <img src="{{asset('assets/frontend/images/img_1.jpg')}}" alt="Image placeholder" class="img-fluid rounded">--}}
{{--                            <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span--}}
{{--                                    class="icon-play"></span></a>--}}
{{--                        </figure>--}}
                    <h3 class="footer-heading mb-4">Follow Us</h3>
                    <div>
                        <!-- DASHBOARD ATTRIBUTE! Social Media -->
                        <a href="https://www.facebook.com/arcastfm" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="https://www.instagram.com/arcastfm/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="https://www.linkedin.com/company/arcast/" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                    </div>
                </div>
            </div>

        <div class="row pt-3 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script data-cfasync="false"
                                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                        /* RSS ATTRIBUTE! Podcast Name */
                    </script> All rights reserved | <a href="#" target="_blank">Podbuilder from arcast</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
