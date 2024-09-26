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
        <div class="container">

            <form id="projectForm" action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data" onsubmit="submitForm(event)">
                @csrf
                <!-- Tabs Navigation -->
                <ul class="nav nav-tabs" id="propertyTabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#projectDetails">Project Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#propertyDetails">Property Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#propertyUnits">Property Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#outdoorFeatures">Outdoor Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#projectImages">Project Images</a>
                    </li>
                </ul>

                <!-- Tabs Content -->
                <div class="tab-content">
                    <!-- Project Details Tab -->
                    <div class="tab-pane container active" id="projectDetails">
                        <h4>Project Details</h4>
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
                        <button type="button" class="btn btn-primary mt-3" onclick="saveAndNext(1)">Save and
                            Next</button>
                    </div>

                    <!-- Property Details Tab -->
                    <div class="tab-pane container fade" id="propertyDetails">
                        <h4>Property Details</h4>
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
                        <button type="button" class="btn btn-secondary mt-3" onclick="back(0)">Back</button>
                        <button type="button" class="btn btn-primary mt-3" onclick="saveAndNext(2)">Save and
                            Next</button>
                    </div>

                    <!-- Property Units Tab -->
                    <div class="tab-pane container fade" id="propertyUnits">
                        <h4>Property Units</h4>
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
                        <button type="button" class="btn btn-secondary mt-3" onclick="back(1)">Back</button>
                        <button type="button" class="btn btn-primary mt-3" onclick="saveAndNext(3)">Save and
                            Next</button>
                    </div>

                    <!-- Outdoor Features Tab -->
                    <div class="tab-pane container fade" id="outdoorFeatures">
                        <h4>Outdoor Features</h4>
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
                        <button type="button" class="btn btn-secondary mt-3" onclick="back(2)">Back</button>
                        <button type="button" class="btn btn-primary mt-3" onclick="saveAndNext(4)">Save and
                            Next</button>
                    </div>

                    <!-- Project Images Tab -->
                    <div class="tab-pane container fade" id="projectImages">
                        <h4>Project Images</h4>
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
                        <button type="button" class="btn btn-secondary mt-3" onclick="back(3)">Back</button>
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    </div>
    <script>
        // Save data in localStorage when moving to the next tab
        function saveAndNext(nextTab) {
            saveFormData();
            switchTab(nextTab);
        }

        // Switch to a specific tab
        function switchTab(index) {
            const tabs = document.querySelectorAll('.nav-link');
            const contents = document.querySelectorAll('.tab-pane');

            tabs.forEach(tab => tab.classList.remove('active'));
            contents.forEach(content => content.classList.remove('active', 'show'));

            tabs[index].classList.add('active');
            contents[index].classList.add('active', 'show');
        }

        // Back button functionality
        function back(prevTab) {
            switchTab(prevTab);
        }

        // Submit the form and clear localStorage
        function submitForm(event) {
            event.preventDefault();
            alert("Form Submitted!");
            // Clear localStorage
            localStorage.clear();
            document.getElementById('propertyForm').reset();
        }

        // Load data from localStorage when the page is loaded
        window.onload = loadFormData;
    </script>



@endsection
