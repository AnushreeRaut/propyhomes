<?php $__env->startSection('content'); ?>
    <div id="content" class="p-4">

        <!-- Dashboard Header -->
        <h1 class="ds1col1texth1">Add Employee</h1>

        <?php echo $__env->make('auth.success-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('auth.error-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Back Button -->
        <div class="text-right">
            <button style="background-color: #c8a864" type="button" class="btn btn-sm rounded-3 px-3 text-white" onclick="history.back()">
                <i class="fas fa-arrow-left text-white"></i> Back to previous
            </button>
        </div>
        <form action="<?php echo e(route('employees.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="name" class="form-label dpage5label">Name</label>
                            <input type="text" name="name" id="name" class="form-control dpage5input"
                                placeholder="Enter here..." required>
                            <div class="error-message" id="nameError" style="color: red;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="email" class="form-label dpage5label">Email</label>
                            <input type="email" name="email" id="email" class="form-control dpage5input" required>
                            <div class="error-message" id="emailError" style="color: red;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="password" class="form-label dpage5label">Password</label>
                            <input type="password" name="password" id="password" class="form-control dpage5input" required>
                            <div class="error-message" id="passwordError" style="color: red;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="mobile" class="form-label dpage5label">Mobile</label>
                            <input type="text" name="mobile" id="mobile" class="form-control dpage5input">
                            <div class="error-message" id="mobileError" style="color: red;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="department" class="form-label dpage5label">Department</label>
                        <input type="text" name="department" id="department" class="form-control dpage5input">
                        <div class="error-message" id="departmentError" style="color: red;"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="team" class="form-label dpage5label">Team</label>
                        <input type="text" name="team" id="team" class="form-control dpage5input">
                        <div class="error-message" id="teamError" style="color: red;"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="role_id" class="form-label dpage5label">Role</label>
                        <select name="role_id" id="role_id" class="form-control dpage5input">
                            <option value="">Select Role</option>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($role->id); ?>"><?php echo e($role->role_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="error-message" id="roleError" style="color: red;"></div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn px-5 py-1 mt-3 rounded-3 page3btnbgc text-decoration-none active">
                Submit
            </button>
        </form>


    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const mobileInput = document.getElementById('mobile');
            const departmentInput = document.getElementById('department');
            const teamInput = document.getElementById('team');
            const roleSelect = document.getElementById('role_id');

            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            const mobileError = document.getElementById('mobileError');
            const departmentError = document.getElementById('departmentError');
            const teamError = document.getElementById('teamError');
            const roleError = document.getElementById('roleError');

            // Real-time validation for the name field
            nameInput.addEventListener('input', function () {
                const namePattern = /^[a-zA-Z\s]*$/; // Only letters and spaces
                if (!namePattern.test(nameInput.value)) {
                    nameError.textContent = 'Please enter a valid name (letters and spaces only).';
                } else {
                    nameError.textContent = '';
                }
            });

            // Real-time validation for the email field
            emailInput.addEventListener('input', function () {
                if (!emailInput.validity.valid) {
                    emailError.textContent = 'Please enter a valid email address.';
                } else {
                    emailError.textContent = '';
                }
            });

            // Real-time validation for the password field
            passwordInput.addEventListener('input', function () {
                if (passwordInput.value.length < 6) {
                    passwordError.textContent = 'Password must be at least 6 characters long.';
                } else {
                    passwordError.textContent = '';
                }
            });

            // Real-time validation for the mobile field
            mobileInput.addEventListener('input', function () {
                const mobilePattern = /^[0-9]*$/; // Only numbers
                if (!mobilePattern.test(mobileInput.value)) {
                    mobileError.textContent = 'Please enter a valid mobile number (digits only).';
                } else {
                    mobileError.textContent = '';
                }
            });

            // Real-time validation for the department field
            departmentInput.addEventListener('input', function () {
                if (departmentInput.value.trim() === '') {
                    departmentError.textContent = 'Department is required.';
                } else {
                    departmentError.textContent = '';
                }
            });

            // Real-time validation for the team field
            teamInput.addEventListener('input', function () {
                if (teamInput.value.trim() === '') {
                    teamError.textContent = 'Team is required.';
                } else {
                    teamError.textContent = '';
                }
            });

            // Real-time validation for the role field
            roleSelect.addEventListener('change', function () {
                if (roleSelect.value === '') {
                    roleError.textContent = 'Please select a role.';
                } else {
                    roleError.textContent = '';
                }
            });
        });
        </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/employee/create.blade.php ENDPATH**/ ?>