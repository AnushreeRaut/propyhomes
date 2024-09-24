@section('tags')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
@endsection


@extends('frontend.layout.main')

@section('content')
    <!-- +++++++++++  section 1  +++++++++++ -->
    <section class="my-5 pt-5">
        <div class="container">
            <p class="psec1p"><span class=""> Home</span> <img src="{{ asset('assets/frontend/img/propertyArrow.svg') }}"
                    class="px-2" alt="">
                <span class=" text-dark">Corporate office. Flat No. 401, 4th Floor, Royal Orchid Apartment,
                    Behind School of scholars, Near University Campus Amravati Road, Nagpur-440023(MS)</span>
            </p>
            <h1 class="psec1h1">Orchid Infinity</h1>
            <div class="d-flex justify-content-between pb-3 flex-wrap pt-2">
                <div class="d-flex">
                    <div class=""><img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                            class="pe-2 text-dark" alt=""></div>
                    <h6 class=" pt-1">Corporate office. Flat No. 401, 4th Floor, Royal Orchid Apartment,
                        Behind School of scholars, Near University Campus Amravati Road, Nagpur-440023(MS)</h6>
                </div>
                <!-- <h5 class="psec1h5 pt-md-0 pt-3">₹30.66L - 53.03 L</h5> -->
            </div>

            <div class="">
                <img src="{{ asset('assets/frontend/img/Orchidimg.png') }}" class="rounded-3 height-50vh" alt="">
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
                            <div class="row pt-2">
                                <div class="col-lg-6 col-md-12">
                                    <div class="pe-1 pe-xl-4">
                                        <!-- <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="  "><img src="assets/frontend/img/paintBrush.svg"
                                                        class="pe-3 pe-xxl-4" alt=""> </h5>
                                                <h5 class="psec2c1font ">Size:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1332 SQ. FT.</h5>
                                        </div> -->
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/bed2.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""> </h5>
                                                <h5 class="psec2c1font ">Bedrooms:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/shawar1.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Toilet:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font   "><img
                                                        src="{{ asset('assets/frontend/img/Kitchen_Room.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Kitchen:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/livingRoom.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Living:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ 'assets/frontend/img/Balcony.svg' }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font "> Balcony :</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">2</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/Dining.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Dining:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/Lift.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Lift:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/WideUtility.svg') }}"
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
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/bed2.svg') }}"
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
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/shawar1.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Toilet:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">3</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font   "><img
                                                        src="{{ asset('assets/frontend/img/Kitchen_Room.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Kitchen:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/livingRoom.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Living:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/Balcony.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font "> Balcony :</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">2</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/Dining.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Dining:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/Lift.svg') }}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Lift:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img
                                                        src="{{ asset('assets/frontend/img/WideUtility') }}.svg"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Wide Utility:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">1</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="psec2c1h3  pt-3">Property utility</h3>
                            <div class="property-utilities">
                                <h5 class="psec2c1font pt-3">Structure:</h5>
                                <p class="psec2c1font">Earthquake-resistant RCC framed structure.</p>
                                <h5 class="psec2c1font pb-1 pt-2">Walls:</h5>
                                <p class="psec2c1font mb-1">Internal: 4" (115mm) thick brick.</p>
                                <p class="psec2c1font">External: 6" (150mm) thick brick.</p>
                                <h5 class="psec2c1font pb-1">Flooring:</h5>
                                <p class="psec2c1font mb-1">Vitrified tiles flooring (32x64 cm) in bedrooms and living
                                    room.</p>
                                <p class="psec2c1font">Anti-skid tiles in bathroom and terrace.</p>
                                <h5 class="psec2c1font pb-1">Bedroom & Living Room:</h5>
                                <p class="psec2c1font mb-1">Cable TV connections in living room, AC point in hall &
                                    master bedroom.</p>
                                <p class="psec2c1font">POP in all rooms with panel lights.</p>
                                <h5 class="psec2c1font pb-1">Bathroom:</h5>
                                <p class="psec2c1font mb-1">Washbasin, premium make fittings, and anti-skid tiles
                                    flooring.</p>
                                <h5 class="psec2c1font pb-1">Electrical:</h5>
                                <p class="psec2c1font mb-1">Concealed electrical fitting with ISI Wire and modular
                                    switches.</p>
                                <p class="psec2c1font">Sufficient power outlets and light points provided.</p>
                                <h5 class="psec2c1font pb-1">Plumbing:</h5>
                                <p class="psec2c1font mb-1">ISI mark full CPVC, UPVC, SWR fittings.</p>
                                <p class="psec2c1font">PVC pipes for soil and rainwater pipes.</p>
                                <h5 class="psec2c1font pb-1">Doors & Windows:</h5>
                                <p class="psec2c1font mb-1">Main door: Teakwood frame with veneer finish.</p>
                                <p class="psec2c1font mb-1">Other doors: Plywood frame & veneer finish.</p>
                                <p class="psec2c1font">Windows: Aluminium powder-coated windows with mosquito jali.</p>
                                <h5 class="psec2c1font pb-1">Kitchen:</h5>
                                <p class="psec2c1font mb-1">Granite top with SS sink, Aquaguard point, and semi-modular
                                    kitchen setup.</p>
                                <h5 class="psec2c1font pb-1">Painting:</h5>
                                <p class="psec2c1font mb-1">Internal: Emulsion paint with full putty.</p>
                                <p class="psec2c1font">External: Plastic emulsion paint.</p>
                                <h5 class="psec2c1font pb-1">Lift & Parking:</h5>
                                <p class="psec2c1font mb-1">Lift with ARD and generator backup.</p>
                                <p class="psec2c1font">Allotted car parking space.</p>
                                <h5 class="psec2c1font pb-1">Sanitary Ware:</h5>
                                <p class="psec2c1font mb-1">Designer dado up to 8'.</p>
                                <p class="psec2c1font">Hot & cold water connection. PVC ceiling in balcony & bathroom.
                                </p>
                                <h5 class="psec2c1font pb-1">Outdoor Features:</h5>
                                <p class="psec2c1font mb-1">Terrace garden, video door phone, CCTV surveillance,
                                    automatic elevators.</p>
                                <p class="psec2c1font">Solar power for common areas, senior citizen sit-outs, EV
                                    charging, 24-hour security, battery backup for lift, rainwater harvesting.</p>
                            </div>
                            <h3 class="psec2c1h3  pt-3">Outdoor features</h3>
                            <div class="outdoor-features">
                                <h5 class="psec2c1font pb-1 pt-3">Terrace Garden:</h5>
                                <p class="psec2c1font">Well-maintained terrace garden offering a relaxing outdoor space.
                                </p>
                                <h5 class="psec2c1font pb-1">Video Door Phone:</h5>
                                <p class="psec2c1font">Advanced video door phone system for enhanced security.</p>
                                <h5 class="psec2c1font pb-1">CCTV Surveillance:</h5>
                                <p class="psec2c1font">Comprehensive CCTV surveillance for round-the-clock security.</p>
                                <h5 class="psec2c1font pb-1">Automatic Elevators:</h5>
                                <p class="psec2c1font">Modern automatic elevators for convenience and accessibility.</p>
                                <h5 class="psec2c1font pb-1">Solar Power:</h5>
                                <p class="psec2c1font">Solar power system for common area lighting and energy
                                    efficiency.</p>
                                <h5 class="psec2c1font pb-1">Senior Citizen's Sit-outs:</h5>
                                <p class="psec2c1font">Dedicated sit-out areas designed for senior citizens.</p>
                                <h5 class="psec2c1font pb-1">EV Charging:</h5>
                                <p class="psec2c1font">Electric vehicle (EV) charging stations available on-site.</p>
                                <h5 class="psec2c1font pb-1">24-Hour Security:</h5>
                                <p class="psec2c1font">24-hour security services ensuring safety and peace of mind.</p>
                                <h5 class="psec2c1font pb-1">Battery Backup:</h5>
                                <p class="psec2c1font">Battery backup system for elevators ensuring uninterrupted
                                    service.</p>
                                <h5 class="psec2c1font pb-1">Rainwater Harvesting:</h5>
                                <p class="psec2c1font">Rainwater harvesting system for efficient water management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Video</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{ asset('assets/frontend/img/video.png') }}" width="100%" alt=""
                                    class="">
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-4">Typical 1st to 7th Floor Plan</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{ asset('assets/frontend/img/orchildGround1.png') }}" width="80%"
                                    class="rounded-2" alt="">
                                <!-- <img src="assets/frontend/img/mahendrafloor3bhk2.png" width="80%" alt=""> -->
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-4">Typical 8th Floor Plan</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{ asset('assets/frontend/img/orchild8.png') }}" width="80%"
                                    class="rounded-2" alt="">
                                <!-- <img src="assets/frontend/img/mahendrafloor3bhk2.png" width="80%" alt=""> -->
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Typical 9th to 15th Floor Plan</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{ asset('assets/frontend/img/orchild9.png') }}" width="80%"
                                    class="rounded-2" alt="">
                                <!-- <img src="assets/frontend/img/mahendrafloor3bhk2.png" width="80%" alt=""> -->
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Typical 13th Floor Plan</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{ asset('assets/frontend/img/orchild13floor.png') }}" width="80%"
                                    class="rounded-2" alt="">
                                <!-- <img src="assets/frontend/img/mahendrafloor3bhk2.png" width="80%" alt=""> -->
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Isometric View</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{ asset('assets/frontend/img/Isometric View.png') }}" width="80%"
                                    class="rounded-2" alt="">
                                <!-- <img src="assets/frontend/img/mahendrafloor3bhk2.png" width="80%" alt=""> -->
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">15th Floor Plan</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{ asset('assets/frontend/img/orchild15floor.png') }}" width="80%"
                                    alt="" class="rounded-2">
                                <img src="{{ asset('assets/frontend/img/orchild15floor1.png') }}" width="80%"
                                    alt="" class="mt-4 rounded-2 ">
                                <img src="{{ asset('assets/frontend/img/orchild15floor2.png') }}" width="80%"
                                    alt="" class="mt-4 rounded-2 ">
                                <!-- <img src="assets/frontend/img/mahendrafloor3bhk2.png" width="80%" alt=""> -->
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3"> Ground Floor Lobby</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{ asset('assets/frontend/img/orchildground.png') }}" width="80%"
                                    class="rounded-2" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3"> Typical 1st to 9th Floor Plan</h4>
                            <div class="">
                                <img src="assets/frontend/img/typicaFloor.png" width="80%" alt="">
                            </div>
                        </div>
                    </div> -->
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Location</h4>
                            <div class="">
                                <iframe class="rounded-2"
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
                        <div class="owl-carousel  powl-carousel owl-theme">
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{ asset('assets/frontend/img/LOTUSimg1.png') }}"
                                            class="card-img-top rounded-3" alt="...">
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
                                        <img src="{{ asset('assets/frontend/img/LOTUSimg2.png') }}"
                                            class="card-img-top rounded-3" alt="...">
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
                                        <img src="{{ asset('assets/frontend/img/LOTUSimg3.png') }}"
                                            class="card-img-top rounded-3" alt="...">
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
                                        <img src="{{ asset('assets/frontend/img/LOTUSimg4.png') }}"
                                            class="card-img-top rounded-3" alt="...">
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
