<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="description" content="About Mountain of Fire and Miracles Ministries">
    <meta name="keywords" content="holy ghost, baptism, about mfm, mfm, mountain of fire, dr olukoya, arab, region 38, dr dk olukoya, deliverance, prayer, holy ghost baptism, holiness, history of mfm">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('admin_assets/img/navlogo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,500%7CIbarra+Real+Nova:400,600,600i,700">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }

    </style>
</head>
<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ asset('assets/images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="page">
        <header class="section page-header">
            <!--RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                    <div class="rd-navbar-aside-outer rd-navbar-collapse">
                        <div class="rd-navbar-aside mb-2">
                            <ul class="list-inline list-inline-md">
                                <li>
                                    <div class="unit unit-spacing-xs align-items-center">
                                        {{-- <div class="unit-left"><span class="icon text-middle mdi-phone-in-talk mdi"></span></div> --}}

                                        {{-- <div class="unit-body"> 👤 Welcome username</div> --}}
                                    </div>
                                </li>
                            </ul>
                            <ul class="social-list">
                                {{-- <li><a href="#"><span class="icon fa fa-youtube-play"></span></a></li>
                  <li><a href="#"><span class="icon fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="icon fa fa-facebook-f"></span></a></li>
                  <li><a href="#"><span class="icon fa fa-rss"></span></a></li> --}}
                                <li>
                                    @foreach ($church_contact as $item)
                                    <div class="unit unit-spacing-xs align-items-center">
                                        <div class="unit-left"><span class="icon text-middle mdi-map-marker mdi"></span></div>
                                        <div class="unit-body">{{ $item -> address }}</div>
                                    </div>

                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!--RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!--RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!--RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand--><a class="brand" href={{ route('church.index') }}><img class="brand-logo-dark w-50" src="{{ asset('assets/images/navlogo.png') }}" alt="" /><img class="brand-logo-light w-50" src="{{ asset('assets/images/navlogo.png') }}" alt="" /></a>
                                </div>
                            </div>

                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item active"><a class="rd-nav-link" href={{ route('church.index') }}>Home</a>
                                        </li>
                                        {{-- <li class="rd-nav-item"><a class="rd-nav-link" href={{ route('church.department') }}>Departments</a> --}}
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href={{ route('church.give') }}>Give</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#">About Us</a>
                                            <ul class="rd-menu rd-navbar-dropdown">
                                                <li class="rd-dropdown-item mb-1"><a class="rd-dropdown-link" href="{{ route('church.history') }}">History</a></li>
                                                <li class="rd-dropdown-item mb-1"><a class="rd-dropdown-link" href="{{ route('church.mission') }}">Mission and Vision</a></li>
                                                <li class="rd-dropdown-item mb-1"><a class="rd-dropdown-link" href="{{ route('church.belief') }}">Our Beliefs</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href={{ route('church.contact') }}>Contacts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>


