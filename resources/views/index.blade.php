@include('head.header')

<section class="slider-one">
    <div class="thm-owl__carousel thm-owl__carousel--custom-nav owl-carousel owl-theme owl-dot-style-one"
        data-owl-nav-prev=".slider-one__carousel__btn__left" data-owl-nav-next=".slider-one__carousel__btn__right"
        data-owl-options='{
              "loop": true,
              "animateOut": "fadeOut",
              "animateIn": "fadeIn",
              "items": 1,
              "autoplay": 6000,
              "autoplayTimeout": 7000,
              "smartSpeed": 500,
              "nav": false,
              "dots": false,
              "margin": 0
          }'>
        <div class="item">
            <div class="slider-one__item">
                <div class="slider-one__lines">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.slider-one__lines -->
                <div class="slider-one__image" style="background-image: url({{asset('assets/images/backgrounds/123.png')}});">
                </div>
                <!-- /.slider-one__image -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">

                            <!-- /.slider-one__tagline -->
                            <h2 class="slider-one__title">Unlock Your Dreams with Personal Loan <span>Loan</span></h2>
                            <!-- /.slider-one__title -->
                            <!-- <p class="slider-one__text">Nullam vel nibh facilisis lectus fermentum ultrices quis
                                non risus.</p>/.slider-one__text -->
                            <div class="slider-one__btns">
                                <a href="{{route('contact')}}" class="thm-btn">Apply</a>
                            </div><!-- /.slider-one__btns -->
                        </div><!-- /.col-lg-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slider-one__item -->
        </div><!-- /.item -->
        <div class="item">
            <div class="slider-one__item">
                <div class="slider-one__lines">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.slider-one__lines -->
                <div class="slider-one__image" style="background-image: url({{asset('assets/images/backgrounds/banner_a.png')}});">
                </div>
                <!-- /.slider-one__image -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">

                            <!-- /.slider-one__tagline -->
                            <h2 class="slider-one__title">Your New Home Journey Begins <span>Here</span></h2>
                            <!-- /.slider-one__title -->
                            <!--<p class="slider-one__text">Nullam vel nibh facilisis lectus fermentum ultrices quis
                                non risus.</p> /.slider-one__text -->
                            <div class="slider-one__btns">
                                <a href="{{route('contact')}}" class="thm-btn">Apply</a>
                            </div><!-- /.slider-one__btns -->
                        </div><!-- /.col-lg-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slider-one__item -->
        </div><!-- /.item -->
    </div><!-- /.owl-carousel -->
    <div class="slider-one__carousel__btn">
        <button class="slider-one__carousel__btn__left">
            <i class="fa fa-angle-left"></i>
        </button>
        <button class="slider-one__carousel__btn__right">
            <i class="fa fa-angle-right"></i>
        </button>
    </div><!-- /.slider-one__carousel__btns -->
    <div class="slider-one__box wow fadeInRight" data-wow-duration="1500ms">
        <!-- <div class="slider-one__box__icon">
                    <i class="icon-successful"></i>
                </div> -->
        <!-- <div class="slider-one__box__content">
                    <p class="slider-one__box__tagline">Checkout our</p>
                    <h3 class="slider-one__box__title">88% Success Rates</h3>
                </div> -->
    </div><!-- /.slider-one__box -->
</section><!-- /.slider-one -->

