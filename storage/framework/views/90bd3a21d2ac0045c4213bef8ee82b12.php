<?php $__env->startSection('content'); ?>
    <div id="content" class="p-4">
        <!-- Dashboard Header -->
        <h1 class="ds1col1texth1">Add Reference</h1>
          <!-- Back Button -->
          <div class="text-right">
            <button style="background-color: #c8a864" type="button" class="btn btn-sm rounded-3 px-3 text-white" onclick="history.back()">
                <i class="fas fa-arrow-left text-white"></i> Back to previous
            </button>
        </div>
        
        <?php echo $__env->make('auth.success-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->make('auth.error-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('references.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <label for="name" class="form-label dpage5label">Name</label>
                        <input type="text" class="form-control dpage5input" id="name" name="name"
                            placeholder="Enter here..." value="<?php echo e(old('name')); ?>" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <label for="mobile" class="form-label dpage5label">Mobile Number</label>
                        <input type="text" class="form-control dpage5input" id="mobile" name="mobile"
                            placeholder="Enter here..." value="<?php echo e(old('mobile')); ?>" required>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="form-check pr-5">
                    <input class="form-check-input page14checkbox" type="checkbox" name="real_estate" value="1"
                        id="realEstate" onchange="toggleDropdowns()">
                    <label class="form-check-label" for="realEstate">
                        Real Estate
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input page14checkbox" type="checkbox" name="loan" value="1"
                        id="loan" onchange="toggleDropdowns()">
                    <label class="form-check-label" for="loan">
                        Loan
                    </label>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 mb-4">
                    <!-- Real Estate Type Dropdown -->
                    <div class="form-group" id="realEstateDropdown" style="display:none;">
                        <label for="real_estate_type">Real Estate Type</label>
                        <select name="real_estate_type" id="real_estate_type" class="form-control">
                            <option value="">Select Real Estate Type</option>
                            <option value="buy">Buy</option>
                            <option value="sell">Sell</option>
                            <option value="rent">Rent</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <!-- Loan Type Dropdown -->
                    <div class="form-group" id="loanDropdown" style="display:none;">
                        <label for="loan_type">Loan Type</label>
                        <select name="loan_type" id="loan_type" class="form-control">
                            <option value="">Select Loan Type</option>
                            <option value="housing loan">Housing Loan</option>
                            <option value="personal loan">Personal Loan</option>
                            <option value="loan for business">Loan for Business</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="mb-4">

                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comments</label>
                <textarea class="form-control dpage5input" id="comment" name="comment" rows="3"></textarea>
            </div>
            <button class="btn px-4 mt-3 me-3 py-1 rounded-3 page3btnbgc" type="submit">
                Submit
            </button>
        </form>
        <!-- JavaScript -->
        <script>
            function toggleDropdowns() {
                const realEstateCheckbox = document.getElementById('realEstate');
                const loanCheckbox = document.getElementById('loan');
                const realEstateDropdown = document.getElementById('realEstateDropdown');
                const loanDropdown = document.getElementById('loanDropdown');
                // Show or hide the Real Estate dropdown
                if (realEstateCheckbox.checked) {
                    realEstateDropdown.style.display = 'block';
                } else {
                    realEstateDropdown.style.display = 'none';
                }
                // Show or hide the Loan dropdown
                if (loanCheckbox.checked) {
                    loanDropdown.style.display = 'block';
                } else {
                    loanDropdown.style.display = 'none';
                }
            }
        </script>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/reference/create.blade.php ENDPATH**/ ?>