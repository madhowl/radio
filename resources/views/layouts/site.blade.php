<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/audio.css" media="screen" rel="stylesheet">
</head>
<body>
<header>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand waves-effect" href="/main"><i class="fas fa-broadcast-tower"></i> Радио Онлайн</a>
        <button class="navbar-toggler waves-effect" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link waves-effect" href="/main">Главная
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="/genres">Жанры
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="/countries">Страны
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="/about">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="/contact">Контакты</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect">
                        <i class="fab fa-vk"></i>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!--/.Navbar -->
</header>
<hr>

<div class="container">
    <div class="row">
@yield('content')
    </div>
</div>
<div class="footer-down">
<hr>
<!-- Footer -->
<footer class="page-footer font-small white">
    <!-- Copyright -->
    <div class="txt-footer">
    <div class="text-center py-3">© 2020 Copyright: Максим Щедрин 1141
    </div>
    </div>
    <!-- Copyright -->

</footer>
</div>
<!-- Footer -->
{{--JS--}}
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

<script>var _gaq=[['_setAccount','UA-20257902-1'],['_trackPageview']];(function(d,t){ var g=d.createElement(t),s=d.getElementsByTagName(t)[0]; g.async=1;g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
<script src="/js/audio.min.js"></script>
<script>
    audiojs.events.ready(function() {
        audiojs.createAll();
    });
</script>
<script>
$( document ).ready(function() {
new WOW().init();
});
$( ".wow" ).addClass( "fadeInUp" );
</script>
</body>
</html>
