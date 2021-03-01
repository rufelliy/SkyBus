<!-- подключаем хедер -->
<?php include 'header.php'; ?>
<script src="../js/slider.js"></script>
</head>
<body>

<!-- меню -->
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
                                    <a href="../index.php" class="transition"><img src="../img/logo.png"></a>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="../index.php" class="transition">Головна</a></li>
                                        <li class="dropdown active">
                                            <a href="routes.php" class="dropdown-toggle" data-toggle="dropdown">Маршрути <b class="caretka_active"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="14.php" class="button transition">№14</a></li>
                                                <li><a href="16.php" class="button transition">№16</a></li>
                                                <li><a href="316.php" class="button transition">№316</a></li>
                                                <li><a href="322.php" class="button transition">SkyBus(№322)</a></li>
                                                <li><a href="2.php" class="button transition">№2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="buses.php" class="button transition">Автобуси</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Послуги <b class="caretka"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#dontwork" class="button fancybox">Пас. перевезення</a></li>
                                                <li><a href="#dontwork" class="button fancybox">Вантаж. перевезення</a></li>
                                                <li><a href="#dontwork" class="button fancybox">Техогляд</a></li>
                                                <li><a href="#dontwork" class="button fancybox">Ліцензування</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="news.php" class="button transition">Новини</a></li>
                                        <li><a href="#dontwork" class="button fancybox">Галерея</a></li>
                                        <li><a href="../index.php#map" class="transition">Контакти</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- navbar по маршрутах -->
<div class="routes_info">
    <div class="container">
        <div class="col-md-12">
            <div class="content-text">
                <div class="row">
                    <div class="col-md-6">
                        <div class="our_routes">
                            <div class="icon_our_routes">
                            </div>
                            <p>Маршрут №14</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav_routes">
                            <li>
                                <a href="14.php">14</a>
                                <ul>
                                    <li>Сеньківка<br>Бориспіль</li>
                                </ul>
                            </li>
                            <li>
                                <a href="16.php">16</a>
                                <ul>
                                    <li>УМБ-17<br>ДП МА "Бориспіль"</li>
                                </ul>
                            </li>
                            <li>
                                <a href="316.php">316</a>
                                <ul>
                                    <li>м.Бориспіль<br>м.Київ(ст. м. "Лівобережна")</li>
                                </ul>
                            </li>
                            <li>
                                <a href="322.php">322</a>
                                <ul>
                                    <li>Аеропорт "Бориспіль"<br>м.Київ(залізничний вокзал "Південний")</li>
                                </ul>
                            </li>
                            <li>
                                <a href="2.php">2</a>
                                <ul>
                                    <li>м.Бориспіль(вул.Каховська)<br>ДП МА "Бориспіль"</li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- информация про маршрут и карта маршрута -->
<div class="rout">
    <div class="abt_rout">
        <div class="route">
            <div class="title">
                <h3>Маршрут<br>№14</h3>
                <h5>Сеньківка<br>Бориспіль</h5>
            </div>
            <div class="route_icons">
                <div class="interval">
                    <div class="interval_icon">
                    </div>
                    <p>кожні 2 год</p>
                </div>
                <div class="date">
                    <div class="date_icon">
                    </div>
                    <p>без вихідних</p>
                </div>
                <div class="daily">
                    <div class="daily_icon">
                    </div>
                    <p>з 5:10-19:40</p>
                </div>
            </div>
            <p>Зручний, швидкий та комфортний маршрут між Борисполем та Синьківкою. Перший автобус з Бориспіля відправляється о 5:10, останній в 18:55. Детальний розклад руху може дізнатись нижче в таблиці чи за телефоном у диспетчерів</p>
        </div>
        <div class="buttns rout">
<!--            <a href="http://busfor.ua" target="_blank" class="button tickets">Квитки</a>-->
            <a href="#dontwork" class="button tickets fancybox">Меморандум</a>
        </div>
    </div>
    <div id="map_routes_container">
        <div id="map_routes"></div>
    </div>
</div>

