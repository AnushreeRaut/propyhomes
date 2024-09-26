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
                <span class=" text-dark">BALAJI PARADISE’ AT PLOT No 72, TELECOM NAGAR, NAGPUR.
                </span>
            </p>
            <h1 class="psec1h1">Balaji Paradise</h1>
            <div class="d-flex justify-content-between pb-3 flex-wrap pt-2">
                <div class="d-flex">
                    <div class=""><img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}" class="pe-2 text-dark" alt=""></div>
                    <h6 class=" pt-1">BALAJI PARADISE’ AT PLOT No 72, TELECOM NAGAR, NAGPUR.
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
                <img src="{{asset('assets/frontend/img/balajibg.png')}}" class="rounded-3 height-50vh" alt="">
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
                                        <!-- <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="assets/frontend/img/bed2.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Bedrooms:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                        </div> -->
                                        <!-- <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="assets/frontend/img/calender.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Bedrooms:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                        </div> -->
                                        <!-- <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="assets/frontend/img/shawar1.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Toilet:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font   "><img src="assets/frontend/img/Kitchen_Room.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Kitchen:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="assets/frontend/img/livingRoom.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Living:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="assets/frontend/img/Balcony.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font "> Balcony :</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">2</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="assets/frontend/img/Dining.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Dining:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="assets/frontend/img/Lift.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Lift:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="assets/frontend/img/WideUtility.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Wide Utility:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <h3 class="psec2c1h3 pt-3">Property utility</h3>
                            <div class="property-utilities">
                                <h5 class="psec2c1font pb-1 pt-3">Structure and Walls:</h5>
                                <p class="psec2c1font mb-1">High-grade cement and premium TMT reinforcement steel FE 500
                                    used
                                    for the structure with concrete blocks or brickwork.</p>
                                <p class="psec2c1font">External walls: 150mm thick; Internal walls: 115mm thick.
                                    Earthquake-resistant structure.</p>
                                <h5 class="psec2c1font pb-1">Plaster:</h5>
                                <p class="psec2c1font mb-1">External: 20mm thick double coat plaster.</p>
                                <p class="psec2c1font">Internal: 12mm thick smooth finish plaster.</p>
                                <h5 class="psec2c1font pb-1">Painting:</h5>
                                <p class="psec2c1font">Rooms painted with premium plastic emulsion (Asian/Berger),
                                    long-lasting Apex paint for exteriors.</p>
                                <h5 class="psec2c1font pb-1">Doors:</h5>
                                <p class="psec2c1font mb-1">Main door: Teak wood door with teak wood frame or TATA
                                    Pravesh
                                    door, equipped with a brass locking system.</p>
                                <p class="psec2c1font">Other doors: 30mm thick waterproof laminated flush doors with
                                    wooden frames, locking system, and standard accessories.</p>
                                <h5 class="psec2c1font pb-1">Windows:</h5>
                                <p class="psec2c1font">3-track UPVC sliding windows with tinted glass panels and
                                    mosquito doors, M.S. safety grills, finished with oil paint.</p>
                                <h5 class="psec2c1font pb-1">Flooring:</h5>
                                <p class="psec2c1font mb-1">Double-charge vitrified tiles (2x4) in the entire flat
                                    (Quotone/RAC/Kajaria).</p>
                                <p class="psec2c1font">Black or gray granite in the staircase and lobby with stainless
                                    steel railing.</p>
                                <h5 class="psec2c1font pb-1">Lift:</h5>
                                <p class="psec2c1font">Two automatic passenger lifts (Otis/Johnson) with automatic
                                    rescue device and generator/inverter backup.</p>
                                <h5 class="psec2c1font pb-1">Kitchen:</h5>
                                <p class="psec2c1font">Premium granite kitchen platform with stainless steel sink
                                    (Nirali/Haffle make), glazed ceramic tiles up to ceiling height. Provision for
                                    AquaGuard, microwave, and fridge connections.</p>
                                <h5 class="psec2c1font pb-1">Toilets:</h5>
                                <p class="psec2c1font">Ceramic tiles cladding up to full height, with superior ceramic
                                    ware (Jaguar/Parryware/Hindware) and hot and cold mixers (Jaguar or equivalent).
                                    Geyser point provision in every bathroom.</p>
                                <h5 class="psec2c1font pb-1">Electrification:</h5>
                                <p class="psec2c1font">Concealed copper wiring with four points in each room. Power
                                    points in all bathrooms and kitchen, AC points in all bedrooms and the hall.
                                    Telephone and cable points in the drawing hall and master bedroom. Switches will be
                                    from standard brands like Legrand, Roma, or Anchor, and wiring will be from Finolex,
                                    Polycab, or KEI. Inverter power backup wiring for each apartment.</p>
                                <h5 class="psec2c1font pb-1">Plumbing & Water Supply:</h5>
                                <p class="psec2c1font">Standard sanitary and water fittings, with provisions for sump
                                    and overhead water tanks for drinking and utility purposes. Bathrooms, terraces, and
                                    balconies are fully waterproofed.</p>
                            </div>
                            <h3 class="psec2c1h3 pt-3">Outdoor Features</h3>
                            <div class="outdoor-features">
                                <h5 class="psec2c1font pb-1">Security:</h5>
                                <p class="psec2c1font">The building is protected by a 6-foot high compound wall.
                                    Intercom between all flats and security booth with CCTV cameras for surveillance.
                                </p>
                                <h5 class="psec2c1font pb-1">Parking:</h5>
                                <p class="psec2c1font">Ample parking space available, with a provision for EV charging
                                    sockets.</p>
                                <h5 class="psec2c1font pb-1">Terrace:</h5>
                                <p class="psec2c1font">Fully developed terrace for social gatherings and relaxation.</p>
                                <h5 class="psec2c1font pb-1">Additional Features:</h5>
                                <p class="psec2c1font">Rainwater harvesting system, solar panel installation to keep
                                    common area electricity bill-free, and glass railings in balconies with stainless
                                    steel railings on the staircase.</p>
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
                            <h4 class="psec2c1h pb-3">Typical Floor Plan 3BHK residence </h4>
                            <div class="text-center text-lg-start">
                                <img src="{{asset('assets/frontend/img/bajatypicFloor.png ')}}" class="rounded-2" width="80%" alt="">
                                <!-- <img src="assets/frontend/img/mahendrafloor3bhk2.png" width="80%" alt=""> -->
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3"> Ground Floor Lobby</h4>
                            <div class="">
                                <img src="assets/frontend/img/insightGround.png" width="80%" alt="">
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
                    <div class=" p-4 rounded-2 psec2borde w-100  position-sticky topfixed ">
                        <h2 class="psec2c2h">Related Property</h2>
                     
                        <div class="owl-carousel  powl-carousel owl-theme">
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/LOTUSimg1.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <h4>Vrindavan Gardens</h4>
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                            <!-- <div class="d-flex">
                                                <div class="d-flex pe-3">
                                                    <p><img src="assets/frontend/img/bed1.svg" alt=""
                                                            class="pe-2 pt-1 sec2CarouIcon">
                                                    </p>
                                                    <p> Bed Rooms</p>
                                                </div>
                                                <div class="d-flex ">
                                                    <p><img src="assets/frontend/img/shawar.svg" alt=""
                                                            class="pe-2 pt-1 sec2CarouIcon">
                                                    </p>
                                                    <p> Bathrooms</p>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/LOTUSimg2.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <h4>Yashodham Enclave</h4>
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                            <!-- <div class="d-flex">
                                                <div class="d-flex pe-3">
                                                    <p><img src="assets/frontend/img/bed1.svg" alt=""
                                                            class="pe-2 pt-1 sec2CarouIcon">
                                                    </p>
                                                    <p> Bed Rooms</p>
                                                </div>
                                                <div class="d-flex ">
                                                    <p><img src="assets/frontend/img/shawar.svg" alt=""
                                                            class="pe-2 pt-1 sec2CarouIcon">
                                                    </p>
                                                    <p> Bathrooms</p>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/LOTUSimg3.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <h4>Court Royale</h4>
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                            <!-- <div class="d-flex">
                                                <div class="d-flex pe-3">
                                                    <p><img src="assets/frontend/img/bed1.svg" alt=""
                                                            class="pe-2 pt-1 sec2CarouIcon">
                                                    </p>
                                                    <p> Bed Rooms</p>
                                                </div>
                                                <div class="d-flex ">
                                                    <p><img src="assets/frontend/img/shawar.svg" alt=""
                                                            class="pe-2 pt-1 sec2CarouIcon">
                                                    </p>
                                                    <p> Bathrooms</p>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/LOTUSimg4.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <h4>Indranil Alto-Heightse</h4>
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
                                            <!-- <div class="d-flex">
                                                <div class="d-flex pe-3">
                                                    <p><img src="assets/frontend/img/bed1.svg" alt=""
                                                            class="pe-2 pt-1 sec2CarouIcon">
                                                    </p>
                                                    <p> Bed Rooms</p>
                                                </div>
                                                <div class="d-flex ">
                                                    <p><img src="assets/frontend/img/shawar.svg" alt=""
                                                            class="pe-2 pt-1 sec2CarouIcon">
                                                    </p>
                                                    <p> Bathrooms</p>
                                                </div>
                                            </div> -->
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
