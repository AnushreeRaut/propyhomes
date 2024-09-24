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
        <!-- <p class="psec1p"><span class=""> Home</span> <img src="assets/frontend/propertyArrow.svg" class="px-2" alt="">
            <span class=" text-dark">BALAJI PARADISE’ AT PLOT No 72, TELECOM NAGAR, NAGPUR.
            </span>
        </p> -->
        <h1 class="psec1h1">Bella</h1>
        <div class="d-flex justify-content-between pb-3 flex-wrap pt-2">
            <!-- <div class="d-flex">
                <div class=""><img src="assets/frontend/maps-and-flags.svg" class="pe-2 text-dark" alt=""></div>
                <h6 class=" pt-1">BALAJI PARADISE’ AT PLOT No 72, TELECOM NAGAR, NAGPUR.
                </h6>
            </div> -->
            <!-- <h5 class="psec1h5 pt-md-0 pt-3">₹30.66L - 53.03 L</h5> -->
        </div>
        <!-- <h2 style="text-align:center">Slideshow Gallery</h2> -->
        <!-- <div class="container px-0">
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="assets/frontend/LOTUSimg41 (1).png" width="100%" class="pDetailImg rounded-4">
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img src="assets/frontend/LOTUSimg32 (1).png" width="100%" class="pDetailImg rounded-4">
            </div>
            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img src="assets/frontend/LOTUSimg23 (1).png" width="100%" class="pDetailImg rounded-4">
            </div>
            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img src="assets/frontend/LOTUSimg14 (1).png" width="100%" class="pDetailImg rounded-4">
            </div>
            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="assets/frontend/LOTUSimg41 (1).png" width="100%" class="pDetailImg rounded-4">
            </div>
            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img src="assets/frontend/LOTUSimg32 (1).png" width="100%" class="pDetailImg rounded-4">
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
                    <img class="demo cursor rounded-2" src="assets/frontend/LOTUSimg41 (1).png" width="100%"
                        class="pDetailImg" onclick="currentSlide(1)" alt="The Woods">
                </div>
                <div class="column ">
                    <img class="demo cursor rounded-2" src="assets/frontend/LOTUSimg23 (1).png" width="100%"
                        class="pDetailImg" onclick="currentSlide(2)" alt="Cinque Terre">
                </div>
                <div class="column ">
                    <img class="demo cursor rounded-2" src="assets/frontend/LOTUSimg23 (1).png" width="100%"
                        class="pDetailImg" onclick="currentSlide(3)" alt="Mountains and fjords">
                </div>
                <div class="column ">
                    <img class="demo cursor rounded-2" src="assets/frontend/LOTUSimg14 (1).png" width="100%"
                        class="pDetailImg" onclick="currentSlide(4)" alt="Northern Lights">
                </div>
                <div class="column ">
                    <img class="demo cursor rounded-2" src="assets/frontend/LOTUSimg41 (1).png" width="100%"
                        class="pDetailImg" onclick="currentSlide(5)" alt="Nature and sunrise">
                </div>
                <div class="column  ">
                    <img class="demo cursor rounded-2" src="assets/frontend/LOTUSimg32 (1).png" width="100%"
                        class="pDetailImg" onclick="currentSlide(6)" alt="Snowy Mountains">
                </div>
            </div>
        </div> -->
        <div class="">
            <img src="{{asset('assets/frontend/bellabg.png')}}" class="rounded-3 height-50vh" alt="">
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
                                            <h5 class="  "><img src="assets/frontend/paintBrush.svg"
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
                                            <h5 class="psec2c1font  "><img src="assets/frontend/paintBrush.svg"
                                                    class="pe-3 pe-xxl-4" alt=""></h5>
                                            <h5 class="psec2c1font "> Size:</h5>
                                        </div>
                                        <h5 class="psec2c1font psec2c1Weight1">1800 SQ. FT.</h5>
                                    </div> -->
                                    <!-- <div class="d-flex pt-2 justify-content-between">
                                        <div class="d-flex">
                                            <h5 class="psec2c1font  "><img src="assets/frontend/bed2.svg"
                                                    class="pe-3 pe-xxl-4" alt=""></h5>
                                            <h5 class="psec2c1font ">Bedrooms:</h5>
                                        </div>
                                        <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                    </div> -->
                                    <!-- <div class="d-flex pt-2 justify-content-between">
                                        <div class="d-flex">
                                            <h5 class="psec2c1font  "><img src="assets/frontend/calender.svg"
                                                    class="pe-3 pe-xxl-4" alt=""></h5>
                                            <h5 class="psec2c1font ">Bedrooms:</h5>
                                        </div>
                                        <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                    </div> -->
                                    <!-- <div class="d-flex pt-2 justify-content-between">
                                        <div class="d-flex">
                                            <h5 class="psec2c1font  "><img src="assets/frontend/shawar1.svg"
                                                    class="pe-3 pe-xxl-4" alt=""></h5>
                                            <h5 class="psec2c1font ">Toilet:</h5>
                                        </div>
                                        <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                    </div>
                                    <div class="d-flex pt-2 justify-content-between">
                                        <div class="d-flex">
                                            <h5 class="psec2c1font   "><img src="assets/frontend/Kitchen_Room.svg"
                                                    class="pe-3 pe-xxl-4" alt=""></h5>
                                            <h5 class="psec2c1font ">Kitchen:</h5>
                                        </div>
                                        <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                    </div>
                                    <div class="d-flex pt-2 justify-content-between">
                                        <div class="d-flex">
                                            <h5 class="psec2c1font  "><img src="assets/frontend/livingRoom.svg"
                                                    class="pe-3 pe-xxl-4" alt=""></h5>
                                            <h5 class="psec2c1font ">Living:</h5>
                                        </div>
                                        <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                    </div>
                                    <div class="d-flex pt-2 justify-content-between">
                                        <div class="d-flex">
                                            <h5 class="psec2c1font  "><img src="assets/frontend/Balcony.svg"
                                                    class="pe-3 pe-xxl-4" alt=""></h5>
                                            <h5 class="psec2c1font "> Balcony :</h5>
                                        </div>
                                        <h5 class="psec2c1font psec2c1Weight1">2</h5>
                                    </div>
                                    <div class="d-flex pt-2 justify-content-between">
                                        <div class="d-flex">
                                            <h5 class="psec2c1font  "><img src="assets/frontend/Dining.svg"
                                                    class="pe-3 pe-xxl-4" alt=""></h5>
                                            <h5 class="psec2c1font ">Dining:</h5>
                                        </div>
                                        <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                    </div>
                                    <div class="d-flex pt-2 justify-content-between">
                                        <div class="d-flex">
                                            <h5 class="psec2c1font  "><img src="assets/frontend/Lift.svg"
                                                    class="pe-3 pe-xxl-4" alt=""></h5>
                                            <h5 class="psec2c1font ">Lift:</h5>
                                        </div>
                                        <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                    </div>
                                    <div class="d-flex pt-2 justify-content-between">
                                        <div class="d-flex">
                                            <h5 class="psec2c1font  "><img src="assets/frontend/WideUtility.svg"
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
                            <h5 class="psec2c1font pb-1 pt-3">Structure:</h5>
                            <p class="psec2c1font">Earthquake-resistant RCC framed structure.</p>
                            <h5 class="psec2c1font pb-1">Walls:</h5>
                            <p class="psec2c1font mb-1">Internal: 4" (115mm) thick brick.</p>
                            <p class="psec2c1font">External: 6" (150mm) thick brick.</p>
                            <h5 class="psec2c1font pb-1">Bedroom & Living Room:</h5>
                            <p class="psec2c1font mb-1">Vitrified tiles flooring.</p>
                            <p class="psec2c1font mb-1">Cable TV connections in all rooms.</p>
                            <p class="psec2c1font mb-1">AC points in the hall and bedrooms.</p>
                            <p class="psec2c1font">POP in all rooms with panel lights.</p>
                            <h5 class="psec2c1font pb-1">Bathroom:</h5>
                            <p class="psec2c1font mb-1">Antiskid tiles flooring.</p>
                            <p class="psec2c1font mb-1">Washbasin with premium fittings and sanitary ware.</p>
                            <p class="psec2c1font mb-1">Designer dado up to 8'.</p>
                            <p class="psec2c1font mb-1">Hot and cold water connections.</p>
                            <p class="psec2c1font">PVC ceiling in balcony and bathroom.</p>
                            <h5 class="psec2c1font pb-1">Electrical:</h5>
                            <p class="psec2c1font mb-1">Concealed electrical fittings with ISI-certified wires and
                                modular switches.</p>
                            <p class="psec2c1font">Sufficient power outlets and light points provided.</p>
                            <h5 class="psec2c1font pb-1">Plumbing:</h5>
                            <p class="psec2c1font">ISI-marked CPVC, UPVC, and SWR pipe fittings.</p>
                            <p class="psec2c1font">PVC pipes for soil and rainwater drainage.</p>
                            <h5 class="psec2c1font pb-1">Doors & Windows:</h5>
                            <p class="psec2c1font mb-1">Main Door: Veneer finish with plywood frame.</p>
                            <p class="psec2c1font mb-1">Other Doors: Plywood frame with mica finish.</p>
                            <p class="psec2c1font mb-1">Toilet Door: Granite frame with flush door.</p>
                            <p class="psec2c1font">Windows: UPVC windows with mosquito nets.</p>
                            <h5 class="psec2c1font pb-1">Kitchen:</h5>
                            <p class="psec2c1font mb-1">Granite top with stainless steel sink and AquaGuard point.
                            </p>
                            <p class="psec2c1font">Semi-modular kitchen.</p>
                            <h5 class="psec2c1font pb-1">Painting:</h5>
                            <p class="psec2c1font mb-1">Internal: Emulsion paint with full putty finish.</p>
                            <p class="psec2c1font">External: Weather-proof paint.</p>
                        </div>
                        <h3 class="psec2c1h3 pt-3">Outdoor Features</h3>
                        <div class="outdoor-features">
                            <h5 class="psec2c1font pb-1 pt-3">Terrace Garden:</h5>
                            <p class="psec2c1font">Beautifully landscaped terrace garden with gym and yoga space.
                            </p>
                            <h5 class="psec2c1font pb-1">Video Door Phone:</h5>
                            <p class="psec2c1font">Video door phone system for enhanced security and visitor
                                monitoring.</p>
                            <h5 class="psec2c1font pb-1">CCTV Surveillance:</h5>
                            <p class="psec2c1font">24/7 CCTV surveillance for all common areas ensuring safety.</p>
                            <h5 class="psec2c1font pb-1">Elevators:</h5>
                            <p class="psec2c1font">Automatic elevators with modern controls and safety features.</p>
                            <h5 class="psec2c1font pb-1">Solar Power:</h5>
                            <p class="psec2c1font">Solar power for common area lighting to reduce energy costs.</p>
                            <h5 class="psec2c1font pb-1">Designer Lobby:</h5>
                            <p class="psec2c1font">Luxuriously designed lobby for a grand entrance experience.</p>
                            <h5 class="psec2c1font pb-1">Senior Citizen Sit-outs:</h5>
                            <p class="psec2c1font">Specially designed sit-out areas for senior citizens to relax and
                                socialize.</p>
                            <h5 class="psec2c1font pb-1">EV Charging:</h5>
                            <p class="psec2c1font">Electric vehicle charging stations in the parking area.</p>
                            <h5 class="psec2c1font pb-1">Battery Backup:</h5>
                            <p class="psec2c1font">Battery backup system for the lift to ensure continuous service
                                during power outages.</p>
                            <h5 class="psec2c1font pb-1">Rainwater Harvesting:</h5>
                            <p class="psec2c1font">Rainwater harvesting system for water conservation and
                                sustainability.</p>
                            <h5 class="psec2c1font pb-1">Mechanical Car Parking:</h5>
                            <p class="psec2c1font">Mechanized car parking system for efficient and space-saving
                                vehicle storage.</p>
                            <h5 class="psec2c1font pb-1">Fire Safety:</h5>
                            <p class="psec2c1font">Comprehensive fire safety measures installed for the safety of
                                all residents.</p>
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
                        <h4 class="psec2c1h pb-3">Typical Floor Plan
                            1st To 7th Floor</h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/bellatypicalFloorplan.png')}}" class="rounded-2" width="80%" alt="">
                            <img src="{{asset('assets/frontend/bellafloorimg1(1).png')}}" class="rounded-2 mt-4" width="80%" alt="">
                            <img src="{{asset('assets/frontend/bellafloorimg1(2).png ')}}" class="rounded-2 mt-4" width="80%" alt="">
                            <img src="{{asset('assets/frontend/bellafloorimg1(3).png')}}" class="rounded-2 mt-4" width="80%" alt="">
                            <!-- <img src="assets/frontend/mahendrafloor3bhk2.png" width="80%" alt=""> -->
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3">Isometric View</h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/bellaIsomaticL.png')}}" class="rounded-2 " width="80%" alt="">
                            <img src="{{asset('assets/frontend/img/bellaIsomaticR.png')}}" class="rounded-2 mt-4" width="80%" alt="">
                            <!-- <img src="assets/frontend/mahendrafloor3bhk2.png" width="80%" alt=""> -->
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3">Seating Area</h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/bellaseatingarea.png')}}" class="rounded-2" width="80%" alt="">
                            <img src="{{asset('assets/frontend/img/bellaseatingarea1.png')}}" class="rounded-2 mt-4" width="80%" alt="">
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3">Gym</h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/bellgyme.png')}}" class="rounded-2" width="80%" alt="">
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3">Yoga</h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/bellayoga.png')}}" class="rounded-2" width="80%" alt="">
                        </div>
                    </div>
                </div>
                <div class="p-4 psec2bordeS   rounded-2 mt-5">
                    <div class="">
                        <h4 class="psec2c1h pb-3">Ground Floor Plan</h4>
                        <div class="text-center text-lg-start">
                            <img src="{{asset('assets/frontend/img/bellaGroundPlan.png')}}" class="rounded-2" width="80%" alt="">
                        </div>
                    </div>
                </div>
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
                <div class=" p-4 rounded-2 psec2borde w-100  position-sticky topfixed">
                    <h2 class="psec2c2h">Related Property</h2>
                    <!-- <p class="psec2c2p">Tantas signiferumque eum at, vix an dicant fierent homero dignissim.</p> -->
                    <!-- <div class="">
                        <div class="card p-3  h-100">
                            <img src="assets/frontend/col2Img.webp" class="card-img-top" alt="...">
                            <div class="card-body px-0">
                                <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5>
                                <p class="card-text  psec2c2p">Kandivali East, Mumbai, Maharashtra </p>
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div class=""><img src="assets/frontend/bed1.svg" alt="" class="pe-2"></div>
                                        <p class="pe-4 psec2c2p pt-1"> 2 Bed Rooms
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <div class=""><img src="assets/frontend/shawar.svg" alt="" class="pe-2"></div>
                                        <p class="pe-4 psec2c2p pt-1"> 4 Bathrooms
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
                                                <p><img src="assets/frontend/bed1.svg" alt=""
                                                        class="pe-2 pt-1 sec2CarouIcon">
                                                </p>
                                                <p> Bed Rooms</p>
                                            </div>
                                            <div class="d-flex ">
                                                <p><img src="assets/frontend/shawar.svg" alt=""
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
                                                <p><img src="assets/frontend/bed1.svg" alt=""
                                                        class="pe-2 pt-1 sec2CarouIcon">
                                                </p>
                                                <p> Bed Rooms</p>
                                            </div>
                                            <div class="d-flex ">
                                                <p><img src="assets/frontend/shawar.svg" alt=""
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
                                                <p><img src="assets/frontend/bed1.svg" alt=""
                                                        class="pe-2 pt-1 sec2CarouIcon">
                                                </p>
                                                <p> Bed Rooms</p>
                                            </div>
                                            <div class="d-flex ">
                                                <p><img src="assets/frontend/shawar.svg" alt=""
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
                                                <p><img src="assets/frontend/bed1.svg" alt=""
                                                        class="pe-2 pt-1 sec2CarouIcon">
                                                </p>
                                                <p> Bed Rooms</p>
                                            </div>
                                            <div class="d-flex ">
                                                <p><img src="assets/frontend/shawar.svg" alt=""
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
