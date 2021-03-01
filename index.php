<!-- подключим header -->
<?php include 'inc/header.php'; ?>
</head>
<body>
<!-- меню сайта -->
<div id="main" class="main">
    <header id="main-header" class="main-header">
            <div class="body-wrap">
                <div class="container navbarcontainer">
                    <div class="col-md-12">
                        <div class="row">
                            <nav class="navbar navbar-inverse" role="navigation">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a href="index.php" class="transition"><img src="img/logo.png"></a>
                                    </div>
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="index.php" class="transition">Головна</a></li>
                                            <li class="dropdown">
                                                <a href="routes.php" class="dropdown-toggle" data-toggle="dropdown">Маршрути <b class="caretka"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="inc/14.php" class="button transition">№14</a></li>
                                                    <li><a href="inc/16.php" class="button transition">№16</a></li>
                                                    <li><a href="inc/316.php" class="button transition">№316</a></li>
                                                    <li><a href="inc/322.php" class="button transition">SkyBus(№322)</a></li>
                                                    <li><a href="inc/2.php" class="button transition">№2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="inc/buses.php" class="button transition">Автобуси</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Послуги <b class="caretka"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#dontwork" class="button fancybox">Пас. перевезення</a></li>
                                                    <li><a href="#dontwork" class="button fancybox">Вантаж. перевезення</a></li>
                                                    <li><a href="#dontwork" class="button fancybox">Техогляд</a></li>
                                                    <li><a href="#dontwork" class="button fancybox">Ліцензування</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="inc/news.php" class="button transition">Новини</a></li>
                                            <li><a href="#dontwork" class="button fancybox">Галерея</a></li>
                                            <li class="contacts"><a href="#map">Контакти</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                </div>
            </div>
        </div>
    </header>

    <!-- анимация загрузки\отправки -->
    <div class="b-popup_load" id="popup_load">
        <div id="floatingCirclesG">
            <div class="f_circleG" id="frotateG_01"></div>
            <div class="f_circleG" id="frotateG_02"></div>
            <div class="f_circleG" id="frotateG_03"></div>
            <div class="f_circleG" id="frotateG_04"></div>
            <div class="f_circleG" id="frotateG_05"></div>
            <div class="f_circleG" id="frotateG_06"></div>
            <div class="f_circleG" id="frotateG_07"></div>
            <div class="f_circleG" id="frotateG_08"></div>
        </div>
    </div>

    <!-- слайдер -->
    <div id="first-slider">
        <div  id="carousel-example-generic" class="carousel slide carousel-fade">
            <!-- Индикатори -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper для слайдов -->
            <div class="carousel-inner" role="listbox">
                <!-- Item 1 -->
                <div class="item active slide1">
                    <div class="row"><div class="container">
                            <div class="col-md-7 text-left">
                                <div class="content" data-animation="animated bounceInLeft">
                                    <h3 >Перевезення</h3>
                                    <h4 >без зайвих затрат</h4>
                                    <h5 >Повседневная практика показывает, что начало повседневной работы по формированию позиции требует от нас системного анализа существующих финансовых и административных условий? Повседневная практика показывает, что постоянный количественный рост и сфера нашей</h5>
                                    <a href="#dontwork" class="button fancybox" data-animation="animated bounceInLeft">Детальніше</a>
                                </div>
                                </div>
                        </div></div>

                </div>
                <!-- Item 2 -->
                <div class="item slide2">
                    <div class="row"><div class="container">
                            <div class="col-md-7 text-left">
                                <div class="content" data-animation="animated bounceInLeft">
                                    <h3 >Вигідно</h3>
                                    <h4 >коли ми поряд</h4>
                                    <h5 >Повседневная практика показывает, что начало повседневной работы по формированию позиции требует от нас системного анализа существующих финансовых и административных условий? Повседневная практика показывает, что постоянный количественный рост и сфера нашей Повседневная практика показывает, </h5>
                                    <a href="#dontwork" class="button fancybox" data-animation="animated bounceInLeft">Детальніше</a>
                                </div>
                                </div>
                        </div></div>
                </div>
                <!-- Item 3 -->
                <div class="item slide3">
                    <div class="row"><div class="container">
                            <div class="col-md-7 text-left">
                                <div class="content" data-animation="animated bounceInLeft">
                                    <h3 >ваш дорожній</h3>
                                    <h4 >партнер</h4>
                                    <h5 >Повседневная практика показывает, что начало повседневной работы по формированию позиции требует от нас системного анализа существующих финансовых и административных условий? Повседневная практика показывает, что постоянный количественный рост и сфера нашей</h5>
                                    <a href="#dontwork" class="button fancybox" data-animation="animated bounceInLeft">Детальніше</a>
                                </div>
                                </div>
                        </div></div>
                </div>
                <!-- Item 4 -->
                <div class="item slide4">
                    <div class="row"><div class="container">
                            <div class="col-md-7 text-left">
                                <div class="content" data-animation="animated bounceInLeft">
                                    <h3 >Подорожуй</h3>
                                    <h4 >разом з SkyBus</h4>
                                    <h5 >Повседневная практика показывает, что начало повседневной работы по формированию позиции требует от нас системного анализа существующих финансовых и административных условий? Повседневная практика показывает, что постоянный количественный рост и сфера нашей</h5>
                                    <a href="#dontwork" class="button fancybox" data-animation="animated bounceInLeft">Детальніше</a>
                                </div>
                                </div>
                        </div></div>
                </div>
                <!-- End Item 4 -->

            </div>
            <!-- End Wrapper для слайдов-->
            <a id="prev" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <div class="left"></div>
            </a>
            <a id="next" class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <div class="right"></div>
            </a>
        </div>

        <!-- футер слайдера -->
        <div class="slider_botline_info">
            <div class="container">
                <div class="col-md-12">
                    <div class="content-text">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="our_routes">
                                    <div class="icon_our_routes">
                                    </div>
                                    <span>Маршрути</span><p>Дізнайтеся про всі<br> наші маршрути<br>
                                            <a href="#dontwork" class="but_our_routes fancybox">Наші маршрути</a>
                                        </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="our_buses">
                                    <div cla class="icon_our_buses">
                                    </div>
                                    <span>Автобуси</span><p>Трансфери на<br> комфортабельних автобусах<br>
                                        <a href="#dontwork" class="but_our_buses fancybox">Наші автобуси</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Про компанию -->
