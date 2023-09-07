<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>siarsipbkpsdmkabbondowoso.id</title>

        <!-- plugins:css -->
        <link rel="stylesheet" href="/assets/vendors/feather/feather.css">
        <link rel="stylesheet" href="/assets/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="/assets/vendors/select2/select2.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="/assets/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="/assets/images/favicon.png" />
        @stack('style')
    </head>
    <body class="container-scroller">
        
        @include('layouts.partials.navbar')

        <div class="container-fluid page-body-wrapper">

            @include('layouts.partials.sidebar')

            <div class="main-panel">        
                <div class="content-wrapper">
                    @yield('content')
                </div>

                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.  BKPSDM BONDOWOSO All Rights Reserved <a href="https://bkpsdm.bondowosokab.go.id/" target="_blank"></a></span>
                    </div>
                </footer>
            </div>

        </div>

    <!-- plugins:js -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    {{-- <script src="/assets/vendors/chart.js/Chart.min.js"></script> --}}
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/template.js"></script>
   <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/assets/js/chart.js"></script>
    <!-- End custom js for this page-->
    <script src="/assets/js/file-upload.js"></script>
    <script src="/assets/vendors/select2/select2.min.js"></script>
    <script src="/assets/js/select2.js"></script>
    @stack('scripts')

    
    </body>
</html>
