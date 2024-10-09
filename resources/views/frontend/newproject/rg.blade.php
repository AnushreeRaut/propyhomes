@extends('frontend.layout.main')

@section('tags')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details</title>
@endsection

@section('content')
    <!-- +++++++++++  section 1  +++++++++++ -->
    <section>
        <div class="container mb-5 mt-5">
            @foreach ($property->images as $index => $image)
                <div class="mySlides position-relative {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset($image->image) }}" width="100%" class="pDetailImg rounded-4">
                    <div class="Detail-s2phc position-absolute text-center">
                        <h2 class="mb-0">
                            <i class="fa-regular fa-heart"></i> Compare
                        </h2>
                    </div>
                    <div class="Detail-s2phc1 position-absolute text-center">
                        <img src="{{ asset('assets/frontend/search/shareSVGImg.svg') }}" alt="">
                    </div>
                </div>
            @endforeach

            <!-- Carousel Controls -->
            <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-arrow-left-long fa-arrow-both-long"
                    style="color: #3D3D3D;"></i></a>
            <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-arrow-right-long fa-arrow-both-long"
                    style="color: #3D3D3D;"></i></a>

            <!-- Thumbnails for Carousel -->
            <div class="row">
                @foreach ($property->images as $index => $image)
                    <div class="column Detail-column">
                        <img class="demo cursor rounded-2" src="{{ asset($image->image) }}" width="100%"
                            onclick="currentSlide({{ $index + 1 }})" alt="Property Image">
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- ========  section 1   END  ======== -->
    <!-- +++++++++++  section 2  +++++++++++ -->
    <section class="my-5">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-12 mb-xl-2 mb-5">
                    <!-- Display Elevation Image -->
                    <h4>Elevation Image</h4>

                    <div class="container mb-5 ">
                        <div class="mySlides position-relative">
                            <!-- <div class="numbertext">1 / 6</div> -->
                            {{-- public\assets\frontend\img\LOTUSimg41 (1).png --}}
                            @foreach ($property->images as $propertyImage)
                                @if ($propertyImage->propertyImage->imageCategory->category_name === 'Elevation')
                                    <img src="{{ asset($propertyImage->propertyImage->image) }}" width="100%"
                                        alt="Elevation Image" class="pDetailImg rounded-4">
                                @break

                                <!-- Stop the loop after finding the first 'Elevation' image -->
                            @endif
                        @endforeach

                        <div class="Detail-s2phc  position-absolute text-center">
                            <h2 class="mb-0  ">
                                <i class="fa-regular fa-heart"></i>
                                Compare
                            </h2>
                        </div>
                        <div class="Detail-s2phc1 position-absolute text-center ">
                            <img src="{{ asset('assets/forntend/shareSVGImg.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">2 / 6</div> -->
                        <img src="{{ asset('assets/frontend/img/LOTUSimg32 (1).png') }}" width="100%"
                            class="pDetailImg rounded-4">
                        <div class="Detail-s2phc  position-absolute text-center">
                            <h2 class="mb-0  ">
                                <i class="fa-regular fa-heart"></i>
                                Compare
                            </h2>
                        </div>
                        <div class="Detail-s2phc1 position-absolute text-center ">
                            <img src="{{ asset('assets/frontend/search/shareSVGImg.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">3 / 6</div> -->
                        <img src="{{ asset('assets/frontend/img/LOTUSimg23 (1).png') }}" width="100%"
                            class="pDetailImg rounded-4">
                        <div class="Detail-s2phc  position-absolute text-center">
                            <h2 class="mb-0  ">
                                <i class="fa-regular fa-heart"></i>
                                Compare
                            </h2>
                        </div>
                        <div class="Detail-s2phc1 position-absolute text-center ">
                            <img src="{{ asset('assets/frontend/search/shareSVGImg.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">4 / 6</div> -->
                        <img src="{{ asset('assets/frontend/img/LOTUSimg14 (1).png') }}" width="100%"
                            class="pDetailImg rounded-4">
                        <div class="Detail-s2phc  position-absolute text-center">
                            <h2 class="mb-0  ">
                                <i class="fa-regular fa-heart"></i>
                                Compare
                            </h2>
                        </div>
                        <div class="Detail-s2phc1 position-absolute text-center ">
                            <img src="{{ asset('assets/frontend/search/shareSVGImg.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">5 / 6</div> -->
                        <img src="{{ asset('assets/frontend/img/LOTUSimg41 (1).png') }}" width="100%"
                            class="pDetailImg rounded-4">
                        <div class="Detail-s2phc  position-absolute text-center">
                            <h2 class="mb-0  ">
                                <i class="fa-regular fa-heart"></i>
                                Compare
                            </h2>
                        </div>
                        <div class="Detail-s2phc1 position-absolute text-center ">
                            <img src="assets/frontend/search/shareSVGImg.svg" alt="">
                        </div>
                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">6 / 6</div> -->
                        <img src="{{ asset('assets/frontend/img/LOTUSimg32 (1).png') }}" width="100%"
                            class="pDetailImg rounded-4">
                        <div class="Detail-s2phc  position-absolute text-center">
                            <h2 class="mb-0  ">
                                <i class="fa-regular fa-heart"></i>
                                Compare
                            </h2>
                        </div>
                        <div class="Detail-s2phc1 position-absolute text-center ">
                            <img src="{{ asset('assets/frontend/search/shareSVGImg.svg') }}" alt="">
                        </div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)"><i
                            class="fa-solid fa-arrow-left-long fa-arrow-both-long " style="color: #3D3D3D;"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i
                            class="fa-solid fa-arrow-right-long fa-arrow-both-long " style="color: #3D3D3D;"></i></a>
                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>
                    <div class="row">
                        <div class="column Detail-column">
                            <img class="demo cursor rounded-2"
                                src="{{ asset('assets/frontend/img/LOTUSimg41 (1).png') }}" width="100%"
                                class="pDetailImg" onclick="currentSlide(1)" alt="The Woods">
                        </div>
                        <div class="column ">
                            <img class="demo cursor rounded-2"
                                src="{{ asset('assets/frontend/img/LOTUSimg23 (1).png') }}" width="100%"
                                class="pDetailImg" onclick="currentSlide(2)" alt="Cinque Terre">
                        </div>
                        <div class="column ">
                            <img class="demo cursor rounded-2"
                                src="{{ asset('assets/frontend/img/LOTUSimg23 (1).png') }}" width="100%"
                                class="pDetailImg" onclick="currentSlide(3)" alt="Mountains and fjords">
                        </div>
                        <div class="column ">
                            <img class="demo cursor rounded-2"
                                src="{{ asset('assets/frontend/img/LOTUSimg14 (1).png') }}" width="100%"
                                class="pDetailImg" onclick="currentSlide(4)" alt="Northern Lights">
                        </div>
                        <div class="column ">
                            <img class="demo cursor rounded-2"
                                src="{{ asset('assets/frontend/img/LOTUSimg41 (1).png') }}" width="100%"
                                class="pDetailImg" onclick="currentSlide(5)" alt="Nature and sunrise">
                        </div>
                        <div class="column  ">
                            <img class="demo cursor rounded-2"
                                src="{{ asset('assets/frontend/img/LOTUSimg32 (1).png') }}" width="100%"
                                class="pDetailImg" onclick="currentSlide(6)" alt="Snowy Mountains">
                        </div>
                    </div>
                </div>

                <div class="   rounded-2    psec2bordeS">

                    <div class="px-4 px-md-5 pt-4 pb-4 pb-md-5 Detail-Amen">

                        <h2 class="psec2c1h   ">{{ $property->title }}</h2>
                    </div>

                    <div class="px-4 px-md-5 pt-4 pb-4 pb-md-5">

                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="psec2c1h3">Amenities</h6>
                                </div>
                                <div class="col-md-4">
                                    @foreach ($property->amenities as $amenity)
                                        @if ($amenity->pivot->is_true)
                                            <div class="d-flex mb-1">
                                                <h5>
                                                    <img src="{{ asset($amenity->icon_image ?: 'assets/frontend/search/Furniture.png') }}"
                                                        width="35px" class="pe-3" alt="{{ $amenity->name }}">
                                                </h5>
                                                <h5 class="psec2c1font pt-1">{{ $amenity->name }}</h5>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-4">

                            </div>
                        </div>

                    </div>

                    <div class="px-4 px-md-5 pt-4 pb-4 pb-md-5 Detail-AmenBorder">


                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="psec2c1h3">Property Features</h2>
                            </div>
                            <div class="col-md-8">
                                <!-- Iterate through the utilities associated with the property -->
                                @foreach ($property->utilities as $utility)
                                    <div class="d-flex mb-1">
                                        <!-- Display utility name and value together -->
                                        <h5 class="psec2c1font">{{ $utility->name }}:</h5>
                                        <p class="ms-2">{{ $utility->pivot->value }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>



                    </div>

                    <div class="px-4 px-md-5 pt-4 pb-4 pb-md-5 Detail-AmenBorder">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="psec2c1h3">Type of Parking</h2>
                            </div>
                            <div class="col-md-8">
                                <!-- Display parking type if available -->
                                @foreach ($property->utilities as $utility)
                                    @if ($utility->pivot->parking_type)
                                        <p class="Detail-padding psec2c1font">{{ $utility->pivot->parking_type }}</p>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="px-4 px-md-5 pt-4 pb-4 pb-md-5 Detail-AmenBorder">

                        <div class="row">

                            <div class="col-md-4 ">
                                <h2 class="psec2c1h3   ">Special Highlights</h2>

                            </div>

                            <div class="col-md-4 Detail-padding1 ">

                                <h5 class="psec2c1font py-1 ">Garden Facing</h5>
                                <h5 class="psec2c1font py-1 ">Corner Plot</h5>
                                <h5 class="psec2c1font py-1 ">CCTV</h5>
                                <h5 class="psec2c1font py-1 ">On Main Road</h5>
                                <h5 class="psec2c1font py-1 ">Near Hospital</h5>


                            </div>
                            <div class="col-md-4 Detail-padding1">

                                <h5 class="psec2c1font py-1 ">Road Facing</h5>
                                <h5 class="psec2c1font py-1 ">Common Solar</h5>
                                <h5 class="psec2c1font py-1 ">Near Market</h5>
                                <h5 class="psec2c1font py-1 ">Near School</h5>
                                <h5 class="psec2c1font py-1 ">Near Metro Station</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3">Video</h4>
                        <div class="text-center text-lg-start">
                            @if (!empty($embedUrl))
                                <!-- Display YouTube Video if the embed URL is available -->
                                <iframe width="100%" height="315" src="{{ $embedUrl }}" frameborder="0"
                                    allowfullscreen onerror="this.style.display='none'; document.getElementById('video-placeholder').style.display='block';">
                                </iframe>
                                <!-- Placeholder Image as a Fallback -->
                                <img id="video-placeholder" src="{{ asset('assets/frontend/img/video.png') }}"
                                    width="100%" alt="Video Placeholder" style="display: none;">
                            @else
                                <!-- Display Placeholder Image if no video URL is available -->
                                <img src="{{ asset('assets/frontend/img/video.png') }}" width="100%"
                                    alt="Video Placeholder">
                            @endif
                        </div>
                    </div>

                </div>


                <div class="p-4 psec2bordeS rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3">
                            Floor Plans
                        </h4>
                        <div class="text-center text-lg-start">
                            <!-- Display 'Floor Plan' Image -->
                            @foreach ($property->images as $propertyImage)
                                @if ($propertyImage->propertyImage->imageCategory->category_name === 'Floor Plan')
                                    <img src="{{ asset($propertyImage->propertyImage->image) }}" width="80%"
                                        alt="Floor Plan" class="">
                                @break

                                <!-- Display only the first 'Floor Plan' image -->
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>



        </div>

        <!-- <div class=" p-4 rounded-2 psec2borde w-100  position-sticky topfixed"> -->

        <div class="col-xl-4 col-lg-12   ">

            <div class="  rounded-2  w-100  position-sticky topfixed">

                <div class="">
                    <h2 class="psec1h1">{{ $property->title }}</h2>
                </div>
                <div class="d-flex justify-content-between pb-3 flex-wrap pt-2  border-bottom ">
                    <div class="d-flex">
                        <div class=""><img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                class="pe-2 text-dark" alt="">
                        </div>
                        <h6 class=" pt-1">Borivali East, Mumbai</h6>
                    </div>
                    <!-- <h5 class="psec1h5 pt-md-0 pt-3">₹30.66L - 53.03 L</h5> -->
                </div>
                <div class="pt-3">
                    <h2 class="psec1h1">
                        Price ₹ {{ $property->formatted_price_range_start }} - ₹
                        {{ $property->formatted_price_range_end }}
                    </h2>


                    <p>Status:  <span class="fw-semibold">Mid Stage Construction</span> </p>

                </div>


                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/frontend/search/Group1830.png') }}" width="48px"
                            alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3  pt-3">
                        <p class="mb-0 ">Project Size </p>
                        <p class="psec1p ">{{ $property->size }} Sq Ft</p>


                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/frontend/search/Group1831.png') }}" width="48px"
                            alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3  pt-3">
                        <p class="mb-0 "> <span
                                class="fw-semibold">Configurations:</span> {{ $property->bhk_type }}</p>
                        <p class="psec1p ">{{ $property->size }}</p>


                    </div>
                </div>


                <div class="d-flex ">


                    <div class=" w-100  mt-3 mb-4">
                        <button type="button" class="btn  btn-lg  detail-s2btn w-100 "><img
                                src="{{ asset('assets/frontend/search/Detail-whatsapp.svg') }}" alt="">
                            <span class="ps-2">WhatsApp</span>
                        </button>

                    </div>
                    <div class="   w-100 ms-4 mt-3 mb-4">
                        <button type="button" class="btn  btn-lg   detail-s2btn1   w-100" widht="100% "> <img
                                src="{{ asset('assets/frontend/search/Detail-telephone-call.svg') }}"
                                alt=""> <span class="ps-2 text-white   ">
                                Large
                                button </span>
                        </button>
                    </div>




                </div>


                <div class="  rounded-2 Detail-psec2borde w-100   ">
                    <h2 class="psec2c2h    pb-2 pt-3 px-4 rounded-top">Why Invest through Square Yards?</h2>


                    <div class="Detail-psec2borde1 px-4  py-2  rounded-bottom ">

                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/frontend/search/percent.svg') }}" width="35px"
                                    alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3  pt-3">
                                <p class="mb-0 Detail-textp">Zero Brokerage</p>
                                <p class="psec1p ">100% Service, 0% Brokerage</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/frontend/search/headphone.svg') }}" width="35px"
                                    alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3  pt-3">
                                <p class="mb-0 Detail-textp ">Full Service Support </p>
                                <p class="psec1p ">Our sales personnel are accountable for every step </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/frontend/search/batter.svg') }}" width="35px"
                                    alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3  pt-3">
                                <p class="mb-0 Detail-textp">Lowest Price Guaranteed </p>
                                <p class="psec1p ">If you find a lower price anywhere, tell us and we will match
                                    it.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="p-3 psec2bordeS-shodow    rounded-2 mt-5">
                    <div class="pt-2 ">

                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <a class="nav_a text-decoration-none  active  navhtext  Detail-navCallIcon  "
                                    aria-current="page" href="tel:+911-800-700-6200">
                                    <img src="{{ asset('assets/frontend/img/Detail-call1.svg') }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3  ">
                                <p class="mb-0  Detail-icon-text">Contact our Real Estate Experts</p>

                            </div>
                        </div>

                    </div>


                    <div class="  rounded-2 Detail-psec2bordeI w-100 Detail-inputPlace  mt-4 px-3 py-4 ">

                        <input class="form-control mb-3 " type="text" placeholder="Name"
                            aria-label="readonly input example" readonly>
                        <input class="form-control mb-3 " type="text" placeholder="Email"
                            aria-label="readonly input example" readonly>

                        <div class="container Detail-dropdown px-0 rounded-2">
                            <div class="dropdown-container rounded-2  ">
                                <select class="dropdown Detail-select rounded-2">
                                    <option value="+91">+91</option>
                                    <option value="+91">+91</option>
                                    <option value="+91">+91</option>
                                    <!-- You can add more country codes here if needed -->
                                </select>
                            </div>
                            <div class="input-container Detail-inpute-div ">
                                <input type="text" class="form-control w-100 border-0"
                                    placeholder="First name" aria-label="First name">
                                <!-- <input type="text" class="input-field Detail-inpute " placeholder="Enter your number"> -->
                            </div>
                        </div>

                        <p class="fw-semibold mt-3 Detail-textIntere">Interested in</p>
                        <a class="btn Detail-btnBSH rounded-pill mb-2" href="#" role="button">Buying</a>
                        <a class="btn Detail-btnBSH rounded-pill mb-2" href="#" role="button">Selling</a>
                        <a class="btn Detail-btnBSH rounded-pill mb-2" href="#" role="button">Home
                            Loan</a>



                        <div class="d-grid gap-2 mt-3">
                            <button class="btn Detail-btnCN" type="button">Contact Now</button>

                        </div>
                        <!-- ***************************************************************************************************************************************************************** -->
                        <div class=" Detail-div3R  mt-4">
                            <div class="Detail-div3 text-center p-2  rounded-3 mb-1 pt-3 ">
                                <img src="assets/frontend/img/percent1.png" width="50px" class="pb-1"
                                    alt="">

                                <h5 class="Detail-div3T">Zero
                                    Brokerage</h5>

                            </div>
                            <div class="Detail-div3 text-center p-2  rounded-3 mb-1 pt-3">
                                <img src="assets/frontend/img/headphone1.svg" alt="">

                                <h5 class="Detail-div3T">Full Service
                                    Support</h5>

                            </div>
                            <div class="Detail-div3 text-center p-2  rounded-3 mb-1 pt-3">
                                <img src="assets/frontend/img/batter1.svg" alt="">

                                <h5 class="Detail-div3T">Lowest Price
                                    Guaranteed</h5>

                            </div>

                        </div>


                    </div>



                </div>
                <div class=" rounded-3 Detail-cardOffer ">
                    <div class="Detail-cardOfferImg py-4 px-5 mt-4">
                        <h6 class="Detail-cardOffer-h6 pb-2">Save up to</h6>

                        <h6> <span class="Detail-cardOffer-h61">₹10,000 </span> <span
                                class="Detail-cardOffer-h62"> on Home Loan Processing Fee</span> </h6>



                        <ul class="Detail-ulW py-2">
                            <li class="">Attractive Interest Rates</li>
                            <li class="">Greater Loan Eligibility</li>
                            <li class="">Instant Approval</li>
                        </ul>


                        <a class="btn  Detail-cardOffer-btn my-3" href="#" role="button">Get Offer</a>



                    </div>



                </div>



            </div>


        </div>
    </div>
</section>
<!-- ========  section 2   END  ======== -->
@endsection
