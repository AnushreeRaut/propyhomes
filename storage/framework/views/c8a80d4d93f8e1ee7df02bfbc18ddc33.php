<?php $__env->startSection('content'); ?>
<div id="content" class="p-4">
    <?php echo $__env->make('auth.success-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('auth.error-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page Header -->
    <h1 class="ds1col1texth1">Subscriptions</h1>

    <!-- Subscription List -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="">
                <table class="table dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" style="width: 100%;" class="border-0">
                    <thead style="background-color: #c8a86433 !important;">
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($subscription->email); ?></td>
                                <td>
                                    <div class="text-center">
                                        <!-- Delete Button -->
                                        <form action="<?php echo e(route('subscriptions.destroy', $subscription->id)); ?>" method="POST" style="display:inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this subscription?');">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS for alert functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/subscribe/index.blade.php ENDPATH**/ ?>