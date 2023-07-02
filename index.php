<?php
$get_data = file_get_contents('https://onkron.ru/testing.json');
$get_data = json_decode($get_data, true);
?>


<!DOCTYPE html>
<html itemscope="" itemtype="https://schema.org/SearchResultsPage" lang="ru">

<head>
    <meta charset="UTF-8">
    <title>ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная</title>
    <meta name="description" content="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная">
    <meta name="keywords" content="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <meta property="og:title" content="Купить ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная" />
    <meta property="og:site_name" content="ONKRON - designed to support" />
    <meta property="og:image" content="https://shop.onkron.ru/images/product_images/popup_images/442_0.jpg" />
    <link rel="shortcut icon" href="https://onkron.ru/favicon_landing.ico" />
    <link rel="stylesheet" href="style.css?rand=1685005908">
    <link rel="stylesheet" href="https://onkron.ru/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://onkron.ru/css/default.css" />
    <link rel="stylesheet" type="text/css" href="https://onkron.ru/css/component.css" />
    <link rel="stylesheet" type="text/css" href="https://onkron.ru/css/cs-select.css" />
    <link rel="stylesheet" type="text/css" href="https://onkron.ru/css/cs-skin-elastic.css" />
    <link rel="stylesheet" href="https://onkron.ru/css/owl.carousel.min.css">
    <link rel="stylesheet" href="fonts/gilroy/stylesheet.css">

    <link rel="stylesheet" href="https://onkron.ru/css/owl.carousel.products.min.css">
    <link rel="stylesheet" href="https://onkron.ru/css/owl.theme.default.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="/js/jquery.lazyload.min.js"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer@2.0.0/dist/model-viewer.min.js"></script>
    <script src="https://onkron.ru/js/nanoscroller.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://onkron.ru/css/nanoscroller.css">
</head>

