@extends('client.layouts.master')
@section('content')
    <section id="slider"
             class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header include-topbar">
        <div class="slider-inner">

            <div class="fslider h-100 position-absolute" data-speed="3000" data-pause="7500" data-animation="fade"
                 data-arrows="false" data-pagi="false" style="background-color: #333;">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide"
                             style="background: url('/client/assets/demos/travel/images/slider/1.jpg') center center; background-size: cover;"></div>
                        <div class="slide"
                             style="background: url('/client/assets/demos/travel/images/slider/2.jpg') center center; background-size: cover;"></div>
                        <div class="slide"
                             style="background: url('/client/assets/demos/travel/images/slider/3.jpg') center center; background-size: cover;"></div>
                    </div>
                </div>
            </div>

            <div id="travel-slider-overlay">

                <div class="vertical-middle">
                    <div class="container py-5 pt-5 pb-lg-0" style="direction:rtl;">

                        <div class="tabs travel-organiser-tabs mt-lg-5">
                            <ul class="tab-nav">
                                <li><a href="/client/assets/#tab-flights"><i class="icon-plane"></i><span
                                            class="d-none d-md-inline-block">Flights</span></a></li>
                                <li><a href="/client/assets/#tab-hotels"><i class="icon-building"></i><span
                                            class="d-none d-md-inline-block">Hotels</span></a></li>
                                <li><a href="/client/assets/#tab-flights-hotels"><span class="d-block d-md-none"><i
                                                class="icon-plane"></i> + <i class="icon-building"></i></span><span
                                            class="d-none d-md-inline-block">Flights + Hotels <span
                                                class="badge bg-danger">Save</span></span></a></li>
                                <li><a href="/client/assets/#tab-holidays"><i class="icon-gift"></i><span
                                            class="d-none d-md-inline-block">Holidays</span></a></li>
                            </ul>

                            <div class="tab-container">
                                <div class="tab-content" id="tab-flights">
                                    <div
                                        class="heading-block border-bottom-0 bottommargin-sm d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <h4>Book your Flights</h4>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger btn-sm bg-color border-color">
                                                Domestic
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-sm">International
                                            </button>
                                        </div>
                                    </div>
                                    <form action="#" method="post" class="mb-0">
                                        <div class="row">
                                            <div class="col-md-6 col-12 bottommargin-sm">
                                                <label>From</label>
                                                <input type="text" value="" class="sm-form-control"
                                                       placeholder="Eg. Melbourne, Australia">
                                            </div>
                                            <div class="col-md-6 col-12 bottommargin-sm">
                                                <label>To</label>
                                                <input type="text" value="" class="sm-form-control"
                                                       placeholder="Eg. New York, United States">
                                            </div>
                                            <div class="col-md-9 bottommargin-sm">
                                                <div class="row input-daterange travel-date-group">
                                                    <div class="col-md-6 col-6">
                                                        <label>Departure</label>
                                                        <input type="text" value="" class="sm-form-control text-start"
                                                               name="start" placeholder="MM/DD/YYYY">
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <label>Return</label>
                                                        <input type="text" value="" class="sm-form-control text-start"
                                                               name="end" placeholder="MM/DD/YYYY">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 bottommargin-sm">
                                                <label>Adults</label>
                                                <input type="number" min="1" max="10" value="" class="sm-form-control"
                                                       name="end" placeholder="2">
                                            </div>
                                            <div
                                                class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                                <button class="button button-3d m-0 rightmargin-sm">Search Flights
                                                </button>
                                                <a href="/client/assets/#" class="more-link" style="margin-top: 9px;">Advanced
                                                    Search</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-content" id="tab-hotels">
                                    <div
                                        class="heading-block border-bottom-0 bottommargin-sm d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <h4>Book your Hotels</h4>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger btn-sm bg-color border-color">
                                                Domestic
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-sm">International
                                            </button>
                                        </div>
                                    </div>
                                    <form action="#" method="post" class="mb-0">
                                        <div class="row">
                                            <div class="col-md-12 bottommargin-sm">
                                                <label>City</label>
                                                <input type="text" value="" class="sm-form-control"
                                                       placeholder="Eg. Melbourne, Australia">
                                            </div>
                                            <div class="col-md-9 bottommargin-sm">
                                                <div class="row input-daterange travel-date-group">
                                                    <div class="col-md-6 col-6">
                                                        <label>Departure</label>
                                                        <input type="text" value="" class="sm-form-control text-start"
                                                               name="start" placeholder="MM/DD/YYYY">
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <label>Return</label>
                                                        <input type="text" value="" class="sm-form-control text-start"
                                                               name="end" placeholder="MM/DD/YYYY">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 bottommargin-sm">
                                                <label>Rooms</label>
                                                <input type="number" min="1" max="10" value="" class="sm-form-control"
                                                       name="end" placeholder="2">
                                            </div>
                                            <div
                                                class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                                <button class="button button-3d m-0 rightmargin-sm">Search Hotels
                                                </button>
                                                <a href="/client/assets/#" class="more-link" style="margin-top: 9px;">Popular
                                                    Hotels</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-content" id="tab-flights-hotels">
                                    <div
                                        class="heading-block border-bottom-0 bottommargin-sm d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <h4>Book Flights &amp; Hotels</h4>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger btn-sm bg-color border-color">
                                                Domestic
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-sm">International
                                            </button>
                                        </div>
                                    </div>
                                    <form action="#" method="post" class="mb-0">
                                        <div class="row">
                                            <div class="col-md-9 bottommargin-sm">
                                                <div class="row">
                                                    <div class="col-md-6 col-6">
                                                        <label>From</label>
                                                        <input type="text" value="" class="sm-form-control"
                                                               placeholder="Eg. Melbourne, Australia">
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <label>Destination</label>
                                                        <input type="text" value="" class="sm-form-control"
                                                               placeholder="Eg. New York, United States">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 bottommargin-sm">
                                                <label>Adults</label>
                                                <input type="number" min="1" max="10" value="" class="sm-form-control"
                                                       name="end" placeholder="2">
                                            </div>
                                            <div class="col-md-9 bottommargin-sm">
                                                <div class="row input-daterange travel-date-group">
                                                    <div class="col-md-6 col-6">
                                                        <label>Departure</label>
                                                        <input type="text" value="" class="sm-form-control text-start"
                                                               name="start" placeholder="MM/DD/YYYY">
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <label>Return</label>
                                                        <input type="text" value="" class="sm-form-control text-start"
                                                               name="end" placeholder="MM/DD/YYYY">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3  bottommargin-sm">
                                                <label>Rooms</label>
                                                <input type="number" min="1" max="10" value="" class="sm-form-control"
                                                       name="end" placeholder="2">
                                            </div>
                                            <div
                                                class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                                <button class="button button-3d m-0 rightmargin-sm">Search Flights +
                                                    Hotels
                                                </button>
                                                <a href="/client/assets/#" class="more-link" style="margin-top: 9px;">Holiday
                                                    Packages</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-content" id="tab-holidays">
                                    <div class="heading-block border-bottom-0 bottommargin-sm">
                                        <h4>Search for Holiday Packages</h4>
                                    </div>
                                    <form action="#" method="post" class="mb-0">
                                        <div class="row">
                                            <div class="col-md-6 col-12 bottommargin-sm">
                                                <label>From</label>
                                                <input type="text" value="" class="sm-form-control"
                                                       placeholder="Eg. Melbourne, Australia">
                                            </div>
                                            <div class="col-md-6 col-12 bottommargin-sm">
                                                <label>Destination</label>
                                                <input type="text" value="" class="sm-form-control"
                                                       placeholder="Eg. Europe">
                                            </div>
                                            <div class="w-100"></div>
                                            <div class="col-md-9 bottommargin-sm">
                                                <div class="row">
                                                    <div class="col-md-6 col-6">
                                                        <label>Month</label>
                                                        <select name="month" class="sm-form-control">
                                                            <option value="">-- Select Month --</option>
                                                            <option value="November 2021">November 2021</option>
                                                            <option value="December 2021">December 2021</option>
                                                            <option value="January 2021">January 2021</option>
                                                            <option value="February 2021">February 2021</option>
                                                            <option value="March 2021">March 2021</option>
                                                            <option value="April 2021">April 2021</option>
                                                            <option value="May 2021">May 2021</option>
                                                            <option value="June 2021">June 2021</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <label>Budget</label>
                                                        <select name="budget" class="sm-form-control">
                                                            <option value="">-- Select Budget --</option>
                                                            <option value="November 2021">$99 to $199</option>
                                                            <option value="December 2021">$200 to $499</option>
                                                            <option value="January 2021">$500 to $999</option>
                                                            <option value="February 2021">$1000 to $1999</option>
                                                            <option value="March 2021">Above $2000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 bottommargin-sm">
                                                <label>Adults</label>
                                                <input type="number" min="1" max="10" value="" class="sm-form-control"
                                                       name="end" placeholder="2">
                                            </div>
                                            <div
                                                class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                                <button class="button button-3d m-0 rightmargin-sm">Search Flights
                                                </button>
                                                <a href="/client/assets/#" class="more-link" style="margin-top: 9px;">Advanced
                                                    Search</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="section bottommargin-lg header-stick">
                <div class="container">

                    <div class="row mt-4 col-mb-30 mb-0">

                        <div class="col-sm-6 col-lg-3 text-center text-sm-start">
                            <i class="i-plain color i-large icon-line2-plane inline-block"
                               style="margin-bottom: 15px;"></i>
                            <div class="heading-block border-bottom-0 mb-0">
                                <span class="before-heading">Easy &amp; Cheap.</span>
                                <h4>Search Flights</h4>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 text-center text-sm-start">
                            <i class="i-plain color i-large icon-line2-key inline-block"
                               style="margin-bottom: 15px;"></i>
                            <div class="heading-block border-bottom-0 mb-0">
                                <span class="before-heading">Over 15000+ Places.</span>
                                <h4>Get Hotel Deals</h4>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 text-center text-sm-start">
                            <i class="i-plain color i-large icon-line2-present inline-block"
                               style="margin-bottom: 15px;"></i>
                            <div class="heading-block border-bottom-0 mb-0">
                                <span class="before-heading">Explore Destinations.</span>
                                <h4>Holiday Packages</h4>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 text-center text-sm-start">
                            <i class="i-plain color i-large icon-line2-earphones-alt inline-block"
                               style="margin-bottom: 15px;"></i>
                            <div class="heading-block border-bottom-0 mb-0">
                                <span class="before-heading">24x7 Dedicated Helpline.</span>
                                <h4>1800 105 2541</h4>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="container clearfix">

                <div class="heading-block center border-bottom-0">
                    <span class="before-heading color">What are you in the Mood for.?</span>
                    <h2>Tailor made Packages for you</h2>
                </div>

            </div>

            <div id="portfolio" class="portfolio row grid-container portfolio-overlay-open g-0">

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="/client/assets/portfolio-single.html">
                                <img src="/client/assets/demos/travel/images/packages/1.jpg" alt="Beach Activities">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc py-0 text-center">
                                            <h3>Beach Activities</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                         data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-illustrations">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="/client/assets/portfolio-single.html">
                                <img src="/client/assets/demos/travel/images/packages/2.jpg" alt="Romantic Getaways">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc py-0 text-center">
                                            <h3>Romantic Getaways</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                         data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="/client/assets/#">
                                <img src="/client/assets/demos/travel/images/packages/3.jpg" alt="Mountain Madness">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc py-0 text-center">
                                            <h3>Mountain Madness</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                         data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-icons pf-illustrations">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="/client/assets/portfolio-single.html">
                                <img src="/client/assets/demos/travel/images/packages/4.jpg" alt="Active Explorer">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc py-0 text-center">
                                            <h3>Active Explorer</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                         data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-media">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="/client/assets/portfolio-single.html">
                                <img src="/client/assets/demos/travel/images/packages/5.jpg" alt="Icy Challenge">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc py-0 text-center">
                                            <h3>Icy Challenge</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                         data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-illustrations">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="/client/assets/portfolio-single.html">
                                <img src="/client/assets/demos/travel/images/packages/6.jpg" alt="Hill Trekking">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc py-0 text-center">
                                            <h3>Hill Trekking</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                         data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-icons">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="/client/assets/portfolio-single-video.html">
                                <img src="/client/assets/demos/travel/images/packages/7.jpg" alt="Forest Camping">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc py-0 text-center">
                                            <h3>Forest Camping</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                         data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="/client/assets/portfolio-single.html">
                                <img src="/client/assets/demos/travel/images/packages/8.jpg" alt="River Rafting">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc py-0 text-center">
                                            <h3>River Rafting</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                         data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

            </div>

            <div class="row align-items-stretch mx-0 clearfix">

                <div id="popular-dest-map" class="col-md-6 col-lg-8 px-0 d-none d-md-block">
                    <div class="gmap h-100" data-address="Spain" data-zoom="2"
                         data-markers='[{address:"Melbourne,Australia",icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{address:"Ibiza,Spain",icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{address:"NewYork",icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{address:"RiodeJaneiro,Brazil",icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{address:"Moscow,Russia",icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{address:"Rome,Italy",icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{address:"NewDelhi,India",icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{address:"Bangkok,Thailand",icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{address:"Dubai",icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{address:"CapeTown,SouthAfrica",icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}}]'
                         data-styles='[{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]'
                         data-scrollwheel="false"></div>
                </div>

                <div class="col-md-6 col-lg-4 col-padding" style="background-color: #F9F9F9;">
                    <div class="heading-block border-bottom-0">
                        <h4>Popular Destinations</h4>
                    </div>

                    <div class="posts-sm row col-mb-30">
                        <div class="entry col-sm-6 col-md-12">
                            <div class="grid-inner row align-items-center g-0">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="/client/assets/#"><img src="/client/assets/images/magazine/small/1.jpg"
                                                                        alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col ps-3">
                                    <div class="entry-title">
                                        <h4><a href="/client/assets/#">7 Nights/8 Days Europe</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span class="color">$599</span> onwards</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-sm-6 col-md-12">
                            <div class="grid-inner row align-items-center g-0">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="/client/assets/#"><img src="/client/assets/images/magazine/small/2.jpg"
                                                                        alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col ps-3">
                                    <div class="entry-title">
                                        <h4><a href="/client/assets/#">4 Nights/5 Days Thailand</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span class="color">$399</span> onwards</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-sm-6 col-md-12">
                            <div class="grid-inner row align-items-center g-0">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="/client/assets/#"><img src="/client/assets/images/magazine/small/3.jpg"
                                                                        alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col ps-3">
                                    <div class="entry-title">
                                        <h4><a href="/client/assets/#">11 Nights/12 Days America</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span class="color">$1299</span> onwards</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-sm-6 col-md-12">
                            <div class="grid-inner row align-items-center g-0">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="/client/assets/#"><img src="/client/assets/images/magazine/small/4.jpg"
                                                                        alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col ps-3">
                                    <div class="entry-title">
                                        <h4><a href="/client/assets/#">14 Nights/15 Days New Zealand</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span class="color">$1999</span> onwards</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <a href="/client/assets/#" class="button button-full button-dark center bottommargin-lg">
                <div class="container clearfix">
                    Can't find your Favorite Package? <strong>Browse Packages</strong> <i class="icon-caret-right"
                                                                                          style="top:4px;"></i>
                </div>
            </a>

            <div class="container">

                <div class="heading-block center">
                    <h2>Latest from our Blog</h2>
                    <span>Stay in Touch with the Latest Travel Trends &amp; Destination News</span>
                </div>

                <div class="row posts-md col-mb-50">
                    <div class="entry col-md-6">
                        <div class="grid-inner row align-items-center">
                            <div class="col-lg-6">
                                <div class="entry-image mb-0">
                                    <a href="/client/assets/#"><img src="/client/assets/demos/travel/images/blog/1.jpg"
                                                                    alt="Paris"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <span class="before-heading">Sightseeing</span>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="/client/assets/#">Things to do in Bangkok for free</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 16th July</li>
                                        <li><a href="/client/assets/#"><i class="icon-comments"></i> 05</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="/client/assets/#" class="more-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-6">
                        <div class="grid-inner row align-items-center">
                            <div class="col-lg-6">
                                <div class="entry-image mb-0">
                                    <a href="/client/assets/#"><img src="/client/assets/demos/travel/images/blog/2.jpg"
                                                                    alt="Paris"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <span class="before-heading">Nightlife</span>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="/client/assets/#">Nightclubs to check out in Kuala Lumpur</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 21th June</li>
                                        <li><a href="/client/assets/#"><i class="icon-comments"></i> 12</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="/client/assets/#" class="more-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-6">
                        <div class="grid-inner row align-items-center">
                            <div class="col-lg-6">
                                <div class="entry-image mb-0">
                                    <a href="/client/assets/#"><img src="/client/assets/demos/travel/images/blog/3.jpg"
                                                                    alt="Paris"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <span class="before-heading">Hotels</span>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="/client/assets/#">Prague hotels for every kind of traveller</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 02th March</li>
                                        <li><a href="/client/assets/#"><i class="icon-comments"></i> 39</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="/client/assets/#" class="more-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-6">
                        <div class="grid-inner row align-items-center">
                            <div class="col-lg-6">
                                <div class="entry-image mb-0">
                                    <a href="/client/assets/#"><img src="/client/assets/demos/travel/images/blog/4.jpg"
                                                                    alt="Paris"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <span class="before-heading">Eating Out</span>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="/client/assets/#">Shanghai restaurants for the discerning diner</a>
                                    </h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 11th February</li>
                                        <li><a href="/client/assets/#"><i class="icon-comments"></i> 11</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="/client/assets/#" class="more-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section topmargin-lg footer-stick">
                <div class="container center clearfix">

                    <div class="heading-block bottommargin-sm border-bottom-0">
                        <span class="before-heading color">Create a Custom Plan based on your Taste</span>
                        <h2>Start making your Travel Plans</h2>
                    </div>

                    <p class="lead">Educate, aid, criteria catalyst John Lennon. Life-saving diversity necessities
                        elevate worldwide carbon rights empowerment. Pursue these aspirations leverage, accessibility
                        UNICEF, reduce child mortality collaborative cities safeguards. Informal economies non-partisan;
                        evolution transformative climate change local benefit.</p>

                    <a href="/client/assets/#"
                       class="button button-rounded button-reveal text-end button-xlarge topmargin-sm"><i
                            class="icon-angle-right"></i><span>Create a Package</span></a>

                </div>
            </div>
        </div>
    </section>

    <!-- #content end -->
@endsection