<div class="company" id="compan">
    <div class="abt_us">
        <div class="us">
            <h3>Про нас</h3>
            <h5>ТОВ "Атасс-Бориспіль"</h5>
            <p>Автотранспортне підприємство було засноване в 1938 році на базі
автороти. За 80 років підприємство неодноразово змінювало назву та
кваліфікацію перевезень: спочатку лише перевезення вантажів, потім
змішаний тип – перевезення вантажів та пасажирів. На даний час підприємство займається виключно перевезенням
пасажирів по місту та області, обслуговування пасажирів
міжнародного аеропорту та на договірній основі. Великі виробничі площі авторемонтної майстерні
дають можливість для виконання всіх видів ремонту і
обслуговування транспорту. На виробничій площі авторемонтної майстерні в
наявності 11 оглядових канав, 4 автомобільних підйомника
(до 4,0т), цех паливної
апаратури, шиномонтажний, агрегатний, токарний, кузовний, малярний та електроцех, в кожному з яких працюють спеціалісти високого рівню. Рухомий склад перед виїздом на лінію та при поверненні перевіряється черговим контролером КТП. На підприємстві є спеціалізований медичний пункт
по контролю стану здоров’я водіїв. Підприємство має сучасну базу для якісного ремонту та
обслуговування автобусів. </p>
        </div>
        <div class="btns">
            <a href="inc/news.php" class="button news_but transition">Новини</a>
            <a href="#dontwork" class="button gallery fancybox">Галерея</a>
        </div>
    </div>
    <div class="img">

    </div>
</div>

