@extends('admin.layout.layout')

{{-- @section('links')
@endsection --}}

@section('content')
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
        {{-- Display Success Message --}}
        @include('auth.success-message')
        {{-- Display Error Message --}}
        @include('auth.error-message')
        {{-- Display Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container mt-4">

                <!-- Tabs Navigation -->
                <ul class="nav nav-tabs" id="formTabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="project-details-tab" data-toggle="tab"
                            href="#project-details">Project Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="property-details-tab" data-toggle="tab" href="#property-details">Property
                            Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="property-units-tab" data-toggle="tab" href="#property-units">Property
                            Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="outdoor-features-tab" data-toggle="tab" href="#outdoor-features">Outdoor
                            Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="project-images-tab" data-toggle="tab" href="#project-images">Project
                            Images</a>
                    </li>
                </ul>
            <form id="multiStepForm" method="POST" action="{{route('projects.store')}}" enctype="multipart/form-data">
                @csrf
                <!-- Tab Content -->
                <div class="tab-content mt-4">
                    <div class="tab-pane fade show active" id="project-details">
                        <div class="row">
                            <!-- Cover Image -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="cover_image" class="form-label dpage5label">Cover Image</label>
                                        <input type="file" name="cover_image" id="cover_image"
                                            class="form-control dpage5input">
                                        <span class="error-message" id="coverImageError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="location" class="form-label dpage5label">Location</label>
                                        <input type="text" name="location" id="location"
                                            class="form-control dpage5input" placeholder="Enter here...">
                                        <span class="error-message" id="locationError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="address" class="form-label dpage5label">Address</label>
                                        <input type="text" name="address" id="address" class="form-control dpage5input"
                                            placeholder="Enter here...">
                                        <span class="error-message" id="addressError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Title -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="title" class="form-label dpage5label">Title</label>
                                        <input type="text" name="title" id="title" class="form-control dpage5input"
                                            placeholder="Enter here...">
                                        <span class="error-message" id="titleError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Banner Image -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="banner_image" class="form-label dpage5label">Banner Image</label>
                                        <input type="file" name="banner_image" id="banner_image"
                                            class="form-control dpage5input">
                                        <span class="error-message" id="bannerImageError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Video -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="video" class="form-label dpage5label">Video URL</label>
                                        <input type="text" name="video" id="video"
                                            class="form-control dpage5input" placeholder="Enter video URL...">
                                        <span class="error-message" id="videoError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Floor Plan Image -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="floor_plan_image" class="form-label dpage5label">Floor Plan
                                            Image</label>
                                        <input type="file" name="floor_plan_image" id="floor_plan_image"
                                            class="form-control dpage5input">
                                        <span class="error-message" id="floorPlanImageError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="description" class="form-label dpage5label">Description</label>
                                        <textarea name="description" id="description" class="form-control dpage5input" rows="4"
                                            placeholder="Enter description..."></textarea>
                                        <span class="error-message" id="descriptionError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Price Range Start -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="price_range_start" class="form-label dpage5label">Price Range
                                            Start</label>
                                        <input type="number" step="0.01" name="price_range_start"
                                            id="price_range_start" class="form-control dpage5input"
                                            placeholder="Enter price range start...">
                                        <span class="error-message" id="priceRangeStartError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Price Range End -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="price_range_end" class="form-label dpage5label">Price Range
                                            End</label>
                                        <input type="number" step="0.01" name="price_range_end" id="price_range_end"
                                            class="form-control dpage5input" placeholder="Enter price range end...">
                                        <span class="error-message" id="priceRangeEndError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Google Link -->
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="google_link" class="form-label dpage5label">Google Maps Link</label>
                                        <input type="text" name="google_link" id="google_link"
                                            class="form-control dpage5input" placeholder="Enter Google Maps link...">
                                        <span class="error-message" id="googleLinkError"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more fields as required -->
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" id="backBtn">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextBtn">Save & Next</button>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="property-details">
                        <!-- Property Details Form Fields -->
                        <div class="row">
                            <!-- Title -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="title" class="form-label dpage5label">Title</label>
                                        <input type="text" name="title" id="title"
                                            class="form-control dpage5input" placeholder="Enter title..." required>
                                        <span class="error-message" id="titleError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Value -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="value" class="form-label dpage5label">Value</label>
                                        <input type="number" name="value" id="value"
                                            class="form-control dpage5input" placeholder="Enter value..." required>
                                        <span class="error-message" id="valueError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Upload (optional) -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="image" class="form-label dpage5label">Image (Optional)</label>
                                        <input type="file" name="image" id="image"
                                            class="form-control dpage5input">
                                        <span class="error-message" id="imageError"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more fields as required -->
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" id="backBtn">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextBtn">Save & Next</button>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="property-units">
                        <!-- Property Units Form Fields -->
                        <div class="row">

                            <!-- Title -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="title" class="form-label dpage5label">Title</label>
                                        <input type="text" name="title" id="title"
                                            class="form-control dpage5input" placeholder="Enter title..." required>
                                        <span class="error-message" id="titleError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="description" class="form-label dpage5label">Description</label>
                                        <textarea name="description" id="description" class="form-control dpage5input" rows="4"
                                            placeholder='{"key1":"value1", "key2":"value2"}' required></textarea>
                                        <span class="error-message" id="descriptionError"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more fields as required -->
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" id="backBtn">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextBtn">Save & Next</button>
                        </div>
                    </div>
                    {{-- ==================================================== --}}
                    <!-- Outdoor Features -->
                    <div class="tab-pane fade" id="outdoor-features">
                        <!-- Outdoor Features Form Fields -->
                        <div class="row">
                            <!-- Title -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="title" class="form-label dpage5label">Title</label>
                                        <input type="text" name="title" id="title"
                                            class="form-control dpage5input" placeholder="Enter title..." required>
                                        <span class="error-message" id="titleError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="description" class="form-label dpage5label">Description (JSON
                                            format)</label>
                                        <textarea name="description" id="description" class="form-control dpage5input" rows="4"
                                            placeholder='{"key1":"value1", "key2":"value2"}' required></textarea>
                                        <span class="error-message" id="descriptionError"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more fields as required -->
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" id="backBtn">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextBtn">Save & Next</button>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="project-images">
                        <!-- Project Images Form Fields -->
                        <div class="row">
                            <!-- Title -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="title" class="form-label dpage5label">Image Title</label>
                                        <input type="text" name="title" id="title"
                                            class="form-control dpage5input" placeholder="Enter image title..." required>
                                        <span class="error-message" id="titleError"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Upload -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="image" class="form-label dpage5label">Upload Image</label>
                                        <input type="file" name="image" id="image"
                                            class="form-control dpage5input" accept="image/*" required>
                                        <span class="error-message" id="imageError"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more fields as required -->
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" id="backBtn">Back</button>
                            <button type="submit" class="btn btn-success" id="submitBtn">Submit</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>


    </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('multiStepForm');
            const tabs = document.querySelectorAll('#formTabs a');
            let currentTabIndex = 0;

            // Function to switch tabs
            function showTab(index) {
                tabs.forEach((tab, i) => {
                    tab.classList.toggle('active', i === index);
                    document.querySelector(tab.getAttribute('href')).classList.toggle('show', i === index);
                    document.querySelector(tab.getAttribute('href')).classList.toggle('active', i ===
                        index);
                });
            }

            // Load saved form data from local storage
            function loadFormData() {
                tabs.forEach(tab => {
                    const formSection = document.querySelector(tab.getAttribute('href'));
                    const inputs = formSection.querySelectorAll('input, select, textarea');
                    inputs.forEach(input => {
                        const savedValue = localStorage.getItem(input.id);
                        if (savedValue) {
                            input.value = savedValue;
                        }
                    });
                });
            }

            // Save current tab data to local storage
            function saveCurrentTabData() {
                const formSection = document.querySelector(tabs[currentTabIndex].getAttribute('href'));
                const inputs = formSection.querySelectorAll('input, select, textarea');
                inputs.forEach(input => {
                    localStorage.setItem(input.id, input.value);
                });
            }

            // Remove all form data from local storage
            function clearFormData() {
                tabs.forEach(tab => {
                    const formSection = document.querySelector(tab.getAttribute('href'));
                    const inputs = formSection.querySelectorAll('input, select, textarea');
                    inputs.forEach(input => {
                        localStorage.removeItem(input.id);
                    });
                });
            }

            // Show the first tab on page load
            showTab(currentTabIndex);
            loadFormData();

            // Next button click event for each tab
            document.querySelectorAll('.btn-primary').forEach(button => {
                button.addEventListener('click', function() {
                    if (this.id !== 'submitBtn') {
                        saveCurrentTabData();
                        if (currentTabIndex < tabs.length - 1) {
                            currentTabIndex++;
                            showTab(currentTabIndex);
                        }
                    }
                });
            });

            // Back button click event for each tab
            document.querySelectorAll('.btn-secondary').forEach(button => {
                button.addEventListener('click', function() {
                    if (currentTabIndex > 0) {
                        currentTabIndex--;
                        showTab(currentTabIndex);
                    }
                });
            });

            // Form submission event
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                clearFormData();
                alert('Form submitted and local storage cleared!');
                form.reset();
            });
        });
    </script>



@endsection
