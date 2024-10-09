@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')
        <!-- Back Button -->
        <div class="card-footer text-right">
            <a href="{{ route('properties.index') }}" class="btn btn-secondary">
                <i class="fa-solid fa-arrow-left"></i> Back to Properties List
            </a>
        </div>
        <!-- Single Property Details Header -->
        <div class="card mb-4">
            <div class="card-header">
                <h4>{{ $property->title }} ({{ $property->bhk_type }})</h4>
                <small class="text-muted">{{ $property->property_type }}</small>
            </div>
            <div class="card-body">

                <!-- Property Basic Details -->
                <h5>Basic Details</h5>
                <ul class="list-group mb-3">
                    <li class="list-group-item">
                        <strong>Price Range:</strong>
                        {{ $property->formatted_price_range_start }} - {{ $property->formatted_price_range_end }}
                    </li>
                    <li class="list-group-item">
                        <strong>Status:</strong> {{ $property->possession_status }}
                    </li>
                    <li class="list-group-item">
                        <strong>Size (sqft):</strong> {{ $property->size }}
                    </li>
                    @if ($property->video)
                        <li class="list-group-item">
                            <strong>Video:</strong>
                            <a href="{{ $property->video }}" target="_blank">View Video</a>
                        </li>
                    @endif
                </ul>

                <h5>Location</h5>
                @if ($property->locations->isNotEmpty())
                    @foreach ($property->locations as $location)
                        <ul class="list-group mb-3">
                            <li class="list-group-item"><strong>Country:</strong> {{ $location->country->name }}</li>
                            <li class="list-group-item"><strong>State:</strong> {{ $location->state->name }}</li>
                            <li class="list-group-item"><strong>City:</strong> {{ $location->city->name }}</li>
                            <li class="list-group-item"><strong>Area:</strong> {{ $location->area->area_name }}</li>

                        </ul>
                    @endforeach
                @else
                    <p class="text-muted">Location details not available.</p>
                @endif

                <h5>Landmarks</h5>
                @if ($property->landmarks->isNotEmpty())
                    <ul class="list-group mb-3">
                        @foreach ($property->landmarks as $landmark)
                            <li class="list-group-item">
                                <strong>Landmark:</strong> {{ $landmark->name }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">No landmarks available for this property.</p>
                @endif

                <!-- Property Amenities -->
                <h5>Amenities</h5>
                @if ($property->amenities->isNotEmpty())
                    <ul class="list-group mb-3">
                        @foreach ($property->amenities as $amenity)
                            <li class="list-group-item">
                                <i class="fa-solid fa-check-circle text-success"></i> {{ $amenity->name }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">No amenities listed.</p>
                @endif

                <!-- Property Utilities -->
                <h5>Utilities</h5>
                @if ($property->utilities->isNotEmpty())
                    <ul class="list-group mb-3">
                        @foreach ($property->utilities as $utility)
                            <li class="list-group-item">
                                <strong>{{ $utility->name }}:</strong> {{ $utility->pivot->value }}
                                <small>({{ $utility->pivot->parking_type }})</small>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">No utilities listed.</p>
                @endif


                <!-- Property Images by Category -->
                <h5>Property Images</h5>

                @php
                    // Group images by their category name
                    $imageCategories = $property->images->groupBy(function ($relatedImage) {
                        return $relatedImage->propertyImage->imageCategory->category_name ?? 'Uncategorized';
                    });
                @endphp

                <!-- Display images for each category -->
                @if ($imageCategories->isNotEmpty())
                    @foreach ($imageCategories as $categoryName => $relatedImages)
                        <h6>{{ $categoryName }}</h6>
                        <div class="mb-3">
                            @foreach ($relatedImages as $relatedImage)
                                <!-- Ensure propertyImage and its path exist -->
                                @if ($relatedImage->propertyImage)
                                    <!-- Use asset() to point to the public directory for image path -->
                                    <img src="{{ asset($relatedImage->propertyImage->image) }}" alt="Property Image"
                                        class="img-thumbnail" style="width: 150px; height: auto;">
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                @else
                    <p class="text-muted">No images uploaded.</p>
                @endif


                <!-- Other Sections for Location, Amenities, and Utilities can go here -->

            </div>


        </div>


    </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
