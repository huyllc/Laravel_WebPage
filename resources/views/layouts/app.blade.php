<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('WebPage') }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forgot.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/34db01ea1f.js" crossorigin="anonymous"></script>
</head>
<body>
    @yield('content')
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/register.js') }}"></script>
    <script src="{{ asset('js/forgotpass.js') }}"></script>
</body>
</html>
