<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semi Link - A free URL shortener tool | @yield('title')</title>
    <meta name="description" content="semi Link is the original URL shortener that shortens your unwieldy links into more manageable and usable URLs.">
    <meta name="keywords" content="semi Link, url, short url, tiny url, save share shorten url, analyze url">
    <meta name=" robots" content=" index, follow">
    <meta name="googlebot-news" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url('/') }}" />
    <meta property="og:title" content="Semi Link - A free URL shortener tool" />
    <meta property="og:url" content="{{ url('/') }}"/>
    <meta property="og:description" content="semi Link is the original URL shortener that shortens your unwieldy links into more manageable and usable URLs."/>
    <meta property="og:image" content="{{ asset('/assets/images/favicon.ico') }}"/>
    <meta property="og:site_name" content="SEMI LINK" />

    <meta name="twitter:title" content="SEMI LINK - A free URL shortener tool">
    <meta name="twitter:description" content="semi Link is the original URL shortener that shortens your unwieldy links into more manageable and usable URLs">



    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('/assets/css/normalize.min.css') }}" />
    {{--    <link rel="stylesheet" href="{{ asset('/assets/css/front.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('/assets/css/call-fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/custom-default.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Mainul12501/css-common-helper-classes/helper.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('style')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J1GDER9ZMX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-J1GDER9ZMX');
    </script>
</head>
<body>


<header>
    <nav class="navbar navbar-expand-md">
        <div class="container" style="width: 80%">
            <a class="navbar-brand text-light" href="{{ route('home') }}">SEMI LINK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 bg-blue bg-blue">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">ShortURL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{ route('total-clicks') }}">URL Click Counter</a>
                    </li>
                    @auth()
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('show-link-list') }}">Manage Links</a>
                        </li>
                    @endauth
                    @if(auth()->check())
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout</a>
                            <form action="{{ route('logout') }}" method="post" id="logoutForm">
                                @csrf
                            </form>
                        </li>

                    @else
                        <li><a class="nav-link text-white" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link text-white" href="{{ route('register') }}">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