<section>
    <div class="container pt-5">
        <h2 style="font-weight:700;">Bringing you the Best Products </h2>
        <div class="row">
            <div class="col-lg-2 pt-4">
                <div class="box_t">
                    <figure><a href=""><img src="{{asset('assets/images/icon/real-estate.png')}}" width="80"
                                style="padding-top: 10px;"></a></figure>
                    <p>personal Loans</p>
                </div>
            </div>
            <div class="col-lg-2 pt-4">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/atm-card.png')}}" width="80" style="padding-top: 10px;"></figure>
                    <p>Credit Cards</p>
                </div>
            </div>
            <div class="col-lg-2 pt-4">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/venture.png')}}" width="80" style="padding-top: 10px;"></figure>
                    <p>Business Loans</p>
                </div>
            </div>
            <div class="col-lg-2 pt-4">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/mortgage.png')}}" width="80" style="padding-top: 10px;"></figure>
                    <p>Home Loans</p>
                </div>
            </div>
            <div class="col-lg-2 pt-4">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/short-term.png')}}" width="80" style="padding-top: 10px;"></figure>
                    <p>Short Term</p>
                </div>
            </div>
            <div class="col-lg-2 pt-4">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/gold-ingots.png')}}" width="80" style="padding-top: 10px;">
                    </figure>
                    <p>Gold Loans</p>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-md-2 pt-4">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/assets.png')}}" width="80" style="padding-top: 10px;"></figure>
                    <p>Loan Property</p>
                </div>
            </div>
            <div class="col-md-2 pt-4 ">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/mortgage1.png')}}" width="80" style="padding-top: 10px;"></figure>
                    <p>Home Loan Transfer</p>
                </div>
            </div>
            <div class="col-md-2 pt-4">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/credit-card.png')}}" width="80" style="padding-top: 10px;">
                    </figure>
                    <p>Credit Cards</p>
                </div>
            </div>
            <div class="col-md-2 pt-4">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/heartbeat.png')}}" width="80" style="padding-top: 10px;"></figure>
                    <p>Health Insurance</p>
                </div>
            </div>
            <div class="col-md-2 pt-4">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/health-insurance.png')}}" width="80" style="padding-top: 10px;">
                    </figure>
                    <p>Life Insurance</p>
                </div>
            </div>
            <div class="col-md-2 pt-4">
                <div class="box_t">
                    <figure><img src="{{asset('assets/images/icon/insurance-policy.png')}}" width="80" style="padding-top: 10px;">
                    </figure>
                    <p>Credit Cards</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loan-Calculator pt-120 pb-120">
    <div class="container">
        <div class="loan-calculator__box" id="personal-loan-calculator">
            <div class="row">
                <div class="col-xl-7 col-lg-12">
                    <div class="slider-box">
                        <form action="#">
                            <div class="main-heading block-title text-left">
                                <p class="block-title__tagline mb-0">Monthly EMI</p>
                                <h3 class="block-title__title w-500">Loan Interest Calculator</h3>
                            </div>
                            <div class="main-slide">
                                <div class="single-loan-header">
                                    <h4>Loan Amount</h4>
                                    <input type="text" name="pricipal" class="form-control" id="principal-input"
                                        onkeypress='return onlynumeric(event)'>
                                </div>
                                <div id="finlon-principal-slide"
                                    class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min">
                                    </div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                        style="left: 1.80361%;"></span>
                                </div>
                                <div class="loan-counter-value">
                                    <span>&#8377</span>
                                    <h6 id="principal-show"></h6>
                                </div>
                            </div>
                            <div class="main-slide">
                                <div class="single-loan-header">
                                    <h4>Loan Months</h4>
                                    <input type="text" name="loan-year" class="form-control" id="loan-year-input"
                                        onkeypress='return onlynumeric(event)'>
                                </div>
                                <div id="finlon-year-slide"
                                    class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min">
                                    </div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                        style="left: 31.0345%;"></span>
                                </div>
                                <div class="loan-counter-value">
                                    <h6 id="totalyear-show"></h6>
                                    <span>Months</span>
                                </div>
                            </div>
                            <div class="main-slide">
                                <div class="single-loan-header">
                                    <h4>Interest Rate</h4>
                                    <input type="text" name="interest-rate" class="form-control"
                                        id="interest-rate-input" onkeypress='return onlynumeric(event)'>
                                </div>
                                <div id="finlon-intrest-slide"
                                    class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min">
                                    </div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                        style="left: 48.7603%;"></span>
                                </div>
                                <div class="loan-counter-value">
                                    <h6 id="intrest"></h6>
                                    <span>%</span>
                                </div>
                            </div>
                            <div class="note">
                                <p><strong>Note: </strong><small>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam
                                        quisque id diam vel quam elementum. Amet mattis vulputate enim nulla aliquet
                                        porttitor.</small></p>
                            </div>
                        </form><!-- form -->
                    </div><!-- slider-box -->
                </div><!-- col-xl-7 -->
                <div class="col-xl-5">
                    <div class="emi-calculation">
                        <div class="emi-calculation-content">
                            <p>
                                <span>Monthly EMI</span>
                                <b>&#8377<i id="monthly-emi"></i></b>
                            </p>
                        </div>
                    </div>
                    <div class="loan-calculation">
                        <div id="loan-chart" data-highcharts-chart="7"></div>
                        <div class="loan-calculation-content total-loan-form">
                            <div class="total-loan-form-calculation">
                                <p>
                                    <span>Total Interest</span>
                                    <b>&#8377<i id="total-interest"></i></b>
                                </p>
                                <p>
                                    <span>Total Amount Payable</span>
                                    <b>&#8377<i id="total-amount"></i></b>
                                </p>
                                <a href="{{route('contact')}}" class="thm-btn" target="_blank" rel="nofollow">Contact For Loan</a>
                            </div>
                        </div><!-- loan-calculation-content -->
                    </div><!-- loan-calculation -->
                </div> <!-- col-xl-5 -->
            </div><!-- row -->
        </div><!-- loan-calculator__box -->
    </div> <!-- container -->
