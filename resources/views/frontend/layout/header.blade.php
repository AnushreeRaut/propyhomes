<!DOCTYPE html>
<html lang="en">

<head>
    @yield('tags')
    <!-- ====== icons ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/54ce859d2c.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- ====== carousal ===== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css') }}">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- slick -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-theme.css') }}">
    <!-- ====== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" type="text/css">
    <!-- ====== CSS-MQ ===== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/styleMQ.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/frontend/img/logo.png') }}" type="image/x-icon">
    <!--  -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!--  -->

    <style>
        .searchbox-wrap {
            display: flex;
            width: 100%;
            margin: 8% auto;
            background-color: #00000030;
            border-radius: 35px;
            border: 1px solid #ffffff;
            box-sizing: border-box;
            box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.19);

            input {
                flex: 1;
                padding: 23px 25px;
                font-size: 1em;
                border: none;
                border-top-left-radius: 35px;
                border-bottom-left-radius: 35px;
                background-color: #00000030;
                color: var(--color-white);
                box-sizing: border-box;

                &:focus {
                    outline: none;
                }
            }

            .banner-btn {
                background-color: #00000030;
                padding: 0 9px;
                border-top-right-radius: 35px;
                border-bottom-right-radius: 35px;
                /* box-shadow: 5px 4px 6px rgba(0, 0, 0, 0.19); */
                border: none;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: end;

                span {
                    display: inline-block;
                    font-size: 0.9em;
                    /* text-transform: uppercase; */
                    font-weight: var(--font-weight-600);
                    color: #000000;
                    border: 2px solid transparent;
                    background: linear-gradient(90deg, #e9e09b 0%, #a07a43 100%) padding-box,
                        linear-gradient(#dbcc8a 0%, #a58149 100%) border-box;
                    border-radius: 30px;
                    box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.19);
                    padding: 10px 30px;
                    box-sizing: border-box;
                    border-radius: 50%;

                    &:hover {
                        background-color: #d6121f;
                        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.19);
                    }
                }
            }

            @media (max-width: 1200px) {
                margin: 5% auto;
            }

            @media (max-width: 992px) {
                /* flex-direction: column; */
                margin: 4% auto;
                width: 90%;

                input {
                    padding: 18px 20px;
                    font-size: 0.9em;
                }

                .banner-btn {
                    width: 20%;

                    justify-content: end;

                    /* border-radius: 35px; */
                    /* margin-top: 10px; */
                    span {
                        padding: 10px 20px;
                        font-size: 0.8em;
                    }
                }
            }

            @media (max-width: 768px) {
                margin: 3% auto;

                input {
                    padding: 15px 18px;
                    font-size: 0.95em;
                }

                .banner-btn {
                    width: 21%;

                    /* margin-top: 8px; */
                    span {
                        padding: 8px 18px;
                        font-size: 0.7em;
                    }
                }
            }

            @media (max-width: 576px) {
                margin: 2% auto;

                input {
                    padding: 15px 15px;
                    font-size: 0.9em;
                }

                .banner-btn {
                    width: 20%;

                    /* margin-top: 5px; */
                    span {
                        padding: 6px 15px;
                        font-size: 0.6em;
                    }
                }
            }

            @media (max-width: 455px) {
                margin: 2% auto;

                input {
                    padding: 15px 15px;
                    font-size: 0.82em;
                }

                .banner-btn {
                    width: 22%;

                    /* margin-top: 5px; */
                    span {
                        padding: 6px 15px;
                        font-size: 0.6em;
                    }
                }
            }

            @media (max-width: 422px) {
                margin: 2% auto;

                input {
                    padding: 16px 15px;
                    font-size: 0.77em;
                }

                .banner-btn {
                    width: 24%;

                    /* margin-top: 5px; */
                    span {
                        padding: 6px 15px;
                        font-size: 0.6em;
                    }
                }
            }

            @media (max-width: 406px) {
                margin: 2% auto;

                input {
                    padding: 16px 15px;
                    font-size: 0.72em;
                }

                .banner-btn {
                    width: 25%;

                    span {
                        padding: 6px 15px;
                        font-size: 0.6em;
                    }
                }
            }

            @media (max-width: 383px) {
                margin: 2% auto;

                input {
                    padding: 16px 15px;
                    font-size: 0.66em;
                }

                .banner-btn {
                    width: 26%;

                    /* margin-top: 5px; */
                    span {
                        padding: 6px 15px;
                        font-size: 0.6em;
                    }
                }
            }

            @media (max-width: 367px) {
                margin: 2% auto;

                input {
                    padding: 17px 15px;
                    font-size: 0.63em;
                }

                .banner-btn {
                    width: 28%;

                    /* margin-top: 5px; */
                    span {
                        padding: 6px 15px;
                        font-size: 0.6em;
                    }
                }
            }

            @media (max-width: 360px) {
                margin: 2% auto;

                input {
                    padding: 17px 15px;
                    font-size: 0.59em;
                }

                .banner-btn {
                    width: 28%;

                    /* margin-top: 5px; */
                    span {
                        padding: 6px 15px;
                        font-size: 0.6em;
                    }
                }
            }

            @media (max-width: 344px) {
                margin: 2% auto;

                input {
                    padding: 17px 15px;
                    font-size: 0.55em;
                }

                .banner-btn {
                    width: 29%;

                    /* margin-top: 5px; */
                    span {
                        padding: 6px 15px;
                        font-size: 0.6em;
                    }
                }
            }
        }

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
            background: #FFFDF8;
            box-shadow: 0px 0px 10px 0px #00000040;
            width: 98%;
            margin-left: 0.5px;
            left: 50%;
        }

        /*  */
        .Home_s1_h {
            height: 75px;
        }

        .home_s1_padding {
            padding-left: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-right: 60px;
        }

        @media only screen and (min-width: 1400px) {
            .p2s2bgc {
                background: #FFFDF8;
                box-shadow: 0px 0px 10px 0px #00000040;
                width: 98%;
                /* left: 1%; */
            }
        }

        @media only screen and (max-width: 1400px) and (min-width: 1200px) {
            .p2s2padding {
                padding-top: 420px;
            }

            .p2s2bgc {
                /* left: 50.8%; */
            }

            .Home_s1_h {
                height: 90px;
            }
        }

        /* @media only screen and (max-width: 1400px) and (min-width: 992px) {
        } */
        @media only screen and (max-width: 1200px) and (min-width: 992px) {
            .p2s2padding {
                padding-top: 430px;
            }

            .p2s2bgc {
                /* left: 51%; */
            }

            .Home_s1_h {
                height: 90px;
            }

            .home_s1_padding {
                padding-left: 10px;
                padding-top: 20px;
                padding-bottom: 20px;
                padding-right: 40px;
            }
        }

        @media only screen and (max-width: 992px) {
            .home_s1_padding {
                padding-left: 0px;
                padding-top: 10px;
                padding-bottom: 20px;
                padding-right: 0px;
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
                /* left: 51.4%; */
            }

            .Home_s1_h {
                height: 90px;
                /* background: chartreuse; */
            }
        }

        @media only screen and (max-width: 768px) {
            .p2s2bgc {
                /* left: 52%; */
                width: 96%;
                margin-left: 0px;
            }
        }

        @media only screen and (max-width: 768px) and (min-width: 576px) {
            .p2s2padding {
                padding-top: 700px;
            }

            .p2s1height {
                height: 860px;
            }

            .p2s1bgimg {
                background-image: none;
                background: black;
            }

            .Home_s1_h {
                height: 90px;
                /* background: chartreuse; */
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
                /* left: 52%; */
                /* width: 94%; */
            }

            /*  */
            .p2s1height {
                height: 815px;
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
                /* left: 52.7%; */
            }

            .Home_s1_h {
                height: 70px;
                /* background: chartreuse; */
            }

            /*  */
        }

        @media only screen and (max-width: 500px) and (min-width: 482px) {
            .p2s1height {
                height: 820px;
            }
        }

        @media only screen and (max-width: 482px) and (min-width:454px) {
            .p2s1height {
                height: 860px;
            }
        }

        @media only screen and (max-width: 454px) and (min-width:424px) {
            .p2s1height {
                height: 870px;
            }
        }

        @media only screen and (max-width: 424px) and (min-width: 375px) {
            .p2s2bgc {
                /* left: 52.8%; */
            }

            .Home_s1_h {
                height: 80px;
                /* background: chartreuse; */
            }

            .p2s1height {
                height: 900px !important;
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

            .p2s1height {
                height: 910px !important;
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

            .p2s1height {
                height: 900px !important;
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
                /* left: 52.9%; */
            }

            .Home_s1_h {
                height: 100px;
                /* background: chartreuse; */
            }
        }

        @media only screen and (max-width: 375px) and (min-width: 360px) {
            .p2s1height {
                height: 930px !important;
            }
        }

        @media only screen and (max-width: 360px) and (min-width: 320px) {
            .p2s1height {
                height: 950px !important;
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

        .navlogutbtn {
            position: absolute;
            width: 120px;
            height: 120px;
            background-color: var(--color-white);
            right: -10px;
            top: 80px;
            outline: 3px solid var(--color-white);
            outline-offset: -1px;
        }

        .navlogutbtn ul {
            list-style-type: none;
        }

        .navLogoutbtnC {
            background-color: black;
        }

        .d-none {
            display: none;
        }

        .d-block {
            display: block;
            /* or inline-block depending on your layout */
        }
    </style>
    <style>
        .search_s1h2T {
            font-weight: 500;
            font-size: 1.8rem;
        }

        .search_s1h3T {
            font-weight: 500;
            font-size: 18px;
        }

        .form-select:focus {
            box-shadow: none;
        }

        .btn_bgC {
            /* background: rgba(0, 0, 255, 0.221); */
            background: #C8A86440;
        }

        .search_col2S {
            font-size: 1rem;
        }

        .search-inputs {
            border: 1px solid #8E8E8E;
            border-radius: 5px;
            color: #3D3D3D;
            font-size: 14px;
            font-weight: 400;
            height:
                35px;
        }

        .search-inputs:focus {
            border: 1px solid #8E8E8E;
        }

        .search-inputs span {
            background-color: white
        }

        .search-inputs input::placeholder {
            font-size: 12px;
            font-weight: 400;
        }

        .search-inputs input {
            font-size: 12px;
            font-weight: 400;
        }

        .search-checkBorder {
            box-shadow: none;
            border: 1px solid #C8A864;
        }

        .search-checkBorder:focus {
            box-shadow: none;
            border: 1px solid #C8A864;
        }

        .search-checkBorder:checked {
            background-color: #C8A864;
            border: 1px solid #C8A864;
            box-shadow: none;
        }

        /* .form-check-input:checked {
        background-color: #fdf70d;
        border-color: #0d6efd;
    } */
        .search-col1btn {
            background-image: linear-gradient(#C8A864, #C8A864);
            height: 50px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 500;
            color: white;
        }

        .search-col1btn:hover {
            color: white;
        }

        .search-col2-t {
            font-size: 18px;
            font-weight: 400;
            color: #3D3D3D;
        }

        .search-col3h2 {
            font-weight: 600;
            font-size: 14px;
        }

        .search-col3p {
            font-size: 12px;
            font-weight: 500;
        }

        .search-col3p1 {
            font-size: 12px;
            font-weight: 400;
            color: #6F6C6C;
        }

        .search-s2btn {
            height: 52px;
            border: 1px solid #35b542;
            font-size: 14px;
            font-weight: 600;
            color: #3d3d3d;
        }

        .search-s2btn:hover {
            border: 1px solid #35b542;
        }

        .search-s2btn:focus {
            box-shadow: none;
        }

        .search-s2btn1 {
            height: 52px;
            border: 1px solid #35b542;
            font-size: 14px;
            font-weight: 600;
            color: #3d3d3d;
            background: #35b542;
        }

        .search-s2btn1:hover {
            height: 52px;
            border: 1px solid #35b542;
            font-size: 14px;
            font-weight: 600;
            color: #3d3d3d;
            background: #35b542;
        }

        .search-s2btn1:focus {
            box-shadow: none;
        }

        .search-s2btn1 img {
            width: 18px;
        }

        .search-s2btn img {
            width: 18px;
        }

        .search-btnBSH {
            border: 1px solid #a8864d;
            padding: 7px 12px;
            color: #6f6c6c;
            font-size: 12px;
            font-weight: 500;
        }

        .search-btnBSH:hover {
            border: 1px solid #a8864d;
            color: #6f6c6c;
            background: #c8a86438;
        }

        .search-div3 {
            width:
                76px;
            border: 0.5px solid #cecece;
        }

        .search-div3 img {
            width:
                30px;
        }

        .search-div3R {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .search-div3T {
            font-size: 10px;
            font-weight: 500;
            padding-top: 10px;
        }

        .search-cardOffer-h6 {
            font-size: 18px;
            font-weight: 600;
        }

        .search-cardOffer-h61 {
            font-size: 27px;
            font-weight: 700;
        }

        .search-cardOffer-h62 {
            font-size: 18px;
            font-weight: 600;
        }

        .search-ulW li::marker {
            color: white;
        }

        .search-ulW li {
            color: white;
            font-size: 16px;
            font-weight: 600;
        }

        .search-cardOffer-btn {
            width:
                136px;
            height: 40px;
            line-height: 28px;
            background-image: linear-gradient(white, white);
            font-size: 14px;
            font-weight: 600;
            color: #a8864d;
        }

        .search-cardOffer-btn:hover {
            color: #a8864d;
        }

        .search-icon-text {
            font-size: 14px;
            font-weight: var(--font-weight-600);
            color: #3d3d3d;
        }

        .search-col1-bgc {
            background: #F3F4F4;
            border: 1px solid #EAEAEA;
            box-shadow: 0px 4px 4px 0px #DADADA40;
        }

        /* oooooooooooooooooooooooooooo */
        /* body {
        font-family: Arial, sans-serif;
    } */
        .budget-section {
            text-align: center;
            /* margin: 0px auto; */
            width: 100%;
            max-width: 600px;
            margin-bottom: 35px;
        }

        .budget-section h3 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .budget-slider-container {
            display: flex;
            /* align-items: center; */
            /* justify-content: space-between; */
            margin-top: 20px;
        }

        .budget-slider {
            position: relative;
            width: 100%;
            /* margin: 0 20px; */
        }

        .budget-track {
            position: absolute;
            width: 100%;
            height:
                2.26px;
            background: #b69150;
            top: 50%;
            /* left: 20%; */
            transform: translateY(-50%);
            border-radius: 3px;
        }

        .budget-slider input[type="range"] {
            position: absolute;
            width: 100%;
            appearance: none;
            background: none;
            pointer-events: none;
            z-index: 2;
            top: -13px;
            left: 0;
        }

        .budget-slider input[type="range"]::-webkit-slider-thumb {
            appearance: none;
            height: 24px;
            width: 24px;
            background-color: white;
            border: 3px solid #b69150;
            border-radius: 50%;
            cursor: pointer;
            pointer-events: all;
            position: relative;
        }

        .budget-slider input[type="range"]::-moz-range-thumb {
            height: 24px;
            width: 24px;
            background-color: white;
            border: 3px solid #b69150;
            border-radius: 50%;
            cursor: pointer;
            pointer-events: all;
        }

        #minRange {
            z-index: 3;
        }

        #maxRange {
            z-index: 4;
        }

        .budget-slider-container span {
            background-color: #ede4d2;
            padding: 10px 20px;
            border-radius: 15px;
            font-size: 18px;
            color: #333;
        }

        .search-navCallIcon {
            /* background: linear-gradient(180deg, rgba(168, 134, 77, 0.2) 0%, rgba(216, 199, 135, 0.2) 100%); */
            border: 2px solid transparent;
            background: linear-gradient(90deg, #faf6f0 0%, #faf6f0 100%) padding-box,
                linear-gradient(#dbcc8a 0%, #a58149 100%) border-box;
            border-radius: 30px;
            /* padding: 5px 10px; */
            width:
                27.88px;
            height:
                28.4px;
            display: block;
            /* padding-top: 7.3px;
        padding-bottom: 11px; */
            text-align: center;
        }

        .search-navCallIcon img {
            width:
                12.25px;
        }

        /* same  copy */
        .psec2bordeS-shodow {
            border: 1px solid #eaeaea;
            box-shadow: 0px 4px 4px 0px #DADADA40;

        }

        .search-inputPlace input::placeholder {
            font-size: 14px;
            font-weight: 500;
            color: #6F6C6C;
        }

        .search-select {
            padding: 10px;
            font-size: 14px;
            font-weight: 500;
            border: none;
            color: #6F6C6C;
        }

        .search-textIntere {
            font-size: 14px;
            font-weight: 500;
        }

        /*  */
        .search-sec2h {
            width: 100%;
            height: 134px;
        }

        @media only screen and (max-width: 1400px) and (min-width: 1200px) {
            .search-sec2h {
                width: 100%;
                height: 110px;
            }

            .search-s2btn {
                font-size: 12px;
            }

            .search-s2btn1 {
                font-size: 12px;
            }

            .search-s2btn img {
                width: 16px;
            }

            .search-s2btn1 img {
                width: 16px;
            }
        }

        @media only screen and (max-width: 992px) and (min-width: 768px) {
            .search-sec2h {
                width: 100%;
                height: 160px;
            }
        }

        @media only screen and (max-width: 768px) and (min-width: 576px) {
            .search-sec2h {
                width: 100%;
                height: 275px;
            }
        }

        @media only screen and (max-width: 576px) and (min-width: 500px) {
            .search-sec2h {
                width: 100%;
                height: 51vw;
            }
        }

        @media only screen and (max-width: 500px) and (min-width: 425px) {
            .search-sec2h {
                width: 100%;
                height: 49vw;
            }
        }

        @media only screen and (max-width: 425px) and (min-width: 375px) {
            .search-sec2h {
                width: 100%;
                height: 47vw;
            }
        }

        @media only screen and (max-width: 375px) and (min-width: 320px) {
            .search-sec2h {
                width: 100%;
                height: 44vw;
            }
        }



        .search-cardOfferImg {
            height: 100%;
            background-image: url(/asset/img/Detail-cardoffer-home.png);
            background-size:
                95px 100px;
            background-position: 101% 101%;
            background-repeat: no-repeat;
        }




        .search-psec2borde1 img {
            width:
                25px;
        }



        /* 88888888888888888888888888 */
    </style>

    <style>
        .Detail-div3R {

            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;


        }



        @media only screen and (max-width: 1400px) {

            .Detail-div3R {

                justify-content: center;
                flex-wrap: wrap;
                gap: 10px;
            }

        }



        .Detail-textp {
            font-size: 14px;
            font-weight: 500;
        }




        .psec2bordeS-shodow {
            border: 1px solid #eaeaea;
            box-shadow: 0px 4px 4px 0px #DADADA40;



        }

        .Detail-textIntere {


            font-size: 14px;
            font-weight: 500;
        }


        .Detail-inputPlace input::placeholder {
            font-size: 14px;
            font-weight: 500;
            color: #6F6C6C;

        }

        .Detail-select {
            color: #6F6C6C;

            font-size: 14px;
            font-weight: 500;
        }


        .Detail-s2phc {
            background: white;
            width:
                141px;
            height:
                45px;
            top: 25px;
            right: 80px;
            border-radius: 5px;
            border: 1px solid #A8864D;
            display: flex;

            justify-content: center
        }

        .Detail-s2phc h2 {
            font-size: 16px;
            color: #A8864D;

            align-content: center;
            font-weight: 600;
        }

        .Detail-s2phc h2 i {
            font-size: 16px;
            color: #A8864D;




        }

        .Detail-s2phc1 {
            width:

                45px;
            height:

                45px;

            top: 25px;
            right: 20px;
            border: 1px solid #A8864D;
            border-radius: 50%;
            background-color: white;
            line-height: 40px;
        }

        /*  */


        .demo:hover {
            border: 2px solid #C8A864;
            box-shadow: 0px 0px 15px 1px #00000040;

        }





        @media only screen and (max-width: 1400px) and (min-width: 1200px) {



            .detail-s2btn1 {

                font-size: 15px;
                font-weight: 600;

            }


            .detail-s2btn {

                font-size: 15px;
                font-weight: 600;

            }
        }



        @media only screen and (max-width: 425px) and (min-width: 0px) {
            .detail-s2btn1 {

                font-size: 11px;
                font-weight: 600;

            }


            .detail-s2btn {

                font-size: 11px;
                font-weight: 600;

            }

            .detail-s2btn1 img {
                width: 14px;
            }


            .detail-s2btn img {
                width: 14px;

            }





        }




        @media only screen and (max-width: 768px) and (min-width: 576px) {

            .Detail-s2phc {
                background: white;
                width:
                    130px;
                height:
                    40px;
                top: 10px;
                right: 60px;
                border-radius: 5px;
                border: 1px solid #A8864D;
                display: flex;

                justify-content: center
            }

            .Detail-s2phc h2 {
                font-size: 16px;
                color: #A8864D;

                align-content: center;
                font-weight: 600;
            }

            .Detail-s2phc h2 i {
                font-size: 16px;
                color: #A8864D;




            }

            .Detail-s2phc1 {
                width:

                    41px;
                height:

                    40px;

                top: 10px;
                right: 11px;
                border: 1px solid #A8864D;
                border-radius: 50%;
                background-color: white;
                line-height: 40px;
            }




        }

        @media only screen and (max-width: 576px) and (min-width: 425px) {

            .Detail-s2phc {
                background: white;
                width:
                    125px;
                height:
                    35px;
                top: 10px;
                right: 60px;
                border-radius: 5px;
                border: 1px solid #A8864D;
                display: flex;

                justify-content: center
            }

            .Detail-s2phc h2 {
                font-size: 16px;
                color: #A8864D;

                align-content: center;
                font-weight: 600;
            }

            .Detail-s2phc h2 i {
                font-size: 16px;
                color: #A8864D;




            }

            .Detail-s2phc1 {
                width:

                    37px;
                height:

                    37px;

                top: 10px;
                right: 11px;
                border: 1px solid #A8864D;
                border-radius: 50%;
                background-color: white;
                line-height: 37px;
            }




        }

        @media only screen and (max-width: 425px) and (min-width:375px) {

            .Detail-s2phc {
                background: white;
                width:
                    120px;
                height:
                    35px;
                top: 10px;
                right: 55px;
                border-radius: 5px;
                border: 1px solid #A8864D;
                display: flex;

                justify-content: center
            }

            .Detail-s2phc h2 {
                font-size: 13px;
                color: #A8864D;

                align-content: center;
                font-weight: 600;
            }

            .Detail-s2phc h2 i {
                font-size: 13px;
                color: #A8864D;




            }

            .Detail-s2phc1 {
                width:

                    35px;
                height:

                    35px;

                top: 10px;
                right: 11px;
                border: 1px solid #A8864D;
                border-radius: 50%;
                background-color: white;
                line-height: 35px;
            }




        }

        @media only screen and (max-width: 375px) and (min-width:320px) {

            .Detail-s2phc {
                background: white;
                width:
                    110px;
                height:
                    30px;
                top: 10px;
                right: 50px;
                border-radius: 5px;
                border: 1px solid #A8864D;
                display: flex;

                justify-content: center
            }

            .Detail-s2phc h2 {
                font-size: 13px;
                color: #A8864D;

                align-content: center;
                font-weight: 600;
            }

            .Detail-s2phc h2 i {
                font-size: 13px;
                color: #A8864D;




            }

            .Detail-s2phc1 {
                width:

                    30px;
                height:

                    30px;

                top: 10px;
                right: 11px;
                border: 1px solid #A8864D;
                border-radius: 50%;
                background-color: white;
                line-height: 30px;
            }




        }
    </style>
<style>
.input-btn {
            margin-left: 8px;
            border: 2px solid transparent;
            background: linear-gradient(90deg, #E9E09B 0%, #A07A43 100%) padding-box,
                linear-gradient(#DBCC8A 0%, #A58149 100%) border-box;
            border-radius: 30px;
            box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.19);
            padding: 10px 30px;
            font-size: 0.9em;
            /* text-transform: uppercase; */
            font-weight: 600;
            color: #000000;
        }
        /* new inpute */
        .index-search-container {
            /* width: 700px; */
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #333;
            border-radius: 8px;
            border: 1px solid #fff;
            /* height:
                87px; */
            /* gap: 5px; */
        }
        .index-search-input {
            padding: 10px;
            /* margin: 5px; */
            border-radius: 0px;
            border: none;
            width: 100%;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
            border: 1px solid white;
        }
        .index-search-input:focus {
            border: 1px solid #C8A864;
            /* Slight golden border when focused */
        }
        .index-search-btn {
            padding: 10px 20px;
            margin-left: 5px;
            background-color: #C8A864;
            /* Golden background for the button */
            color: white;
            font-size: 16px;
            border-radius: 3px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 20px !important;
        }
        .index-search-btn:hover {
            background-color: #B39257;
            /* Darker golden on hover */
        }
        .index-search-container input::placeholder {
            color: #404040;
        }
        /* buget */
        /* General Styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-toggle {
            background-color: white;
            border: 1px solid #CED4DA;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 0px;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #FFFFFF;
            width: 200px;
            border: 1px solid #ccc;
            z-index: 1;
            padding: 10px;
            border-radius: 4px;
            height: 250px;
        }
        .rangeBox {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .minBox,
        .maxBox {
            width: 48%;
        }
        .minBox input,
        .maxBox input {
            width: 100%;
            padding: 5px;
            border: 1px solid #CED4DA;
            border-radius: 4px;
        }
        .minBox ul,
        .maxBox ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .minBox li,
        .maxBox li {
            padding: 8px;
            cursor: pointer;
            margin-bottom: 5px;
            border-radius: 4px;
            font-size: 12px;
        }
        .minBox li:hover,
        .maxBox li:hover {
            background-color: #F1F1F1;
        }
        .dropdown.active .dropdown-menu {
            display: block;
        }
        .min-max-div {
            height: 220px;
            overflow: auto;
        }
        .rangeBox-top {
            top: 0px;
        }
        .min-max-div::-webkit-scrollbar {
            background: linear-gradient(white);
            border-radius: 20px;
            width: 10px;
        }
        .min-max-div::-webkit-scrollbar-thumb {
            background: #BFBFBF;
            border-radius: 20px;
        }
        .input-SaleminPrice {
            border: 1px solid #C8A864;
        }
        .input-SaleminPrice:focus {
            border: 1px solid #C8A864;
        }
        .input-SalemaxPrice {
            border: 1px solid #C8A864;
        }
        .input-SalemaxPrice:focus {
            border: 1px solid #C8A864;
        }
        .input-SaleminPrice::placeholder {
            font-size: 12px;
        }
        .input-SalemaxPrice::placeholder {
            font-size: 12px;
        }
        .index-search-input-Bleft {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .index-search-input-Bright {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .dropdown-toggle-btn {
            color: #555555;
        }
        .dropdown-toggle::after {
            color: #555555;
        }

@media only screen and (max-width: 768px) {
            .index-search-input {
                height: 35px;
            }
            .dropdown-toggle {
                height: 35px;
                padding-top: 5px !important;
                width: 100%;
            }
            .index-input-btn {
                height: 35px;
                padding-top: 5px;
            }
            .index-dropdown {
                width: 100%;
            }
        }
        @media only screen and (max-width: 424px) {
            .index-search-btn {
                height: 100%;
            }
        }
        @media only screen and (max-width: 500px) and (min-width: 425px) {
            .index-search-input {
                width: 80px;
            }
            .index-search-container {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }
            .dropdown-toggle {
                width: 110px;
            }
            .index-dropdown {
                width: 100px;
            }
            .index-input-btn {
                width: 110px;
                padding-left: 26px;
            }
            .dropdown-menu {
                left: -48px;
            }
        }
        @media only screen and (max-width: 407px) and (min-width: 0px) {
            .index-input-btn {
                width: 110px;
            }
        }
        @media only screen and (max-width:425px) and (min-width: 375px) {
            .input-btn {
                margin-top: 10px !important;
            }
            .index-search-input {
                width: 27%;
            }
            .index-search-container {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }
            .dropdown-toggle {
                width: 110px;
            }
            .index-dropdown {
                width: 110px;
            }
            .dropdown-menu {
                width: 180px;
                left: -38px;
            }
        }
        @media only screen and (max-width:375px) and (min-width: 320px) {
            .index-search-input {
                width: 60px;
                height: 28px;
                font-size: 13px;
            }
            .index-input-btn {
                width: 70px;
                padding-left: 12px;
                height: 30px;
                font-size: 12px;
            }
            .index-search-container {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }
            .dropdown-toggle {
                width: 85px !important;
                padding-left: 12px;
                height: 28px;
                font-size: 13px;
                padding-top: 0;
            }
            .budgetSearch {
                font-size: 5px;
            }
            .dropdown-toggle::after {
                display: inline-block;
                margin-left: .255em;
                vertical-align: .255em;
                content: " ";
                border-top: .3em solid;
                border-right: .3em solid transparent;
                border-bottom: 0;
                border-left: .3em solid transparent;
            }
            .index-dropdown {
                width: 100px;
            }
            .dropdown-menu {
                width: 180px;
                left: -38px;
            }
            .dropdown-toggle-btn {
                position: relative;
                top: -1px;
            }
        }
        @media only screen and (max-width:436px) and (min-width: 375px) {
            .input-btn {
                margin-top: 10px !important;
            }
        }
        @media only screen and (max-width:355px) and (min-width: 0px) {
            .input-btn {
                margin-top: 10px !important;
            }
        }
</style>
</head>

<body>
    <!-- +++++++++++  section-navigationbar  +++++++++++ -->
    <header>
        <div class="navBaner  navPad ">
            <nav class="navbar navbar-expand-lg pt-1" id="navbar1">
                <div class="container py-2">
                    <a class="navbar-brand nav_aWidht" href="{{ route('index') }}"><img
                            src="{{ asset('assets/frontend/img/logo1.png') }}" alt="" class="navlog"></a>
                    <div class="nav_hide ">
                        <!--  -->
                        <button class="btn navOfbtn" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><img
                                src="{{ asset('assets/frontend/img/phonemenu.svg') }}" width="40px"
                                alt="Website Menubar with 3 Vertical Lines Navigation Icon"
                                title="Menubar Navigation with 3 Vertical Lines - webgurukul"></button>
                        <div class="offcanvas offcanvas-top navMSw h-100" tabindex="-1" id="offcanvasTop"
                            aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header navbgBlack">
                                <p class="offcanvas-title " id="offcanvasTopLabel">
                                    <a href="{{ route('index') }}" class="text-decoration-none">
                                        <img src="{{ asset('assets/frontend/img/logo.webp') }}" width="200px"
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
                                            aria-current="page" href="{{ route('index') }}"> Home
                                        </a>
                                    </li>

                                    <li class="nav-item nav-link pe-4 pb-4 ">
                                        <a class="nav_a text-decoration-none  active  navhtext     " aria-current="page"
                                            href="{{ route('homeloan') }}"> Home Loan
                                        </a>
                                    </li>

                                    <li class="nav-item nav-link pe-4 pb-4">
                                        <a class="nav_a text-decoration-none  active  navhtext     " aria-current="page"
                                            href="{{ route('propertypage') }}">Why Choose Us
                                        </a>
                                    </li>
                                    <li class="nav-item  pe-4 pb-4">
                                        <button class="btn px-4 py-2   rounded-pill navBtn" type="submit">
                                            <a class="navbtna   nav_a text-decoration-none  active  navhtext     "
                                                aria-current="page" href="{{ route('login') }}">Patner Login
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
                                    <li class="nav-item nav-link pt-2 ` ">
                                        <a class="nav_a text-decoration-none  active  navhtext  navCallIcon  "
                                            aria-current="page" href="tel:+911-800-700-6200">
                                            <img src="{{ asset('assets/frontend/img/navCall.svg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item nav-link pt-3  ">
                                        <p class="">
                                            <a class="nav_a text-decoration-none  position-relative active  navhtext  navCallIcon  "
                                                aria-current="page" data-bs-toggle="collapse" href="#collapseExample"
                                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <img src="{{ asset('assets/frontend/img/MoveUp.svg') }}"
                                                    alt="">
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body navLogoutbtnC">
                                                <ul class="ps-0 pt-3">
                                                    <li class="nav-item nav-link">
                                                        <div class=" ">
                                                            <div class="  ">
                                                                <a class="nav_a text-decoration-none  active position-relative navhtext   ds1Nicon  "
                                                                    aria-current="page" href="#">
                                                                    <img src="{{ asset('assets/frontend/asset/img/User.svg') }}"
                                                                        class="" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li class="">
                                                    <li class="dc2hover mt-5 nav-item nav-link">
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST">
                                                            @csrf
                                                            <p class="py-2 mb-0"> <a href="#"
                                                                    class="text-decoration-none">Logout</a> </p>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
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
                                        aria-current="page" href="{{ route('index') }}"> Home
                                    </a>
                                </li>
                                <li class="nav-item nav-link me-3">
                                    <a class="nav_a text-decoration-none  active  navhtext     " aria-current="page"
                                        href="{{ route('homeloan') }}"> Home&nbsp;Loan
                                    </a>
                                </li>
                                <li class="nav-item nav-link me-3">
                                    <a class="nav_a text-decoration-none  active  navhtext     " aria-current="page"
                                        href="{{ route('propertypage') }}"> Why&nbsp;Choose&nbsp;Us
                                    </a>
                                </li>
                                <li class="nav-item me-3">
                                    <button class="btn px-4 py-2   rounded-pill navBtn" type="submit">
                                        <a class="navbtna   nav_a text-decoration-none  active  navhtext     "
                                            aria-current="page" href="{{ route('login') }}">Patner&nbsp;Login
                                        </a>
                                    </button>
                                </li>
                                <li class="nav-item nav-link ">
                                    <a class="nav_a text-decoration-none  active  navhtext  navCallIcon  "
                                        aria-current="page" href="tel:+911-800-700-6200">
                                        <img src="{{ asset('assets/frontend/img/navCall.svg') }}" alt="">
                                    </a>
                                </li>
                                @auth
                                    <li class="nav-item nav-link">
                                        <a class="nav_a text-decoration-none position-relative active navhtext navCallIcon"
                                            href="#" onclick="logout()">
                                            <img src="{{ asset('assets/frontend/img/MoveUp.svg') }}" alt="">
                                        </a>
                                        <div class="navlogutbtn rounded-1 d-none" id="logoutdiv">
                                            <ul class="ps-0 pt-3">
                                                <li>
                                                    <div class="text-center">
                                                        <a class="nav_a text-decoration-none active position-relative navhtext ds1Nicon"
                                                            href="#">
                                                            <img src="{{ asset('assets/frontend/asset/img/User.svg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="dc2hover mt-3 text-center">
                                                    <form id="logout-form" action="{{ route('logout') }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn">Logout</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                @endauth


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
            @yield('banner')
        </div>
    </header>
    <!-- ========  section-x-navigationbar END  ======== -->
    <script>
        let logoutDiv = document.getElementById('logoutdiv');

        function logout() {
            if (logoutDiv.classList.contains('d-none')) {
                logoutDiv.classList.remove('d-none');
                logoutDiv.classList.add('d-block');
            } else {
                logoutDiv.classList.remove('d-block');
                logoutDiv.classList.add('d-none');
            }
        }
    </script>
