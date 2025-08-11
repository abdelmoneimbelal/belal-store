<!DOCTYPE html>
<html>

<head>
    @include('layouts.head')
</head>

<body>
    <div class="page-holder {{ request()->routeIs('frontend.detail') ? 'bg-light' : '' }}">
        <!-- navbar-->
        @include('layouts.header')

        <!-- HERO SECTION-->
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.footer')
        <!-- JavaScript files-->
        @include('layouts.scripts')
    </div>
</body>

</html>