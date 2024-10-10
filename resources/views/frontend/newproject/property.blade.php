@extends('frontend.layout.main')

@section('tags')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details</title>
@endsection

@section('content')
@include('auth.success-message')
@include('auth.error-message')
    <!-- +++++++++++  section 1  +++++++++++ -->
    <section class="mt-5" style="margin-top: 114px !important;">
        <div class="container mb-5 mt-5">
            <p class="psec1p"><span class=""> Home</span> <img src="{{ asset('assets/frontend/img/propertyArrow.svg') }}"
                    class="px-2" alt="">
                <span class=" text-dark">{{ $property->title }}</span>
            </p>
        </div>

    </section>
    <!-- ========  section 1   END  ======== -->
    <!-- +++++++++++  section 2  +++++++++++ -->
    <section class="my-5 mt-5">
        <div class="container mt-5">
            <div class="row">

                <div class="col-xl-8 col-lg-12 mb-xl-2 mb-5">
                    <!-- Display Elevation Image -->
                    <h4 class="mb-3">Elevation Image</h4>

                    <div class="container mb-5 ">
                        <div class="container mb-5">
                            <!-- Elevation Slide -->
                            <div class="mySlides position-relative">
                                @foreach ($property->images as $propertyImage)
                                    @if ($propertyImage->propertyImage->imageCategory->category_name === 'Elevation')
                                        <img src="{{ asset($propertyImage->propertyImage->image) }}" width="100%"
                                            alt="Elevation Image" class="pDetailImg rounded-4 pDetailb-size">
                                    @break

                                    <!-- Stop after the first Elevation image -->
                                @endif
                            @endforeach

                            <!-- Additional UI Elements for Elevation Image -->
                            <div class="Detail-s2phc position-absolute text-center">
                                <h2 class="mb-0"><i class="fa-regular fa-heart"></i> Compare</h2>
                            </div>
                            <div class="Detail-s2phc1 position-absolute text-center">
                                <img src="{{ asset('assets/frontend/search/shareSVGImg.svg') }}" alt="">
                            </div>
                        </div>
                        <!-- Main Category Images -->
                        @php
                            $mainImages = $property->images->where('propertyImage.imageCategory.category_name', 'Main');
                        @endphp

                        @if ($mainImages->isNotEmpty())
                            @foreach ($mainImages as $index => $mainImage)
                                <div class="mySlides position-relative">
                                    <img src="{{ asset($mainImage->propertyImage->image) }}" width="100%"
                                        class="pDetailImg rounded-4" alt="Main Image {{ $index + 1 }}">
                                    <div class="Detail-s2phc position-absolute text-center">
                                        <h2 class="mb-0"><i class="fa-regular fa-heart"></i> Compare</h2>
                                    </div>
                                    <div class="Detail-s2phc1 position-absolute text-center">
                                        <img src="{{ asset('assets/frontend/search/shareSVGImg.svg') }}" alt="">
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No Main Images available.</p>
                        @endif

                        <!-- Slider Navigation -->
                        <a class="prev" onclick="plusSlides(-1)"><i
                                class="fa-solid fa-arrow-left-long fa-arrow-both-long" style="color: #3D3D3D;"></i></a>
                        <a class="next" onclick="plusSlides(1)"><i
                                class="fa-solid fa-arrow-right-long fa-arrow-both-long" style="color: #3D3D3D;"></i></a>

                        <!-- Caption for Images -->
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <!-- Thumbnails for Elevation and Main Category -->
                        <div class="row">
                            <!-- Elevation Thumbnail -->
                            <div class="column Detail-column">
                                @foreach ($property->images as $propertyImage)
                                    @if ($propertyImage->propertyImage->imageCategory->category_name === 'Elevation')
                                        <img src="{{ asset($propertyImage->propertyImage->image) }}" width="100%"
                                            class="demo cursor rounded-2 pDetailImg pDetails-size"
                                            onclick="currentSlide(1)" alt="Elevation Thumbnail">
                                    @break
                                @endif
                            @endforeach
                        </div>
                        <!-- Main Category Thumbnails -->
                        @php
                            $slideIndex = 2; // Start counting for main images after Elevation
                        @endphp
                        @foreach ($mainImages as $index => $mainImage)
                            <div class="column Detail-column">
                                <img src="{{ asset($mainImage->propertyImage->image) }}" width="100%"
                                    class="demo cursor rounded-2 pDetailImg pDetails-size"
                                    onclick="currentSlide({{ $slideIndex }})"
                                    alt="Main Thumbnail {{ $index + 1 }}">
                            </div>
                            @php
                                $slideIndex++;
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="rounded-2 psec2bordeS mt-4">

                <div class="px-4 px-md-5 pt-5 pb-4 pb-md-5 Detail-Amen">

                    <h2 class="psec2c1h   ">{{ $property->title }}</h2>
                </div>

                <div class="px-4 px-md-5 pt-4 pb-4 pb-md-5">

                    <div class="row">
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="psec2c1h3">Amenities</h6>
                            </div>
                            <div class="col-md-4">
                                @foreach ($property->amenities as $amenity)
                                    @if ($amenity->pivot->is_true)
                                        <div class="d-flex mb-1">
                                            <h5>
                                                <img src="{{ asset($amenity->icon_image ?: 'assets/frontend/search/Furniture.png') }}"
                                                    width="35px" class="pe-3" alt="{{ $amenity->name }}">
                                            </h5>
                                            <h5 class="psec2c1font pt-1">{{ $amenity->name }}</h5>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-4">

                        </div>
                    </div>

                </div>

                <div class="px-4 px-md-5 pt-4 pb-4 pb-md-5 Detail-AmenBorder">


                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="psec2c1h3">Property Features</h2>
                        </div>
                        <div class="col-md-8">
                            <!-- Iterate through the utilities associated with the property -->
                            @foreach ($property->utilities as $utility)
                                <div class="d-flex mb-1">
                                    <!-- Display utility name and value together -->
                                    <h5 class="psec2c1font">{{ $utility->name }}:</h5>
                                    <p class="ms-2">{{ $utility->pivot->value }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>



                </div>

                <div class="px-4 px-md-5 pt-4 pb-4 pb-md-5 Detail-AmenBorder">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="psec2c1h3">Type of Parking</h2>
                        </div>
                        <div class="col-md-8">
                            <!-- Display parking type if available -->
                            @foreach ($property->utilities as $utility)
                                @if ($utility->pivot->parking_type)
                                    <p class="Detail-padding psec2c1font">{{ $utility->pivot->parking_type }}</p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="px-4 px-md-5 pt-4 pb-4 pb-md-5 Detail-AmenBorder">

                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="psec2c1h3">Special Highlights</h2>
                        </div>

                        <!-- Loop through special highlights and display them -->
                        <div class="col-md-4 Detail-padding1">
                            @foreach ($property->specialHighlights->take(5) as $highlight)
                                <h5 class="psec2c1font py-1">{{ $highlight->name }}</h5>
                            @endforeach
                        </div>

                        <div class="col-md-4 Detail-padding1">
                            @foreach ($property->specialHighlights->skip(5)->take(5) as $highlight)
                                <h5 class="psec2c1font py-1">{{ $highlight->name }}</h5>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            @if (!empty($embedUrl))
                <div class="p-4 psec2bordeS rounded-2 mt-5">
                    <h4 class="psec2c1h pb-3">Video</h4>
                    <div class="text-center text-lg-start">
                        <!-- Display YouTube Video if the embed URL is available -->
                        <iframe width="100%" height="315" src="{{ $embedUrl }}" frameborder="0"
                            allowfullscreen
                            onerror="this.style.display='none'; document.getElementById('video-placeholder').style.display='block';">
                        </iframe>
                        <!-- Placeholder Image as a Fallback -->
                        <img id="video-placeholder" src="{{ asset('assets/frontend/img/video.png') }}"
                            width="100%" alt="Video Placeholder" style="display: none;">
                    </div>
                </div>
            @else
                <!-- Display Placeholder Image if no video URL is available -->
                {{-- <img src="{{ asset('assets/frontend/img/video.png') }}" width="100%" alt="Video Placeholder"> --}}
            @endif



            <div class="p-4 psec2bordeS rounded-2 mt-5">
                <div class="">
                    <h4 class="psec2c1h pb-3">
                        Floor Plans
                    </h4>
                    <div class="text-center text-lg-start">
                        <!-- Display 'Floor Plan' Image -->
                        @php
                            // Filter the images to find the 'Floor Plan' category
                            $floorPlanImage = $property->images->firstWhere(
                                'propertyImage.imageCategory.category_name',
                                'Floor Plan',
                            );
                        @endphp

                        @if ($floorPlanImage)
                            <!-- Display the Floor Plan image -->
                            <img src="{{ asset($floorPlanImage->propertyImage->image) }}" alt="Floor Plan"
                                class="img-fluid">
                        @else
                            <p>No Floor Plan available.</p>
                        @endif
                    </div>

                </div>
                <div class="p-4 psec2bordeS rounded-2 mt-5">
                    <div class="mt-5">
                        <h4 class="psec2c1h pb-3">Property Images</h4>
                        <div class="text-center text-lg-start">
                            <!-- Display 'Main' Images -->
                            @php
                                $mainImages = $property->images->where(
                                    'propertyImage.imageCategory.category_name',
                                    'Main',
                                );
                            @endphp

                            @if ($mainImages->isNotEmpty())
                                @foreach ($mainImages as $mainImage)
                                    <img src="{{ asset($mainImage->propertyImage->image) }}" alt="Main Image"
                                        class="img-fluid mb-3">
                                @endforeach
                            @else
                                <p>No Main Images available.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <!-- <div class=" p-4 rounded-2 psec2borde w-100  position-sticky topfixed"> -->

        <div class="col-xl-4 col-lg-12   ">

            <div class="  rounded-2  w-100  position-sticky topfixed">

                <div class="">
                    <h2 class="psec1h1">{{ $property->title }}</h2>
                </div>
                <div class="d-flex justify-content-between pb-3 flex-wrap pt-2  border-bottom ">
                    <div class="d-flex">
                        <div class=""><img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}"
                                class="pe-2 text-dark" alt="">
                        </div>

                        <!-- Display Location -->
                        @foreach ($property->locations as $location)
                            <h6 class="pt-1">
                                {{ $location->area->area_name }},
                                {{ $location->city->name }}, {{ $location->state->name }},
                                {{ $location->country->name }}
                            </h6><br>
                        @endforeach
                        <h6 class="pt-1">
                            <strong>Landmarks:</strong>
                            @if ($property->landmarks->isNotEmpty())
                                <ul class="list-unstyled mt-2">
                                    @foreach ($property->landmarks as $landmark)
                                        <li>{{ $landmark->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No landmarks available for this property.</p>
                            @endif
                        </h6>

                    </div>
                    <!-- <h5 class="psec1h5 pt-md-0 pt-3">₹30.66L - 53.03 L</h5> -->
                </div>
                <div class="pt-3">
                    <h2 class="psec1h1">
                        Starting Price ₹ {{ $property->formatted_price_range_start }}
                    </h2>
                    <p>Status: <span class="fw-semibold">{{ $property->possession_status }}</span></p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/frontend/search/Group1830.png') }}" width="48px"
                            alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3 pt-3">
                        <p class="mb-0">Property Size</p>
                        <p class="psec1p">{{ $property->size }} Sq Ft</p>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/frontend/search/Group1830.png') }}" width="48px"
                            alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3 pt-3">
                        <p class="mb-0">Flat Area</p>
                        <p class="psec1p">{{ $property->flat_area }} Sq Ft</p> <!-- New field -->
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/frontend/search/Group1830.png') }}" width="48px"
                            alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3 pt-3">
                        <p class="mb-0">Project Completion Date</p>
                        <p class="psec1p">
                            {{ $property->project_completion_date
                                ? \Carbon\Carbon::parse($property->project_completion_date)->format('d
                                        M, Y')
                                : 'Not Available' }}
                        </p>
                    </div>

                </div>

                {{-- <div class="d-flex align-items-center">
    <div class="flex-shrink-0">
        <img src="{{ asset('assets/frontend/search/Group1830.png') }}" width="48px" alt="...">
    </div>
    <div class="flex-grow-1 ms-3 pt-3">
        <p class="mb-0">RERA</p>
        <p class="psec1p">{{ $property->rera ? 'Yes' : 'No' }}</p> <!-- New field -->
                    </div>
</div> --}}

                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/frontend/search/Group1830.png') }}" width="48px"
                            alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3 pt-3">
                        <p class="mb-0">Number of Flats</p>
                        <p class="psec1p">{{ $property->no_of_flats }}</p> <!-- New field -->
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/frontend/search/Group1830.png') }}" width="48px"
                            alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3 pt-3">
                        <p class="mb-0">Number of Floors</p>
                        <p class="psec1p">{{ $property->no_of_floors }}</p> <!-- New field -->
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/frontend/search/Group1831.png') }}" width="48px"
                            alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3  pt-3">
                        <p class="mb-0 "> <span
                                class="fw-semibold">Configurations:</span> {{ $property->bhk_type }}</p>
                        <p class="psec1p ">{{ $property->size }}</p>


                    </div>
                </div>


                <div class="d-flex ">


                    <div class=" w-100  mt-3 mb-4">
                        <button type="button" class="btn  btn-lg  detail-s2btn w-100 "><img
                                src="{{ asset('assets/frontend/search/Detail-whatsapp.svg') }}" alt="">
                            <span class="ps-2">WhatsApp</span>
                        </button>

                    </div>
                    <div class="   w-100 ms-4 mt-3 mb-4">
                        <button type="button" class="btn  btn-lg   detail-s2btn1   w-100" widht="100% "> <img
                                src="{{ asset('assets/frontend/search/Detail-telephone-call.svg') }}"
                                alt=""> <span class="ps-2 text-white   ">
                                Large
                                button </span>
                        </button>
                    </div>




                </div>


                <div class="  rounded-2 Detail-psec2borde w-100   ">
                    <h2 class="psec2c2h    pb-2 pt-3 px-4 rounded-top">Why Invest through Square Yards?</h2>


                    <div class="Detail-psec2borde1 px-4  py-2  rounded-bottom ">

                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/frontend/search/percent.svg') }}" width="35px"
                                    alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3  pt-3">
                                <p class="mb-0 Detail-textp">Zero Brokerage</p>
                                <p class="psec1p ">100% Service, 0% Brokerage</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/frontend/search/headphone.svg') }}" width="35px"
                                    alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3  pt-3">
                                <p class="mb-0 Detail-textp ">Full Service Support </p>
                                <p class="psec1p ">Our sales personnel are accountable for every step </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/frontend/search/batter1.svg') }}" width="35px"
                                    alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3  pt-3">
                                <p class="mb-0 Detail-textp">Lowest Price Guaranteed </p>
                                <p class="psec1p ">If you find a lower price anywhere, tell us and we will match
                                    it.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="p-3 psec2bordeS-shodow    rounded-2 mt-5">
                    <div class="pt-2 ">

                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <a class="nav_a text-decoration-none  active  navhtext  Detail-navCallIcon  "
                                    aria-current="page" href="tel:+911-800-700-6200">
                                    <img src="{{ asset('assets/frontend/img/Detail-call1 (1).svg') }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3  ">
                                <p class="mb-0  Detail-icon-text">Contact our Real Estate Experts</p>

                            </div>
                        </div>

                    </div>


                    <div class="rounded-2 Detail-psec2bordeI w-100 Detail-inputPlace mt-4 px-3 py-4">
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
                                        <option value="+1">+1</option>
                                        <option value="+44">+44</option>
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

                        <!-- Additional Information Section -->
                        <div class="Detail-div3R mt-4">
                            <div class="Detail-div3 text-center p-2 rounded-3 mb-1 pt-3">
                                <img src="assets/frontend/img/percent1.png" width="50px" class="pb-1" alt="">
                                <h5 class="Detail-div3T">Zero Brokerage</h5>
                            </div>
                            <div class="Detail-div3 text-center p-2 rounded-3 mb-1 pt-3">
                                <img src="assets/frontend/img/headphone1.svg" alt="">
                                <h5 class="Detail-div3T">Full Service Support</h5>
                            </div>
                            <div class="Detail-div3 text-center p-2 rounded-3 mb-1 pt-3">
                                <img src="assets/frontend/img/batter1.svg" alt="">
                                <h5 class="Detail-div3T">Lowest Price Guaranteed</h5>
                            </div>
                        </div>
                    </div>





                </div>
                <div class=" rounded-3 Detail-cardOffer ">
                    <div class="Detail-cardOfferImg py-4 px-5 mt-4">
                        <h6 class="Detail-cardOffer-h6 pb-2">Save up to</h6>

                        <h6> <span class="Detail-cardOffer-h61">₹10,000 </span> <span
                                class="Detail-cardOffer-h62"> on Home Loan Processing Fee</span> </h6>



                        <ul class="Detail-ulW py-2">
                            <li class="">Attractive Interest Rates</li>
                            <li class="">Greater Loan Eligibility</li>
                            <li class="">Instant Approval</li>
                        </ul>


                        <a class="btn  Detail-cardOffer-btn my-3" href="#" role="button">Get Offer</a>



                    </div>



                </div>



            </div>


        </div>
    </div>
</section>
<!-- ========  section 2   END  ======== -->
<!-- Add JavaScript for Slider -->
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");

        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
<script>
    // Real-time validation
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        // Prevent form submission
        event.preventDefault();

        // Clear previous error messages
        clearErrors();

        // Validate fields
        let isValid = true;

        // Validate name
        const name = document.getElementById('name');
        if (name.value.trim() === '') {
            showError(name, 'Name is required');
            isValid = false;
        }

        // Validate email
        const email = document.getElementById('email');
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (email.value.trim() === '') {
            showError(email, 'Email is required');
            isValid = false;
        } else if (!emailPattern.test(email.value.trim())) {
            showError(email, 'Invalid email format');
            isValid = false;
        }

        // Validate phone
        const phone = document.getElementById('phone');
        if (phone.value.trim() === '') {
            showError(phone, 'Phone number is required');
            isValid = false;
        } else if (isNaN(phone.value.trim()) || phone.value.trim().length < 10) {
            showError(phone, 'Invalid phone number');
            isValid = false;
        }

        // If all validations pass, submit the form
        if (isValid) {
            this.submit();
        }
    });

    // Function to display error messages
    function showError(input, message) {
        const error = document.createElement('div');
        error.className = 'text-danger mb-2';
        error.innerText = message;
        input.classList.add('is-invalid');
        input.parentNode.insertBefore(error, input.nextSibling);
    }

    // Function to clear error messages
    function clearErrors() {
        const errors = document.querySelectorAll('.text-danger');
        errors.forEach(error => error.remove());
        const inputs = document.querySelectorAll('.form-control, .form-select');
        inputs.forEach(input => input.classList.remove('is-invalid'));
    }
    </script>
<!-- <div class=" p-4 rounded-2 psec2borde w-100  position-sticky topfixed"> --

@endsection
