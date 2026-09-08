<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        @yield ('title')
        - Codeflix
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.6.0-web/css/all.min.css') }}" />

    <style>
        body {
            background-color: #132029;
            color: white;
        }

        .card {
            background-color: #142936;
            border: 1px solid #19bc9b;
            border-radius: 15px;
        }

        .card-header {
            background-color: #19bc9b;
            border-bottom: 1px solid #19bc9b;
        }

        .text-green {
            color: #19bc9b;
        }

        .btn-green {
            background-color: #19bc9b;
            border-color: #19bc9b;
            color: #1a1d21;
        }

        .btn-green:hover {
            background-color: #132029;
            border-color: #19bc9b;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="py-5 container">
        <h2 class="mb-2 text-center">@yield ('title')</h2>

        @yield ('content')
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @yield ('scripts')
</body>
</html>
