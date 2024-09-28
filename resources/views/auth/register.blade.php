<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/asset/img/logo.png" type="image/x-icon">
    <!-- Font Awesome for eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: black;
            background: linear-gradient(135deg, black 50%, #A07A43 50%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .logo_Img {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 250px;
        }

        @media screen and (max-width: 992px) {
            .logo_Img {
                width: 180px;
            }
        }

        .register-card {
            background: linear-gradient(135deg, #C8A864, #A07A43);
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.6);
            animation: fadeIn 1.2s ease-in-out;
            max-width: 550px;
            width: 100%;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .register-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.7);
        }

        .register-header {
            text-align: center;
            color: white;
            margin-bottom: 40px;
            font-size: 2.5rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .form-control {
            border: 2px solid #A07A43;
            border-radius: 20px;
            padding: 15px 20px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #C8A864;
        }

        .password-toggle {
            position: relative;
        }

        .password-toggle .toggle-icon {
            position: absolute;
            top: 68%;
            right: 18px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #A07A43;
            font-size: 1.2rem;
        }

        .register-btn {
            background: linear-gradient(135deg, #A07A43, #C8A864);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 15px 20px;
            font-size: 1.3rem;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .register-btn:hover {
            background: linear-gradient(135deg, black, grey);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }

        .s1-buton1 {
            border: 3px solid transparent;
            background: linear-gradient(#C8A864, #C8A864) padding-box,
                linear-gradient(120deg, #C8A864, black, black) border-box;
            border-radius: 30px;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media screen and (max-width: 768px) {
            .register-card {
                padding: 40px 20px;
                max-width: 90%;
            }

            .register-header {
                font-size: 2rem;
            }

            .logo_Img {
                width: 150px;
            }
        }
    </style>
</head>

<body>

    <img src="/assets/frontend/img/logo1.png" class="logo_Img" alt="Logo">
    @include('auth.success-message')
    <div class="register-card s1-buton1">
        <h2 class="register-header">Register</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf <!-- This will generate the CSRF token field -->
            <div class="row">
                <div class="mb-4 col-12 col-md-6">
                    <label for="name" class="form-label text-white">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="email" class="form-label text-white">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>

                <div class="mb-4 col-12 col-md-6">
                    <label for="mobile" class="form-label text-white">Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter your mobile number" required>
                </div>

                <div class="mb-4 col-12 col-md-6 password-toggle">
                    <label for="password" class="form-label text-white">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                    <span class="toggle-icon" onclick="togglePasswordVisibility('password')">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>

                <div class="mb-4 col-12 col-md-6 password-toggle">
                    <label for="password_confirmation" class="form-label text-white">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm your password" required>
                    <span class="toggle-icon" onclick="togglePasswordVisibility('password_confirmation')">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn register-btn text-white">Register</button>
            </div>

            @if ($errors->any())
            <div class="error-message">
                <strong>{{ $errors->first() }}</strong>
            </div>
            @endif
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Toggle password visibility -->
    <script>
        function togglePasswordVisibility(fieldId) {
            var field = document.getElementById(fieldId);
            var icon = field.nextElementSibling.querySelector('i');

            if (field.type === "password") {
                field.type = "text";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = "password";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
