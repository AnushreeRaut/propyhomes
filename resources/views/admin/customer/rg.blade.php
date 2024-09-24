@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">

        <!-- Dashboard Header -->
        <h1 class="ds1col1texth1">Add Employee</h1>

        @include('auth.success-message')
        @include('auth.error-message')
        <!-- Back Button -->
        <div class="text-right">
            <button style="background-color: #c8a864" type="button" class="btn btn-sm rounded-3 px-3 text-white"
                onclick="history.back()">
                <i class="fas fa-arrow-left text-white"></i> Back to previous
            </button>
        </div>

        <div class="container mt-4">
            <ul class="nav nav-tabs" id="detailsTabs" role="tablist">
                <li class="nav-item mr-3" role="presentation">
                    <a class="nav-link active" id="personal-tab" data-bs-toggle="tab" href="#personal" role="tab"
                        aria-controls="personal" aria-selected="true"
                        style="background-color: #c8a864; color:white;">Personal Details</a>
                </li>
                <li class="nav-item mr-3" role="presentation">
                    <a class="nav-link" id="professional-tab" data-bs-toggle="tab" href="#professional" role="tab"
                        aria-controls="professional" aria-selected="false"
                        style="background-color: #c8a864; color:white;">Professional Details</a>
                </li>
                <li class="nav-item mr-3" role="presentation">
                    <a class="nav-link" id="financial-tab" data-bs-toggle="tab" href="#financial" role="tab"
                        aria-controls="financial" aria-selected="false"
                        style="background-color: #c8a864; color:white;">Financial Details</a>
                </li>
                <li class="nav-item mr-3" role="presentation">
                    <a class="nav-link" id="insurance-tab" data-bs-toggle="tab" href="#insurance" role="tab"
                        aria-controls="insurance" aria-selected="false"
                        style="background-color: #c8a864; color:white;">Insurance Details</a>
                </li>
                <li class="nav-item mr-3" role="presentation">
                    <a class="nav-link" id="investment-tab" data-bs-toggle="tab" href="#investment" role="tab"
                        aria-controls="investment" aria-selected="false"
                        style="background-color: #c8a864; color:white;">Investment Details</a>
                </li>
            </ul>
            <form method="POST" action="{{ route('customers.store') }}" id="combinedForm">
                @csrf
                <div class="tab-content mt-3" id="detailsTabContent">
                    <!-- Personal Details -->
                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                        <h4>Personal Details</h4>
                        <!-- Add your personal details content here -->
                        <div class="row">
                            <!-- Name -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="name" class="form-label dpage5label">Name</label>
                                        <input type="text" name="name" id="name" class="form-control dpage5input"
                                            placeholder="Enter here..." required>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="mobile" class="form-label dpage5label">Mobile</label>
                                        <input type="text" name="mobile" id="mobile" class="form-control dpage5input"
                                            placeholder="Enter here..." required>
                                    </div>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="email" class="form-label dpage5label">Email</label>
                                        <input type="email" name="email" id="email"
                                            class="form-control dpage5input" placeholder="Enter here...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="family-details" id="familyMembersContainer">
                            <div class="row family-member" id="family-member-0">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="family[0][name]" class="form-label dpage5label">Family Member
                                            Name</label>
                                        <input type="text" name="family[0][name]" id="family[0][name]"
                                            class="form-control dpage5input">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="family[0][DOB]">Date of Birth</label>
                                        <input type="date" name="family[0][DOB]" id="family[0][DOB]"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="family[0][profession]">Profession</label>
                                        <input type="text" name="family[0][profession]" id="family[0][profession]"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="family[0][relation]">Relation</label>
                                        <select name="family[0][relation]" id="family[0][relation]" class="form-control">
                                            <option value="">Select Relation</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Father">Father</option>
                                            <option value="Daughter">Daughter</option>
                                            <option value="Son">Son</option>
                                            <option value="Sibling">Sibling</option>
                                            <option value="Cousin">Cousin</option>
                                            <option value="Wife">Wife</option>
                                            <option value="Husband">Husband</option>
                                            <option value="Grandchild">Grandchild</option>
                                            <option value="Grandmother">Grandmother</option>
                                            <option value="Grandfather">Grandfather</option>
                                            <option value="Sister-in-Law">Sister-in-Law</option>
                                            <option value="Mother-in-Law">Mother-in-Law</option>
                                            <option value="Father-in-Law">Father-in-Law</option>
                                            <option value="Brother-in-Law">Brother-in-Law</option>
                                            <option value="Nephew">Nephew</option>
                                            <option value="Niece">Niece</option>
                                            <option value="Uncle">Uncle</option>
                                            <option value="Aunty">Aunty</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 mt-4">
                                    <button type="button" class="btn btn-danger remove-family-member"
                                        style="display:none;">×</button>
                                </div>
                            </div>
                        </div>

                        <!-- Add Family Member Button -->
                        <div class="mt-2">
                            <button type="button" class="btn btn-primary" id="addFamilyMemberButton">+</button>
                        </div>

                        <!-- Add more family members as needed -->

                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonPersonal">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonPersonal">Save and
                                Next</button>
                        </div>

                    </div>

                    <!-- Professional Details -->
                    <div class="tab-pane fade" id="professional" role="tabpanel" aria-labelledby="professional-tab">
                        <h4>Professional Details</h4>
                        <div class="row">
                            <!-- Salary -->
                            <!-- Salary -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label class="form-label dpage5label">Salary</label>
                                        <div class="form-check">
                                            <input type="checkbox" name="salary" id="salary" value="1"
                                                class="form-check-input dpage5input">
                                            <label for="salary" class="form-check-label">Is Salaried?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Business -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label class="form-label dpage5label">Business</label>
                                        <div class="form-check">
                                            <input type="checkbox" name="business" id="business" value="1"
                                                class="form-check-input dpage5input">
                                            <label for="business" class="form-check-label">Owns a Business?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <!-- Name of Organization -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="name_of_organization" class="form-label dpage5label">Name of
                                            Organization</label>
                                        <input type="text" name="name_of_organization" id="name_of_organization"
                                            class="form-control dpage5input" placeholder="Enter organization name">
                                    </div>
                                </div>
                            </div>

                            <!-- Job Profile -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="job_profile" class="form-label dpage5label">Job Profile</label>
                                        <input type="text" name="job_profile" id="job_profile"
                                            class="form-control dpage5input" placeholder="Enter job profile">
                                    </div>
                                </div>
                            </div>

                            <!-- Income Slab -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="income_slab" class="form-label dpage5label">Income Slab</label>
                                        <select name="income_slab" id="income_slab" class="form-control dpage5input">
                                            <option value="Below 5 lacs">Below 5 lacs</option>
                                            <option value="Rs 5 lacs to Rs 10 lacs">Rs 5 lacs to Rs 10 lacs</option>
                                            <option value="Rs 10 lacs to Rs 20 lacs">Rs 10 lacs to Rs 20 lacs</option>
                                            <option value="Above Rs 20 lacs">Above Rs 20 lacs</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Nature of Business -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="nature_of_business" class="form-label dpage5label">Nature of
                                            Business</label>
                                        <select name="nature_of_business" id="nature_of_business"
                                            class="form-control dpage5input">
                                            <option value="Trading">Trading</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="Contractor">Contractor</option>
                                            <option value="Service Provider">Service Provider</option>
                                            <option value="Professional">Professional</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Nature of Activity -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="nature_of_activity" class="form-label dpage5label">Nature of
                                            Activity</label>
                                        <textarea name="nature_of_activity" id="nature_of_activity" class="form-control dpage5input"
                                            placeholder="Describe the nature of activity"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Turnover -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="turnover" class="form-label dpage5label">Turnover</label>
                                        <input type="text" name="turnover" id="turnover"
                                            class="form-control dpage5input" placeholder="Enter turnover">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add your professional details content here -->
                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonProfessional">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonProfessional">Save and
                                Next</button>
                        </div>
                    </div>

                    <!-- Financial Details -->
                
                    <!-- Insurance Details -->
                    <div class="tab-pane fade" id="insurance" role="tabpanel" aria-labelledby="insurance-tab">
                        <h4>Insurance Details</h4>
                        <!-- Add your insurance details content here -->
                        <div class="row">
                            <!-- Type of Insurance Company -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="type_of_insurance_company" class="form-label dpage5label">Type of
                                            Insurance Company</label>
                                        <input type="text" name="type_of_insurance_company"
                                            id="type_of_insurance_company" class="form-control dpage5input"
                                            placeholder="Enter insurance company type">
                                    </div>
                                </div>
                            </div>

                            <!-- Type of Policy -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="type_of_policy" class="form-label dpage5label">Type of Policy</label>
                                        <input type="text" name="type_of_policy" id="type_of_policy"
                                            class="form-control dpage5input" placeholder="Enter policy type">
                                    </div>
                                </div>
                            </div>

                            <!-- Premium -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="premium" class="form-label dpage5label">Premium</label>
                                        <input type="text" name="premium" id="premium"
                                            class="form-control dpage5input" placeholder="Enter premium amount">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Policy Start Date -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="policy_start_date" class="form-label dpage5label">Policy Start
                                            Date</label>
                                        <input type="date" name="policy_start_date" id="policy_start_date"
                                            class="form-control dpage5input">
                                    </div>
                                </div>
                            </div>

                            <!-- Policy End Date -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="policy_end_date" class="form-label dpage5label">Policy End
                                            Date</label>
                                        <input type="date" name="policy_end_date" id="policy_end_date"
                                            class="form-control dpage5input">
                                    </div>
                                </div>
                            </div>

                            <!-- Comment -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="comment" class="form-label dpage5label">Comment</label>
                                        <textarea name="comment" id="comment" class="form-control dpage5input" placeholder="Enter your comment"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonInsurance">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonInsurance">Save and
                                Next</button>
                        </div>
                    </div>

                    <!-- Investment Details -->
                    <div class="tab-pane fade" id="investment" role="tabpanel" aria-labelledby="investment-tab">
                        <h4>Investment Details</h4>
                        <div class="row">
                            <!-- Financial Institute Name -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="financial_institute_name" class="form-label dpage5label">Financial
                                            Institute Name</label>
                                        <input type="text" name="financial_institute_name"
                                            id="financial_institute_name" class="form-control dpage5input"
                                            placeholder="Enter institute name">
                                    </div>
                                </div>
                            </div>

                            <!-- Type of Investment -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="type_of_investment" class="form-label dpage5label">Type of
                                            Investment</label>
                                        <input type="text" name="type_of_investment" id="type_of_investment"
                                            class="form-control dpage5input" placeholder="Enter investment type">
                                    </div>
                                </div>
                            </div>

                            <!-- Investments (Monthly/Yearly) -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="investments" class="form-label dpage5label">Investments</label>
                                        <select name="investments" id="investments" class="form-control dpage5input">
                                            <option value="Monthly">Monthly</option>
                                            <option value="Yearly">Yearly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Start Date -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="start_date" class="form-label dpage5label">Start Date</label>
                                        <input type="date" name="start_date" id="start_date"
                                            class="form-control dpage5input">
                                    </div>
                                </div>
                            </div>

                            <!-- End Date -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="end_date" class="form-label dpage5label">End Date</label>
                                        <input type="date" name="end_date" id="end_date"
                                            class="form-control dpage5input">
                                    </div>
                                </div>
                            </div>

                            <!-- Comments -->
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="comments" class="form-label dpage5label">Comments</label>
                                        <textarea name="comments" id="comments" class="form-control dpage5input" placeholder="Enter comments"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonInvestment">Back</button>
                        </div>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
    {{-- =============================================================================================== --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let familyMemberCount = 1; // Start from 1 since we already have 0

            document.getElementById('addFamilyMemberButton').addEventListener('click', function() {
                // Create a new family member row
                const newFamilyMemberRow = document.createElement('div');
                newFamilyMemberRow.className = 'row family-member';
                newFamilyMemberRow.id = 'family-member-' + familyMemberCount;

                newFamilyMemberRow.innerHTML = `
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="family[${familyMemberCount}][name]" class="form-label dpage5label">Family Member Name</label>
                    <input type="text" name="family[${familyMemberCount}][name]" id="family[${familyMemberCount}][name]" class="form-control dpage5input">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label for="family[${familyMemberCount}][DOB]">Date of Birth</label>
                    <input type="date" name="family[${familyMemberCount}][DOB]" id="family[${familyMemberCount}][DOB]" class="form-control">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="family[${familyMemberCount}][profession]">Profession</label>
                    <input type="text" name="family[${familyMemberCount}][profession]" id="family[${familyMemberCount}][profession]" class="form-control">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="family[${familyMemberCount}][relation]">Relation</label>
                    <select name="family[${familyMemberCount}][relation]" id="family[${familyMemberCount}][relation]" class="form-control">
                        <option value="">Select Relation</option>
                        <option value="Mother">Mother</option>
                        <option value="Father">Father</option>
                        <option value="Daughter">Daughter</option>
                        <option value="Son">Son</option>
                        <option value="Sibling">Sibling</option>
                        <option value="Cousin">Cousin</option>
                        <option value="Wife">Wife</option>
                        <option value="Husband">Husband</option>
                        <option value="Grandchild">Grandchild</option>
                        <option value="Grandmother">Grandmother</option>
                        <option value="Grandfather">Grandfather</option>
                        <option value="Sister-in-Law">Sister-in-Law</option>
                        <option value="Mother-in-Law">Mother-in-Law</option>
                        <option value="Father-in-Law">Father-in-Law</option>
                        <option value="Brother-in-Law">Brother-in-Law</option>
                        <option value="Nephew">Nephew</option>
                        <option value="Niece">Niece</option>
                        <option value="Uncle">Uncle</option>
                        <option value="Aunty">Aunty</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-1 mt-4">
                <button type="button" class="btn btn-danger remove-family-member">×</button>
            </div>
        `;

                // Append the new row to the container
                document.getElementById('familyMembersContainer').appendChild(newFamilyMemberRow);
                familyMemberCount++;

                // Show the remove button for the new row
                const removeButton = newFamilyMemberRow.querySelector('.remove-family-member');
                removeButton.style.display = 'inline-block';

                // Add event listener for removing the family member
                removeButton.addEventListener('click', function() {
                    newFamilyMemberRow.remove();
                });
            });
        });
    </script>
    {{-- ======================= --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let rowCount = 1; // Track the number of rows

            // Add row functionality
            document.getElementById('add-row-btn').addEventListener('click', function() {
                rowCount++; // Increment row count
                const container = document.getElementById('financial-details-container');
                const newRow = document.createElement('div');
                newRow.className = 'row financial-row mt-4'; // Add margin-top for better spacing

                // Creating new row of input fields dynamically
                newRow.innerHTML = `
                    <h5>Loan ${rowCount}</h5>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="type_of_bank_${rowCount}" class="form-label dpage5label">Type of Bank</label>
                                <input type="text" name="type_of_bank[]" class="form-control dpage5input" placeholder="Enter Type of Bank">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="loan_type_${rowCount}" class="form-label dpage5label">Loan Type</label>
                                <input type="text" name="loan_type[]" class="form-control dpage5input" placeholder="Enter Loan Type">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="loan_amount_${rowCount}" class="form-label dpage5label">Loan Amount</label>
                                <input type="number" step="0.01" name="loan_amount[]" class="form-control dpage5input" placeholder="Enter Loan Amount">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="EMI_${rowCount}" class="form-label dpage5label">EMI</label>
                                <input type="number" step="0.01" name="EMI[]" class="form-control dpage5input" placeholder="Enter EMI">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="start_date_${rowCount}" class="form-label dpage5label">Start Date</label>
                                <input type="date" name="start_date[]" class="form-control dpage5input">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-start">
                        <div class="form-group flex-grow-1">
                            <label for="comment_${rowCount}" class="form-label dpage5label">Comment</label>
                            <textarea name="comment[]" class="form-control dpage5input" placeholder="Enter Comment" style="height: 38px;"></textarea>
                        </div>
                        <div class="ms-2">
                            <button type="button" class="btn btn-danger remove-row">Cancel</button>
                        </div>
                    </div>
                `;

                // Append the new row
                container.appendChild(newRow);

                // Add event listener for the cancel button
                newRow.querySelector('.remove-row').addEventListener('click', function() {
                    newRow.remove(); // Remove this row when "Cancel" button is clicked
                });
            });
        });
    </script>

    {{-- ======================= --}}
    <script>
        $(document).ready(function() {
            // Store the last active tab in local storage
            $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });

            // Get the last active tab and set it on page load
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                $('a[href="' + activeTab + '"]').tab('show');
            } else {
                // Default to the first tab if no tab is saved
                $('a[data-bs-toggle="tab"]').first().tab('show');
            }

            // Save form data on input change
            $('#combinedForm input, #combinedForm select, #combinedForm textarea').on('change', function() {
                saveFormData();
            });

            // Load data from local storage on page load
            loadFormData();

            // Function to save form data to local storage
            function saveFormData() {
                const formData = {};
                $('#combinedForm input, #combinedForm select, #combinedForm textarea').each(function() {
                    const name = $(this).attr('name');
                    if (name) {
                        formData[name] = $(this).val();
                    }
                });
                localStorage.setItem('combinedFormData', JSON.stringify(formData));
            }

            // Function to load form data from local storage
            function loadFormData() {
                const savedData = JSON.parse(localStorage.getItem('combinedFormData'));
                if (savedData) {
                    for (const key in savedData) {
                        const element = $('[name="' + key + '"]');
                        if (element.length) {
                            element.val(savedData[key]);
                        }
                    }
                }
            }

            // Clear local storage after form submission
            $('#combinedForm').on('submit', function() {
                // After successful form submission, clear local storage
                localStorage.removeItem('combinedFormData');
                localStorage.removeItem('activeTab');
            });
        });
    </script>

    <!-- Script to save and navigate -->
    <script>
        $(document).ready(function() {
            // Store the last active tab in local storage
            $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });

            // Get the last active tab and set it on page load
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                $('#detailsTabs a[href="' + activeTab + '"]').tab('show');
            }

            // Get all tabs
            var tabs = Array.from($('#detailsTabs .nav-link'));
            var currentIndex = tabs.findIndex(tab => $(tab).attr('href') ===
                `#${$('.tab-pane.show.active').attr('id')}`);

            // Save and Next Button handlers
            $('#saveNextButtonPersonal').click(function() {
                navigateTab(1);
            });
            $('#saveNextButtonProfessional').click(function() {
                navigateTab(1);
            });
            $('#saveNextButtonFinancial').click(function() {
                navigateTab(1);
            });
            $('#saveNextButtonInsurance').click(function() {
                navigateTab(1);
            });
            $('#saveNextButtonInvestment').click(function() {
                navigateTab(1);
            });

            // Back Button handlers
            $('#backButtonPersonal').click(function() {
                navigateTab(-1);
            });
            $('#backButtonProfessional').click(function() {
                navigateTab(-1);
            });
            $('#backButtonFinancial').click(function() {
                navigateTab(-1);
            });
            $('#backButtonInsurance').click(function() {
                navigateTab(-1);
            });
            $('#backButtonInvestment').click(function() {
                navigateTab(-1);
            });

            function navigateTab(direction) {
                // Determine new index based on direction
                currentIndex += direction;
                if (currentIndex >= 0 && currentIndex < tabs.length) {
                    $(tabs[currentIndex]).tab('show');
                    localStorage.setItem('activeTab', $(tabs[currentIndex]).attr('href'));
                }
            }
        });
    </script>
@endsection
