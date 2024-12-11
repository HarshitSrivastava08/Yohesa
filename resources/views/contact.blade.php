@include('head.header')
<style>
    .input-error {
        border: 3px solid red;
        color: red;
    }
    </style>
<!-- /.main-menu -->

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url({{asset('assets/images/backgrounds/page-header-bg-1-1.jpg')}};"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Contact</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>Contact us</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="contact-one pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-one__content">
                    <div class="block-title">
                        <p class="block-title__tagline">contact</p><!-- /.block-title__tagline -->
                        <h2 class="block-title__title">Feel free to get
                            in touch</h2><!-- /.block-title__title -->
                    </div><!-- /.block-title -->
                    <p class="contact-one__text">There are many variations of passages of lorem ipsum available the
                        majority have alteration in some form by injected humour.</p><!-- /.contact-one__text -->
                    <div class="contact-one__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.contact-one__social -->
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <form action="{{ route('contacts') }}" method="post">
                    @csrf
                    <div class="form-one contact-form-validated">
                        <div class="row row-gutter-y-20 row-gutter-x-20">
                            <div class="col-md-6">
                                <input type="text" placeholder="Full name" name="name" value="{{ old('name') }}"
                                class="form-control">
                                <span style="color:red">@error('name'){{$message}}@enderror</span>
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6">
                                <input type="email" placeholder="Email address" name="email" value="{{ old('email') }}"
                                class="form-control">
                                <span style="color:red">@error('email'){{$message}}@enderror</span>
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6">
                                <input type="text" placeholder="Phone number" name="phone" value="{{ old('phone') }}"
                                class="form-control">
                                <span style="color:red">@error('phone'){{$message}}@enderror</span>
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6">
                                <input type="text" placeholder="Subject" name="subject" value="{{ old('subject') }}"
                                class="form-control">
                                <span style="color:red">@error('subject'){{$message}}@enderror</span>
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-12">
                                <textarea placeholder="Message" name="message" class="form-control" value="{{ old('message') }}"></textarea>
                                <span style="color:red">@error('message'){{$message}}@enderror</span>
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-12">
                                <button type="submit" class="thm-btn">Send a Message</button><!-- /.thm-btn -->
                            </div><!-- /.col-md-6 -->

                        </div><!-- /.row -->
                    </div>
                </form>

            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<section class="contact-info-one">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="contact-info-one__item">
                    <div class="contact-info-one__icon">
                        <i class="icon-telephone"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <div class="contact-info-one__content">
                        <p class="contact-info-one__text">Have any question?</p><!-- /.contact-info-one__text -->
                        <a class="contact-info-one__link" href="tel:+92 666 888 0000">+92 666 888 0000</a>
                    </div><!-- /.contact-info-one__content -->
                </div><!-- /.contact-info-one__item -->
            </div><!-- /.col-md-4 col-sm-12 -->
            <div class="col-md-4 col-sm-12">
                <div class="contact-info-one__item">
                    <div class="contact-info-one__icon">
                        <i class="icon-email"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <div class="contact-info-one__content">
                        <p class="contact-info-one__text">Write us email</p><!-- /.contact-info-one__text -->
                        <a class="contact-info-one__link" href="mailto:needhelp@company.com">needhelp@company.com</a>
                    </div><!-- /.contact-info-one__content -->
                </div><!-- /.contact-info-one__item -->
            </div><!-- /.col-md-4 col-sm-12 -->
            <div class="col-md-4 col-sm-12" style="display:flex;">
                <div class="contact-info-one__item">
                    <div class="contact-info-one__icon">
                        <i class="icon-pin"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <div class="contact-info-one__content">
                        <p class="contact-info-one__text">Visit anytime</p><!-- /.contact-info-one__text -->
                        <a class="contact-info-one__link" href="#">113/5 KAILAS BHAVAN, VISHRANTWADI PUNE</a>
                    </div><!-- /.contact-info-one__content -->
                </div><!-- /.contact-info-one__item -->
            </div><!-- /.col-md-4 col-sm-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-info-one -->

<div class="google-map__default">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15127.7938338135!2d73.87062607518966!3d18.576362279734983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1399dea31cb%3A0xf6a01fff88885033!2sSamaj%20Kalyan%20office%20vishrantwadi!5e0!3m2!1sen!2sin!4v1729860480754!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- /.google-map -->
@include('head.footer')