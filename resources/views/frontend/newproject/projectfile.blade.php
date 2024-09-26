@section('tags')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
@endsection


@extends('frontend.layout.main')

@section('content')
 <!-- +++++++++++  section 1  +++++++++++ -->
 <section>
    <div class="container">
        <p class="psec1p"><span class=""> Home</span> <img src="{{asset('assets/frontend/img/propertyArrow.svg')}}" class="px-2" alt="">
            <span class=" text-dark"> J-13, Ground Floor, W.H.C. Road, Laxmi Nagar, Nagpur -440022.
            </span>
        </p>
        <h1 class="psec1h1">Vedant Aquamarine</h1>
        <div class="d-flex justify-content-between pb-3 flex-wrap pt-2">
            <div class="d-flex">
                <div class=""><img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}" class="pe-2 text-dark" alt=""></div>
                <h6 class=" pt-1"> J-13, Ground Floor, W.H.C. Road, Laxmi Nagar, Nagpur -440022.
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
            <img src="{{asset('assets/frontend/img/vedant.png')}}" class="rounded-3 height-50vh"  alt="">
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
                            <h5 class="psec2c1font pb-1 pt-3">Structure:</h5>
                            <p class="psec2c1font">R.C.C. frame structure for enhanced stability.</p>
                            <h5 class="psec2c1font pb-1">Walls:</h5>
                            <p class="psec2c1font mb-1">External walls: 6" thick brick masonry.</p>
                            <p class="psec2c1font">Internal walls: 4.5" thick brick masonry.</p>
                            <h5 class="psec2c1font pb-1">Plaster:</h5>
                            <p class="psec2c1font mb-1">Internal: 12mm thick smooth plain plaster.</p>
                            <p class="psec2c1font">External: Sand-faced cement plaster with architectural finish.
                            </p>
                            <h5 class="psec2c1font pb-1">Doors:</h5>
                            <p class="psec2c1font mb-1">Front Door: Wooden frame with veneer decorative panel.</p>
                            <p class="psec2c1font">Internal Doors: R.C.C. frame with flush door panel.</p>
                            <h5 class="psec2c1font pb-1">Windows:</h5>
                            <p class="psec2c1font">Powder-coated aluminum sliding windows with M.S. grills.</p>
                            <h5 class="psec2c1font pb-1">Flooring:</h5>
                            <p class="psec2c1font mb-1">2'x2' / 2'x4' / 3'x3' Vitrified tiles in all rooms with 2"
                                skirting.</p>
                            <p class="psec2c1font">Pavers block in open spaces on the ground floor.</p>
                            <h5 class="psec2c1font pb-1">Toilet:</h5>
                            <p class="psec2c1font mb-1">One wash basin, WC pan, and one shower in each toilet.</p>
                            <p class="psec2c1font ">grazed tiles of branded quality upto full height, anti-skid
                                tiles in flooring, white colored European pan with
                                wash-basin in each toilet. JAQUAR / RAK / KEROVIT or equivalent
                                make sanitary fitings.</p>
                            <h5 class="psec2c1font pb-1">Kitchen:</h5>
                            <p class="psec2c1font">Granite kitchen otta with stainless steel sink and
                                glazed ceramic tile upto 4.0 ft. height above platform.</p>
                            <h5 class="psec2c1font pb-1">Electrical:</h5>
                            <p class="psec2c1font mb-1">Concealed electric fitting with modular switches.</p>
                            <p class="psec2c1font">4 1/2 point in each room. A,C. T.V and Telephone points
                                in each bedroom and drawing room.</p>
                            <h5 class="psec2c1font pb-1">Painting:</h5>
                            <p class="psec2c1font">Acrylic emulsion paint on interior walls, waterproof acrylic
                                paint of premium brands for exterior walls.</p>
                            <h5 class="psec2c1font pb-1">Water Supply:</h5>
                            <p class="psec2c1font">24 hrs. water supply from over head water tank.</p>
                        </div>
                        <h3 class="psec2c1h3 pt-3">Outdoor Features</h3>
                        <div class="outdoor-features">
                            <h5 class="psec2c1font pb-1 pt-3">Water Supply:</h5>
                            <p class="psec2c1font">24-hour water supply from an overhead water tank.</p>
                            <h5 class="psec2c1font pb-1">Lift:</h5>
                            <p class="psec2c1font">Two high-speed elevators with generator backup for lifts and
                                common areas.</p>
                            <h5 class="psec2c1font pb-1">Solar Panel:</h5>
                            <p class="psec2c1font">Solar panel backup for common areas, water pumps, and lifts.</p>
                            <h5 class="psec2c1font pb-1">Parking:</h5>
                            <p class="psec2c1font">Allotted car parking for individual flat owners.</p>
                            <h5 class="psec2c1font pb-1">Fire Fighting:</h5>
                            <p class="psec2c1font">Provision for a full fire-fighting system.</p>
                            <h5 class="psec2c1font pb-1">Senior Citizen Area:</h5>
                            <p class="psec2c1font">Dedicated sit-out area for senior citizens.</p>
                            <h5 class="psec2c1font pb-1">Rainwater Harvesting:</h5>
                            <p class="psec2c1font">Rainwater harvesting system for sustainable water usage.</p>
                            <h5 class="psec2c1font pb-1">Gym:</h5>
                            <p class="psec2c1font">Well-equipped indoor gym for residents.</p>
                            <h5 class="psec2c1font pb-1">Yoga & Meditation:</h5>
                            <p class="psec2c1font">Space for yoga and meditation activities.</p>
                            <h5 class="psec2c1font pb-1">CCTV Surveillance:</h5>
                            <p class="psec2c1font">24x7 CCTV surveillance for common areas and parking.</p>
                            <h5 class="psec2c1font pb-1">Landscape:</h5>
                            <p class="psec2c1font">Landscaped common areas for a relaxing environment.</p>
                            <h5 class="psec2c1font pb-1">Grand Entrance Lobby:</h5>
                            <p class="psec2c1font">Luxurious entrance lobby for a grand welcome experience.</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="text-center text-lg-start">
                        <h4 class="psec2c1h pb-3">Video</h4>
                        <div class="">
                            <img src="{{asset('assets/frontend/img/video.png')}}" width="100%" alt="" class="rounded-2">
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3">1st TO 7th & 9th Floor Plan</h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/vedantfloorplan.png')}}" class="rounded-2" width="80%" alt="">
                        </div>
                    </div>
                    <!-- <div class=" pt-4">
                        <h4 class="psec2c1h pb-3"> Typical
                            3D Floor Plan</h4>
                        <div class="">
                            <img src="assets/frontend/img/typical3Dfloor.png " class="rounded-2" width="80%" alt="">
                            <img src="assets/frontend/img/elites3Dfloor.png " class="rounded-2 pt-4" width="80%" alt="">
                            <img src="assets/frontend/img/elitesimg1.png" class="rounded-2 pt-4" width="80%" alt="">
                            <img src="assets/frontend/img/elitesimg1(2).png" class="rounded-2 pt-4" width="80%" alt="">
                            <img src="assets/frontend/img/elitesimg1(3).png" class="rounded-2 pt-4" width="80%" alt="">
                            <img src="assets/frontend/img/elitesimg1(4).png" class="rounded-2 pt-4" width="80%" alt="">
                        </div>
                    </div> -->
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3"> Eighth Floor Plan</h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/vedantEIGHTH FLOOR PLAN.png')}}" class="rounded-2" width="80%" alt="">
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3"> Ground Floor Plan</h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/vedantground.png')}}" class="rounded-2 " width="80%" alt="">
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3">3BHK Flat Individual Floor Plan </h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/INDIVIDUAL FLOOR PLAN3bhk.png')}}" class="rounded-2 " width="80%"
                                alt="">
                        </div>
                    </div>
                    <div class="pt-4">
                        <h4 class="psec2c1h pb-3">3BHK Isometric View  </h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/ISOMETRIC VIEW3bhk.png')}}" class="rounded-2 " width="80%" alt="">
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3">4BHK Flat Individual Floor Plan </h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/INDIVIDUAL FLOOR PLAN4bhk.png')}}" class="rounded-2 " width="80%"
                                alt="">
                        </div>
                    </div>
                    <div class=" pt-4">
                        <h4 class="psec2c1h pb-3">4BHK Isometric View </h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/ISOMETRIC VIEW4bhk.png')}}" class="rounded-2 " width="80%" alt="">
                        </div>
                    </div>
                </div>
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
                                    <img src="{{asset('assets/frontend/img/vedantC1.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h">VAIBHAVI APARTMENT</h5>
                                        <p class="card-text  psec2c2p"> Hudkeswar </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC2.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VIBHUTI APARTMENT</h5>
                                        <p class="card-text  psec2c2p">Narendra Nagar </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC3.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT GLORY</h5>
                                        <p class="card-text  psec2c2p"> Swawalambi Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC4.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT ELEGANCE</h5>
                                        <p class="card-text  psec2c2p"> Swawalambi Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC5.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> RANJANA ENCLAVE</h5>
                                        <p class="card-text  psec2c2p"> Pandey Layout</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC6.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT DESIRE</h5>
                                        <p class="card-text  psec2c2p"> Swawalambi Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC7.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT CLASSIC</h5>
                                        <p class="card-text  psec2c2p"> Swawalambi Nagar </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC8.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT GOLD</h5>
                                        <p class="card-text  psec2c2p"> Pratap Nagar </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC9.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h">VEDANT GOLD</h5>
                                        <p class="card-text  psec2c2p"> Pratap Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC9.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT OPAL</h5>
                                        <p class="card-text  psec2c2p"> Gawande Layout</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC10.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT SHINE</h5>
                                        <p class="card-text  psec2c2p">Narendra Nagar </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC11.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT DELUX</h5>
                                        <p class="card-text  psec2c2p"> Narendra Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC12.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT PEARL</h5>
                                        <p class="card-text  psec2c2p"> Sneha Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC13.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT SAPPHIRE "A"</h5>
                                        <p class="card-text  psec2c2p"> Old Sneha Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC14.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h">VEDANT SAPPHIRE B</h5>
                                        <p class="card-text  psec2c2p"> Old Sneha Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC15.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h">VEDANT RUBY</h5>
                                        <p class="card-text  psec2c2p"> Narendra Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC16.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT EMERALD PHASE-I</h5>
                                        <p class="card-text  psec2c2p"> Sahakar Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC17.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT DIAMOND</h5>
                                        <p class="card-text  psec2c2p"> Sneh Nagar, Khamla</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC18.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT PLATINUM
                                        </h5>
                                        <p class="card-text  psec2c2p"> Manish Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC19.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT EMERALD PHASE-II</h5>
                                        <p class="card-text  psec2c2p"> Sahakar Nagar </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC20.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT PERIDOT</h5>
                                        <p class="card-text  psec2c2p"> Bajaj Nagar </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC21.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT OLIVINE</h5>
                                        <p class="card-text  psec2c2p"> Sneh Nagar, Khamla </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC22.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT GARNET</h5>
                                        <p class="card-text  psec2c2p"> New Sahakar Nagar </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC23.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT TANZANITE</h5>
                                        <p class="card-text  psec2c2p">  New Sahakar Nagar </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC23.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT BERYL</h5>
                                        <p class="card-text  psec2c2p">  New Sahakar Nagar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC24.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h"> VEDANT AMBER</h5>
                                        <p class="card-text  psec2c2p"> Pandey Layout</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="card p-3  h-100">
                                    <img src="{{asset('assets/frontend/img/vedantC25.png')}}" class="card-img-top rounded-3" alt="...">
                                    <div class="card-body pb-0 px-0">
                                        <h5 class="card-title psec2c2h">SWAMI SAMARTH ENCLAVE</h5>
                                        <p class="card-text  psec2c2p">Zingabai Takli, Godhani Road
                                            (Under Construction)</p>
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
