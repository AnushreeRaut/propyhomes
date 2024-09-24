@extends('admin.layout.layout')

{{-- @section('sidebar_head')
    <a class="nav-link" href="{{ asset('/Dashboard')}}">
        <i class="fas fa-fw fa-trophy"></i> <span>Dashboard</span>
    </a>
@endsection --}}

@section('content')

<div id="content" class="p-4">
    <!-- Begin Page Content -->
    {{-- <div class="container-fluid p-4 ds1col2bgc c2hvh">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Enquiries Card Example -->
            <div class="col-xl-3 col-md-6 col-sm-12 mb-4">
                <div class="card border-left-colr2 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-colr3 text-uppercase mb-1">Enquiries</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">11</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-phone fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-sm-12 mb-2"></div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-12 mb-4">
                <div class="card border-left-colr2 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-colr3 text-uppercase mb-1">Registered Interns</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">11</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-people-group fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-12 mb-4">
                <div class="card border-left-colr3 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-colr3 text-uppercase mb-1">Programs Offered</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">11</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-book-open-reader fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-12 mb-4">
                <div class="card border-left-colr3 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-colr3 text-uppercase mb-1">Placements</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">11</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-user-tie fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-12 mb-4">
                <div class="card border-left-colr2 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold textcolr3-warning text-uppercase mb-1">Positive Feedbacks</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">11</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-star fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

    </div> --}}

    <!-- Dashboard Header -->
    <h1 class="ds1col1texth1">Dashboard</h1>

    <!-- First Row of Cards -->
    <div class="row mb-4">
        <div class="col-lg-3">
            <div class="h-100">
                <div class="d-flex ds1col2Color p-2 rounded-2 h-100">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/frontend/img/dashbordHome.png') }}" width="50%" alt="Dashboard Home">
                    </div>
                    <div class="pt-2">
                        <h3 class="mb-0 ds1texth3 text-white">250</h3>
                        <p class="ds1texthp text-white">Available Property</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="h-100">
                <div class="d-flex ds1col2Color1 p-2 rounded-2 h-100">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/frontend/img/dashbordHome.png') }}" width="50%" alt="Dashboard Home">
                    </div>
                    <div class="pt-2">
                        <h3 class="mb-0 ds1texth3 text-white">250</h3>
                        <p class="ds1texthp text-white">Property For Rent</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="h-100">
                <div class="d-flex ds1col2Color2 p-2 rounded-2 h-100">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/frontend/img/dashbordHome.png') }}" width="50%" alt="Dashboard Home">
                    </div>
                    <div class="pt-2">
                        <h3 class="mb-0 ds1texth3 text-white">250</h3>
                        <p class="ds1texthp text-white">Property For Sale</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="h-100">
                <div class="d-flex ds1col2Color3 p-2 rounded-2 h-100">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/frontend/img/dashbordHome.png') }}" width="50%" alt="Dashboard Home">
                    </div>
                    <div class="pt-2">
                        <h3 class="mb-0 ds1texth3 text-white">₹ 250</h3>
                        <p class="ds1texthp text-white">Total Earning</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row: Profile Overview & Notifications -->
    <div class="row">
        <div class="col-lg-6 h-100">
            <div class="ds1col2div rounded-2 p-4">
                <h4 class="ds1col2texth4">Profile Overview</h4>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex rounded-2">
                            <div class="pr-3 pt-3">
                                <img src="{{ asset('assets/frontend/img/dashbordhouse.png') }}" class="ds1img" alt="Dashboard House">
                            </div>
                            <div class="pt-2">
                                <h3 class="mb-0 ds1div2texth3">₹ 250</h3>
                                <p class="ds1div2texthp">Total Earning</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="d-flex rounded-2">
                            <div class="pr-3 pt-3">
                                <img src="{{ asset('assets/frontend/img/dashbordmassage.png') }}" class="ds1img" alt="Dashboard Messages">
                            </div>
                            <div class="pt-2">
                                <h3 class="mb-0 ds1div2texth3">₹ 250</h3>
                                <p class="ds1div2texthp">Total Public Comments</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="d-flex rounded-2">
                            <div class="pr-3 pt-3">
                                <img src="{{ asset('assets/frontend/img/dashbordhomeeye.png') }}" class="ds1img" alt="Dashboard Home Eye">
                            </div>
                            <div class="pt-2">
                                <h3 class="mb-0 ds1div2texth3">₹ 250</h3>
                                <p class="ds1div2texthp">Property Views</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="d-flex rounded-2">
                            <div class="pr-3 pt-3">
                                <img src="{{ asset('assets/frontend/img/dashbordflag.png') }}" class="ds1img" alt="Dashboard Flag">
                            </div>
                            <div class="pt-2">
                                <h3 class="mb-0 ds1div2texth3">₹ 250</h3>
                                <p class="ds1div2texthp">Bookmarked Property</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notifications Section -->
            <div class="ds1col2div rounded-2 p-4 my-4">
                <h4 class="ds1col2texth4">Recent Notifications</h4>

                <ul class="dpyit-yesimg mb-1">
                    <li><a href="#" class="text-decoration-none ds1div2texthp">Dec 27th, 10:12 am - Get new message from customer.</a></li>
                    <li><a href="#" class="text-decoration-none ds1div2texthp">Dec 21th, 09:12 pm - New property approved for Rent.</a></li>
                    <li><a href="#" class="text-decoration-none ds1div2texthp">Dec 18th, 12:12 pm - Booking request for Nirala Appartment.</a></li>
                    <li><a href="#" class="text-decoration-none ds1div2texthp">Dec 15th, 05:45 pm - Payment received from customer invoice no 2319891.</a></li>
                    <li><a href="#" class="text-decoration-none ds1div2texthp">Dec 15th, 03:32 pm - Comment reply by admin on Apolo Family Appartment.</a></li>
                </ul>
            </div>
        </div>

        <!-- Graph Section -->
        <div class="col-lg-6">
            <div class="ds1col2div rounded-2 p-4 h-100">
                <h4 class="ds1col2texth4 pb-3">Earnings Overview</h4>

                <div class="row">
                    <div class="col-lg-4">
                        <select class="form-select form-control ds1col2texts">
                            <option selected>Yearly</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-lg-4">
                        <select class="form-select form-control ds1col2texts">
                            <option selected>Monthly</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-lg-4">
                        <button type="button" class="btn text-white w-100 ds1div2texthp ds1col2btnc">Go</button>
                    </div>
                </div>

                <div class="pt-4">
                    <img src="{{ asset('assets/frontend/img/graph.png') }}" width="100%" alt="Graph Overview">
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->


</div>

@endsection
