<!DOCTYPE html>
<html lang="ru">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Табуретки и стулья</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <style>
        body {
            padding-top: 70px;
        }

    </style>

</head>


<?php

        // Кусочек ПХП-кода

    
        // Разнообразные фразы-призывы
        $zvonite=[
            "Звоните",
            "Закажите прямо сейчас",
            "Звоните прямо сейчас",
            "Закажите по телефону"
            ];

    
        // Возвращает форматированный номер
        function get_formatted_phone() {
            return ("<a href=\"tel:+79067121001\">+7 906 712-1001</a>");        
        }

        // Печатает фразу "Звоните: +7 ..."
        function print_zvonite() {
            global $zvonite;
            $tmp = $zvonite[array_rand($zvonite)];
            $phone = get_formatted_phone();
            echo ("<br><strong>$tmp: $phone</strong>");
        }
    
    ?>

    <body>
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="#">Табуретки и стулья</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!--
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
                  -->


                    <strong>Звоните: <?= get_formatted_phone() ?></strong>
                    <!--
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                    -->
                </div>
            </nav>

            <br />
            <!-- Джумботрон -->
            <div class="jumbotron">
                <h1 class="display-5">Дизайнерские табуретки и стулья из фанеры ручной&nbsp;работы</h1>
                <p class="lead">Изготавливаем из лучших сортов фанеры на ультрасовременном оборудовании</p>
                <!--
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        -->
                <!--
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </p>
                -->
            </div>

            <p>Вся наша мебель поставляется в плоской упаковке.</p>

            <!-- 
        КОНТЕНТ
        -->


            <!-- START THE FEATURETTES -->

            <!--rigth text Alignment-->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">


                    <h2 class="featurette-heading">Стул &laquo;Гвидо&raquo;
                        <span class="badge badge-primary">Хит продаж!</span></h2>

                    <p class="lead">Габариты: 51&times;63&times;84 см.
                        <br>Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">3980 ₽</span></h2>
                        <?= print_zvonite() ?>
                    </p>

                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair16.jpg" alt="Generic placeholder image">
                </div>

            </div>




            <!--left text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">

                    <h2 class="featurette-heading">Стул &laquo;Соломон&raquo;<span class="text-muted"><br>Статность в каждой детали</span></h2>

                    <p class="lead">Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">4872 ₽</span></h2>
                        <?= print_zvonite() ?>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair12.jpg" alt="Generic placeholder image">
                </div>
            </div>



            <!--rigth text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Стул &laquo;Поэт&raquo;
                        <br/>
                        <span class="text-muted">Классика</span></h2>
                    <p class="lead">
                        Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">4872  ₽</span></h2>
                        <?= print_zvonite() ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair11.jpg" alt="Generic placeholder image">
                </div>

            </div>

            <!--left text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Стул &laquo;Трио&raquo;<br/>
                        <span class="text-muted">Никто не устоит</span></h2>
                    <p class="lead">Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br> Покрытие на выбор:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br> Цвет на выбор
                        <h2><span class="badge badge-success">4170  ₽</span></h2>
                        <?= print_zvonite() ?>
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair14.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--rigth text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Стул &laquo;Бренди&raquo;
                        <br/>
                        <span class="text-muted">Будь самим собой</span></h2>
                    <p class="lead">
                        Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">4934  ₽</span></h2>
                        <?= print_zvonite() ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair3.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--left text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Стул &laquo;Модерн&raquo;<br/>
                        <span class="text-muted">Новые формы</span></h2>
                    <p class="lead">Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br> Покрытие на выбор:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br> Цвет на выбор
                        <h2><span class="badge badge-success">5021  ₽</span></h2>
                        <?= print_zvonite() ?>
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair10.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--rigth text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Стул &laquo;Пазл&raquo;
                        <br/>
                        <span class="text-muted"></span></h2>
                    <p class="lead">
                        Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">3914  ₽</span></h2>
                        <?= print_zvonite() ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair6.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--left text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Стул &laquo;Пикник&raquo;<br/>
                        <span class="text-muted">Собери сам</span></h2>
                    <p class="lead">Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br> Покрытие на выбор:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br> Цвет на выбор
                        <h2><span class="badge badge-success">4519  ₽</span></h2>
                        <?= print_zvonite() ?>
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair2.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--rigth text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Стул &laquo;Барный&raquo;
                        <span class="badge badge-primary">Хит продаж!</span></h2>
                    <p class="lead">
                        Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">5184  ₽</span></h2>
                        <?= print_zvonite() ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair1.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--left text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Стул &laquo;Сильвио&raquo;<br/>
                        <span class="text-muted">Удобство хранения</span></h2>
                    <p class="lead">Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br> Покрытие на выбор:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br> Цвет на выбор
                        <h2><span class="badge badge-success">4321  ₽</span></h2>
                        <?= print_zvonite() ?>
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair4.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--rigth text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Стул &laquo;Рондо&raquo;<br/>
                        <span class="text-muted">Просто хранить, легко разбирать</span></h2>
                    <p class="lead">
                        Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">3914  ₽</span></h2>
                        <?= print_zvonite() ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair5.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--left text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Стул &laquo;Жук&raquo;<br/>
                        <span class="text-muted">Компактность</span></h2>
                    <p class="lead">Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br> Покрытие на выбор:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br> Цвет на выбор
                        <h2><span class="badge badge-success">4321  ₽</span></h2>
                        <?= print_zvonite() ?>
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair8.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--rigth text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Стул &laquo;Квинс&raquo;<br/>
                        <span class="text-muted">Минимум пространства для хранения</span></h2>
                    <p class="lead">
                        Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">3914  ₽</span></h2>
                        <?= print_zvonite() ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="img/chair15.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--left text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Табурет &laquo;Жук&raquo;<br/>
                        <span class="text-muted">Компактность</span></h2>
                    <p class="lead">Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br> Покрытие на выбор:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br> Цвет на выбор
                        <h2><span class="badge badge-success">2378  ₽</span></h2>
                        <?= print_zvonite() ?>
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="img/stool2.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--rigth text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Табурет &laquo;Нео&raquo;<br/>
                        <span class="text-muted">Лаконичность в каждой детали</span></h2>
                    <p class="lead">
                        Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">3174  ₽</span></h2>
                        <?= print_zvonite() ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="img/stool10.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--left text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Табурет &laquo;Рафаэль&raquo;<br/>
                        <span class="text-muted"></span></h2>
                    <p class="lead">Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br> Покрытие на выбор:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br> Цвет на выбор
                        <h2><span class="badge badge-success">2578  ₽</span></h2>
                        <?= print_zvonite() ?>
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="img/stool14.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--rigth text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Табурет &laquo;Фастмит&raquo;<br/>
                        <span class="text-muted">Подарит необычные ощущения</span></h2>
                    <p class="lead">
                        Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">4661  ₽</span></h2>
                        <?= print_zvonite() ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="img/stool13.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--left text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Табурет &laquo;Клевер&raquo;<br/>
                        <span class="text-muted">Удачная покупка</span></h2>
                    <p class="lead">Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br> Покрытие на выбор:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br> Цвет на выбор
                        <h2><span class="badge badge-success">3618  ₽</span></h2>
                        <?= print_zvonite() ?>
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="img/stool15.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <!--rigth text Alignment-->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Табурет &laquo;Юлиус&raquo;<br/>
                        <span class="text-muted">Ощущение стабильности</span></h2>
                    <p class="lead">
                        Материал:
                        <span class="badge badge-light">березовая фанера</span>
                        <br>Покрытие:
                        <span class="badge badge-light">краска</span>
                        <span class="badge badge-light">лак</span>
                        <span class="badge badge-light">без покрытия</span>
                        <br>Цвет на выбор
                        <h2><span class="badge badge-success">2961  ₽</span></h2>
                        <?= print_zvonite() ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="img/stool16.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">


            <footer>

                <p>
                    &copy; 2017 &laquo;Мебель из фанеры&raquo;
                </p>
            </footer>

            <!-- /END THE FEATURETTES -->




            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


            <!-- Yandex.Metrika counter -->
            <script type="text/javascript">
                (function(d, w, c) {
                    (w[c] = w[c] || []).push(function() {
                        try {
                            w.yaCounter46339929 = new Ya.Metrika({
                                id: 46339929,
                                clickmap: true,
                                trackLinks: true,
                                accurateTrackBounce: true,
                                webvisor: true
                            });
                        } catch (e) {}
                    });

                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function() {
                            n.parentNode.insertBefore(s, n);
                        };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://mc.yandex.ru/metrika/watch.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else {
                        f();
                    }
                })(document, window, "yandex_metrika_callbacks");

            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/46339929" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->


        </div>

    </body>


</html>
