<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

  {{-- <link rel="stylesheet" href="{{ asset('/DataTables/datatables.css"') }} /> --}}
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="{{ asset('admin_assets/choices.js/styles/choices.min.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('admin_assets/img/navlogo.png') }}">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header z-index-50">
            <nav class="nav navbar py-3 px-0 shadow-sm text-white position-relative">
                <!-- Search Box-->
                <div class="search-box shadow-sm">
                    <button class="dismiss d-flex align-items-center">
                        <svg class="svg-icon svg-icon-heavy">
                            <use xlink:href="#close-1"> </use>
                        </svg>
                    </button>
                    <form id="searchForm" action="#" role="search">
                        <input class="form-control shadow-0" type="text" placeholder="What are you looking for...">
                    </form>
                </div>
                <div class="container-fluid w-100">
                    <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand --><a class="navbar-brand d-none d-sm-inline-block" href="index.html">
                                <div class="brand-text d-none d-lg-inline-block"><strong>MFM Arab Dashboard</strong></div>

                            </a>
                            <!-- Toggle Button--><a class="menu-btn active" id="toggle-btn" href="#"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Search-->
                            <li class="nav-item d-flex align-items-center"><a id="search" href="#">
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#find-1"> </use>
                                    </svg></a></li>
                            <!-- Logout    -->
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                  <li class="nav-item"><button class="btn bg-primary" type="submit">Logout</button> </li>
                            </form>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar z-index-40">

                <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 mt-3 heading">Main</span>
                <ul class="list-unstyled py-4">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('dashboard') }}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>Home </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.bible_verse') }}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#portfolio-grid-1"> </use>
                            </svg>Bible Verse</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.activity') }}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#sales-up-1"> </use>
                            </svg>Days Of Activities</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.sermon') }}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#survey-1"> </use>
                            </svg>Church Sermon</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.location') }}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#survey-1"> </use>
                            </svg>Church Location</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.department') }}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#survey-1"> </use>
                            </svg>Church Head Of Department</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.event') }}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#survey-1"> </use>
                            </svg>Church Upcoming Events</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.intro') }}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#survey-1"> </use>
                            </svg>Church Introduction</a></li>
                    {{-- <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.contact') }}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#survey-1"> </use>
                            </svg>Church Contact</a></li> --}}
            </nav>
