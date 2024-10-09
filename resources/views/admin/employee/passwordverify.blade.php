@extends('admin.layout.layout')

@section('content')
<div id="content" class="p-4">

    @include('auth.success-message')
        @include('auth.error-message')

    <h1 class="ds1col1texth1">OTP Verification</h1>


    <form action="{{ route('otp.verify') }}" method="POST">
        @csrf
        <input type="hidden" name="employee_id" value="{{ $employee_id }}">
        <div class="mb-3">
            <label for="otp_code" class="form-label">Enter OTP</label>
            <input type="text" class="form-control" id="otp_code" name="otp_code" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Verify OTP</button>
        </div>
    </form>
</div>
@endsection
