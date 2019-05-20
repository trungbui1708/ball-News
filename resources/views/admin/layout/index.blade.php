<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/applicator/dist/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:06:08 GMT -->
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin page</title>
    <base href="{{asset('')}}"/>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="admin/assets/images/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="admin/assets/images/logo/favicon.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="admin/assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="admin/assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="admin/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->
    <link rel="stylesheet" href="admin/assets/vendor/datatables/media/css/dataTables.bootstrap4.min.css" />

    <!-- core css -->
    <link href="admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="admin/assets/css/themify-icons.css" rel="stylesheet">
    <link href="admin/assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="admin/assets/css/animate.min.css" rel="stylesheet">
    <link href="admin/assets/css/app.css" rel="stylesheet">
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('index/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('index/css/style.css')}}">
</head>

<body>
    <div class="app header-success-gradient">
        <div class="layout">
            <!-- Header START -->
            @include('admin.layout.header')
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('admin.layout.menu')
            <!-- Side Nav END -->

            <!-- Page Container START -->
            @yield('content')
            <!-- Page Container END -->

        </div>
    </div>

    <script src="admin/assets/js/vendor.js"></script>

    <script src="admin/assets/js/app.min.js"></script>

    <!-- page js -->
    <script src="admin/assets/vendor/datatables/media/js/jquery.dataTables.js"></script>
    <script src="admin/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="admin/assets/js/tables/data-table.js"></script>
    <script type="text/javascript" language="javascript" src="admin/assets/ckeditor/ckeditor.js"></script>
</body>


<!-- Mirrored from themenate.com/applicator/dist/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:06:08 GMT -->
</html>