<!-- скрипт карты -->
<script>
    function initMap() {
        var markerArray = [];
        var start = {lat: 50.434834, lng: 31.077434};
        var finish = {lat: 50.348284, lng: 30.956124};
        var centeru = {lat: 50.349613, lng: 30.930893};
        var map = new google.maps.Map(document.getElementById('map_routes'), {
            zoom: 14,
            center: centeru,
            styles: [
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
        var marker1 = new google.maps.Marker({
            position: start,
            map: map,
            icon: 'img/maker_blue.png',
        });
        var marker2 = new google.maps.Marker({
            position: finish,
            map: map,
            icon: 'img/maker_blue.png',
        });
        google.maps.event.addListener(marker1, 'click', function () {
            infowindow.open(map, marker1);
        });
        google.maps.event.addListener(marker2, 'click', function () {
            infowindow.open(map, marker2);
        });
        google.maps.event.addDomListener(window, "resize", function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
        directionsDisplay = new google.maps.DirectionsRenderer({
            suppressMarkers: true,
            polylineOptions: {
                strokeColor: "#413e64",
                strokeOpacity: 0.5,
                strokeWeight: 6
            }
        });


        var request = {
            origin: new google.maps.LatLng(start.lat, start.lng), //точка старту
            destination: new google.maps.LatLng(finish.lat, finish.lng), //точка фініша
            travelMode: google.maps.DirectionsTravelMode.DRIVING //режим прокладки маршрута
        };
        directionsService = new google.maps.DirectionsService();

        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
            }
        });
        directionsDisplay.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4wVhcawre0Svf62uUs1FpUAxwPvwklx0&callback=initMap" async defer></script>

<!-- таблица расписания маршрута -->
<div class="container-fluid">
    <div class="time_table">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="timetable">
                        <table class="table">
                            <tr>
                                <td class="table_header">м.Бориспіль</td>
                                <td class="table_header">с.Сеньківка</td>
                            </tr>
                            <tr>
                                <td>05:10</td>
                                <td>06:20</td>
                            </tr>
                            <tr class="fon_gray">
                                <td>07:05 (ч/з Андріївка)</td>
                                <td>08:10 (ч/з Андріївка)</td>
                            </tr>
                            <tr>
                                <td>09:30 (робочий)</td>
                                <td>10:00 (робочий)</td>
                            </tr>
                            <tr class="fon_gray">
                                <td>11:00</td>
                                <td>12:00</td>
                            </tr>
                            <tr>
                                <td>14:00</td>
                                <td>15:10</td>
                            </tr>
                            <tr class="fon_gray">
                                <td>17:15 (робочий)</td>
                                <td>18:05 (робочий)</td>
                            </tr>
                            <tr>
                                <td>18:55 (ч/з Андріївка)</td>
                                <td>19:40 (ч/з Андріївка)</td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="tram_schedule">
                        <h3>Диспетчери</h3>
                        <p>(045)956-48-14
                        <br>
(095)-783-89-39
						<br>
(067)-240-65-45
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="main_routes">-->
<!--    <div class="container">-->
<!--        <div class="col-md-12">-->
<!--            <div class="aeroport">-->
<!--                <div class="aeroport_img"></div>-->
<!--                <h3>Місце посадки (с.Сеньківка)</h3>-->
<!--                <p>Посадка на автобуси Sky Bus в аеропорту «Бориспіль» відбувається коло терміналу D. Зупинка знаходиться поруч з виходом із зали прибуття (для поЇздки до Києва) та на 2-му рівні естакади неподалік від входу до зали відправлень-->
<!--                </p>-->
<!--            </div>-->
<!---->
<!--            <div class="vokzal">-->
<!--                <div class="vokzal_img">-->
<!--                </div>-->
<!--                <h3>Місце висадки (м.Бориспіль)</h3>-->
<!--                <p>Прибуття та відправлення автобусів Sky Bus від Південного залізничного вокзалу відбувається безпосередньо поруч з центральним входом до вокзалу</p>-->
<!--            </div>-->
<!---->
<!--            <div class="marshrut">-->
<!--                <div class="marshrut_img"></div>-->
<!--                <h3>Маршрут</h3>-->
<!--                <p>Sky Bus курсує  між аеропортом "Бориспіль" і Південним терміналом Центрального Залізничного вокзалу, біля якого знаходиться автостанція "Київ", і виїжджають міжміські автобуси по Україні.  Проміжна зупинка СкайБас біля станції метро "Харківська", далі маршрут проходить неподалік від Центрального Автовокзалу Києва, з якого щодня відправляються міжнародні  автобуси в Європу</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="container-fluid">-->
<!--    <div class="rout_slider">-->
<!--        <div class="container">-->
<!--            <div class="col-md-12">-->
<!--                <div class="row">-->
<!--                    <div class="sider_container">-->
<!--                        <h3>Автобуси на маршруті</h3>-->
<!--                        <div class="next_button"></div>-->
<!--                        <div class="prev_button"></div>-->
<!--                        <div class="carousel">-->
<!--                            <div class="slide_item one">-->
<!--                                <p>Yutong<br>zk6858<br><br>-->
<!--                                    <a href="#dontwork" class="but_our_buses fanycox">Детальніше</a>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class="slide_item two">-->
<!--                                <p>Steyr<br>sbl12<br><br>-->
<!--                                    <a href="#dontwork" class="but_our_buses fancybox">Детальніше</a>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class="slide_item three">-->
<!--                                <p>Hyundai<br>Universe<br><br>-->
<!--                                    <a href="#dontwork" class="but_our_buses fancybox">Детальніше</a>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class="slide_item four">-->
<!--                                <p>Neoplan<br>Starliner<br><br>-->
<!--                                    <a href="#dontwork" class="but_our_buses fancybox">Детальніше</a>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class="slide_item five">-->
<!--                                <p>Yutong<br>zk6858<br><br>-->
<!--                                    <a href="#dontwork" class="but_our_buses fancybox">Детальніше</a>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class="slide_item six">-->
<!--                                <p>Steyr<br>sbl12<br><br>-->
<!--                                    <a href="#dontwork" class="but_our_buses fancybox">Детальніше</a>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="container">-->
<!--    <div class="col-md-12">-->
<!--        <div class="row">-->
<!--            <div class="additionally">-->
<!--                <h3>Додатково</h3>-->
<!--                <p>Sky Bus курсує  між аеропортом "Бориспіль" і Південним терміналом Центрального Залізничного вокзалу, біля якого знаходиться автостанція "Київ", і виїжджають міжміські автобуси по Україні.  Проміжна зупинка СкайБас біля станції метро "Харківська", далі маршрут проходить неподалік від Центрального Автовокзалу Києва, з якого щодня відправляються міжнародні  автобуси в Європу-->
<!---->
<!--                    Посадка на автобуси Sky Bus в аеропорту «Бориспіль» відбувається коло терміналу D. Зупинка знаходиться поруч з виходом із зали прибуття (для поЇздки до Києва) та на 2-му рівні естакади неподалік від входу до зали відправлень. Прибуття та відправлення автобусів Sky Bus від Південного залізничного вокзалу відбувається безпосередньо поруч з центральним входом до вокзалу. Інтервали між рейсами Sky Bus близько 15 хвилин у денний час і 30-45 хвилин вночі. Час у дорозі - 45-55 хвилин, наведено орієнтовний розклад руху автобусів, за детальнішою інформацією звертайтесь будь ласка до диспетчерів (цілодобово 044-79-2-55-55) y</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

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

<!-- окно извинений если ссылка не работает -->
<div class="hidden">
    <form id="dontwork" class="pop_form">
        <h3>Вибачте за незручності.Сайт знаходиться у стані ВЕЛИКОЇ розробки.</h3>
    </form>
</div>

<!-- форма заполнения данных для обратной связи -->
<div class="b-popup" id="popup_form">
    <div class="callback_form_routs">
        <h3>Форма</h3>
        <h5>Зворотнього зв'язку</h5>
        <form id="callback_form_routs" class="pop_form">
            <input type="text" name="name" placeholder="Ваше ім'я" required />
            <input type="text" name="email" placeholder="E-mail" required />
            <input type="text" name="message" placeholder="Текст повідомлення" required /><br>
            <button class="button_send" type="submit">Надіслати</button>
        </form>
    </div>
</div>
<div class="b-popup" id="popup_return">
    <div id="callback_message_rout">
        <h3>Дякуємо</h3>
        <h5>за повідомлення</h5>
        <button class="return" type="submit">Повернутися</button>
    </div>
</div>
</div>



<footer class="main_footer blue">
    <!-- подключаем футер -->
<?php include 'footer.php'; ?>