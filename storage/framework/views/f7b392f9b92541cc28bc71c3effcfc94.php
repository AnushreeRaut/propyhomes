<?php $__env->startSection('content'); ?>
<div id="content" class="p-4">
<div class="text-right mt-3">
    <button style="background-color: #c8a864" type="button" class="btn btn-sm rounded-3 px-3 text-white"
        onclick="history.back()">
        <i class="fas fa-arrow-left text-white"></i> Back to previous
    </button>
</div>
<div class="container mt-5" style="background: #C8A864; padding: 20px; border-radius: 10px;">
    <h2 class="text-center text-white mb-4"><?php echo e($customer->name); ?>'s Details</h2>

    <div class="card mb-4" style="border: 2px solid #fff; border-radius: 10px;">
        <div class="card-body">
            <h5 class="card-title">Customer Information</h5>
            <p><strong>Mobile:</strong> <?php echo e($customer->mobile); ?></p>
            <p><strong>Email:</strong> <?php echo e($customer->email); ?></p>
            <p><strong>Organization:</strong> <?php echo e($customer->name_of_organization); ?></p>
            <p><strong>Job Profile:</strong> <?php echo e($customer->job_profile); ?></p>
            <p><strong>Income Slab:</strong> <?php echo e($customer->income_slab); ?></p>
            <p><strong>Nature of Business:</strong> <?php echo e($customer->nature_of_business); ?></p>
            <p><strong>Turnover:</strong> <?php echo e($customer->turnover); ?></p>
        </div>
    </div>

    <div class="card mb-4" style="border: 2px solid #fff; border-radius: 10px;">
        <div class="card-body">
            <h5 class="card-title">Family Details</h5>
            <?php if($customer->family->isEmpty()): ?>
                <p>No family details found.</p>
            <?php else: ?>
                <ul>
                    <?php $__currentLoopData = $customer->family; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($member->relation); ?>: <?php echo e($member->name); ?> (DOB: <?php echo e($member->DOB); ?>)</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <div class="card mb-4" style="border: 2px solid #fff; border-radius: 10px;">
        <div class="card-body">
            <h5 class="card-title">Loans</h5>
            <?php if($customer->loans->isEmpty()): ?>
                <p>No loans found.</p>
            <?php else: ?>
                <ul>
                    <?php $__currentLoopData = $customer->loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($loan->loan_type); ?> from <?php echo e($loan->type_of_bank); ?> - Amount: <?php echo e($loan->loan_amount); ?> (EMI: <?php echo e($loan->EMI); ?>)</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <div class="card mb-4" style="border: 2px solid #fff; border-radius: 10px;">
        <div class="card-body">
            <h5 class="card-title">Investments</h5>
            <?php if($customer->investments->isEmpty()): ?>
                <p>No investments found.</p>
            <?php else: ?>
                <ul>
                    <?php $__currentLoopData = $customer->investments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($investment->type_of_investment); ?> with <?php echo e($investment->financial_institute_name); ?> - <?php echo e($investment->investments); ?> (Start: <?php echo e($investment->start_date); ?> - End: <?php echo e($investment->end_date); ?>)</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <div class="card mb-4" style="border: 2px solid #fff; border-radius: 10px;">
        <div class="card-body">
            <h5 class="card-title">Insurances</h5>
            <?php if($customer->insurances->isEmpty()): ?>
                <p>No insurances found.</p>
            <?php else: ?>
                <ul>
                    <?php $__currentLoopData = $customer->insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($insurance->type_of_policy); ?> from <?php echo e($insurance->type_of_insurance_company); ?> - Premium: <?php echo e($insurance->premium); ?> (Policy Duration: <?php echo e($insurance->policy_start_date); ?> to <?php echo e($insurance->policy_end_date); ?>)</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/customer/view.blade.php ENDPATH**/ ?>