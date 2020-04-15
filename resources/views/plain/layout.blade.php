<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale())}}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-cale=1">

    <title>Plain Laravel</title>

    <!-- Fons -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="">
    @yield('styles')
</head>
<body>
    <div class="flex-center position-ref full-height">
        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>
