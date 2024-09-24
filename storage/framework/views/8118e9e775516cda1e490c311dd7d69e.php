<?php $__env->startSection('content'); ?>
    <div id="content" class="p-4">
        <!-- Dashboard Header -->
        <h1 class="ds1col1texth1">Add Reference</h1>
        <!-- Back Button -->
        <div class="text-right">
            <button style="background-color: #c8a864" type="button" class="btn btn-sm rounded-3 px-3 text-white"
                onclick="history.back()">
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
        <div class="container">
            <ul class="nav nav-tabs" id="projectTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="project-tab" data-toggle="tab" href="#project" role="tab">Project
                        Details</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="property-tab" data-toggle="tab" href="#property" role="tab">Property
                        Details</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="unit-tab" data-toggle="tab" href="#unit" role="tab">Property Units</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="outdoor-tab" data-toggle="tab" href="#outdoor" role="tab">Outdoor
                        Features</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="images-tab" data-toggle="tab" href="#images" role="tab">Project Images</a>
                </li>
            </ul>
            <form id="projectForm" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="tab-content" id="myTabContent">
                    <!-- Project Tab -->
                    <div class="tab-pane fade show active" id="project" role="tabpanel">
                        <div class="row">
                            <!-- Cover Image -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="cover_image">Cover Image</label>
                                <input type="file" class="form-control" name="cover_image" id="cover_image"
                                    accept="image/*">
                            </div>

                            <!-- Location -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" name="location" id="location">
                            </div>

                            <!-- Address -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address">
                            </div>

                            <!-- Title -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <!-- Banner Image -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="banner_image">Banner Image</label>
                                <input type="file" class="form-control" name="banner_image" id="banner_image"
                                    accept="image/*">
                            </div>

                            <!-- Video -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="video">Video URL</label>
                                <input type="text" class="form-control" name="video" id="video">
                            </div>

                            <!-- Floor Plan Image -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="floor_plan_image">Floor Plan Image</label>
                                <input type="file" class="form-control" name="floor_plan_image" id="floor_plan_image"
                                    accept="image/*">
                            </div>

                            <!-- Description -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            </div>

                            <!-- Price Range Start -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="price_range_start">Price Range Start</label>
                                <input type="number" step="0.01" class="form-control" name="price_range_start"
                                    id="price_range_start">
                            </div>

                            <!-- Price Range End -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="price_range_end">Price Range End</label>
                                <input type="number" step="0.01" class="form-control" name="price_range_end"
                                    id="price_range_end">
                            </div>

                            <!-- Google Link -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="google_link">Google Map Link</label>
                                <input type="url" class="form-control" name="google_link" id="google_link">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary save-next" data-next-tab="#property-tab">Save & Next</button>
                    </div>

                    <!-- Property Details Tab -->
                    <div class="tab-pane fade" id="property" role="tabpanel">
                        <div class="row">
                            <!-- Title -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <!-- Value -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="value">Value</label>
                                <input type="number" class="form-control" name="value" id="value">
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary back" data-prev-tab="#project-tab">Back</button>
                        <button type="button" class="btn btn-primary save-next" data-next-tab="#unit-tab">Save & Next</button>
                    </div>

                    <!-- Property Units Tab -->
                    <div class="tab-pane fade" id="unit" role="tabpanel">
                        <div class="row">
                            <!-- Title -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <!-- Description -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary back" data-prev-tab="#property-tab">Back</button>
                        <button type="button" class="btn btn-primary save-next" data-next-tab="#outdoor-tab">Save & Next</button>
                    </div>

                    <!-- Outdoor Features Tab -->
                    <div class="tab-pane fade" id="outdoor" role="tabpanel">
                        <div class="row">

                            <!-- Title -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <!-- Description -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary back" data-prev-tab="#unit-tab">Back</button>
                        <button type="button" class="btn btn-primary save-next" data-next-tab="#images-tab">Save & Next</button>
                    </div>

                    <!-- Project Images Tab -->
                    <div class="tab-pane fade" id="images" role="tabpanel">
                        <div class="row">

                            <!-- Title -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <!-- Image -->
                            <div class="form-group mb-3 col col-lg-6">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image" id="image"
                                    accept="image/*">
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary back" data-prev-tab="#outdoor-tab">Back</button>
                        <button type="submit" class="btn btn-success" id="submitBtn">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
<script>
// Function to save form data to local storage
function saveFormData() {
    const formElements = document.querySelectorAll('#projectForm input, #projectForm textarea');
    formElements.forEach(element => {
        if (element.name) {
            localStorage.setItem(element.name, element.value);
        }
    });
}

// Function to load form data from local storage
function loadFormData() {
    const formElements = document.querySelectorAll('#projectForm input, #projectForm textarea');
    formElements.forEach(element => {
        if (element.name) {
            const value = localStorage.getItem(element.name);
            if (value) {
                element.value = value;
            }
        }
    });
}

// Clear local storage on form submission
document.getElementById('submitBtn').addEventListener('click', function() {
    localStorage.clear(); // Clear local storage on submit
});

// Load form data when the page is loaded
window.onload = loadFormData;

// Save form data on input change
const formElements = document.querySelectorAll('#projectForm input, #projectForm textarea');
formElements.forEach(element => {
    element.addEventListener('input', saveFormData);
});

// Optionally, save data when switching tabs
const tabLinks = document.querySelectorAll('.nav-link');
tabLinks.forEach(link => {
    link.addEventListener('click', saveFormData);
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/project/create.blade.php ENDPATH**/ ?>