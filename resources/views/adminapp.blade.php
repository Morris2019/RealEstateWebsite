<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Maisons Tropicales Admin</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/adminstyle.css')}}" />
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
</head>

<body>
    <div class="wrapper">
        {{ $slot }}
        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="assets/vendors/chart.js/Chart.min.js"></script>
        <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="assets/vendors/flot/jquery.flot.js"></script>
        <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
        <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
        <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
        <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
        <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="assets/js/dashboard.js"></script>

        @stack('scripts')
</body>

</html>