</section>

<section>
    <div class="client-carousel @@extraClassName">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 30, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 30,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 30,
                        "slidesPerView": 5
                    }
                }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/resources/bank/1.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/resources/bank/2.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/resources/bank/3.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/resources/bank/4.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/resources/bank/5.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/resources/bank/6.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/resources/bank/7.png')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/resources/bank/8.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="info-section pt-5 disbursal">
        <!-- Left Column -->
        <div class="left-column">
            <div class="info-text">
                <h2>Fast Disbursal</h2>
                <p>Our team helps customers <br>make informed loan decisions.</p>
            </div>
            <div class="" style="padding-top:40px;">
                <img src="{{asset('assets/images/choose/1.avif')}}">
                <div class="info-text">
                    <h2>Personalised</h2>
                    <p>We curate the best available<br> offers from banks, NBFCs & financial institutions.</p>
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="timeline" style="padding-top:50px;">
            <!-- Dot and Line 1 -->
            <div class="dot-container">
                <div class="dot"></div>
                <div class="line" style="margin-top:30px;"></div>
            </div>
            <!-- Dot and Line 2 -->
            <div class="dot-container">
                <div class="dot"></div>
                <div class="line" style="margin-top:30px;"></div>
            </div>
            <!-- Dot 3 (Last dot) -->
            <div class="dot-container">
                <div class="dot"></div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="right-column">
            <div class="">
                <img src="{{asset('assets/images/choose/2.avif')}}">
                <div class="info-text">
                    <h2>Safe & Secure</h2>
                    <p>Applying for loans and credit through MyMoneyMantra is 100% safe and secure.</p>
                </div>
            </div>

            <div class="" style="padding-top:40px;">
                <img src="{{asset('assets/images/choose/3.avif')}}">
                <div class="info-text">
                    <h2>Trusted Partners</h2>
                    <p>We work with trusted financial institutions to bring you the best offers.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="video-one video-one--home pt-240 pb-120"
    style="background-image: url({{asset('assets/images/backgrounds/video-bg-1-1.jpg')}});">
    <div class="video-one__shape"></div>
    <div class="container">
        <div class="row row-gutter-y-50">
            <div class="col-lg-6">
                <div class="video-one__content">
                    <a href="#" class="video-popup video-one__btn">
                        <i class="fa fa-play"></i>
                        <span class="ripple"></span>
                    </a><!-- /.video-popup -->
                    <h3 class="video-one__title">Hundreds of customers <br> trust our company</h3>
                </div><!-- /.video-one__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <ul class="list-unstyled video-one__list">
                    <li>
                        <i class="icon-tick"></i>
                        Expert & Certified
                    </li>
                    <li>
                        <i class="icon-tick"></i>
                        Quality Services
                    </li>
                    <li>
                        <i class="icon-tick"></i>
                        Quick Loan Order
                    </li>
                    <li>
                        <i class="icon-tick"></i>
                        Status Monitor
                    </li>
                    <li>
                        <i class="icon-tick"></i>
                        Status Monitor
                    </li>
                    <li>
                        <i class="icon-tick"></i>
                        Easy to Use
                    </li>
                </ul><!-- /.list-unstyled video-one__list -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.video-one -->

</div><!-- /.client-carousel -->

