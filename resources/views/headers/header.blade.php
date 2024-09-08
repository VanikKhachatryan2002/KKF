<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KKF</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header id="header1" class="header">
    <a href="/" class="router-link-active router-link-exact-active nav" aria-label="nav" aria-current="page">
        <div class="LogoContainer">
            <img alt="logo" width="100" height="100" class="lazyload" src="{{ asset('/images/logo.webp') }}">
        </div>
    </a>
    <div  class="navbarContainer" role="navigation" tabindex="0" aria-label="ԳԼԽԱՎՈՐ | ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ">
        <a href="/" class="router-link-active router-link-exact-active nav" aria-label="ԳԼԽԱՎՈՐ" role="link" aria-current="page">ԳԼԽԱՎՈՐ</a>
        <span>|</span>
        <a href="{{asset('/services')}}" class="nav" aria-label="ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ" role="link">ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</a>
    </div>
</header>