<div>
    <div class="background-img">
        <svg class="background-img-top" width="510" height="227" viewbox="0 0 510 227" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-87.152 -39.8215C-88.9236 -97.5924 -78.1971 -154.94 -48.4234 -204.479C-20.7542 -250.517 24.1466 -281.369 72.3104 -305.144C118.507 -327.949 168.356 -332.792 219.715 -336.844C285.535 -342.038 369.083 -381.424 412.88 -332.018C457.935 -281.194 406.048 -201.31 399.82 -133.678C395.679 -88.7194 394.135 -46.317 382.55 -2.68C368.135 51.6174 373.1 123.327 324.232 151.04C275.433 178.714 218.732 122.276 162.632 122.037C93.5849 121.742 20.3777 187.044 -37.5683 149.496C-93.687 113.131 -85.1022 27.0177 -87.152 -39.8215Z" fill="url(#paint0_linear)" fill-opacity="0.4"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-188.911 -99.6179C-180.859 -164.877 -158.829 -227.486 -116.742 -278.006C-77.6303 -324.955 -21.7855 -351.835 36.4978 -370.192C92.4006 -387.799 149.286 -384.577 207.733 -380.204C282.636 -374.6 383.414 -404.355 424.066 -341.195C465.884 -276.222 393.661 -195.431 374.9 -120.476C362.428 -70.6498 353.32 -23.2462 332.709 23.8C307.062 82.3393 300.177 163.824 240.418 186.486C180.743 209.115 126.807 135.805 63.777 125.782C-13.8004 113.447 -107.459 174.137 -166.079 121.848C-222.85 71.2077 -198.227 -24.1155 -188.911 -99.6179Z" fill="url(#paint1_linear)" fill-opacity="0.3"></path>
            <defs>
                <lineargradient id="paint0_linear" x1="403.713" y1="80.0373" x2="-60.6291" y2="-29.7743" gradientunits="userSpaceOnUse">
                    <stop stop-color="#9EE6F7" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#9EE6F7" stop-opacity="0.46"></stop>
                </lineargradient>
                <lineargradient id="paint1_linear" x1="342.121" y1="120.477" x2="269" y2="-1.00001" gradientunits="userSpaceOnUse">
                    <stop stop-color="#9EE6F7" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#9EE6F7" stop-opacity="0.46"></stop>
                </lineargradient>
            </defs>
        </svg>
        <svg class="background-img-bottom" width="576" height="657" viewbox="0 0 576 657" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M119.005 490.408C104.348 426.309 103.735 359.939 126.098 298.105C146.88 240.642 190.23 196.348 238.776 159.237C285.339 123.642 339.92 107.296 396.362 91.4996C468.695 71.2562 553.312 8.95396 613.046 54.4918C674.494 101.336 634.107 201.896 641.998 278.759C647.244 329.854 654.826 377.525 651.472 428.779C647.298 492.553 668.578 571.511 620.111 613.172C571.712 654.774 496.031 604.218 433.356 616.263C356.216 631.089 288.829 720.051 215.905 690.855C145.28 662.579 135.963 564.569 119.005 490.408Z" fill="url(#paint0_linear)" fill-opacity="0.3"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M207.243 573.011C186.674 518.997 178.054 461.296 189.988 404.743C201.078 352.187 233.418 308.347 271.157 270.126C307.354 233.466 352.877 212.586 400.086 191.958C460.587 165.523 526.658 100.977 584.206 133.341C643.406 166.634 620.5 259.094 636.735 325.044C647.526 368.884 659.935 409.46 663.26 454.486C667.397 510.511 695.542 576.654 658.427 618.825C621.363 660.938 549.321 626.149 496.228 644.271C430.882 666.576 383.059 752.23 316.019 735.699C251.094 719.689 231.041 635.504 207.243 573.011Z" fill="url(#paint1_linear)" fill-opacity="0.4"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M403.49 282.211C453.064 252.494 508.362 233.896 566.131 235.735C619.816 237.444 668.646 261.602 712.889 292.059C755.324 321.272 783.858 362.431 812.44 405.295C849.068 460.228 924.193 513.966 902.414 576.295C880.011 640.412 784.967 634.064 722.882 661.603C681.612 679.91 643.839 699.238 600.092 710.401C545.658 724.291 485.472 763.592 437.449 734.441C389.492 705.33 411.119 628.307 383.973 579.211C350.563 518.785 257.854 486.712 262.381 417.812C266.766 351.086 346.134 316.591 403.49 282.211Z" fill="url(#paint2_linear)" fill-opacity="0.6"></path>
            <defs>
                <lineargradient id="paint0_linear" x1="693.25" y1="516.469" x2="150.817" y2="495.802" gradientunits="userSpaceOnUse">
                    <stop stop-color="#9EE6F7" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#9EE6F7" stop-opacity="0.46"></stop>
                </lineargradient>
                <lineargradient id="paint1_linear" x1="710.313" y1="525.732" x2="235.594" y2="573.831" gradientunits="userSpaceOnUse">
                    <stop stop-color="#9EE6F7" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#9EE6F7" stop-opacity="0.46"></stop>
                </lineargradient>
                <lineargradient id="paint2_linear" x1="538.194" y1="769.211" x2="407.651" y2="310.266" gradientunits="userSpaceOnUse">
                    <stop stop-color="#9EE6F7" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#9EE6F7" stop-opacity="0.46"></stop>
                </lineargradient>
            </defs>
        </svg>
    </div>
</div>

<main>
    @yield('body')
</main>


<footer class="py-2 bg-dark text-white" >
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto text-center">
                <p class="home-short-info-div">Copyright@<?php echo date('Y') ?> <a href="{{ route('home') }}">SEMI LINK</a>. All rights reserved &target;
                    <a href="{{ route('terms-of-service') }}">Terms & Conditions</a> &target; <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('/assets/js/jquery-3.7.1.min.js') }}"></script>
{{--<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>--}}
<script src="{{ asset('/assets/js/toastr.min.js') }}"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": true,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    @if(session()->has('success'))
        toastr.success("{{ session()->get('success') }}");
    @elseif(session()->has('error'))
        toastr.error("{{ session()->get('error') }}");
    @endif
</script>

<script>
    $(document).ready(function () {
        var mainHeight = Math.round($('main').height());
        // console.log(mainHeight);
        if (mainHeight < 550)
        {
            $('footer').css({
                position: "fixed",
                bottom: 0,
                width: "100%"
            })
        }

    })
</script>
@stack('script')
</body>
</html>
