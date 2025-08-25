<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    your request has been approved. please login to your account using below details
    <p>email: {{ $data['email'] }}</p>
    <p>password: {{ $data['password'] }}</p>
    <a href="{{ env('APP_URL') }}/seller">Login</a>
</div>
</body>
</html>
