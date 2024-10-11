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
                <div class="col-lg-7 col-12  px-lg-2 pt-3 pt-md-5 text-lg-start text-center banerPb">
                    <p class="text-light banerP">Discover your dream home</p>
                    <!--  -->
                    <div class="content"></div>
                    <div class="content__container text-start">
                        <p class="content__container__text GoldC banerh1 fs-1">With</p>
                        <ul class="content__container__list">
                            <li class="content__container__list__item">0% Brokerage Fee</li>
                            <li class="content__container__list__item">Lowest Price Guaranteed</li>
                            <li class="content__container__list__item">Easy Home Loan Sanction</li>
                            <li class="content__container__list__item">0% Brokerage Fee</li>
                        </ul>
                    </div>
                    <form action="{{ route('property.search') }}" method="GET">
                        <div class="index-search-container px-3 py-3">
                            <!-- Search by Location -->
                            <input type="text" name="search_term" placeholder="Search by location"
                                class="index-search-input  index-search-input-Bleft">

                            <!-- Budget Dropdown -->
                            <div class="dropdown budget index-dropdown bg-white">
                                <button class="dropdown-toggle" type="button">
                                    <span class="dropdown-toggle-btn bg-white">Budget</span>
                                </button>
                                <div class="dropdown-menu" id="DdmenuSale">
                                    <div class="contentBox position-relative">
                                        <div class="rangeBox rangeBox-top position-absolute me-3">
                                            <div class="minBox">
                                                <input type="text" name="price_range_start" class="form-control SaleminPrice input-SaleminPrice"
                                                    placeholder="Minimum" id="minBox-input">
                                            </div>
                                            <div class="d-flex align-items-center">-</div>
                                            <div class="maxBox">
                                                <input type="text" class="form-control SalemaxPrice input-SalemaxPrice"
                                                    placeholder="No Max" id="maxBox-input" readonly>
                                            </div>
                                        </div>
                                        <div class="min-max-div mt-2">
                                            <div class="rangeBox">
                                                <!-- Minimum Budget Options -->
                                                <div class="minBox overflow-hidden" id="minBox-div">
                                                    <ul class="SaleminbudgetSearch" style="display: block;">
                                                        <li value="500000" textval="₹ 5 Lac">₹ 5 Lac</li>
                                                        <li value="1000000" textval="₹ 10 Lac">₹ 10 Lac</li>
                                                        <li value="1500000" textval="₹ 15 Lac">₹ 15 Lac</li>
                                                        <li value="2000000" textval="₹ 20 Lac">₹ 20 Lac</li>
                                                        <li value="2500000" textval="₹ 25 Lac">₹ 25 Lac</li>
                                                        <li value="3000000" textval="₹ 30 Lac">₹ 30 Lac</li>
                                                        <li value="4000000" textval="₹ 40 Lac">₹ 40 Lac</li>
                                                        <li value="5000000" textval="₹ 50 Lac">₹ 50 Lac</li>
                                                        <li value="6000000" textval="₹ 60 Lac">₹ 60 Lac</li>
                                                        <li value="7500000" textval="₹ 75 Lac">₹ 75 Lac</li>
                                                        <li value="10000000" textval="₹ 1 Cr.">₹ 1 Cr.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BHK Dropdown -->
                            <select name="bhk_type" class="index-search-input index-search-input-Bright">
                                <option value="">No of rooms (BHK Type)</option>
                                <option value="1BHK">1BHK</option>
                                <option value="2BHK">2BHK</option>
                                <option value="3BHK">3BHK</option>
                                <option value="4BHK">4BHK</option>
                                <option value="5BHK">5BHK</option>
                            </select>

                            <!-- Search Button -->
                            <button type="submit" class="input-btn index-input-btn text-decoration-none">
                                <span class="rounded-pill fw-bold">Search</span>
                            </button>
                        </div>
                    </form>

                    {{-- <div class="index-search-container px-3 py-3">
                        <input type="text" placeholder="Search by location"
                            class="index-search-input  index-search-input-Bleft ">
                        <div class="dropdown budget  index-dropdown bg-white">
                            <button class="dropdown-toggle " type="button"> <span
                                    class="dropdown-toggle-btn bg-white">Budget</span>
                            </button>
                            <div class="dropdown-menu" id="DdmenuSale">
                                <div class="contentBox position-relative  ">
                                    <div class="rangeBox rangeBox-top position-absolute   me-3">
                                        <div class="minBox">
                                            <input type="text" class="form-control SaleminPrice input-SaleminPrice"
                                                placeholder="Minimum" id="minBox-input">
                                        </div>
                                        <div class=" d-flex align-items-center">-</div>
                                        <div class="maxBox">
                                            <input type="text" class="form-control SalemaxPrice input-SalemaxPrice"
                                                placeholder="No Max" id="maxBox-input">
                                        </div>
                                    </div>
                                    <div class="min-max-div mt-2  ">
                                        <div class="rangeBox ">
                                            <div class="minBox  overflow-hidden" id="minBox-div">
                                                <ul class="SaleminbudgetSearch" style="display: block;">
                                                    <li value="500000" textval="₹ 5 Lac">₹ 5 Lac</li>
                                                    <li value="1000000" textval="₹ 10 Lac">₹ 10 Lac</li>
                                                    <li value="1500000" textval="₹ 15 Lac">₹ 15 Lac</li>
                                                    <li value="2000000" textval="₹ 20 Lac">₹ 20 Lac</li>
                                                    <li value="2500000" textval="₹ 25 Lac">₹ 25 Lac</li>
                                                    <li value="3000000" textval="₹ 30 Lac">₹ 30 Lac</li>
                                                    <li value="4000000" textval="₹ 40 Lac">₹ 40 Lac</li>
                                                    <li value="5000000" textval="₹ 50 Lac">₹ 50 Lac</li>
                                                    <li value="6000000" textval="₹ 60 Lac">₹ 60 Lac</li>
                                                    <li value="7500000" textval="₹ 75 Lac">₹ 75 Lac</li>
                                                    <li value="9000000" textval="₹ 90 Lac">₹ 90 Lac</li>
                                                    <li value="10000000" textval="₹ 1 Cr.">₹ 1 Cr.</li>
                                                    <li value="12500000" textval="₹ 1.25 Cr.">₹ 1.25 Cr.</li>
                                                    <li value="15000000" textval="₹ 1.5 Cr.">₹ 1.5 Cr.</li>
                                                    <li value="17500000" textval="₹ 1.75 Cr.">₹ 1.75 Cr.</li>
                                                    <li value="20000000" textval="₹ 2 Cr.">₹ 2 Cr.</li>
                                                    <li value="30000000" textval="₹ 3 Cr.">₹ 3 Cr.</li>
                                                    <li value="40000000" textval="₹ 4 Cr.">₹ 4 Cr.</li>
                                                    <li value="50000000" textval="₹ 5 Cr.">₹ 5 Cr.</li>
                                                    <li value="100000000" textval="₹ 10 Cr.">₹ 10 Cr.</li>
                                                    <li value="200000000" textval="₹ 20 Cr.">₹ 20 Cr.</li>
                                                    <li value="300000000" textval="₹ 30 Cr.">₹ 30 Cr.</li>
                                                    <li value="500000000" textval="₹ 50 Cr.">₹ 50 Cr.</li>
                                                    <li value="750000000" textval="₹ 75 Cr.">₹ 75 Cr.</li>
                                                </ul>
                                            </div>
                                            <div class="maxBox">
                                                <ul class="SalemaxbudgetSearch" style="display: none;">
                                                    <li value="500000" textval="₹ 5 Lac">₹ 5 Lac</li>
                                                    <li value="1000000" textval="₹ 10 Lac">₹ 10 Lac</li>
                                                    <li value="1500000" textval="₹ 15 Lac">₹ 15 Lac</li>
                                                    <li value="2000000" textval="₹ 20 Lac">₹ 20 Lac</li>
                                                    <li value="2500000" textval="₹ 25 Lac">₹ 25 Lac</li>
                                                    <li value="3000000" textval="₹ 30 Lac">₹ 30 Lac</li>
                                                    <li value="4000000" textval="₹ 40 Lac">₹ 40 Lac</li>
                                                    <li value="5000000" textval="₹ 50 Lac">₹ 50 Lac</li>
                                                    <li value="6000000" textval="₹ 60 Lac">₹ 60 Lac</li>
                                                    <li value="7500000" textval="₹ 75 Lac">₹ 75 Lac</li>
                                                    <li value="9000000" textval="₹ 90 Lac">₹ 90 Lac</li>
                                                    <li value="10000000" textval="₹ 1 Cr.">₹ 1 Cr.</li>
                                                    <li value="12500000" textval="₹ 1.25 Cr.">₹ 1.25 Cr.</li>
                                                    <li value="15000000" textval="₹ 1.5 Cr.">₹ 1.5 Cr.</li>
                                                    <li value="17500000" textval="₹ 1.75 Cr.">₹ 1.75 Cr.</li>
                                                    <li value="20000000" textval="₹ 2 Cr.">₹ 2 Cr.</li>
                                                    <li value="30000000" textval="₹ 3 Cr.">₹ 3 Cr.</li>
                                                    <li value="40000000" textval="₹ 4 Cr.">₹ 4 Cr.</li>
                                                    <li value="50000000" textval="₹ 5 Cr.">₹ 5 Cr.</li>
                                                    <li value="100000000" textval="₹ 10 Cr.">₹ 10 Cr.</li>
                                                    <li value="200000000" textval="₹ 20 Cr.">₹ 20 Cr.</li>
                                                    <li value="300000000" textval="₹ 30 Cr.">₹ 30 Cr.</li>
                                                    <li value="500000000" textval="₹ 50 Cr.">₹ 50 Cr.</li>
                                                    <li value="750000000" textval="₹ 75 Cr.">₹ 75 Cr.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="text" placeholder="No of rooms"
                            class="index-search-input index-search-input-Bright">
                        <a class="input-btn  index-input-btn text-decoration-none" href="{{route('property.search')}}"><span class="rounded-pill fw-bold">Search</span>
                        </a>
                    </div> --}}


                    {{-- <div class="searchbox-wrap  mt-3">
                        <input type="text" class="" placeholder="Search by location and project Name">
                        <button class="banner-btn "><span class="rounded-pill fw-bold">Search</span>
                        </button>
                    </div> --}}


                    <!-- <div class="d-flex mb-3">
                                    <label for="inputEmail3" class=" col-form-label text-white">Locality</label>
                                    <div class="">
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <label for="inputEmail3" class=" col-form-label text-white">Price range</label>
                                    <div class="">
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                    <div class="">
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div> -->
                    <!-- <div class="row">
                                    <div class="col-6 mb-2">
                                        <label>Land Address:</label>
                                        <input type="text" placeholder="Enter land address" class="form-control">
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label>Name:</label>
                                        <input type="text" placeholder="Enter name" class="form-control">
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label>Age:</label>
                                        <input type="number" placeholder="Enter age" class="form-control">
                                    </div>
                                </div> -->
                </div>


            </div>
        </div>
    </div>
    </div>
