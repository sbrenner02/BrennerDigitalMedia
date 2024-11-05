<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brenner Digital Media</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/style.css" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="background-color">
@section('php')
    @yield('php_scripts')
@endsection
<div class="container mb-5">
    <div class="row">
        <div class="title col-12 text-center my-3" id="title">
            <a href="/"><img src="/images/brennerdigital.png" class="mt-3 logo" alt="Brenner Digital Media"></a>
        </div>
    </div>
        @include('navigation')
        <br><br>
    <div class="flex-center row justify-content-center col-12 no-gutters">
        @yield('content')
    </div>

<div>
    @include('footer')
</div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