<section class="service-one pt-120 pb-140">
    <img src="{{asset('assets/images/shapes/service-h-1.png" class="service-one__icon-1')}}" alt="">
    <img src="{{asset('assets/images/shapes/service-h-2.png" class="service-one__icon-2')}}" alt="">
    <img src="{{asset('assets/images/shapes/service-h-3.png" class="service-one__icon-3')}}" alt="">
    <div class="container">
        <div class="block-title text-center">
            <p class="block-title__tagline">What We’re Offering</p><!-- /.block-title__tagline -->
            <h2 class="block-title__title">We provide best services <br> for your loans </h2>
            <!-- /.block-title__title -->
        </div><!-- /.block-title -->
        <div class="row row-gutter-y-50">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="{{asset('assets/images/services/services-1-1.png')}}" alt="Auto Car Loan">
                        <a href="#"></a>
                    </div><!-- /.service-card__image -->
                    <div class="service-card__content">
                        <div class="service-card__content__inner">
                            <div class="service-card__icon">
                                <i class="icon-car"></i>
                            </div><!-- /.service-card__icon -->
                            <h3 class="service-card__title">
                                <a href="#">Auto Car Loan</a>
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__text">Car Loan provide low interest many variations of passages of
                                lorem ipsum have
                                some.</p><!-- /.service-card__text -->
                            <a href="#" class="service-card__link">
                                <i class="fa fa-angle-right"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="{{asset('assets/images/services/services-1-2.png')}}" alt="Wedding Loan">
                        <a href="#"></a>
                    </div><!-- /.service-card__image -->
                    <div class="service-card__content">
                        <div class="service-card__content__inner">
                            <div class="service-card__icon">
                                <i class="icon-diamond"></i>
                            </div><!-- /.service-card__icon -->
                            <h3 class="service-card__title">
                                <a href="#">Wedding Loan</a>
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__text">Car Loan provide low interest many variations of passages of
                                lorem ipsum have
                                some.</p><!-- /.service-card__text -->
                            <a href="#" class="service-card__link">
                                <i class="fa fa-angle-right"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="{{asset('assets/images/services/services-1-3.png')}}" alt="Property Loan">
                        <a href="#"></a>
                    </div><!-- /.service-card__image -->
                    <div class="service-card__content">
                        <div class="service-card__content__inner">
                            <div class="service-card__icon">
                                <i class="icon-house"></i>
                            </div><!-- /.service-card__icon -->
                            <h3 class="service-card__title">
                                <a href="#">Property Loan</a>
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__text">Car Loan provide low interest many variations of passages of
                                lorem ipsum have
                                some.</p><!-- /.service-card__text -->
                            <a href="#" class="service-card__link">
                                <i class="fa fa-angle-right"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-grid pt-120 pb-120 -->

