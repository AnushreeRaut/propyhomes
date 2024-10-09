@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')

        <form id="property-form" method="POST" action="{{ route('properties.update', $property->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Property Details Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Edit Property Details</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="properties[title]" class="form-control" value="{{ $property->title }}" required>
                    </div>

                    <div class="form-group">
                        <label>Property Type</label>
                        <select name="properties[property_type]" class="form-control" required>
                            <option value="Residential" {{ $property->property_type == 'Residential' ? 'selected' : '' }}>Residential</option>
                            <option value="Commercial" {{ $property->property_type == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                        </select>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[recent_property]" id="recentProperty" {{ $property->recent_property ? 'checked' : '' }}>
                        <label class="form-check-label" for="recentProperty">Recent Property</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[newly_added_property]" id="newlyAddedProperty" {{ $property->newly_added_property ? 'checked' : '' }}>
                        <label class="form-check-label" for="newlyAddedProperty">Newly Added Property</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[top_projects]" id="topProjects" {{ $property->top_projects ? 'checked' : '' }}>
                        <label class="form-check-label" for="topProjects">Top Projects</label>
                    </div>

                    <div class="form-group">
                        <label>BHK Type</label>
                        <select name="properties[bhk_type]" class="form-control" required>
                            <option value="1BHK" {{ $property->bhk_type == '1BHK' ? 'selected' : '' }}>1BHK</option>
                            <option value="2BHK" {{ $property->bhk_type == '2BHK' ? 'selected' : '' }}>2BHK</option>
                            <option value="3BHK" {{ $property->bhk_type == '3BHK' ? 'selected' : '' }}>3BHK</option>
                            <option value="4BHK" {{ $property->bhk_type == '4BHK' ? 'selected' : '' }}>4BHK</option>
                            <option value="5BHK" {{ $property->bhk_type == '5BHK' ? 'selected' : '' }}>5BHK</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Price Range Start</label>
                        <input type="number" step="0.01" name="properties[price_range_start]" class="form-control" value="{{ $property->price_range_start }}" required>
                    </div>

                    <div class="form-group">
                        <label>Price Range End</label>
                        <input type="number" step="0.01" name="properties[price_range_end]" class="form-control" value="{{ $property->price_range_end }}" required>
                    </div>

                    <div class="form-group">
                        <label>Possession Status</label>
                        <select name="properties[possession_status]" class="form-control" required>
                            <option value="Under construction" {{ $property->possession_status == 'Under construction' ? 'selected' : '' }}>Under construction</option>
                            <option value="Ready to Move" {{ $property->possession_status == 'Ready to Move' ? 'selected' : '' }}>Ready to Move</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Size (sqft)</label>
                        <input type="number" step="0.01" name="properties[size]" class="form-control" value="{{ $property->size }}" required>
                    </div>

                    <div class="form-group">
                        <label>Video URL</label>
                        <input type="text" name="properties[video]" class="form-control" value="{{ $property->video }}">
                    </div>
                </div>
            </div>

            <!-- Property Location Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Location</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select name="locations[country_id]" class="form-control" id="country" required>
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}" {{ $property->locations->first()->country_id == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="state">State</label>
                        <select name="locations[state_id]" class="form-control" id="state" required>
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}" {{ $property->locations->first()->state_id == $state->id ? 'selected' : '' }}>
                                    {{ $state->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <select name="locations[city_id]" class="form-control" id="city" required>
                            <option value="">Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}" {{ $property->locations->first()->city_id == $city->id ? 'selected' : '' }}>
                                    {{ $city->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="area">Area</label>
                        <select name="locations[area_id]" class="form-control" id="area" required>
                            <option value="">Select Area</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->id }}" {{ $property->locations->first()->area_id == $area->id ? 'selected' : '' }}>
                                    {{ $area->area_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="landmark">Landmark</label>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle form-control text-left border-secondary border-1" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Landmarks
                            </button>
                            <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton" style="max-height: 200px; overflow-y: auto;">
                                <div class="px-3">
                                    <!-- List of checkboxes for each landmark -->
                                    @foreach ($landmarks as $landmark)
                                        <div class="form-check">
                                            <input class="form-check-input landmark-checkbox" type="checkbox"
                                                name="locations[landmark_id][]" value="{{ $landmark->id }}"
                                                id="landmark_{{ $landmark->id }}"
                                                {{ in_array($landmark->id, $propertyLandmarks) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="landmark_{{ $landmark->id }}">
                                                {{ $landmark->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
<!-- Singular Section for Existing Amenities -->
<div class="card mb-4">
    <div class="card-header">
        <h4>Property Amenities</h4>
    </div>
    <div class="card-body">
        <!-- Existing Amenities (Not cloned) -->
        <label>Existing Amenities:</label>
        <div class="form-group">
            @foreach ($existingAmenities as $amenity)
                <div class="form-check">
                    <input type="checkbox" name="amenities[existing][]" value="{{ $amenity->id }}"
                        class="form-check-input"
                        {{ in_array($amenity->id, $propertyAmenities) ? 'checked' : '' }}> <!-- Pre-check if the amenity is already related -->
                    <label class="form-check-label">{{ $amenity->name }}</label>
                </div>
            @endforeach
        </div>

        <!-- Dynamic Section for Adding New Amenities -->
        <div class="amenities-section">
            <h5>New Amenity 1</h5>
            <div class="form-group">
                <label>Amenity Name</label>
                <input type="text" name="amenities[0][new][name]" class="form-control"
                    placeholder="Amenity Name">
            </div>

            <div class="form-group">
                <label>Amenity Icon</label>
                <input type="file" name="amenities[0][new][icon_image]" class="form-control">
            </div>
        </div>

        <!-- Button to Add More Amenities -->
        <button type="button" class="btn btn-secondary add-amenity mt-3 mb-3">Add Another Amenity</button>
    </div>
</div>

            <!-- Property Utilities Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Utilities</h4>
                </div>
                <div class="card-body">
                    @if ($property->utilities->isNotEmpty())
                        @foreach ($property->utilities as $index => $utility)
                            <div class="utilities-section">
                                <h5>Utility {{ $index + 1 }}</h5>
                                <div class="form-group">
                                    <label>Utility Name</label>
                                    <input type="text" name="utilities[{{ $index }}][name]" class="form-control" value="{{ $utility->name }}" placeholder="Utility Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Value</label>
                                    <input type="number" name="utilities[{{ $index }}][value]" class="form-control" value="{{ $utility->pivot->value }}" placeholder="Utility Value" required>
                                </div>
                                <div class="form-group">
                                    <label>Parking Type</label>
                                    <select name="utilities[{{ $index }}][parking_type]" class="form-control">
                                        <option value="Stilt" {{ $utility->pivot->parking_type == 'Stilt' ? 'selected' : '' }}>Stilt</option>
                                        <option value="Pit" {{ $utility->pivot->parking_type == 'Pit' ? 'selected' : '' }}>Pit</option>
                                        <option value="Puzzle" {{ $utility->pivot->parking_type == 'Puzzle' ? 'selected' : '' }}>Puzzle</option>
                                        <option value="Mechanical" {{ $utility->pivot->parking_type == 'Mechanical' ? 'selected' : '' }}>Mechanical</option>
                                    </select>
                                </div>
                                <!-- Remove Utility Button -->
                                <button type="button" class="btn btn-danger remove-utility mt-2 mb-3">Remove Utility</button>
                            </div>
                        @endforeach
                    @else
                        <div class="utilities-section">
                            <h5>New Utility 1</h5>
                            <div class="form-group">
                                <label>Utility Name</label>
                                <input type="text" name="utilities[0][name]" class="form-control" placeholder="Utility Name" required>
                            </div>
                            <div class="form-group">
                                <label>Value</label>
                                <input type="number" name="utilities[0][value]" class="form-control" placeholder="Utility Value" required>
                            </div>
                            <div class="form-group">
                                <label>Parking Type</label>
                                <select name="utilities[0][parking_type]" class="form-control">
                                    <option value="Stilt">Stilt</option>
                                    <option value="Pit">Pit</option>
                                    <option value="Puzzle">Puzzle</option>
                                    <option value="Mechanical">Mechanical</option>
                                </select>
                            </div>
                        </div>
                    @endif
                    <!-- Add More Utility Set Button -->
                    <button type="button" class="btn btn-secondary add-utility mt-3 mb-3">Add Another Utility</button>
                </div>
            </div>

            <!-- Property Images Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Images</h4>
                </div>
                @foreach ($groupedImages as $categoryName => $images)
                <h3>{{ $categoryName }}</h3>
                <div class="row" id="category-{{ Str::slug($categoryName) }}">
                    @foreach ($images as $image)
                        <div class="col-md-3 image-wrapper">
                            <!-- Display the image -->
                            <img src="{{ asset($image->propertyImage->image) }}" alt="{{ $categoryName }}" class="img-fluid image-preview">

                            <!-- File input for changing the image -->
                            <div class="form-group mt-2">
                                <input type="file" name="images[{{ $loop->index }}][file]" class="form-control image-input" data-preview-target="preview-{{ $loop->index }}">
                            </div>

                            <!-- Image Category Dropdown -->
                            <div class="form-group mt-2">
                                <label>Image Category</label>
                                <select name="images[{{ $loop->index }}][image_category_id]" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($imageCategories as $category)
                                        <option value="{{ $category->id }}" {{ $image->propertyImage->image_category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Remove Image Button -->
                            <button type="button" class="btn btn-danger remove-image mt-2 mb-3">Remove Image</button>
                        </div>
                    @endforeach
                </div>
                <!-- Add Image Button -->
                <button type="button" class="btn btn-success add-image" data-category="{{ Str::slug($categoryName) }}">Add Image</button>
            @endforeach


                {{-- @foreach ($groupedImages as $categoryName => $images)
                <h3>{{ $categoryName }}</h3>
                <div class="row">
                    @foreach ($images as $image)
                        <div class="col-md-3">
                            <!-- Display the image -->
                            <img src="{{ asset('storage/' . $image->propertyImage->path) }}" alt="{{ $categoryName }}" class="img-fluid">

                            <!-- Image Category Dropdown -->
                            <div class="form-group mt-2">
                                <label>Image Category</label>
                                <select name="images[{{ $loop->index }}][image_category_id]" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($imageCategories as $category)
                                        <option value="{{ $category->id }}" {{ $image->propertyImage->image_category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Remove Image Button -->
                            <button type="button" class="btn btn-danger remove-image mt-2 mb-3">Remove Image</button>
                        </div>
                    @endforeach
                </div>
            @endforeach --}}

                {{-- <div class="card-body">
                    @if ($property->images->isNotEmpty())
                        @foreach ($property->images as $index => $image)
                            <div class="images-section">
                                <h5>Image {{ $index + 1 }}</h5>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="images[{{ $index }}][file]" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Current Image</label>
                                    @if ($image->image)
                                        <img src="{{ asset($image->image) }}" class="img-thumbnail" style="width: 150px; height: auto;">
                                    @else
                                        <p class="text-muted">No current image available.</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Image Category</label>
                                    <select name="images[{{ $index }}][image_category_id]" class="form-control" required>
                                        <option value="">Select Category</option>
                                        @foreach ($imageCategories as $category)
                                            <option value="{{ $category->id }}" {{ $image->image_category_id == $category->id ? 'selected' : 'Elevation' }}>
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Remove Image Button -->
                                <button type="button" class="btn btn-danger remove-image mt-2 mb-3">Remove Image</button>
                            </div>
                        @endforeach
                    @else
                        <div class="images-section">
                            <h5>New Image 1</h5>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="images[0][file]" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Image Category</label>
                                <select name="images[0][image_category_id]" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($imageCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endif
                    <!-- Add More Image Set Button -->
                    <button type="button" class="btn btn-secondary add-image mt-3 mb-3">Add Another Image</button>
                </div> --}}
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-4">Update Property Details</button>
        </form>
    </div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    let amenityIndex = 1; // Index for new amenities

    // Add new amenity section dynamically
    document.querySelector('.add-amenity').addEventListener('click', function () {
        const amenitiesSection = document.querySelector('.amenities-section');

        const newAmenityHtml = `
            <h5>New Amenity ${amenityIndex + 1}</h5>
            <div class="form-group">
                <label>Amenity Name</label>
                <input type="text" name="amenities[${amenityIndex}][new][name]" class="form-control" placeholder="Amenity Name">
            </div>
            <div class="form-group">
                <label>Amenity Icon</label>
                <input type="file" name="amenities[${amenityIndex}][new][icon_image]" class="form-control">
            </div>
        `;

        // Append the new amenity section to the form
        amenitiesSection.insertAdjacentHTML('beforeend', newAmenityHtml);

        amenityIndex++; // Increment the index for the next new amenity
    });
});

//===================
document.addEventListener('DOMContentLoaded', function () {
    // Function to handle image preview
    function previewImage(input, previewTarget) {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const preview = document.querySelector(`.${previewTarget}`);
                if (preview) {
                    preview.src = e.target.result;
                }
            };
            reader.readAsDataURL(file);
        }
    }

    // Handle image input changes for preview
    document.querySelectorAll('.image-input').forEach(input => {
        input.addEventListener('change', function () {
            const previewTarget = this.getAttribute('data-preview-target');
            previewImage(this, previewTarget);
        });
    });

    // Handle image removal
    document.querySelectorAll('.remove-image').forEach(button => {
        button.addEventListener('click', function () {
            const imageWrapper = this.closest('.image-wrapper');
            if (imageWrapper) {
                imageWrapper.remove(); // Remove the image block
            }
        });
    });

    // Handle adding new images
    document.querySelectorAll('.add-image').forEach(button => {
        button.addEventListener('click', function () {
            const categorySlug = this.getAttribute('data-category');
            const container = document.getElementById(`category-${categorySlug}`);

            const newImageIndex = container.querySelectorAll('.image-wrapper').length; // Get the current number of images

            // Create new image input block
            const newImageBlock = document.createElement('div');
            newImageBlock.classList.add('col-md-3', 'image-wrapper');
            newImageBlock.innerHTML = `
                <img src="#" alt="New Image" class="img-fluid image-preview">
                <div class="form-group mt-2">
                    <input type="file" name="images[${newImageIndex}][file]" class="form-control image-input" data-preview-target="preview-${newImageIndex}">
                </div>
                <div class="form-group mt-2">
                    <label>Image Category</label>
                    <select name="images[${newImageIndex}][image_category_id]" class="form-control" required>
                        <option value="">Select Category</option>
                        ${document.querySelector('select[name="images[0][image_category_id]"]').innerHTML} <!-- Copy category options -->
                    </select>
                </div>
                <button type="button" class="btn btn-danger remove-image mt-2 mb-3">Remove Image</button>
            `;

            // Append new image block to the category
            container.appendChild(newImageBlock);

            // Reattach event listeners for the new elements
            newImageBlock.querySelector('.image-input').addEventListener('change', function () {
                const previewTarget = this.getAttribute('data-preview-target');
                previewImage(this, previewTarget);
            });

            newImageBlock.querySelector('.remove-image').addEventListener('click', function () {
                this.closest('.image-wrapper').remove();
            });
        });
    });
});

</script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let utilitiesIndex = {{ $property->utilities->count() }};
            let imagesIndex = {{ $property->images->count() }};

            // Add more utilities
            document.querySelector('.add-utility').addEventListener('click', function() {
                utilitiesIndex++;
                const newUtilitySection = document.querySelector('.utilities-section').cloneNode(true);
                newUtilitySection.querySelectorAll('input, select').forEach(function(input) {
                    input.name = input.name.replace(/\[\d+\]/, `[${utilitiesIndex}]`);
                    input.value = '';
                });

                const removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.className = 'btn btn-danger remove-utility mt-2 mb-3';
                removeButton.textContent = 'Remove';
                removeButton.addEventListener('click', function() {
                    newUtilitySection.remove();
                });

                newUtilitySection.appendChild(removeButton);
                document.querySelector('.utilities-section').parentNode.appendChild(newUtilitySection);
            });

            // Add more images
            document.querySelector('.add-image').addEventListener('click', function() {
                imagesIndex++;
                const newImageSection = document.querySelector('.images-section').cloneNode(true);
                newImageSection.querySelectorAll('input, select').forEach(function(input) {
                    input.name = input.name.replace(/\[\d+\]/, `[${imagesIndex}]`);
                    if (input.type !== 'file') input.value = '';
                });

                const removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.className = 'btn btn-danger remove-image mt-2 mb-3';
                removeButton.textContent = 'Remove';
                removeButton.addEventListener('click', function() {
                    newImageSection.remove();
                });

                newImageSection.appendChild(removeButton);
                document.querySelector('.images-section').parentNode.appendChild(newImageSection);
            });
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // When the country is changed
            $('#country').change(function() {
                let countryId = $(this).val();

                // Clear state and city dropdowns
                $('#state').html('<option value="">Select State</option>');
                $('#city').html('<option value="">Select City</option>');

                // Make AJAX request to get states
                if (countryId) {
                    $.ajax({
                        url: '/api/states/' + countryId,
                        type: 'GET',
                        success: function(states) {
                            // Populate state dropdown
                            $.each(states, function(key, state) {
                                $('#state').append('<option value="' + state.id + '">' +
                                    state.name + '</option>');
                            });
                        },
                        error: function() {
                            alert('Failed to fetch states.');
                        }
                    });
                }
            });

            // When the state is changed
            $('#state').change(function() {
                let stateId = $(this).val();

                // Clear city dropdown
                $('#city').html('<option value="">Select City</option>');

                // Make AJAX request to get cities
                if (stateId) {
                    $.ajax({
                        url: '/api/cities/' + stateId,
                        type: 'GET',
                        success: function(cities) {
                            // Populate city dropdown
                            $.each(cities, function(key, city) {
                                $('#city').append('<option value="' + city.id + '">' +
                                    city.name + '</option>');
                            });
                        },
                        error: function() {
                            alert('Failed to fetch cities.');
                        }
                    });
                }
            });
        });
    </script>
@endsection
