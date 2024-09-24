@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')

        <!-- Page Header -->
        <h1 class="ds1col1texth1">Call Back Request</h1>

        <!-- Subscription List -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="">

                    <table class="table dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" style="width: 100%;" class="border-0">
                        <thead style="background-color: #c8a86433 !important;">
                            <tr>
                                <th>#</th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($phoneRequests as $request)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="tel:{{ $request->phone_number }}" style="text-decoration: none; color: inherit;">
                                            {{ $request->phone_number }}
                                        </a>
                                    </td>
                                    <td class="d-flex align-items-center">
                                        <!-- Telephone link to initiate a call -->
                                        <a href="tel:{{ $request->phone_number }}" class="btn btn-success btn-sm me-2" title="Call">
                                            <i class="fas fa-phone-alt"></i>
                                        </a>
                                        <form action="{{ route('phone_requests.destroy', $request->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this request?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-3 btn btn-danger btn-sm" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Ensure to include Font Awesome CDN in your head if not already included -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS for alert functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
