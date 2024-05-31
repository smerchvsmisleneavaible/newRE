<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>{{ $title }}</title>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <div class="navbar-brand">
                    <img src="public/upload/files/images/logo.png" alt="" style="width: 75%">
                </div>
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">АДМИН-ПАНЕЛЬ</span>
                </a>
                @auth("web")
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{route('admin')}}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i>
                            <span class="ms-1 d-none d-sm-inline">Главная</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("chars") }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-person-square"></i> <span class="ms-1 d-none d-sm-inline">Персонажи</span></a>
                    </li>

                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-music-note"></i> <span class="ms-1 d-none d-sm-inline">Музыка</span> </a>
                    </li>
                </ul>

                <hr>
                    <a href="{{ route("logout") }}" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-box-arrow-down-left"></i> <span class="ms-1 d-none d-sm-inline">Выйти</span> </a>
                @endauth
            </div>
        </div>


{{ $slot }}
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/style.js') }}"></script>
</body>
</html>
