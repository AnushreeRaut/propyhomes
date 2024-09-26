<?php $__env->startSection('tags'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
 <!-- +++++++++++  section 1  +++++++++++ -->

 <section class="section position-relative pt-5">
    <div class="p2s1bgimg p2s1height">

        <div class="container pt-3 pt-sm-5 mt-3">
            <div class="col-xl-7 pt-4 p2s1div">
                <h1>Home Loan Eligibility Calculator</h1>

                <p>From finding to funding, we do it all! Be one step ahead to build your dream home. Use our
                    calculator
                    precise calculations to confidently plan your finances.</p>


            </div>
        </div>


        <div class="row position-absolute top-100  translate-middle rounded-4 p-4    p2s2bgc">
            <div class="col-lg-8 p-4">
                <div class="p2s2pdiv">
                    <h2>Calculate how much Home Loan you can get</h2>
                    <!--  -->

                    <!-- <div class="meter-info">
                        <p>Progress: <output id="meter--progress">0%</output></p>

                        <h1 id="div1">0%</h1>
                        <input id="meter--ranger" type="range" value="24" min="0" max="100">
                    </div> -->

                    <div class=" pt-4 pe-1 pe-xl-5">


                        <!-- Progress Bar 1: Monthly Net Income -->
                        <div class="d-flex justify-content-between">
                            <p class="p2s2Textp">Monthly Net Income</p>
                            <h6 class="p2s2Textp  p2s1DBorder text-end ">₹<span class="p2s2Texth6 ps-3"
                                    id="income-value">2360000</span></h6>
                        </div>
                        <input id="income-range" type="range" value="50" min="0" max="100">
                        <div class="d-flex justify-content-between pb-4">
                            <p class="p2s2Textp">₹ 10 K</p>
                            <h6 class="p2s2Textp  ">₹ 1 Cr</h6>
                        </div>

                        <!-- Progress Bar 2: Interest Rate -->
                        <div class="d-flex justify-content-between">
                            <p class="p2s2Textp">Interest Rates</p>
                            <h6 class="p2s2Texth6 p2s1DBorder  text-end"><span class=" "
                                    id="interest-value">3</span>%</h6>
                        </div>
                        <input id="interest-range" class="irs-bar irs-bar--single" type="range" value="7" min="0"
                            max="15">
                        <div class="d-flex justify-content-between pb-4">
                            <p class="p2s2Textp">0</p>
                            <h6 class="p2s2Textp  ">15%</h6>
                        </div>

                        <!-- Progress Bar 3: Tenure (Years) -->
                        <div class="d-flex justify-content-between">
                            <p class="p2s2Textp">Tenure (Years)</p>
                            <h6 class="p2s2Texth6 p2s1DBorder text-end"><span class="p2s2Texth6 "
                                    id="tenure-value">10</span> Years</h6>
                        </div>
                        <input id="tenure-range" type="range" value="10" min="1" max="30">
                        <div class="d-flex justify-content-between pb-4">
                            <p class="p2s2Textp">1 Year</p>
                            <h6 class="p2s2Textp  ">30 Year</h6>
                        </div>

                        <!-- Progress Bar 4: Other EMI -->
                        <div class="d-flex justify-content-between">
                            <p class="p2s2Textp">Other EMI’s</p>
                            <h6 class="p2s2Textp p2s1DBorder text-end">₹<span class="p2s2Texth6 ps-3"
                                    id="emi-value">123000</span></h6>
                        </div>
                        <input id="emi-range" type="range" value="5000" min="0" max="50000">
                        <div class="d-flex justify-content-between">
                            <p class="p2s2Textp">0</p>
                            <h6 class="p2s2Textp  ">5 Lac</h6>
                        </div>




                        <!-- Loan and Interest Results -->
                        <!-- <div class="d-flex justify-content-between">
                            <ul class="p2s1dote mb-0">
                                <li>
                                    <p class="p2s1a mb-1">Loan Amount</p>
                                </li>
                            </ul>
                            <p class="p2s1a mb-1">₹<span id="loan-amount">0</span></p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <ul class="p2s1dote mb-0">
                                <li>
                                    <p class="p2s1a mb-1">Total Interest Payable</p>
                                </li>
                            </ul>
                            <p class="p2s1a mb-1">₹<span id="total-interest">0</span></p>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p2p1col2 rounded-3 p-4 px-3 px-xl-5 bg-white">
                <div class="">
                    <div class="text-center p2s2c2text">
                        <h3 class="">Congratulations!</h3>
                        <p class="mb-2">You are eligible for the loan amount of</p>
                        <h4>₹<span id="dynamic-amount">12,02,94,245</span></h4>
                    </div>
                    <div class="  ">
                        <!-- Placeholder for the pie chart -->
                        <!-- <div class="pb-3 pt-2">
                            <div class="chart-container">
                                <svg width="200" height="200">
                                    <circle cx="100" cy="100" r="80" fill="none" stroke="#d3d3d3"
                                        stroke-width="20" />
                                    <circle id="progress-circle" cx="100" cy="100" r="80" fill="none"
                                        stroke="#FFD700" stroke-width="20" stroke-dasharray="502"
                                        stroke-dashoffset="502" />
                                </svg>
                            </div>
                        </div> -->

                        <!-- Pie Chart Container -->
                        <div class="pie-chart">
                            <div class="pie-chart p-4 mb-3">
                                <canvas id="pie-chart" width="508" height="508"
                                    style="display: block; box-sizing: border-box; height: 254px; width: 254px;"></canvas>

                            </div>
                        </div>



                    </div>
                    <div class="">
                        <!-- <div class="result-card">
                            <h3>Loan Amount: ₹<span id="loan-amount">0</span></h3>
                            <h3>Total Interest Payable: ₹<span id="total-interest">0</span></h3>
                        </div> -->

                        <div class="d-flex justify-content-between">

                            <ul class="p2s1dote mb-0 ">
                                <li>
                                    <p class=" p2s1a mb-1 ">
                                        Loan Amount
                                    </p>
                                </li>
                            </ul>


                            <p class="p2s1a mb-1">₹<span id="loan-amount">0</span></p>

                        </div>
                        <div class="d-flex justify-content-between">

                            <ul class="p2s1dote1 mb-0 ">
                                <li>
                                    <p class=" p2s1a mb-1 ">
                                        Total Interest Payable
                                    </p>
                                </li>
                            </ul>


                            <p class="p2s1a mb-1">₹<span id="total-interest">0</span></p>

                        </div>
                    </div>

                    <div class="text-center p2s2col2btn pt-4">
                        <p>Your EMI will be</p>
                        <h6>₹<span id="emi-display">14,11,000</span> / <span>Month</span></h6>
                        <small>Note: This is an estimate, actual amount may vary.</small>

                        <div class="d-grid gap-2 pt-4">
                            <button class="btn  ">Get in Touch</button>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>
</section>




<!-- ========  section 1   END  ======== -->


<!-- +++++++++++  section 2  +++++++++++ -->
<section class="section p2s2padding">
    <div class="container">
        <div class="row p2s2_border">
            <div class="col-lg-3 col-md-6 col-12 text-center my-2">
                <img src="<?php echo e(asset('assets/frontend/asset/img/person.png')); ?>" width="40px" alt="">
                <p class="p2s2Tp pt-3">Maximum Eligibility</p>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center my-2">
                <img src="<?php echo e(asset('assets/frontend/asset/img/downarrimg.png')); ?>" width="40px" alt="">
                <p class="p2s2Tp pt-3">Maximum Tenure</p>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center my-2">
                <img src="<?php echo e(asset('assets/frontend/asset/img/homloadn.png')); ?>" width="40px" alt="">
                <p class="p2s2Tp pt-3">Design Your EMI</p>
            </div>
            <div class="col-lg-3 col-md-6 col-12 text-center my-2">
                <img src="<?php echo e(asset('assets/frontend/asset/img/calendar.png')); ?>" width="40px" alt="">
                <p class="p2s2Tp pt-3">Lowest Interest Rate</p>
            </div>
        </div>

        <p class="text-center pt-5 p2s2p">Over the last 5 years, PropertyPistol has found a significant gap while
            handling the financial needs of
            various stakeholders in this industry. The property dealings fall through the crack for want of funds -
            either by the developer or the buyer. PropertyPistol has established a dedicated vertical that has been
            successfully handling the loan requirements for all the stakeholders. The company aims to provide you
            with hassle-free financing options with rapid approvals, flexible options and timely closings!</p>


    </div>
</section>


<!-- ========  section 2   END  ======== -->
<!-- +++++++++++  section 3  +++++++++++ -->
<section class="section p2s3bgC">
    <div class="p2_bgImg">
    <div class=" container py-5 px-2 px-lg-5  ">
        <div class="text-center">
            <h2 class="p2s3Th2">Banking Partners</h2>
        </div>

        <div class=" d-flex flex-wrap  justify-content-center pt-4 gap-5">

            <div class=" p2s3W text-center pt-2">
                <img src="<?php echo e(asset('assets/frontend/asset/img/sbi.BchWMqiI.png')); ?>" width="177.43px" class="mt-1" alt="">
            </div>
            <div class=" p2s3W text-center pt-3">
                <img src="<?php echo e(asset('assets/frontend/asset/img/axis_bank.png')); ?>" width="187.28px" alt="">
            </div>
            <div class=" p2s3W text-center pt-2">
                <img src="<?php echo e(asset('assets/frontend/asset/img/HDFC.png')); ?>" width="179.22px" height="65.06px" class="mt-1" alt="">
            </div>
            <div class=" p2s3W text-center p-2 pt-2">
                <img src="<?php echo e(asset('assets/frontend/asset/img/IDFC_first_bank.png')); ?>" width="100%" height="64.16px" class="mt-1" alt="">
            </div>
            <div class=" p2s3W text-center p-2 pt-3">
                <img src="<?php echo e(asset('assets/frontend/asset/img/housing_planing.png')); ?>" width="194px" height="49px" class="mt-1" alt="">
            </div>
            <div class=" p2s3W text-center p-2 pt-3">
                <img src="<?php echo e(asset('assets/frontend/asset/img/bajaj-finserv.BTPhVn59.png')); ?>" width="180px" height="48pxx" class="mt-1" alt="">
            </div>
            <div class=" p2s3W text-center p-2 pt-3">
                <img src="<?php echo e(asset('assets/frontend/asset/img/abc.DqPl8JZM.png')); ?>" width="200px" height="40px" class="mt-2" alt="">
            </div>
            <div class=" p2s3W text-center p-2 pt-2">
                <img src="<?php echo e(asset('assets/frontend/asset/img/icici.mBYNUJmr.png')); ?>" width="189px" height="38px" class="mt-3" alt="">
            </div>



        </div>




    </div>
    </div>
</section>



<!-- ========  section 3   END  ======== -->

<!-- +++++++++++  section 4  +++++++++++ -->
<section class="section pt-5">

    <div class="p1s1Before  mt-3 mb-5">
        <h2 class="ps-md-0 ps-3"> <span class="headlineGrayC"> Get started</span> <span class="headlineGoldC"> on
                your Home Loan journey</span></h2>
    </div>



    <div class="container">


        <h3 class="p2s4Th3">Calculate how much Home Loan you can get</h3>
        <div class="bd-example  mt-4 ">
            <div class="table-responsive ">
                <table class="table align-middle ">
                    <thead class="">
                        <tr class=" ">

                            <th scope="col" class="w-25 py-3 p2s4th p2s4bRL ps-4 p2s4Th">Identity Proof (any one)
                            </th>
                            <th scope="col" class="w-25 py-3 p2s4th p2s4Th">Residence Proof (any one)</th>
                            <th scope="col" class="w-25 py-3 p2s4th p2s4bRR p2s4Th">Other Documents</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td class="py-3 p2s4C1 p2s4Tp ps-4">Driving License</td>
                            <td class="py-3 p2s4C1 p2s4Tp  ">Copy of Electricity Bill/Water Bill/Telephone Bill</td>
                            <td class="py-3 p2s4C1 p2s4Tp  ">Employer Identity Card</td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C2 p2s4Tp align-top ps-4">PAN Card</td>
                            <td class="py-3 p2s4C2 p2s4Tp align-top ">Copy of valid Passport/Aadhaar Card/Driving
                                License
                            </td>
                            <td class="py-3 p2s4C2 p2s4Tp align-top ">Duly filled loan application form affixed with
                                3
                                passport size photographs</td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C1 p2s4Tp align-top ps-4">Voter ID</td>
                            <td class="py-3 p2s4C1 p2s4Tp align-top ">Copy of valid Passport/Aadhaar Card/Driving
                                License</td>
                            <td class="py-3 p2s4C1 p2s4Tp align-top">Loan account statement for the previous 12
                                months if the
                                applicant has any other
                                ongoing loan from other banks/financial institutions</td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C2 p2s4Tp p2s4bRBL align-top ps-4">Valid Passport</td>
                            <td class="py-3 p2s4C2 p2s4Tp align-top ">Copy of valid Passport/Aadhaar Card/Driving
                                License
                            </td>
                            <td class="py-3 p2s4C2 p2s4Tp p2s4bRBR align-top ">Bank account statements for all the
                                bank
                                accounts owned by the applicant for the
                                last six months</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <h3 class="p2s4Th3 pt-5">Income Proof Documents</h3>
        <div class="bd-example  mt-4 ">
            <div class="table-responsive ">
                <table class="table align-middle ">
                    <thead class="">
                        <tr class=" ">

                            <th scope="col" class="w-25 py-3 p2s4th p2s4bRL ps-4 p2s4Th">For Self-employed
                                Applicant/Co-applicant:</th>

                            <th scope="col" class="w-25 py-3 p2s4th p2s4bRR p2s4Th">For Salaried
                                Applicant/Co-applicant:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td class="py-3 p2s4C1 p2s4Tp ps-4">Income Tax Returns for the last 3 years</td>

                            <td class="py-3 p2s4C1 p2s4Tp  ">Salary Slips for the last three months</td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C2 p2s4Tp  ps-4">Certificate of Qualification (for Doctors/CA and
                                other professionals)</td>

                            <td class="py-3 p2s4C2 p2s4Tp  ">Copy of Form 16 or Income Tax Returns for the last two
                                years</td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C1 p2s4Tp ps-4">Balance Sheet audited by a certified CA and Profit
                                and Loss account for the previous 3 years</td>

                            <td class="py-3 p2s4C1 p2s4Tp "></td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C2 p2s4Tp   ps-4">Business License Details</td>

                            <td class="py-3 p2s4C2 p2s4Tp   "></td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C1 p2s4Tp   ps-4">Business address proof</td>

                            <td class="py-3 p2s4C1 p2s4Tp   "></td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C2 p2s4Tp p2s4bRBL  ps-4">TDS Certificate</td>

                            <td class="py-3 p2s4C2 p2s4Tp p2s4bRBR  "></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <h3 class="p2s4Th3 pt-5">Home Loan Eligibility</h3>
        <div class="bd-example  mt-4 pb-4">
            <div class="table-responsive ">
                <table class="table align-middle ">
                    <thead class="">
                        <tr class=" ">

                            <th scope="col" class="w-25 py-3 p2s4th p2s4bRL ps-4 p2s4Th">Eligibility Criteria</th>

                            <th scope="col" class="w-25 py-3 p2s4th p2s4bRR p2s4Th">Requirement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td class="py-3 p2s4C1 p2s4Tp ps-4">Age</td>

                            <td class="py-3 p2s4C1 p2s4Tp  ">Minimum Age: 18 years and Maximum Age: 70 years</td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C2 p2s4Tp align-top ps-4">Resident Type</td>

                            <td class="py-3 p2s4C2 align-top  ">

                                <p class="p2s4Tp mb-2">The applicant must be (any one):</p>
                                <ul class="p2s4ul  ">
                                    <li>
                                        <p class=" mb-1 p2s4Tp "> Resident Indian</p>

                                    </li>
                                    <li>
                                        <p class=" mb-1 p2s4Tp ">Non-Resident India (NRI)</p>

                                    </li>
                                    <li>
                                        <p class=" mb-1 p2s4Tp ">Person of Indian Origin (PIO)</p>

                                    </li>
                                </ul>


                            </td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C1 p2s4Tp ps-4">Employment</td>

                            <td class="py-3 p2s4C1  ">
                                <p class="p2s4Tp mb-2">The applicant can be (any one):</p>
                                <ul class="p2s4ul  ">
                                    <li>
                                        <p class="mb-1 p2s4Tp ">Salaried</p>

                                    </li>
                                    <li>
                                        <p class=" mb-1 p2s4Tp ">Self-employed</p>

                                    </li>

                                </ul>

                            </td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C2 p2s4Tp   ps-4">Net Annual Income</td>

                            <td class="py-3 p2s4C2 p2s4Tp   ">At least Rs.5-6 lakh depending on the type of
                                employment</td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C1 p2s4Tp align-top  ps-4">Residence</td>

                            <td class="py-3 p2s4C1  align-top  ">

                                <p class="p2s4Tp mb-2">The applicant must have (any one):</p>
                                <ul class="p2s4ul  ">
                                    <li>
                                        <p class="mb-1 p2s4Tp ">A permanent residence</p>

                                    </li>
                                    <li>
                                        <p class="mb-1 p2s4Tp ">A rented residence where he/she has resided for at
                                            least
                                            a year prior to applying for a loan</p>

                                    </li>

                                </ul>
                            </td>
                        </tr>
                        <tr>

                            <td class="py-3 p2s4C2 p2s4Tp p2s4bRBL align-top  ps-4">Credit score</td>

                            <td class="py-3 p2s4C2 p2s4Tp p2s4bRBR align-top ">A good credit score of at least 750
                                or more
                                obtained from a recognised credit bureau</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</section>




