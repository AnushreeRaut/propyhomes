@extends('admin.layout.layout')

@section('content')
<div id="content" class="p-4">
    @include('auth.success-message')
    @include('auth.error-message')

    <!-- Page Header -->
    <h1 class="ds1col1texth1">Subscriptions</h1>

    <!-- Subscription List -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="">
                <table class="table dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" style="width: 100%;" class="border-0">
                    <thead style="background-color: #c8a86433 !important;">
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subscriptions as $subscription)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $subscription->email }}</td>
                                <td>
                                    <div class="text-center">
                                        <!-- Delete Button -->
                                        <form action="{{ route('subscriptions.destroy', $subscription->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this subscription?');">
                                                Delete
                                            </button>
                                        </form>
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

<!-- Bootstrap JS for alert functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
