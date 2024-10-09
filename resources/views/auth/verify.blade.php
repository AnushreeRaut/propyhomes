<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
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
        /* .email_btn {
            background: #1E1E1E;
            border: 2px solid #A07A43;
            margin: 0 10px;
            border-radius: 50px;
        } */
        .email_btn {
            background: #1E1E1E;
            border: 2px solid #A07A43;
            color: white;
            border-radius: 50px;
            padding: 10px 40px;
        }
        .email_btn:hover {
            background: linear-gradient(90deg, #E9E09B 0%, #A07A43 100%);
            border: 2px solid #A07A43;
        }
        /* .email_btn:hover .navbtna {
            color: #000000;
        } */
        .emial_text {
            font-weight: 600;
            /* color: black;
            -webkit-text-stroke: 1px #A07A43;
            text-shadow: 0px 2px 4px #A07A43; */
        }
    </style>
</head>
<body>
    <img src="/asset/img/logo1.png" class="logo_Img" alt="Logo">
    <!-- <img src="/assets/frontend/img/logo1.png" class="logo_Img" alt="Logo"> -->
    <!-- @include('auth.success-message') -->
    <div class="register-card s1-buton1">
        <h2 class="emial_text">Verify Your Email</h2>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('verify.code') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ request()->query('email') }}">
            <div class="mb-3">
                <label for="verification_code" class="form-label">Enter Verification Code</label>
                <input type="text" class="form-control" id="verification_code" name="verification_code" required>
            </div>
            <button type="submit" class="btn  email_btn">Verify</button>
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
