@include('head.header')


<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url({{asset('assets/images/backgrounds/page-header-bg-1-1.jpg')}});"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index-2.html">Home</a></li>
            <li><span>Blog</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>Blog Grid</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-grid pt-120 pb-120">
    <div class="container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="news_box default_style list_view normal_view clearfix has_images">
                    <div class="image img_hover-1">
                        <img src="{{ asset($product->image) }}" class="img-fluid" alt="img">
                    </div>
                    <br>
                    <div class="content_box">
                        <div class="date">
                            <span class="date_in_number">
                                {{ \Carbon\Carbon::parse($product->created_at)->format('F j, Y') }}
                            </span>
                        </div>
                        <div class="source">
                            <h2 class="title">{{ ($product->meta_title) }}</h2>
                            <br>
                            <p class="short_desc">{{ ($product->meta_description) }}</p>
                            <br>
                            <p class="short_desc">{{ ($product->description) }}</p>
                            <br>
                            <p class="short_desc">{{ strip_tags($product->editor1) }}</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('head.footer')