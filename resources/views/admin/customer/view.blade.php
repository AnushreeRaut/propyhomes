@extends('admin.layout.layout')

@section('content')
<div id="content" class="p-4">
<div class="text-right mt-3">
    <button style="background-color: #c8a864" type="button" class="btn btn-sm rounded-3 px-3 text-white"
        onclick="history.back()">
        <i class="fas fa-arrow-left text-white"></i> Back to previous
    </button>
</div>
<div class="container mt-5" style="background: #C8A864; padding: 20px; border-radius: 10px;">
    <h2 class="text-center text-white mb-4">{{ $customer->name }}'s Details</h2>

    <div class="card mb-4" style="border: 2px solid #fff; border-radius: 10px;">
        <div class="card-body">
            <h5 class="card-title">Customer Information</h5>
            <p><strong>Mobile:</strong> {{ $customer->mobile }}</p>
            <p><strong>Email:</strong> {{ $customer->email }}</p>
            <p><strong>Organization:</strong> {{ $customer->name_of_organization }}</p>
            <p><strong>Job Profile:</strong> {{ $customer->job_profile }}</p>
            <p><strong>Income Slab:</strong> {{ $customer->income_slab }}</p>
            <p><strong>Nature of Business:</strong> {{ $customer->nature_of_business }}</p>
            <p><strong>Turnover:</strong> {{ $customer->turnover }}</p>
        </div>
    </div>

    <div class="card mb-4" style="border: 2px solid #fff; border-radius: 10px;">
        <div class="card-body">
            <h5 class="card-title">Family Details</h5>
            @if($customer->family->isEmpty())
                <p>No family details found.</p>
            @else
                <ul>
                    @foreach($customer->family as $member)
                        <li>{{ $member->relation }}: {{ $member->name }} (DOB: {{ $member->DOB }})</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <div class="card mb-4" style="border: 2px solid #fff; border-radius: 10px;">
        <div class="card-body">
            <h5 class="card-title">Loans</h5>
            @if($customer->loans->isEmpty())
                <p>No loans found.</p>
            @else
                <ul>
                    @foreach($customer->loans as $loan)
                        <li>{{ $loan->loan_type }} from {{ $loan->type_of_bank }} - Amount: {{ $loan->loan_amount }} (EMI: {{ $loan->EMI }})</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <div class="card mb-4" style="border: 2px solid #fff; border-radius: 10px;">
        <div class="card-body">
            <h5 class="card-title">Investments</h5>
            @if($customer->investments->isEmpty())
                <p>No investments found.</p>
            @else
                <ul>
                    @foreach($customer->investments as $investment)
                        <li>{{ $investment->type_of_investment }} with {{ $investment->financial_institute_name }} - {{ $investment->investments }} (Start: {{ $investment->start_date }} - End: {{ $investment->end_date }})</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <div class="card mb-4" style="border: 2px solid #fff; border-radius: 10px;">
        <div class="card-body">
            <h5 class="card-title">Insurances</h5>
            @if($customer->insurances->isEmpty())
                <p>No insurances found.</p>
            @else
                <ul>
                    @foreach($customer->insurances as $insurance)
                        <li>{{ $insurance->type_of_policy }} from {{ $insurance->type_of_insurance_company }} - Premium: {{ $insurance->premium }} (Policy Duration: {{ $insurance->policy_start_date }} to {{ $insurance->policy_end_date }})</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
</div>
@endsection
