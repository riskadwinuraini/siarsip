<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>siarsipbkpsdmkabbondowoso.id</title>


        <link href="assets/images/file-icons/Logo.png" rel="icon">
        <!-- plugins:css -->
        <link rel="stylesheet" href="/assets/vendors/feather/feather.css">
        <link rel="stylesheet" href="/assets/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="/assets/css/vertical-layout-light/style.css">
        <!-- endinject -->
        {{-- <link rel="shortcut icon" href="/assets/images/favicon.png" /> --}}
    </head>
    <body>
        
        @yield('content')

    <!-- plugins:js -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/assets/js/chart.js"></script>
    <!-- End custom js for this page-->
    </body>
</html>
