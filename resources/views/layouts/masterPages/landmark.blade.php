
<!DOCTYPE html>
<html lang="fa-IR">
@include('layouts.partials.landmark.head')
<body>
<div class="site">
    @include('layouts.partials.landmark.header')
    @yield('content')
    <x-footer></x-footer>
</div>
<div id="go-to-top" class="go-to-top">
    <i class="fa fa-angle-up"></i>
</div>

<script src="/landmark/js/jquery.min.js"></script>
<script src="/landmark/js/jquery-migrate.min.js"></script>
<script src="/landmark/js/bootstrap.min.js"></script>
<script src="/landmark/js/modernizr-2.7.1.min.js"></script>
<script src="/landmark/js/owl.carousel.min.js"></script>
<script src="/landmark/js/off-cavnass.js"></script>
<script src="/landmark/js/jquery.magnific-popup.min.js"></script>
<script src="/landmark/js/script.js"></script>

<script src="/landmark/js/core.min.js"></script>
<script src="/landmark/js/widget.min.js"></script>
<script src="/landmark/js/mouse.min.js"></script>
<script src="/landmark/js/slider.min.js"></script>
<script src="/landmark/js/jquery.ui.touch-punch.js"></script>
<script src="/landmark/js/price-slider.js"></script>
{{--@livewireScripts--}}
</body>
</html>
