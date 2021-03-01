<!-- подключаем хедер -->
<?php include 'header.php'; ?>
</head>
<body style="background-color: #f7f7f7">

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
                                        <li class="dropdown">
                                            <a href="routes.php" class="dropdown-toggle" data-toggle="dropdown">Маршрути <b class="caretka"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="14.php" class="button transition">№14</a></li>
                                                <li><a href="16.php" class="button transition">№16</a></li>
                                                <li><a href="316.php" class="button transition">№316</a></li>
                                                <li><a href="322.php" class="button transition">№322</a></li>
                                                <li><a href="2.php" class="button transition">№2</a></li>
                                            </ul>
                                        </li>
                                        <li class="active"><a href="buses.php" class="button transition">Автобуси</a></li>
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

<div class="buses_info">
    <div class="container">
        <div class="col-md-12">
            <div class="content-text">
                <div class="row">
                        <div class="our_bus">
                            <div class="icon_our_bus">
                            </div>
                            <p>Автобуси</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
//создадим массивы с информацией про автобусы
$arr_bus_name = array(1 => 'Huundai', 2 => 'Youtong', 3 =>'Neoplan');
$arr_bus_subname = array(1 => 'Universe<br>xpress noble', 2 => 'zk<br>5868', 3 =>'Starliner<br>N5218 shd');
for ($i=1; $i < 4; $i++) {
    echo '
<!-- информация про автобус -->
<div class="container">
    <div class="row">
        <div class="bus_container number'.$i.'">
            <div class="col-md-5">
                <div id="img_buses_container">
                    <div id="img_buses" class="img_buses">
                         <a href="#"><div class="search"></div></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="col-md-4">
                    <div class="title_bus">
                        <h3>'.$arr_bus_name[$i].'</h3>
                        <h5>'.$arr_bus_subname[$i].'</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bus_icons">
                        <div class="wifi" title="wi-fi">
                            <div class="wifi_icon">
                            </div>
                        </div>
                        <div class="tv" title="телебачення">
                            <div class="tv_icon">
                            </div>
                        </div>
                        <div class="music" title="музика">
                            <div class="music_icon">
                            </div>
                        </div>
                        <div class="wc" title="вбиральня">
                            <div class="wc_icon">
                            </div>
                        </div>
                        <div class="climat" title="мікроклімат">
                            <div class="climat_icon">
                            </div>
                        </div>
                        <div class="comfort" title="комфортні сидіння">
                            <div class="comfort_icon">
                            </div>
                        </div>
                        <div class="usb" title="зарядка usb для пристроїв">
                            <div class="usb_icon">
                            </div>
                        </div>
                        <div class="food" title="харчування">
                            <div class="food_icon">
                            </div>
                        </div>
                        <div class="feel">
                            <div class="feel_icon">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="bus_descr">
                    <p>Сучасний, високотехнологічний автобус корейського виробника Hyundaiпризначений для комфортного трансферу пасажирів на довгі та середні дистанції. Обладнанний всім необхідним, щоб ваша подорож приносила вам лише задоволення. До ваших послуг високошвидкістний  бездротовий інтернет, супутникове телебачення, розьєм USB, комфортні крісла з 3-а ступенями регулювання та вбиральня</p>
                    <p> Автобуси даного типу курсують на маршрутах СкайБас (722), Бориспіль - Харків (122), Бориспіль-Одеса (546) та Київ-Дніпропетровськ (34)</p>
                    <div class="gallery_but">
                        <a href="#dontwork" target="_blank" class="button gallery fancybox">Галерея</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
}
?>

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
        <form class="pop_form">
            <button class="button_send" type="submit">Повернутися</button>
        </form>
    </div>
</div>
</div>

<footer class="main_footer blue" style="border-top: 16px solid #413e64">
    <!-- подключаем футер -->
<?php include 'footer.php'; ?>
