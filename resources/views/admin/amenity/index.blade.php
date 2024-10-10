@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')

        <h1 class="ds1col1texth1">Property Amenities</h1>

        <div class="card shadow mb-4">
            <div class="text-right mb-4">
                <div class="btn px-4 mt-3 py-1 mr-4 rounded-3 page3btnbgc">
                    <a href="#" class="page3btnc text-decoration-none active" data-bs-toggle="modal" data-bs-target="#addAmenityModal">Add Amenity</a>
                </div>
            </div>
            <div class="card-body">
                <div class="">
                    <table class="table dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;" class="border-0">
                        <thead style="background-color: #c8a86433 !important;">
                            <tr>
                                <th>#</th>
                                <th>Amenity Name</th>
                                <th>Icon Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($amenities as $amenity)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $amenity->name }}</td>

                                        <td>
                                            @if($amenity->icon_image)
                                                <img src="{{ asset( $amenity->icon_image) }}" alt="{{ $amenity->name }}" width="50" height="50">
                                            @else
                                                No Image
                                            @endif
                                        </td>

                                    <td>
                                        <div class="text-center">
                                            <div class="dropdown">
                                                <button class="text-info border-0 bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#editAmenityModal{{ $amenity->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <form action="{{ route('property_amenities.destroy', $amenity->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this amenity?');">
                                                                <i class="fa-solid fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Edit Amenity Modal -->
                                <div class="modal fade" id="editAmenityModal{{ $amenity->id }}" tabindex="-1" aria-labelledby="editAmenityModalLabel{{ $amenity->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editAmenityModalLabel{{ $amenity->id }}">Edit Amenity</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('property_amenities.update', $amenity->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Amenity Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ $amenity->name }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="icon_image" class="form-label">Icon Image</label>
                                                        <input type="file" class="form-control" id="icon_image" name="icon_image">
                                                        @if ($amenity->icon_image)
                                                            <img src="{{ asset('storage/' . $amenity->icon_image) }}" alt="{{ $amenity->name }}" width="50" height="50" class="mt-2">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update Amenity</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add Amenity Modal -->
        <div class="modal fade" id="addAmenityModal" tabindex="-1" aria-labelledby="addAmenityModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAmenityModalLabel">Add Amenity</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('property_amenities.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Amenity Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="icon_image" class="form-label">Icon Image</label>
                                <input type="file" class="form-control" id="icon_image" name="icon_image">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Amenity</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
