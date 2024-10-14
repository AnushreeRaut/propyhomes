@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')
        <form id="property-form" method="POST" action="{{ route('properties.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Singular Property Details Section -->
            <div class="card mb-4">
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
                        <label for="city">City</label>
                        <select name="locations[city_id]" class="form-control" id="city" required>
                            <option value="">Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>



                    <!-- Area Dropdown -->
                    <div class="form-group">
                        <label for="area">Area</label>
                        <select name="locations[area_id]" class="form-control" id="area" required>
                            <option value="">Select Area</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="landmark">Landmark</label>
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
                                    class="form-check-input">
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
                            <input type="file" name="amenities[0][new][icon_image]" class="form-control amenity-icon-input">
                            <small class="text-danger amenity-icon-error" style="display:none;">Icon size should not be greater than 10KB.</small>
                        </div>

                    </div>

                    <!-- Button to Add More Amenities -->
                    <button type="button" class="btn btn-secondary add-amenity mt-3 mb-3">Add Another Amenity</button>
                </div>
            </div>

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
            </div>

            <!-- Dynamic Property Images Section -->
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
            </div>
            <!-- Singular Section for Special Highlights -->
            <div class="card mb-4">
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
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-4">Submit All Details</button>


        </form>
    </div>

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
            });
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
@endsection
