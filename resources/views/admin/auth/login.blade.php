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
    <title>Login Page - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="/admin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/admin/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/custom-rtl.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css-rtl/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern dark-layout 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="dark-layout">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- login page start -->
            <section id="auth-login" class="row flexbox-container">
                <div class="col-xl-8 col-11">
                    <div class="card bg-authentication mb-0">
                        <div class="row m-0">
                            <!-- left section-login -->
                            <div class="col-md-6 col-12 px-0">
                                <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="text-center mb-2">Welcome Back</h4>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="d-flex flex-md-row flex-column justify-content-around">
                                                <a href="#"
                                                   class="btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1">
                                                    <i class="bx bxl-google font-medium-3"></i><span
                                                        class="pl-50 d-block text-center">Google</span></a>
                                                <a href="#"
                                                   class="btn btn-social btn-block mt-0 btn-facebook font-small-3">
                                                    <i class="bx bxl-facebook-square font-medium-3"></i><span
                                                        class="pl-50 d-block text-center">Facebook</span></a>
                                            </div>
                                            <div class="divider">
                                                <div class="divider-text text-uppercase text-muted"><small>or login with
                                                        email</small>
                                                </div>
                                            </div>
                                            @if(session('error'))
                                                <div class="alert alert-danger">
                                                    {{session('error')}}
                                                </div>
                                            @endif
                                            <form action="{{route('admin.check')}}" method="post">
                                                @csrf
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="exampleInputEmail1">Email
                                                        address</label>
                                                    <input type="email" name="email" class="form-control"
                                                           id="exampleInputEmail1" placeholder="Email address"></div>
                                                <div class="form-group">
                                                    <label class="text-bold-600"
                                                           for="exampleInputPassword1">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                           id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div
                                                    class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                                    <div class="text-left">
                                                        <div class="checkbox checkbox-sm">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="exampleCheck1">
                                                            <label class="checkboxsmall" for="exampleCheck1"><small>Keep
                                                                    me logged
                                                                    in</small></label>
                                                        </div>
                                                    </div>
                                                    <div class="text-right"><a href="auth-forgot-password.html"
                                                                               class="card-link"><small>Forgot
                                                                Password?</small></a></div>
                                                </div>
                                                <button type="submit"
                                                        class="btn btn-primary glow w-100 position-relative">Login<i
                                                        id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                            </form>
                                            <hr>
                                            <div class="text-center"><small class="mr-25">Don't have an account?</small><a
                                                    href="auth-register.html"><small>Sign up</small></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- right section image -->
                            <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                <div class="card-content">
                                    <img class="img-fluid" src="/admin/app-assets/images/pages/login.png"
                                         alt="branding logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login page ends -->

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="/admin/app-assets/vendors/js/vendors.min.js"></script>
<script src="/admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="/admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="/admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/admin/app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
<script src="/admin/app-assets/js/core/app-menu.js"></script>
<script src="/admin/app-assets/js/core/app.js"></script>
<script src="/admin/app-assets/js/scripts/components.js"></script>
<script src="/admin/app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
