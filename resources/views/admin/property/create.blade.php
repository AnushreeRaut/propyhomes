@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')
        <form id="property-form" method="POST" action="{{ route('properties.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Singular Property Details Section -->
            {{-- <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Details</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="properties[title]" class="form-control" placeholder="Title" required>
                    </div>

                    <div class="form-group">
                        <label>Property Type</label>
                        <select name="properties[property_type]" class="form-control" required>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[recent_property]"
                            id="recentProperty">
                        <label class="form-check-label" for="recentProperty">Recent Property</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[newly_added_property]"
                            id="newlyAddedProperty">
                        <label class="form-check-label" for="newlyAddedProperty">Newly Added Property</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[top_projects]" id="topProjects">
                        <label class="form-check-label" for="topProjects">Top Projects</label>
                    </div>

                    <div class="form-group">
                        <label>BHK Type</label>
                        <select name="properties[bhk_type]" class="form-control" required>
                            <option value="1BHK">1BHK</option>
                            <option value="2BHK">2BHK</option>
                            <option value="3BHK">3BHK</option>
                            <option value="4BHK">4BHK</option>
                            <option value="5BHK">5BHK</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Price Range Start</label>
                        <input type="number" step="0.01" name="properties[price_range_start]" class="form-control"
                            placeholder="Start Price" required>
                    </div>

                    <div class="form-group">
                        <label>Price Range End</label>
                        <input type="number" step="0.01" name="properties[price_range_end]" class="form-control"
                            placeholder="End Price" required>
                    </div>

                    <div class="form-group">
                        <label>Possession Status</label>
                        <select name="properties[possession_status]" class="form-control" required>
                            <option value="Under construction">Under construction</option>
                            <option value="Ready to Move">Ready to Move</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Size (sqft)</label>
                        <input type="number" step="0.01" name="properties[size]" class="form-control" placeholder="Size"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Video URL</label>
                        <input type="text" name="properties[video]" class="form-control" placeholder="Video URL">
                    </div>
                    <!-- New fields -->
                    <div class="form-group">
                        <label>Flat Area (Sq Ft)</label>
                        <input type="number" step="0.01" name="properties[flat_area]" class="form-control"
                            placeholder="Flat Area" required>
                    </div>

                    <div class="form-group">
                        <label>Project Completion Date</label>
                        <input type="date" name="properties[project_completion_date]" class="form-control" required>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[rera]" id="rera">
                        <label class="form-check-label" for="rera">RERA Compliance</label>
                    </div>

                    <div class="form-group">
                        <label>No of Flats</label>
                        <input type="number" name="properties[no_of_flats]" class="form-control"
                            placeholder="Number of Flats" required>
                    </div>

                    <div class="form-group">
                        <label>No of Floors</label>
                        <input type="number" name="properties[no_of_floors]" class="form-control"
                            placeholder="Number of Floors" required>
                    </div>

                    <input type="hidden" name="properties[added_by]" value="{{ auth()->user()->id }}">
                </div>
            </div> --}}

            <!-- Singular Property Details Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Details</h4>
                </div>
                <div class="card-body">
                    <!-- Title Field -->
                    <div class="form-group">
                        <label>Title</label><span class="text-danger">*</span>
                        <input type="text" id="title" name="properties[title]" class="form-control"
                            placeholder="Title" required>
                        <small id="titleError" class="text-danger"></small>
                    </div>

                    <!-- Property Type Dropdown -->
                    <div class="form-group">
                        <label>Property Type</label><span class="text-danger">*</span>
                        <select id="propertyType" name="properties[property_type]" class="form-control" required>
                            <option value="">Select Property Type</option>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                        <small id="propertyTypeError" class="text-danger"></small>
                    </div>

                    <!-- Checkboxes -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[recent_property]"
                            id="recentProperty">
                        <label class="form-check-label" for="recentProperty">Recent Property</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[newly_added_property]"
                            id="newlyAddedProperty">
                        <label class="form-check-label" for="newlyAddedProperty">Newly Added Property</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[top_projects]" id="topProjects">
                        <label class="form-check-label" for="topProjects">Top Projects</label>
                    </div>
                    <small id="" class="text-danger">please select atleast one from above three</small>
                    <!-- BHK Type Dropdown -->
                    <div class="form-group mt-3">
                        <label>BHK Type</label><span class="text-danger">*</span>
                        <select id="bhkType" name="properties[bhk_type]" class="form-control" required>
                            <option value="">Select BHK Type</option>
                            <option value="1BHK">1BHK</option>
                            <option value="2BHK">2BHK</option>
                            <option value="3BHK">3BHK</option>
                            <option value="4BHK">4BHK</option>
                            <option value="5BHK">5BHK</option>
                        </select>
                        <small id="bhkTypeError" class="text-danger"></small>
                    </div>

                    <!-- Price Range Start and End Fields -->
                    <div class="form-group">
                        <label>Price Range Start</label><span class="text-danger">*</span>
                        <input type="number" step="0.01" id="priceRangeStart" name="properties[price_range_start]"
                            class="form-control" placeholder="Start Price" required>
                        <small id="priceRangeStartError" class="text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label>Price Range End</label>
                        <input type="number" step="0.01" id="priceRangeEnd" name="properties[price_range_end]"
                            class="form-control" placeholder="End Price">
                        <small id="priceRangeEndError" class="text-danger"></small>
                    </div>

                    <!-- Possession Status Dropdown -->
                    <div class="form-group">
                        <label>Possession Status</label><span class="text-danger">*</span>
                        <select id="possessionStatus" name="properties[possession_status]" class="form-control" required>
                            <option value="">Select Possession Status</option>
                            <option value="Under construction">Under construction</option>
                            <option value="Ready to Move">Ready to Move</option>
                        </select>
                        <small id="possessionStatusError" class="text-danger"></small>
                    </div>

                    <!-- Size Field -->
                    <div class="form-group">
                        <label>Size (sqft)</label><span class="text-danger">*</span>
                        <input type="number" step="0.01" id="size" name="properties[size]" class="form-control"
                            placeholder="Size" required>
                        <small id="sizeError" class="text-danger"></small>
                    </div>

                    <!-- Video URL (Optional) -->
                    <div class="form-group">
                        <label>Video URL</label>
                        <input type="text" id="video" name="properties[video]" class="form-control"
                            placeholder="Video URL (Optional)">
                    </div>

                    <!-- Flat Area Field -->
                    <div class="form-group">
                        <label>Flat Area (Sq Ft)</label><span class="text-danger">*</span>
                        <input type="number" step="0.01" id="flatArea" name="properties[flat_area]"
                            class="form-control" placeholder="Flat Area" required>
                        <small id="flatAreaError" class="text-danger"></small>
                    </div>

                    <!-- Project Completion Date -->
                    <div class="form-group">
                        <label>Project Completion Date</label><span class="text-danger">*</span>
                        <input type="date" id="completionDate" name="properties[project_completion_date]"
                            class="form-control" required>
                        <small id="completionDateError" class="text-danger"></small>
                    </div>

                    <!-- RERA Checkbox -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="properties[rera]" id="rera">
                        <label class="form-check-label" for="rera">RERA Compliance</label>
                    </div>

                    <!-- Number of Flats and Floors -->
                    <div class="form-group">
                        <label>No of Flats</label><span class="text-danger">*</span>
                        <input type="number" id="noOfFlats" name="properties[no_of_flats]" class="form-control"
                            placeholder="Number of Flats" required>
                        <small id="noOfFlatsError" class="text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label>No of Floors</label><span class="text-danger">*</span>
                        <input type="number" id="noOfFloors" name="properties[no_of_floors]" class="form-control"
                            placeholder="Number of Floors" required>
                        <small id="noOfFloorsError" class="text-danger"></small>
                    </div>

                    <!-- Added By (Hidden) -->
                    <input type="hidden" name="properties[added_by]" value="{{ auth()->user()->id }}">
                </div>
            </div>


            <!-- Singular Property Location Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Location</h4>
                </div>
                <div class="card-body">

                    <!-- Country Dropdown -->
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select name="locations[country_id]" class="form-control" id="country" required>
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}"
                                    {{ $selectedCountry->id == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- State Dropdown -->
                    <div class="form-group">
                        <label for="state">State</label>
                        <select name="locations[state_id]" class="form-control" id="state" required>
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}"
                                    {{ isset($selectedState) && $selectedState->id == $state->id ? 'selected' : '' }}>
                                    {{ $state->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- City Dropdown -->
                    <div class="form-group">
                        <label for="city">City</label><span class="text-danger">*</span>
                        <select name="locations[city_id]" class="form-control" id="city" required>
                            <option value="">Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                        <small id="cityError" class="text-danger">Please select a city.</small>
                        <!-- Error message for City -->
                    </div>



                    <!-- Area Dropdown -->
                    <div class="form-group">
                        <label for="area">Area</label><span class="text-danger">*</span>
                        <select name="locations[area_id]" class="form-control" id="area" required>
                            <option value="">Select Area</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                            @endforeach
                        </select>
                        <small id="areaError" class="text-danger">Please select an area.</small>
                        <!-- Error message for Area -->
                    </div>

                    <div class="form-group">
                        <label for="landmark">Landmark</label><span class="text-danger">*</span>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle form-control text-left border-secondary border-1"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Select Landmarks
                            </button>
                            <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton"
                                style="max-height: 200px; overflow-y: auto;">
                                <div class="px-3">
                                    <!-- List of checkboxes for each landmark -->
                                    @foreach ($landmarks as $landmark)
                                        <div class="form-check">
                                            <input class="form-check-input landmark-checkbox" type="checkbox"
                                                name="locations[landmark_id][]" value="{{ $landmark->id }}"
                                                id="landmark_{{ $landmark->id }}">
                                            <label class="form-check-label" for="landmark_{{ $landmark->id }}">
                                                {{ $landmark->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <small id="landmarkError" class="text-danger">Please select at least one landmark.</small>
                        <!-- Error message for Landmark -->
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
                                    class="form-check-input existing-amenity">
                                <label class="form-check-label">{{ $amenity->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <small id="existingAmenityError" class="text-danger" style="display:none;">Please select at least one
                        existing amenity.</small>
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
                            <input type="file" name="amenities[0][new][icon_image]"
                                class="form-control amenity-icon-input">
                            <small class="text-danger amenity-icon-error" style="display:none;">Icon must be exactly
                                700x600 pixels.</small>
                        </div>

                    </div>

                    <!-- Button to Add More Amenities -->
                    <button type="button" class="btn btn-secondary add-amenity mt-3 mb-3">Add Another Amenity</button>
                </div>
            </div>

            {{-- <!-- Dynamic Utilities Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Utilities</h4>
                </div>
                <div class="card-body">
                    <div class="utilities-section">
                        <h5>New Utility 1</h5>
                        <div class="form-group">
                            <label>Utility Name</label>
                            <input type="text" name="utilities[0][name]" class="form-control"
                                placeholder="Utility Name" required>
                        </div>
                        <div class="form-group">
                            <label>Value</label>
                            <input type="number" name="utilities[0][value]" class="form-control"
                                placeholder="Utility Value" required>
                        </div>


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
                    <!-- Add More Utility Set Button -->
                    <button type="button" class="btn btn-secondary add-utility mt-3 mb-3">Add Another Utility</button>
                </div>
            </div> --}}
            <!-- Dynamic Utilities Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Utilities</h4>
                </div>
                <div class="card-body">
                    <div class="utilities-section">
                        <h5>New Utility 1</h5>
                        <div class="form-group">
                            <label>Utility Name</label>
                            <input type="text" name="utilities[0][name]" class="form-control utility-name"
                                placeholder="Utility Name" required>
                            <small class="text-danger utility-name-error" style="display:none;">Utility Name is
                                required.</small>
                        </div>
                        <div class="form-group">
                            <label>Value</label>
                            <input type="number" name="utilities[0][value]" class="form-control utility-value"
                                placeholder="Utility Value" required>
                            <small class="text-danger utility-value-error" style="display:none;">Utility Value is
                                required.</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Parking Type</label>
                        <select name="utilities[0][parking_type]" class="form-control parking-type">
                            <option value="">Select Parking Type</option>
                            <option value="Stilt">Stilt</option>
                            <option value="Pit">Pit</option>
                            <option value="Puzzle">Puzzle</option>
                            <option value="Mechanical">Mechanical</option>
                        </select>
                        <small class="text-danger parking-type-error" style="display:none;">Please select a Parking
                            Type.</small>
                    </div>
                    <!-- Add More Utility Set Button -->
                    <button type="button" class="btn btn-secondary add-utility mt-3 mb-3">Add Another Utility</button>
                </div>
            </div>


            {{-- <!-- Dynamic Property Images Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Images</h4>
                </div>
                <div class="card-body">
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
                    <!-- Add More Image Set Button -->
                    <button type="button" class="btn btn-secondary add-image mt-3 mb-3">Add Another Image</button>
                </div>
            </div> --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Images</h4>
                </div>
                <div class="card-body">
                    <div class="images-section">
                        <h5>New Image 1</h5>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="images[0][file]" class="form-control image-input" required>
                            <small class="text-danger image-error" style="display:none;">Image is required.</small>
                        </div>

                        <div class="form-group">
                            <label>Image Category</label>
                            <select name="images[0][image_category_id]" class="form-control category-select" required>
                                <option value="">Select Category</option>
                                @foreach ($imageCategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger category-error" style="display:none;">Category is required.</small>
                        </div>
                    </div>

                    <!-- Add More Image Set Button -->
                    <button type="button" class="btn btn-secondary add-image mt-3 mb-3">Add Another Image</button>
                </div>
            </div>

            <!-- Singular Section for Special Highlights -->
            {{-- <div class="card mb-4">
                <div class="card-header">
                    <h4>Special Highlights</h4>
                </div>
                <div class="card-body">
                    <!-- Existing Special Highlights -->
                    <label>Existing Special Highlights:</label>
                    <div class="form-group">
                        @foreach ($existingHighlights as $highlight)
                            <div class="form-check">
                                <input type="checkbox" name="highlights[existing][]" value="{{ $highlight->id }}"
                                    class="form-check-input">
                                <label class="form-check-label">{{ $highlight->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <!-- Dynamic Section for Adding New Highlights -->
                    <div class="highlights-section">
                        <h5>New Highlight 1</h5>
                        <div class="form-group">
                            <label>Highlight Name</label>
                            <input type="text" name="highlights[0][new][name]" class="form-control"
                                placeholder="Highlight Name">
                        </div>
                    </div>

                    <!-- Button to Add More Highlights -->
                    <button type="button" class="btn btn-secondary add-highlight mt-3 mb-3">Add Another
                        Highlight</button>
                </div>
            </div> --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Special Highlights</h4>
                </div>
                <div class="card-body">
                    <!-- Existing Special Highlights -->
                    <label>Existing Special Highlights:</label><span class="text-danger">*</span>
                    <div class="form-group">
                        @foreach ($existingHighlights as $highlight)
                            <div class="form-check">
                                <input type="checkbox" name="highlights[existing][]" value="{{ $highlight->id }}"
                                    class="form-check-input existing-highlight">
                                <label class="form-check-label">{{ $highlight->name }}</label>
                            </div>
                        @endforeach
                        <small id="highlightError" class="text-danger" style="display:none;">Please select at least one
                            highlight.</small>
                    </div>

                    <!-- Dynamic Section for Adding New Highlights -->
                    <div class="highlights-section">
                        <h5>New Highlight 1</h5>
                        <div class="form-group">
                            <label>Highlight Name</label>
                            <input type="text" name="highlights[0][new][name]" class="form-control new-highlight-name"
                                placeholder="Highlight Name">
                            <small class="text-danger new-highlight-error" style="display:none;">Please enter the
                                highlight name.</small>
                        </div>
                    </div>

                    <!-- Button to Add More Highlights -->
                    <button type="button" class="btn btn-secondary add-highlight mt-3 mb-3">Add Another
                        Highlight</button>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-4">Submit All Details</button>


        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageInputs = document.querySelectorAll('.image-input');
            const categorySelects = document.querySelectorAll('.category-select');

            // Function to validate image inputs
            function validateImageInput(input) {
                const errorElement = input.closest('.form-group').querySelector('.image-error');
                if (!input.files.length) {
                    errorElement.style.display = 'block';
                } else {
                    errorElement.style.display = 'none';
                }
            }

            // Function to validate category selects
            function validateCategorySelect(select) {
                const errorElement = select.closest('.form-group').querySelector('.category-error');
                if (select.value === '') {
                    errorElement.style.display = 'block';
                } else {
                    errorElement.style.display = 'none';
                }
            }

            // Attach event listeners to image inputs for real-time validation
            imageInputs.forEach(function(input) {
                input.addEventListener('change', function() {
                    validateImageInput(input);
                });
            });

            // Attach event listeners to category selects for real-time validation
            categorySelects.forEach(function(select) {
                select.addEventListener('change', function() {
                    validateCategorySelect(select);
                });
            });

            // Validate the inputs initially on page load
            imageInputs.forEach(function(input) {
                validateImageInput(input);
            });

            categorySelects.forEach(function(select) {
                validateCategorySelect(select);
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const iconInputs = document.querySelectorAll('.amenity-icon-input');

            iconInputs.forEach(function(input) {
                input.addEventListener('change', function() {
                    const file = input.files[0];
                    const errorElement = input.nextElementSibling;

                    if (file) {
                        const reader = new FileReader();

                        reader.onload = function(event) {
                            const img = new Image();
                            img.src = event.target.result;

                            img.onload = function() {
                                const width = img.width;
                                const height = img.height;

                                // Check if the image dimensions exceed 700x600
                                if (width > 700 || height > 600) {
                                    errorElement.style.display =
                                        'block'; // Show error if dimensions exceed
                                    errorElement.textContent =
                                        'Icon dimensions should not exceed 700x600 pixels.';
                                    input.value = ''; // Clear the file input
                                } else {
                                    errorElement.style.display =
                                        'none'; // Hide error if dimensions are valid
                                }
                            };
                        };

                        reader.readAsDataURL(file); // Read the image file as a data URL
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const utilityNameInputs = document.querySelectorAll('.utility-name');
            const utilityValueInputs = document.querySelectorAll('.utility-value');
            const parkingTypeInputs = document.querySelectorAll('.parking-type');

            // Utility Name Validation
            utilityNameInputs.forEach(function(input) {
                const errorElement = input.nextElementSibling;
                input.addEventListener('input', function() {
                    if (input.value.trim() === '') {
                        errorElement.style.display = 'block'; // Show error
                    } else {
                        errorElement.style.display = 'none'; // Hide error
                    }
                });
            });

            // Utility Value Validation
            utilityValueInputs.forEach(function(input) {
                const errorElement = input.nextElementSibling;
                input.addEventListener('input', function() {
                    if (input.value.trim() === '') {
                        errorElement.style.display = 'block'; // Show error
                    } else {
                        errorElement.style.display = 'none'; // Hide error
                    }
                });
            });

            // Parking Type Validation
            parkingTypeInputs.forEach(function(select) {
                const errorElement = select.nextElementSibling;
                select.addEventListener('change', function() {
                    if (select.value === '') {
                        errorElement.style.display = 'block'; // Show error
                    } else {
                        errorElement.style.display = 'none'; // Hide error
                    }
                });
            });

            // Real-time validation function
            function validateUtilities() {
                utilityNameInputs.forEach(function(input) {
                    const errorElement = input.nextElementSibling;
                    if (input.value.trim() === '') {
                        errorElement.style.display = 'block'; // Show error
                    } else {
                        errorElement.style.display = 'none'; // Hide error
                    }
                });

                utilityValueInputs.forEach(function(input) {
                    const errorElement = input.nextElementSibling;
                    if (input.value.trim() === '') {
                        errorElement.style.display = 'block'; // Show error
                    } else {
                        errorElement.style.display = 'none'; // Hide error
                    }
                });

                parkingTypeInputs.forEach(function(select) {
                    const errorElement = select.nextElementSibling;
                    if (select.value === '') {
                        errorElement.style.display = 'block'; // Show error
                    } else {
                        errorElement.style.display = 'none'; // Hide error
                    }
                });
            }

            // Call validation initially
            validateUtilities();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.existing-amenity');
            const errorElement = document.getElementById('existingAmenityError');

            // Initially show error if no checkboxes are checked
            function validateExistingAmenities() {
                let isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

                if (isChecked) {
                    errorElement.style.display = 'none'; // Hide error
                } else {
                    errorElement.style.display = 'block'; // Show error
                }
            }

            // Attach event listeners for real-time validation
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', validateExistingAmenities);
            });

            // Call the function initially to display the error message if no checkboxes are selected
            validateExistingAmenities();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let amenitiesIndex = 1;
            let utilitiesIndex = 1;
            let imagesIndex = 1;

            // Add more amenities
            document.querySelector('.add-amenity').addEventListener('click', function() {
                amenitiesIndex++;
                const newAmenitySection = document.querySelector('.amenities-section').cloneNode(true);

                // Update heading for cloned section
                newAmenitySection.querySelector('h5').textContent = `New Amenity ${amenitiesIndex}`;

                // Clear existing input values and update name attributes
                newAmenitySection.querySelectorAll('input').forEach(function(input) {
                    input.name = input.name.replace(/\[\d+\]/, `[${amenitiesIndex}]`);
                    input.value = '';
                });

                // Add remove button for only newly added sets
                const removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.className = 'btn btn-danger remove-amenity mt-2 mb-3';
                removeButton.textContent = 'Remove';
                removeButton.addEventListener('click', function() {
                    newAmenitySection.remove(); // Remove the newly added amenity section
                });

                // Append remove button
                newAmenitySection.appendChild(removeButton);

                // Append the new amenities section
                document.querySelector('.amenities-section').parentNode.appendChild(newAmenitySection);
            });

            // Add more utilities
            document.querySelector('.add-utility').addEventListener('click', function() {
                utilitiesIndex++;
                const newUtilitySection = document.querySelector('.utilities-section').cloneNode(true);
                newUtilitySection.querySelector('h5').textContent = `New Utility ${utilitiesIndex}`;

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
                newImageSection.querySelector('h5').textContent = `New Image ${imagesIndex}`;

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

    <!-- Ensure you include jQuery in your project -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // Load cities for preselected state (Maharashtra)
            let preselectedState = $('#state').val();
            if (preselectedState) {
                loadCities(preselectedState);
            }

            // When the country is changed, load states (already handled above)
            $('#country').change(function() {
                let countryId = $(this).val();
                $('#state').html('<option value="">Select State</option>');
                $('#city').html('<option value="">Select City</option>');

                if (countryId) {
                    loadStates(countryId);
                }
            });

            // When the state is changed, load cities
            $('#state').change(function() {
                let stateId = $(this).val();
                $('#city').html('<option value="">Select City</option>');

                if (stateId) {
                    loadCities(stateId);
                }
            });

            function loadStates(countryId) {
                $.ajax({
                    url: '/api/states/' + countryId,
                    type: 'GET',
                    success: function(states) {
                        $.each(states, function(key, state) {
                            $('#state').append('<option value="' + state.id + '">' + state
                                .name + '</option>');
                        });
                    },
                    error: function() {
                        alert('Failed to fetch states.');
                    }
                });
            }

            function loadCities(stateId) {
                $.ajax({
                    url: '/api/cities/' + stateId,
                    type: 'GET',
                    success: function(cities) {
                        $.each(cities, function(key, city) {
                            $('#city').append('<option value="' + city.id + '">' + city.name +
                                '</option>');
                        });
                    },
                    error: function() {
                        alert('Failed to fetch cities.');
                    }
                });
            }
        });
    </script>
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     let highlightIndex = 1;

        //     // Add more highlights
        //     document.querySelector('.add-highlight').addEventListener('click', function() {
        //         highlightIndex++;
        //         const newHighlightSection = document.querySelector('.highlights-section').cloneNode(true);

        //         // Update heading for cloned section
        //         newHighlightSection.querySelector('h5').textContent = `New Highlight ${highlightIndex}`;

        //         // Clear existing input values and update name attributes
        //         newHighlightSection.querySelectorAll('input').forEach(function(input) {
        //             input.name = input.name.replace(/\[\d+\]/, `[${highlightIndex}]`);
        //             input.value = '';
        //         });

        //         // Add remove button for newly added highlights
        //         const removeButton = document.createElement('button');
        //         removeButton.type = 'button';
        //         removeButton.className = 'btn btn-danger remove-highlight mt-2 mb-3';
        //         removeButton.textContent = 'Remove';
        //         removeButton.addEventListener('click', function() {
        //             newHighlightSection.remove(); // Remove the newly added highlight section
        //         });

        //         // Append remove button
        //         newHighlightSection.appendChild(removeButton);

        //         // Append the new highlights section
        //         document.querySelector('.highlights-section').parentNode.appendChild(newHighlightSection);
        //     });
        // });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let highlightIndex = 1;

            // Add more highlights
            document.querySelector('.add-highlight').addEventListener('click', function() {
                highlightIndex++;
                const newHighlightSection = document.querySelector('.highlights-section').cloneNode(true);

                // Update heading for cloned section
                newHighlightSection.querySelector('h5').textContent = `New Highlight ${highlightIndex}`;

                // Clear existing input values and update name attributes
                newHighlightSection.querySelectorAll('input').forEach(function(input) {
                    input.name = input.name.replace(/\[\d+\]/, `[${highlightIndex}]`);
                    input.value = '';
                });

                // Add remove button for newly added highlights
                const removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.className = 'btn btn-danger remove-highlight mt-2 mb-3';
                removeButton.textContent = 'Remove';
                removeButton.addEventListener('click', function() {
                    newHighlightSection.remove(); // Remove the newly added highlight section
                });

                // Append remove button
                newHighlightSection.appendChild(removeButton);

                // Append the new highlights section
                document.querySelector('.highlights-section').parentNode.appendChild(newHighlightSection);

                // Add error message handling for new highlights
                const error = document.createElement('small');
                error.className = 'text-danger new-highlight-error';
                error.textContent = 'Please enter the highlight name.';
                error.style.display = 'none';
                newHighlightSection.querySelector('.form-group').appendChild(error);
            });

            // Real-time validation for existing highlights checkboxes
            const checkboxes = document.querySelectorAll('.existing-highlight');
            const highlightError = document.getElementById('highlightError');

            // Show the error message initially
            highlightError.style.display = 'block';

            // Function to validate checkboxes
            function validateCheckboxes() {
                let isChecked = false;

                // Check if any checkbox is checked
                checkboxes.forEach(function(checkbox) {
                    if (checkbox.checked) {
                        isChecked = true;
                    }
                });

                // Show or hide the error based on whether a checkbox is checked
                if (isChecked) {
                    highlightError.style.display = 'none';
                } else {
                    highlightError.style.display = 'block';
                }
            }

            // Attach the event listener to each checkbox for real-time validation
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', validateCheckboxes);
            });

            // Call the validation function initially to show the error if no checkboxes are selected
            validateCheckboxes();

            // Real-time validation for new highlight names (optional)
            function validateHighlightNames() {
                document.querySelectorAll('.new-highlight-name').forEach(function(input) {
                    const errorElement = input.closest('.form-group').querySelector('.new-highlight-error');
                    input.addEventListener('input', function() {
                        if (input.value.trim() === '') {
                            errorElement.style.display =
                            'none'; // Hide the error because it's optional
                        } else {
                            errorElement.style.display = 'none'; // No error if the field is filled
                        }
                    });
                });
            }

            // Call validation for highlight names on page load and for newly added highlight sections
            validateHighlightNames();
        });
    </script>

    <!-- Optional: To make it look nicer, include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.landmark-checkbox');
            const button = document.getElementById('dropdownMenuButton');

            function updateButtonLabel() {
                let selected = [];
                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        selected.push(checkbox.nextElementSibling.textContent.trim());
                    }
                });

                if (selected.length > 0) {
                    button.textContent = selected.join(', ');
                } else {
                    button.textContent = 'Select Landmarks';
                }
            }

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateButtonLabel);
            });

            // Initialize with default label
            updateButtonLabel();
        });
    </script>
    {{-- ====================================================va,idation --}}

    <!-- Add JavaScript for Validation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formFields = {
                title: document.getElementById('title'),
                propertyType: document.getElementById('propertyType'),
                bhkType: document.getElementById('bhkType'),
                priceRangeStart: document.getElementById('priceRangeStart'),
                priceRangeEnd: document.getElementById('priceRangeEnd'),
                possessionStatus: document.getElementById('possessionStatus'),
                size: document.getElementById('size'),
                flatArea: document.getElementById('flatArea'),
                completionDate: document.getElementById('completionDate'),
                noOfFlats: document.getElementById('noOfFlats'),
                noOfFloors: document.getElementById('noOfFloors')
            };

            function validateField(field, errorId, errorMessage) {
                field.addEventListener('input', function() {
                    if (!field.value) {
                        document.getElementById(errorId).innerText = errorMessage;
                    } else {
                        document.getElementById(errorId).innerText = '';
                    }
                });
            }

            validateField(formFields.title, 'titleError', 'Title is required');
            validateField(formFields.propertyType, 'propertyTypeError', 'Please select a property type');
            validateField(formFields.bhkType, 'bhkTypeError', 'Please select a BHK type');
            validateField(formFields.priceRangeStart, 'priceRangeStartError', 'Start price is required');
            validateField(formFields.priceRangeEnd, 'priceRangeEndError', 'End price is required');
            validateField(formFields.possessionStatus, 'possessionStatusError', 'Please select possession status');
            validateField(formFields.size, 'sizeError', 'Size is required');
            validateField(formFields.flatArea, 'flatAreaError', 'Flat area is required');
            validateField(formFields.completionDate, 'completionDateError', 'Completion date is required');
            validateField(formFields.noOfFlats, 'noOfFlatsError', 'Number of flats is required');
            validateField(formFields.noOfFloors, 'noOfFloorsError', 'Number of floors is required');
        });
    </script>
    <!-- JavaScript for On-Typing Validation with Initial Error Display -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initially show error messages
            document.getElementById('cityError').style.display = 'block';
            document.getElementById('areaError').style.display = 'block';
            document.getElementById('landmarkError').style.display = 'block';

            // City validation
            document.getElementById('city').addEventListener('change', function() {
                if (this.value === '') {
                    document.getElementById('cityError').style.display = 'block';
                    document.getElementById('cityError').innerText = 'Please select a city.';
                } else {
                    document.getElementById('cityError').style.display = 'none';
                }
            });

            // Area validation
            document.getElementById('area').addEventListener('change', function() {
                if (this.value === '') {
                    document.getElementById('areaError').style.display = 'block';
                    document.getElementById('areaError').innerText = 'Please select an area.';
                } else {
                    document.getElementById('areaError').style.display = 'none';
                }
            });

            // Landmark validation on checkbox change
            document.querySelectorAll('.landmark-checkbox').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    validateLandmarks();
                });
            });

            // Validate Landmarks
            function validateLandmarks() {
                const landmarkCheckboxes = document.querySelectorAll('.landmark-checkbox');
                let isLandmarkSelected = false;
                landmarkCheckboxes.forEach(function(checkbox) {
                    if (checkbox.checked) {
                        isLandmarkSelected = true;
                    }
                });
                if (!isLandmarkSelected) {
                    document.getElementById('landmarkError').style.display = 'block';
                    document.getElementById('landmarkError').innerText = 'Please select at least one landmark.';
                } else {
                    document.getElementById('landmarkError').style.display = 'none';
                }
            }

            // Prevent form submission if validation fails
            document.getElementById('submitBtn').addEventListener('click', function(event) {
                let isValid = true;

                // Validate City
                const city = document.getElementById('city');
                if (city.value === '') {
                    isValid = false;
                    document.getElementById('cityError').style.display = 'block';
                    document.getElementById('cityError').innerText = 'Please select a city.';
                }

                // Validate Area
                const area = document.getElementById('area');
                if (area.value === '') {
                    isValid = false;
                    document.getElementById('areaError').style.display = 'block';
                    document.getElementById('areaError').innerText = 'Please select an area.';
                }

                // Validate Landmarks
                validateLandmarks();
                const landmarkError = document.getElementById('landmarkError').innerText;
                if (landmarkError !== '') {
                    isValid = false;
                }

                if (!isValid) {
                    event.preventDefault(); // Stop form submission if any field is invalid
                }
            });
        });
    </script>
@endsection
