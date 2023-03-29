<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
          content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="/admin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/admin/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/css/extensions/dragula.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/css/tables/datatable/datatables.min.css">

    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/pages/dashboard-analytics.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
    <script src="https://cdn.ckeditor.com/4.19.1/full-all/ckeditor.js"></script>
    @livewireStyles
</head>
<livewire:admin.layouts.header/>

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-sticky footer-static  "
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<div class="main-container" id="container">

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <livewire:admin.layouts.side-bar/>
    </div>

    <div id="content" class="main-content">


        @yield('content')

        <livewire:admin.layouts.footer/>
    </div>
</div>

<!-- BEGIN: Vendor JS-->
<script src="/admin/app-assets/vendors/js/vendors.min.js"></script>
<script src="/admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="/admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="/admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="/admin/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="/admin/app-assets/vendors/js/extensions/dragula.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/admin/app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
<script src="/admin/app-assets/js/core/app-menu.js"></script>
<script src="/admin/app-assets/js/core/app.js"></script>
<script src="/admin/app-assets/js/scripts/components.js"></script>
<script src="/admin/app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="/admin/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
<!-- END: Page JS-->
<script>
    CKEDITOR.replace('editor1');
</script>
<script>
    CKEDITOR.replace('editor2');
</script>
@yield('scripts')
@livewireScripts
</body>
</html>
