<?php $__env->startSection('content'); ?>
    <div id="content" class="p-4">
        <?php echo $__env->make('auth.success-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('auth.error-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page Header -->
        <h1 class="ds1col1texth1">Call Back Request</h1>

        <!-- Subscription List -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="">

                    <table class="table dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" style="width: 100%;" class="border-0">
                        <thead style="background-color: #c8a86433 !important;">
                            <tr>
                                <th>#</th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $phoneRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td>
                                        <a href="tel:<?php echo e($request->phone_number); ?>" style="text-decoration: none; color: inherit;">
                                            <?php echo e($request->phone_number); ?>

                                        </a>
                                    </td>
                                    <td class="d-flex align-items-center">
                                        <!-- Telephone link to initiate a call -->
                                        <a href="tel:<?php echo e($request->phone_number); ?>" class="btn btn-success btn-sm me-2" title="Call">
                                            <i class="fas fa-phone-alt"></i>
                                        </a>
                                        <form action="<?php echo e(route('phone_requests.destroy', $request->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this request?');">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="ml-3 btn btn-danger btn-sm" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <!-- Ensure to include Font Awesome CDN in your head if not already included -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS for alert functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/phonerequest/index.blade.php ENDPATH**/ ?>