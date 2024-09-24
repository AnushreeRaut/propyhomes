
    <nav class="navbar navbar-expand-lg ds1col1bgc w-100 py-3 py-sm-1 ">

        <!-- Logo -->
        <div class="d-flex align-items-center topbar col-xl-2 col-md-3 col-sm-5 pl-4 logoImgHide" href="">
            <img class="logoimg" src="<?php echo e(asset('assets/frontend/img/logo.webp')); ?>" href="#"  width="80%" class=" ps-xl-5" alt="">
        </div>

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-outline-light ds1c2btnbg mr-3 border-0">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Alerts -->
            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow pr-4">

                <a class="nav-link dropdown-toggle nav_a text-decoration-none  active position-relative navhtext   ds1Nicon  " aria-current="page" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo e(asset('assets/frontend/img/User.svg')); ?>" alt="">
                </a>

                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in mt-2" aria-labelledby="userDropdown">
                    <a class="dropdown-item nohover" href="#">
                        
                        <div class="d-flex">
                            <div class=" pt-1 pr-2">
                                
                                    <img src="<?php echo e(asset('assets/frontend/img/User.svg')); ?>" class="nav_a text-decoration-none  active position-relative navhtext ds1Nicon" alt="">
                                
                            </div>
                            <div class="dc2div">
                                <h5 class="mb-0 ">Rupesh Wankhede</h5>
                                <p>rupesh.123@gmail.com</p>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item dc2hover py-2 my-1 ps-4 mb-0" href="#">
                        <span class="" style="font-weight: 600">Profile</span>
                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <a class="dropdown-item dc2hover py-2 my-1 ps-4 mb-0" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="" style="font-weight: 600">Logout</span>
                        </a>
                    </form>
                </div>
            </li>

        </ul>

    </nav>

<?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/layout/nav.blade.php ENDPATH**/ ?>