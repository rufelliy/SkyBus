$(document).ready(function() {

    //Попап менеджер FancyBox
    $(".fancybox").fancybox();


    //Плавний прехід між сторінками сайту
    $("body").fadeIn(250);
    $("a.transition").click(function(event){
        event.preventDefault();
        event.stopImmediatePropagation();
        linkLocation = this.href;
        $("body").fadeOut(250, redirectPage);
    });
    function redirectPage() {
        window.location = linkLocation;
    }


    //Слайдер на головній сторінці
    (function( $ ) {
        //Function to animate slider captions
        function doAnimations( elems ) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';
            elems.each(function () {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }
        $("#carousel-example-generic").carousel();
        //Variables on page load
        var $myCarousel = $('#carousel-example-generic'),
            $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
        //Initialize carousel
        $myCarousel.carousel();
        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);
        //Pause carousel
        $myCarousel.carousel('pause');
        //Other slides to be animated on carousel slide event
        $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });
        $('#carousel-example-generic').carousel({
            interval:300,
            pause: "false",
            mouseWheel: true
        });
    })(jQuery);

	//Плавний спуск до якоря
    $(".contacts").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
        return false;
    });
    $(".about_company").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
        return false;
    });
    $(".partner").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
        return false;
    });

	//Випадаюче меню при наведенні
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });

    //Перенаправлення на сторінку при натисканні блоків у футері слайдера на говній сторінці
    $('.our_routes').click(function () {
        if ($('.but_our_routes').is(':hidden')) {
            alert('Не працює ссилка');
        }
    });
    $('.our_buses').click(function () {
        if ($('.but_our_buses').is(':hidden')) {
            alert('Не працює ссилка');
        }
    });

    //Переворот контактів до форми зворотнього звязку
    $(function () {
        $('.button_callback').click(function () {
            var wrap = $('.wrap');
            if ($(wrap).css('-webkit-transform') == 'matrix(1, 0, 0, 1, 0, 0)') {
                $(wrap).css({ '-webkit-transform': 'rotateY(180deg)',
                    'transition': '0.3s'});
            } else {
                $(wrap).css({ '-webkit-transform': 'rotateY(0deg)',
                    'transition': '0.3s'});
            }
            if ($(wrap).css('-ms-transform') == 'matrix(1, 0, 0, 1, 0, 0)') {
                $(wrap).css({ '-ms-transform': 'rotateY(0deg)',
                    'transition': '0.3s'});
            } else {
                $(wrap).css({ '-ms-transform': 'rotateY(180deg)',
                    'transition': '0.3s'});
            }
        });
        $('#map').click(function () {
            var wrap = $('.wrap');
            $(wrap).css({ '-webkit-transform': 'rotateY(0deg)',
                        '-ms-transform': 'rotateY(0deg)',
                        '-moz-transform': 'rotateY(0deg)',
                        '-o-transform': 'rotateY(0deg)',
                        '-sand-transform': 'rotateY(0deg)',
                        'transition': '0.3s'});
        });
    });

    //Приховуєм модальне вікно
    PopUpHide();


    //Аякс відправка форм з головної сторінки
    $("#callback_form").submit(function() {
        $("#popup_load").show();
        $.ajax({
            type: "GET",
            url: "mail.php",
            data: $("#callback_form").serialize()
        }).done(function() {
            $("#popup_load").hide();
            setTimeout(function() {
                $("#callback_form").css({'display': 'none'});
                $("#callback_message").css({'display': 'block'});
            }, 1);
        });
        return false;
    });

    //Повернення до контактів після відправки повідомлення на головній сторінці
    $("#callback_message").click(function() {
            setTimeout(function() {
                var wrap = $('.wrap');
                $(wrap).css({ '-webkit-transform': 'rotateY(0deg)',
                    'transition': '0.3s'});
                $("#callback_form").css({'display': 'block'});
                $("#callback_message").css({'display': 'none'});
            }, 0);
        return false;
    });

    //Аякс відправка форм з сторінки маршрутів
    $("#callback_form_routs").submit(function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        $("#popup_form").hide();
        $("#popup_load").show();
        $.ajax({
            type: "GET",
            url: "mail.php",
            data: $("#callback_form_routs").serialize()
        }).done(function() {
            $("#popup_load").hide();
            setTimeout(function() {
                $("#callback_message_rout").css({'display': 'block'});
                $("#popup_return").show();
            }, 1);
        });
        return false;
    });

    //Закриваємо модальне вікно при натисканні за межами форми у маршрутах
    var raz = document.getElementById('popup_form');
    raz.onclick = function(event) {
        event = event || window.event; // window.event для IE ниже 8 версії
        var t = event.target || event.srcElement; // srcElement для IE ниже 8 версії
        if (t != this) { return true; }
        $("#popup_form").hide();
    }

    //Повернення до сторінки після відправки повідомлення на сторінці маршрутів
    $("#callback_message_rout").click(function() {
        $("#popup_return").hide();
        return false;
    });


    // Вираховуємо висоту картинки в новинах,показуємо чи приховуємо контент новини
    var halfOfImg = $('.news_img').height() / 6;//Короткий текст займає частину блока
    var halfImg = Math.round(halfOfImg);//Округляємо висоту до цілого чмсла
    $('.full_text').css('height', halfImg);
    var textHeightNone = 0;
    $('.news_content').css('height', textHeightNone);
    $('.show-hide').click(function (e) {
        var id = $(this).attr("id");//Визначаємо id натиснутої кнопки
        e.preventDefault();
        e.stopImmediatePropagation();
        var newsBlockHeight = $('.new'+id+' .news_content_text').height();
        if ($('.new'+id+' .full_text').innerHeight() == halfImg) {
            $(this).removeClass();
            $(this).addClass('opened');
            $('.new'+id+' .full_text').animate({height: 0}, 500);
            $('.new'+id+' .news_block').animate({height: '-=55px'}, 500);
            $('.new'+id+' .news_img').animate({height: '-=55px'}, 500);
            $('.new'+id+' .news_content').css({'height': '100%'}, 500);
            var fullText =  $('.new'+id+' .news_content').height();
            $('.new'+id+' .news_content').css({'height': '0px'}, 500);
            $('.new'+id+' .news_content').animate({height: fullText}, 500);
            $('.new'+id+' .news_content').animate({height: '100%'}, 500);
            $(this).text('Згорнути');
        } else {
            $(this).removeClass();
            $(this).addClass('show-hide');
            $('.new'+id+' .full_text').animate({height: halfImg}, 500);
            $('.new'+id+' .news_block').animate({height: '+=55px'}, 500);
            $('.new'+id+' .news_img').animate({height: '+=55px'}, 500);
            $('.new'+id+' .news_content').animate({height: textHeightNone}, 500);
            $(this).text('Детальніше');
        }
    });


    //Якщо висота екрана досить мала, то збільшуємо висоту слайдера
    //для коректного відображення
    if( window.innerHeight < 400 ) {
        $('.carousel-inner .item .container ').css({'height':'600px'});
    } else if( window.innerHeight < 600 ) {
        $('.carousel-inner .item .container ').css({'height':'150vh'});
    } else{
        $('.carousel-inner .item .container ').css({'height':'100vh'});
    }
    $(window).resize(function(){
        if( window.innerHeight < 400 ) {
            $('.carousel-inner .item .container ').css({'height':'600px'});
        } else if( window.innerHeight < 600 ) {
            $('.carousel-inner .item .container ').css({'height':'150vh'});
        } else{
            $('.carousel-inner .item .container ').css({'height':'100vh'});
        }
    });


    //Розмір карти на мсторінках маршрутів
    if( window.innerWidth < 998 ) {
        $('#map_routes').css({'height':'420px'});
    } else{
        var height = $('.rout').height();
        $('#map_routes').css({'height': height});
    }
    $(window).resize(function(){
        if( window.innerWidth < 998 ) {
            $('#map_routes').css({'height':'420px'});
        } else{
            var height = $('.rout').height();
            $('#map_routes').css({'height': height});
        }
    });


    //Розмір картинки про компанію в залежності від контента
    if( window.innerWidth < 998 ) {
        var height = $('.company .abt_us').height() + 600;
        // $('.company .img').css({'height':'600px'});
        // $('.company').css({'height': height});
    } else{
        var height = $('.company .abt_us').height();
        // $('.company .img').css({'height': height});
        // $('.company').css({'height': height});
    }
    $(window).resize(function(){
        if( window.innerWidth < 998 ) {
            var height = $('.company .abt_us').height() + 600;
            $('.company .img').css({'height':'600px'});
            $('.company').css({'height': height});
        } else{
            var height = $('.company .abt_us').height();
            $('.company .img').css({'height': height});
            $('.company').css({'height': height});
        }
    });


    //Збільшення іконки при наведенні на зображення автобуса на сторінці автобуси
    $('.img_buses').mouseover(function () {
        $( ".img_buses .search" ).addClass('animate');
    });
    $('.img_buses').mouseleave(function () {
        $( ".img_buses .search" ).removeClass('animate');
    });




});

//Функції показу і приховання модального вікна
function PopUpShow() {
    $("#popup_form").show();
    // $("#callbak").css({'display': 'block'});
}
function PopUpHide() {
    $("#popup_form").hide();
}


