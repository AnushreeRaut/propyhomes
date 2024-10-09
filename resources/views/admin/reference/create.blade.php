@extends('admin.layout.layout')

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
        <form id="referenceForm" action="{{ route('references.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <label for="name" class="form-label dpage5label">Name</label>
                        <input type="text" class="form-control dpage5input" id="name" name="name"
                            placeholder="Enter here..." value="{{ old('name') }}" required>
                        <small class="text-danger" id="nameError" style="display:none;"></small>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <label for="mobile" class="form-label dpage5label">Mobile Number</label>
                        <input type="text" class="form-control dpage5input" id="mobile" name="mobile"
                            placeholder="Enter here..." value="{{ old('mobile') }}" required>
                        <small class="text-danger" id="mobileError" style="display:none;"></small>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="form-check pr-5">
                    <input class="form-check-input page14checkbox" type="checkbox" name="real_estate" value="1"
                        id="realEstate" onchange="toggleDropdowns()">
                    <label class="form-check-label" for="realEstate">
                        Real Estate
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input page14checkbox" type="checkbox" name="loan" value="1"
                        id="loan" onchange="toggleDropdowns()">
                    <label class="form-check-label" for="loan">
                        Loan
                    </label>
                </div>
            </div>
            <small class="text-danger" id="checkboxError" style="display:none;"></small>
            <div class="row mt-4">
                <div class="col-lg-12 mb-4">
                    <!-- Real Estate Type Dropdown -->
                    <div class="form-group" id="realEstateDropdown" style="display:none;">
                        <label for="real_estate_type">Real Estate Type</label>
                        <select name="real_estate_type" id="real_estate_type" class="form-control">
                            <option value="">Select Real Estate Type</option>
                            <option value="buy">Buy</option>
                            <option value="sell">Sell</option>
                            <option value="rent">Rent</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <!-- Loan Type Dropdown -->
                    <div class="form-group" id="loanDropdown" style="display:none;">
                        <label for="loan_type">Loan Type</label>
                        <select name="loan_type" id="loan_type" class="form-control">
                            <option value="">Select Loan Type</option>
                            <option value="housing loan">Housing Loan</option>
                            <option value="personal loan">Personal Loan</option>
                            <option value="loan for business">Loan for Business</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comments</label>
                <textarea class="form-control dpage5input" id="comment" name="comment" rows="3"></textarea>
            </div>
            <button class="btn px-4 mt-3 me-3 py-1 rounded-3 page3btnbgc" type="submit">
                Submit
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

            document.getElementById('referenceForm').addEventListener('input', function () {
                validateForm();
            });

            function validateForm() {
                // Reset error messages
                document.getElementById('nameError').style.display = 'none';
                document.getElementById('mobileError').style.display = 'none';
                document.getElementById('checkboxError').style.display = 'none';

                let isValid = true;

                // Validate Name
                const name = document.getElementById('name').value.trim();
                const nameRegex = /^[a-zA-Z\s]+$/; // Only letters and spaces allowed
                if (name.length < 3 || !nameRegex.test(name)) {
                    document.getElementById('nameError').innerText = 'Name must be at least 3 characters long and cannot contain numbers.';
                    document.getElementById('nameError').style.display = 'block';
                    isValid = false;
                }

                // Validate Mobile Number
                const mobile = document.getElementById('mobile').value.trim();
                const mobileRegex = /^[0-9]{10}$/; // Allow only 10 digits
                if (!mobileRegex.test(mobile)) {
                    document.getElementById('mobileError').innerText = 'Mobile number must be 10 digits long and contain only numbers.';
                    document.getElementById('mobileError').style.display = 'block';
                    isValid = false;
                }

                // Validate Checkbox
                const realEstateChecked = document.getElementById('realEstate').checked;
                const loanChecked = document.getElementById('loan').checked;
                if (!realEstateChecked && !loanChecked) {
                    document.getElementById('checkboxError').innerText = 'Please select at least one option.';
                    document.getElementById('checkboxError').style.display = 'block';
                    isValid = false;
                }

                return isValid;
            }

            document.getElementById('referenceForm').addEventListener('submit', function (event) {
                if (!validateForm()) {
                    event.preventDefault(); // Prevent form submission if invalid
                }
            });
        </script>
    </div>
@endsection
