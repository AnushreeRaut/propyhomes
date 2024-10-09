@include('frontend.layout.header')
    <!-- baner -->
    @if (session('success'))
    <div class="py-2 mt-2">

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
    </div>
@endif
<!-- Display custom error from session -->
@if (session('error'))
    <div class="py-2 mt-2">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
    </div>
@endif
@include('auth.error-message')
@yield('content')
@include('frontend.layout.footer')
