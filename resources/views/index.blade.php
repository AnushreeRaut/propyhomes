@section('tags')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
@endsection

@section('banner')
    <!-- baner -->
    <div class="banerdpa">
        <div class=" banderImg ">
            <div class="container pt-2 pt-sm-5">
                <div class="col-lg-6 col-6  px-lg-2 pt-3 pt-md-5 text-lg-start text-center banerPb">
                    <p class="text-light banerP">Discover your dream home</p>
                    <!--  -->
                    <div class="content"></div>
                    <div class="content__container text-start">
                        <p class="content__container__text GoldC banerh1 fs-1">With</p>
                        <ul class="content__container__list  ">
                            <li class="content__container__list__item">0% Brokerage Fee</li>
                            <li class="content__container__list__item">Lowest Price Guaranteed</li>
                            <li class="content__container__list__item">Easy Home Loan Sanction</li>
                            <li class="content__container__list__item">0% Brokerage Fee</li>
                        </ul>
                    </div>
                    <div class="searchbox-wrap  mt-3">
                        <input type="text" class="" placeholder="Search by location and project Name">
                        <button class="banner-btn "><span class="rounded-pill fw-bold">Search</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@extends('frontend.layout.main')

@section('content')

    <!-- +++++++++++  section 1  +++++++++++ -->
    <section class="section pt-5">
        <div class="sec1Before  mt-3">
            <h2> <span class="headlineGrayC"> Choose</span> <span class="headlineGoldC"> Your City</span></h2>
        </div>
        <div class="container my-1 py-5">
            <div class="row ">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v1.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Hingna</h5>
                        <p class="sectextp">2 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v2.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Mankapur</h5>
                        <p class="sectextp">3 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v3.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Mate Chowk</h5>
                        <p class="sectextp">1 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v4.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Khamla</h5>
                        <p class="sectextp">1 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v5.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Wanadongri</h5>
                        <p class="sectextp">2 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v6.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Gitanjali Chowk</h5>
                        <p class="sectextp">3 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v7.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Kamptee </h5>
                        <p class="sectextp">4 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v8.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Automotive Square</h5>
                        <p class="sectextp">2 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v9.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Kalamna</h5>
                        <p class="sectextp">1 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v10.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Manewada</h5>
                        <p class="sectextp">2 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v11.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Ajni</h5>
                        <p class="sectextp">1 Projects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4 ">
                    <div class="text-center sec2bor rounded-3 py-2 h-100">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/v12.png') }}" width="50%" alt=""
                                class="sec1Imgb">
                        </div>
                        <h5 class="pt-1 sectexth5">Bardi</h5>
                        <p class="sectextp">2 Projects</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========  section 1   END  ======== -->

    <!-- +++++++++++  section 2  +++++++++++ -->

    <!--  1 slider -->
    <!--  1 slider -->
    <section class="section sec2bgColor pt-4 pt-lg-5 pb-4   ">
        <div class="sec1Before  mt-3 mb-4 mb-lg-5">
            <h2> <span class="headlineGrayC"> Top Selling</span> <span class="headlineGoldC"> Projects</span></h2>
        </div>
        <!-- <div class="d-flex pt-5 mt-3">
                <div class="pt-1">
                    <img src="assets/frontend/img/line.svg" alt="">
                </div>
                <div class="ps-3">
                    <h2> <span class="headlineGrayC"> Top Selling</span> <span class="headlineGoldC"> Projects</span></h2>
                </div>
            </div> -->
        <div class="container  pb-5 pb-lg-1">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class=" position-relative sec2Macard rounded-3 card-container    pt-3 z-1">
                            <a href="{{ route('viewlotus') }}" class="text-decoration-none">
                                <div class="px-3 position-relative sec2dH overflow-visible  ">
                                    <div class="image-wrapper position-relative ">
                                        <img src="{{ asset('assets/frontend/img/Rectangle 23.webp') }}"
                                            class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark ">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt rounded-3  px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 "> Lotus Residency</h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img
                                                    src="{{ asset('assets/frontend/img/telephone-call.svg') }}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                                class="pe-2 sec2ImgWS1" alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                    <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove z-n1 "></div>
                            </a>
                        </div>
                    </div>
                        @foreach($projects as $project)
                            <div class="swiper-slide">
                                <div class="position-relative sec2Macard rounded-3 card-container pt-3 z-1">
                                    <a href="{{ route('projects.show', $project->id) }}" class="text-decoration-none">
                                        <div class="px-3 position-relative sec2dH overflow-visible">
                                            <div class="image-wrapper position-relative">
                                                @if($project->cover_image)
                                                    <img src="{{ asset($project->cover_image) }}" class="sec2ImgMai" alt="{{ $project->title }}">
                                                @else
                                                    <img src="{{ asset('path/to/default-image.jpg') }}" class="sec2ImgMai" alt="Default Image">
                                                @endif
                                                <div class="position-absolute sec2ImgD px-3 py-2">
                                                    <h6 class="mb-0 sec2PriceText text-dark">Price ₹ {{ $project->price_range_start }} - ₹ {{ $project->price_range_end }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sec2pt rounded-3 px-3">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="sec2Texth6 text-start mb-0">{{ $project->title }}</h6>
                                                <p class="ps-2 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <span class="sec2SpanCr"><img src="{{ asset('assets/frontend/img/telephone-call.svg') }}" alt="" class=""></span>
                                                </p>
                                            </div>
                                            <div class="d-flex pt-1">
                                                <p><img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}" class="pe-2 sec2ImgWS1" alt=""></p>
                                                <p class="sec2Textp text-start">{{ $project->location }}</p>
                                            </div>
                                            <div class="sec2Bord w-100"></div>
                                            <div class="row pt-3 pb-0 px-2 rounded-3">
                                                <div class="col-6 mb-1">
                                                    <div class="d-flex">
                                                        <p class="pe-3 pt-1"><img src="{{ asset('assets/frontend/img/Fit-to-Page.svg') }}" alt="" class="sec2ImgWS"></p>
                                                        <p class="sec2Textp text-start">{{ $project->area }} Sq Ft</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-1">
                                                    <div class="d-flex">
                                                        <p class="pe-3 pt-1"><img src="{{ asset('assets/frontend/img/Bed.svg') }}" alt="" class="sec2ImgWS"></p>
                                                        <p class="sec2Textp text-start">{{ $project->bedrooms }} Bedroom</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-1">
                                                    <div class="d-flex">
                                                        <p class="pe-3 pt-1"><img src="{{ asset('assets/frontend/img/Bath.svg') }}" alt="" class="sec2ImgWS"></p>
                                                        <p class="sec2Textp text-start">{{ $project->bathrooms }} Bathroom</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-1">
                                                    <div class="d-flex">
                                                        <p class="pe-3 pt-1"><img src="{{ asset('assets/frontend/img/Car-Cleaning.svg') }}" alt="" class="sec2ImgWS"></p>
                                                        <p class="sec2Textp text-start">{{ $project->parking }} Parking Space</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-absolute w-100 sec2Wihove z-n1"></div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    <div class="swiper-slide ">
                        <div class=" position-relative sec2Macard rounded-3 card-container  pt-3 z-1">
                            <a href="{{ route('mahendra') }}" class="text-decoration-none">
                                <div class="px-3 position-relative sec2dH overflow-visible ">
                                    <div class="image-wrapper position-relative ">
                                        <img src="{{ asset('assets/frontend/img/Rectangle 23.webp') }}"
                                            class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt rounded-3 px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 ">Mahendra Regalia</h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img
                                                    src="{{ asset('assets/frontend/img/telephone-call.svg') }}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                                class="pe-2 sec2ImgWS1" alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                  <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove z-n1 "></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class=" position-relative sec2Macard rounded-3 card-container  pt-3 z-1">
                            <a href="{{ route('orchid') }}" class="text-decoration-none">
                                <div class="px-3 position-relative sec2dH overflow-visible ">
                                    <div class="image-wrapper position-relative ">
                                        <img src="{{ asset('assets/frontend/img/Rectangle 23.webp') }}"
                                            class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt rounded-3 px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 ">Orchid Infinity</h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img
                                                    src="{{ asset('assets/frontend/img/telephone-call.svg') }}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                                class="pe-2 sec2ImgWS1" alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                  <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove z-n1 "></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class=" position-relative sec2Macard rounded-3 card-container  pt-3 z-1">
                            <a href="{{ route('insight') }}" class="text-decoration-none">
                                <div class="px-3 position-relative sec2dH overflow-visible ">
                                    <div class="image-wrapper position-relative ">
                                        <img src="{{ asset('assets/frontend/img/Rectangle 23.webp') }}"
                                            class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt rounded-3 px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 ">Insight Edge</h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img
                                                    src="{{ asset('assets/frontend/img/telephone-call.svg') }}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                                class="pe-2 sec2ImgWS1" alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                  <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove z-n1 "></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class=" position-relative sec2Macard rounded-3 card-container  pt-3 z-1">
                            <a href="{{ route('anjaeja') }}" class="text-decoration-none">

                                <div class="px-3 position-relative sec2dH overflow-visible ">
                                    <div class="image-wrapper position-relative ">
                                        <img src="{{ asset('assets/frontend/img/Rectangle 23.webp') }}"
                                            class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt rounded-3 px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 ">Anjaneya
                                            Crest</h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img
                                                    src="{{ asset('assets/frontend/img/telephone-call.svg') }}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                                class="pe-2 sec2ImgWS1" alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                  <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove z-n1 "></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!--  2 slider -->
    <section class="section sec2bgColor1 pt-4 pt-lg-5 pb-4   ">
        <div class="sec1Before  mt-3 mb-4 mb-lg-5">
            <h2> <span class="headlineGrayC"> Newly Launched</span> <span class="headlineGoldC"> Projects</span></h2>
        </div>
        <div class="container  pb-5 pb-lg-1">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper  bg-white">
                    <div class="swiper-slide  bg-white">
                        <div class=" position-relative sec2Macard bg-white   rounded-3 card-container    pt-3 z-1">
                            <a href="{{route('viewbalaji')}}" class="text-decoration-none">

                                <div class="px-3 position-relative sec2dH overflow-visible  ">
                                    <div class="image-wrapper position-relative  ">
                                        <img src="{{asset('assets/frontend/img/Rectangle 23.webp')}}" class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt sec2pt1 rounded-3  px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 "> Balaji Paradise </h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img src="{{asset('assets/frontend/img/telephone-call.svg')}}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}" class="pe-2 sec2ImgWS1"
                                                alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                    <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove sec2Wihove1 z-n1 "></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide  bg-white">
                        <div class=" position-relative sec2Macard bg-white   rounded-3 card-container    pt-3 z-1">
                            <a href="{{route('viewbella')}}" class="text-decoration-none">

                                <div class="px-3 position-relative sec2dH overflow-visible  ">
                                    <div class="image-wrapper position-relative  ">
                                        <img src="{{asset('assets/frontend/img/Rectangle 23.webp')}}" class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt sec2pt1 rounded-3  px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 ">Bella</h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img src="{{asset('assets/frontend/img/telephone-call.svg')}}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}" class="pe-2 sec2ImgWS1"
                                                alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                    <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove sec2Wihove1 z-n1 "></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide  bg-white">
                        <div class=" position-relative sec2Macard bg-white   rounded-3 card-container    pt-3 z-1">
                            <a href="{{route('viewmaelite')}}" class="text-decoration-none">

                                <div class="px-3 position-relative sec2dH overflow-visible  ">
                                    <div class="image-wrapper position-relative  ">
                                        <img src="{{asset('assets/frontend/img/Rectangle 23.webp')}}" class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt sec2pt1 rounded-3  px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 ">Elites Park View</h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img src="{{asset('assets/frontend/img/telephone-call.svg')}}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}" class="pe-2 sec2ImgWS1"
                                                alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                    <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove sec2Wihove1 z-n1 "></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide  bg-white">
                        <div class=" position-relative sec2Macard bg-white   rounded-3 card-container    pt-3 z-1">
                            <a href="{{route('viewvedant')}}" class="text-decoration-none">

                                <div class="px-3 position-relative sec2dH overflow-visible  ">
                                    <div class="image-wrapper position-relative  ">
                                        <img src="{{asset('assets/frontend/img/Rectangle 23.webp')}}" class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt sec2pt1 rounded-3  px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 ">Vedant Auqamarine</h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img src="{{asset('assets/frontend/img/telephone-call.svg')}}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}" class="pe-2 sec2ImgWS1"
                                                alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                    <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove sec2Wihove1 z-n1 "></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide  bg-white">
                        <div class=" position-relative sec2Macard bg-white   rounded-3 card-container    pt-3 z-1">
                            <a href="{{route('viewbalaji')}}" class="text-decoration-none">

                                <div class="px-3 position-relative sec2dH overflow-visible  ">
                                    <div class="image-wrapper position-relative  ">
                                        <img src="{{asset('assets/frontend/img/Rectangle 23.webp')}}" class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt sec2pt1 rounded-3  px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 ">Godrej Reserve
                                            Kandivali</h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img src="{{asset('assets/frontend/img/telephone-call.svg')}}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}" class="pe-2 sec2ImgWS1"
                                                alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                    <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove sec2Wihove1 z-n1 "></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide  bg-white">
                        <div class=" position-relative sec2Macard bg-white   rounded-3 card-container    pt-3 z-1">
                            <a href="{{route('viewbalaji')}}" class="text-decoration-none">

                                <div class="px-3 position-relative sec2dH overflow-visible  ">
                                    <div class="image-wrapper position-relative  ">
                                        <img src="{{asset('assets/frontend/img/Rectangle 23.webp')}}" class="sec2ImgMai" alt="Image">
                                        <div class="position-absolute  sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">Price ₹ 2.25Cr ₹ 2.5 Cr</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec2pt sec2pt1 rounded-3  px-3 ">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="sec2Texth6 text-start mb-0 ">Godrej Reserve
                                            Kandivali</h6>
                                        <p class="ps-2  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="sec2SpanCr  "><img src="{{asset('assets/frontend/img/telephone-call.svg')}}"
                                                    alt="" class=""></span>
                                        </p>
                                    </div>
                                    <div class="d-flex  pt-1">
                                        <p> <img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}" class="pe-2 sec2ImgWS1"
                                                alt=""></p>
                                        <p class="sec2Textp text-start">
                                            Kandivali East,
                                            Mumbai, Maharashtra
                                        </p>
                                    </div>
                                    <div class="sec2Bord w-100"></div>
                                    <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex ">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Fit-to-Page.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">480 Sq Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bed.svg')}}" alt=""
                                                        class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Bath.svg')}}" alt=""
                                                        class=" sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">2 Bathroom</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img src="{{asset('assets/frontend/img/Car-Cleaning.svg')}}"
                                                        alt="" class=" sec2ImgWS">
                                                </p>
                                                <p class="sec2Textp text-start">2 Bedroom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute  w-100 sec2Wihove sec2Wihove1 z-n1 "></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- ========  section 2   END  ======== -->

    <!-- +++++++++++  section 4  +++++++++++ -->
    <section class="section sec4bgImg py-4">
        <div class="text-center py-5 container">
            <h2 class="text-light">
                <span class="sec4TextH2 text-white">Always in the</span>
                <span class="GoldC sec4TextH2_1">News!</span>
            </h2>
            <p class="text-light pt-3 sectextp">
                As we recently got our listing in the National Stock Exchange, <br>
                we have published a news post to let you know what we have been up to
            </p>
            <div class="row pt-4 sec4Pad">
                <div class="col-lg-3 col-6 p-2 mb-4">
                    <img src="{{ asset('assets/frontend/img/sec4_1.png') }}" width="90%" alt="">
                </div>
                <div class="col-lg-3 col-6 p-2 mb-4">
                    <img src="{{ asset('assets/frontend/img/sec4_2.png') }}" width="90%" alt="">
                </div>
                <div class="col-lg-3 col-6 p-2 mb-4">
                    <img src="{{ asset('assets/frontend/img/sec4_3.png') }}" width="90%" alt="">
                </div>
                <div class="col-lg-3 col-6 p-2 mb-4">
                    <img src="{{ asset('assets/frontend/img/sec4_4.png') }}" width="90%" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- ========  section 4   END  ======== -->

