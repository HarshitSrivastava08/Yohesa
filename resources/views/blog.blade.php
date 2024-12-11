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
        <div class="row row-gutter-y-30">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date">
                            <span>{{ \Carbon\Carbon::parse($product->created_at)->format('F j') }}</span></div>
                        <!-- /.blog-card__date -->
                        <img src="{{ asset($product->image) }}" alt="">
                        <a href="blog_details.php"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta" style="text-align:left;">
                            <a href="blog_details.php"><i class="far fa-user-circle"></i> by Admin</a>
                        </div><!-- /.blog-card__meta -->
                        <h3 class="blog-card__title"><a href="{{ url('individual_blog/' . $product->id) }}">{{ $product->meta_title }}</a></h3>
                        <p class="blog-card__text">{{ $product->meta_description }}</p>
                        <a href="{{ url('individual_blog/' . $product->id) }}" class="blog-card__link">Read More</a>
                        <!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
            @endforeach
        </div>
    </div>
</section>

@include('head.footer')