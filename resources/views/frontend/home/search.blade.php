@extends('frontend.layout.main')

@section('tags')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details</title>
@endsection

@section('content')
<section class="">
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-12">
                <div class="">
                    <p class="psec1p"><span class=""> Home</span> <img src="{{asset('assets/frontend/img/propertyArrow.svg')}}"
                            class="px-2" alt="">
                        <span class=" text-dark">Property</span>
                    </p>
                    <h1 class="psec1h1 pt-3 pb-4">Flats for Sale in Somalwada, Nagpur</h1>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6  col-12 mb-4">
                            <div class="p-3 search-col1-bgc rounded-3">
                                <h3 class="search_s1h3T pt-2  pb-3 ">Find you home</h3>
                                <div class="input-group mb-3  search-inputs">
                                    <span class="input-group-text  border-0  pe-0" id="basic-addon1"><i
                                            class="fa-solid fa-magnifying-glass fa-xs"
                                            style="color:black;"></i></span>
                                    <input type="text" class="form-control border-0 pb-2 "
                                        placeholder="Search by location, Project name" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <h3 class="search_s1h3T pt-2 pb-2">BHK Type</h3>
                                <select class="form-select search-inputs" aria-label="Default select example">
                                    <option selected>1RK</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <h3 class="search_s1h3T pt-4 pb-2">Property Types</h3>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Residential
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Commercial
                                    </label>
                                </div>
                                <h3 class="search_s1h3T  pt-3 pb-3">Budget</h3>
                                <!-- buget -->
                                <div class="budget-section">
                                    <div class="budget-slider-container">
                                        <div class="budget-slider">
                                            <input type="range" id="minRange" min="0" max="150000" step="1000"
                                                value="0">
                                            <div class="budget-track"></div>
                                            <input type="range" id="maxRange" min="0" max="150000" step="1000"
                                                value="150000">
                                        </div>
                                    </div>
                                </div>
                                <span></span>
                                <div class="d-flex justify-content-between ">
                                    <button type="button" class="btn btn_bgC"><span id="minValue">₹0</span></button>
                                    <button type="button" class="btn btn_bgC"> <span
                                            id="maxValue">₹1,50,000</span></button>
                                </div>
                                <h3 class="search_s1h3T  pt-4 mt-1 pb-2">Possession Status</h3>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Ready to Move
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Under Construction
                                    </label>
                                </div>
                                <!--  -->
                                <h3 class="search_s1h3T  pt-3 pb-1">Amenities</h3>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        POP
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Gated Community
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        CCTV
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Video Door Bell
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        GYM
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Furniture
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Modular Kitchen
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Common Solar
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Security Guard
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Gazibo / Function Hall
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input search-checkBorder" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Swimming Pool
                                    </label>
                                </div>
                                <div class="d-grid gap-2 py-3">
                                    <button class="btn search-col1btn " type="button">Search Your Property</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-6  col-12  mb-4">
                            <div class="row">
                                <div class="d-flex flex-wrap justify-content-between py-1">
                                    <div class=" ">
                                        <p class="search-col2-t"> Showing 1 – 10 of 15 results</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="">
                                        <div class="swiper-slide  bg-white">
                                            <div
                                                class=" position-relative sec2Macard bg-white   rounded-3 card-container    pt-3 z-1">
                                                <a href="{{route('viewbalaji')}}" class="text-decoration-none">
                                                    <div class="px-3 position-relative sec2dH overflow-visible  ">
                                                        <div class="image-wrapper position-relative  ">
                                                            <img src="{{asset('assets/frontend/img/Rectangle 23.webp')}}"
                                                                class="sec2ImgMai" alt="Image">
                                                            <div class="position-absolute  sec2ImgD px-3 py-2">
                                                                <h6 class="mb-0 sec2PriceText text-dark">Price ₹
                                                                    2.25Cr ₹ 2.5 Cr</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=" sec2pt1 rounded-3  px-3 ">
                                                        <div class="search-sec2h"></div>
                                                        <div class="d-flex justify-content-between ">
                                                            <h6 class="sec2Texth6 text-start mb-0 "> Balaji Paradise
                                                            </h6>
                                                            <p class="ps-2  mb-0" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <span class="sec2SpanCr  "><img
                                                                        src="{{asset('assets/frontend/img/telephone-call.svg')}}" alt=""
                                                                        class=""></span>
                                                            </p>
                                                        </div>
                                                        <div class="d-flex  pt-1">
                                                            <p> <img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}"
                                                                    class="pe-2 sec2ImgWS1" alt=""></p>
                                                            <p class="sec2Textp text-start">
                                                                Kandivali East,
                                                                Mumbai, Maharashtra
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">No. of Rooms </p>
                                                            </div>
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">04</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">Construction Status </p>
                                                            </div>
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">Active</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">Rera ID </p>
                                                            </div>
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">12345678765432</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="position-absolute  w-100 sec2Wihove sec2Wihove1 z-n1 ">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="">
                                        <div class="swiper-slide  bg-white">
                                            <div
                                                class=" position-relative sec2Macard bg-white   rounded-3 card-container    pt-3 z-1">
                                                <a href="{{route('viewbalaji')}}" class="text-decoration-none">
                                                    <div class="px-3 position-relative sec2dH overflow-visible  ">
                                                        <div class="image-wrapper position-relative  ">
                                                            <img src="{{asset('assets/frontend/img/Rectangle 23.webp')}}"
                                                                class="sec2ImgMai" alt="Image">
                                                            <div class="position-absolute  sec2ImgD px-3 py-2">
                                                                <h6 class="mb-0 sec2PriceText text-dark">Price ₹
                                                                    2.25Cr ₹ 2.5 Cr</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="  sec2pt1 rounded-3  px-3 ">
                                                        <div class="search-sec2h"></div>
                                                        <div class="d-flex justify-content-between ">
                                                            <h6 class="sec2Texth6 text-start mb-0 "> Balaji Paradise
                                                            </h6>
                                                            <p class="ps-2  mb-0" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <span class="sec2SpanCr  "><img
                                                                        src="{{asset('assets/frontend/asset/img/telephone-call.svg')}}" alt=""
                                                                        class=""></span>
                                                            </p>
                                                        </div>
                                                        <div class="d-flex  pt-1">
                                                            <p> <img src="{{asset('assets/frontend/asset/img/maps-and-flags.svg')}}"
                                                                    class="pe-2 sec2ImgWS1" alt=""></p>
                                                            <p class="sec2Textp text-start">
                                                                Kandivali East,
                                                                Mumbai, Maharashtra
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">No. of Rooms </p>
                                                            </div>
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">04</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">Construction Status </p>
                                                            </div>
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">Active</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">Rera ID </p>
                                                            </div>
                                                            <div class="">
                                                                <p class="sec2Textp mb-2">12345678765432</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="position-absolute  w-100 sec2Wihove sec2Wihove1 z-n1 ">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6  col-12  mb-4 ">
                            <div class=" rounded-2">
                                <div class="">
                                    <div class="  rounded-2 Detail-psec2borde w-100    ">
                                        <h2 class="psec2c2h  search-col3h2   pb-2 pt-3 px-3 rounded-top">Why Invest
                                            through
                                            Propy Homes?</h2>
                                        <div
                                            class="Detail-psec2borde1 search-psec2borde1 px-3  py-3  rounded-bottom ">
                                            <div class="d-flex ">
                                                <div class="flex-shrink-0  ">
                                                    <img src="{{asset('assets/frontend/search/percent.svg')}}" width="35px" alt="...">
                                                </div>
                                                <div class="flex-grow-1 ms-3  ">
                                                    <p class="mb-0   search-col3p">Zero Brokerage</p>
                                                    <p class="search-col3p1">100% Service, 0% Brokerage</p>
                                                </div>
                                            </div>
                                            <div class="d-flex ">
                                                <div class="flex-shrink-0 ">
                                                    <img src="{{asset('assets/frontend/search/headphone.svg')}}" width="35px" alt="...">
                                                </div>
                                                <div class="flex-grow-1 ms-3  ">
                                                    <p class="mb-0  search-col3p">Full Service Support </p>
                                                    <p class="search-col3p1">Our sales personnel are accountable for
                                                        every step
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex ">
                                                <div class="flex-shrink-0 ">
                                                    <img src="{{asset('assets/frontend/search/batter1.svg')}}" width="35px" alt="...">
                                                </div>
                                                <div class="flex-grow-1 ms-3  ">
                                                    <p class="mb-0  search-col3p">Lowest Price Guaranteed </p>
                                                    <p class="search-col3p1">If you find a lower price anywhere,
                                                        tell us and we
                                                        will
                                                        match
                                                        it.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex  mt-1">
                                    <div class=" w-100  mt-3 mb-4">
                                        <button type="button"
                                            class="btn  btn-lg p-1  search-s2btn rounded-1 w-100 "><img
                                                src="{{asset('assets/frontend/search/Detail-whatsapp.svg')}}" alt=""> <span
                                                class="ps-0">WhatsApp</span>
                                        </button>
                                    </div>
                                    <div class="   w-100 ms-2 mt-3 mb-4">
                                        <button type="button"
                                            class="btn  btn-lg  p-1 search-s2btn1 rounded-1  w-100" widht="100% ">
                                            <img src="{{asset('assets/frontend/search/Detail-telephone-call.svg')}}" alt="">
                                            <span class="ps-0 text-white   ">
                                                Get a call back </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="p-2 psec2bordeS-shodow     rounded-2 mt-0">
                                    <div class="pt-2 ">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <a class="nav_a text-decoration-none  active  navhtext search-navCallIcon "
                                                    aria-current="page" href="tel:+911-800-700-6200">
                                                    <img src="{{asset('assets/frontend/search/Detail-call1.svg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="flex-grow-1 ms-2  ">
                                                <p class="mb-0  search-icon-text">Contact our Real Estate Experts
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="  rounded-2 Detail-psec2bordeI w-100 search-inputPlace  mt-4 px-3 py-4 ">
                                        <input class="form-control mb-3 search-form-control" type="text" placeholder="Name"
                                            aria-label="readonly input example">
                                        <input class="form-control mb-3 search-form-control" type="text" placeholder="Email"
                                            aria-label="readonly input example">
                                        <div class="container Detail-dropdown px-0 rounded-2">
                                            <div class="dropdown-container rounded-2 ">
                                                <select class="dropdown search-select rounded-2">
                                                    <option value="+91">+91</option>
                                                    <option value="+91">+91</option>
                                                    <option value="+91">+91</option>
                                                </select>
                                            </div>
                                            <div class="input-container Detail-inpute-div ">
                                                <input type="text" class="form-control w-100 border-0"
                                                    placeholder="First name" aria-label="Phone number">
                                            </div>
                                        </div>
                                        <p class=" mt-3 search-textIntere">Interested in</p>
                                        <a class="btn search-btnBSH rounded-pill mb-2" href="#"
                                            role="button">Buying</a>
                                        <a class="btn search-btnBSH rounded-pill mb-2" href="#"
                                            role="button">Selling</a>
                                        <a class="btn search-btnBSH rounded-pill mb-2" href="#" role="button">Home
                                            Loan</a>
                                        <div class="d-grid gap-2 mt-3">
                                            <button class="btn Detail-btnCN" type="button">Contact Now</button>
                                        </div>
                                        <div class=" search-div3R  mt-4">
                                            <div class="search-div3 text-center p-1  rounded-3 mb-1 pt-3 ">
                                                <img src="{{asset('assets/frontend/search/percent1.png')}}" width="50px" class="pb-1" alt="">
                                                <h5 class="search-div3T">Zero
                                                    Brokerage</h5>
                                            </div>
                                            <div class="search-div3 text-center p-1  rounded-3 mb-1 pt-3">
                                                <img src="{{asset('assets/frontend/search/headphone1.svg')}}" alt="">
                                                <h5 class="search-div3T">Full Service
                                                    Support</h5>
                                            </div>
                                            <div class="search-div3 text-center p-1  rounded-3 mb-1 pt-3">
                                                <img src="{{asset('assets/frontend/search/batter1.svg')}}" alt="">
                                                <h5 class="search-div3T">Lowest Price
                                                    Guaranteed</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" rounded-3 Detail-cardOffer ">
                                    <div class="search-cardOfferImg py-4 px-4 mt-4">
                                        <h6 class="search-cardOffer-h6 pb-2">Save up to</h6>
                                        <h6> <span class="search-cardOffer-h61">₹10,000 </span> <span
                                                class="search-cardOffer-h62"> on Home Loan Processing Fee</span>
                                        </h6>
                                        <ul class="search-ulW py-2">
                                            <li class="">Attractive Interest Rates</li>
                                            <li class="">Greater Loan Eligibility</li>
                                            <li class="">Instant Approval</li>
                                        </ul>
                                        <a class="btn  search-cardOffer-btn my-3" href="#" role="button">Get
                                            Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const minRange = document.getElementById('minRange');
    const maxRange = document.getElementById('maxRange');
    const minValue = document.getElementById('minValue');
    const maxValue = document.getElementById('maxValue');
    minRange.addEventListener('input', function () {
        let minVal = parseInt(minRange.value);
        let maxVal = parseInt(maxRange.value);
        // Ensure min value doesn't exceed max value
        if (minVal >= maxVal) {
            minVal = maxVal - 1000;
            minRange.value = minVal;
        }
        minValue.textContent = `₹${minVal.toLocaleString()}`;
    });
    maxRange.addEventListener('input', function () {
        let minVal = parseInt(minRange.value);
        let maxVal = parseInt(maxRange.value);
        // Ensure max value doesn't go below min value
        if (maxVal <= minVal) {
            maxVal = minVal + 1000;
            maxRange.value = maxVal;
        }
        maxValue.textContent = `₹${maxVal.toLocaleString()}`;
    });
</script>
@endsection
