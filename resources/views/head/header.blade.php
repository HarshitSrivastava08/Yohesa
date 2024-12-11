<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home || YOHESA MARKETING SOLUTIONS</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('assets/images/favicons/site.html')}}" />
    <meta name="description" content="Home || YOHESA MARKETING SOLUTIONS" />

    <!-- table -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendors/reey-font/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/finlon-icons/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-ui/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/assets/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/apex-chart/apexcharts.css')}}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/finlon.css')}}" />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <style>
    .fa_item {
        padding: 1px;
        color: #3dc7cc;

    }

    .fa_home {
        padding: 10px;
    }

    .te_sp {
        display: inline-flex;
        white-space: nowrap;


    }

    .fa_item {
        margin-left: 60px;
    }

    li a {
        display: inline-flex;
        align-items: center;
    }

    .fafacenter {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .box_t {
        box-sizing: border-box;
        box-shadow: 0px 0px 10px 0px lightgray;
        text-align: center;
        padding: 5px;
        font-weight: 600;
        border-radius: 10px;
        background: #fff;
        border: 2px solid transparent;
        transition: border-color 0.3s ease;
        font-size: 13px;

    }

    .box_t:hover {
        border-color: #3498db;
    }


    .info-section {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 800px;
        margin: 40px auto;
    }

    .left-column,
    .right-column {
        width: 45%;
    }

    .info-card {
        display: flex;
        align-items: center;
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .info-card img {
        width: 50px;
        height: 50px;
        margin-right: 20px;
    }

    .info-text {
        display: flex;
        flex-direction: column;
        padding-top: 40px;

    }

    .info-text h2 {
        font-size: 25px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .info-text p {
        font-size: 20px;
        color: #555;
    }

    .timeline {
        position: relative;
        width: 30%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .line {
        width: 5px;
        background-color: #e0e0e0;
        flex-grow: 1;
        position: relative;
        top: -10px;
        z-index: -1;
    }

    .dot {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #34a8a3;
        position: relative;
    }

    .dot-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
        position: relative;
    }

    .dot-container .line {
        height: 100px;

    }


    /*=========================axis page ===================*/

    .top_car {
        box-sizing: border-box;
        box-shadow: 0px 0px 10px 0px gray;
        padding: 20px;
        border-radius: 20px;
        background: azure;
        display: flex;
        justify-content: space-between;
    }

    .axis {
        border-bottom: 3px solid #00b5ef;
    }

    .im_g {
        padding-top: 30px;
    }

    .bt_t {
        padding: 10px;
        font-weight: 700;
    }

    .text_2 {
        text-align: center;
        font-weight: 700;
    }

    .zone {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        padding-top: 40px;
        font-weight: 500;
    }

    .shopping {
        display: flex;
        justify-content: space-evenly;
        font-size: 10px;
        font-weight: 700;
    }

    .first_h {
        font-weight: 700;
    }

    .first_h {
        display: inline-block;
        font-size: 15px;
        color: #333;
        position: relative;
        padding-bottom: 5px;
    }


    .first_h::after {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        left: 0;
        bottom: 0;
        background-color: #007bb5;
        transition: width 0.3s ease;
    }

    .first_h:hover::after {
        width: 100%;
    }

    .ul_li {
        padding: 10px;
        font-weight: 550;
    }

    .w3-bar {
        display: flex;
        flex-wrap: wrap;
    }

    .w3-bar-item {
        margin-right: 30px;
        margin-bottom: 15px;
        border-radius: 5px;
        padding: 10px 20px;
        text-align: center;
    }


    @media screen and (max-width: 768px) {
        .w3-bar-item {
            flex: 1 1 calc(33.33% - 20px);
            margin-right: 10px;
        }

        .w3-bar-item:nth-child(3n) {
            margin-right: 0;
        }
    }

    /*axis banck 10 css*/

    .do_1 {
        box-sizing: border-box;
        box-shadow: 0 15px 5px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
    }

    .airtel {
        font-weight: 700;
    }

    .Cashback {
        background: #c4e3ed;
        padding: 10px;
        width: 250px;
        border-radius: 5px;
    }

    .best {
        color: #000;
        font-weight: 700;
        white-space: nowrap;
    }

    .cas {
        font-size: 15px;
        font-weight: 500;
        white-space: nowrap;
    }

    @media only screen and (max-width: 600px) {
        .fa_home {
            display: none;
        }

        .fa-angle-right {
            display: none;
        }

        .disbursal {
            display: none;
        }
    }

    /*    testimonial*/
    .wrapper {
        max-width: 1100px;
        width: 100%;
        position: relative;
    }

    .wrapper i {
        top: 50%;
        height: 50px;
        width: 50px;
        cursor: pointer;
        font-size: 1.25rem;
        position: absolute;
        text-align: center;
        line-height: 50px;
        background: #fff;
        border-radius: 50%;
        /*    box-shadow: 0 3px 6px gray;*/
        transform: translateY(-50%);
        transition: transform 0.1s linear;

    }

    .wrapper i:active {
        transform: translateY(-50%) scale(0.85);
    }

    .wrapper i:first-child {
        left: -22px;
    }

    .wrapper i:last-child {
        right: -22px;
    }

    .wrapper .carousel {
        display: grid;
        grid-auto-flow: column;
        grid-auto-columns: calc((100% / 3));
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        gap: 16px;
        /*    border-radius: 8px;*/
        scroll-behavior: smooth;
        scrollbar-width: none;
    }

    .carousel::-webkit-scrollbar {
        display: none;
    }

    .carousel.no-transition {
        scroll-behavior: auto;
    }

    .carousel.dragging {
        scroll-snap-type: none;
        scroll-behavior: auto;
    }

    .carousel.dragging .card {
        cursor: grab;
        user-select: none;
    }

    .carousel :where(.card, .img) {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .carousel .card {
        scroll-snap-align: start;
        /*    height: 342px;*/
        list-style: none;
        background: #fff;
        cursor: pointer;
        /*    padding-bottom: 5px;*/
        flex-direction: column;
        /*    border-radius: 8px;*/
    }

    .carousel .card .img {
        background: #8b53ff;

    }

    .card .img img {
        width: 100%;
        height: auto;


    }

    .carousel .card h2 {
        font-weight: 500;
        font-size: 1.56rem;
        margin: 30px 0 5px;
    }

    .carousel .card span {
        color: #6a6d78;
        font-size: 1.31rem;
    }
    

    @media screen and (max-width: 900px) {
        .wrapper .carousel {
            grid-auto-columns: calc((100% / 2));
        }
    }

    @media screen and (max-width: 600px) {
        .wrapper .carousel {
            grid-auto-columns: 100%;
        }
    }
    </style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar">
            <div class="container-fluid">
                <div class="topbar__info">
                    <a href="#"><i class="icon-pin"></i> 113/5 KAILAS BHAVAN, VISHRANTWADI PUNE</a>
                    <a href="mailto:sharad.singh@yohesa.com"><i class="icon-email"></i> sharad.singh@yohesa.com</a>
                </div><!-- /.topbar__info -->
                <div class="topbar__links">
                    <a href="#">Login</a>
                    <a href="#">Company News</a>
                    <a href="{{route('faq')}}">FAQs</a>
                </div><!-- /.topbar__links -->
                <div class="topbar__social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div><!-- /.topbar__social -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar -->
        <nav class="main-menu">
            <div class="container-fluid">
                <div class="main-menu__logo">

                    <svg xmlns="http://www.w3.org/2000/svg" class="main-menu__logo__shape-1" viewBox="0 0 317 120">
                        <path d="M259.856,120H0V0H274l43,37.481Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="main-menu__logo__shape-2" viewBox="0 0 317 120">
                        <path d="M259.856,120H0V0H274l43,37.481Z" />
                    </svg>


                    <a href="{{route('index')}}">
                        <img src="{{asset('assets/images/logo_2.png')}}" alt="Finlon" style="width:100%">
                    </a>
                </div><!-- /.main-menu__logo -->
                <div class="main-menu__nav">
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="">CREDIT CARD<span class="fa_home"><i class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li class="dropdown">
                                    <a href="hdfc_creditecard.php" class="fafacenter"><span class="te_sp">HDFC Bank
                                            Credit Card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('hdfc_freedom')}}"><span class="te_sp">HDFC Freedom Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('hdfc_indianoil')}}"><span class="te_sp">HDFC IndianOil
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('hdfc_moneyback')}}"><span class="te_sp">HDFC MoneyBack
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('hdfc_regalia')}}"><span class="te_sp">HDFC Regalia Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('hdfc_upi_rupay')}}"><span class="te_sp">HDFC UPI RuPay
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('hdfc_infinia')}}"><span class="te_sp">HDFC Infinia Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('hdfc_millennia')}}"><span class="te_sp">HDFC Millennia
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('hdfc_money_back_credit')}}"><span class="te_sp">HDFC
                                                    MoneyBack+ Credit Card</span></a></li>

                                        <li><a href="{{route('hdfc_bizfirst')}}"><span class="te_sp">HDFC BIZ First
                                                    Rupaey
                                                    Card</span></a></li>

                                        <li><a href="{{route('hdfc_giga')}}"><span class="te_sp">HDFC GIGA Business
                                                    Card</span></a></li>

                                        <li><a href="{{route('hdfc_big_grow')}}"><span class="te_sp">HDFC BIZ Grow
                                                    Card</span></a></li>

                                        <li><a href="{{route('hdfc_6e_reward')}}"><span class="te_sp">HDFC 6E Rewards
                                                    Master
                                                    Card</span></a></li>

                                        <li><a href="{{route('hdfc_6e_xl_reward')}}"><span class="te_sp">HDFC 6E Reward
                                                    XL Master
                                                    Card</span></a></li>

                                        <li><a href="{{route('hdfc_diner')}}"><span class="te_sp">HDFC DINER Club
                                                    Privilege</span></a></li>

                                        <li><a href="{{route('hdfc_swiggy')}}"><span class="te_sp">SWIGGY HDFC Bank
                                                    CC</span></a>
                                        </li>

                                        <li><a href="{{route('hdfc_tata_neu')}}"><span class="te_sp">HDFC TATA Neu
                                                    Plus</span></a></li>

                                        <li><a href="{{route('hdfc_tata_neu_infinity')}}"><span class="te_sp">HDFC TATA
                                                    Neu
                                                    Infinity</span></a></li>

                                        <li><a href="{{route('hdfc_shoppers')}}"><span class="te_sp">HDFC SHOPPERS Stop
                                                    Black</span></a></li>

                                        <li><a href="{{route('hdfc_marrat_borway')}}"><span class="te_sp">HDFC Marriott
                                                    Bonway</span></a></li>

                                        <li><a href="{{route('hdfc_flipkart_wholeshale')}}"><span class="te_sp">HDFC
                                                    FLIPKART
                                                    Wholesale CC</span></a></li>

                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="axisbank_creditcard.php" class="fafacenter"><span class="te_sp">Axis Bank
                                            Credit Card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('axis_bank_aritel')}}"><span class="te_sp">Airtel Axis Bank
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('axis_bank_lic')}}"><span class="te_sp">Axis Bank LIC
                                                    Signature
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('axis_bank_select')}}"><span class="te_sp">Axis Bank SELECT
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('axis_bank_reward')}}"><span class="te_sp">Axis Bank
                                                    Rewards Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('axis_bank_neo')}}"><span class="te_sp">Axis Bank Neo
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('axis_bank_zone')}}"><span class="te_sp">Axis Bank MY ZONE
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('axis_bank_magnus')}}"><span class="te_sp">Axis Bank Magnus
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('axis_bank_ace')}}"><span class="te_sp">Axis Bank ACE
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('axis_bank_platinum')}}"><span class="te_sp"> Axis Bank LIC
                                                    Platinum
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('axis_bank_indianoil')}}"><span class="te_sp">Axis Bank
                                                    IndianOil
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('axis_bank_flipkart')}}"><span class="te_sp">Axis Bank
                                                    Flipkart
                                                    Credit Card</span></a></li>

                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="sbi_card.php" class="fafacenter"><span class="te_sp">SBI Bank Credit
                                            Card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('sbi_prime')}}">SBI Prime Credit Card </a></li>

                                        <li><a href="{{route('sbi_simply')}}"><span class="te_sp">SBI Simply Click
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('sbi_elite')}}">SBI Elite Credit Card</a></li>

                                        <li><a href="{{route('sbi_simply_save')}}"><span class="te_sp">SBI Simply Save
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('sbi_pulse')}}">SBI PULSE Credit Card</a></li>
                                        <li><a href="{{route('sbi_signature')}}">SBI Signature Credit Card</a></li>
                                        <li><a href="{{route('sbi_octane')}}">SBI Octane Credit Card</a></li>
                                        <li><a href="{{route('sbi_premier')}}">SBI Premier Credit Card</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="idfc_firstbank.php" class="fafacenter"><span class="te_sp">IDFC Bank Credit
                                            Card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('idfc_wealth')}}"><span class="te_sp">IDFC Wealth Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('idfc_millennia')}}"><span class="te_sp">IDFC Millennia
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('idfc_classic')}}"><span class="te_sp">IDFC Classic Credit
                                                    Card
                                                </span></a></li>

                                        <li><a href="{{route('idfc_wowcard')}}"><span class="te_sp">IDFC WOW Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('idfc_select')}}"><span class="te_sp">IDFC Select Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('idfc_vista')}}"><span class="te_sp">IDFC Club Vista Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('idfc_power')}}"><span class="te_sp">IDFC First Power
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('idfc_swyp')}}"><span class="te_sp">IDFC First SWYP Credit
                                                    Card</span></a></li>

                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="uabank_creditcard.php" class="fafacenter"><span class="te_sp">AU Bank
                                            Credit Card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('au_bank_lit')}}">AU Bank LIT Credit Card</a></li>

                                        <li><a href="{{route('au_bank_zenith')}}">AU Bank Zenith Credit Card</a></li>

                                        <li><a href="{{route('au_bank_vetta')}}">AU Bank Vetta Credit Card</a></li>

                                        <li><a href="{{route('au_bank_altura')}}">AU Bank Altura Credit Cards</a></li>

                                        <li><a href="{{route('au_bank_alturaplus')}}"><span class="te_sp">AU Bank Altura
                                                    Plus
                                                    Credit Card</span></a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="american_express.php" class="fafacenter"><span class="te_sp">American
                                            Express Credit Card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('american_express_gold')}}"><span class="te_sp">American
                                                    Express
                                                    Gold Credit Card</span></a></li>

                                        <li><a href="{{route('american_express_smartearn')}}"><span
                                                    class="te_sp">American
                                                    Express SmartEarn Credit Card</span></a></li>

                                        <li><a href="{{route('american_express_payback')}}"><span class="te_sp">American
                                                    Express
                                                    Payback Credit Card</span></a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="indusind_bank.php" class="fafacenter"><span class="te_sp">Indusind Bank
                                            Credit Card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('indusind_nexxt')}}"><span class="te_sp">Nexxt Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('indusind_legend')}}">Legend Credit Card</a></li>


                                        <li><a href="{{route('indusind_pinnacle')}}">Pinnacle Credit Card</a></li>

                                        <li><a href="{{route('indusind_platinum')}}">Platinum Visa Credit Card </a></li>

                                        <li><a href="{{route('indusind_aura')}}"><span class="te_sp">Aura Credit
                                                    Card</span></a>
                                        </li>

                                        <li><a href="{{route('indusind_rupay')}}"><span class="te_sp">Rupay platinum
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('indusind_qatar')}}"><span class="te_sp">Qatar airways
                                                    Card</span></a></li>

                                        <li><a href="{{route('indusind_british')}}"><span class="te_sp">British airways
                                                    Credit
                                                    Card</span></a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="hsbc_bank.php" class="fafacenter"><span class="te_sp">HSBC Bank Credit
                                            card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('hsbc_visa_platinum')}}"><span class="te_sp">HSBC Visa
                                                    Platinum
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('hsbc_live_credit')}}"><span class="te_sp">HSBC Cashback
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('hsbc_bank_smart')}}"><span class="te_sp">HSBC Smart Value
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('hsbc_premier_credit')}}"><span class="te_sp">HSBC Premier
                                                    Credit
                                                    Card</span></a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="yes-bank.php" class="fafacenter"><span class="te_sp">Yes Bank Credit
                                            Card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('yes_elite_plus')}}">YES Bank Elite Plus Credit Card</a>
                                        </li>

                                        <li><a href="{{route('yes_bank_select')}}"><span class="te_sp">Yes Bank Select
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('yes_bank_ace')}}">Yes Bank Ace Credit Card</a></li>

                                        <li><a href="{{route('yes_bank_marquee')}}"><span class="te_sp">MARQUEE YES BANK
                                                    CARD</span></a></li>

                                        <li><a href="{{route('yes_bank_reserve')}}"><span class="te_sp">Yes Bank Reserve
                                                    credit
                                                    cards</span></a></li>
                                        <li><a href="{{route('yes_bank_rewards')}}"><span class="te_sp">Yes Bank
                                                    prosperity
                                                    rewards</span></a></li>
                                        <li><a href="{{route('yes_bank_first')}}"><span class="te_sp">Yes Bank first
                                                    card</span></a></li>
                                        <li><a href="{{route('yes_bank_first_business')}}"><span class="te_sp">Yes Bank
                                                    first
                                                    businesses</span></a></li>
                                        <li><a href="{{route('yes_bank_cashback')}}"><span class="te_sp">Yes Bank
                                                    prosperity
                                                    cashback card</span></a></li>

                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="kotak_bank.php" class="fafacenter"><span class="te_sp">Kotak Mahindra Bank
                                            Credit Card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('kotak_urbane_gold')}}">Urbane Gold Credit Card</a></li>

                                        <li><a href="{{route('kotak_royale_signature')}}"><span class="te_sp">Royale
                                                    Signature
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('kotak_league_platinum')}}"><span class="te_sp">League
                                                    Platinum
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('kotak_myntra')}}"><span class="te_sp">Myntra Kotak Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('kotak_6e_xl_reward')}}"><span class="te_sp">6E Rewards XL
                                                    – Indigo
                                                    Kotak Bank Credit Card</span></a></li>

                                        <li><a href="{{route('kotak_6e_reward')}}"><span class="te_sp">6E Rewards –
                                                    Indigo Kotak
                                                    Bank Credit Card</span></a></li>

                                        <li><a href="{{route('kotak_indian_oil')}}"><span class="te_sp">IndianOil Kotak
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('kotak_white_reserve')}}"><span class="te_sp">Kotak White
                                                    Reserve
                                                    Credit Card</span></a></li>

                                        <li><a href="{{route('kotak_811')}}"><span class="te_sp">Kotak 811 Credit
                                                    Card</span></a>
                                        </li>

                                        <li><a href="{{route('kotak_zen')}}"><span class="te_sp">Kotak Zen Signature
                                                    Credit
                                                    Card</span></a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="icici_credit_card.php" class="fafacenter"><span class="te_sp">ICICI Bank
                                            Credit Card</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('icici_emeralde_private')}}"><span class="te_sp">Emeralde
                                                    Private
                                                    Metal Credit Card</span></a></li>

                                        <li><a href="{{route('icici_emeralde')}}"><span class="te_sp">Emeralde Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('icici_sapphiro')}}"><span class="te_sp">Sapphiro Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('icici_rubyx')}}"><span class="te_sp">Rubyx Credit
                                                    Card</span></a>
                                        </li>

                                        <li><a href="{{route('icici_coral')}}"><span class="te_sp">Coral Credit
                                                    Card</span></a>
                                        </li>

                                        <li><a href="{{route('icici_manchester_united')}}"><span
                                                    class="te_sp">Manchester United
                                                    Platinum Credit Card</span></a></li>

                                        <li><a href="{{route('icici_manchester_signature')}}"><span
                                                    class="te_sp">Manchester
                                                    United Signature Credit Card</span></a></li>

                                        <li><a href="{{route('icici_platinum')}}"><span class="te_sp">Platinum Credit
                                                    Card</span></a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="standard_chartered_creditcard.php" class="fafacenter"><span
                                            class="te_sp">Standard Chartered Credit Card</span><span><i
                                                class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('standard_ultimate')}}"><span class="te_sp">Ultimate Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('standard_digismart')}}"><span class="te_sp">DigiSmart
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('standard_manhattan')}}"><span class="te_sp">Manhattan
                                                    Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('standard_tittanium')}}"><span class="te_sp">Super Value
                                                    Titanium
                                                    Cashback Credit Card</span></a></li>

                                        <li><a href="{{route('standard_platinum')}}"><span class="te_sp">Platinum
                                                    Rewards Credit
                                                    Card</span></a></li>

                                        <li><a href="{{route('standard_priority')}}"><span class="te_sp">Priority Visa
                                                    Infinite
                                                    Credit Card</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">LOAN<span class="fa_home"><i class="fa fa-angle-down"></i></span></a>

                            <ul>
                                <li class="dropdown">
                                    <a href="personal_loan.php" class="fafacenter"><span class="te_sp">Personal
                                            Loans</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li class="dropdown"><a href="#" class="fafacenter"><span
                                                    class="te_sp">Bank</span><span><i
                                                        class="fa fa-angle-right"></i></span></a>
                                            <ul>
                                                <li><a href="{{route('hdfc_form_loan')}}" class="te_sp">HDFC Bank
                                                        Personal
                                                        Loan</a></li>

                                                <li><a href="{{route('axis_personal_loan')}}" class="te_sp">Axis Bank
                                                        Personal
                                                        Loan</a></li>

                                                <li><a href="{{route('sbi_personal_loan')}}" class="te_sp">SBI Bank
                                                        Personal
                                                        Loan</a></li>

                                                <li><a href="{{route('idfc_personal_loan')}}" class="te_sp">IDFC Bank
                                                        Personal Loan</a></li>

                                                <li><a href="{{route('au_personal_loan')}}" class="te_sp">AU Bank
                                                        Personal
                                                        Loan</a></li>

                                                <li><a href="{{route('indusind_personal_loan')}}" class="te_sp">Indusind
                                                        Bank
                                                        Personal Loan</a></li>

                                                <li><a href="{{route('hsbc_personal_loan')}}" class="te_sp">HSBC Bank
                                                        Personal
                                                        Loan</a></li>

                                                <li><a href="{{route('yes_personal_loan')}}" class="te_sp">Yes Bank
                                                        Personal
                                                        Loan</a></li>

                                                <li><a href="{{route('icici_personal_loan')}}" class="te_sp">ICICI Bank
                                                        Personal
                                                        Loan</a></li>

                                                <li><a href="{{route('kotak_personal_loan')}}" class="te_sp">Kotak Bank
                                                        Personal Loan</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="fafacenter"><span
                                                    class="te_sp">NBFC</span><span><i
                                                        class="fa fa-angle-right"></i></span></a>
                                            <ul>
                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Aditya Birla
                                                        </span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Bajaj
                                                            Finance</span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Cholamandalam
                                                            Investment</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">HDB
                                                            Financial</span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">L&T Finance
                                                            Limited</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Mahindra
                                                            Financial
                                                            Services </span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Muthoot
                                                            Finance</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Shriram
                                                            Finance</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Tata Sons
                                                            Private
                                                            Limited </span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">AXIS
                                                            FINANCE</span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Adani Capital
                                                            Private</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Aditya Birla
                                                            Capital
                                                        </span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">paysense
                                                            personal
                                                            loan</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span
                                                            class="te_sp">incred</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span
                                                            class="te_sp">FINNABLE</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">fullerton
                                                            india</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">TATA
                                                            CAPITAL</span></a>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="business_loan.php" class="fafacenter"><span class="te_sp">Business
                                            Loan</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li class="dropdown"><a href="#" class="fafacenter"><span
                                                    class="te_sp">Bank</span><span><i
                                                        class="fa fa-angle-right"></i></span></a>
                                            <ul>
                                                <li><a href="{{route('hdfc_business_loan')}}" class="te_sp">HDFC Bank
                                                        Business
                                                        Loan</a></li>

                                                <li><a href="{{route('axis_business_loan')}}" class="te_sp">AXIS Bank
                                                        Business
                                                        Loan</a></li>

                                                <li><a href="{{route('yes_business_loan')}}" class="te_sp">Yes Bank
                                                        Business
                                                        Loan</a></li>

                                                <li><a href="{{route('idfc_business_loan')}}" class="te_sp">IDFC Bank
                                                        Business
                                                        Loan</a></li>

                                                <li><a href="{{route('au_business_loan')}}" class="te_sp">AU Bank
                                                        Business
                                                        Loan</a></li>

                                                <li><a href="{{route('indusind_business_loan')}}" class="te_sp">Indusind
                                                        Bank
                                                        Business Loan</a></li>

                                                <li><a href="{{route('hsbc_business_loan')}}" class="te_sp">HSBC Bank
                                                        Business
                                                        Loan</a></li>

                                                <li><a href="{{route('sbi_bank_business_loan')}}" class="te_sp">SBI Bank
                                                        Business
                                                        Loan</a></li>

                                                <li><a href="{{route('icici_business_loan')}}" class="te_sp">ICICI Bank
                                                        Business
                                                        Loan</a></li>

                                                <li><a href="{{route('bajaj_business_loan')}}" class="te_sp">BAJAJ
                                                        Finserve
                                                        Business Loan</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="fafacenter"><span
                                                    class="te_sp">NBFC</span><span><i
                                                        class="fa fa-angle-right"></i></span></a>
                                            <ul>
                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Aditya Birla
                                                        </span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Bajaj
                                                            Finance</span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Cholamandalam
                                                            Investment</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">HDB
                                                            Financial</span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">L&T Finance
                                                            Limited</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Mahindra
                                                            Financial
                                                            Services </span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Muthoot
                                                            Finance</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Shriram
                                                            Finance</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Tata Sons
                                                            Private
                                                            Limited </span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">AXIS
                                                            FINANCE</span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Adani Capital
                                                            Private</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Aditya Birla
                                                            Capital
                                                        </span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">paysense
                                                            personal
                                                            loan</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span
                                                            class="te_sp">incred</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span
                                                            class="te_sp">FINNABLE</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">fullerton
                                                            india</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">TATA
                                                            CAPITAL</span></a>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="home_loan.php" class="fafacenter"><span class="te_sp">Home
                                            Loan</span><span><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li class="dropdown"><a href="#" class="fafacenter"><span
                                                    class="te_sp">Bank</span><span><i
                                                        class="fa fa-angle-right"></i></span></a>
                                            <ul>
                                                <li><a href="sbi_bank_home_loan" class="te_sp">SBI Bank Home
                                                        Loan</a></li>

                                                <li><a href="{{route('hdfc_bank_home_loan')}}" class="te_sp">HDFC Bank
                                                        Home Loan</a>
                                                </li>

                                                <li><a href="{{route('icici_bank_home_loan')}}" class="te_sp">ICICI Bank
                                                        Home Loan</a>
                                                </li>

                                                <li><a href="{{route('kotak_bank_home_loan')}}" class="te_sp"><span
                                                            class="te_sp">Kotak Mahindra Bank Home Loan </span></a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="fafacenter"><span
                                                    class="te_sp">NBFC</span><span><i
                                                        class="fa fa-angle-right"></i></span></a>
                                            <ul>
                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Aditya Birla
                                                        </span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Bajaj
                                                            Finance</span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Cholamandalam
                                                            Investment</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">HDB
                                                            Financial</span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">L&T Finance
                                                            Limited</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Mahindra
                                                            Financial
                                                            Services </span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Muthoot
                                                            Finance</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Shriram
                                                            Finance</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Tata Sons
                                                            Private
                                                            Limited </span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">AXIS
                                                            FINANCE</span></a>
                                                </li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Adani Capital
                                                            Private</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">Aditya Birla
                                                            Capital
                                                        </span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">paysense
                                                            personal
                                                            loan</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span
                                                            class="te_sp">incred</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span
                                                            class="te_sp">FINNABLE</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">fullerton
                                                            india</span></a></li>

                                                <li><a href="{{route('form_loan')}}"><span class="te_sp">TATA
                                                            CAPITAL</span></a>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a href="home_loan_balance_transfer_interest_rates.php"class="fafacenter"><span class="te_sp">Home Loan Balance Transfer</span></a>
                                </li> -->
                                <li>
                                    <a href="{{route('loan_against_property')}}" class="fafacenter"><span
                                            class="te_sp">Loan
                                            Against Property</span></a>
                                </li>
                                <li>
                                    <a href="{{route('gold_loan')}}" class="fafacenter"><span class="te_sp">Gold
                                            Loan</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#">INSURANCE<span class="fa_home"><i
                                        class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li class="dropdown"><a href="health_insurance.php">Health Insurance<span
                                            class="fa_home"><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('health_ergo')}}"><span class="te_sp">HDFC Ergo</span></a>
                                        </li>

                                        <li><a href="{{route('health_icici_lombard')}}"><span class="te_sp">ICICI
                                                    Lomboard</span></a></li>

                                        <li><a href="{{route('health_core_health')}}"><span class="te_sp">Core Health
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('health_go_digit')}}"><span class="te_sp">Go Digit General
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('health_aditya_birla')}}"><span class="te_sp">Aditya Birla
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('health_reliance')}}"><span class="te_sp">Reliance General
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('health_future_insurance')}}"><span class="te_sp">Future
                                                    General
                                                    India Insurance</span></a></li>

                                        <li><a href="{{route('health_tata_insurance')}}"><span class="te_sp">Tata AIG
                                                    General
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('health_sbi_general')}}"><span class="te_sp">SBI General
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('health_max_bupa')}}"><span class="te_sp">MAX Bupa health
                                                    Care</span></a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="life_insurance.php">Life Insurance<span class="fa_home"><i
                                                class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('life_hdfc_insurance')}}"><span class="te_sp">HDFC Life
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('life_icici_insurance')}}"><span class="te_sp">ICICI
                                                    Prodential Life
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('life_kotak_insurance')}}"><span class="te_sp">Kotak
                                                    Mahindra Life
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('life_max_insurance')}}"><span class="te_sp">Max Life
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('life_sbi_insurance')}}"><span class="te_sp">Sbi Life
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('life_bharti_insurance')}}"><span class="te_sp">Bharti AXA
                                                    Life
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('life_bajaj_insurance')}}"><span class="te_sp">Bajaj
                                                    Allianz</span></a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="general_insurance.php">General Insurance<span
                                            class="fa_home"><i class="fa fa-angle-right"></i></span></a>
                                    <ul>
                                        <li><a href="{{route('general_motor_insurance')}}"><span class="te_sp">Motor
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('general_car_insurance')}}"><span class="te_sp">Car
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('general_bike_insurance')}}"><span class="te_sp">Bike
                                                    Insurance</span></a></li>

                                        <li><a href="{{route('general_travel_insurance')}}"><span class="te_sp">Travel
                                                    Insurance</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!--instant loan-->

                        <li class="dropdown"><a href="#">INSTANT LOAN<span class="fa_home"><i
                                        class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li><a href="{{route('insta_loan')}}" class="te_sp">Insta Loan</a></li>

                                <li><a href="{{route('jumbo_loan')}}" class="te_sp">Jumbo Loan</a></li>

                                <li><a href="{{route('hdfc_xpress_loan')}}" class="te_sp">HDFC Xpress Loan</a></li>

                                <li><a href="{{route('smart_emi')}}" class="te_sp">Smart EMI On Credit Card</a></li>

                            </ul>
                        </li>


                        <!-- <li class="dropdown"><a href="blog.html">News<span class="fa_home"><i class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-details.html">News Details</a></li>
                            </ul>
                        </li> -->
                        <li><a href="{{route('blog')}}">BLOGS</a></li>
                    </ul>
                </div><!-- /.main-menu__nav -->
                <div class="main-menu__right">
                    <a href="#" class="main-menu__toggler mobile-nav__toggler">
                        <i class="fa fa-bars"></i>
                    </a>
                    
                    <a href="{{route('contact')}}" class="thm-btn main-menu__btn">Contact</a><!-- /.thm-btn -->
                    
                </div>
            </div>
        </nav>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>