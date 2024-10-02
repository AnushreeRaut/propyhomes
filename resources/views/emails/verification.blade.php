<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification Code</title>
</head>
<body>
    <h1>Your Verification Code</h1>
    <p>Dear {{ $user->name }},</p>
    <p>Thank you for registering! Please enter the following verification code to complete your registration:</p>
    <h2>{{ $verification_code }}</h2>
    <p>If you did not register on our site, please ignore this email.</p>
</body>
</html>
