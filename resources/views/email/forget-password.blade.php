<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hi please click on this reset password link to reset your password </h1>
    Dear {{ $data['username'] }},

    <p> We received a request to reset the password for your account associated with {{ env('APP_NAME') }}.
        If you didn't initiate this request, you can safely ignore this email.</p>

    <p>To proceed with the password reset, please click the link below:</p>

    <a href="{{ $data['reset_link'] }}">{{ $data['reset_link'] }}</a>
</body>

</html>
