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
        <form action="{{ route('employees.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="name" class="form-label dpage5label">Name:</label>
                            <input type="text" name="name" id="name" class="form-control dpage5input"
                                value="{{ $user->name }}" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="email" class="form-label dpage5label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control dpage5input"
                                value="{{ $user->email }}" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="mobile" class="form-label dpage5label">Mobile:</label>
                            <input type="text" name="mobile" id="mobile" class="form-control dpage5input"
                                value="{{ $user->mobile }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">

                        <div class="form-group">
                            <label for="department" class="form-label dpage5label">Department:</label>
                            <input type="text" name="department" id="department" class="form-control dpage5input"
                                value="{{ $user->department }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="team" class="form-label dpage5label">Team:</label>
                            <input type="text" name="team" id="team" class="form-control dpage5input"
                                value="{{ $user->team }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="form-group">
                            <label for="role_id" class="form-label dpage5label">Role:</label>
                            <select name="role_id" id="role_id" class="form-control dpage5input">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                        {{ $role->role_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn px-5 py-1 mt-3 rounded-3 page3btnbgc text-decoration-none active">
                Update
            </button>
        </form>
    </div>
@endsection
