<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('js/user/main.js') }}"></script>
    <script src="{{ asset('js/user/runtime.js') }}"></script>
    <script src="{{ asset('js/user/vendors.js') }}"></script>

   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/user/home.css') }}" rel="stylesheet">

    <style type="text/css">svg:not(:root).svg-inline--fa {
        overflow: visible;
      }
      
      .svg-inline--fa {
        display: inline-block;
        font-size: inherit;
        height: 1em;
        overflow: visible;
        vertical-align: -0.125em;
      }
      .svg-inline--fa.fa-lg {
        vertical-align: -0.225em;
      }
      .svg-inline--fa.fa-w-1 {
        width: 0.0625em;
      }
      .svg-inline--fa.fa-w-2 {
        width: 0.125em;
      }
      .svg-inline--fa.fa-w-3 {
        width: 0.1875em;
      }
      .svg-inline--fa.fa-w-4 {
        width: 0.25em;
      }
      .svg-inline--fa.fa-w-5 {
        width: 0.3125em;
      }
      .svg-inline--fa.fa-w-6 {
        width: 0.375em;
      }
      .svg-inline--fa.fa-w-7 {
        width: 0.4375em;
      }
      .svg-inline--fa.fa-w-8 {
        width: 0.5em;
      }
      .svg-inline--fa.fa-w-9 {
        width: 0.5625em;
      }
      .svg-inline--fa.fa-w-10 {
        width: 0.625em;
      }
      .svg-inline--fa.fa-w-11 {
        width: 0.6875em;
      }
      .svg-inline--fa.fa-w-12 {
        width: 0.75em;
      }
      .svg-inline--fa.fa-w-13 {
        width: 0.8125em;
      }
      .svg-inline--fa.fa-w-14 {
        width: 0.875em;
      }
      .svg-inline--fa.fa-w-15 {
        width: 0.9375em;
      }
      .svg-inline--fa.fa-w-16 {
        width: 1em;
      }
      .svg-inline--fa.fa-w-17 {
        width: 1.0625em;
      }
      .svg-inline--fa.fa-w-18 {
        width: 1.125em;
      }
      .svg-inline--fa.fa-w-19 {
        width: 1.1875em;
      }
      .svg-inline--fa.fa-w-20 {
        width: 1.25em;
      }
      .svg-inline--fa.fa-pull-left {
        margin-right: 0.3em;
        width: auto;
      }
      .svg-inline--fa.fa-pull-right {
        margin-left: 0.3em;
        width: auto;
      }
      .svg-inline--fa.fa-border {
        height: 1.5em;
      }
      .svg-inline--fa.fa-li {
        width: 2em;
      }
      .svg-inline--fa.fa-fw {
        width: 1.25em;
      }
      
      .fa-layers svg.svg-inline--fa {
        bottom: 0;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
      }
      
      .fa-layers {
        display: inline-block;
        height: 1em;
        position: relative;
        text-align: center;
        vertical-align: -0.125em;
        width: 1em;
      }
      .fa-layers svg.svg-inline--fa {
        -webkit-transform-origin: center center;
                transform-origin: center center;
      }
      
      .fa-layers-counter, .fa-layers-text {
        display: inline-block;
        position: absolute;
        text-align: center;
      }
      
      .fa-layers-text {
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
        -webkit-transform-origin: center center;
                transform-origin: center center;
      }
      
      .fa-layers-counter {
        background-color: #ff253a;
        border-radius: 1em;
        -webkit-box-sizing: border-box;
                box-sizing: border-box;
        color: #fff;
        height: 1.5em;
        line-height: 1;
        max-width: 5em;
        min-width: 1.5em;
        overflow: hidden;
        padding: 0.25em;
        right: 0;
        text-overflow: ellipsis;
        top: 0;
        -webkit-transform: scale(0.25);
                transform: scale(0.25);
        -webkit-transform-origin: top right;
                transform-origin: top right;
      }
      
      .fa-layers-bottom-right {
        bottom: 0;
        right: 0;
        top: auto;
        -webkit-transform: scale(0.25);
                transform: scale(0.25);
        -webkit-transform-origin: bottom right;
                transform-origin: bottom right;
      }
      
      .fa-layers-bottom-left {
        bottom: 0;
        left: 0;
        right: auto;
        top: auto;
        -webkit-transform: scale(0.25);
                transform: scale(0.25);
        -webkit-transform-origin: bottom left;
                transform-origin: bottom left;
      }
      
      .fa-layers-top-right {
        right: 0;
        top: 0;
        -webkit-transform: scale(0.25);
                transform: scale(0.25);
        -webkit-transform-origin: top right;
                transform-origin: top right;
      }
      
      .fa-layers-top-left {
        left: 0;
        right: auto;
        top: 0;
        -webkit-transform: scale(0.25);
                transform: scale(0.25);
        -webkit-transform-origin: top left;
                transform-origin: top left;
      }
      
      .fa-lg {
        font-size: 1.3333333333em;
        line-height: 0.75em;
        vertical-align: -0.0667em;
      }
      
      .fa-xs {
        font-size: 0.75em;
      }
      
      .fa-sm {
        font-size: 0.875em;
      }
      
      .fa-1x {
        font-size: 1em;
      }
      
      .fa-2x {
        font-size: 2em;
      }
      
      .fa-3x {
        font-size: 3em;
      }
      
      .fa-4x {
        font-size: 4em;
      }
      
      .fa-5x {
        font-size: 5em;
      }
      
      .fa-6x {
        font-size: 6em;
      }
      
      .fa-7x {
        font-size: 7em;
      }
      
      .fa-8x {
        font-size: 8em;
      }
      
      .fa-9x {
        font-size: 9em;
      }
      
      .fa-10x {
        font-size: 10em;
      }
      
      .fa-fw {
        text-align: center;
        width: 1.25em;
      }
      
      .fa-ul {
        list-style-type: none;
        margin-left: 2.5em;
        padding-left: 0;
      }
      .fa-ul > li {
        position: relative;
      }
      
      .fa-li {
        left: -2em;
        position: absolute;
        text-align: center;
        width: 2em;
        line-height: inherit;
      }
      
      .fa-border {
        border: solid 0.08em #eee;
        border-radius: 0.1em;
        padding: 0.2em 0.25em 0.15em;
      }
      
      .fa-pull-left {
        float: left;
      }
      
      .fa-pull-right {
        float: right;
      }
      
      .fa.fa-pull-left,
      .fas.fa-pull-left,
      .far.fa-pull-left,
      .fal.fa-pull-left,
      .fab.fa-pull-left {
        margin-right: 0.3em;
      }
      .fa.fa-pull-right,
      .fas.fa-pull-right,
      .far.fa-pull-right,
      .fal.fa-pull-right,
      .fab.fa-pull-right {
        margin-left: 0.3em;
      }
      
      .fa-spin {
        -webkit-animation: fa-spin 2s infinite linear;
                animation: fa-spin 2s infinite linear;
      }
      
      .fa-pulse {
        -webkit-animation: fa-spin 1s infinite steps(8);
                animation: fa-spin 1s infinite steps(8);
      }
      
      @-webkit-keyframes fa-spin {
        0% {
          -webkit-transform: rotate(0deg);
                  transform: rotate(0deg);
        }
        100% {
          -webkit-transform: rotate(360deg);
                  transform: rotate(360deg);
        }
      }
      
      @keyframes fa-spin {
        0% {
          -webkit-transform: rotate(0deg);
                  transform: rotate(0deg);
        }
        100% {
          -webkit-transform: rotate(360deg);
                  transform: rotate(360deg);
        }
      }
      .fa-rotate-90 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
        -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
      }
      
      .fa-rotate-180 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
        -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
      }
      
      .fa-rotate-270 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
        -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
      }
      
      .fa-flip-horizontal {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
        -webkit-transform: scale(-1, 1);
                transform: scale(-1, 1);
      }
      
      .fa-flip-vertical {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
        -webkit-transform: scale(1, -1);
                transform: scale(1, -1);
      }
      
      .fa-flip-both, .fa-flip-horizontal.fa-flip-vertical {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
        -webkit-transform: scale(-1, -1);
                transform: scale(-1, -1);
      }
      
      :root .fa-rotate-90,
      :root .fa-rotate-180,
      :root .fa-rotate-270,
      :root .fa-flip-horizontal,
      :root .fa-flip-vertical,
      :root .fa-flip-both {
        -webkit-filter: none;
                filter: none;
      }
      
      .fa-stack {
        display: inline-block;
        height: 2em;
        position: relative;
        width: 2.5em;
      }
      
      .fa-stack-1x,
      .fa-stack-2x {
        bottom: 0;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
      }
      
      .svg-inline--fa.fa-stack-1x {
        height: 1em;
        width: 1.25em;
      }
      .svg-inline--fa.fa-stack-2x {
        height: 2em;
        width: 2.5em;
      }
      
      .fa-inverse {
        color: #fff;
      }
      
      .sr-only {
        border: 0;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }
      
      .sr-only-focusable:active, .sr-only-focusable:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto;
      }
      
      .svg-inline--fa .fa-primary {
        fill: var(--fa-primary-color, currentColor);
        opacity: 1;
        opacity: var(--fa-primary-opacity, 1);
      }
      
      .svg-inline--fa .fa-secondary {
        fill: var(--fa-secondary-color, currentColor);
        opacity: 0.4;
        opacity: var(--fa-secondary-opacity, 0.4);
      }
      
      .svg-inline--fa.fa-swap-opacity .fa-primary {
        opacity: 0.4;
        opacity: var(--fa-secondary-opacity, 0.4);
      }
      
      .svg-inline--fa.fa-swap-opacity .fa-secondary {
        opacity: 1;
        opacity: var(--fa-primary-opacity, 1);
      }
      
      .svg-inline--fa mask .fa-primary,
      .svg-inline--fa mask .fa-secondary {
        fill: black;
      }
      
      .fad.fa-inverse {
        color: #fff;
      }
      body,.header {
          background: rgb(33,37,43);
      }
      
      </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div data-v-3db87868="" data-v-137e7c86="" class="header">
                    <div data-v-3db87868="" class="text-xs font-semibold text-center bg-brand-accent p-2 text-light">
                        Xin lưu ý: Quý khách hàng vui lòng đặt các món trong cùng một nhà hàng cho một lần đặt hàng.
                        Chúng tôi rất tiếc
                        không thể phục vụ nhiều món ở nhiều nhà hàng khác nhau trong cùng một lần đặt hàng. Xin cảm ơn!
                    </div>
                    <div data-v-32523081="" data-v-3db87868="" class="container">
                        <div data-v-1d375fcb="" data-v-3db87868=""
                            class="section flex flex-row  justify-between items-center" data-v-32523081="">
                            <div data-v-3db87868="" data-v-1d375fcb=""
                                class="flex flex-row flex-nowrap items-center mr-4"><a data-v-3db87868="" href="/"
                                    class="router-link-exact-active router-link-active" data-v-1d375fcb=""
                                    aria-current="page"></a></div>
                            <div data-v-3db87868="" data-v-1d375fcb="" class="flex flex-row">
                                <div data-v-3db87868="" data-v-1d375fcb="" class="md:w-16 lg:w-24 p-4 hidden md:block">
                                    <div data-v-6374b43e="" data-v-3db87868="" class="box is-squared"
                                        data-v-1d375fcb="">
                                        <div data-v-6374b43e="" class="box-content"><img data-v-3db87868=""
                                                data-v-6374b43e=""
                                                src="https://s3.phattiencorp.vn:7481/mylife/upload/stag/2021/05/23/yen_market_negative_logo_2_1621757156569.png"
                                                alt=""></div>
                                    </div>
                                </div>
                                <div data-v-3db87868="" data-v-1d375fcb="" class="md:w-16 lg:w-24 p-4 hidden md:block">
                                    <div data-v-6374b43e="" data-v-3db87868="" class="box is-squared"
                                        data-v-1d375fcb="">
                                        <div data-v-6374b43e="" class="box-content"><img data-v-3db87868=""
                                                data-v-6374b43e=""
                                                src="https://s3.phattiencorp.vn:7481/mylife/upload/stag/2021/05/18/yen_sushi_negative_logo_1621348581670.png"
                                                alt=""></div>
                                    </div>
                                </div>
                                <div data-v-3db87868="" data-v-1d375fcb="" class="md:w-16 lg:w-24 p-4 hidden md:block">
                                    <div data-v-6374b43e="" data-v-3db87868="" class="box is-squared"
                                        data-v-1d375fcb="">
                                        <div data-v-6374b43e="" class="box-content"><img data-v-3db87868=""
                                                data-v-6374b43e=""
                                                src="https://s3.phattiencorp.vn:7481/mylife/upload/stag/2021/05/18/kohi_negative_logo_1621348384426.png"
                                                alt=""></div>
                                    </div>
                                </div>
                                <div data-v-3db87868="" data-v-1d375fcb="" class="md:w-16 lg:w-24 p-4 hidden md:block">
                                    <div data-v-6374b43e="" data-v-3db87868="" class="box is-squared"
                                        data-v-1d375fcb="">
                                        <div data-v-6374b43e="" class="box-content"><img data-v-3db87868=""
                                                data-v-6374b43e=""
                                                src="https://s3.phattiencorp.vn:7481/mylife/upload/stag/2021/05/21/mylife_coffee_negative_logo_opt2_1621598901899.png"
                                                alt=""></div>
                                    </div>
                                </div>
                                <div data-v-3db87868="" data-v-1d375fcb="" class="md:w-16 lg:w-24 p-4 hidden md:block">
                                    <div data-v-6374b43e="" data-v-3db87868="" class="box is-squared"
                                        data-v-1d375fcb="">
                                        <div data-v-6374b43e="" class="box-content"><img data-v-3db87868=""
                                                data-v-6374b43e=""
                                                src="https://s3.phattiencorp.vn:7481/mylife/upload/stag/2021/05/18/genshi_negative_logo_1621347351968.png"
                                                alt=""></div>
                                    </div>
                                </div>
                                <div data-v-3db87868="" data-v-1d375fcb="" class="md:w-16 lg:w-24 p-4 hidden md:block">
                                    <div data-v-6374b43e="" data-v-3db87868="" class="box is-squared"
                                        data-v-1d375fcb="">
                                        <div data-v-6374b43e="" class="box-content"><img data-v-3db87868=""
                                                data-v-6374b43e=""
                                                src="https://s3.phattiencorp.vn:7481/mylife/upload/stag/2021/05/18/shamoji_negative_logo_1621348795863.png"
                                                alt=""></div>
                                    </div>
                                </div>
                                <div data-v-3db87868="" data-v-1d375fcb="" class="md:w-16 lg:w-24 p-4 hidden md:block">
                                    <div data-v-6374b43e="" data-v-3db87868="" class="box is-squared"
                                        data-v-1d375fcb="">
                                        <div data-v-6374b43e="" class="box-content"><img data-v-3db87868=""
                                                data-v-6374b43e=""
                                                src="https://s3.phattiencorp.vn:7481/mylife/upload/delivery/2021/05/26/yen_pre_negative_logo_2_1622001520550.png"
                                                alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-3db87868="" data-v-1d375fcb="" class="flex flex-row items-center"><svg
                                    data-v-366ed19c="" data-v-3db87868="" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"
                                    class="icon-clickable block md:hidden text-xl text-light mr-4 svg-inline--fa fa-bars fa-w-14"
                                    data-v-1d375fcb="">
                                    <path data-v-366ed19c="" fill="currentColor"
                                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                                        class=""></path>
                                </svg>
                                <!---->
                                <div data-v-3db87868="" data-v-1d375fcb="">
                                    <div data-v-7b0e022a="" data-v-3db87868="" class="button ripple is-primary is-small"
                                        data-v-1d375fcb=""><span data-v-7b0e022a="" class="label">Đăng
                                            nhập</span></div>
                                </div>
                                <aside data-v-71c35bf3="" data-v-3db87868="" class="sidebar-container flex"
                                    data-v-1d375fcb="">
                                    <div data-v-71c35bf3="" class="sidebar">
                                        <div data-v-71c35bf3="" class="sidebar-inner h-full">
                                            <div data-v-71c35bf3="" class="sidebar-header bg-brand-primary text-white">
                                                <a data-v-71c35bf3=""><span data-v-3db87868="" data-v-71c35bf3=""
                                                        class="pr-1 cursor-default font-medium">Đến trang đặt món</span>
                                                    <svg data-v-3db87868="" data-v-71c35bf3="" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="chevron-right"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 320 512"
                                                        class="svg-inline--fa fa-chevron-right fa-w-10">
                                                        <path data-v-3db87868="" data-v-71c35bf3="" fill="currentColor"
                                                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                                            class=""></path>
                                                    </svg></a> <svg data-v-71c35bf3="" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="times" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"
                                                    class="icon-times svg-inline--fa fa-times fa-w-11">
                                                    <path data-v-71c35bf3="" fill="currentColor"
                                                        d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"
                                                        class=""></path>
                                                </svg>
                                            </div>
                                            <div data-v-3db87868="" data-v-71c35bf3="" class="menu-mobile-link mt-4">
                                                <div data-v-3db87868="" data-v-71c35bf3="" class="font-semibold">Chọn
                                                    thương hiệu</div>
                                                <ul data-v-3db87868="" data-v-71c35bf3="">
                                                    <li data-v-3db87868="" data-v-71c35bf3=""><a data-v-3db87868=""
                                                            data-v-71c35bf3="">
                                                            Yen Market
                                                        </a><a data-v-3db87868="" data-v-71c35bf3="">
                                                            Yen Sushi &amp; Sake Pub
                                                        </a><a data-v-3db87868="" data-v-71c35bf3="">
                                                            Kohi Coffee
                                                        </a><a data-v-3db87868="" data-v-71c35bf3="">
                                                            MyLife Coffee
                                                        </a><a data-v-3db87868="" data-v-71c35bf3="">
                                                            Genshi Yaki
                                                        </a><a data-v-3db87868="" data-v-71c35bf3="">
                                                            Shamoji Robata Yaki
                                                        </a><a data-v-3db87868="" data-v-71c35bf3="">
                                                            Yen Sushi Premium
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-71c35bf3="" class="flex-grow opacity-60"></div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div data-v-52c6f4e9="" data-v-137e7c86="" class="footer">
            <div data-v-32523081="" data-v-52c6f4e9="" class="container">
                <div data-v-1d375fcb="" data-v-52c6f4e9="" class="section md:flex justify-items-center justify-between"
                    data-v-32523081="">
                    <div data-v-52c6f4e9="" data-v-1d375fcb="" class="w-full md:w-1/2">
                        <div data-v-1d375fcb="" data-v-52c6f4e9="" class="section mb-0"><span data-v-52c6f4e9=""
                                data-v-1d375fcb="" class="uppercase font-bold">
                                Công ty TNHH Thương mại và dịch vụ Cuộc Sống Của Tôi
                            </span>
                            <div data-v-52c6f4e9="" data-v-1d375fcb="">
                                <ul data-v-6841a2fa="" data-v-52c6f4e9="" class="mt-4 text-body-2 list"
                                    data-v-1d375fcb="">
                                    <li data-v-52c6f4e9="" data-v-6841a2fa=""><span data-v-52c6f4e9=""
                                            data-v-6841a2fa="" class="icon"><svg data-v-52c6f4e9=""
                                                data-v-6841a2fa="" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="map" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                class="svg-inline--fa fa-map fa-w-18">
                                                <path data-v-52c6f4e9="" data-v-6841a2fa="" fill="currentColor"
                                                    d="M0 117.66v346.32c0 11.32 11.43 19.06 21.94 14.86L160 416V32L20.12 87.95A32.006 32.006 0 0 0 0 117.66zM192 416l192 64V96L192 32v384zM554.06 33.16L416 96v384l139.88-55.95A31.996 31.996 0 0 0 576 394.34V48.02c0-11.32-11.43-19.06-21.94-14.86z"
                                                    class=""></path>
                                            </svg></span>179 Lý Chính Thắng, Phường Võ Thị Sáu, Quận 3, TP. HCM
                                    </li>
                                    <li data-v-52c6f4e9="" data-v-6841a2fa=""><span data-v-52c6f4e9=""
                                            data-v-6841a2fa="" class="icon"><svg data-v-52c6f4e9=""
                                                data-v-6841a2fa="" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="mobile" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                class="svg-inline--fa fa-mobile fa-w-10">
                                                <path data-v-52c6f4e9="" data-v-6841a2fa="" fill="currentColor"
                                                    d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"
                                                    class=""></path>
                                            </svg></span>1900.066.890
                                    </li>
                                    <li data-v-52c6f4e9="" data-v-6841a2fa=""><span data-v-52c6f4e9=""
                                            data-v-6841a2fa="" class="icon"><svg data-v-52c6f4e9=""
                                                data-v-6841a2fa="" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="envelope" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                class="svg-inline--fa fa-envelope fa-w-16">
                                                <path data-v-52c6f4e9="" data-v-6841a2fa="" fill="currentColor"
                                                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"
                                                    class=""></path>
                                            </svg></span>Email: customercare@mylifecompany.com.vn
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div data-v-52c6f4e9="" data-v-1d375fcb=""
                        class="mt-4 md:mt-0 flex flex-col items-start md:items-end">
                        <div data-v-52c6f4e9="" data-v-1d375fcb="" class="mt-4 flex flex-row max-w-screen-xs">
                            <div data-v-52c6f4e9="" data-v-1d375fcb="" class="mr-4"><a data-v-52c6f4e9=""
                                    data-v-1d375fcb=""
                                    href="https://play.google.com/store/apps/details?id=com.mylife_app"
                                    target="_blank"><img data-v-52c6f4e9="" data-v-1d375fcb=""
                                        src="/assets/images/playstore.59a0b4.png"></a> <img data-v-52c6f4e9=""
                                    data-v-1d375fcb=""
                                    src="https://s3.phattiencorp.vn:7481/mylife/upload/delivery/2021/06/24/qrCode_google_1624533846453.png"
                                    alt="qrCode_google" class="mt-2"></div>
                            <div data-v-52c6f4e9="" data-v-1d375fcb=""><a data-v-52c6f4e9="" data-v-1d375fcb=""
                                    href="https://apps.apple.com/vn/app/mylife/id1454193800" target="_blank"><img
                                        data-v-52c6f4e9="" data-v-1d375fcb=""
                                        src="/assets/images/appstore.4170ba.png"></a> <img data-v-52c6f4e9=""
                                    data-v-1d375fcb=""
                                    src="https://s3.phattiencorp.vn:7481/mylife/upload/delivery/2021/06/24/qrCode_apple_1624533846448.png"
                                    alt="qrCode_apple" class="mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