<section class="testimonials-one pt-120 mb--40">
    <div class="container">
        <div class="block-title text-center">
            <p class="block-title__tagline">our testimonials</p><!-- /.block-title__tagline -->
            <h2 class="block-title__title">What they’re talking about <br> our company</h2><!-- /.block-title__title -->
        </div><!-- /.block-title -->
        <div class="row row-gutter-y-30">
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                <div class="testimonial-card">
                    <div class="testimonial-card__info">
                        <div class="testimonial-card__image">
                            <img src="{{asset('assets/images/resources/testi-1-1.png')}}" alt="Delia Riley">
                        </div><!-- /.testimonial-card__image -->
                        <div class="testimonial-card__meta">
                            <div class="testimonial-card__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonial-card__stars -->
                            <h3 class="testimonial-card__name">Delia Riley</h3><!-- /.testimonial-card__name -->
                            <p class="testimonial-card__designation">Finance Manager</p>
                            <!-- /.testimonial-card__designation -->
                        </div><!-- /.testimonial-card__meta -->
                    </div><!-- /.testimonial-card__info -->
                    <span class="testimonial-card__line"></span><!-- /.testimonial-card__line -->
                    <div class="testimonial-card__text">
                        <p>I loved the customer service you guys provided me. That was very nice and patient with
                            questions I had. I
                            would really like definitely come back here. Thank you for yours service.</p>
                    </div><!-- /.testimonial-card__text -->
                </div><!-- /.testimonial-card -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div class="testimonial-card">
                    <div class="testimonial-card__info">
                        <div class="testimonial-card__image">
                            <img src="{{asset('assets/images/resources/testi-1-2.png')}}" alt="Essie Perez">
                        </div><!-- /.testimonial-card__image -->
                        <div class="testimonial-card__meta">
                            <div class="testimonial-card__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonial-card__stars -->
                            <h3 class="testimonial-card__name">Essie Perez</h3><!-- /.testimonial-card__name -->
                            <p class="testimonial-card__designation">Finance Manager</p>
                            <!-- /.testimonial-card__designation -->
                        </div><!-- /.testimonial-card__meta -->
                    </div><!-- /.testimonial-card__info -->
                    <span class="testimonial-card__line"></span><!-- /.testimonial-card__line -->
                    <div class="testimonial-card__text">
                        <p>I loved the customer service you guys provided me. That was very nice and patient with
                            questions I had. I
                            would really like definitely come back here. Thank you for yours service.</p>
                    </div><!-- /.testimonial-card__text -->
                </div><!-- /.testimonial-card -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="testimonial-card">
                    <div class="testimonial-card__info">
                        <div class="testimonial-card__image">
                            <img src="{{asset('assets/images/resources/testi-1-3.png')}}" alt="Dustin Dunn">
                        </div><!-- /.testimonial-card__image -->
                        <div class="testimonial-card__meta">
                            <div class="testimonial-card__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonial-card__stars -->
                            <h3 class="testimonial-card__name">Dustin Dunn</h3><!-- /.testimonial-card__name -->
                            <p class="testimonial-card__designation">Finance Manager</p>
                            <!-- /.testimonial-card__designation -->
                        </div><!-- /.testimonial-card__meta -->
                    </div><!-- /.testimonial-card__info -->
                    <span class="testimonial-card__line"></span><!-- /.testimonial-card__line -->
                    <div class="testimonial-card__text">
                        <p>I loved the customer service you guys provided me. That was very nice and patient with
                            questions I had. I
                            would really like definitely come back here. Thank you for yours service.</p>
                    </div><!-- /.testimonial-card__text -->
                </div><!-- /.testimonial-card -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.testimonials-one -->
<section class="fact-one pt-140 pb-100">
    <div class="container">
        <div class="row row-gutter-y-30">
            <div class="col-lg-3 col-md-6">
                <div class="fact-one__item">
                    <div class="fact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="90" data-speed="1500"></span>
                        </span>%
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Loans Approve</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="fact-one__item">
                    <div class="fact-one__count">&#8377<span class="count-box">
                            <span class="count-text" data-stop="90" data-speed="1500"></span>
                        </span>k</div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Daily Payments</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="fact-one__item">
                    <div class="fact-one__count"><span class="count-box">
                            <span class="count-text" data-stop="90" data-speed="1500"></span>
                        </span>k</div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Happy Customers</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="fact-one__item">
                    <div class="fact-one__count"><span class="count-box">
                            <span class="count-text" data-stop="290" data-speed="1500"></span>
                        </span><!-- /.count-box -->
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Expert People</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.fact-one -->
<section class="benefit-one pt-120">
    <div class="benefit-one__shape-1 wow fadeInLeft" data-wow-delay="000ms" data-wow-duration="1500ms"
        style="background-image: url({{asset('assets/images/backgrounds/benefit-bg-1-1.jpg')}});">
    </div><!-- /.benefit-one__shape-1 -->
    <div class="benefit-one__shape-2"></div><!-- /.benefit-one__shape-2 -->
    <div class="container">
        <div class="row row-gutter-y-60">
            <div class="col-lg-6">
                <div class="benefit-one__image wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
                    <img src="{{asset('assets/images/resources/benefit-1-1.png')}}" alt="">
                    <div class="benefit-one__image__caption">
                        <h3 class="benefit-one__image__title">99.9%</h3><!-- /.benefit-one__image__title -->
                        <p class="benefit-one__image__text">Success Rates Guarantee</p>
                        <!-- /.benefit-one__image__text -->
                    </div><!-- /.benefit-one__image__caption -->
                </div><!-- /.benefit-one__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="benefit-one__content">
                    <div class="block-title text-left">
                        <p class="block-title__tagline">our benefits</p><!-- /.block-title__tagline -->
                        <h2 class="block-title__title">Why you should choose our company</h2>
                        <!-- /.block-title__title -->
                    </div><!-- /.block-title -->
                    <p class="benefit-one__text" style="padding-top:-50px;">Nullam vel nibh facilisis lectus fermentum
                        ultrices quis non risus.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hac habitasse platea dictumst. Duis
                        porta, quam ut finibus ultrices, lorem lacus congue lorem et rutrum sapien magna tincidunt
                        magna.</p><!-- /.benefit-one__text -->
                    <div class="benefit-one__box">
                        <div class="benefit-one__box__icon">
                            <i class="icon-bank"></i>
                        </div><!-- /.benefit-one__box__icon -->
                        <div class="benefit-one__box__content">
                            <h3 class="benefit-one__box__title">Lowest bank fees</h3><!-- /.benefit-one__box__title -->
                            <p class="benefit-one__box__text">Lorem ipsum dolor consectetur notte massa sapien samet.
                                Aucibus sed sem non, mattis commodo nisi.</p><!-- /.benefit-one__box__text -->
                        </div><!-- /.benefit-one__box__content -->
                    </div><!-- /.benefit-one__box -->
                    <div class="benefit-one__box">
                        <div class="benefit-one__box__icon">
                            <i class="icon-payment"></i>
                        </div><!-- /.benefit-one__box__icon -->
                        <div class="benefit-one__box__content">
                            <h3 class="benefit-one__box__title">Up to 20.000&#8377 limit</h3>
                            <!-- /.benefit-one__box__title -->
                            <p class="benefit-one__box__text">Lorem ipsum dolor consectetur notte massa sapien samet.
                                Aucibus sed sem non, mattis commodo nisi.</p><!-- /.benefit-one__box__text -->
                        </div><!-- /.benefit-one__box__content -->
                    </div><!-- /.benefit-one__box -->
                    <div class="benefit-one__box">
                        <div class="benefit-one__box__icon">
                            <i class="icon-smartphone-1"></i>
                        </div><!-- /.benefit-one__box__icon -->
                        <div class="benefit-one__box__content">
                            <h3 class="benefit-one__box__title">Easy in 3 steps</h3><!-- /.benefit-one__box__title -->
                            <p class="benefit-one__box__text">Lorem ipsum dolor consectetur notte massa sapien samet.
                                Aucibus sed sem non, mattis commodo nisi.</p><!-- /.benefit-one__box__text -->
                        </div><!-- /.benefit-one__box__content -->
                    </div><!-- /.benefit-one__box -->
                </div><!-- /.benefit-one__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.benefit-one -->
