{{-- <div class="container-fluid px-0 mx-0 topbar"> --}}
<nav class="navbar navbar-expand-lg ds1col1bgc w-100 py-3 py-sm-1 ">

    <!-- Logo -->
    <div class="d-flex align-items-center topbar col-xl-2 col-md-3 col-sm-5 pl-4 logoImgHide" href="">
        <img class="logoimg" src="{{ asset('assets/frontend/img/logo.webp') }}" href="#" width="80%"
            class=" ps-xl-5" alt="">
    </div>

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-outline-light ds1c2btnbg mr-3 border-0">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Alerts -->
        {{-- <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle ds1col1bgc">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-600">December 12, 2019</div>
                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle  ds1col1bgc">
                                <i class="fas fa-donate text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-600">December 7, 2019</div>
                            <span class="font-weight-bold">$290.29 has been deposited into your account!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle ds1col1bgc">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-600">December 2, 2019</div>
                            <span class="font-weight-bold">Spending Alert: We've noticed unusually high spending for your account.</span>
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li> --}}

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow pr-4">

            <a class="nav-link dropdown-toggle nav_a text-decoration-none  active position-relative navhtext   ds1Nicon  "
                aria-current="page" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('assets/frontend/img/User.svg') }}" alt="">
            </a>

            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in mt-2" aria-labelledby="userDropdown">
                <a class="dropdown-item nohover" href="#">
                    <div class="d-flex">
                        <div class="pt-1 pr-2">
                            <img src="{{ asset('assets/frontend/img/User.svg') }}"
                                class="nav_a text-decoration-none active position-relative navhtext ds1Nicon"
                                alt="">
                        </div>
                        <div class="dc2div">
                            <h5 class="mb-0">{{ Auth::user()->name }}</h5> <!-- Display logged-in user's name -->
                            <p>{{ Auth::user()->email }}</p> <!-- Display logged-in user's email -->
                        </div>
                    </div>
                </a>
                <a class="dropdown-item dc2hover py-2 my-1 ps-4 mb-0" href="{{route('profile.show')}}">
                    <span class="" style="font-weight: 600">Profile</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="dropdown-item dc2hover py-2 my-1 ps-4 mb-0" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="" style="font-weight: 600">Logout</span>
                    </a>
                </form>
            </div>

        </li>

    </ul>

</nav>
{{-- </div> --}}
