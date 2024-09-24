@section('tags')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishna</title>
@endsection


@extends('frontend.layout.main')

@section('content')
    <!-- +++++++++++  section 1  +++++++++++ -->
    <section class="my-5 pt-5">
        <div class="container">
            <p class="psec1p"><span class=""> Home</span> <img src="{{asset('assets/frontend/img/propertyArrow.svg')}}" class="px-2" alt="">
                <span class=" text-dark"> 180, BAJAJ NAGAR, NAGPUR-10
                </span>
            </p>
            <h1 class="psec1h1">Krishna
                Prabha</h1>
            <div class="d-flex justify-content-between pb-3 flex-wrap pt-2">
                <div class="d-flex">
                    <div class=""><img src="{{asset('assets/frontend/img/maps-and-flags.svg')}}" class="pe-2 text-dark" alt=""></div>
                    <h6 class=" pt-1"> 180, BAJAJ NAGAR, NAGPUR-10</h6>
                </div>
                <!-- <h5 class="psec1h5 pt-md-0 pt-3">₹30.66L - 53.03 L</h5> -->
            </div>

            <div class="">
                <img src="{{asset('assets/frontend/img/KrishnaPrabhabg.png')}}" class="rounded-3 height-50vh" alt="">
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
                            <h5 class="psec2c1font pb-2">Luxurious 4BHK Flats</h5>
                            <div class="row pt-2">
                                <div class="col-lg-6 col-md-12">
                                    <div class="pe-1 pe-xl-4">
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
                                                <h5 class="psec2c1font"><img src="{{asset('assets/frontend/img/Kitchen_Room.svg')}}"
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
                                                <h5 class="psec2c1font "> Balcony:</h5>
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
                                        <div class="d-flex pt-2 justify-content-between">
                                            <div class="d-flex">
                                                <h5 class="psec2c1font  "><img src="{{asset('assets/frontend/img/bed2.svg')}}"
                                                        class="pe-3 pe-xxl-4" alt=""></h5>
                                                <h5 class="psec2c1font ">Bedrooms:</h5>
                                            </div>
                                            <h5 class="psec2c1font psec2c1Weight1">4</h5>
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
                            <h3 class="psec2c1h3  pt-3">Property utility</h3>

                            <div class=" pt-3 ">

                                <div class="">
                                    <h5 class="psec2c1font pb-2">Structure:</h5>
                                    <p class="psec2c1font">Earthquake Resistant RCC Framed Structure (M25 Concrete Slab)
                                    </p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Walls:</h5>
                                    <p class="psec2c1font mb-1">Internal: 115mm thick brick masonry</p>
                                    <p class="psec2c1font">External: 150mm thick brick masonry</p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Plastering:</h5>
                                    <p class="psec2c1font mb-1">Inner Walls: 12mm thick with waterproof base coat
                                        (Putty)</p>
                                    <p class="psec2c1font">Outer Walls: 15-20mm thick smooth finish</p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Painting:</h5>
                                    <p class="psec2c1font mb-1">Interior: Acrylic Emulsion with Putty Finish</p>
                                    <p class="psec2c1font">Exterior: Waterproof Acrylic Paint</p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Doors & Windows:</h5>
                                    <p class="psec2c1font mb-1">Entrance Door: Teakwood/Veneer</p>
                                    <p class="psec2c1font mb-1">Internal Doors: Laminated Flush Doors</p>
                                    <p class="psec2c1font mb-1">Toilets: Laminated Doors</p>
                                    <p class="psec2c1font">Windows: UPVC with MS Safety Grills</p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Kitchen:</h5>
                                    <p class="psec2c1font mb-1">Granite counter with stainless steel sink</p>
                                    <p class="psec2c1font mb-1">Glazed ceramic tiles up to lintel level</p>
                                    <p class="psec2c1font">Power points for Fridge, Oven, Chimney, and Water Purifier
                                    </p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Toilets & Plumbing:</h5>
                                    <p class="psec2c1font mb-1">Concealed PVC plumbing</p>
                                    <p class="psec2c1font mb-1">Color ceramic dado tiles up to lintel level</p>
                                    <p class="psec2c1font mb-1">Sanitaryware and Bath Fittings</p>
                                    <p class="psec2c1font">Provision for Geyser and Exhaust</p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Flooring:</h5>
                                    <p class="psec2c1font mb-1">Hall/Dining/Bedroom: Vitrified Tiles</p>
                                    <p class="psec2c1font mb-1">Kitchen, Toilets, Balconies: Anti-skid Tiles</p>
                                    <p class="psec2c1font">Lobby/Staircase: Tiles with Granite Frame for Lift Door</p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Electrical:</h5>
                                    <p class="psec2c1font mb-1">Concealed Copper wiring with ISI standard modular
                                        switches
                                    </p>
                                    <p class="psec2c1font mb-1">Provision for Inverter</p>
                                    <p class="psec2c1font mb-1">AC Points in Hall and Master Bedroom</p>
                                    <p class="psec2c1font">TV Points in Hall and Master Bedroom</p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Lift:</h5>
                                    <p class="psec2c1font">Two 5-passenger high-speed elevators with power backup</p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Parking & Common Areas:</h5>
                                    <p class="psec2c1font mb-1">One dedicated car parking space for each flat</p>
                                    <p class="psec2c1font ">Paver Blocks in Margin Space</p>
                                </div>
                                <div class="">
                                    <h5 class="psec2c1font pb-2 pt-2">Facility:</h5>
                                    <p class="psec2c1font mb-1">CCTV Surveillance for common areas</p>
                                    <p class="psec2c1font ">Rainwater Harvesting</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3">Video</h4>
                            <div class="text-center text-lg-start">
                                <img src="{{asset('assets/frontend/img/krish1.png')}}" width="100%" alt="" class="rounded-2">
                            </div>
                        </div>
                    </div>

                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3"> Typical Floor Plan
                            </h4>
                            <div class=" text-center text-lg-start">
                                <img src="{{asset('assets/frontend/img/krishnaTYPICALFLOOR.png')}}" width="80%" alt="" class="rounded-2">
                                <!-- <img src="assets/frontend/img/floor13bhk1.webp" width="80%" alt="" class="">     -->
                            </div>
                        </div>
                    </div>
                    <div class="p-4 psec2bordeS   rounded-2 mt-5">
                        <div class="">
                            <h4 class="psec2c1h pb-3"> Ground Floor Plan </h4>
                            <div class=" text-center text-lg-start">
                                <img src="{{asset('assets/frontend/img/krishnaGroundflool.png')}}" width="80%" alt="" class="rounded-2">
                                <!-- <img src="assets/frontend/img/Ground0.png" width="80%" alt="" class="pt-4">
                                <img src="assets/frontend/img/Ground1.png" width="80%" alt="" class="pt-4"> -->
                            </div>
                        </div>
                    </div>
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

                        <div class="owl-carousel  powl-carousel owl-theme">
                            <div class="item">
                                <div class="">
                                    <div class="card p-3  h-100">
                                        <img src="{{asset('assets/frontend/img/LOTUSimg1.png')}}" class="card-img-top rounded-3" alt="...">
                                        <div class="card-body pb-0 px-0">
                                            <h4>Vrindavan Gardens</h4>
                                            <!-- <h5 class="card-title psec2c2h">₹50.66L - 53.03 L</h5> -->
                                            <p class="card-text  psec2c2p"> </p>
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
