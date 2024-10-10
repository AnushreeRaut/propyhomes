@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')

        <h1 class="ds1col1texth1">Special Highlights</h1>

        <div class="card shadow mb-4">
            <div class="text-right mb-4">
                <div class="btn px-4 mt-3 py-1 mr-4 rounded-3 page3btnbgc">
                    <a href="#" class="page3btnc text-decoration-none active" data-bs-toggle="modal" data-bs-target="#addSpecialHighlightModal">Add Special Highlight</a>
                </div>
            </div>
            <div class="card-body">
                <div class="">
                    <table class="table dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;" class="border-0">
                        <thead style="background-color: #c8a86433 !important;">
                            <tr>
                                <th>#</th>
                                <th>Special Highlight Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($specialHighlights as $specialHighlight)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $specialHighlight->name }}</td>
                                    <td>
                                        <div class="text-center">
                                            <div class="dropdown">
                                                <button class="text-info border-0 bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#editSpecialHighlightModal{{ $specialHighlight->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <form action="{{ route('special_highlights.destroy', $specialHighlight->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this special highlight?');">
                                                                <i class="fa-solid fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Edit Special Highlight Modal -->
                                <div class="modal fade" id="editSpecialHighlightModal{{ $specialHighlight->id }}" tabindex="-1" aria-labelledby="editSpecialHighlightModalLabel{{ $specialHighlight->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editSpecialHighlightModalLabel{{ $specialHighlight->id }}">Edit Special Highlight</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('special_highlights.update', $specialHighlight->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Special Highlight Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ $specialHighlight->name }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update Special Highlight</button>
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

        <!-- Add Special Highlight Modal -->
        <div class="modal fade" id="addSpecialHighlightModal" tabindex="-1" aria-labelledby="addSpecialHighlightModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSpecialHighlightModalLabel">Add Special Highlight</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('special_highlights.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Special Highlight Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Special Highlight</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
