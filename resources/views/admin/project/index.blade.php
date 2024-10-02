@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')

        <!-- Page Header -->
        <h1 class="ds1col1texth1">Project</h1>

        <!-- Subscription List -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="">

                    <table class="table dataTable" id="dataTable" width="100%" cellspacing="0" role="grid"
                        aria-describedby="dataTable_info" style="width: 100%;" class="border-0">
                        <thead style="background-color: #c8a86433 !important;">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Price Range</th>
                                <th>Google Link</th>
                                <th>Actions</th> <!-- Optional actions like edit/delete -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->location }}</td>
                                    <td>{{ $project->price_range_start }} - {{ $project->price_range_end }}</td>
                                    <td>
                                        <a href="{{ $project->google_link }}"
                                            target="_blank">{{ $project->google_link }}</a>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <!-- Dropdown button -->
                                            <div class="dropdown">
                                                <button class="text-info border-0 bg-transparent dropdown-toggle"
                                                    type="button" id="dropdownMenuButton{{ $project->id }}"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton{{ $project->id }}">
                                                    <!-- View Button -->
                                                    <li>
                                                        <a class="dropdown-item text-success"
                                                            href="{{ route('projects.view', $project->id) }}">
                                                            <i class="fa-solid fa-eye"></i> View
                                                        </a>
                                                    </li>

                                                    <!-- Edit Button -->
                                                    {{-- <li>
                                                        <a class="dropdown-item text-primary"
                                                            href="">
                                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                                        </a>
                                                    </li> --}}

                                                    <!-- Delete Button -->
                                                    {{-- <li>
                                                        <form action="{{ route('projects.destroy', $project->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item text-danger"
                                                                onclick="return confirm('Are you sure you want to delete this project?');">
                                                                <i class="fa-solid fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </li> --}}
                                                </ul>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Ensure to include Font Awesome CDN in your head if not already included -->
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS for alert functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
