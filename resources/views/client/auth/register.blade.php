<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link
        href="/client/assets/https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/client/assets/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/client/assets/style.css" type="text/css"/>
    <link rel="stylesheet" href="/client/assets/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="/client/assets/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="/client/assets/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/client/assets/css/magnific-popup.css" type="text/css"/>

    <link rel="stylesheet" href="/client/assets/css/custom.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title>Login - Layout 2 | Canvas</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">

                    <ul class="tab-nav tab-nav2 center clearfix">
                        <li class="inline-block"><a href="/client/assets/#tab-register">Register</a></li>
                    </ul>

                    <div class="tab-container">


                        <div class="tab-content" id="tab-register">
                            <div class="card mb-0">
                                <div class="card-body" style="padding: 40px; direction: rtl;">
                                    <h3 style="color: darkred;">ثبت نام در ویلامیلا</h3>
                                    <form id="register-form" class="row mb-0" action="{{route('user.store')}}" method="post">
                                        @csrf
                                        <div class="col-12 form-group">
                                            <label for="register-form-name">نام و نام خانوادگی</label>
                                            <input  type="text" id="register-form-name" name="name" value="{{old('name')}}"
                                                   class="form-control"/>
                                            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="register-form-email">پست الکترونیک</label>
                                            <input  type="text" id="register-form-email" name="email" value="{{old('email')}}"
                                                   class="form-control"/>
                                            <span class="text-danger">@error('email'){{$message}}@enderror</span>

                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="register-form-phone">موبایل</label>
                                            <input  type="text" id="register-form-phone" name="mobile" value="{{old('mobile')}}"
                                                   class="form-control"/>
                                            <span class="text-danger">@error('mobile'){{$message}}@enderror</span>

                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="register-form-password">کلمه عبور</label>
                                            <input type="password" id="register-form-password" name="password" value=""
                                                   class="form-control"/>
                                            <span class="text-danger">@error('password'){{$message}}@enderror</span>

                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="register-form-repassword">تکرار کلمه عبور</label>
                                            <input type="password" id="register-form-repassword"
                                                   name="password_confirmation" value="" class="form-control"/>
                                        </div>

                                        <div class="col-12 form-group">
                                            <button class="button button-3d button-black m-0" id="register-form-submit"
                                                    name="submit" value="register">ثبت نام
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section><!-- #content end -->


</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="/client/assets/js/jquery.js"></script>
<script src="/client/assets/js/plugins.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="/client/assets/js/functions.js"></script>

</body>
</html>
