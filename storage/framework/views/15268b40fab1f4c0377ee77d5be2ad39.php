<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->yieldContent('tags'); ?>
    <!-- ====== icons ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/54ce859d2c.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/bootstrap.min.css')); ?>">
    <!-- ====== carousal ===== -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/owl.theme.default.min.css')); ?>">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- slick -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/slick-theme.css')); ?>">
    <!-- ====== CSS ===== -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/style.css')); ?>" type="text/css">
    <!-- ====== CSS-MQ ===== -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/styleMQ.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/frontend/img/logo.png')); ?>" type="image/x-icon">
    <!--  -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!--  -->

    <style>
        input[type="range"] {
            width: 100%;
            margin: 10px 0;

        }

        .chart-container {
            text-align: center;
            /* margin-top: 30px; */
        }

        #progress-circle {
            transition: stroke-dashoffset 0.3s;
            stroke-dasharray: 502;
            /* Full circle circumference */
            stroke-dashoffset: 502;
            /* Starts with an empty circle */
        }

        .p2s2padding {
            padding-top: 400px;
        }

        .p2s1height {
            height: 550px;
        }


        .p2s2bgc {
            background: #fffdf8;
            box-shadow: 0px 0px 10px 0px #00000040;
            width: 90%;
            left: 50.5%;
        }





        @media only screen and (max-width: 1400px) {}

        @media only screen and (max-width: 1400px) and (min-width: 1200px) {
            .p2s2padding {
                padding-top: 420px;
            }

            .p2s2bgc {

                left: 50.8%;
            }
        }


        @media only screen and (max-width: 1200px) and (min-width: 992px) {
            .p2s2padding {
                padding-top: 430px;
            }

            .p2s2bgc {

                left: 51%;
            }


        }

        @media only screen and (max-width: 992px) and (min-width: 768px) {

            .p2s2padding {
                padding-top: 700px;
            }

            .p2s1height {
                height: 830px;
            }

            .p2s2bgc {

                left: 51.4%;
            }
        }

        @media only screen and (max-width: 768px) and (min-width: 576px) {

            .p2s2padding {
                padding-top: 700px;
            }

            .p2s1height {
                height: 840px;
            }

            .p2s1bgimg {
                background-image: none;
                background: black;
            }

            .p2s2bgc {

                left: 51.8%;
            }

        }

        @media only screen and (max-width: 576px) and (min-width: 500px) {

            .p2s2padding {
                padding-top: 700px;
            }



            .p2s1bgimg {
                background-image: none;
                background: black;
                height: 870px;
            }

            .p2s2bgc {

                left: 52%;
            }

        }



        @media only screen and (max-width: 500px) and (min-width: 425px) {
            .p2s2padding {
                padding-top: 700px;
            }

            .p2s1bgimg {
                background-image: none;
                background: black;
                height: 890px;
            }

            .p2s2bgc {

                left: 52.7%;
            }
        }



        @media only screen and (max-width: 424px) and (min-width: 375px) {

            .p2s2bgc {

                left: 52.8%;
            }
        }



        @media only screen and (max-width: 424px) and (min-width: 375px) {}

        @media only screen and (max-width: 424px) and (min-width: 388px) {
            .p2s2padding {
                padding-top: 730px;
            }

            .p2s1bgimg {
                background-image: none;
                background: black;
                height: 930px;
            }
        }

        @media only screen and (max-width: 388px) and (min-width: 375px) {
            .p2s2padding {
                padding-top: 750px;
            }

            .p2s1bgimg {
                background-image: none;
                background: black;
                height: 960px;
            }
        }

        @media only screen and (max-width: 375px) and (min-width: 320px) {
            .p2s2padding {
                padding-top: 790px;
            }

            .p2s1bgimg {
                background-image: none;
                background: black;
                height: 1020px;
            }

            .p2s2bgc {

                left: 52.9%;
            }
        }



        /*  */

        .pie-chart {

            width: 200px;
            margin: auto;
            /* padding: 20px; */
            text-align: center;
        }

        .pie-chart-legend {
            font-size: 14px;
        }

        .legend-icon {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .legend-value {
            font-weight: bold;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .align-items-start {
            align-items: flex-start;
        }

        .m-1 {
            margin: 5px 0;
        }

        .mr-2 {
            margin-right: 10px;
        }

        .mt-4 {
            margin-top: 20px;
        }


        /* input progress bar  */
        /* Input progress bar */
        input[type="range"] {
            -webkit-appearance: none;
            /* Remove default styling */
            width: 100%;
            height: 8px;
            /* Height of the progress bar */
            background: #e0e0e0;
            /* Default background color */
            border-radius: 5px;
            /* Rounded corners */
            transition: background 0.3s;
            /* Smooth transition */
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 14px;
            /* Thumb width */
            height: 14px;
            /* Thumb height */
            border-radius: 50%;
            /* Round thumb */
            background: white;
            border: 3px solid #C8A864;
            /* Color of the thumb */
            cursor: pointer;
        }

        input[type="range"]::-moz-range-thumb {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #C8A864;
            /* Color of the thumb */
            cursor: pointer;
        }

        input[type="range"]:focus {
            outline: none;
            /* Remove outline on focus */
        }

        /* Active state for the progress bar */
        input[type="range"]:active {
            background: #C8A864;
            /* Change the progress bar color when active */
        }
    </style>
    <style>
        content {
            color: #fff;
            font-weight: bold;
            background-color: #34495E;
            position: relative;
        }

        .content__container {
            position: relative;
            height: 60px;
            /* margin-top: 140px; */
            overflow: hidden;
            /* background-color: aqua; */
            /* background: chartreuse; */
        }

        @keyframes opacity {

            0%,
            50% {
                opacity: 0;
                color: #1D1F20;
            }
        }

        @keyframes trans {

            0%,
            14.66% {
                transform: translateY(0%)
            }

            16.66%,
            31.32% {
                transform: translateY(-25%)
            }

            33.32%,
            47.98% {
                transform: translateY(-50%)
            }

            49.98%,
            64.64% {
                transform: translateY(-75%)
            }

            66.64%,
            81.30% {
                transform: translateY(-50%)
            }

            83.30%,
            97.96% {
                transform: translateY(-25%)
            }
        }

        .content__container__text {
            position: absolute;
            /* margin-left: 41%; */
            margin-top: 0px;
        }

        .content__container__list {
            position: absolute;
            list-style-type: none;
            margin-left: 12%;
            animation-name: trans;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            margin-top: 4px;
        }

        .content__container__list__item {
            font-size: 37px;
            font-weight: 500;
            color: white;
        }

        @media only screen and (max-width: 1400px) and (min-width: 1200px) {
            .content__container__list__item {
                font-size: 32px;
                font-weight: 500;
                color: white;
            }

            .banerh1 {
                padding-top: 4px;
                font-size: 32px !important;
                font-weight: var(--font-weight-700);
            }

            .content__container {
                height: 55px;
            }
        }

        @media only screen and (max-width: 1200px) and (min-width: 992px) {
            .content__container__list__item {
                font-size: 28px;
                font-weight: 500;
                color: white;
            }

            .banerh1 {
                font-size: 32px !important;
                font-weight: var(--font-weight-700);
            }

            .content__container__list {
                margin-left: 12%;
                margin-top: 1.5px;
            }

            .content__container {
                height: 45px;
                /* margin-top: 140px; */
            }
        }

        @media only screen and (max-width: 992px) and (min-width: 768px) {
            .banerh1 {
                padding-top: 6px;
                font-size: 35px !important;
                font-weight: var(--font-weight-700);
            }
        }

        @media only screen and (max-width: 768px) and (min-width: 576px) {
            .banerh1 {
                font-size: 32px !important;
                font-weight: var(--font-weight-700);
            }

            .content__container__list__item {
                font-size: 32px;
                font-weight: 500;
                color: white;
            }

            .content__container__list {
                margin-left: 11%;
                margin-top: 0px;
            }

            .content__container {
                height: 54px;
                /* margin-top: 140px; */
            }
        }

        @media only screen and (max-width: 576px) and (min-width: 500px) {
            .banerh1 {
                font-size: 30px !important;
                font-weight: var(--font-weight-700);
            }

            .content__container__list__item {
                font-size: 30px;
                font-weight: 500;
                color: white;
            }

            .content__container__list {
                margin-left: 10%;
                margin-top: 0px;
            }

            .content__container {
                height: 53px;
                /* margin-top: 140px; */
            }
        }

        @media only screen and (max-width: 500px) and (min-width: 424px) {
            .banerh1 {
                font-size: 25px !important;
                padding-top: 4px;
                font-weight: var(--font-weight-700);
            }

            .content__container__list__item {
                font-size: 25px;
                font-weight: 500;
                color: white;
            }

            .content__container {
                height: 44px;
                /* margin-top: 140px; */
            }

            .content__container__list {
                margin-left: 10%;
                margin-top: 3.5px;
            }
        }

        @media only screen and (max-width: 424px) and (min-width: 375px) {
            .banerh1 {
                font-size: 21px !important;
                font-weight: var(--font-weight-700);
            }

            .content__container__list__item {
                font-size: 21px;
                font-weight: 500;
                color: white;
            }

            .content__container {
                height: 35px;
                /* margin-top: 140px; */
            }

            .content__container__list {
                margin-left: 7%;
                margin-top: 0px;
            }
        }

        @media only screen and (max-width: 375px) and (min-width: 320px) {
            .banerh1 {
                font-size: 18px !important;
                font-weight: var(--font-weight-700);
            }

            .content__container__list__item {
                font-size: 18px;
                font-weight: 500;
                color: white;
            }

            .content__container {
                height: 30px;
                /* margin-top: 140px; */
            }

            .content__container__list {
                margin-left: 6%;
                margin-top: 0px;
            }
        }
    </style>

</head>

<body>
    <!-- +++++++++++  section-navigationbar  +++++++++++ -->
    <header>
        <div class="navBaner  navPad ">
            <nav class="navbar navbar-expand-lg   " id="navbar1">
                <div class="container py-2">
                    <a class="navbar-brand nav_aWidht" href="<?php echo e(route('index')); ?>"><img
                            src="<?php echo e(asset('assets/frontend/img/logo1.png')); ?>" alt="" class="navlog"></a>
                    <div class="nav_hide ">
                        <!--  -->
                        <button class="btn navOfbtn" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><img
                                src="<?php echo e(asset('assets/frontend/img/phonemenu.svg')); ?>" width="40px"
                                alt="Website Menubar with 3 Vertical Lines Navigation Icon"
                                title="Menubar Navigation with 3 Vertical Lines - webgurukul"></button>
                        <div class="offcanvas offcanvas-top navMSw h-100" tabindex="-1" id="offcanvasTop"
                            aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header navbgBlack">
                                <p class="offcanvas-title " id="offcanvasTopLabel">
                                    <a href="<?php echo e(route('index')); ?>" class="text-decoration-none">
                                        <img src="<?php echo e(asset('assets/frontend/img/logo.webp')); ?>" width="200px"
                                            alt="Webgurukul Institute logo"
                                            title="Webgurukul Institute - Empowering Education, Enhancing Futures">
                                    </a>
                                </p>
                                <button type="button" class="btn-close navOffbtn" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body navbgBlack">
                                <ul class="ps-0">
                                    <li class="nav-item nav-link pe-4 pb-4 ">
                                        <a class="nav_a text-decoration-none  active navColorfix   navhtext  "
                                            aria-current="page" href="<?php echo e(route('index')); ?>"> Home
                                        </a>
                                    </li>

                                    <li class="nav-item nav-link pe-4 pb-4 ">
                                        <a class="nav_a text-decoration-none  active  navhtext     " aria-current="page"
                                            href="<?php echo e(route('homeloan')); ?>"> Home Loan
                                        </a>
                                    </li>

                                    <li class="nav-item nav-link pe-4 pb-4">
                                        <a class="nav_a text-decoration-none  active  navhtext     " aria-current="page"
                                            href="<?php echo e(route('propertypage')); ?>">Why Choose Us
                                        </a>
                                    </li>
                                    <li class="nav-item  pe-4 pb-4">
                                        <button class="btn px-4 py-2   rounded-pill navBtn" type="submit">
                                            <a class="navbtna   nav_a text-decoration-none  active  navhtext     "
                                                aria-current="page" href="<?php echo e(route('login')); ?>">Patner Login
                                            </a>
                                        </button>
                                    </li>
                                    <!-- <li class="nav-item nav-link pe-4 pb-4 ">
                                        <a class="nav_a text-decoration-none  active  navhtext    "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal" aria-current="page"
                                            href="contact.html">Blog
                                        </a>
                                    </li> -->
                                    <!--  -->
                                    <!-- <li class="nav-item nav-link pe-4 pb-4 ">
                                        <a class="nav_a text-decoration-none  active  navhtext  navhtext  "
                                            data-bs-toggle="modal" data-bs-target="#exampleModal" aria-current="page"
                                            href="#">
                                            <img src="asset/img/telephone-call.svg" alt="">
                                        </a>
                                    </li> -->
                                    <li class="nav-item nav-link pt-2  ">
                                        <a class="nav_a text-decoration-none  active  navhtext  navCallIcon  "
                                            aria-current="page" href="tel:+911-800-700-6200">
                                            <img src="<?php echo e(asset('assets/frontend/img/navCall.svg')); ?>" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <div class="nav_hide1">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item nav-link me-3">
                                    <a class="nav_a text-decoration-none  active navColorfix   navhtext  "
                                        aria-current="page" href="<?php echo e(route('index')); ?>"> Home
                                    </a>
                                </li>
                                <li class="nav-item nav-link me-3">
                                    <a class="nav_a text-decoration-none  active  navhtext     " aria-current="page"
                                        href="<?php echo e(route('homeloan')); ?>"> Home&nbsp;Loan
                                    </a>
                                </li>
                                <li class="nav-item nav-link me-3">
                                    <a class="nav_a text-decoration-none  active  navhtext     " aria-current="page"
                                        href="<?php echo e(route('propertypage')); ?>"> Why&nbsp;Choose&nbsp;Us
                                    </a>
                                </li>
                                <li class="nav-item me-3">
                                    <button class="btn px-4 py-2   rounded-pill navBtn" type="submit">
                                        <a class="navbtna   nav_a text-decoration-none  active  navhtext     "
                                            aria-current="page" href="<?php echo e(route('login')); ?>">Patner&nbsp;Login
                                        </a>
                                    </button>
                                </li>
                                <li class="nav-item nav-link ">
                                    <a class="nav_a text-decoration-none  active  navhtext  navCallIcon  "
                                        aria-current="page" href="tel:+911-800-700-6200">
                                        <img src="<?php echo e(asset('assets/frontend/img/navCall.svg')); ?>" alt="">
                                    </a>
                                </li>
                            </ul>
                            <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
                        </div>
                    </div>
                </div>
            </nav>

            <!-- baner -->
            <?php if(session('success')): ?>
                <div class="py-5 mt-5">

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>
          <!-- Display validation errors -->
<?php if($errors->any()): ?>
<div class="py-5 mt-5">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?>



<!-- Display success message from session -->
<?php if(session('success')): ?>
<div class="py-5 mt-5">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?>

<!-- Display custom error from session -->
<?php if(session('error')): ?>
<div class="py-5 mt-5">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?>

            <?php echo $__env->yieldContent('banner'); ?>
        </div>
    </header>
    <!-- ========  section-x-navigationbar END  ======== -->
<?php /**PATH D:\propy\propyhome\propyhomes\resources\views/frontend/layout/header.blade.php ENDPATH**/ ?>