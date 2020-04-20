<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale())}}">
@include('layouts.header')
<body>
    <div class="flex-center position-ref full-height">
        @yield('content')
    </div>
    @yield('scripts')
    @yield('footer')
</body>
</html>
