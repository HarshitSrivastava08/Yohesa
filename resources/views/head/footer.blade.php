<footer class="main-footer">
    <div class="container">
        <div class="row row-gutter-y-30">
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget footer-widget--about">
                    <a href="{{route('about')}}" class="footer-widget__logo">
                        <h3 class="footer-widget__title">
                            About Us
                        </h3>
                    </a>
                    <p class="footer-widget__text"> Credit cards offer various benefits, such as rewards programs, fraud protection, and the ability to build credit.</p>
                    <ul class="list-unstyled footer-widget__info">
                        <li>
                            <i class="icon-email"></i>
                            <a href="mailto:sharad.singh@yohesa.com">sharad.singh@yohesa.com</a>
                        </li>
                        <li>
                            <i class="icon-telephone"></i>
                            <a href="tel:8087179438">8087179438</a>
                        </li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-widget footer-widget--links">
                    <h3 class="footer-widget__title">
                        Explore
                    </h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="{{route('blog')}}">Blogs</a></li>
                        <li><a href="#">Apply for Loan</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul><!-- /.list-unstyled footer-widget__menu -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget footer-widget--time">
                    <h3 class="footer-widget__title">
                        Timing
                    </h3><!-- /.footer-widget__title -->
                    <p class="footer-widget__text">
                        Mon Fri: 7:00am - 6:00pm <br> Saturday: 9:00am - 5:00pm <br> Sunday: Closed
                    </p>
                    <div class="footer-widget__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.footer-widget__social -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget footer-widget--newsletter">
                    <h3 class="footer-widget__title">
                        Newsletter
                    </h3><!-- /.footer-widget__title -->
                    <form class="footer-widget__mailchimp">
                        <input type="email" placeholder="Email address">
                        <p class="footer-widget__mailchimp__text">
                            <i class="fa fa-check"></i>
                            I agree to all your terms and policies
                        </p><!-- /.footer-widget__mailchimp -->
                    </form><!-- /.footer-widget__mailchimp -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /.main-footer -->
<div class="bottom-footer">
    <div class="container">
        <p class="bottom-footer__text text-center">Copyright &copy; 2024 All Rights Reserved.</p>
        <!-- /.bottom-footer__text -->
    </div><!-- /.container -->
</div><!-- /.bottom-footer -->

</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.php" aria-label="logo image"><img src="{{asset('assets/images/logo_2.png')}}" width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="icon-email"></i>
                <a href="mailto:sharad.singh@yohesa.com">sharad.singh@yohesa.com</a>
            </li>
            <li>
                <i class="icon-telephone"></i>
                <a href="tel:8087179438">8087179438</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->

        <div class="mobile-nav__social">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->


<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{asset('assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>

<script src="{{asset('assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>

<script src="{{asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>

<script src="{{asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>

<script src="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>

<script src="{{asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>

<script src="{{asset('assets/vendors/odometer/odometer.min.js')}}"></script>

<script src="{{asset('assets/vendors/swiper/swiper.min.js')}}"></script>

<script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>

<script src="{{asset('assets/vendors/wow/wow.js')}}"></script>

<script src="{{asset('assets/vendors/isotope/isotope.js')}}"></script>

<script src="{{asset('assets/vendors/apex-chart/apexcharts.min.js')}}"></script>

<script src="{{asset('assets/vendors/highcharts/highcharts.min.js')}}"></script>

<script src="{{asset('assets/vendors/countdown/countdown.min.js')}}"></script>
<!-- template js -->
<script src="{{asset('assets/js/finlon.js')}}"></script>

<script src="{{asset('assets/js/loan-calculator.js')}}"></script>

<!-- <script src="assets/js/compare-calculator.js"></script> -->


<script>
new DataTable('#example');
</script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap4.js"></script>



<script>
function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " w3-red";
}
</script>




<script>
const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];

let isDragging = false,
    isAutoPlay = true,
    startX,
    startScrollLeft,
    timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens
    .slice(-cardPerView)
    .reverse()
    .forEach((card) => {
        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach((card) => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
};

const dragging = (e) => {
    if (!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
};

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
};

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if (carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - 2 * carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if (
        Math.ceil(carousel.scrollLeft) ===
        carousel.scrollWidth - carousel.offsetWidth
    ) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if (!wrapper.matches(":hover")) autoPlay();
};

const autoPlay = () => {
    if (window.innerWidth < 800 || !isAutoPlay)
return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => (carousel.scrollLeft += firstCardWidth), 2500);
};
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
</script>

<script>
document.querySelectorAll('.dropdown > a').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default link behavior
        const parent = this.parentElement;
        parent.classList.toggle('active'); // Toggle active class
        parent.querySelector('ul').style.display =
            parent.classList.contains('active') ? 'block' : 'none';
    });
});
</script>



</body>

</html>