<body>
    <script type="text/javascript">
        (function($) {
            jQuery.fn.lightTabs = function(options) {

                var createTabs = function() {
                    tabs = this;
                    i = 0;

                    showPage = function(i) {
                        $(tabs).children("div").children("div").hide();
                        $(tabs).children("div").children("div").eq(i).show();
                        $(tabs).children("ul").children("li").removeClass("active");
                        $(tabs).children("ul").children("li").eq(i).addClass("active");
                    }

                    showPage(0);

                    $(tabs).children("ul").children("li").each(function(index, element) {
                        $(element).attr("data-page", i);
                        i++;
                    });

                    $(tabs).children("ul").children("li").click(function() {
                        showPage(parseInt($(this).attr("data-page")));
                    });
                };
                return this.each(createTabs);
            };
        })(jQuery);
        var copyToClipboard = function() {
            const str = document.getElementById('item-to-copy').innerText;
            const el = document.createElement('textarea');
            el.value = str;
            el.setAttribute('readonly', '');
            el.style.position = 'absolute';
            el.style.left = '-9999px';
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            $('#tooltip').css('opacity', 1);
            $('.popperCopy').show();
            $('.coupon').css('overflow', 'visible');
            setTimeout(function() {
                $('.coupon').css('overflow', 'hidden');
                $('.popperCopy').hide();
                $('#tooltip').css('opacity', 0);
            }, 1500);
        }
        $(document).ready(function() {

            var swiper = new Swiper(".mySwiper", {
                //loop: true,
                spaceBetween: 10,
                freeMode: true,
                watchSlidesProgress: true,
                slidesPerView: "auto",
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
            var swiper2 = new Swiper(".mySwiper2", {
                //loop: true,
                spaceBetween: 10,
                thumbs: {
                    swiper: swiper,
                },
            });

            $('.viewCoupon').click(function(e) {
                if ($(this).hasClass('yes')) {

                } else {
                    e.preventDefault();
                    $('.coupon').slideDown(300);
                    $(this).addClass('yes');
                }
            });


            $('.instructions p').contents().filter(function() {
                return this.nodeType === Node.TEXT_NODE;
            }).remove();

            $("img.lazy").lazyload({
                effect: "fadeIn"
            });
            $(".tabs").lightTabs();

            $("[data-fancybox]").fancybox({
                loop: true
            });
            $('.send').click(function() {
                // собираем данные с формы
                var user_name = $(this).parent().find('.form_name').val();
                var user_phone = $(this).parent().find('.form_phone').val();
                var email = $(this).parent().find('.form_email').val();
                var city = $(this).parent().find('.form_city').val();
                var form_info = $(this).parent().find('.form_info').val();
                var product = $(this).parent().find('.product').val();
                // отправляем данные
                $.ajax({
                    url: "/sendmail.php", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                        "form_name": user_name,
                        "form_phone": user_phone,
                        "form_email": email,
                        "form_city": city,
                        "form_info": form_info,
                        "product": product
                    },
                    // после получения ответа сервера
                    success: function(data) {
                        $('.sent').html(data.result); // выводим ответ сервера
                    }
                });

                if ($('.form_name').val() != '' && $('.form_phone').val() != '' && $('.form_email').val() != '' && $('.form_city').val() != '' && $('.form_info').val() != '') {
                    $('.send').remove();
                };
                console.log($('.form_name').val());
            });




            $('.homeslider-container img').removeAttr("height");
            $('.homeslider-container img').removeAttr("width");
            $('#projects_slider img').removeAttr("height");
            $('#projects_slider img').removeAttr("width");
            $paddings = $('.header').css('height');
            $('.header-padding').css('padding-top', $paddings);
            $pre_height = $('.product').css('height');
            $('.pre_banner').css('height', $pre_height);

            $('#main_image').click(function() {

                $('.mo_img_in').eq(0).click();
            });
            $i = 0;

            function focus() {
                $('#search').focus();
            }
            $('.search').on('click', function() {
                $('.page_overlay').addClass('page_overlay-open');
                $('.header_search').addClass('header-search-open');
                setTimeout(focus, 100);
            });
            $('.fa-times').click(function() {
                $('.page_overlay').removeClass('page_overlay-open');
                $('.header_search').removeClass('header-search-open');
            });

            $('.header_icons').hover(function() {
                $uwidth = parseInt($('.choose_language_text').css('width')) + parseInt($('.choose_language').css('width')) + 15;
                $('.underline').css('width', $uwidth + 'px');
            }, function() {
                $('.underline').css('width', '0px');
            });
            $x = 0;
            $('.choose_language_imgs').hover(function() {
                if ($x == 0) {
                    $x++;
                    $('.header_icons ul').css('display', 'block');
                    $('.header_icons ul').animate({
                        opacity: 1
                    }, 200);

                } else {
                    $x = 0;

                    $('.header_icons ul').animate({
                        opacity: 0
                    }, 200);
                    /* $('.nav').css('display', 'none'); */
                }
            });
            var map = {
                'й': 'q',
                'ц': 'w',
                'у': 'e',
                'к': 'r',
                'е': 't',
                'н': 'y',
                'г': 'u',
                'ш': 'i',
                'щ': 'o',
                'з': 'p',
                'х': '[',
                'ъ': ']',
                'ф': 'a',
                'ы': 's',
                'в': 'd',
                'а': 'f',
                'п': 'g',
                'р': 'h',
                'о': 'j',
                'л': 'k',
                'д': 'l',
                'ж': ';',
                'э': '\'',
                'я': 'z',
                'ч': 'x',
                'с': 'c',
                'м': 'v',
                'и': 'b',
                'т': 'n',
                'ь': 'm',
                'б': ',',
                'ю': '.',
                'Й': 'Q',
                'Ц': 'W',
                'У': 'E',
                'К': 'R',
                'Е': 'T',
                'Н': 'Y',
                'Г': 'U',
                'Ш': 'I',
                'Щ': 'O',
                'З': 'P',
                'Х': '[',
                'Ъ': ']',
                'Ф': 'A',
                'Ы': 'S',
                'В': 'D',
                'А': 'F',
                'П': 'G',
                'Р': 'H',
                'О': 'J',
                'Л': 'K',
                'Д': 'L',
                'Ж': ';',
                'Э': '\'',
                'Я': 'Z',
                'ч': 'X',
                'С': 'C',
                'М': 'V',
                'И': 'B',
                'Т': 'N',
                'Ь': 'M',
                'Б': ',',
                'Ю': '.',

            };


            if ($(window).width() <= '1024') {
                /* $('.header_menu > ul').css('height', $(window).height()+'px'); */
                $('.header_menu').find('br').replaceWith('&nbsp;');
                $('.header_icons').css('width', $('.header_logo').find('img').css('width'));
                $('#search').attr('placeholder', 'Артикул товара или ТВ');
            } else {
                /* $('.header_menu > ul').css('height', 'auto'); */
                $('.header_icons').css('width', '13%');
                $('#search').attr('placeholder', 'Введите артикул товара или модель телевизора');
            }
            $(window).resize(function() {
                if ($(window).width() <= '1024') {
                    /* $('.header_menu > ul').css('height', $(window).height()+'px'); */
                    $('.header_menu').find('br').replaceWith('&nbsp;');
                    $('.header_icons').css('width', $('.header_logo').find('img').css('width'));
                    $('#search').attr('placeholder', 'Артикул товара или ТВ');
                } else {
                    /* $('.header_menu > ul').css('height', 'auto'); */
                    $('.header_icons').css('width', '13%');
                    $('#search').attr('placeholder', 'Введите артикул товара или модель телевизора');
                }
            });
            /* $('.header_icons').css */
            $("#search").on('keyup', function() {
                var str = $("#search").val();
                var r = '';
                for (var i = 0; i < str.length; i++) {
                    r += map[str.charAt(i)] || str.charAt(i);
                }
                $("#search").val(r);
            });
            $j = 0;
            $(".language_block.mobile").click(function() {
                if ($j == 0) {
                    $j++;
                    if ($(window).width() <= '350') {
                        $('.device-search').css('height', '375px');

                    } else {
                        $('.device-search').css('height', '450px');
                    }

                } else {
                    $j = 0;
                    $('.device-search').css('height', '0');
                }

            })


            $i = 0;
            $('.mobile_lines i').click(function() {
                if ($i == 0) {
                    $i++;
                    $('.nav').css('display', 'block');
                    $('.nav').css('opacity', 1);
                    $('.nav').css('visibility', 'visible');
                    /* $('.nav').animate({opacity: 1}, 200); */
                    $('.header_menu > ul').animate({
                        height: $(window).height() + 'px'
                    }, 200);

                } else {
                    $i = 0;
                    if ($j != 0) {
                        $j = 0;
                        $('.device-search').css('height', '0');
                    }
                    $('.nav').animate({
                        opacity: 0
                    }, 200);
                    $('.nav').css('visibility', 'hidden');
                    $('.header_menu > ul').animate({
                        height: 0
                    }, 200);
                    /* $('.nav').css('display', 'none'); */
                }
            });
            $('.new_listing_table_row').each(function() {
                $left = $(this).find('.new_listing_table_left').height();
                $right = $(this).find('.new_listing_table_right').height();
                if ($right > $left) {
                    $(this).find('.new_listing_table_left').css('line-height', $right + 'px');
                } else {
                    $(this).find('.new_listing_table_right').css('line-height', $left + 'px');
                }

            });
            if ($('.new_listing_descr_full_size').length > 0) {
                $('.main_img').empty().append($('.new_listing_descr_full_size'));
            }

            function heights() {
                /* $('.new_listing_descr_left').css('height', $('.new_listing_descr_right').css('height'));
                if ($(window).width() > '768'){
                	 $('.new_listing_main_part_left').each(function(){
                		$tth = parseInt($(this).css('height'));
                		$(this).css('height', $tth+'px');
                		$(this).next().css('height', $tth+'px');
                		$(this).parent().css('height', $tth+'px');
                	});
                }
                $('.clear').empty(); */
            }
            setTimeout(heights, 2000);
        });
    </script>
    <script id="bx24_form_button" data-skip-moving="true">
        (function(w, d, u, b) {
            w['Bitrix24FormObject'] = b;
            w[b] = w[b] || function() {
                arguments[0].ref = u;
                (w[b].forms = w[b].forms || []).push(arguments[0])
            };
            if (w[b]['forms']) return;
            var s = d.createElement('script');
            s.async = 1;
            s.src = u + '?' + (1 * new Date());
            var h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document, 'https://bmglobal.bitrix24.ru/bitrix/js/crm/form_loader.js', 'b24form');

        b24form({
            "id": "4",
            "lang": "ru",
            "sec": "f6v7fr",
            "type": "button",
            "click": ""
        });
    </script>

    <div class="page_overlay"></div>

    <div class="header">
        <div class="header_search">
            <div class="header_search_wrapper">
                <div class="container">
                    <form name="search_form" id="search_form" action="https://onkron.ru/filter_full.php" method="get">
                        <button class="search_button" type="submit"><i class="fa fa-search"></i></button>
                        <div class="header-search__input-wrapper">
                            <input id="search" type="text" name="query" class="search_top" placeholder="Введите артикул товара или модель телевизора" autocomplete="off">
                        </div>
                        <i class="fa fa-times"></i>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header_logo">
                <a href="https://onkron.ru/"><img class="logo_new_year" src="https://onkron.ru/images/onkron_min.png"></a>
            </div>
            <div class="mobile_lines"><i class="fa fa-bars"></i></div>
            <nav class="nav center header_menu top-menu">
                <ul class="topmenu">
                    <li><a onclick="return false" href="">О Компании</a>
                        <ul class="submenu">
                            <li><a href="https://onkron.ru/content2.php?url=istorija-kompanii">История</a></li>
                            <li><a href="https://onkron.ru/content2.php?url=missija">Миссия</a></li>
                            <li><a href="https://onkron.ru/content2.php?url=klienty">Клиенты</a></li>
                        </ul>
                    </li>
                    <li><a onclick="return false" href="">Каталог</a>
                        <ul class="submenu">

                            <li><a href="https://onkron.ru/category-dlja-televizorov-stojki.html">стойки<br />Для телевизоров</a></li>
                            <li><a href="https://onkron.ru/category-nastennye-kronshtejny.html">Настенные<br />кронштейны</a></li>
                            <li><a href="https://onkron.ru/category-potolochnye-kronshtejny.html">Потолочные<br />кронштейны</a></li>
                            <li><a href="https://onkron.ru/category-nastolnye-kronshtejny.html">Настольные<br />кронштейны</a></li>
                            <li><a href="https://onkron.ru/category-dlja-proektorov-kronshtejny.html">Кронштейны<br />для проекторов</a></li>
                            <li><a href="https://onkron.ru/category-accessories.html">Аксессуары<br />для электроники</a></li>
                            <li><a href="https://onkron.ru/category-aksessuary.html">Товары<br />для дома</a></li>
                            <li class="black"><a href="https://onkron.ru/category-onkron-professional.html">ONKRON<br />Professional</a></li>
                            <li><a href="https://onkron.ru/category-dlja-gejmerov.html">ONKRON<br /><span>Game Series</span></a></li>
                            <li><a href="https://onkron.ru/linear-cabinets.php">Линейные<br />шкафы</a></li>
                        </ul>
                    </li>
                    <li><a onclick="return false" href="">Почему мы</a>
                        <ul class="submenu">
                            <li><a href="https://onkron.ru/content2.php?url=nashi-preimuschestva">Преимущества</a></li>
                            <li><a href="https://onkron.ru/content2.php?url=mass-premium">Mass Premium</a></li>

                        </ul>
                    </li>
                    <li><a href="https://onkron.ru/news.php">Новости</a></li>
                    <li><a href="https://onkron.ru/content2.php?url=vopros-otvet">Вопрос-ответ</a></li>
                    <li><a href="https://onkron.ru/content2.php?url=contacts">Контакты</a></li>
                    <li><a href="/news_inc.php?url=pomozhem-vam-ustanovit-onkron">Установка и сборка</a></li>
                    <li><a href="https://onkron.ru/business/">Бизнес Решения</a></li>
                    <!--<div class="language_block mobile">
					<div class="lang_label">
						<span class="flag flag-ru"></span>
					</div>
					<div id="about" class="nano slide-out has-scrollbar device-search">
						<div class="nano-content">
							<ul class="language_store_list">
								<li><a href="https://onkron.us">USA<img src="img/american-flag.png" /></a></li>
								<li><a href="https://onkron.de">GERMANY<img src="img/german-flag.png" /></a></li>
								<li><a href="https://onkron.it">ITALY<img src="img/italy-flag.jpg" /></a></li>
								<li><a href="https://onkron-official.kz">KAZAKHSTAN<img src="img/kz-flag-main.png" /></a></li>
								<li><a href="https://onkron.es">SPAIN<img src="img/spain-flag.jpg" /></a></li>
								<li><a href="https://onkron.fr">FRANCE<img src="img/france-flag.png" /></a></li>
								<li><a href="https://onkron.co.uk">ENGLAND<img src="img/gb-flag.jpg" /></a></li>
								<li><a href="https://onkron.co.ke">KENYA<img src="img/kenya-flag.jpg" /></a></li>
								<li><a href="https://onkron.nl">NETHERLANDS<img src="img/nd_flag.png" /></a></li>
								<li><a href="https://onkron.ch">SWITZERLAND<img src="img/switz_flag.png" /></a></li>
								<li><a href="https://onkron.be">BELGIUM<img src="img/belgium_flag.png" /></a></li>

							</ul>
						</div>
						<div class="nano-pane">
							<div class="nano-slider" style="height: 14px; transform: translate(0px, 0px);"></div>
						</div>
					</div>
				</div>-->
                </ul>

            </nav>

            <!--<div class="language_block desktop">
			<div class="lang_label">
				Выбор страны
				<span class="flag flag-ru"></span>
			</div>
			<div id="about" class="nano slide-out has-scrollbar">
				<div class="nano-content">
					<ul class="language_store_list">
						<li><a href="https://onkron.us">USA<img src="img/american-flag.png" /></a></li>
						<li><a href="https://onkron.de">GERMANY<img src="img/german-flag.png" /></a></li>
						<li><a href="https://onkron.it">ITALY<img src="img/italy-flag.jpg" /></a></li>
						<li><a href="https://onkron-official.kz">KAZAKHSTAN<img src="img/kz-flag-main.png" /></a></li>
						<li><a href="https://onkron.es">SPAIN<img src="img/spain-flag.jpg" /></a></li>
						<li><a href="https://onkron.fr">FRANCE<img src="img/france-flag.png" /></a></li>
						<li><a href="https://onkron.co.uk">ENGLAND<img src="img/gb-flag.jpg" /></a></li>
						<li><a href="https://onkron.co.ke">KENYA<img src="img/kenya-flag.jpg" /></a></li>
						<li><a href="https://onkron.nl">NETHERLANDS<img src="img/nd_flag.png" /></a></li>
						<li><a href="https://onkron.ch">SWITZERLAND<img src="img/switz_flag.png" /></a></li>
						<li><a href="https://onkron.be">BELGIUM<img src="img/belgium_flag.png" /></a></li>
					</ul>
				</div>
				<div class="nano-pane">
					<div class="nano-slider" style="height: 14px; transform: translate(0px, 0px);"></div>
				</div>
			</div>
		</div>-->
            <div class="search">
                <i class="fa fa-search"></i>
            </div>
        </div>
        <!--<div class="snowContainer">
	
	<div id="snow"></div>
	
</div> -->
    </div>
    <script type="text/javascript">
        $(".nano").nanoScroller({
            iOSNativeScrolling: true,
            alwaysVisible: true
        });
    </script>
    <div class="clear"></div>
    <div class="header-padding collection">
        <div class="breadcrumbs_wrapper">
            <div class="container">
                <div id="breadcrumbs_wrap">
                    <div class="grid-container">
                        <div id="breadcrumbs" class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList"> <a href="https://onkron.ru/">Главная</a> <i class="fa fa-angle-right"></i> <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://onkron.ru/category-dlja-televizorov-stojki"><span itemprop="name">Стойки для телевизоров</span></a>
                                <meta itemprop="position" content="1" />
                            </span> <i class="fa fa-angle-right"></i> <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://onkron.ru/category-klassicheskie"><span itemprop="name">Классические</span></a>
                                <meta itemprop="position" content="2" />
                            </span> <i class="fa fa-angle-right"></i> <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://onkron.ru/category-klassicheskie-dlja-televizorov-ot-55-do-100"><span itemprop="name">Для ТВ от 55" до 100"</span></a>
                                <meta itemprop="position" content="3" />
                            </span><span> <i class="fa fa-angle-right"></i> </span><span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">ONKRON моторизированная стойка для телевизора с кронштейном 50"-100", мобильная, TS1991 eLift черная</span>
                                <meta itemprop="position" content="4" />
                                <meta itemprop="item" content="https://shop.onkron.ru/product/motorizovannaya-stoyka-onkron-dlya-televizora-s-kronshteynom-50-100-mobilnaya-ts1991-elift-chernaya" />
                            </span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="left_block">
                <!--div class="main_img">
				<a id="main_image" onclick="event.preventDefault()" href="https://shop.onkron.ru/images/product_images/popup_images/442_0.jpg"><img src="https://shop.onkron.ru/images/product_images/popup_images/442_0.jpg"></a>
			</div>
			<div class="mo_img">
				<a class='mo_img_in' data-fancybox='gallery' href='https://shop.onkron.ru/images/product_images/popup_images/442_1.jpg'><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_1.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 1 миниатюра"></a><a class='mo_img_in' data-fancybox='gallery' href='https://shop.onkron.ru/images/product_images/popup_images/442_2.jpg'><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_2.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 2 миниатюра"></a><a class='mo_img_in' data-fancybox='gallery' href='https://shop.onkron.ru/images/product_images/popup_images/442_3.jpg'><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_3.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 3 миниатюра"></a><a class='mo_img_in' data-fancybox='gallery' href='https://shop.onkron.ru/images/product_images/popup_images/442_4.jpg'><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_4.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 4 миниатюра"></a><a class='mo_img_in' data-fancybox='gallery' href='https://shop.onkron.ru/images/product_images/popup_images/442_5.jpg'><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_5.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 5 миниатюра"></a><a class='mo_img_in' data-fancybox='gallery' href='https://shop.onkron.ru/images/product_images/popup_images/442_6.jpg'><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_6.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 6 миниатюра"></a><a class='mo_img_in' data-fancybox='gallery' href='https://shop.onkron.ru/images/product_images/popup_images/442_7.jpg'><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_7.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 7 миниатюра"></a><a class='mo_img_in' data-fancybox='gallery' href='https://shop.onkron.ru/images/product_images/popup_images/442_8.jpg'><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_8.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 8 миниатюра"></a>			</div-->

                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;max-width: 500px;" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="main_img" style="width: 100%;">
                                <a id="main_image" data-fancybox='gallery' href="https://shop.onkron.ru/images/product_images/popup_images/442_0.jpg"><img src="https://shop.onkron.ru/images/product_images/popup_images/442_0.jpg"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a class='' data-fancybox='gallery' href="https://shop.onkron.ru/images/product_images/popup_images/442_1.jpg"><img src="https://shop.onkron.ru/images/product_images/popup_images/442_1.jpg"></a>

                        </div>
                        <div class="swiper-slide">
                            <a class='' data-fancybox='gallery' href="https://shop.onkron.ru/images/product_images/popup_images/442_2.jpg"><img src="https://shop.onkron.ru/images/product_images/popup_images/442_2.jpg"></a>

                        </div>
                        <div class="swiper-slide">
                            <a class='' data-fancybox='gallery' href="https://shop.onkron.ru/images/product_images/popup_images/442_3.jpg"><img src="https://shop.onkron.ru/images/product_images/popup_images/442_3.jpg"></a>

                        </div>
                        <div class="swiper-slide">
                            <a class='' data-fancybox='gallery' href="https://shop.onkron.ru/images/product_images/popup_images/442_4.jpg"><img src="https://shop.onkron.ru/images/product_images/popup_images/442_4.jpg"></a>

                        </div>
                        <div class="swiper-slide">
                            <a class='' data-fancybox='gallery' href="https://shop.onkron.ru/images/product_images/popup_images/442_5.jpg"><img src="https://shop.onkron.ru/images/product_images/popup_images/442_5.jpg"></a>

                        </div>
                        <div class="swiper-slide">
                            <a class='' data-fancybox='gallery' href="https://shop.onkron.ru/images/product_images/popup_images/442_6.jpg"><img src="https://shop.onkron.ru/images/product_images/popup_images/442_6.jpg"></a>

                        </div>
                        <div class="swiper-slide">
                            <a class='' data-fancybox='gallery' href="https://shop.onkron.ru/images/product_images/popup_images/442_7.jpg"><img src="https://shop.onkron.ru/images/product_images/popup_images/442_7.jpg"></a>

                        </div>
                        <div class="swiper-slide">
                            <a class='' data-fancybox='gallery' href="https://shop.onkron.ru/images/product_images/popup_images/442_8.jpg"><img src="https://shop.onkron.ru/images/product_images/popup_images/442_8.jpg"></a>

                        </div>
                    </div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://shop.onkron.ru/images/product_images/popup_images/442_0.jpg">
                        </div>
                        <div class="swiper-slide"><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_1.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 1 миниатюра"></div>
                        <div class="swiper-slide"><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_2.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 2 миниатюра"></div>
                        <div class="swiper-slide"><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_3.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 3 миниатюра"></div>
                        <div class="swiper-slide"><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_4.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 4 миниатюра"></div>
                        <div class="swiper-slide"><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_5.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 5 миниатюра"></div>
                        <div class="swiper-slide"><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_6.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 6 миниатюра"></div>
                        <div class="swiper-slide"><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_7.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 7 миниатюра"></div>
                        <div class="swiper-slide"><img itemprop="image" src="https://shop.onkron.ru/images/product_images/thumbnail_images/442_8.jpg" class="img-responsive" alt="ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная - вид 8 миниатюра"></div>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>


                <div class="wheels_text">
                </div>
            </div>
            <div class="right_block">
                <div class="products_name">
                    ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная <script>
                        var nameTovar = 'ONKRON моторизированная стойка для телевизора с кронштейном 50&quot;-100&quot;, мобильная, TS1991 eLift черная';
                    </script>
                </div>
                <div class="products_model">
                    АРТИКУЛ: <span style="color: #1fcfcb"><span class="prod_model"> <i class="icon-barcode"></i> <span>TS1991E-B</span> </span></span>
                </div>
                <div class="product-data__line"></div>
                <div style="overflow: auto;">
                    <div class="left_block">
                        <div class="product-data__name">
                            ЦЕНА
                        </div>
                        <div class="product-data__price">
                            79 990 <span style="color: #b3b3b7;">₽</span> </div>
                    </div>
                    <div class="right_block">
                        <div class="instructions">
                            <div id="product_tabs_media" class="tabs__content">
                                <div class="page">
                                    <div class="pagecontent">
                                        <p> <a href="https://onkron.com/manual/get.php?m=TS1991E-B" target="_blank"><span class="bold">Скачать инструкцию</span></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="font-size: 11px !important;" class="products_model">
                            <span id="box_size"> Габариты упаковки: 115 x 59 x 12 (см.) <span class="small_letter">(Д - Ш - В)</span> <br /> Вес упаковки: 35.00 кг. <br /> Штрих-код товара: 4262392440109 </span>
                        </div>


                        <!--<div style="font-size: 16px;" class="ozon_promo">
									</div>-->


                    </div>
                    <div class="clear"></div>
                    <div class="forBuisnes" style="">
                        <div class="product-data__name">
                            Для бизнеса
                        </div>

                        <div class="info-price">
                            <div class="info-price__head">
                                <div class="info-price__name">Количество</div>
                                <div class="info-price__name">Цена</div>
                            </div>
                            <div class="info-price__content">
                                <div class="info-price__element">
                                    <div class="info-price__text">5-10</div>
                                    <div class="info-price__data">**** ****
                                    </div>
                                </div>
                                <div class="info-price__element">
                                    <div class="info-price__text">10-20</div>
                                    <div class="info-price__data">**** ****
                                    </div>
                                </div>
                                <div class="info-price__element">
                                    <div class="info-price__text">20-30</div>
                                    <div class="info-price__data">**** ****
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="products in_card mainBLock">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="products_buttons">
                    <div class="coupon" style="width: 98%;">
                        <div class="codeForCOpy">
                            <h2 class="copyCode" onclick="copyToClipboard()">
                                <div class="popperCopy">
                                    <div style="font-size: 14px;">
                                        Скопировано
                                    </div>
                                </div>
                                <span id="item-to-copy">FIRST10</span>
                            </h2>
                            <h3>Скопируй промокод и <b>получи скидку 10%</b> и бесплатную доставку до ПВЗ на первый заказ</h3>
                        </div>
                        <!--Скопируй промокод 
									<span id="item-to-copy" onclick="copyToClipboard()" style="color: #5ad0cb;text-decoration: underline;cursor: pointer; position: relative;">
									FIRST15<span id="tooltip" style="position: absolute;top: -23px;left: -15%;font-size: 14px;background: #b0b0b0;padding: 2px 5px;border-radius: 4px;color: white;transition: 0.3s;opacity: 0;">
										Скопировано</span></span> и получи скидку 15% на первый заказ.-->
                    </div>
                    <div class="send_request"><a class="viewCoupon" onclick="ym(50055574, 'reachGoal', 'buy_in_shop'); return true;" target="_blank" href="https://shop.onkron.ru/motorizovannaya-stoyka-onkron-dlya-televizora-s-kronshteynom-50-100-mobilnaya-ts1991-elift-chernaya?montaj=true">Купить с установкой</a></div>
                    <div class="send_request buyInMag"><a class="viewCoupon" onclick="ym(50055574, 'reachGoal', 'buy_in_shop'); return true;" target="_blank" href="https://shop.onkron.ru/motorizovannaya-stoyka-onkron-dlya-televizora-s-kronshteynom-50-100-mobilnaya-ts1991-elift-chernaya">Купить в магазине</a></div>
                    <div class="clear"></div>
                    <div class="buy_in_shop"><button onclick="ym(50055574,'reachGoal','btb_form_start'); return true;" class="viewCoupon b24-web-form-popup-btn-4">Купить оптом</button></div>

                    <!--div class=""><a style="outline: none;width: 98%;float: left;display: block;margin: 0 1.5%;font-size: 14px;cursor: pointer;padding: 15px 0;text-transform: uppercase;text-align: center;color: gray;text-decoration: underline;"
								target="_blank" href="/news_inc.php?url=pomozhem-vam-ustanovit-onkron.html">Узнать больше об услуге</a></div-->

                    <div class="clear"></div>
                </div>
            </div>

        </div>

        <div class="clear"></div>
        <div class="container">
            <div class="product-data__line"></div>
            <!--div class="products in_card">
					</div-->
            <div class="tabs">
                <ul>
                    <li>Описание</li>
                    <li>Отзывы (0)</li>
                    <li>Скачать</li>
                </ul>
                <div>
                    <div class="products_description">
                        <div id="product_tabs_content" class="tabs__content">
                            <div itemprop="description">
                                <section class="first-section">
                                    <h1 class="description-title"> <?php echo $get_data["title"] ?> </h1>
                                    <p class="description-text"> <?php $title = $get_data["descr_title"];
                                                                    $title = explode(" ", $title, 2);
                                                                    echo '<span class="bold-text">' . $title[0] . '</span>' . " " . $title[1]; ?></p>
                                    <img src="<?php echo $get_data["main_image"] ?>" alt="стойка" class="description-image">
                                    <img src="assets/back.png" alt="dark back" id="back" style="width: 1300px;margin-top:-419px;position: absolute;z-index: 3;opacity:0.8;">

                                    <div class="column">
                                        <?php foreach ($get_data["icons"] as $data) : ?>
                                            <div class="column-card">
                                                <img src="<?php echo $data["url"] ?>" alt="icon" class="card-image">
                                                <h2 class=><?php echo $data["title"] ?></h2>
                                                <p><?php echo $data["descr_title"] ?></p>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </section>
                                <section class="second-section" id="pres">
                                    <?php foreach ($get_data["blocks"] as $block) : ?>
                                        <div class="presentaion-card">
                                            <img src="<?php echo $block["url"] ?>" class="presentation-card_image" id="<?php echo $block["lable_text"] ?>">
                                            <h1 class="presentation-card_descr" id="<?php echo $block["url"] ?>"><?php echo $block["lable_text"]; ?></h1>
                                        </div>
                                    <?php endforeach ?>
                                </section>
                                <section class="third-section" id="stage">
                                    <?php foreach ($get_data["grids"] as $grid) : ?>
                                        <div class="stage">
                                            <h1 class="stage-text" ><?php echo $grid["title"] ?></h1>
                                            <img src="<?php echo $grid["url"] ?>" alt="" class="stage-image <?php echo $grid["title"] ?>" id="<?php echo $grid["title"] ?>" >
                                        </div>
                                    <?php endforeach ?>
                                </section>
                                <section class="fourth-section" id="bottom">
                                    <?php foreach ($get_data["bottom_image"] as $present) : ?>
                                        <img src="<?php echo $present["image"]; ?>" alt="bottom" class="bottom-image">
                                        <h1 class="exhibitions"><?php echo $present["title"]; ?></h1>
                                        <?php echo $present["description"] ?>
                                    <?php endforeach ?>
                                </section>
                                <section id="footer-section">
                                    <?php foreach ($get_data["footer"] as $footer) : ?>
                                        <img src="<?php echo $footer["url"] ?>" alt="footer" class="footer-image">
                                    <?php endforeach ?>
                                </section>
                            </div>
                            <div class="oferta">* Внешний вид товара, его цвет и характеристики могут отличаться от представленных на сайте. Производитель оставляет за собой право без уведомления потребителя вносить изменения в конструкцию изделий для улучшения их технологических и эксплуатационных параметров. Технические характеристики товара могут отличаться, уточняйте технические характеристики товара на момент покупки и оплаты. Вся информация на сайте о товарах носит справочный характер и не является публичной офертой в соответствии с пунктом 2 статьи 437 ГК РФ.<br> * от партии к партии допустимы некоторые расхождения в оттенке цвета, объясняемые применяемой технологией</div>
                        </div>
                    </div>
                    <div class="products_reviews">
                        <div id="product_tabs_reviews" class="tabs__content">
                            <div id="add_review"></div>
                            <h2 class="h_margin_bot">Отзывы ONKRON моторизированная стойка для телевизора с кронштейном 50"-100", мобильная, TS1991 eLift черная</h2>
                            <div class="reviews_content">
                                <style>
                                    .reviews_content {
                                        display: grid;
                                        grid-template-columns: 69% 29%;
                                        grid-gap: 2%;
                                    }

                                    @media screen and (max-width: 766px) {
                                        .reviews_content {
                                            display: flex;
                                            flex-direction: column-reverse;
                                        }
                                    }
                                </style>
                                <div>
                                    <p>Ваш отзыв может быть первым.</p>
                                    <div class="clearfix"></div>
                                    <div class="btn toggle_ns_form" data-hide="true" data-target="ns_form_add_rev"><i class="icon-pencil"></i> Написать отзыв</div>
                                    <div class="ns_form_wrap" id="ns_form_add_rev" style="display: none">
                                        <hr>
                                        <h3>Написать отзыв</h3>
                                        <p>Ваш отзыв поможет кому-то сделать выбор. Спасибо, что делитесь опытом!</p>
                                        <form name="ns_form_add_review" id="ns_form_add_review" action="product/motorizovannaya-stoyka-onkron-dlya-televizora-s-kronshteynom-50-100-mobilnaya-ts1991-elift-chernaya?action=process" method="post"> <input type="hidden" name="csrf_token" value="1512a916590d2ceabd12256151d8bb923f75742b1144745f81c951f8dffb9849" /> <input type="text" name="name" value="" style="position: absolute; left: -9999px; display: none;"><input type="hidden" name="check" id="check" value="2eac74e"><input type="hidden" name="ajaxInput" id="ajaxInput" value="">
                                            <div class="ns_field ns_star_field">
                                                <p>Оценка: <b id="ns_rating_desc">Отлично</b></p>
                                                <div class="ns_rating_block"> <input name="ns_rating" value="5" id="ns_rating_5" type="radio" checked="checked" /> <label for="ns_rating_5" class="icon-star" title="Отлично"></label> <input name="ns_rating" value="4" id="ns_rating_4" type="radio" /> <label for="ns_rating_4" class="icon-star" title="Хорошо"></label> <input name="ns_rating" value="3" id="ns_rating_3" type="radio" /> <label for="ns_rating_3" class="icon-star" title="Нормально"></label> <input name="ns_rating" value="2" id="ns_rating_2" type="radio" /> <label for="ns_rating_2" class="icon-star" title="Плохо"></label> <input name="ns_rating" value="1" id="ns_rating_1" type="radio" /> <label for="ns_rating_1" class="icon-star" title="Ужасно"></label> </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="ns_float_label ns_field"><input type="text" name="ns_name" id="ns_name" class="ns_input" placeholder="Ваше имя" value="" required="required"><label for="ns_name">Имя</label><span class="ns_label_required" title="Обязательно для заполнения."></span></div>
                                            <div class="ns_float_label ns_field"><input type="email" name="email" id="email" class="ns_input" placeholder="Ваш email" value="" required="required"><label for="email">Email</label><span class="ns_label_required" title="Обязательно для заполнения."></span></div>
                                            <div class="ns_float_label ns_field"><input type="text" name="city" id="city" class="ns_input" placeholder="Ваш город" value=""><label for="city">Город</label></div>
                                            <div class="ns_float_label ns_field"><textarea name="review_plus" id="review_plus" class="ns_input" placeholder="Достоинства товара" required="required" cols="30" rows="3"></textarea><label for="review_plus">Достоинства</label><span class="ns_label_required" title="Обязательно для заполнения."></span></div>
                                            <div class="ns_float_label ns_field"><textarea name="review_minus" id="review_minus" class="ns_input" placeholder="Недостатки товара" required="required" cols="30" rows="3"></textarea><label for="review_minus">Недостатки</label><span class="ns_label_required" title="Обязательно для заполнения."></span></div>
                                            <div class="ns_float_label ns_field"><textarea name="review_comment" id="review_comment" class="ns_input" placeholder="Комментарий к отзыву" cols="30" rows="3"></textarea><label for="review_comment">Комментарий</label></div> <button type="submit" class="btn"><i class="icon-pencil"></i> Написать отзыв</button>
                                            <div class="privacy_form_text"> Нажимая кнопку "Написать отзыв", вы даете согласие на обработку своих персональных данных. <a target="_blank" href="shop_content.php?coID=3">Подробнее о защите персональной информации.</a> </div>
                                        </form>
                                    </div>
                                </div>
                                <div> </div>
                            </div>
                        </div>
                    </div>
                    <div class="products_attachments">
                        <div id="product_tabs_media" class="tabs__content">
                            <div class="page">
                                <div class="pagecontent">
                                    <p> <a href="https://onkron.com/manual/get.php?m=TS1991E-B" target="_blank"><span class="bold">Скачать инструкцию</span></a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

        </div>
    </div>
    </div>
    <div class="clear"></div>
    <div id="footer" class="footer">

        <div class="container">
            <div class="choose_h2 collections">
            </div>
            <div class="footer_block first_footer_block">
                <div class="footer_block_inner">
                    <h3>Контакты</h3><br />
                    <div class="block_bottom">
                        <div class="block-content" style="">
                            <ul class="contact-info">
                                <li><i class="fa fa-map-marker">&nbsp;</i>
                                    <p><b>Адрес:</b><br>г. Санкт-Петербург, <br>улица Есенина д.1, корп.1, лит. А, пом. 73-H</p>
                                </li>
                                <li><i class="fa fa-phone">&nbsp;</i>
                                    <p><b>Телефон:</b><br> <a class="no_border_link" href="tel:+7 (800) 777-21-76">+7 (800) 777-21-76</a></p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="footer_block_inner second_block">
                    <h3></h3><br />
                    <div class="block_bottom">
                        <div class="block-content" style="">
                            <ul class="contact-info">
                                <li><i style="font-size: 25px;" class="fa fa-envelope">&nbsp;</i>
                                    <p><b>Email:</b><br><a href="mailto:support@onkron.ru">support@onkron.ru</a>
                                        <br><a href="mailto:info@onkron.ru">info@onkron.ru</a>
                                    </p>
                                </li><br>
                                <li><i class="fa fa-clock-o">&nbsp;</i>
                                    <p><b>Рабочие дни/часы:</b><br>пн-пт 10:00-18:00.</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="footer_block_inner">
                    <h3>ИНФОРМАЦИЯ</h3>
                    <div class="block_bottom">
                        <div class="block-content">
                            <a href="https://onkron.ru/content.php?url=25-katalogi">Каталоги</a><br />
                            <!--<a href="https://onkron.ru/content.php?url=16-garantiya-5-let">Гарантия 5 лет</a><br />-->
                        </div>
                    </div>
                </div>
                <div class="footer_block_inner">
                    <h3>ИНТЕРЕСНО</h3>
                    <div class="block_bottom">
                        <div class="block-content">
                            <a href="https://onkron.ru/news.php">Новости</a><br />
                            <a href="https://onkron.ru/articles.php">Статьи</a><br />
                            <a href="https://www.youtube.com/channel/UCmtJ7rZfERJu8lFPof9rAgA">Видео</a><br>
                            <a href="https://onkron.ru/content.php?url=19-o-nas">Фирменный стиль</a><br>
                            <a href="https://onkron.ru/content.php?url=23-press-reliz">ПРЕСС-РЕЛИЗ 2019</a>
                        </div> 
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="socials_wrapper">
                <div class="youtube">
                    <a href="https://www.youtube.com/channel/UCmtJ7rZfERJu8lFPof9rAgA"><img src="images/youtube.png" /></a>
                </div>
                <!--<div class="instagramm">
				<a href="https://www.instagram.com/onkron_rus/"><img src="images/instagramm.png" /></a>
			</div>-->
                <div class="instagramm">
                    <a href="https://vk.com/onkron"><img src="images/vk_logo.png" /></a>
                </div>
                <div class="worldwide">
                    <a href="https://onkron.com"><img src="images/worldwide.png" /></a>
                </div>
                <div class="whatsapp">
                    <a href="https://wa.me/message/U2C3Z5P7XAJ5J1"><img src="images/whatsapp.svg" /></a>
                </div>
            </div>
            <div class="copyright_wrapper">
                <span class="copyright">© ONKRON 2023</span>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i, cid) {
            w[l] = w[l] || [];
            w.pclick_client_id = cid;
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P23G9N', '90630');
    </script> <!-- End Google Tag Manager -->

    <div class="clear"></div>

    <script>
        (function(w, d, u) {
            var s = d.createElement('script');
            s.async = true;
            s.src = u + '?' + (Date.now() / 60000 | 0);
            var h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document, 'https://cdn-ru.bitrix24.ru/b6258443/crm/site_button/loader_5_bw1dux.js');
    </script>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P23G9N" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
        (function(w, d, s, l, i, cid) {
            w[l] = w[l] || [];
            w.pclick_client_id = cid;
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P23G9N', '79064');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(50055574, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/50055574" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</body>
<style>
    .codeForCOpy {
        width: 100%;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .codeForCOpy h2 {
        text-align: center;
        font-weight: bold;
        position: relative;
        display: inline-block;
        margin: 0px auto;
        color: #5ad0cb;
        font-size: 25px;
    }

    .codeForCOpy h3 {
        font-size: 16px;
        font-weight: normal;
        text-align: center;
        margin: 0px;
    }

    .codeForCOpy .popperCopy {
        display: none;
        position: absolute;
        color: white;
        font-size: 14px;
        font-weight: normal;
        right: 102%;
        bottom: 24%;
        overflow: hidden;
        padding-bottom: 8px;
    }

    .codeForCOpy .popperCopy>div {
        background: #ececec;
        padding: 5px;
        border-radius: 5px;
    }

    .codeForCOpy .popperCopy>div::before {

        content: '';
        display: block;
        width: 15px;
        height: 15px;
        position: absolute;
        right: -8px;
        bottom: 1px;
        transform: rotate(45deg);
        background: #ececec;

    }
</style>

<script>
    $(function() {
        $('[data-page="1"]').click(function() {
            $.ajax({
                url: 'https://shop.onkron.ru/counter_reviews.php?prod=' + nameTovar.replace(new RegExp('&quot;', 'g'), '"') + '&shop=onkron.ru'
            });
        });
    });
</script>
<script defer src="index.js"></script>
