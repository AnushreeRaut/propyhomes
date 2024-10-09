@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')

        <div class="container mt-4">
            <!-- Dashboard Header -->
            <h1 class="ds1col1texth1">Reference</h1>
            <!-- Back Button -->
            <div class="text-right">
                <button style="background-color: #c8a864" type="button" class="btn btn-sm rounded-3 px-3 text-white mb-3"
                    onclick="history.back()">
                    <i class="fas fa-arrow-left text-white"></i> Back to previous
                </button>
            </div>
            <!-- Reference Details in Table Format -->
            <div class="card mb-4 shadow">
                <div class="card-header ds1c2btnbg text-white pb-5">
                    <h3>Reference Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{ $reference->name }}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{ $reference->mobile }}</td>
                            </tr>
                            <tr>
                                <th>Real Estate</th>
                                <td>{{ $reference->real_estate ? 'Yes' : 'No' }}</td>
                            </tr>
                            @if ($reference->real_estate)
                                <tr>
                                    <th>Real Estate Type</th>
                                    <td>{{ $reference->real_estate_type }}</td>
                                </tr>
                            @endif
                            <tr>
                                <th>Loan</th>
                                <td>{{ $reference->loan ? 'Yes' : 'No' }}</td>
                            </tr>
                            @if ($reference->loan)
                                <tr>
                                    <th>Loan Type</th>
                                    <td>{{ ucfirst($reference->loan_type) }}</td>
                                </tr>
                            @endif
                            <tr>
                                <th>Comment</th>
                                <td>{{ $reference->comment ?? 'No comment' }}</td>
                            </tr>
                            <tr>
                                <th>Added By</th>
                                <td>{{ $reference->addedBy->name ?? 'Unknown' }}</td>
                            </tr>
                            <tr>
                                <th>Updated By</th>
                                <td>{{ $reference->updatedBy->name ?? 'Unknown' }}</td>
                            </tr>
                            <tr>
                                <th>Is Deleted</th>
                                <td>{{ $reference->is_delete ? 'Yes' : 'No' }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $reference->created_at->format('d-m-Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $reference->updated_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