@endsection


@extends('frontend.layout.main')

@section('content')
    <!-- +++++++++++  section 2  +++++++++++ -->
    <!--  2 slider -->
    <section class="section sec2bgColor1 pt-4 pt-lg-5 pb-4   ">


        <!-- Top Selling Projects Section -->
        @if ($topSellingProjects->isNotEmpty())
            <section class="section sec2bgColor pt-4 pt-lg-5 pb-4">
                <div class="sec1Before mt-3 mb-4 mb-lg-5">
                    <h2><span class="headlineGrayC">Top Selling</span> <span class="headlineGoldC">Projects</span></h2>
                </div>
                <div class="container pb-5 pb-lg-1">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($topSellingProjects as $property)
                                <div class="swiper-slide ">
                                    <div class="position-relative sec2Macard rounded-3 card-container pt-3 z-1">
                                        <a href="{{ route('properties.show.prop', $property->id) }}"
                                            class="text-decoration-none">
                                            <div class="px-3 position-relative sec2dH overflow-visible">
                                                <div class="image-wrapper position-relative">
                                                    @foreach ($property->images as $propertyImage)
                                                        @if ($propertyImage->propertyImage->imageCategory->category_name === 'Cover Image')
                                                            <img src="{{ asset($propertyImage->propertyImage->image) }}"
                                                                alt="Cover Image" class="sec2ImgMai">
                                                            <!-- Check if the property is RERA approved and display a badge -->
                                                            @if ($property->rera)
                                                                <!-- Small box or icon for RERA approval using Font Awesome -->
                                                                <div
                                                                    class="rera-approval-badge position-absolute bottom-0 end-0 bg-success text-white p-1 rounded">
                                                                    <i class="fas fa-check-circle me-1"></i>
                                                                    <!-- Font Awesome Icon -->
                                                                    <span>RERA Approved</span>
                                                                </div>
                                                            @endif
                                                        @break
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="position-absolute sec2ImgD px-3 py-2">
                                                <h6 class="mb-0 sec2PriceText text-dark">
                                                    Starting Price ₹ {{ $property->formatted_price_range_start }}
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="sec2pt rounded-3 px-3 index-swiper-slide">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="sec2Texth6 text-start mb-0">{{ $property->title }}</h6>
                                            </div>
                                            @foreach ($property->locations as $location)
                                                <div class="d-flex pt-1">
                                                    <p><img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                                            class="pe-2 sec2ImgWS1" alt=""></p>
                                                    <p class="sec2Textp text-start">
                                                        {{ $location->area->area_name }}, {{ $location->city->name }},
                                                        {{ $location->state->name }}
                                                    </p>
                                                </div>
                                            @endforeach
                                            <div class="sec2Bord w-100"></div>
                                            <div class="row pt-3 pb-0 px-2 rounded-3">
                                                <div class="col-6 mb-1">
                                                    <div class="d-flex">
                                                        <p class="pe-3 pt-1"><img
                                                                src="{{ asset('assets/frontend/img/Fit-to-Page.svg') }}"
                                                                alt="" class="sec2ImgWS"></p>
                                                        <p class="sec2Textp text-start">{{ $property->flat_area }} Sq
                                                            Ft
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-1">
                                                    <div class="d-flex">
                                                        <p class="pe-3 pt-1"><img
                                                                src="{{ asset('assets/frontend/img/Bed.svg') }}"
                                                                alt="" class="sec2ImgWS"></p>
                                                        <p class="sec2Textp text-start">{{ $property->bhk_type }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-absolute w-100 sec2Wihove z-n1"></div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    @endif

    <!-- Newly Launched Projects Section -->
    @if ($newlyLaunchedProjects->isNotEmpty())
        <section class="section sec2bgColor pt-4 pt-lg-5 pb-4">
            <div class="sec1Before mt-3 mb-4 mb-lg-5">
                <h2><span class="headlineGrayC">Newly Launched</span> <span class="headlineGoldC">Projects</span></h2>
            </div>
            <div class="container pb-5 pb-lg-1">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        @foreach ($newlyLaunchedProjects as $property)
                            <div class="swiper-slide">
                                <div class="position-relative sec2Macard rounded-3 card-container pt-3 z-1">
                                    <a href="{{ route('properties.show.prop', $property->id) }}"
                                        class="text-decoration-none">
                                        <div class="px-3 position-relative sec2dH overflow-visible">
                                            <div class="image-wrapper position-relative">
                                                @foreach ($property->images as $propertyImage)
                                                    @if ($propertyImage->propertyImage->imageCategory->category_name === 'Cover Image')
                                                        <img src="{{ asset($propertyImage->propertyImage->image) }}"
                                                            width="100%" alt="Cover Image" class="sec2ImgMai">
                                                        <!-- Check if the property is RERA approved and display a badge -->
                                                        @if ($property->rera)
                                                            <!-- Small box or icon for RERA approval using Font Awesome -->
                                                            <div
                                                                class="rera-approval-badge position-absolute bottom-0 end-0 bg-success text-white p-1 rounded">
                                                                <i class="fas fa-check-circle me-1"></i>
                                                                <!-- Font Awesome Icon -->
                                                                <span>RERA Approved</span>
                                                            </div>
                                                        @endif
                                                    @break
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="position-absolute sec2ImgD px-3 py-2">
                                            <h6 class="mb-0 sec2PriceText text-dark">
                                                Starting Price ₹:{{ $property->formatted_price_range_start }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="sec2pt rounded-3 px-3 index-swiper-slide">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="sec2Texth6 text-start mb-0">{{ $property->title }}</h6>
                                        </div>
                                        @foreach ($property->locations as $location)
                                            <div class="d-flex pt-1">
                                                <p><img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                                        class="pe-2 sec2ImgWS1" alt=""></p>
                                                <p class="sec2Textp text-start">
                                                    {{ $location->area->area_name }}, {{ $location->city->name }},
                                                    {{ $location->state->name }}
                                                </p>
                                            </div>
                                        @endforeach
                                        <div class="sec2Bord w-100"></div>
                                        <div class="row pt-3 pb-0 px-2 rounded-3">
                                            <div class="col-6 mb-1">
                                                <div class="d-flex">
                                                    <p class="pe-3 pt-1"><img
                                                            src="{{ asset('assets/frontend/img/Fit-to-Page.svg') }}"
                                                            alt="" class="sec2ImgWS"></p>
                                                    <p class="sec2Textp text-start">{{ $property->flat_area }} Sq
                                                        Ft</p>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-1">
                                                <div class="d-flex">
                                                    <p class="pe-3 pt-1"><img
                                                            src="{{ asset('assets/frontend/img/Bed.svg') }}"
                                                            alt="" class="sec2ImgWS"></p>
                                                    <p class="sec2Textp text-start">{{ $property->bhk_type }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-absolute w-100 sec2Wihove z-n1"></div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endif

<!-- Recent Properties Section -->
@if ($recentProperties->isNotEmpty())
    <section class="section sec2bgColor pt-4 pt-lg-5 pb-4">
        <div class="sec1Before mt-3 mb-4 mb-lg-5">
            <h2><span class="headlineGrayC">Recently Added</span> <span class="headlineGoldC">Properties</span>
            </h2>
        </div>
        <div class="container pb-5 pb-lg-1">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($recentProperties as $property)
                        <div class="swiper-slide">
                            <div class="position-relative sec2Macard rounded-3 card-container pt-3 z-1">
                                <a href="{{ route('properties.show.prop', $property->id) }}"
                                    class="text-decoration-none">
                                    <div class="px-3 position-relative sec2dH overflow-visible">
                                        <div class="image-wrapper position-relative">
                                            @foreach ($property->images as $propertyImage)
                                                @if ($propertyImage->propertyImage->imageCategory->category_name === 'Cover Image')
                                                    <img src="{{ asset($propertyImage->propertyImage->image) }}"
                                                        width="100%" alt="Cover Image" class="sec2ImgMai">
                                                    <!-- Check if the property is RERA approved and display a badge -->
                                                    @if ($property->rera)
                                                        <!-- Small box or icon for RERA approval using Font Awesome -->
                                                        <div
                                                            class="rera-approval-badge position-absolute bottom-0 end-0 bg-success text-white p-1 rounded">
                                                            <i class="fas fa-check-circle me-1"></i>
                                                            <!-- Font Awesome Icon -->
                                                            <span>RERA Approved</span>
                                                        </div>
                                                    @endif
                                                @break
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="position-absolute sec2ImgD px-3 py-2">
                                        <h6 class="mb-0 sec2PriceText text-dark">
                                            Starting Price ₹: {{ $property->formatted_price_range_start }}
                                        </h6>
                                    </div>
                                </div>
                                <div class="sec2pt rounded-3 px-3 index-swiper-slide">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="sec2Texth6 text-start mb-0">{{ $property->title }}</h6>
                                    </div>
                                    @foreach ($property->locations as $location)
                                        <div class="d-flex pt-1">
                                            <p><img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                                    class="pe-2 sec2ImgWS1" alt=""></p>
                                            <p class="sec2Textp text-start">
                                                {{ $location->area->area_name }}, {{ $location->city->name }},
                                                {{ $location->state->name }}
                                            </p>
                                        </div>
                                    @endforeach
                                    <div class="sec2Bord w-100"></div>
                                    <div class="row pt-3 pb-0 px-2 rounded-3">
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img
                                                        src="{{ asset('assets/frontend/img/Fit-to-Page.svg') }}"
                                                        alt="" class="sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">{{ $property->flat_area }} Sq
                                                    Ft</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <div class="d-flex">
                                                <p class="pe-3 pt-1"><img
                                                        src="{{ asset('assets/frontend/img/Bed.svg') }}"
                                                        alt="" class="sec2ImgWS"></p>
                                                <p class="sec2Textp text-start">{{ $property->bhk_type }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute w-100 sec2Wihove z-n1"></div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
@endif


<!-- ========  section 2   END  ======== -->
<!-- +++++++++++  section 1  +++++++++++ -->
<!-- Section for displaying areas with properties -->
<section class="section pt-5">
<div class="sec1Before mt-3">
    <h2><span class="headlineGrayC">Choose</span> <span class="headlineGoldC">Your Locality</span></h2>
</div>
<div class="container my-1 py-5">
    <div class="row">
        @foreach ($areasWithPropertyCount as $area)
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
                <div class="text-center sec2bor rounded-3 py-2 h-100">
                    <div class="text-center">
                        <img src="{{ asset('assets/frontend/img/v' . (($loop->iteration % 12) + 1) . '.png') }}"
                            width="50%" alt="" class="sec1Imgb">
                    </div>
                    <h5 class="pt-1 sectexth5">{{ $area->area_name }}</h5>
                    <p class="sectextp">{{ $area->property_count }} Projects</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
</section>

<!-- ========  section 1   END  ======== -->
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
    <h2> <span class="headlineGrayC"> Tie-Up With</span> <span class="headlineGoldC"> Developers</span></h2>
</div>
<div class=" my-1  pt-5 pb-4">
    <div class="owl-carousel sec4owl-carousel  owl-theme   pt-1 pb-2">
        <div class="item sec4item   d-flex align-items-center rounded-3      my-2 ">
            <img src="{{ asset('assets/frontend/clientlogo/Mahendra_Regalia.png') }}" alt=""
                class="rounded-3 s5_img ">
        </div>
        <div class="item sec4item  my-2 d-flex align-items-center rounded-3       ">
            <img src="{{ asset('assets/frontend/clientlogo/bella.png') }}" alt=""
                class="rounded-3 s5_img ">
        </div>
        <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
            <img src="{{ asset('assets/frontend/clientlogo/VEDANT_AOUAjVLEPOSTE.png') }}" alt=""
                class="rounded-3 s5_img ">
        </div>
        <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
            <img src="{{ asset('assets/frontend/clientlogo/Anjaneya_Crest.png') }}" alt=""
                class="rounded-3 s5_img ">
        </div>
        <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
            <img src="{{ asset('assets/frontend/clientlogo/Krishna_Prabha.png') }}" alt=""
                class="rounded-3 s5_img ">
        </div>
        <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
            <img src="{{ asset('assets/frontend/clientlogo/logoinsightEdge.png') }}" alt=""
                class="rounded-3 s5_img ">
        </div>
        <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
            <img src="{{ asset('assets/frontend/clientlogo/logoOrchidinfinity.png') }}" alt=""
                class="rounded-3 s5_img ">
        </div>
        <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
            <img src="{{ asset('assets/frontend/clientlogo/logomahendra.png') }}" alt=""
                class="rounded-3 s5_img ">
        </div>
        <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
            <img src="{{ asset('assets/frontend/clientlogo/logKrishna.png') }}" alt=""
                class="rounded-3 s5_img ">
        </div>
        <div class="item sec4item  my-2 d-flex align-items-center rounded-3      ">
            <img src="{{ asset('assets/frontend/clientlogo/logolotus.png') }}" alt=""
                class="rounded-3 s5_img ">
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
<script>
    // Toggle the dropdown menu visibility
    document.querySelector('.dropdown-toggle').addEventListener('click', function() {
        const dropdown = this.closest('.dropdown');
        dropdown.classList.toggle('active');
    });
    // Get the input elements and boxes
    const minInput = document.querySelector('.SaleminPrice');
    const maxInput = document.querySelector('.SalemaxPrice');
    const minBox = document.querySelector('.SaleminbudgetSearch');
    const maxBox = document.querySelector('.SalemaxbudgetSearch');
    // When the "Minimum" input is clicked, show minBox and hide maxBox
    minInput.addEventListener('click', function() {
        minBox.style.display = 'block';
        maxBox.style.display = 'none';
    });
    // When the "No Max" input is clicked, show maxBox and hide minBox
    maxInput.addEventListener('click', function() {
        maxBox.style.display = 'block';
        minBox.style.display = 'none';
    });
    // Update the input fields when clicking on a budget option in minBox
    document.querySelectorAll('.SaleminbudgetSearch li').forEach(function(minOption) {
        minOption.addEventListener('click', function() {
            minInput.value = this.getAttribute('textval');
            minBox.style.display = 'none'; // Hide the minBox after selecting an option
        });
    });
    // Update the input fields when clicking on a budget option in maxBox
    document.querySelectorAll('.SalemaxbudgetSearch li').forEach(function(maxOption) {
        maxOption.addEventListener('click', function() {
            maxInput.value = this.getAttribute('textval');
            maxBox.style.display = 'none'; // Hide the maxBox after selecting an option
        });
    });
    // Close the dropdown if clicking outside of it
    window.addEventListener('click', function(event) {
        const dropdown = document.querySelector('.dropdown');
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove('active');
            minBox.style.display = 'none'; // Hide minBox when clicking outside
            maxBox.style.display = 'none'; // Hide maxBox when clicking outside
        }
    });
</script>
@endsection