<section class="blog-one pt-120 pb-120">
    <div class="container">
        <div class="block-title text-center">

            <h2 class="block-title__title">Blog</h2><!-- /.block-title__title -->
        </div><!-- /.block-title -->
        <div class="row row-gutter-y-30">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date"><span>05</span> Mar</div><!-- /.blog-card__date -->
                        <img src="{{asset('assets/images/blog/blog-1-1.png')}}" alt="Which growth strategies you should adopt">
                        <a href="blog_details.php"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="blog_details.php"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="blog_details.php"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog_details.php">Which growth strategies you should
                                adopt</a></h3>
                        <p class="blog-card__text">Duis aute irure dolor lipsum simply free text the local markets.</p>
                        <a href="{{route('blog')}}" class="blog-card__link">Read More</a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date"><span>05</span> Mar</div><!-- /.blog-card__date -->
                        <img src="{{asset('assets/images/blog/blog-1-2.png')}}" alt="Which growth strategies you should adopt">
                        <a href="blog_details.php"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="blog_details.php"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="blog_details.php"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog_details.php">Which growth strategies you should
                                adopt</a></h3>
                        <p class="blog-card__text">Duis aute irure dolor lipsum simply free text the local markets.</p>
                        <a href="{{route('blog')}}" class="blog-card__link">Read More</a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date"><span>05</span> Mar</div><!-- /.blog-card__date -->
                        <img src="{{asset('assets/images/blog/blog-1-3.png')}}" alt="Which growth strategies you should adopt">
                        <a href="blog_details.php"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="blog_details.php"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="blog_details.php"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog_details.php">Which growth strategies you should
                                adopt</a></h3>
                        <p class="blog-card__text">Duis aute irure dolor lipsum simply free text the local markets.</p>
                        <a href="{{route('blog')}}" class="blog-card__link">Read More</a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.blog-one -->