<!-- ========  section 4   END  ======== -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    <script>
        // Select DOM elements for Pie Chart
        const ctx = document.getElementById('pie-chart').getContext('2d');
        const pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Loan Amount', 'Total Interest Payable'],
                datasets: [{
                    data: [345971194, 542328806], // Initial dummy data
                    backgroundColor: ['#C8A864', '#757574'], // Colors for the segments
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false // Hide default legend
                    }
                }
            }
        });

        // Select the range input elements
        const incomeRange = document.getElementById('income-range');
        const interestRange = document.getElementById('interest-range');
        const tenureRange = document.getElementById('tenure-range');
        const emiRange = document.getElementById('emi-range');

        // Select the dynamic value elements above each range
        const incomeValue = document.getElementById('income-value');
        const interestValue = document.getElementById('interest-value');
        const tenureValue = document.getElementById('tenure-value');
        const emiValue = document.getElementById('emi-value');

        // Select the elements displaying loan and interest details
        const loanAmountElement = document.getElementById('loan-amount');
        const totalInterestElement = document.getElementById('total-interest');
        const dynamicAmountElement = document.getElementById('dynamic-amount');

        // Select the EMI display h6 element
        const emiDisplay = document.querySelector('.p2s2col2btn h6');

        // Constants
        const MAX_LOAN_AMOUNT = 10000000; // Maximum loan amount
        const MAX_TENURE_MONTHS = 30 * 12; // 30 years in months

        // Function to update pie chart and dynamic values
        function updateLoanDetails() {
            const income = incomeRange.value * 10000; // Convert range value to income
            const interestRate = interestRange.value / 12 / 100; // Monthly interest rate
            const tenure = tenureRange.value * 12; // Tenure in months
            const emi = emiRange.value;

            // Calculate loan amount
            const loanAmount = (income - emi) * tenure;

            // EMI calculation
            const numerator = loanAmount * interestRate * Math.pow(1 + interestRate, tenure);
            const denominator = Math.pow(1 + interestRate, tenure) - 1;
            const calculatedEMI = numerator / denominator;

            // Calculate total interest
            const totalInterest = (calculatedEMI * tenure) - loanAmount;

            // Update loan and interest values
            loanAmountElement.innerText = loanAmount.toLocaleString('en-IN');
            totalInterestElement.innerText = totalInterest.toLocaleString('en-IN');

            // Update EMI display (₹14,11,000 / Month)
            emiDisplay.innerHTML = `₹${Math.round(calculatedEMI).toLocaleString('en-IN')} / <span>Month</span>`;

            // Update total amount
            const totalAmount = loanAmount + totalInterest;
            dynamicAmountElement.innerText = totalAmount.toLocaleString('en-IN');

            // Update pie chart
            pieChart.data.datasets[0].data = [loanAmount, totalInterest];
            pieChart.update();

            // Update dynamic values above each progress bar
            incomeValue.innerText = income.toLocaleString('en-IN');
            interestValue.innerText = interestRange.value;
            tenureValue.innerText = tenureRange.value;
            emiValue.innerText = emi.toLocaleString('en-IN');
        }

        // Attach input event listeners to update on change
        incomeRange.addEventListener('input', updateLoanDetails);
        interestRange.addEventListener('input', updateLoanDetails);
        tenureRange.addEventListener('input', updateLoanDetails);
        emiRange.addEventListener('input', updateLoanDetails);

        // Initialize values on page load
        window.onload = updateLoanDetails;


// input progress bar color

        function updateRangeBackground(range) {
            const value = range.value;
            const min = range.min ? range.min : 0;
            const max = range.max ? range.max : 100;
            const percentage = (value - min) / (max - min) * 100;

            // Create a gradient background based on the value
            range.style.background = `linear-gradient(to right, #C8A864 ${percentage}%, #e0e0e0 ${percentage}%)`;
            range.style.height='3px';
        }

        // Select all range inputs and attach event listeners
        const ranges = document.querySelectorAll('input[type="range"]');
        ranges.forEach(range => {
            updateRangeBackground(range); // Initialize background
            range.addEventListener('input', () => updateRangeBackground(range)); // Update background on input
        });




















    </script>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\propy\propyhome\propyhomes\resources\views/frontend/home/homeloan.blade.php ENDPATH**/ ?>