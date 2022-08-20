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
                        <li class="inline-block"><a href="/client/assets/#tab-login">Login</a></li>
                    </ul>

                    <div class="tab-container">

                        <div class="tab-content" id="tab-login">
                            <div class="card mb-0">
                                <div class="card-body" style="padding: 40px;">
                                    <form id="login-form" class="mb-0" action="{{route('user.check')}}" method="get">
                                        @csrf
                                        <h3 style="direction: rtl;color: red">ورود به ویلامیلا</h3>

                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <label for="login-form-username">ایمیل</label>
                                                <input type="text" id="login-form-username" name="email" value=""
                                                       class="form-control"/>
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="login-form-password">کلمه عبور</label>
                                                <input type="password" id="login-form-password" name="password" value=""
                                                       class="form-control"/>
                                            </div>
                                            @if(session('error'))
                                                <div class="col-12 form-group">
                                                    <span class="text-danger">{{session('error')}}</span>
                                                </div>
                                            @endif
                                            <div class="col-12">
                                                <button class="button button-3d button-black m-0" id="login-form-submit"
                                                        value="login">ورود
                                                </button>
                                            </div>
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
