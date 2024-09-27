<!-- Nav Item - Dashboard -->
<li class="nav-item">
        <a class="nav-link ds1col1SB w-100" href="<?php echo e(route('dashboard')); ?>">
            <img src="<?php echo e(asset('assets/frontend/img/Dashboard.svg')); ?>" alt="">
            <span style="font-weight: 600;color: white;">Dashboard</span>
        </a>
</li>

<!-- Nav Item - Subscriptions -->
<li class="nav-item">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_phone')): ?>
        <a class="nav-link ds1col1SB w-100" href="<?php echo e(route('subscriptions.index')); ?>">
            <img src="<?php echo e(asset('assets/frontend/img/DashboardReference.svg')); ?>" alt="">
            <span style="font-weight: 600;color: white;">Subscriptions</span>
        </a>
    <?php endif; ?>
</li>

<!-- Nav Item - Speed Dials -->
<li class="nav-item">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_phone')): ?>
        <a class="nav-link ds1col1SB w-100" href="<?php echo e(route('phone_requests.index')); ?>">
            <img src="<?php echo e(asset('assets/frontend/img/DashboardCustomer.svg')); ?>" alt="">
            <span style="font-weight: 600;color: white;">Callback Requests</span>
        </a>
    <?php endif; ?>
</li>

<!-- Nav Item - Project Collapse Menu -->
<li class="nav-item">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_projects')): ?>
        <a class="nav-link collapsed ds1col1SB w-100" href="#" data-toggle="collapse" data-target="#collapseProject" aria-expanded="true" aria-controls="collapseProject">
            <img src="<?php echo e(asset('assets/frontend/img/DashboardReference.svg')); ?>" alt="">
            <span style="font-weight: 600;color: white;">Project Management</span>
        </a>
        <div id="collapseProject" class="collapse ds1col1bgc" aria-labelledby="headingProject" data-parent="#accordionSidebar">
            <div class="textcolr2 py-2 collapse-inner rounded">
                <a class="collapse-item text-white" href="<?php echo e(route('projects.index')); ?>">Projects</a>
                <a class="collapse-item text-white" href="<?php echo e(route('projects.create')); ?>">Add Project</a>
            </div>
        </div>
    <?php endif; ?>
</li>

<!-- Nav Item - Employee Collapse Menu -->
<li class="nav-item">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_employee')): ?>
        <a class="nav-link collapsed ds1col1SB w-100" href="#" data-toggle="collapse" data-target="#collapseEmployee" aria-expanded="true" aria-controls="collapseEmployee">
            <img src="<?php echo e(asset('assets/frontend/img/dashbordEmployee.svg')); ?>" alt="">
            <span style="font-weight: 600;color: white;">Employee Management</span>
        </a>
        <div id="collapseEmployee" class="collapse ds1col1bgc" aria-labelledby="headingEmployee" data-parent="#accordionSidebar">
            <div class="textcolr2 py-2 collapse-inner rounded">
                <a class="collapse-item text-white" href="<?php echo e(route('employees.index')); ?>">Employee</a>
                <a class="collapse-item text-white" href="<?php echo e(route('employees.create')); ?>">Add Employee</a>
            </div>
        </div>
    <?php endif; ?>
</li>

<!-- Nav Item - Customer Collapse Menu -->
<li class="nav-item">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_customer')): ?>
        <a class="nav-link collapsed ds1col1SB w-100" href="#" data-toggle="collapse" data-target="#collapseCustomer" aria-expanded="true" aria-controls="collapseCustomer">
            <img src="<?php echo e(asset('assets/frontend/img/DashboardCustomer.svg')); ?>" alt="">
            <span style="font-weight: 600;color: white;">Customer Management</span>
        </a>
        <div id="collapseCustomer" class="collapse ds1col1bgc" aria-labelledby="headingCustomer" data-parent="#accordionSidebar">
            <div class="textcolr2 py-2 collapse-inner rounded">
                <a class="collapse-item text-white" href="<?php echo e(route('customers.index')); ?>">Customers</a>
                <a class="collapse-item text-white" href="<?php echo e(route('customers.create')); ?>">Add Customer</a>
            </div>
        </div>
    <?php endif; ?>
</li>

<!-- Nav Item - Reference Collapse Menu -->
<li class="nav-item">
        <a class="nav-link collapsed ds1col1SB w-100" href="#" data-toggle="collapse" data-target="#collapseReference" aria-expanded="true" aria-controls="collapseReference">
            <img src="<?php echo e(asset('assets/frontend/img/DashboardReference.svg')); ?>" alt="">
            <span style="font-weight: 600;color: white;">Reference</span>
        </a>
        <div id="collapseReference" class="collapse ds1col1bgc" aria-labelledby="headingReference" data-parent="#accordionSidebar">
            <div class="textcolr2 py-2 collapse-inner rounded">
                <a class="collapse-item text-white" href="<?php echo e(route('references.index')); ?>">References</a>
                <a class="collapse-item text-white" href="<?php echo e(route('references.create')); ?>">Add Reference</a>
            </div>
        </div>
</li>

<!-- Divider -->
<?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>