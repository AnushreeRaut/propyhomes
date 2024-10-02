@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')

        <div class="container mt-4">
            <!-- Project Cover and Banner Image -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3>{{ $project->title }}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Cover Image -->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h5>Cover Image</h5>
                                @if ($project->cover_image)
                                    <img src="{{ asset($project->cover_image) }}" alt="Cover Image" class="img-fluid">
                                @else
                                    <p>No cover image available.</p>
                                @endif
                            </div>
                        </div>
                        <!-- Banner Image -->
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h5>Banner Image</h5>
                                @if ($project->banner_image)
                                    <img src="{{ asset($project->banner_image) }}" alt="Banner Image" class="img-fluid">
                                @else
                                    <p>No banner image available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Details -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Project Information</h4>
                </div>
                <div class="card-body">
                    <p><strong>Location:</strong> {{ $project->location }}</p>
                    <p><strong>Address:</strong> {{ $project->address }}</p>
                    <p><strong>Price Range:</strong> {{ $project->price_range_start }} - {{ $project->price_range_end }}</p>
                    <p><strong>Description:</strong> {{ $project->description }}</p>
                    <p><strong>Google Maps Link:</strong> <a href="{{ $project->google_link }}" target="_blank">View on Maps</a></p>
                    <p><strong>Video URL:</strong> <a href="{{ $project->video }}" target="_blank">Watch Video</a></p>
                </div>
            </div>

            <!-- Property Details -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Details</h4>
                </div>
                <div class="card-body">
                    @if ($project->propertyDetail && count($project->propertyDetail))
                        <ul>
                            @foreach ($project->propertyDetail as $detail)
                                <li>{{ $detail->title }}: {{ $detail->value }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No property details available.</p>
                    @endif
                </div>
            </div>

            <!-- Property Units -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Property Units</h4>
                </div>
                <div class="card-body">
                    @if ($propertyUnits && count($propertyUnits))
                        <div class="row">
                            @foreach ($propertyUnits as $unit)
                                <div class="col-lg-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>{{ $unit->title }}</h5>
                                            <p>{{ json_decode($unit->description, true) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No property units available.</p>
                    @endif
                </div>
            </div>

            <!-- Outdoor Features -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Outdoor Features</h4>
                </div>
                <div class="card-body">
                    @if ($outdoorFeatures && count($outdoorFeatures))
                        @foreach ($outdoorFeatures as $feature)
                            <div class="mb-4">
                                <h5>{{ $feature->title }}</h5>
                                <p>{{ json_decode($feature->description, true) }}</p>
                            </div>
                        @endforeach
                    @else
                        <p>No outdoor features available.</p>
                    @endif
                </div>
            </div>

            <!-- Project Images -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Project Images</h4>
                </div>
                <div class="card-body">
                    @if ($project->projectImages && count($project->projectImages))
                        <div class="row">
                            @foreach ($project->projectImages as $image)
                                <div class="col-lg-3 mb-3">
                                    <img src="{{ asset($image->image) }}" alt="{{ $image->title }}" class="img-fluid">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No project images available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
