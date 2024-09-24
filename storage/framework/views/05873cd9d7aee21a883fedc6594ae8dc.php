<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/asset/img/logo.png" type="image/x-icon">
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
            position: relative;
        }

        .logo_Img {
            position: absolute;
            top: 10px;
            left: 20px;
            width: 250px;
        }

        @media screen and (max-width: 992px) {
            .logo_Img {
                width: 200px;
            }
        }

        .login-card {
            background: linear-gradient(135deg, #C8A864, #A07A43);
            border-radius: 15px;
            padding: 40px 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            animation: fadeIn 1.2s ease-in-out;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            max-width: 400px;
            width: 100%;
            /* border: 5px solid red; */
        }

        .login-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        }

        .login-btn {
            background: linear-gradient(135deg, #A07A43, #C8A864);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-size: 1.2rem;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .login-btn:hover {
            background: linear-gradient(135deg, black, grey);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        .login-header {
            text-align: center;
            color: white;
            margin-bottom: 30px;
            font-size: 2rem;
            text-transform: uppercase;
        }

        .form-control {
            border: 2px solid #A07A43;
            border-radius: 20px;
            padding: 12px 20px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #C8A864;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }

        /* Animation */
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

        /* hhhhhhh */
        .s1-buton1 {
            border: 3px solid transparent;
            background: linear-gradient(#C8A864, #C8A864) padding-box,
                linear-gradient(120deg, #C8A864, black, black) border-box;
            border-radius: 30px;
        }
    </style>
</head>

<body>
    <img src="/assets/frontend/img/logo1.png" class="logo_Img" alt="">
    <div class="login-card s1-buton1  ">
        <h2 class="login-header">Login</h2>
        <form action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?> <!-- This will generate the CSRF token field -->

            <div class="mb-4">
                <label for="email" class="form-label text-white">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn login-btn btn-lg text-white">Login</button>
            </div>

            <?php if($errors->any()): ?>
            <div class="error-message">
                <strong><?php echo e($errors->first()); ?></strong>
            </div>
            <?php endif; ?>
        </form>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php /**PATH D:\propy\propyhome\propyhomes\resources\views/auth/login.blade.php ENDPATH**/ ?>