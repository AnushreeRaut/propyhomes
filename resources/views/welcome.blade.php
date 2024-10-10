<div class="row">
    @if ($properties->isEmpty())
        <p>No properties found matching your criteria.</p>
    @else
        @foreach ($properties as $property)
            <div class="col-xl-6 col-lg-8 col-md-6 col-12 mb-4">
                <div class="sec2pt rounded-3 px-3 index-swiper-slide">
                    @foreach ($property->images as $propertyImage)
                    @if ($propertyImage->propertyImage->imageCategory->category_name === 'Cover Image')
                    <img src="{{ asset($propertyImage->propertyImage->image) }}" alt="Cover Image" class="sec2ImgMai">
                    <!-- Check if the property is RERA approved and display a badge -->
                    @if ($property->rera)
                    <!-- Small box or icon for RERA approval using Font Awesome -->
                    <div class="rera-approval-badge position-absolute bottom-0 end-0 bg-success text-white p-1 rounded">
                        <i class="fas fa-check-circle me-1"></i> <!-- Font Awesome Icon -->
                        <span>RERA Approved</span>
                    </div>
                    @endif
                        @break
                    @endif
                @endforeach
                    <div class="d-flex justify-content-between">
                        <h6 class="sec2Texth6 text-start mb-0">{{ $property->title }}</h6>
                    </div>

                    @foreach ($property->locations as $location)
                        <div class="d-flex pt-1">
                            <p><img src="{{ asset('assets/frontend/img/maps-and-flags.svg') }}" class="pe-2 sec2ImgWS1" alt=""></p>
                            <p class="sec2Textp text-start">
                                {{ $location->city->name }}, {{ $location->state->name }}, {{ $location->country->name }}
                            </p>
                        </div>
                    @endforeach
                    <div class="sec2Bord w-100"></div>
                    <div class="row pt-3 pb-0 px-2 rounded-3">
                        <div class="col-6 mb-1">
                            <div class="d-flex">
                                <p class="pe-3 pt-1"><img src="{{ asset('assets/frontend/img/Fit-to-Page.svg') }}" alt="" class="sec2ImgWS"></p>
                                <p class="sec2Textp text-start">{{ $property->size }} Sq Ft</p>
                            </div>
                        </div>
                        <div class="col-6 mb-1">
                            <div class="d-flex">
                                <p class="pe-3 pt-1"><img src="{{ asset('assets/frontend/img/Bed.svg') }}" alt="" class="sec2ImgWS"></p>
                                <p class="sec2Textp text-start">{{ $property->bhk_type }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