<!-- блок с картой адреса и обратной связю -->
<div id="map_container">
    <div id="map"></div>
    <div class="container">
        <div class="row">
            <div class="wrap">
                <div id="contacts">
                                    <h3>Контакти</h3>
                                    <h5>Чекаємо на Вас</h5>
                                    <p class="street">вул.Володимира Момота 42</p>
                                    <p class="city">Борисріль,Київська обл.,08300</p>
                                    <p class="phone1">+38(095)7838939</p>
                                    <p class="phone2">+38(067)2406545</p>
									<p class="phone2" style="margin-top: 10px;">+38(095)4310717</p>
                                    <p class="phone2">+38(097)8314932</p>
									<p class="phone2">+38(093)9035932</p>
                                    <p class="email">atass@atass.com.ua</p>
                                    <button class="button_callback">Напишіть нам</button>
                                </div>
                <div id="callback">
                                <div class="callback_form">
                                    <h3>Форма</h3>
                                    <h5>Зворотнього зв'язку</h5>
                                    <form id="callback_form" class="pop_form">
                                        <input type="text" name="name" placeholder="Ваше ім'я" required />
                                        <input type="email" name="email" placeholder="E-mail" required />
                                        <input type="text" name="message" placeholder="Текст повідомлення" required /><br>
                                        <button class="button_send" type="submit">Надіслати</button>
                                    </form>
                                </div>
                                <div id="callback_message">
                                    <h3>Дякуємо</h3>
                                    <h5>за повідомлення</h5>
                                    <button class="return" type="submit">Повернутися</button>
                                </div>
                            </div>
            </div>
        </div>
    </div>
</div>

<!-- форма заполнения данных для обратной связи -->
<div class="b-popup" id="popup_form">
        <h3>Форма</h3>
        <h5>Зворотнього зв'язку</h5>
        <form class="pop_form">
            <input type="text" name="name" placeholder="Ваше ім'я" required />
            <input type="text" name="email" placeholder="E-mail" required />
            <input type="text" name="message" placeholder="Текст повідомлення" required /><br>
            <button class="button_send" type="submit">Надіслати</button>
        </form>
</div>

<!-- скрипт для GoogleMap -->
<script>
    function initMap() {
        var uluru = {lat: 50.349542, lng: 30.930763};
        var centeru = {lat: 50.340425, lng: 30.940393};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: centeru,
            styles : [
                {
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#008eff"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": "0"
                        },
                        {
                            "lightness": "0"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        },
                        {
                            "saturation": "-60"
                        },
                        {
                            "lightness": "-20"
                        }
                    ]
                }
            ]
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'img/maker_pink.png',
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
        google.maps.event.addDomListener(window, "resize", function() {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4wVhcawre0Svf62uUs1FpUAxwPvwklx0&callback=initMap" async defer></script>

<!-- блок партнеры -->
<div class="partners" id="partner">
    <div class="partners_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="icon_our_partners">
                        </div>
                        <div class="text_our_partners">
                            <p>Наші партнери</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="our_partners">
                            <a href="https://kbp.aero" target="_blank"><div class="borispil transition"></div></a>
                            <a href="https://busfor.ua" target="_blank"><div class="busfor transition"></div></a>
                            <a href="https://www.flyuia.com" target="_blank"><div class="uia transition"></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- окно извинений если ссылка не работает -->
<div class="hidden">
    <form id="dontwork" class="pop_form">
        <h3>Вибачте за незручності.Сайт знаходиться у стані ВЕЛИКОЇ розробки.</h3>
    </form>
</div>

<!-- футер -->
<footer class="main_footer">
    <div class="footer">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="nav_footer">
                        <div class="footer_main">
                            <p>Головна</p>
                            <ul>
                                <li class="about_company"><a href="#compan" class="button">Про компанію</a></li>
                                <li class="contacts"><a href="#map" class="button">Контакти</a></li>
                                <li class="partner"><a href="#partners" class="button">Партнери</a></li>
                                <li><a href="inc/news.php" class="button transition">Новини</a></li>
                                <li><a href="#dontwork" class="button fancybox">Галерея</a></li>
                            </ul>
                        </div>
                        <div class="footer_routes">
                            <p>Маршрути</p>
                            <ul>
                                <li><a href="inc/14.php" class="button transition">№14</a></li>
                                <li><a href="inc/16.php" class="button transition">№16</a></li>
                                <li><a href="inc/316.php" class="button transition">№316</a></li>
                                <li><a href="inc/322.php" class="button transition">SkyBus(№322)</a></li>
                                <li><a href="inc/2.php" class="button transition">№2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="soc_buttons">
                        <a href="http://www.facebook.com/profile.php?id=100016812663191" target="_blank"><div class="facebook" aria-hidden="true"></div></a>
                        <a href="https://instagram.com" target="_blank"><div class="instagram" aria-hidden="true"></div></a>
                        <a href="https://www.youtube.com" target="_blank"><div class="youtube" aria-hidden="true"></div></a>
                        <a href="https://vk.com" target="_blank"><div class="vk" aria-hidden="true"></div></a>
                        <a href="javascript:PopUpShow()" class="button_callback">Напишіть нам</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>