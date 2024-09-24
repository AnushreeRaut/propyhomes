<?php $__env->startSection('content'); ?>
    <div id="content" class="p-4">

        <!-- Dashboard Header -->
        <h1 class="ds1col1texth1">Add Employee</h1>

        <?php echo $__env->make('auth.success-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('auth.error-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <form method="POST" action="<?php echo e(route('customers.store')); ?>" id="combinedForm">
                <?php echo csrf_field(); ?>
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
                                        <span class="error-message" id="nameError"></span> <!-- Error message -->
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
                                        <span class="error-message" id="mobileError"></span> <!-- Error message -->
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
                                        <span class="error-message" id="emailError"></span> <!-- Error message -->
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
                                        <span class="error-message" id="name-error-0"></span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="family[0][DOB]">Date of Birth</label>
                                        <input type="date" name="family[0][DOB]" id="family[0][DOB]"
                                            class="form-control">
                                        <span class="error-message" id="dob-error-0"></span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="family[0][profession]">Profession</label>
                                        <input type="text" name="family[0][profession]" id="family[0][profession]"
                                            class="form-control">
                                        <span class="error-message" id="profession-error-0"></span>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
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
                                        <span class="error-message" id="relation-error-0"></span>

                                    </div>
                                    <div class="ml-3 pt-3 mt-4">
                                        <button class="plusbtn border-0" id="addFamilyMemberButton">
                                            <i class="fa-solid fa-plus" style="color: #FFFFFF;"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-1 mt-4">
                                    <button type="button" class="btn btn-danger remove-family-member"
                                        style="display:none;">×</button>

                                </div>
                            </div>
                        </div>

                        <!-- Add Family Member Button -->



                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" hidden id="backButtonPersonal">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonPersonal">Save and
                                Next</button>
                        </div>

                    </div>

                    <!-- Professional Details -->
                    <div class="tab-pane fade" id="professional" role="tabpanel" aria-labelledby="professional-tab">
                        <h4>Professional Details</h4>
                        <div class="row">
                            <!-- Salary Checkbox -->
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

                            <!-- Business Checkbox -->
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

                        <!-- Salary-related fields -->
                        <div id="salaryFields" class="row" style="display: none;">
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

                        <!-- Business-related fields -->
                        <div id="businessFields" class="row" style="display: none;">
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

                        <!-- Submit/Back Buttons -->
                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonProfessional">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonProfessional">Save and
                                Next</button>
                        </div>
                    </div>


                    <!-- Financial Details -->
                    <div class="tab-pane fade" id="financial" role="tabpanel" aria-labelledby="financial-tab">
                        <h4>Financial Details</h4>
                        <div class="loan-details" id="loanContainer">
                            <div class="row loan" id="loan-0">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="loan[0][type_of_bank]">Type of Bank</label>
                                        <input type="text" name="loan[0][type_of_bank]" id="loan[0][type_of_bank]"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="loan[0][loan_type]">Loan Type</label>
                                        <input type="text" name="loan[0][loan_type]" id="loan[0][loan_type]"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="loan[0][loan_amount]">Loan Amount</label>
                                        <input type="number" step="0.01" name="loan[0][loan_amount]"
                                            id="loan[0][loan_amount]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="loan[0][EMI]">EMI</label>
                                        <input type="number" step="0.01" name="loan[0][EMI]" id="loan[0][EMI]"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="loan[0][start_date]">Start Date</label>
                                        <input type="date" name="loan[0][start_date]" id="loan[0][start_date]"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="form-group">
                                        <label for="loan[0][comment]">Comment</label>
                                        <textarea name="loan[0][comment]" id="loan[0][comment]" class="form-control"></textarea>
                                    </div>
                                    <div class="ms-3 mt-4 p-3"> <button type="button" class="plusbtn border-0" id="addLoanButton">
                                        <i class="fa-solid fa-plus" style="color: #FFFFFF;"></i>
                                    </button></div>
                                    <div class="ms-3 mt-4 p-3">
                                        <button type="button" class="btn btn-danger remove-loan"
                                            style="display:none;">×</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        

                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonFinancial">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonFinancial">Save and
                                Next</button>
                        </div>
                    </div>

                    <!-- Insurance Details -->
                    <!-- Insurance Details -->
                    <div class="tab-pane fade" id="insurance" role="tabpanel" aria-labelledby="insurance-tab">
                        <h4>Insurance Details</h4>
                        <div id="insuranceDetailsContainer">
                            <div class="row insurance-detail" id="insurance-detail-0">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="insurance[0][type_of_insurance_company]"
                                            class="form-label dpage5label">Type of Insurance Company</label>
                                        <input type="text" name="insurance[0][type_of_insurance_company]"
                                            id="insurance[0][type_of_insurance_company]" class="form-control dpage5input"
                                            placeholder="Enter insurance company type">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="insurance[0][type_of_policy]" class="form-label dpage5label">Type of
                                            Policy</label>
                                        <input type="text" name="insurance[0][type_of_policy]"
                                            id="insurance[0][type_of_policy]" class="form-control dpage5input"
                                            placeholder="Enter policy type">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="insurance[0][premium]" class="form-label dpage5label">Premium</label>
                                        <input type="text" name="insurance[0][premium]" id="insurance[0][premium]"
                                            class="form-control dpage5input" placeholder="Enter premium amount">
                                    </div>
                                </div>
                            </div>

                            <div class="row insurance-detail" id="insurance-detail-0">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="insurance[0][policy_start_date]" class="form-label dpage5label">Policy
                                            Start Date</label>
                                        <input type="date" name="insurance[0][policy_start_date]"
                                            id="insurance[0][policy_start_date]" class="form-control dpage5input">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="insurance[0][policy_end_date]" class="form-label dpage5label">Policy
                                            End Date</label>
                                        <input type="date" name="insurance[0][policy_end_date]"
                                            id="insurance[0][policy_end_date]" class="form-control dpage5input">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="insurance[0][comment]" class="form-label dpage5label">Comment</label>
                                        <textarea name="insurance[0][comment]" id="insurance[0][comment]" class="form-control dpage5input"
                                            placeholder="Enter your comment"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="button" class="btn btn-primary" id="addInsuranceButton">Add
                                    Insurance</button>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonInsurance">Back</button>
                            <button type="button" class="btn btn-primary" id="saveNextButtonInsurance">Save and
                                Next</button>
                        </div>
                    </div>



                    <!-- Investment Details -->
                    <!-- Investment Details -->
                    <div class="tab-pane fade" id="investment" role="tabpanel" aria-labelledby="investment-tab">
                        <h4>Investment Details</h4>
                        <div id="investmentDetailsContainer">
                            <div class="row investment-detail" id="investment-detail-0">
                                <!-- Financial Institute Name -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="investment[0][financial_institute_name]"
                                            class="form-label dpage5label">Financial Institute Name</label>
                                        <input type="text" name="investment[0][financial_institute_name]"
                                            id="investment[0][financial_institute_name]" class="form-control dpage5input"
                                            placeholder="Enter institute name">
                                    </div>
                                </div>

                                <!-- Type of Investment -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="investment[0][type_of_investment]" class="form-label dpage5label">Type
                                            of Investment</label>
                                        <input type="text" name="investment[0][type_of_investment]"
                                            id="investment[0][type_of_investment]" class="form-control dpage5input"
                                            placeholder="Enter investment type">
                                    </div>
                                </div>

                                <!-- Investments (Monthly/Yearly) -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="investment[0][investments]"
                                            class="form-label dpage5label">Investments</label>
                                        <select name="investment[0][investments]" id="investment[0][investments]"
                                            class="form-control dpage5input">
                                            <option value="Monthly">Monthly</option>
                                            <option value="Yearly">Yearly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row investment-detail" id="investment-detail-0">
                                <!-- Start Date -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="investment[0][start_date]" class="form-label dpage5label">Start
                                            Date</label>
                                        <input type="date" name="investment[0][start_date]"
                                            id="investment[0][start_date]" class="form-control dpage5input">
                                    </div>
                                </div>

                                <!-- End Date -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="investment[0][end_date]" class="form-label dpage5label">End
                                            Date</label>
                                        <input type="date" name="investment[0][end_date]" id="investment[0][end_date]"
                                            class="form-control dpage5input">
                                    </div>
                                </div>

                                <!-- Comments -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="investment[0][comments]"
                                            class="form-label dpage5label">Comments</label>
                                        <textarea name="investment[0][comments]" id="investment[0][comments]" class="form-control dpage5input"
                                            placeholder="Enter comments"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="button" class="btn btn-primary" id="addInvestmentButton">Add
                                    Investment</button>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary" id="backButtonInvestment">Back</button>
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>



                </div>

            </form>
        </div>

    </div>
    
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const salaryCheckbox = document.getElementById('salary');
            const businessCheckbox = document.getElementById('business');

            const salaryFields = document.getElementById('salaryFields');
            const businessFields = document.getElementById('businessFields');

            // Function to toggle the visibility of fields based on checkboxes
            function toggleFields() {
                if (salaryCheckbox.checked && businessCheckbox.checked) {
                    salaryFields.style.display = 'flex';
                    businessFields.style.display = 'flex';
                } else if (salaryCheckbox.checked) {
                    salaryFields.style.display = 'flex';
                    businessFields.style.display = 'none';
                } else if (businessCheckbox.checked) {
                    salaryFields.style.display = 'none';
                    businessFields.style.display = 'flex';
                } else {
                    salaryFields.style.display = 'none';
                    businessFields.style.display = 'none';
                }
            }

            // Event listeners for checkboxes
            salaryCheckbox.addEventListener('change', toggleFields);
            businessCheckbox.addEventListener('change', toggleFields);

            // Initialize the form on load
            toggleFields();
        });
    </script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#insurance\\[0\\]\\[policy_start_date\\]').on('change', function() {
                const startDate = new Date($(this).val());
                startDate.setDate(startDate.getDate() + 1);
                const minEndDate = startDate.toISOString().split('T')[0];
                $('#insurance\\[0\\]\\[policy_end_date\\]').attr('min', minEndDate);
                $('#insurance\\[0\\]\\[policy_end_date\\]').val('');
            });
        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let familyMemberCount = 1; // Start from 1 since we already have 0

            function validateFamilyMemberFields(index) {
                const name = document.getElementById(`family[${index}][name]`);
                const dob = document.getElementById(`family[${index}][DOB]`);
                const profession = document.getElementById(`family[${index}][profession]`);
                const relation = document.getElementById(`family[${index}][relation]`);

                let valid = true;

                // Validate name
                const nameError = document.getElementById(`name-error-${index}`);
                if (name.value.trim() === '') {
                    nameError.textContent = 'Name is required.';
                    valid = false;
                } else if (!/^[a-zA-Z\s]+$/.test(name.value)) {
                    nameError.textContent = 'Name must contain only letters.';
                    valid = false;
                } else {
                    nameError.textContent = '';
                }

                // Validate Date of Birth
                const dobError = document.getElementById(`dob-error-${index}`);
                const today = new Date();
                const dobDate = new Date(dob.value);
                if (dob.value === '') {
                    dobError.textContent = 'Date of Birth is required.';
                    valid = false;
                } else if (dobDate >= today) {
                    dobError.textContent = 'Date of Birth must be in the past.';
                    valid = false;
                } else {
                    dobError.textContent = '';
                }

                // Validate profession
                const professionError = document.getElementById(`profession-error-${index}`);
                if (profession.value.trim() === '') {
                    professionError.textContent = 'Profession is required.';
                    valid = false;
                } else {
                    professionError.textContent = '';
                }

                // Validate relation
                const relationError = document.getElementById(`relation-error-${index}`);
                if (relation.value === '') {
                    relationError.textContent = 'Relation is required.';
                    valid = false;
                } else {
                    relationError.textContent = '';
                }

                return valid;
            }

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
                            <span class="error-message" id="name-error-${familyMemberCount}"></span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="family[${familyMemberCount}][DOB]">Date of Birth</label>
                            <input type="date" name="family[${familyMemberCount}][DOB]" id="family[${familyMemberCount}][DOB]" class="form-control">
                            <span class="error-message" id="dob-error-${familyMemberCount}"></span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="family[${familyMemberCount}][profession]">Profession</label>
                            <input type="text" name="family[${familyMemberCount}][profession]" id="family[${familyMemberCount}][profession]" class="form-control">
                            <span class="error-message" id="profession-error-${familyMemberCount}"></span>
                        </div>
                    </div>
                    <div class="col-lg-2">
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
                            <span class="error-message" id="relation-error-${familyMemberCount}"></span>
                        </div>
                    </div>
                    <div class="col-lg-1 mt-4">
                        <button type="button" class="btn btn-danger remove-family-member" style="display:inline-block;">×</button>
                    </div>
                `;

                // Append the new row to the container
                document.getElementById('familyMembersContainer').appendChild(newFamilyMemberRow);
                familyMemberCount++;

                // Show the remove button for the new row
                const removeButton = newFamilyMemberRow.querySelector('.remove-family-member');

                // Add event listener for removing the family member
                removeButton.addEventListener('click', function() {
                    newFamilyMemberRow.remove();
                });

                // Add validation on input change
                newFamilyMemberRow.querySelectorAll('input, select').forEach(input => {
                    input.addEventListener('input', function() {
                        validateFamilyMemberFields(familyMemberCount - 1);
                    });
                });
            });
        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let loanCount = 1; // Start from 1 since we already have 0

            document.getElementById('addLoanButton').addEventListener('click', function() {
                // Create a new loan row
                const newLoanRow = document.createElement('div');
                newLoanRow.className = 'row loan';
                newLoanRow.id = 'loan-' + loanCount;

                newLoanRow.innerHTML = `
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="loan[${loanCount}][type_of_bank]">Type of Bank</label>
                            <input type="text" name="loan[${loanCount}][type_of_bank]" id="loan[${loanCount}][type_of_bank]" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="loan[${loanCount}][loan_type]">Loan Type</label>
                            <input type="text" name="loan[${loanCount}][loan_type]" id="loan[${loanCount}][loan_type]" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="loan[${loanCount}][loan_amount]">Loan Amount</label>
                            <input type="number" step="0.01" name="loan[${loanCount}][loan_amount]" id="loan[${loanCount}][loan_amount]" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="loan[${loanCount}][EMI]">EMI</label>
                            <input type="number" step="0.01" name="loan[${loanCount}][EMI]" id="loan[${loanCount}][EMI]" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="loan[${loanCount}][start_date]">Start Date</label>
                            <input type="date" name="loan[${loanCount}][start_date]" id="loan[${loanCount}][start_date]" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="loan[${loanCount}][comment]">Comment</label>
                            <textarea name="loan[${loanCount}][comment]" id="loan[${loanCount}][comment]" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-1 mt-4">
                        <button type="button" class="btn btn-danger remove-loan">×</button>
                    </div>
                `;

                // Append the new row to the container
                document.getElementById('loanContainer').appendChild(newLoanRow);
                loanCount++;

                // Show the remove button for the new row
                const removeButton = newLoanRow.querySelector('.remove-loan');
                removeButton.style.display = 'inline-block';

                // Add event listener for removing the loan
                removeButton.addEventListener('click', function() {
                    newLoanRow.remove();
                });
            });
        });
    </script>
    
    
    <script>
        $(document).ready(function() {
            let insuranceCount = 1; // Start counting from 1

            $('#addInsuranceButton').click(function() {
                const newInsuranceRow = `
            <div class="row insurance-detail" id="insurance-detail-${insuranceCount}">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="insurance[${insuranceCount}][type_of_insurance_company]" class="form-label dpage5label">Type of Insurance Company</label>
                        <input type="text" name="insurance[${insuranceCount}][type_of_insurance_company]" id="insurance[${insuranceCount}][type_of_insurance_company]" class="form-control dpage5input" placeholder="Enter insurance company type">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="insurance[${insuranceCount}][type_of_policy]" class="form-label dpage5label">Type of Policy</label>
                        <input type="text" name="insurance[${insuranceCount}][type_of_policy]" id="insurance[${insuranceCount}][type_of_policy]" class="form-control dpage5input" placeholder="Enter policy type">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="insurance[${insuranceCount}][premium]" class="form-label dpage5label">Premium</label>
                        <input type="text" name="insurance[${insuranceCount}][premium]" id="insurance[${insuranceCount}][premium]" class="form-control dpage5input" placeholder="Enter premium amount">
                    </div>
                </div>
            </div>
            <div class="row insurance-detail">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="insurance[${insuranceCount}][policy_start_date]" class="form-label dpage5label">Policy Start Date</label>
                        <input type="date" name="insurance[${insuranceCount}][policy_start_date]" id="insurance[${insuranceCount}][policy_start_date]" class="form-control dpage5input">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="insurance[${insuranceCount}][policy_end_date]" class="form-label dpage5label">Policy End Date</label>
                        <input type="date" name="insurance[${insuranceCount}][policy_end_date]" id="insurance[${insuranceCount}][policy_end_date]" class="form-control dpage5input">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="insurance[${insuranceCount}][comment]" class="form-label dpage5label">Comment</label>
                        <textarea name="insurance[${insuranceCount}][comment]" id="insurance[${insuranceCount}][comment]" class="form-control dpage5input" placeholder="Enter your comment"></textarea>
                    </div>
                </div>
            </div>
            `;

                $('#insuranceDetailsContainer').append(newInsuranceRow);
                insuranceCount++;
            });
        });
    </script>
    
    
    <script>
        $(document).ready(function() {
            let investmentCount = 1; // Start counting from 1

            $('#addInvestmentButton').click(function() {
                const newInvestmentRow = `
            <div class="row investment-detail" id="investment-detail-${investmentCount}">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="investment[${investmentCount}][financial_institute_name]" class="form-label dpage5label">Financial Institute Name</label>
                        <input type="text" name="investment[${investmentCount}][financial_institute_name]" id="investment[${investmentCount}][financial_institute_name]" class="form-control dpage5input" placeholder="Enter institute name">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="investment[${investmentCount}][type_of_investment]" class="form-label dpage5label">Type of Investment</label>
                        <input type="text" name="investment[${investmentCount}][type_of_investment]" id="investment[${investmentCount}][type_of_investment]" class="form-control dpage5input" placeholder="Enter investment type">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="investment[${investmentCount}][investments]" class="form-label dpage5label">Investments</label>
                        <select name="investment[${investmentCount}][investments]" id="investment[${investmentCount}][investments]" class="form-control dpage5input">
                            <option value="Monthly">Monthly</option>
                            <option value="Yearly">Yearly</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row investment-detail">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="investment[${investmentCount}][start_date]" class="form-label dpage5label">Start Date</label>
                        <input type="date" name="investment[${investmentCount}][start_date]" id="investment[${investmentCount}][start_date]" class="form-control dpage5input">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="investment[${investmentCount}][end_date]" class="form-label dpage5label">End Date</label>
                        <input type="date" name="investment[${investmentCount}][end_date]" id="investment[${investmentCount}][end_date]" class="form-control dpage5input">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="investment[${investmentCount}][comments]" class="form-label dpage5label">Comments</label>
                        <textarea name="investment[${investmentCount}][comments]" id="investment[${investmentCount}][comments]" class="form-control dpage5input" placeholder="Enter comments"></textarea>
                    </div>
                </div>
            </div>
            `;

                $('#investmentDetailsContainer').append(newInvestmentRow);
                investmentCount++;
            });
        });
    </script>
    
    <script>
        $(document).ready(function() {
            // Function to validate name
            function validateName() {
                let name = $('#name').val();
                if (name === "") {
                    $('#nameError').text("Name is required.");
                    return false;
                } else if (/[^a-zA-Z\s]/.test(name)) {
                    $('#nameError').text("Only letters and spaces are allowed.");
                    return false;
                } else {
                    $('#nameError').text(""); // Clear error
                    return true;
                }
            }

            // Function to validate mobile
            function validateMobile() {
                let mobile = $('#mobile').val();
                if (mobile === "") {
                    $('#mobileError').text("Mobile number is required.");
                    return false;
                } else if (!/^[0-9]{10}$/.test(mobile)) {
                    $('#mobileError').text("Enter a valid 10-digit mobile number.");
                    return false;
                } else {
                    $('#mobileError').text(""); // Clear error
                    return true;
                }
            }

            // Function to validate email
            function validateEmail() {
                let email = $('#email').val();
                let emailPattern = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
                if (email === "") {
                    $('#emailError').text("Email is required.");
                    return false;
                } else if (!emailPattern.test(email)) {
                    $('#emailError').text("Enter a valid email.");
                    return false;
                } else {
                    $('#emailError').text(""); // Clear error
                    return true;
                }
            }

            // Trigger validation on typing
            $('#name').keyup(validateName);
            $('#mobile').keyup(validateMobile);
            $('#email').keyup(validateEmail);

        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const familyMemberContainer = document.getElementById('familyMembersContainer');

            familyMemberContainer.addEventListener('input', function(event) {
                const target = event.target;

                // Validate name
                if (target.name === 'family[0][name]') {
                    const nameError = document.getElementById('name-error-0');
                    if (target.value.trim() === '') {
                        nameError.textContent = 'Name is required.';
                    } else if (!/^[a-zA-Z\s]+$/.test(target.value)) {
                        nameError.textContent = 'Name must contain only letters.';
                    } else {
                        nameError.textContent = '';
                    }
                }

                // Validate Date of Birth
                if (target.name === 'family[0][DOB]') {
                    const dobError = document.getElementById('dob-error-0');
                    const today = new Date();
                    const dob = new Date(target.value);
                    if (target.value === '') {
                        dobError.textContent = 'Date of Birth is required.';
                    } else if (dob >= today) {
                        dobError.textContent = 'Date of Birth must be in the past.';
                    } else {
                        dobError.textContent = '';
                    }
                }

                // Validate profession
                if (target.name === 'family[0][profession]') {
                    const professionError = document.getElementById('profession-error-0');
                    if (target.value.trim() === '') {
                        professionError.textContent = 'Profession is required.';
                    } else {
                        professionError.textContent = '';
                    }
                }
            });
        });
    </script>
    
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\propy\propyhome\propyhomes\resources\views/admin/customer/create.blade.php ENDPATH**/ ?>