<section class="call-to-action-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="000ms" data-wow-duration="1500ms">
                <div class="call-to-action-two__image">
                    <img src="{{asset('assets/images/backgrounds/cta-2-1-bg.png')}}" alt="">
                </div><!-- /.call-to-action-two__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="call-to-action-two__content">
                    <ul class="list-unstyled call-to-action-two__list">
                        <li>Simple</li>
                        <li>Transparent</li>
                        <li>Secure</li>
                    </ul><!-- /.call-to-action-two__list -->
                    <h3 class="call-to-action-two__title">Get quick business loans</h3>
                    <!-- /.call-to-action-two__title -->
                    <a href="{{route('contact')}}" class="thm-btn">Contact For Loan</a><!-- /.thm-btn -->
                    <span class="call-to-action-two__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.49 76.07">
                            <path
                                d="M153.74,101.43l1.56-.21c1-.12,2.49-.38,4.44-.53s4.28-.35,7-.49l4.29-.07c1.51,0,3.1.05,4.75.13,3.31.18,6.89.43,10.65,1a116,116,0,0,1,11.73,2.27,123,123,0,0,1,12.26,3.66,120.32,120.32,0,0,1,23.84,11.47,113.33,113.33,0,0,1,10.53,7.41c1.61,1.33,3.21,2.62,4.7,4s2.93,2.69,4.31,4,2.62,2.73,3.87,4,2.34,2.67,3.39,4,2.06,2.55,2.93,3.8,1.74,2.41,2.48,3.54l2,3.21c.61,1,1.12,2,1.6,2.8s.9,1.61,1.22,2.29l.84,1.73c.45.93.68,1.43.68,1.43a.95.95,0,0,1-1.62,1l0,0s-.33-.44-.93-1.27-1.43-2.06-2.59-3.57l-1.87-2.52c-.71-.89-1.47-1.86-2.28-2.9-1.63-2.06-3.55-4.32-5.68-6.75-1.07-1.21-2.24-2.41-3.4-3.71s-2.44-2.56-3.79-3.82c-2.61-2.62-5.53-5.2-8.62-7.8-.77-.65-1.58-1.26-2.38-1.91s-1.61-1.28-2.45-1.88l-2.52-1.88L232.07,122a126.44,126.44,0,0,0-11-6.71,117.91,117.91,0,0,0-11.65-5.54,106.37,106.37,0,0,0-11.85-4c-1-.29-2-.54-2.93-.77l-2.88-.69c-1.93-.37-3.8-.79-5.65-1-3.68-.63-7.2-.93-10.45-1.16-1.63-.09-3.19-.1-4.67-.15l-4.22.06-3.7.21c-1.14.07-2.18.22-3.12.31-1.87.17-3.37.44-4.38.6l-1.56.24a.94.94,0,0,1-1.08-.78,1,1,0,0,1,.79-1.09h0"
                                transform="translate(-152.92 -100.13)" />
                            <path
                                d="M280.58,151.16c-.13,1-.19,1.94-.26,2.9s-.06,1.92-.07,2.89a50.5,50.5,0,0,0,.37,5.77c.12,1,.27,1.91.44,2.86s.38,1.89.6,2.83c.47,1.86,1,3.7,1.65,5.51a1.71,1.71,0,0,1-2.18,2.18l-.26-.09-2.46-.85c-.82-.28-1.64-.55-2.45-.85s-1.64-.57-2.44-.87l-2.44-.89c-1.61-.6-3.21-1.27-4.78-2a33,33,0,0,1-4.62-2.58,1.07,1.07,0,0,1-.25-1.44,1,1,0,0,1,.8-.48h0a21.85,21.85,0,0,1,2.7.26c.88.13,1.76.3,2.62.51a37.62,37.62,0,0,1,5.08,1.54q2.48.93,4.89,2c1.61.73,3.19,1.52,4.75,2.35l-2.44,2.09c-.18-1-.33-2-.47-3s-.23-2-.34-3-.17-2-.25-3-.13-2-.18-3-.07-2-.09-3l0-3c0-1-.06-2,0-3l0-3v0a1,1,0,0,1,1.08-.91,1,1,0,0,1,1,1s0,0,0,.08"
                                transform="translate(-152.92 -100.13)" />
                        </svg></span>
                    <!-- /.call-to-action-two__arrow -->
                </div><!-- /.call-to-action-two__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>



@include('head.footer')