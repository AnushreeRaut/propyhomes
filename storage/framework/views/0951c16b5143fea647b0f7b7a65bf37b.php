<?php $__env->startSection('content'); ?>

<div id="content" class="p-4">
    <?php echo $__env->make('auth.success-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('auth.error-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Dashboard Header -->
    <h1 class="ds1col1texth1">Employees</h1>


             <!-- DataTales Example -->
             <div class="card shadow mb-4">
                <div class="text-right mb-4">
                    <div class="btn px-4 mt-3 py-1 mr-4 rounded-3 page3btnbgc"><a href="<?php echo e(route('employees.create')); ?>" class="page3btnc  text-decoration-none  active">Add Employee</a></div></div>
                <div class="card-body">
                    <div class="">
                        <table class="table dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;" class="border-0">
                            <thead style="background-color: #c8a86433 !important;">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No.</th>
                                    <th>Department</th>
                                    <th>Team</th>
                                    <th>Actions</th> <!-- Optional actions like edit/delete -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($employee->name); ?></td>
                                        <td><?php echo e($employee->email); ?></td>
                                        <td><?php echo e($employee->mobile); ?></td>
                                        <td><?php echo e($employee->department); ?></td>
                                        <td><?php echo e($employee->team); ?></td>
                                        <td>
                                            <div class="text-center">
                                                <!-- Dropdown button -->
                                                <div class="dropdown">
                                                    <button class="text-info border-0 bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton<?php echo e($employee->id); ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton<?php echo e($employee->id); ?>">
                                                        <!-- View Button -->
                                                        <li>
                                                            <a class="dropdown-item text-success" href="<?php echo e(url('employees/' . $employee->id)); ?>">
                                                                <i class="fa-solid fa-eye"></i> View
                                                            </a>
                                                        </li>

                                                        <!-- Edit Button -->
                                                        <li>
                                                            <a class="dropdown-item text-primary" href="<?php echo e(url('employees/' . $employee->id . '/edit')); ?>">
                                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                                            </a>
                                                        </li>

                                                        <!-- Delete Button -->
                                                        <li>
                                                            <form action="<?php echo e(url('employees/' . $employee->id)); ?>" method="POST" style="display:inline;">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <button class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this employee?');">
                                                                    <i class="fa-solid fa-trash"></i> Delete
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
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
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/employee/index.blade.php ENDPATH**/ ?>