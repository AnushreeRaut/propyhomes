@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        <!-- Dashboard Header -->
        <h1 class="ds1col1texth1">Add Reference</h1>

        <!-- Back Button -->
        <div class="text-right mb-4">
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
        <div class="card p-4">
            <h1>Project</h1>
            <form id="multiStepForm" method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                @csrf 
                <div class="row">
                    <!-- Cover Image -->
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="cover_image" class="form-label">Cover Image</label>
                            <input type="file" name="cover_image" id="cover_image" class="form-control">
                            <span class="error-message" id="coverImageError"></span>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" name="location" id="location" class="form-control"
                                placeholder="Enter location...">
                            <span class="error-message" id="locationError"></span>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter address...">
                            <span class="error-message" id="addressError"></span>
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Enter title...">
                                @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                            <span class="error-message" id="titleError"></span>
                        </div>
                    </div>

                    <!-- Banner Image -->
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="banner_image" class="form-label">Banner Image</label>
                            <input type="file" name="banner_image" id="banner_image" class="form-control">
                            <span class="error-message" id="bannerImageError"></span>
                        </div>
                    </div>

                    <!-- Video URL -->
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="video" class="form-label">Video URL</label>
                            <input type="text" name="video" id="video" class="form-control"
                                placeholder="Enter video URL...">
                            <span class="error-message" id="videoError"></span>
                        </div>
                    </div>

                    <!-- Floor Plan Image -->
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="floor_plan_image" class="form-label">Floor Plan Image</label>
                            <input type="file" name="floor_plan_image" id="floor_plan_image" class="form-control">
                            <span class="error-message" id="floorPlanImageError"></span>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter description..."></textarea>
                            <span class="error-message" id="descriptionError"></span>
                            @if($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                        </div>
                    </div>

                    <!-- Price Range Start -->
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="price_range_start" class="form-label">Price Range Start</label>
                            <input type="number" step="0.01" name="price_range_start" id="price_range_start"
                                class="form-control" placeholder="Enter price range start...">
                            <span class="error-message" id="priceRangeStartError"></span>
                        </div>
                    </div>

                    <!-- Price Range End -->
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="price_range_end" class="form-label">Price Range End</label>
                            <input type="number" step="0.01" name="price_range_end" id="price_range_end"
                                class="form-control" placeholder="Enter price range end...">
                            <span class="error-message" id="priceRangeEndError"></span>
                        </div>
                    </div>

                    <!-- Google Maps Link -->
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <label for="google_link" class="form-label">Google Maps Link</label>
                            <input type="text" name="google_link" id="google_link" class="form-control"
                                placeholder="Enter Google Maps link...">
                            <span class="error-message" id="googleLinkError"></span>
                        </div>
                    </div>
                </div>

                <!-- Project Details -->
                <h2>Project Details</h2>
                <div id="propertyDetailsContainer" class="mb-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="property_title[]" class="form-label">Title</label>
                            <input type="text" name="property_title[]" class="form-control"
                                placeholder="Enter title..." required>
                        </div>
                        <div class="col-lg-6">
                            <label for="property_value[]" class="form-label">Value</label>
                            <input type="number" name="property_value[]" class="form-control"
                                placeholder="Enter value..." required>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" id="addMorePropertyDetails">Add More Property
                    Details</button>

                <!-- Property Units -->
                <div id="propertyUnitContainer" class="mt-4">
                    <h3>Property Units</h3>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <label for="property_unit[title][]" class="form-label">Title</label>
                            <input type="text" name="property_unit[title][]" class="form-control"
                                placeholder="Enter unit title...">
                        </div>
                        <div class="col-lg-6">
                            <label for="property_unit[description][]" class="form-label">Description</label>
                            <input type="text" name="property_unit[description][]" class="form-control"
                                placeholder="Enter unit description...">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" id="addMorePropertyUnit">Add More Units</button>
                <div class="">
                    <h3>Outdoor Features </h3>
                    <div id="features-container">
                        <!-- Initial feature group without remove button -->
                        <div class="feature-group">
                            <div class="form-group">
                                <label for="feature_title">Feature Title:</label>
                                <input type="text" name="feature_title[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="feature_description">Description:</label>
                                <textarea name="feature_description[]" class="form-control" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary" id="add-feature">Add Another Feature</button>
                    <br><br>
                </div>




                <!-- Submit Button -->
                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            // Add More Property Details
            document.getElementById('addMorePropertyDetails').addEventListener('click', function() {
                const container = document.getElementById('propertyDetailsContainer');
                const newDetailSet = document.createElement('div');
                newDetailSet.className = 'property-detail-set mb-4';
                newDetailSet.innerHTML = `
                                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="property_title[]" class="form-label dpage5label">Title</label>
                        <input type="text" name="property_title[]" class="form-control dpage5input" placeholder="Enter title..."
                            required>
                        <span class="error-message"></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="property_value[]" class="form-label dpage5label">Value</label>
                        <input type="number" name="property_value[]" class="form-control dpage5input" placeholder="Enter value..."
                            required>
                        <span class="error-message"></span>
                    </div>
                </div>
                <button type="button" class="btn btn-danger remove-property-detail">Remove</button>
                </div>
                `;
                container.appendChild(newDetailSet);
            });

            // Allow removing of additional property detail sets
            document.getElementById('propertyDetailsContainer').addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-property-detail')) {
                    event.target.closest('.property-detail-set').remove();
                }
            });
        </script>
        <script>
            // Add More Title and Description Sets
            // Add More Title and Description Sets
            document.getElementById('addMorePropertyUnit').addEventListener('click', function() {
                const container = document.getElementById('propertyUnitContainer');
                const newSet = document.createElement('div');
                newSet.className = 'property-unit-set mb-4';
                newSet.innerHTML = `
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="property_unit[title][]" class="form-control"
                            placeholder="Enter Property Unit Title...">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="property_unit[description][]" class="form-control"
                            placeholder="Enter Property Unit Description...">
                </div>
                </div>
                <button type="button" class="btn btn-danger remove-property-unit">Remove</button>
                </div>
                `;
                container.appendChild(newSet);
            });

            // Allow removing of additional property unit sets
            document.getElementById('propertyUnitContainer').addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-property-unit')) {
                    event.target.closest('.property-unit-set').remove();
                }
            });
        </script>

<script>
    // Add More Outdoor Features
    document.getElementById('add-feature').addEventListener('click', function() {
        const featureGroup = document.createElement('div');
        featureGroup.classList.add('feature-group');
        featureGroup.innerHTML = `
            <div class="form-group">
                <label for="feature_title">Feature Title:</label>
                <input type="text" name="feature_title[]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="feature_description">Description:</label>
                <textarea name="feature_description[]" class="form-control" rows="3" required></textarea>
            </div>
            <button type="button" class="btn btn-danger remove-feature">Remove</button>
        `;
        document.getElementById('features-container').appendChild(featureGroup);
    });

    // Allow removing of additional feature groups
    document.getElementById('features-container').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-feature')) {
            event.target.closest('.feature-group').remove();
        }
    });
    </script>
       @endsection
