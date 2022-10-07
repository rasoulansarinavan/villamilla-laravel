<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home | Hosteller</title>
    <script id="www-widgetapi-script" src="/client/assets/https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
    <script src="/client/assets/https://www.youtube.com/player_api"></script>
    <link rel="stylesheet preload" as="style" href="/client/assets/css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="/client/assets/css/libs.min.css" />

    <link rel="stylesheet" href="/client/assets/css/index.min.css" />
</head>
<body>
<header class="header d-flex align-items-center" data-page="home">
    <div class="container position-relative d-flex justify-content-between align-items-center">
        <a class="brand d-flex align-items-center" href="/client/assets/index.html">
                    <span class="brand_logo theme-element">
                        <svg id="brandHeader" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.03198 3.80281V7.07652L3.86083 9.75137L0.689673 12.4263L0.667474 6.56503C0.655304 3.34138 0.663875 0.654206 0.686587 0.593579C0.71907 0.506918 1.4043 0.488223 3.87994 0.506219L7.03198 0.529106V3.80281ZM21.645 4.36419V5.88433L17.0383 9.76316C14.5046 11.8966 11.2263 14.6552 9.75318 15.8934L7.07484 18.145V20.3225V22.5H3.85988H0.64502L0.667303 18.768L0.689673 15.036L2.56785 13.4609C3.60088 12.5946 6.85989 9.85244 9.81009 7.36726L15.1741 2.84867L18.4096 2.8464L21.645 2.84413V4.36419ZM21.645 15.5549V22.5H18.431H15.217V18.2638V14.0274L15.4805 13.7882C15.8061 13.4924 21.5939 8.61606 21.6236 8.61248C21.6353 8.61099 21.645 11.7351 21.645 15.5549Z"
                                fill="currentColor"
                            />
                        </svg>
                    </span>
            <span class="brand_name">Hosteller</span>
        </a>
        <div class="header_offcanvas offcanvas offcanvas-end" id="menuOffcanvas">
            <div class="header_offcanvas-header d-flex justify-content-between align-content-center">
                <a class="brand d-flex align-items-center" href="/client/assets/index.html">
                            <span class="brand_logo theme-element">
                                <svg
                                    id="brandOffset"
                                    width="22"
                                    height="23"
                                    viewBox="0 0 22 23"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M7.03198 3.80281V7.07652L3.86083 9.75137L0.689673 12.4263L0.667474 6.56503C0.655304 3.34138 0.663875 0.654206 0.686587 0.593579C0.71907 0.506918 1.4043 0.488223 3.87994 0.506219L7.03198 0.529106V3.80281ZM21.645 4.36419V5.88433L17.0383 9.76316C14.5046 11.8966 11.2263 14.6552 9.75318 15.8934L7.07484 18.145V20.3225V22.5H3.85988H0.64502L0.667303 18.768L0.689673 15.036L2.56785 13.4609C3.60088 12.5946 6.85989 9.85244 9.81009 7.36726L15.1741 2.84867L18.4096 2.8464L21.645 2.84413V4.36419ZM21.645 15.5549V22.5H18.431H15.217V18.2638V14.0274L15.4805 13.7882C15.8061 13.4924 21.5939 8.61606 21.6236 8.61248C21.6353 8.61099 21.645 11.7351 21.645 15.5549Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </span>
                    <span class="brand_name">Hosteller</span>
                </a>
                <button class="close" type="button" data-bs-dismiss="offcanvas">
                    <i class="icon-close--entypo"></i>
                </button>
            </div>
            <nav class="header_nav">
                <ul class="header_nav-list">
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/client/assets/index.html" data-page="home">Home</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/client/assets/about.html" data-page="about">About</a>
                    </li>
                    <li class="header_nav-list_item dropdown">
                        <a
                            class="nav-link dropdown-toggle d-inline-flex align-items-center"
                            href="/client/assets/rooms.html"
                            data-bs-toggle="collapse"
                            data-bs-target="#roomMenu"
                            aria-expanded="false"
                            aria-controls="roomMenu"
                            data-page="rooms"
                        >
                            Rooms
                            <i class="icon-chevron_down--entypo icon"></i>
                        </a>
                        <div class="dropdown-menu collapse" id="roomMenu">
                            <ul class="dropdown-list">
                                <li class="list-item" data-main="true">
                                    <a class="dropdown-item nav-item" data-page="rooms" href="/client/assets/rooms.html">Rooms</a>
                                </li>
                                <li class="list-item">
                                    <a class="dropdown-item nav-item" data-page="room" href="/client/assets/room.html">Single room</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header_nav-list_item dropdown">
                        <a
                            class="nav-link dropdown-toggle d-inline-flex align-items-center"
                            href="/client/assets/news.html"
                            data-bs-toggle="collapse"
                            data-bs-target="#newsMenu"
                            aria-expanded="false"
                            aria-controls="newsMenu"
                            data-page="news"
                        >
                            News
                            <i class="icon-chevron_down--entypo icon"></i>
                        </a>
                        <div class="dropdown-menu collapse" id="newsMenu">
                            <ul class="dropdown-list">
                                <li class="list-item" data-main="true">
                                    <a class="dropdown-item nav-item" data-page="news" href="/client/assets/news.html">News</a>
                                </li>
                                <li class="list-item">
                                    <a class="dropdown-item nav-item" data-page="post" href="/client/assets/post.html">Single post</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header_nav-list_item dropdown">
                        <a
                            class="nav-link dropdown-toggle d-inline-flex align-items-center"
                            href="/client/assets/#"
                            data-bs-toggle="collapse"
                            data-bs-target="#pagesMenu"
                            aria-expanded="false"
                            aria-controls="pagesMenu"
                        >
                            Pages
                            <i class="icon-chevron_down--entypo icon"></i>
                        </a>
                        <div class="dropdown-menu collapse" id="pagesMenu">
                            <ul class="dropdown-list">
                                <li class="list-item">
                                    <a class="dropdown-item nav-item" data-page="gallery" href="/client/assets/gallery.html">Gallery</a>
                                </li>
                                <li class="list-item">
                                    <a class="dropdown-item nav-item" data-page="faq01" href="/client/assets/faq.html">FAQ V1</a>
                                </li>
                                <li class="list-item">
                                    <a class="dropdown-item nav-item" data-page="faq02" href="/client/assets/faq2.html">FAQ V2</a>
                                </li>
                                <li class="list-item">
                                    <a class="dropdown-item nav-item" data-page="error01" href="/client/assets/error.html">Error Page V1</a>
                                </li>
                                <li class="list-item">
                                    <a class="dropdown-item nav-item" data-page="error02" href="/client/assets/404.html">Error Page V2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header_nav-list_item dropdown">
                        <a
                            class="nav-link nav-link--contacts dropdown-toggle d-inline-flex align-items-center"
                            href="/client/assets/#"
                            data-bs-toggle="collapse"
                            data-bs-target="#contactsMenu"
                            aria-expanded="false"
                            aria-controls="contactsMenu"
                        >
                            Contacts
                            <i class="icon-chevron_down--entypo icon"></i>
                        </a>
                        <div class="dropdown-menu collapse" id="contactsMenu">
                            <ul class="dropdown-list">
                                <li class="list-item">
                                    <a class="dropdown-item nav-item" data-page="contacts01" href="/client/assets/contacts.html">Contacts V1</a>
                                </li>
                                <li class="list-item">
                                    <a class="dropdown-item nav-item" data-page="contacts02" href="/client/assets/contacts2.html">Contacts V2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <ul class="socials d-flex align-items-center">
                <li class="list-item">
                    <a class="link" href="/client/assets/">
                        <i class="icon-facebook"></i>
                    </a>
                </li>
                <li class="list-item">
                    <a class="link" href="/client/assets/">
                        <i class="icon-instagram"></i>
                    </a>
                </li>
                <li class="list-item">
                    <a class="link" href="/client/assets/">
                        <i class="icon-twitter"></i>
                    </a>
                </li>
                <li class="list-item">
                    <a class="link" href="/client/assets/">
                        <i class="icon-whatsapp"></i>
                    </a>
                </li>
            </ul>
        </div>
        <button class="header_trigger d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas">
            <i class="icon-stream"></i>
        </button>
    </div>
</header>
