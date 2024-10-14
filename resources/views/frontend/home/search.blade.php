@extends('frontend.layout.main')

@section('tags')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details</title>
@endsection

@section('content')
    <section class="">
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-12 col-12">
                    <div class="">
                        <p class="psec1p"><span class=""> Home</span> <img
                                src="{{ asset('assets/frontend/img/propertyArrow.svg') }}" class="px-2" alt="">
                            <span class=" text-dark">Property</span>
                        </p>
                        <h1 class="psec1h1 pt-3 pb-4">Flats for Sale</h1>
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6  col-12 mb-4">
                                <form action="{{ route('property.search') }}" method="GET">
                                    <div class="p-3 search-col1-bgc rounded-3">
                                        <h3 class="search_s1h3T pt-2 pb-3">Find your home</h3>

                                        <!-- Search by Location or Project Name -->
                                        <!-- Search by Location, Project Name, Landmark, or Area -->
                                        <div class="input-group mb-3 search-inputs">
                                            <span class="input-group-text border-0 pe-0">
                                                <i class="fa-solid fa-magnifying-glass fa-xs" style="color:black;"></i>
                                            </span>
                                            <input type="text" name="search_term" class="form-control border-0 pb-2"
                                                placeholder="Search by location, project name, landmark, or area">
                                        </div>

                                        <!-- BHK Type -->
                                        <h3 class="search_s1h3T pt-2 pb-2">BHK Type</h3>
                                        <select name="bhk_type" class="form-select search-inputs">
                                            <option value="">All</option>
                                            <option value="1BHK">1BHK</option>
                                            <option value="2BHK">2BHK</option>
                                            <option value="3BHK">3BHK</option>
                                            <option value="4BHK">4BHK</option>
                                            <option value="5BHK">5BHK</option>
                                        </select>

                                        <!-- Property Type -->
                                        <h3 class="search_s1h3T pt-4 pb-2">Property Types</h3>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input search-checkBorder" type="checkbox"
                                                name="property_type[]" value="Residential">
                                            <label class="form-check-label">Residential</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input search-checkBorder" type="checkbox"
                                                name="property_type[]" value="Commercial">
                                            <label class="form-check-label">Commercial</label>
                                        </div>

                                        <!-- Possession Status -->
                                        <h3 class="search_s1h3T pt-4 mt-1 pb-2">Possession Status</h3>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input search-checkBorder" type="checkbox"
                                                name="possession_status[]" value="Ready to Move">
                                            <label class="form-check-label">Ready to Move</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input search-checkBorder" type="checkbox"
                                                name="possession_status[]" value="Under construction">
                                            <label class="form-check-label">Under Construction</label>
                                        </div>
                                        <h3 class="search_s1h3T  pt-3 pb-3">Budget</h3>
                                        <div class="budget-section">
                                            <div class="budget-slider-container">
                                                <div class="budget-slider">
                                                    <!-- Min Range (5 Lakh) -->
                                                    <input type="range" name="price_range_start" id="minRange"
                                                           min="500000" max="800000000" step="1" value="500000">
                                                           <div class="budget-track "></div>
                                                    <!-- Max Range (80 Crore) -->
                                                    <input type="range" name="price_range_end" id="maxRange"
                                                           min="500000000" max="800000000" step="1" value="800000000">
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <span id="minValue">₹5 Lakh</span>
                                                <span id="maxValue">₹80 Crore</span>
                                            </div>
                                        </div>

                                        <!-- Amenities -->
                                        <h3 class="search_s1h3T pt-3 pb-1">Amenities</h3>
                                        @foreach ($amenities as $amenity)
                                            <div class="form-check mb-2">
                                                <input class="form-check-input search-checkBorder" type="checkbox"
                                                    name="amenities[]" value="{{ $amenity->id }}">
                                                <label class="form-check-label">{{ $amenity->name }}</label>
                                            </div>
                                        @endforeach


                                        <!-- Search Button -->
                                        <div class="d-grid gap-2 py-3">
                                            <button class="btn search-col1btn" type="submit">Search Your Property</button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-6  col-12  mb-4">
                                <div class="row">
                                    <div class="d-flex flex-wrap justify-content-between py-1">
                                        <div class="">
                                            @if ($properties->total() > 0)
                                                <p class="search-col2-t">
                                                    Showing {{ $properties->firstItem() }} – {{ $properties->lastItem() }} of {{ $properties->total() }} results (out of {{ $totalProperties }} total properties)
                                                </p>
                                            @else
                                                <p class="search-col2-t">No properties found matching your criteria.</p>
                                            @endif
                                        </div>
                                    </div>
                                    <!--  -->
                                    @if ($properties->isEmpty())
                                        <p>No properties found matching your criteria.</p>
                                    @else
                                        @foreach ($properties as $property)
                                            <div class="col-lg-6 col-12 mb-4">
                                                <!-- Your property card HTML -->
                                                <div class="swiper-slide">
                                                    <a href="{{ route('properties.show.prop', $property->id) }}"
                                                        class="text-decoration-none">
                                                        <div class="px-3 position-relative sec2dH overflow-visible">
                                                            <div class="image-wrapper position-relative">
                                                                @foreach ($property->images as $propertyImage)
                                                                    @if ($propertyImage->propertyImage->imageCategory->category_name === 'Cover Image')
                                                                        <img src="{{ asset($propertyImage->propertyImage->image) }}"
                                                                            alt="Cover Image" class="sec2ImgMai">
                                                                        @if ($property->rera)
                                                                            <div
                                                                                class="rera-approval-badge position-absolute bottom-0 end-0 bg-success text-white p-1 rounded">
                                                                                <i class="fas fa-check-circle me-1"></i>
                                                                                <span>RERA Approved</span>
                                                                            </div>
                                                                        @endif
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="position-absolute sec2ImgD px-3 py-2">
                                                            <h6 class="mb-0 sec2PriceText text-dark">Starting Price
                                                                ₹{{ $property->formatted_price_range_start }}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="sec2pt rounded-3 px-3 index-swiper-slide">
                                                        <h6 class="sec2Texth6 text-start mb-0">{{ $property->title }}
                                                        </h6>
                                                        @foreach ($property->locations as $location)
                                                            <div class="d-flex pt-1">
                                                                <p><img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                                                        class="pe-2 sec2ImgWS1" alt=""></p>
                                                                <p class="sec2Textp text-start">
                                                                    {{ $location->area->area_name }},
                                                                    {{ $location->city->name }},
                                                                    {{ $location->state->name }}
                                                                </p>
                                                            </div>
                                                        @endforeach
                                                        <div class="sec2Bord w-100"></div>
                                                        <div class="row pt-3 pb-0 px-2 rounded-3">
                                                            <div class="col-6 mb-1">
                                                                <div class="d-flex">
                                                                    <p class="pe-3 pt-1"><img
                                                                            src="{{ asset('assets/frontend/img/Fit-to-Page.svg') }}"
                                                                            alt="" class="sec2ImgWS"></p>
                                                                    <p class="sec2Textp text-start">
                                                                        {{ $property->flat_area }} Sq Ft
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-1">
                                                                <div class="d-flex">
                                                                    <p class="pe-3 pt-1"><img
                                                                            src="{{ asset('assets/frontend/img/Bed.svg') }}"
                                                                            alt="" class="sec2ImgWS"></p>
                                                                    <p class="sec2Textp text-start">
                                                                        {{ $property->bhk_type }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!-- Pagination links -->
                                    <div class="pagination">
                                        {{ $properties->links() }}
                                    </div>
                                @endif


                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6  col-12  mb-4 ">
                            <div class=" rounded-2">
                                <div class="">
                                    <div class="  rounded-2 Detail-psec2borde w-100    ">
                                        <h2 class="psec2c2h  search-col3h2   pb-2 pt-3 px-3 rounded-top">Why Invest
                                            through
                                            Propy Homes?</h2>
                                        <div class="Detail-psec2borde1 search-psec2borde1 px-3  py-3  rounded-bottom ">
                                            <div class="d-flex ">
                                                <div class="flex-shrink-0  ">
                                                    <img src="{{ asset('assets/frontend/search/percent.svg') }}"
                                                        width="35px" alt="...">
                                                </div>
                                                <div class="flex-grow-1 ms-3  ">
                                                    <p class="mb-0   search-col3p">Zero Brokerage</p>
                                                    <p class="search-col3p1">100% Service, 0% Brokerage</p>
                                                </div>
                                            </div>
                                            <div class="d-flex ">
                                                <div class="flex-shrink-0 ">
                                                    <img src="{{ asset('assets/frontend/search/headphone.svg') }}"
                                                        width="35px" alt="...">
                                                </div>
                                                <div class="flex-grow-1 ms-3  ">
                                                    <p class="mb-0  search-col3p">Full Service Support </p>
                                                    <p class="search-col3p1">Our sales personnel are accountable for
                                                        every step
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex ">
                                                <div class="flex-shrink-0 ">
                                                    <img src="{{ asset('assets/frontend/search/batter1.svg') }}"
                                                        width="35px" alt="...">
                                                </div>
                                                <div class="flex-grow-1 ms-3  ">
                                                    <p class="mb-0  search-col3p">Lowest Price Guaranteed </p>
                                                    <p class="search-col3p1">If you find a lower price anywhere,
                                                        tell us and we
                                                        will
                                                        match
                                                        it.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex  mt-1">
                                    <div class=" w-100  mt-3 mb-4">
                                        <button type="button"
                                            class="btn  btn-lg p-1  search-s2btn rounded-1 w-100 "><img
                                                src="{{ asset('assets/frontend/search/Detail-whatsapp.svg') }}"
                                                alt=""> <span class="ps-0">WhatsApp</span>
                                        </button>
                                    </div>
                                    <div class="   w-100 ms-2 mt-3 mb-4">
                                        <button type="button" class="btn  btn-lg  p-1 search-s2btn1 rounded-1  w-100"
                                            widht="100% ">
                                            <img src="{{ asset('assets/frontend/search/Detail-telephone-call.svg') }}"
                                                alt="">
                                            <span class="ps-0 text-white   ">
                                                Get a call back </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="p-2 psec2bordeS-shodow     rounded-2 mt-0">
                                    <div class="pt-2 ">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <a class="nav_a text-decoration-none  active  navhtext search-navCallIcon "
                                                    aria-current="page" href="tel:+911-800-700-6200">
                                                    <img src="{{ asset('assets/frontend/search/Detail-call1.svg') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="flex-grow-1 ms-2  ">
                                                <p class="mb-0  search-icon-text">Contact our Real Estate Experts
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('contacts.store') }}" method="POST">
                                        @csrf

                                        @if(session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        <input class="form-control mb-3 Detail-form-control" type="text" name="name" placeholder="Name" required>
                                        <input class="form-control mb-3 Detail-form-control" type="email" name="email" placeholder="Email" required>

                                        <div class="container Detail-dropdown px-0 rounded-2">
                                            <div class="dropdown-container rounded-2">
                                                <select name="country_code" class="dropdown Detail-select rounded-2">
                                                    <option value="+91">+91</option>
                                                    <!-- Add more country codes as needed -->
                                                </select>
                                            </div>
                                            <div class="input-container Detail-inpute-div">
                                                <input type="text" name="phone" class="form-control w-100 border-0" placeholder="Phone" required>
                                            </div>
                                        </div>

                                        <p class="fw-semibold mt-3 Detail-textIntere">Interested in</p>
                                        <select name="interest" class="form-select mb-3" required>
                                            <option value="Buying">Buying</option>
                                            <option value="Selling">Selling</option>
                                            <option value="Home Loan">Home Loan</option>
                                        </select>

                                        <div class="d-grid gap-2 mt-3">
                                            <button class="btn Detail-btnCN" type="submit">Contact Now</button>
                                        </div>
                                    </form>
                                </div>
                                <div class=" rounded-3 Detail-cardOffer ">
                                    <div class="search-cardOfferImg py-4 px-4 mt-4">
                                        <h6 class="search-cardOffer-h6 pb-2">Save up to</h6>
                                        <h6> <span class="search-cardOffer-h61">₹10,000 </span> <span
                                                class="search-cardOffer-h62"> on Home Loan Processing Fee</span>
                                        </h6>
                                        <ul class="search-ulW py-2">
                                            <li class="">Attractive Interest Rates</li>
                                            <li class="">Greater Loan Eligibility</li>
                                            <li class="">Instant Approval</li>
                                        </ul>
                                        <a class="btn  search-cardOffer-btn my-3" href="#" role="button">Get
                                            Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
const minRange = document.getElementById('minRange');
const maxRange = document.getElementById('maxRange');
const minValue = document.getElementById('minValue');
const maxValue = document.getElementById('maxValue');

// Function to format the number as Lakh or Crore
function formatCurrency(value) {
    if (value >= 10000000) {
        return `₹${(value / 10000000).toFixed(2)} Crore`;
    } else if (value >= 100000) {
        return `₹${(value / 100000).toFixed(2)} Lakh`;
    }
    return `₹${value.toLocaleString()}`;
}

minRange.addEventListener('input', function() {
    let minVal = parseInt(minRange.value);
    let maxVal = parseInt(maxRange.value);

    // Ensure min value doesn't exceed max value
    if (minVal >= maxVal) {
        minVal = maxVal - 1000;
        minRange.value = minVal;
    }

    minValue.textContent = formatCurrency(minVal);
});

maxRange.addEventListener('input', function() {
    let minVal = parseInt(minRange.value);
    let maxVal = parseInt(maxRange.value);

    // Ensure max value doesn't go below min value
    if (maxVal <= minVal) {
        maxVal = minVal + 1000;
        maxRange.value = maxVal;
    }

    maxValue.textContent = formatCurrency(maxVal);
});

</script>
{{-- <script>
    const minRange = document.getElementById('minRange');
    const maxRange = document.getElementById('maxRange');
    const minValue = document.getElementById('minValue');
    const maxValue = document.getElementById('maxValue');
    minRange.addEventListener('input', function() {
        let minVal = parseInt(minRange.value);
        let maxVal = parseInt(maxRange.value);
        // Ensure min value doesn't exceed max value
        if (minVal >= maxVal) {
            minVal = maxVal - 1000;
            minRange.value = minVal;
        }
        minValue.textContent = `₹${minVal.toLocaleString()}`;
    });
    maxRange.addEventListener('input', function() {
        let minVal = parseInt(minRange.value);
        let maxVal = parseInt(maxRange.value);
        // Ensure max value doesn't go below min value
        if (maxVal <= minVal) {
            maxVal = minVal + 1000;
            maxRange.value = maxVal;
        }
        maxValue.textContent = `₹${maxVal.toLocaleString()}`;
    });
</script> --}}
@endsection
