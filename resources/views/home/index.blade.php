<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

        <!-- slider section -->
        @include('home.slider')
        <!-- end slider section -->
    </div>
    <!-- end hero area -->

    <!-- shop section -->
    @include('home.product')
    <!-- end shop section -->

    <!-- contact section -->
    @include('home.contact')
    <!-- end contact section -->

    <!-- info section -->
    @include('home.footer')
    <!-- end info section -->


    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
