<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php $asset_name = ((date('H') >= 23) || (date('H') < 16 )) ? '/img/gr-dark-logo.png' : '/img/gr-light-logo.png' @endphp
    <link rel="icon" type="image/png" href="{{ asset($asset_name) }}">

    <title inertia>{{ env('APP_NAME', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('sass/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/baby-yoda.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
</head>

<body>
    @inertia
</body>
</html>
