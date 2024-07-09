<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('homepage.layouts.head')
<body class="antialiased bg-gray-100">
    @include('homepage.layouts.header')
    @yield('content')
    @include('homepage.layouts.footer')

    <!-- jQuery -->
    <script src="{{asset('pinwheel/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Swiper JS -->
    <script src="{{asset('pinwheel/plugins/swiper/swiper-bundle.js')}}"></script>
    <script src="{{asset('pinwheel/plugins/shufflejs/shuffle.js')}}"></script>

    <!-- Main Script -->
    <script src="{{asset('pinwheel/scripts/main.js')}}"></script>
    @yield('scripts')
</body>
</html>
