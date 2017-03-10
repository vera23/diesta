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
<body>
<div id="header" class="row">
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


<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Главная</a></li>
        <li class="breadcrumb-item"><a href="#">Каталог</a></li>
        <li class="breadcrumb-item active">Data</li>
    </ol>
    <div class="col-sm-2">

    </div>
    <div class="col-sm-10">
        <div class="row">

        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>
                    Направляющая стрелка
                </th>
                <th>
                    Направляющая стрелка
                </th>
                <th>
                    Направляющая стрелка
                </th>
                <th>
                    Направляющая стрелка
                </th>
                <th>
                    Направляющая стрелка
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
            </tr>
            <tr>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
            </tr>
            <tr>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
                <td>
                    6.5 мм
                </td>
            </tr>
            </tbody>
        </table>

    <h3 class="header">
        Заказать онлайн
    </h3>
        <form class="col-sm-6 col-lg-6 col-xs-12">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Имя..">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email..">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Телефон..">
            </div>
            <div class="file-value pull-left"></div>
            <input name="file" type="file" id="file" class="inputfile" data-multiple-caption="{count} files selected"
                   multiple>
            <label for="file" class="file-label">Обзор</label>
            <button type="submit" class="btn btn-default">Заказать</button>
        </form>
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

<script>
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function (input) {
        var label = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener('change', function (e) {
            var fileName = '';
            if (this.files && this.files.length > 1)
                fileName = ( this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
            else
                fileName = e.target.value.split('\\').pop();

            if (fileName) {
                $('.file-value').html(fileName);

            }
            else
                label.innerHTML = labelVal;
        });
    });
</script>