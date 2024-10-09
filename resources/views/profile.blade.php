@extends('admin.layout.layout')

@section('content')
    <div id="content" class="p-4">
        @include('auth.success-message')
        @include('auth.error-message')

        <!-- Page Header -->
        <h1 class="ds1col1texth1">Profile</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card profile-card">
                    <div class="card-header">
                        <h2 class="profile-title">User Profile</h2>
                    </div>
                    <div class="card-body">
                        <div class="profile-avatar text-center p-3">
                            <img src="{{ asset('assets/frontend/img/User.svg') }}" alt="User Avatar" class="avatar-img">
                        </div>
                        <div class="profile-info mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="profile-detail">
                                        <i class="fas fa-user profile-icon"></i>
                                        <strong>Name:</strong> {{ Auth::user()->name }}
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="profile-detail">
                                        <i class="fas fa-envelope profile-icon"></i>
                                        <strong>Email:</strong> {{ Auth::user()->email }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="profile-detail">
                                        <i class="fas fa-phone profile-icon"></i>
                                        <strong>Mobile:</strong> {{ Auth::user()->mobile ?? 'N/A' }}
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="profile-detail">
                                        <i class="fas fa-building profile-icon"></i>
                                        <strong>Department:</strong> {{ Auth::user()->department ?? 'N/A' }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="profile-detail">
                                        <i class="fas fa-users profile-icon"></i>
                                        <strong>Team:</strong> {{ Auth::user()->team ?? 'N/A' }}
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="profile-detail">
                                        <i class="fas fa-user-shield profile-icon"></i>
                                        <strong>Role:</strong> {{ Auth::user()->role->role_name ?? 'N/A' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="profile-actions text-center mt-4">
                            <!-- Button to open password change modal -->
                            <div class="profile-actions text-center mt-4">
                                <button class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Password Change Modal -->
        <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="passwordChangeForm" action="{{ route('profile.change-password') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Current Password</label>
                                <input type="password" name="current_password" class="form-control" id="currentPassword"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" name="new_password" class="form-control" id="newPassword" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                <input type="password" name="new_password_confirmation" class="form-control"
                                    id="confirmPassword" required>
                            </div>
                            <button type="submit" class="btn btn-edit">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        :root {
            --body-color: #f8f9fa;
            /* Adjust body background color */
            --color-gold: #c8a864;
            --color-white: white;
            --font-weight-700: 700;
            --font-weight-400: 400;
            --font-weight-600: 600;
            --font-weight-500: 500;
            --btn-height: 50px;
            --color-675d5d: #675d5d;
            --color-3d3d3d: #3d3d3d;
        }

        body {
            background-color: var(--body-color);
            font-family: Arial, sans-serif;
        }

        .profile-card {
            border: none;
            border-radius: 10px;
            background-color: var(--color-white);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-title {
            font-weight: var(--font-weight-700);
            color: var(--color-3d3d3d);
            text-align: center;
        }

        .profile-avatar {
            margin-top: 20px;
        }

        .avatar-img {
            width: 115px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid var(--color-gold);
        }

        .profile-info {
            margin-top: 20px;
        }

        .profile-detail {
            font-weight: var(--font-weight-500);
            color: var(--color-675d5d);
            margin: 10px 0;
        }

        .profile-icon {
            margin-right: 10px;
            color: var(--color-gold);
        }

        .profile-actions .btn {
            background-color: var(--color-gold);
            color: var(--color-white);
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-weight: var(--font-weight-600);
            text-transform: uppercase;
            height: var(--btn-height);
            border-radius: 5px;
        }

        .btn-edit:hover {
            background-color: #b58957;
        }
    </style>

    <!-- Bootstrap JS for alert functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
