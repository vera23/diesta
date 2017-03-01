<!DOCTYPE html>
<html lang="en">
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="assets/bxslider/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet"/>
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<style>
    #header {
        background-color: rgba(255, 255, 255, 0.4);
    }
</style>
<body>

<script>
    $(document).ready(function () {
        $('.bxslider').bxSlider({
                mode: 'fade',
                auto: true
            }
        );
    });
</script>

<div id="header">
    <div class="container">
        <div class="col-lg-4 col-xs-12 col-sm-4">
            <img class="margin-top-5" src="assets/images/logo.png">
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul id="menu" class="nav navbar-nav fsize-18">
                <li><a href="#">
                        Главная
                    </a>
                </li>
                <li><a href="#">
                        Каталог </a>
                </li>
                <li><a href="#">
                        О компании </a>
                </li>
                <li><a href="#">
                        Новости</a>
                </li>
                <li><a href="#">
                        Контакты </a>
                </li>
            </ul>
        </div>
        <div class="hidden-xs col-lg-2 col-sm-2 padding-0 margin-top-15">
            <div class="text-right col-sm-12 padding-0">
                <span class="fsize-11">тел.:</span>
                <span class="fcolor-red fsize-15">(495)</span>
                <span class="fcolor-blue fsize-24">955-01-91</span>
            </div>
            <div class="text-right col-sm-12 padding-0">
                <span class="fsize-11">email:</span>
                <span class="fcolor-blue fsize-9">veramir10@gmail.com</span>
            </div>
        </div>
    </div>
</div>
<div class="slider">
    <ul class="bxslider">
        <li><img src="assets/images/slider-img.png">
            <div class="container">
                <div id="advertising" class="fsize-33 col-sm-7 col-lg-7 col-xs-12">
                    Набор (6 шт) пластиковых брекетов
                    Elegance Roth 018

                    <div class="prices margin-top-40">
                        <span class="tahoma">7 999 руб</span> <span
                                class="margin-left-30 font-red fsize-40">5 000 руб</span>
                    </div>
                </div>
            </div>
        </li>
        <li><img src="assets/images/slider-img.png">
            <div class="container">
                <div id="advertising" class="fsize-33 col-sm-7 col-lg-7 col-xs-12">
                    Набор (6 шт) пластиковых брекетов
                    Elegance Roth 018

                    <div class="prices margin-top-40">
                        <span class="tahoma">7 999 руб</span> <span
                                class="margin-left-30 font-red fsize-40">5 000 руб</span>
                    </div>
                </div>
            </div>
        </li>
        <li><img src="assets/images/slider-img.png">
            <div class="container">
                <div id="advertising" class="fsize-33 col-sm-7 col-lg-7 col-xs-12">
                    Набор (6 шт) пластиковых брекетов
                    Elegance Roth 018

                    <div class="prices margin-top-40">
                        <span class="tahoma">7 999 руб</span> <span
                                class="margin-left-30 font-red fsize-40">5 000 руб</span>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<div id="news">
    <div class="container text-center">
        <h3 class="header margin-bottom-85">
            Новости
        </h3>
        <a href="#" class="all-link pull-right">Все новости</a>

        <div class="row">
            <div class="col-xs-12 col-lg-4 col-md-4">
                <a href="#" class="news-link">
                    <div class="news">
                        <img class="news-img" src="/assets/images/news.jpg">
                        <div class="news-title">Новость 1</div>
                    </div>
                    <div class="news-preview text-center margin-top-20">
                        Сегодня что-то когда закрывается
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-lg-4 col-md-4">
                <a href="#" class="news-link">
                    <div class="news">
                        <img class="news-img" src="/assets/images/news.jpg">
                        <div class="news-title">Новость 1</div>
                    </div>
                    <div class="news-preview text-center margin-top-20">
                        Сегодня что-то когда закрывается
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-lg-4 col-md-4">
                <a href="#" class="news-link">
                    <div class="news">
                        <img class="news-img" src="/assets/images/news.jpg">
                        <div class="news-title">Новость 1</div>
                    </div>
                    <div class="news-preview text-center margin-top-20">
                        Сегодня что-то когда закрывается
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="providers">
    <div class="container text-center">
        <h3 class="header margin-bottom-85">
            Поставщики
        </h3>
        <a href="#" class="all-link pull-right">Все поставщики</a>
        <div class="row">
            <a href="#">
                <div class="col-xs-12 col-lg-4 col-md-4">
                    <img class="provider-logo" src="assets/images/provider-logo.png">
                    <div class="provider-name col-sm-12 fsize-18">
                        American orthodontic
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-xs-12 col-lg-4 col-md-4">
                    <img class="provider-logo" src="assets/images/provider-logo.png">
                    <div class="provider-name col-sm-12 fsize-18">
                        American orthodontic
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-xs-12 col-lg-4 col-md-4">
                    <img class="provider-logo" src="assets/images/provider-logo.png">
                    <div class="provider-name col-sm-12 fsize-18">
                        American orthodontic
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <div class="col-lg-4 col-sm-4 col-xs-12 text-left padding-top-25">
            @Copyright
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12 text-center padding-top-20">
            <a href="#">
                <img class="margin-right-10" src="assets/images/fb.png">
            </a>
            <a href="#">
                <img class="margin-right-10" src="assets/images/fb.png">
            </a>
            <a href="#">
                <img class="margin-right-10" src="assets/images/fb.png">
            </a>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12 text-right">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                119049, г. Москва,<br>
                Ленинский проспект, 2<br>
                e-mail: email@mail.ru
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                тел/факт: (495)495-45-78<br>
                тел/факт: (495)495-45-78<br>
            </div>
        </div>
    </div>
</div>
</body>
</html>