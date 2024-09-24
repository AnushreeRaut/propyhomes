@section('tags')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
@endsection


@extends('frontend.layout.main')

@section('content')
  <!-- +++++++++++  section 1  +++++++++++ -->
    <!-- +++++++++++  section 1  +++++++++++ -->
    <section>
        <div class="container">
            <p class="psec1p"><span class=""> Home</span> <img src="{{asset('assets/frontend/img/propertyArrow.svg')}}" class="px-2" alt="">
                <span class=" text-dark"> Plot No. 35, Income Tax Colony, Ranapratap Nagar, Nagpur-440022
                </span>
            </p>
            <h1 class="psec1h1">Elites Park View</h1>
            <div class="d-flex justify-content-between pb-3 flex-wrap pt-2">
                <div class="d-flex">
                    <div class=""><img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}" class="pe-2 text-dark" alt=""></div>
                    <h6 class=" pt-1"> Plot No. 35, Income Tax Colony, Ranapratap Nagar, Nagpur-440022
                    </h6>
                </div>
                <!-- <h5 class="psec1h5 pt-md-0 pt-3">₹30.66L - 53.03 L</h5> -->
            </div>
            <!-- <h2 style="text-align:center">Slideshow Gallery</h2> -->
            <!-- <div class="container px-0">
                <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                    <img src="assets/frontend/img/LOTUSimg41 (1).png" width="100%" class="pDetailImg rounded-4">
                </div>
                <div class="mySlides">
                    <div class="numbertext">2 / 6</div>
                    <img src="assets/frontend/img/LOTUSimg32 (1).png" width="100%" class="pDetailImg rounded-4">
                </div>
                <div class="mySlides">
                    <div class="numbertext">3 / 6</div>
                    <img src="assets/frontend/img/LOTUSimg23 (1).png" width="100%" class="pDetailImg rounded-4">
                </div>
                <div class="mySlides">
                    <div class="numbertext">4 / 6</div>
                    <img src="assets/frontend/img/LOTUSimg14 (1).png" width="100%" class="pDetailImg rounded-4">
                </div>
                <div class="mySlides">
                    <div class="numbertext">5 / 6</div>
                    <img src="assets/frontend/img/LOTUSimg41 (1).png" width="100%" class="pDetailImg rounded-4">
                </div>
                <div class="mySlides">
                    <div class="numbertext">6 / 6</div>
                    <img src="assets/frontend/img/LOTUSimg32 (1).png" width="100%" class="pDetailImg rounded-4">
                </div>
                <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-arrow-left-long fa-arrow-both-long "
                        style="color: #3D3D3D;"></i></a>
                <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-arrow-right-long fa-arrow-both-long "
                        style="color: #3D3D3D;"></i></a>
                <div class="caption-container">
                    <p id="caption"></p>
                </div>
                <div class="row">
                    <div class="column">
                        <img class="demo cursor rounded-2" src="assets/frontend/img/LOTUSimg41 (1).png" width="100%"
                            class="pDetailImg" onclick="currentSlide(1)" alt="The Woods">
                    </div>
                    <div class="column ">
                        <img class="demo cursor rounded-2" src="assets/frontend/img/LOTUSimg23 (1).png" width="100%"
                            class="pDetailImg" onclick="currentSlide(2)" alt="Cinque Terre">
                    </div>
                    <div class="column ">
                        <img class="demo cursor rounded-2" src="assets/frontend/img/LOTUSimg23 (1).png" width="100%"
                            class="pDetailImg" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>
                    <div class="column ">
                        <img class="demo cursor rounded-2" src="assets/frontend/img/LOTUSimg14 (1).png" width="100%"
                            class="pDetailImg" onclick="currentSlide(4)" alt="Northern Lights">
                    </div>
                    <div class="column ">
                        <img class="demo cursor rounded-2" src="assets/frontend/img/LOTUSimg41 (1).png" width="100%"
                            class="pDetailImg" onclick="currentSlide(5)" alt="Nature and sunrise">
                    </div>
                    <div class="column  ">
                        <img class="demo cursor rounded-2" src="assets/frontend/img/LOTUSimg32 (1).png" width="100%"
                            class="pDetailImg" onclick="currentSlide(6)" alt="Snowy Mountains">
                    </div>
                </div>
            </div> -->
            <div class="">
                <img src="{{asset('assets/frontend/img/elites.png')}}" class="rounded-3 height-50vh" alt="">
            </div>
        </div>
    </section>
    <!-- ========  section 1   END  ======== -->
    <!-- +++++++++++  section 2  +++++++++++ -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12   mb-xl-2 mb-5">
                    <div class="   rounded-2   px-4 px-md-5 pt-4 pb-4 pb-md-5  psec2bordeS">
                        <h2 class="psec2c1h ">Property features</h2>
                        <p class="psec2c1p  pt-2">Lorem ipsum dolor sit amet, wisi nemore fastidii at vis, eos
                            equidem admodum
                            disputando ea.
                            An duis dolor appellantur mea, est id zril nobis appellantur. Ei sea duis senserit
                            qualisque, te facilisis appellantur pri. Id aperiri</p>
                        <div class=" ">
                            <h3 class="psec2c1h3  pt-2">Property details</h3>
                            <!-- <h5 class="pt-2">3BHK LUXURIOUS
                                ONE FLOOR- ONE FLAT</h5> -->
                            <div class="row pt-2">
                                <div class="col-lg-6 col-md-12">
                                    <div class="pe-1 pe-xl-4">
                                        <!-- <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="  "><img src="assets/frontend/img/paintBrush.svg"
                                                        class="pe-3 pe-xxl-4" alt=""> </h5>
                                                <h5 class="psec2c1font ">Size:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">2080 SQ.FT.</h5>
                                        </div> -->
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/bed2.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""> </h5>
                                                <h5 class="psec2c1font ">Bedrooms:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">4</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/shawar1.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Toilet:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">4</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font   "><img src="{{asset('assets/frontend/img/Kitchen_Room.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Kitchen:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/livingRoom.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Living:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/Balcony.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font "> Balcony :</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/Dining.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Dining:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/Lift.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Lift:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/WideUtility.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Wide Utility:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="ps-1 ps-xl-4">
                                        <!-- <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="assets/frontend/img/paintBrush.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font "> Size:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1800 SQ. FT.</h5>
                                        </div> -->
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/bed2.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Bedrooms:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                        </div>
                                        <!-- <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="assets/frontend/img/calender.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Bedrooms:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                        </div> -->
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/shawar1.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Toilet:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font   "><img src="{{asset('assets/frontend/img/Kitchen_Room.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Kitchen:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/livingRoom.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Living:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/Balcony.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font "> Balcony :</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">2</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/Dining.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Dining:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/Lift.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Lift:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/WideUtility.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Wide Utility:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="psec2c1h3 pt-3">Property utility</h3>
                            <div class="property-utilities">
                                <h5 class="psec2c1font pb-1 pt-3">Structural System:</h5>
                                <p class="psec2c1font">R.C.C. frame structure for enhanced durability and earthquake
                                    resistance.</p>
                                <h5 class="psec2c1font pb-1">Flooring:</h5>
                                <p class="psec2c1font mb-1">2' X 4' vitrified tiles in all rooms.</p>
                                <p class="psec2c1font">Anti-skid ceramic tiles in terrace and balcony areas.</p>
                                <h5 class="psec2c1font pb-1">Kitchen:</h5>
                                <p class="psec2c1font">Granite platform with a stainless steel sink, and ceramic tiles
                                    dado up to 2' above the platform.</p>
                                <h5 class="psec2c1font pb-1">Toilet:</h5>
                                <p class="psec2c1font mb-1">Sanitary ware: Premium Jaguar bathroom fittings, including
                                    wash
                                    basin and commode.</p>
                                <p class="psec2c1font">Wall cladding: Designer ceramic tiles, full-height tiles in all
                                    bathrooms.</p>
                                <h5 class="psec2c1font pb-1">Wall Finishing:</h5>
                                <p class="psec2c1font mb-1">External walls: 150mm thick with 20mm double coat cement
                                    plaster
                                    and Apex or equivalent weather shield paint with one coat of exterior primer.</p>
                                <p class="psec2c1font">Internal walls: 115mm thick with 12mm smooth finish plaster, two
                                    coats of putty, and plastic emulsion paint.</p>
                                <h5 class="psec2c1font pb-1">Doors & Windows:</h5>
                                <p class="psec2c1font mb-1">Main Door: Designer plywood door with decorative handles,
                                    brass
                                    or SS hardware.</p>
                                <p class="psec2c1font mb-1">Internal Doors: Plywood doors with mica finish on both
                                    sides.</p>
                                <p class="psec2c1font">Windows: Aluminum sliding windows and doors with mosquito net
                                    provisions.</p>
                                <h5 class="psec2c1font pb-1">Electrical Work:</h5>
                                <p class="psec2c1font mb-1">Concealed copper wiring with separate meters.</p>
                                <p class="psec2c1font mb-1">PVC conduit pipes in walls with ISI-standard fittings.
                                    Anchor,
                                    Polycab, or Havels electric wiring with Anchor switches.</p>
                                <p class="psec2c1font">Provisions for cable TV, telephone, and AC points in the master
                                    bedroom.</p>
                                <h5 class="psec2c1font pb-1">Water System:</h5>
                                <p class="psec2c1font mb-1">Solar water heater connection for two bathrooms in the
                                    master
                                    bedrooms.</p>
                                <p class="psec2c1font">Water level controller for automatic tank filling for common
                                    water tanks.</p>
                                <h5 class="psec2c1font pb-1">POP Design:</h5>
                                <p class="psec2c1font">POP design in three master bedrooms and one hall.</p>
                            </div>
                            <h3 class="psec2c1h3 pt-3">Outdoor Features</h3>
                            <div class="outdoor-features">
                                <h5 class="psec2c1font pb-1">Site Features:</h5>
                                <p class="psec2c1font">M.S. main gate with compound walls, brick masonry, and cement
                                    concrete.</p>
                                <h5 class="psec2c1font pb-1">Parking:</h5>
                                <p class="psec2c1font mb-1">Ample parking space with car charging points in allocated
                                    parking areas.</p>
                                <p class="psec2c1font">Parking includes a toilet and washing area for servant use.</p>
                                <h5 class="psec2c1font pb-1">Lift:</h5>
                                <p class="psec2c1font">Automatic KONE or Johnson lift with inverter backup and ARD
                                    (Automatic Rescue Device).</p>
                                <h5 class="psec2c1font pb-1">CCTV & Security:</h5>
                                <p class="psec2c1font">CCTV surveillance for common and parking areas, with video door
                                    phone and access to the CCTV feed.</p>
                                <h5 class="psec2c1font pb-1">Solar Panel:</h5>
                                <p class="psec2c1font">Solar panel installed for the common meter to reduce electricity
                                    costs.</p>
                                <h5 class="psec2c1font pb-1">Customization Options:</h5>
                                <p class="psec2c1font">Customers can choose the color of interior paint and bathroom
                                    tiles according to their preferences.</p>
                                <h5 class="psec2c1font pb-1">Entrance Lobby:</h5>
                                <p class="psec2c1font mb-1">Entrance lobby with biometric lock and key arrangement for
                                    secure access.</p>
                                <p class="psec2c1font">POP ceiling panels in the lobby area.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Video</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{asset('assets/frontend/img/video.png')}}" width="100%" alt="" class="rounded-2">
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3"> Typical 1st To 7th Floor Plan</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{asset('assets/frontend/img/elites2Dflooe1.png')}}" class="rounded-2" width="80%" alt="">
                            </div>
                        </div>
                        <div class=" pt-4">
                            <h4 class="psec2c1h pb-3"> Typical
                                3D Floor Plan</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{asset('assets/frontend/img/typical3Dfloor.png')}}" class="rounded-2" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elites3Dfloor.png')}}" class="rounded-2 mt-4" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elitesimg1.png')}}" class="rounded-2 mt-4" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elitesimg1(2).png')}}" class="rounded-2 mt-4" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elitesimg1(3).png')}}" class="rounded-2 mt-4" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elitesimg1(4).png')}}" class="rounded-2 mt-4" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elites1Img(4).png')}}" class="rounded-2 mt-4" width="80%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Elites View 28</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{asset('assets/frontend/img/elites2bgimg.png')}}" class="rounded-2" width="80%" alt="">
                            </div>
                        </div>
                        <div class=" mt-4">
                            <h4 class="psec2c1h pb-3"> Typical
                                3D Floor Plan</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{asset('assets/frontend/img/elites2Dflooe2.png')}}" class="rounded-2" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elites3Dfloor2.png ')}}" class="rounded-2 mt-4" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elites2(1).png')}}" class="rounded-2 mt-4" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elites2(2).png')}}" class="rounded-2 mt-4" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elites2(3).png')}}" class="rounded-2 mt-4" width="80%" alt="">
                                <img src="{{asset('assets/frontend/img/elites2(4)png.png')}}" class="rounded-2 mt-4" width="80%" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Elites
                                VIEW 28</h4>
                            <div class="">
                                <img src="assets/frontend/img/bellaIsomaticL.png " class="rounded-2 " width="80%" alt="">
                                <img src="assets/frontend/img/bellaIsomaticR.png " class="rounded-2 mt-4" width="80%" alt="">
                            </div>
                        </div>
                    </div> -->
                    <!--
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Seating Area</h4>
                            <div class="">
                                <img src="assets/frontend/img/bellaseatingarea.png" class="rounded-2" width="80%" alt="">
                                <img src="assets/frontend/img/bellaseatingarea1.png" class="rounded-2 pt-4" width="80%" alt="">
                            </div>
                        </div>
                    </div> -->
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Location</h4>
                            <div class="">
                                <iframe class="rounded-2 "
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119065.02905823676!2d78.99010825797474!3d21.161065901994068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0a5a31faf13%3A0x19b37d06d0bb3e2b!2sNagpur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1724747762521!5m2!1sen!2sin"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h4 pb-3">Description</h4>
                            <p>Lorem ipsum dolor sit amet, wisi nemore fastidii at vis, eos equidem admodum disputando
                                ea. An duis dolor appellantur mea, est id zril nobis appellantur. Ei sea duis senserit
                                qualisque, te facilisis appellantur pri. Id aperiri aliquam interesset mel. Contentiones
                                vituperatoribus id est, per prima nihil scripta no. No semper forensibus adipiscing quo.
                                Amet deleniti lobortis et eam. In oporteat pertinacia quo, cu qui antiopam intellegebat,
                                ei alii paulo has. In alia eros ornatus pri, graeci accusata pericula an vix. His ne
                                homero dignissim, aliquam dolores scriptorem vis ut. Sit ad suas adhuc interesset, nec
                                no essent iuvaret adipiscing everti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12   ">
                    <div class=" p-4 rounded-2 psec2borde topfixed w-100  position-sticky  ">
                        <h2 class="psec2c2h">Completed
                            Projects</h2>
                        <!-- <p class="psec2c2p">Tantas signiferumque eum at, vix an dicant fierent homero dignissim.</p> -->
                        <!-- <div class="">
                            <div class="card p-3  h-100">
                                <img src="assets/frontend/img/col2Img.webp" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5>
                                    <p class="card-text  psec2c2p">Kandivali East, Mumbai, Maharashtra </p>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class=""><img src="assets/frontend/img/bed1.svg" alt="" class="pe-2"></div>
                                            <p class="pe-4 psec2c2p pt-1"> 2 Bed Rooms
                                            </p>
                                        </div>
                                        <div class="d-flex">
                                            <div class=""><img src="assets/frontend/img/shawar.svg" alt="" class="pe-2"></div>
                                            <p class="pe-4 psec2c2p pt-1"> 4 Bathrooms
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="owl-carousel  powl-carousel1 owl-theme">
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC1.jpg')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Vrindavan Gardens</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC2.jpg')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Yashodham Enclave</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC3.jpg')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Court Royale</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC4.jpg')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC5.jpg')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC6.jpg')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC7.jpg')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC8.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC9.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC10.jpg')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC11.jpg')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC12.jpg')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC13.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC14.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC15.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC16.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC17.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC18.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC19.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC20.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC21.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC22.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC23.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC24.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/elitesC25.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <!-- <h4>Indranil Alto-Heightse</h4> -->
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ========  section 2   END  ======== -->
@endsection