<!-- +++++++++++  section 5  +++++++++++ -->
<section class="section sec5bgImg pt-5">
    <div class="sec1Before  mt-3">
        <h2> <span class="headlineGrayC"> Tie-Up With</span> <span class="headlineGoldC"> Client</span></h2>
    </div>
    <div class=" my-1  pt-5 pb-4">
        <div class="owl-carousel sec4owl-carousel  owl-theme   pt-1 pb-2">
            <div class="item sec4item   d-flex align-items-center rounded-3      my-2 ">
                <img src="{{asset('assets/frontend/clientlogo/logovedant.png')}}" alt="" class="rounded-3 s5_img ">
            </div>
            <div class="item sec4item  my-2 d-flex align-items-center rounded-3       ">
                <img src="{{asset('assets/frontend/clientlogo/logoelitePark.png')}}" alt="" class="rounded-3 s5_img ">
            </div>
            <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
                <img src="{{asset('assets/frontend/clientlogo/logobella.png')}}" alt="" class="rounded-3 s5_img ">
            </div>
            <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
                <img src="{{asset('assets/frontend/clientlogo/logobalaji.png')}}" alt="" class="rounded-3 s5_img ">
            </div>
            <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
                <img src="{{asset('assets/frontend/clientlogo/logoAnjaneya.png')}}" alt="" class="rounded-3 s5_img ">
            </div>
            <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
                <img src="{{asset('assets/frontend/clientlogo/logoinsightEdge.png')}}" alt="" class="rounded-3 s5_img ">
            </div>
            <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
                <img src="{{asset('assets/frontend/clientlogo/logoOrchidinfinity.png')}}" alt="" class="rounded-3 s5_img ">
            </div>
            <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
                <img src="{{asset('assets/frontend/clientlogo/logomahendra.png')}}" alt="" class="rounded-3 s5_img ">
            </div>
            <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
                <img src="{{asset('assets/frontend/clientlogo/logKrishna.png')}}" alt="" class="rounded-3 s5_img ">
            </div>
            <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
                <img src="{{asset('assets/frontend/clientlogo/logolotus.png')}}" alt="" class="rounded-3 s5_img ">
            </div>
        </div>
    </div>
