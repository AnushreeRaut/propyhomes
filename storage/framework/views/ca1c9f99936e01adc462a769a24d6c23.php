<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo $__env->yieldContent('meta_tags'); ?>

    <title>PropyHome Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('assets/dashboard/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('assets/dashboard/css/sb-admin-2.min.css')); ?>" rel="stylesheet">
    
    <link href="<?php echo e(asset('assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet"
        type="text/css">

    <!-- ====== CSS ===== -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/sb-admin-2.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/sb-admin-2.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/style.css')); ?>" rel="stylesheet" type="text/css">

    <!-- ====== CSS-MQ ===== -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/styleMQ.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/frontend/img/logo.png')); ?>" type="image/x-icon">

    <?php echo $__env->yieldContent('links'); ?>
    <script src="https://kit.fontawesome.com/45d3a51d7c.js" crossorigin="anonymous"></script>

    

    <style>
        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }

        .plusbtn {
            width: 28px;
            height: 28px;
            background: #C8A864;
            border-radius: 50%;
        }
    </style>

<!-- Bootstrap JS (for dropdowns and other components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body id="page-top">
    <!-- Topbar -->
    <?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End of Topbar -->

    <!-- Page Wrapper -->
    <div id="wrapper" class="ds1col1bgc">

        <!-- Sidebar -->
        <ul class="navbar-nav ds1col1bgc sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Nav-Head Item - Dashboard -->
            <li class="nav-item active">
                <?php echo $__env->yieldContent('sidebar_head'); ?>
            </li>
            <!-- End of Nav-Head Item - Dashboard -->
            <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column ds1col2bgc ">
            <!-- Main Content -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->


    </div>
    <!-- End of Page Wrapper -->

    <!-- Footer -->
    <!-- End of Footer -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('assets/dashboard/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?> "></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js')); ?> "></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('assets/dashboard/js/sb-admin-2.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/dashboard/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/dashboard/js/demo/datatables-demo.js')); ?>"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/layout/layout.blade.php ENDPATH**/ ?>