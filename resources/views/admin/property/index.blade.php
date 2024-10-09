@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')

        <!-- Dashboard Header -->
        <h1 class="ds1col1texth1">Properties</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="text-right mb-4">
                <!-- Add Property Button -->
                <div class="btn px-4 mt-3 py-1 mr-4 rounded-3 page3btnbgc">
                    <a href="{{ route('properties.create') }}" class="page3btnc text-decoration-none active">Add Property</a>
                </div>
            </div>
            <div class="card-body">
                <div class="">
                    <table class="table dataTable" id="dataTable" width="100%" cellspacing="0" role="grid"
                        aria-describedby="dataTable_info" style="width: 100%;" class="border-0">
                        <thead style="background-color: #c8a86433 !important;">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>BHK</th>
                                <th>Price Range</th>
                                <th>Status</th>
                                <th>Size (sqft)</th>
                                <th>Amenities</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $property->title }}</td>
                                    <td>{{ $property->property_type }}</td>
                                    <td>{{ $property->bhk_type }}</td>
                                    <td>{{ $property->formatted_price_range_start }} - {{ $property->formatted_price_range_end }}</td>
                                    <td>{{ $property->possession_status }}</td>
                                    <td>{{ $property->size }}</td>
                                    <td>
                                        @foreach ($property->amenities as $amenity)
                                            {{ $amenity->name }}{{ $loop->last ? '' : ', ' }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <!-- Dropdown button -->
                                            <div class="dropdown">
                                                <button class="text-info border-0 bg-transparent dropdown-toggle"
                                                    type="button" id="dropdownMenuButton{{ $property->id }}"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $property->id }}">
                                                    <!-- View Button -->
                                                    <li>
                                                        <a class="dropdown-item text-success" href="{{ route('properties.view', $property->id) }}">
                                                            <i class="fa-solid fa-eye"></i> View
                                                        </a>
                                                    </li>
                                                    <!-- Edit Button -->
                                                    <li>
                                                        <a class="dropdown-item text-primary" href="{{ route('properties.edit', $property->id) }}">
                                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                                        </a>
                                                    </li>
                                                    <!-- Delete Button -->
                                                    <li>
                                                        <form action="{{ route('properties.destroy', $property->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this property?');">
                                                                <i class="fa-solid fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
