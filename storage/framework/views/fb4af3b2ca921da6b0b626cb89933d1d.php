<?php $__env->startSection('content'); ?>
    <div id="content" class="p-4">

        <!-- Dashboard Header -->
        <h1 class="ds1col1texth1">Add Employee</h1>

        <?php echo $__env->make('auth.success-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('auth.error-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Back Button -->
        <div class="text-right">
            <button style="background-color: #c8a864" type="button" class="btn btn-sm rounded-3 px-3 text-white"
                onclick="history.back()">
                <i class="fas fa-arrow-left text-white"></i> Back to previous
            </button>
        </div>
        <form action="<?php echo e(route('employees.update', $user->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="name" class="form-label dpage5label">Name:</label>
                            <input type="text" name="name" id="name" class="form-control dpage5input"
                                value="<?php echo e($user->name); ?>" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="email" class="form-label dpage5label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control dpage5input"
                                value="<?php echo e($user->email); ?>" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="mobile" class="form-label dpage5label">Mobile:</label>
                            <input type="text" name="mobile" id="mobile" class="form-control dpage5input"
                                value="<?php echo e($user->mobile); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">

                        <div class="form-group">
                            <label for="department" class="form-label dpage5label">Department:</label>
                            <input type="text" name="department" id="department" class="form-control dpage5input"
                                value="<?php echo e($user->department); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="team" class="form-label dpage5label">Team:</label>
                            <input type="text" name="team" id="team" class="form-control dpage5input"
                                value="<?php echo e($user->team); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="role_id" class="form-label dpage5label">Role:</label>
                            <select name="role_id" id="role_id" class="form-control dpage5input">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->id); ?>" <?php echo e($user->role_id == $role->id ? 'selected' : ''); ?>>
                                        <?php echo e($role->role_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn px-5 py-1 mt-3 rounded-3 page3btnbgc text-decoration-none active">
                Update
            </button>
        </form>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/employee/edit.blade.php ENDPATH**/ ?>