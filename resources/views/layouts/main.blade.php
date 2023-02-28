<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset ('favicon.ico') }}" type="image/ico" rel="icon">
    <title>{{env('APP_NAME', 'Trains')}} | @yield('title')</title>

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css' integrity='sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==' crossorigin='anonymous'>
    
    @yield('cdns')
    @vite('resources/js/app.js')

</head>

<body>
    @include('includes.header')
    <main>
        @yield('main-content')
    </main>
    @include('includes.footer')

    @yield('scripts')
</body>
</html>