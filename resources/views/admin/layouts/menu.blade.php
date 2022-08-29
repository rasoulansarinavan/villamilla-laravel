@php
    $prefix=\Illuminate\Support\Facades\Request::route()->getPrefix();
    $route=\Illuminate\Support\Facades\Route::current()->getName();
@endphp


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                                            href="/admin/html/rtl/vertical-menu-template-dark/index.html">
                    <div class="brand-logo"><img class="logo" src="/admin/app-assets/images/logo/logo.png"/></div>
                    <h2 class="brand-text mb-0">Frest</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i
                        class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
            data-icon-style="lines">
            <li class=" nav-item"><a href="/admin/html/rtl/vertical-menu-template-dark/index.html"><i
                        class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span
                        class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span></a>
                <ul class="menu-content">
                    <li><a href="dashboard-ecommerce.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                                                                                      data-i18n="eCommerce">eCommerce</span></a>
                    </li>
                    <li class="active"><a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i><span
                                class="menu-item" data-i18n="Analytics">Analytics</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>Apps</span>
            <li class=" nav-item {{$route=='admin.environments.index'?'open':''}}"><a href="#"><i class="menu-livicon"
                                                                                                  data-icon="notebook"></i><span
                        class="menu-title"
                        data-i18n="Invoice">انواع محیط های گردشگری</span></a>
                <ul class="menu-content">
                    <li class="{{$route=='admin.environments.index'?'active':''}}"><a
                            href="{{route('admin.environments.index')}}"><i class="bx bx-right-arrow-alt"></i><span
                                class="menu-item" data-i18n="Invoice List">لیست محیط های گردشگری</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item {{$route=='admin.categories.index'?'open':''}}"><a href="#"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="Invoice">دسته بندی اقامتگاها</span></a>
                <ul class="menu-content">
                    <li class="{{$route=='admin.categories.index'?'active':''}}"><a
                            href="{{route('admin.categories.index')}}"><i class="bx bx-right-arrow-alt"></i><span
                                class="menu-item" data-i18n="Invoice List">لیست انواع اقامتگاها</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item {{$route=='admin.residences.index'?'open':''}}"><a href="#"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="Invoice">اقامتگاها</span></a>
                <ul class="menu-content">
                    <li class="{{$route=='admin.residences.index'?'active':''}}"><a
                            href="{{route('admin.residences.index')}}"><i class="bx bx-right-arrow-alt"></i><span
                                class="menu-item" data-i18n="Invoice List">لیست اقامتگاها</span></a>
                    </li>
                    <li class="{{$route=='admin.residences.create'?'active':''}}"><a
                            href="{{route('admin.residences.create')}}"><i class="bx bx-right-arrow-alt"></i><span
                                class="menu-item" data-i18n="Invoice List">افزودن اقامتگاه جدید</span></a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
