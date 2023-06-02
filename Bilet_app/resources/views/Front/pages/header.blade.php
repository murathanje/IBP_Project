<!DOCTYPE html>
<html lang="tr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets') }}/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets') }}/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicons/favicon.ico">
    <link rel="manifest" href="{{ asset('assets') }}/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{ asset('assets') }}/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets') }}/css/theme.css" rel="stylesheet" />

  </head>


  <body style= "overflow-x: hidden">

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block bg-blur" data-navbar-on-scroll="data-navbar-on-scroll" style = "backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px); /* Safari için önek */
  background-color: rgba(200, 200, 200, 0.8); /* Gri tonlarında yarı saydam bir arka plan */">
        <div class="container"><a class="navbar-brand" href="{{ route('home') }}"><img class="d-inline-block" src="{{ asset('assets') }}/img/gallery/logo.png" width="50" alt="logo" /><span class="fw-bold text-primary ms-2">Götür</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#destinations"><span class="nav-link-icon text-800 me-1 fas fa-map-marker-alt"></span><span class="nav-link-text">Locations </span></a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#flights"> <span class="nav-link-icon text-800 me-1 fas fa-plane"></span><span class="nav-link-text">Flights</span></a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#hotels"> <span class="nav-link-icon text-800 me-1 fas fa-hotel"></span><span class="nav-link-text">Hotels</span></a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#activities"><span class="nav-link-icon text-800 me-1 fas fa-bolt"></span><span class="nav-link-text">Activities</span></a></li>
            </ul>
              <a href="{{ route('giris') }}" class="btn text-800 order-1 order-lg-0 me-2" type="submit">Sign In</a>
              <a href="{{ route('kayit') }}" class="btn btn-voyage-outline order-0" type="submit"><span class="text-primary">Sign Up</span></a>
          </div>
        </div>
      </nav>
