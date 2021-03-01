<!-- подключаем хедер -->
<?php include 'header.php'; ?>
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
                                        <li class="dropdown">
                                            <a href="routes.php" class="dropdown-toggle" data-toggle="dropdown">Маршрути <b class="caretka"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="skybus.php" class="button transition">Skybus</a></li>
                                                <li><a href="14.php" class="button transition">№14</a></li>
                                                <li><a href="16.php" class="button transition">№16</a></li>
                                                <li><a href="316.php" class="button transition">№316</a></li>
                                                <li><a href="322.php" class="button transition">№322</a></li>
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
                                        <li class="active"><a href="news.php" class="button transition">Новини</a></li>
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
<div class="news_info">
    <div class="container">
        <div class="col-md-12">
            <div class="content-text">
                <div class="row">
                    <div class="our_news">
                        <div class="icon_news">
                        </div>
                        <p>Новини</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
for ($i=1; $i<5; $i++) {
    echo '
<!-- блок новостей -->
<div class="news new'.$i.'">
        <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="news_block">
                            <div class="news_short_content">
                                <h3>Зміни в розкладі</h3>
                                <p class="date">14:45<br>12 жовтня 2018</p>
                                <div class="full_text">
                                    <p>У звязку з новорічними святами буде змінено розклад руху автобусів на маршрутах 145 (Київ - Бершадь), 234 (Київ - Одеса) та 45 (Київ - Стокгольм). Відтепер, перший рейс за вказаними маршрутами буде відправлятись з 10:00 ранку. Останній автобус відїжджає о півночі. За деталями звертайсь до диспетчера (безкоштовно) У звязку з новорічними святами буде змінено розклад руху автобусів на маршрутах 145 (Київ - Бершадь), 234 (Київ - Одеса) та 45 (Київ - Стокгольм). Відтепер, перший рейс за вказаними маршрутами буде відправлятись з 10:00 ранку. Останній автобус відїжджає о півночі. За деталями звертайсь до диспетчера (безкоштовно) У звязку з новорічними святами буде змінено розклад руху автобусів на маршрутах 145 (Київ - Бершадь), 234 (Київ - Одеса) та 45 (Київ - Стокгольм). Відтепер, перший рейс за вказаними маршрутами буде відправлятись з 10:00 ранку. Останній автобус відїжджає о півночі. За деталями звертайсь до диспетчера (безкоштовно)</p>
                                    <p>У звязку з новорічними святами буде змінено розклад руху автобусів на маршрутах 145 (Київ - Бершадь), 234 (Київ - Одеса) та 45 (Київ - Стокгольм). Відтепер, перший рейс за вказаними маршрутами буде відправлятись з 10:00 ранку. Останній автобус відїжджає о півночі. За деталями звертайсь до диспетчера (безкоштовно)</p>
                                    <p>У звязку з новорічними святами буде змінено розклад руху автобусів на маршрутах 145 (Київ - Бершадь), 234 (Київ - Одеса) та 45 (Київ - Стокгольм). Відтепер, перший рейс за вказаними маршрутами буде відправлятись з 10:00 ранку.</p>
                                </div>
                            </div>
                            <div class="news_buttn">
                                <a href="" id="'.$i.'" class="show-hide">Детальніше</a>
                                <a href=""><div class="print_icon">
                                
                                </div></a>
                                <a href=""><div class="send_icon">
                                
                                </div></a>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="news_img">

                        </div>
                    </div>
                </div>
        </div>
        <div class="container">
        <div class="row">
    <div class="news_content">
            <div class="news_content_text">
                <p>У звязку з новорічними святами буде змінено розклад руху автобусів на маршрутах 145 (Київ - Бершадь), 234 (Київ - Одеса) та 45 (Київ - Стокгольм). Відтепер, перший рейс за вказаними маршрутами буде відправлятись з 10:00 ранку. Останній автобус відїжджає о півночі. За деталями звертайсь до диспетчера (безкоштовно) У звязку з новорічними святами буде змінено розклад руху автобусів на маршрутах 145 (Київ - Бершадь), 234 (Київ - Одеса) та 45 (Київ - Стокгольм). Відтепер, перший рейс за вказаними маршрутами буде відправлятись з 10:00 ранку. Останній автобус відїжджає о півночі. За деталями звертайсь до диспетчера (безкоштовно) У звязку з новорічними святами буде змінено розклад руху автобусів на маршрутах 145 (Київ - Бершадь), 234 (Київ - Одеса) та 45 (Київ - Стокгольм). Відтепер, перший рейс за вказаними маршрутами буде відправлятись з 10:00 ранку. Останній автобус відїжджає о півночі. За деталями звертайсь до диспетчера (безкоштовно)</p>
                <p>У звязку з новорічними святами буде змінено розклад руху автобусів на маршрутах 145 (Київ - Бершадь), 234 (Київ - Одеса) та 45 (Київ - Стокгольм). Відтепер, перший рейс за вказаними маршрутами буде відправлятись з 10:00 ранку. Останній автобус відїжджає о півночі. За деталями звертайсь до диспетчера (безкоштовно)</p>
                <p>У звязку з новорічними святами буде змінено розклад руху автобусів на маршрутах 145 (Київ - Бершадь), 234 (Київ - Одеса) та 45 (Київ - Стокгольм). Відтепер, перший рейс за вказаними маршрутами буде відправлятись з 10:00 ранку.</p>
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
