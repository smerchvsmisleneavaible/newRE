<!DOCTYPE html>
<html lang="">
<head>
    <title>{{ $title }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #242424">
<nav class="navbar navbar-expand-lg d-flex sticky-top" style="background: black">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img class="img-responsive" alt="logo" src="https://webstatic.hoyoverse.com/upload/event/2022/04/25/808b3b532e49699aacaa963367c80e3e_4366899772710835254.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
            <span role="button">
                <i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">ГЛАВНАЯ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/characters">ПЕРСОНАЖИ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/music-page">САУНДТРЕКИ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{ $slot }}
<footer class="d-flex justify-content-between container-fluid" style="background: black">
    <nav class="navbar navbar-expand-lg d-flex" style="background: black">
        <div class="container-fluid">
            <a class="navbar-brand border-right pr-lg-5" href="/">
                <img class="img-responsive" alt="logo" src="https://webstatic.hoyoverse.com/upload/event/2022/04/25/808b3b532e49699aacaa963367c80e3e_4366899772710835254.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavFooter" aria-controls="navbarNavFooter" aria-expanded="false">
            <span role="button">
                <i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i>
            </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavFooter">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/">ГЛАВНАЯ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/characters">ПЕРСОНАЖИ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/music-page">САУНДТРЕКИ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex align-items-center text-center list-group-horizontal-lg list-group">
        <div>
            <h5 class="text-white mt-sm-n3">КОНТАКТЫ:</h5>
            <div class="icons">
                <a href="https://vk.com/cmerch_na_bazu">
                    <img class="img-fluid"
                         src="https://thumb.cloud.mail.ru/weblink/thumb/xw1/TfKk/QGyS93cW7/PNG%20-%20digital/VK%20Logo%20White.png"
                         style="width: 10%; height: 10%; margin-right: 10px">
                </a>
                <a href="https://discord.gg/6BPhEm7Qsp">
                    <img class="img-fluid"
                         src="https://rationalwiki.org/w/images/thumb/9/9c/Discord_Logo_Icon_White.svg/120px-Discord_Logo_Icon_White.svg.png"
                         style="width: 10%; height: 10%">
                </a>
            </div>
        </div>
        <h6 class="text-right ml-5 mr-5 text-white">Смерч. Все права принадлежат правообладателям. 2024</h6>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/style.js') }}"></script>
</body>
</html>
