<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header class="header">

        <div class="branding">

            <div class="container position-relative">

                <nav class="navbar navbar-expand-lg">
                    <h1 class="site-logo"><a class="navbar-brand" href="/"><img class="logo-icon"
                                src="{{ asset('assets/images/logo-icon.svg') }}" alt="logo"> <span
                                class="logo-text">NOVA <span class="alt rounded">Pro</span></span></a></h1>

                    <!-- // Free Version ONLY -->
                    <ul class="social-list list-inline mb-0 position-absolute">
                        <li class="list-inline-item"><a class="text-dark" href="#"><i
                                    class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="text-dark" href="#"><i
                                    class="fab fa-facebook-f fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="text-dark" href="#"><i
                                    class="fab fa-instagram fa-fw"></i></a></li>
                    </ul>
                    <!--//social-list-->

                </nav>

                <!-- // Free Version ONLY -->
                <ul class="social-list list-inline mb-0 position-absolute d-none">
                    <li class="list-inline-item"><a class="text-dark" href="#"><i
                                class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="text-dark" href="#"><i
                                class="fab fa-facebook-f fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="text-dark" href="#"><i
                                class="fab fa-instagram fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="text-dark" href="#"><i
                                class="fab fa-youtube fa-fw"></i></a></li>
                </ul>
                <!--//social-list-->
            </div>
            <!--//container-->
        </div>
        <!--//branding-->
    </header>
    <!--//header-->


    <section class="hero-section">
        <div class="container">
            <div class="row figure-holder">
                <div class="col-12 col-md-6 pt-3 pt-md-4">
                    <h2 class="site-headline font-weight-bold mt-lg-5 pt-lg-5">The best way to promote your app and
                        convert users.</h2>
                    <div class="site-tagline mb-3">High converting Bootstrap landing page template made for app
                        developers. Built with Bootstrap 5 and Sass. Get started now!</div>
                    <div class="cta-btns">
                        <div class="mb-4"><a class="btn btn-primary font-weight-bold theme-btn"
                                href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/nova-bootstrap-landing-page-template-for-mobile-apps/">Try
                                Nova for FREE</a></div>
                        <ul class="app-stores list-unstyled list-inline mx-auto mx-md-0 d-inline-block">
                            <li class="list-inline-item me-3"><a href="#"><img class="ios"
                                        src="assets/images/appstore-apple.svg" alt="app-store"></a></li>
                            <li class="list-inline-item"><a href="#"><img class="android"
                                        src="assets/images/appstore-android.svg" alt="google play"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--//row-->
        </div>
    </section>
    <!--//hero-section-->

    <section class="logos-section theme-bg-primary py-5 text-center">
        <div class="container">
            <h3 class="mb-5">Trusted by hundreds of software businesses</h3>
            <div class="logos-row row mx-auto">
                <div class="item col-6 col-md-4 col-lg-2 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="assets/images/logos/logo-1.svg" alt="logo">
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-6 col-md-4 col-lg-2 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="assets/images/logos/logo-2.svg" alt="logo">
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-6 col-md-4 col-lg-2 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="assets/images/logos/logo-3.svg" alt="logo">
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-6 col-md-4 col-lg-2 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="assets/images/logos/logo-4.svg" alt="logo">
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-6 col-md-4 col-lg-2 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="assets/images/logos/logo-5.svg" alt="logo">
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-6 col-md-4 col-lg-2 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="assets/images/logos/logo-6.svg" alt="logo">
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->

            </div>

        </div>
        <!--//container-->
    </section>
    <!--//logo-section-->

    <section class="benefits-section py-5">

        <div class="container py-lg-5">
            <h3 class="mb-5 text-center font-weight-bold">Market your mobile app effectively with Nova</h3>
            <div class="row">
                <div class="item col-12 col-lg-4">
                    <div class="item-inner text-center p-3 p-lg-5">
                        <img class="mb-3" src="assets/images/icon-target.svg" alt="" />
                        <h5>Focused on UX</h5>
                        <div>Use this area to list your app's key benefits. Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </div>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-12 col-lg-4">
                    <div class="item-inner text-center p-3 p-lg-5">
                        <img class="mb-3" src="assets/images/icon-rocket.svg" alt="" />
                        <h5>Convert Users</h5>
                        <div>Use this area to list your app's key benefits. Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </div>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
                <div class="item col-12 col-lg-4">
                    <div class="item-inner text-center p-3 p-lg-5">
                        <img class="mb-3" src="assets/images/icon-cogs.svg" alt="" />
                        <h5>Easy Customisations</h5>
                        <div>Use this area to list your app's key benefits. Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </div>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
            </div>
            <!--//row-->
            <div class="pt-3 text-center">
                <a class="btn btn-primary theme-btn theme-btn-ghost font-weight-bold" href="#">Learn More</a>
            </div>
        </div>

    </section>
    <!--//benefits-section-->

    <section class="features-section py-5">
        <div class="container py-lg-5 position-relative">
            <h3 class="mb-3 text-center font-weight-bold section-heading">Feature Highlights</h3>
            <div class="row pt-5 mb-5">

                <div class="col-12 col-md-6 col-xl-5 offset-xl-1 d-none d-md-block">
                    <img class="product-figure product-figure-1 img-fluid" src="assets/images/product-figure-1.png"
                        alt="" />
                </div>

                <div class="col-12 col-md-6 col-xl-5 pr-xl-3 pt-md-3">
                    <div class="card rounded border-0 shadow-lg  mb-5">
                        <div class="card-body p-4">
                            <h5 class="card-title"><i
                                    class="far fa-chart-bar me-2 me-lg-3 text-primary fa-lg fa-fw"></i>Feature Lorem
                                Ipsum</h5>
                            <p class="card-text">List one of your product's main features here. The screenshots used in
                                this template are taken from Bootstrap admin template Appify. </p>
                            <a class="more-link" href="#">Learn more <span class="more-arrow">&rarr;</span></a>
                        </div>
                    </div>
                    <!--//card-->

                    <div class="card rounded border-0 shadow-lg mb-5">
                        <div class="card-body p-4">
                            <h5 class="card-title"><i
                                    class="fas fa-laptop-code me-2 me-lg-3 text-primary fa-lg fa-fw"></i>Feature
                                Consectetuer</h5>
                            <p class="card-text">List one of your product's main features here. The screenshots used in
                                this template are taken from Bootstrap admin template Appify.</p>
                            <a class="more-link" href="#">Learn more <span class="more-arrow">&rarr;</span></a>
                        </div>
                    </div>
                    <!--//card-->
                    <div class="card rounded border-0 shadow-lg">
                        <div class="card-body p-4">
                            <h5 class="card-title"><i
                                    class="far fa-calendar-alt me-2 me-lg-3 text-primary fa-lg fa-fw"></i>Feature Lorem
                                Ipsum</h5>
                            <p class="card-text">List one of your product's main features here. The screenshots used in
                                this template are taken from Bootstrap admin template Appify.</p>
                            <a class="more-link" href="#">Learn more <span class="more-arrow">&rarr;</span></a>
                        </div>
                    </div>
                    <!--//card-->
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-xl-5 order-md-2 pr-xl-3 d-none d-md-block">
                    <img class="product-figure product-figure-2 img-fluid" src="assets/images/product-figure-2.png"
                        alt="" />
                </div>
                <div class="col-12 col-md-6 col-xl-5 order-md-1 offset-xl-1 pt-xl-5">
                    <div class="card rounded border-0 shadow-lg  mb-5">
                        <div class="card-body p-4">
                            <h5 class="card-title"><i
                                    class="fas fa-microphone-alt me-2 me-lg-3 text-primary fa-lg fa-fw"></i>Feature
                                Commodo</h5>
                            <p class="card-text">List one of your product's main features here. The screenshots used in
                                this template are taken from Bootstrap admin template Appify. Donec quam felis,
                                ultricies nec, pellentesque eu, pretium quis, sem. </p>
                            <a class="more-link" href="#">Learn more <span class="more-arrow">&rarr;</span></a>
                        </div>
                    </div>
                    <!--//card-->

                    <div class="card rounded border-0 shadow-lg">
                        <div class="card-body p-4">
                            <h5 class="card-title"><i
                                    class="far fa-comments me-2 me-lg-3 text-primary fa-lg fa-fw"></i>Feature Ligula
                                Eget</h5>
                            <p class="card-text">List one of your product's main features here. Lorem ipsum dolor sit
                                amet. The screenshots used in this template are taken from Bootstrap admin template
                                Appify.</p>
                            <a class="more-link" href="#">Learn more <span class="more-arrow">&rarr;</span></a>
                        </div>
                    </div>
                    <!--//card-->
                </div>

            </div>

            <div class="pt-5 text-center">
                <a class="btn btn-primary theme-btn theme-btn-ghost font-weight-bold" href="#">View all
                    features</a>
            </div>
        </div>
        <!--//container-->

    </section>
    <!--//features-section-->

    <section class="cta-section py-5 theme-bg-secondary text-center">
        <div class="container">
            <h3 class="text-white font-weight-bold mb-3">Ready to turn your visitors to app users?</h3>
            <div class="text-white mx-auto single-col-max-width section-intro">Try Nova Free Today. Lorem ipsum dolor
                sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                natoque penatibus et magnis dis.</div>
            <a class="btn theme-btn theme-btn-ghost theme-btn-on-bg mt-4" href="#">Download Now - It's FREE</a>
        </div>
    </section>
    <!--//cta-section-->


    <section id="quote" class="testimonial-section py-5">
        <div class="py-lg-5">
            <h3 class="mb-5 text-center">Loved by thousands of app developers like you</h3>

            <div id="testimonial-carousel" class="testimonial-carousel">
                <div class="carousel-cell">
                    <div class="item-inner shadow rounded">
                        <h5 class="mb-2">Amazing App!</h5>
                        <div class="ratings text-primary mb-3"><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i></div>
                        <div class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                            massa.
                        </div>
                        <div class="source row">
                            <div class="col-auto">
                                <img class="source-profile rounded-circle" src="assets/images/users/user-1.jpg"
                                    alt="" />
                            </div>
                            <!--//col-->
                            <div class="source-info col pt-3">
                                <div>Tony Carter</div>
                                <div>London, UK</div>
                            </div>
                        </div>
                        <!--//source-->
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//carousel-cell-->

                <div class="carousel-cell">
                    <div class="item-inner shadow rounded">
                        <h5 class="mb-2">Marvellous!</h5>
                        <div class="ratings text-primary mb-3"><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star-half"></i></div>
                        <div class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                            massa.
                        </div>
                        <div class="source row">
                            <div class="col-auto">
                                <img class="source-profile rounded-circle" src="assets/images/users/user-2.jpg"
                                    alt="" />
                            </div>
                            <div class="source-info col pt-3">
                                <div>Helen Owens</div>
                                <div>New York, US</div>
                            </div>
                        </div>
                        <!--//source-->
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//carousel-cell-->

                <div class="carousel-cell">
                    <div class="item-inner shadow rounded">
                        <h5 class="mb-2">Actually Impressive!</h5>
                        <div class="ratings text-primary mb-3"><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i></div>
                        <div class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                            massa.
                        </div>
                        <div class="source row">
                            <div class="col-auto">
                                <img class="source-profile rounded-circle" src="assets/images/users/user-3.jpg"
                                    alt="" />
                            </div>
                            <div class="source-info col pt-3">
                                <div>Scott Rivera</div>
                                <div>Florida, US</div>
                            </div>
                        </div>
                        <!--//source-->
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//carousel-cell-->

                <div class="carousel-cell">
                    <div class="item-inner shadow rounded">
                        <h5 class="mb-2">Total Game Changer!</h5>
                        <div class="ratings text-primary mb-3"><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i></div>
                        <div class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                            massa.
                        </div>
                        <div class="source row">
                            <div class="col-auto">
                                <img class="source-profile rounded-circle" src="assets/images/users/user-4.jpg"
                                    alt="" />
                            </div>
                            <div class="source-info col pt-3">
                                <div>Charles Brewer</div>
                                <div>San Francisco, US</div>
                            </div>
                        </div>
                        <!--//source-->
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//carousel-cell-->

                <div class="carousel-cell">
                    <div class="item-inner shadow rounded">
                        <h5 class="mb-2">Just Perfect!</h5>
                        <div class="ratings text-primary mb-3"><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i></div>
                        <div class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                            massa.
                        </div>
                        <div class="source row">
                            <div class="col-auto">
                                <img class="source-profile rounded-circle" src="assets/images/users/user-5.jpg"
                                    alt="" />
                            </div>
                            <div class="source-info col pt-3">
                                <div>Deborah Reed</div>
                                <div>Paris, France</div>
                            </div>
                        </div>
                        <!--//source-->
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//carousel-cell-->

                <div class="carousel-cell">
                    <div class="item-inner shadow rounded">
                        <h5 class="mb-2">Great App!</h5>
                        <div class="ratings text-primary mb-3"><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i></div>
                        <div class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                            massa.
                        </div>
                        <div class="source row">
                            <div class="col-auto">
                                <img class="source-profile rounded-circle" src="assets/images/users/user-6.jpg"
                                    alt="" />
                            </div>
                            <div class="source-info col pt-3">
                                <div>Tony Cheng</div>
                                <div>San Francisco, US</div>
                            </div>
                        </div>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//carousel-cell-->

                <div class="carousel-cell">
                    <div class="item-inner shadow rounded">
                        <h5 class="mb-2">Exceptional!</h5>
                        <div class="ratings text-primary mb-3"><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i></div>
                        <div class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                            massa.
                        </div>
                        <div class="source row">
                            <div class="col-auto">
                                <img class="source-profile rounded-circle me-3" src="assets/images/users/user-7.jpg"
                                    alt="" />
                            </div>
                            <div class="source-info col pt-3">
                                <div>Kimberly Wells</div>
                                <div>London, UK</div>
                            </div>
                        </div>
                        <!--//source-->
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//carousel-cell-->
            </div>
            <!--//testimonial-carousel-->

            <div class="pt-5 text-center">
                <a class="btn btn-primary theme-btn font-weight-bold" href="#">Try Nova Now</a>
            </div>

        </div>
        <!--//container-->

    </section>
    <!--//testimonial-section-->


    <footer class="footer theme-bg-primary">
        <div class="container py-5 mb-3">
            <div class="row">
                <div class="footer-col col-6 col-lg-3">
                    <h4 class="col-heading">About Nova</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-link" href="#">Our Story</a></li>
                        <li><a class="text-link" href="#">Pricing</a></li>
                        <li><a class="text-link" href="#">Contact</a></li>
                        <li><a class="text-link" href="#">Jobs</a></li>

                    </ul>
                </div>
                <!--//footer-col-->
                <div class="footer-col col-6 col-lg-3">
                    <h4 class="col-heading">Resources</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-link" href="#">FAQs</a></li>
                        <li><a class="text-link" href="#">Blog</a></li>
                        <li><a class="text-link" href="#">Support</a></li>
                        <li><a class="text-link" href="#">Developer APIs</a></li>
                    </ul>
                </div>
                <!--//footer-col-->
                <div class="footer-col col-6 col-lg-3">
                    <h4 class="col-heading">Legal</h4>
                    <ul class="list-unstyled">
                        <li><a class="text-link" href="#">Privacy</a></li>
                        <li><a class="text-link" href="#">Terms of Services</a></li>
                        <li><a class="text-link" href="#">Security</a></li>
                    </ul>
                </div>
                <!--//footer-col-->
                <div class="footer-col col-6 col-lg-3">
                    <h4 class="col-heading">Stay Connected</h4>
                    <ul class="social-list list-unstyled mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube fa-fw"></i></a></li>
                    </ul>
                    <!--//social-list-->

                    <div class="mb-2">
                        Company Name<br>
                        2419 Locust View Drive <br>
                        San Francisco, CA, 94143
                    </div>
                    <div>
                        <a class="text-link" href="#">hello@yourcompany.com</a>
                    </div>

                </div>
                <!--//footer-col-->
            </div>
            <!--//row-->
        </div>
        <!--//container-->
        <div class="container">
            <hr>
        </div>
        <div class="download-area py-4">
            <div class="container text-center">
                <h3 class="mb-3">Get the app</h3>
                <div class="section-intro mb-4 single-col-max-width mx-auto">Download our apps now. lorem ipsum dolor
                    sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                    natoque penatibus et magnis dis. </div>
                <ul class="app-stores list-unstyled list-inline mx-auto  d-inline-block">
                    <li class="list-inline-item me-3"><a href="#"><img class="ios"
                                src="assets/images/appstore-apple.svg" alt="app-store"></a></li>
                    <li class="list-inline-item"><a href="#"><img class="android"
                                src="assets/images/appstore-android.svg" alt="google play"></a></li>
                </ul>
            </div>
            <!--//container-->
        </div>
        <!--//download-area-->
        <div class="footer-bottom text-center pb-5">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
                    style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying
                    Riley</a> for developers</small>
        </div>

    </footer>


    <!-- Javascript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script>
        var elem = document.querySelector('.testimonial-carousel');
        var flkty = new Flickity(elem, {
            // options
            contain: true,
            wrapAround: true,
            autoPlay: true,
            percentPosition: false, //carousel-cell is using px width

        });
    </script>
    {{-- <script type="text/javascript" src="assets/plugins/popper.min.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugins/flickity/flickity.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>  --}}
</body>

</html>
