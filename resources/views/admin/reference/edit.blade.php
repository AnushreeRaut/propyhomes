@extends('admin.layout.layout')

{{-- @section('links')
@endsection --}}

@section('content')
    <div id="content" class="p-4">
        <!-- Dashboard Header -->
        <h1 class="ds1col1texth1">Add Reference</h1>
          <!-- Back Button -->
          <div class="text-right">
            <button style="background-color: #c8a864" type="button" class="btn btn-sm rounded-3 px-3 text-white" onclick="history.back()">
                <i class="fas fa-arrow-left text-white"></i> Back to previous
            </button>
        </div>
        {{-- Display Success Message --}}
        @include('auth.success-message')
        {{-- Display Error Message --}}
        @include('auth.error-message')
        {{-- Display Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('references.update', $reference->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- This will ensure the form submits as an update -->
            <!-- Name Field -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $reference->name) }}" required>
                    </div>
                </div>
                <!-- Mobile Field -->
                <div class="col-lg-6">
                    <div class="mb-4">
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile" name="mobile"
                            value="{{ old('mobile', $reference->mobile) }}" required>
                    </div>
                </div>
            </div>
            <!-- Checkboxes for Real Estate and Loan -->
            <div class="d-flex">
                <div class="form-check pr-5">
                    <input class="form-check-input" type="checkbox" name="real_estate" id="realEstate" value="1"
                        {{ $reference->real_estate ? 'checked' : '' }} onchange="toggleDropdowns()">
                    <label class="form-check-label" for="realEstate">
                        Real Estate
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="loan" id="loan" value="1"
                        {{ $reference->loan ? 'checked' : '' }} onchange="toggleDropdowns()">
                    <label class="form-check-label" for="loan">
                        Loan
                    </label>
                </div>
            </div>
            <!-- Dropdowns -->
            <div class="row mt-4">
                <div class="col-lg-12 mb-4">
                    <!-- Real Estate Type Dropdown -->
                    <div class="form-group" id="realEstateDropdown"
                        style="display: {{ $reference->real_estate ? 'block' : 'none' }};">
                        <label for="real_estate_type">Real Estate Type</label>
                        <select name="real_estate_type" id="real_estate_type" class="form-control">
                            <option value="">Select Real Estate Type</option>
                            <option value="buy"
                                {{ old('real_estate_type', $reference->real_estate_type) == 'buy' ? 'selected' : '' }}>Buy
                            </option>
                            <option value="sell"
                                {{ old('real_estate_type', $reference->real_estate_type) == 'sell' ? 'selected' : '' }}>Sell
                            </option>
                            <option value="rent"
                                {{ old('real_estate_type', $reference->real_estate_type) == 'rent' ? 'selected' : '' }}>
                                Rent</option>
                            <option value="other"
                                {{ old('real_estate_type', $reference->real_estate_type) == 'other' ? 'selected' : '' }}>
                                Other</option>
                        </select>
                    </div>
             <!-- Loan Type Dropdown -->
<div class="form-group" id="loanDropdown" style="display: {{ $reference->loan ? 'block' : 'none' }};">
    <label for="loan_type">Loan Type</label>
    <select name="loan_type" id="loan_type" class="form-control">
        <option value="">Select Loan Type</option>
        <option value="housing loan"
            {{ old('loan_type', $reference->loan_type) == 'housing loan' ? 'selected' : '' }}>Housing Loan</option>
        <option value="personal loan"
            {{ old('loan_type', $reference->loan_type) == 'personal loan' ? 'selected' : '' }}>Personal Loan</option>
        <option value="loan for business"
            {{ old('loan_type', $reference->loan_type) == 'loan for business' ? 'selected' : '' }}>Loan for Business</option>
        <option value="other"
            {{ old('loan_type', $reference->loan_type) == 'other' ? 'selected' : '' }}>Other</option>
    </select>
</div>

                </div>
            </div>
            <!-- Description -->
            <div class="mb-3">
                <label for="comment" class="form-label">comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3">{{ old('comment', $reference->comment) }}</textarea>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn px-5 py-1 mt-3 rounded-3 page3btnbgc text-decoration-none active">
                Update
            </button>
        </form>
        <!-- JavaScript -->
        <script>
            function toggleDropdowns() {
                const realEstateCheckbox = document.getElementById('realEstate');
                const loanCheckbox = document.getElementById('loan');
                const realEstateDropdown = document.getElementById('realEstateDropdown');
                const loanDropdown = document.getElementById('loanDropdown');
                // Show or hide the Real Estate dropdown
                realEstateDropdown.style.display = realEstateCheckbox.checked ? 'block' : 'none';
                // Show or hide the Loan dropdown
                loanDropdown.style.display = loanCheckbox.checked ? 'block' : 'none';
            }
            // Call toggleDropdowns on page load in case of checked boxes
            document.addEventListener('DOMContentLoaded', toggleDropdowns);
        </script>
    </div>
@endsection