</section>
<!-- ========  section 5   END  ======== -->


    <!-- +++++++++++  section 6  +++++++++++ -->
    <section class="section sec6BgC">
        <div class="buildbgImg position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-5 pb-lg-1 pb-4">
                        <div class="text-lg-start text-center">
                            <h2 class="sec6textH2">Looking for the right property?</h2>
                            <p class="sec6Textp">Consult with the Real estate experts -</p>


                            <form action="{{ route('phone_requests.store') }}" method="POST">
                                @csrf
                                <div class="sec6searchbox-wrap">
                                    <input type="text" name="phone_number"
                                        class="@error('phone_number') is-invalid @enderror"
                                        placeholder="Enter your number" required>

                                    <button class="sec6banner-btn" type="submit">
                                        <span class="rounded-pill">Call me back</span>
                                    </button>
                                </div>
                                <span id="phone_error" style="color: red; display: none;"></span>

                                <!-- Laravel Validation Error -->
                                @error('phone_number')
                                <div class="invalid-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </form>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const phoneInput = document.querySelector('input[name="phone_number"]');
                                    const errorMsg = document.getElementById('phone_error');

                                    // Real-time validation on input
                                    phoneInput.addEventListener('input', function() {
                                        const phoneValue = phoneInput.value;

                                        // Remove any non-numeric characters (including alphabets and special characters)
                                        phoneInput.value = phoneValue.replace(/[^0-9]/g, '');

                                        // Validate the input
                                        if (phoneInput.value.length > 0 && phoneInput.value.length < 10) {
                                            errorMsg.textContent = 'Please enter a 10-digit phone number';
                                            errorMsg.style.display = 'block'; // Show error message
                                        } else if (phoneInput.value.length === 10) {
                                            errorMsg.textContent = ''; // Clear error if valid
                                            errorMsg.style.display = 'none'; // Hide error message
                                        } else {
                                            errorMsg.textContent = 'Only numbers are allowed';
                                            errorMsg.style.display = 'block'; // Show error message
                                        }
                                    });

                                    // On form submit, check if the phone number is valid (10 digits)
                                    const form = document.querySelector('form');
                                    form.addEventListener('submit', function(event) {
                                        const phoneValue = phoneInput.value;

                                        if (phoneValue.length !== 10) {
                                            event.preventDefault(); // Prevent form submission if invalid
                                            errorMsg.textContent = 'Please enter a valid 10-digit phone number';
                                            errorMsg.style.display = 'block'; // Show error message
                                        }
                                    });
                                });
                            </script>

                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
            <img src="{{ asset('assets/frontend/img/sec6bgImg.webp') }}" class="position-absolute sec6col2Img"
                alt="">
        </div>
    </section>
    <!-- ========  section 6   END  ======== -->

    <!-- +++++++++++  section 7  +++++++++++ -->
    {{-- <section class="section sec7bgC pt-5">
        <div class="sec1Before mt-3">
            <h2> <span class="headlineGrayC"> Latest Blog </span> <span class="headlineGoldC">Posts</span></h2>
        </div>
        <div class="container my-1 py-5">
            <div class="row">

            </div>
        </div>
    </section> --}}
    <!-- ========  section 7   END  ======== -->
@endsection
