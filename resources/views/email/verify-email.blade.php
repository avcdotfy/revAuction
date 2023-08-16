<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h2>Hi please click on email verification link to verify your email </h2>
    Dear {{ $data ? $data['username'] : '' }},

    <p>Congratulation for the registration on {{ env('APP_NAME') }}.</p>

    <p>Please click the link below to verify </p>

    <a class="btn btn-primary" href="{{ $link }}">Verify</a>
</body>

</html>
