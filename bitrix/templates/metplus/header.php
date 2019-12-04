<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html class="no-js" lang="<?=LANGUAGE_ID?>">
<head>
    <meta content="<?=SITE_TEMPLATE_PATH?>/browserconfig.xml" name="msapplication-config" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?$APPLICATION->ShowTitle()?></title>
    <link href="<?=SITE_DIR?>favicon.ico" rel="icon" type="image/png" />
    <link href="<?=SITE_DIR?>favicon.png" rel="icon" type="image/png" />
    <link href="<?=SITE_DIR?>apple-touch-icon.png" rel="apple-touch-icon" />
    <? $APPLICATION->ShowHead(); ?>
    <style>body{opacity: 0;}</style>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<!--[if lt IE 10]>
<p class="browsehappy"><br>Вы используете <strong>устаревший</strong> браузер.
    Пожалуйста, <a href="http://browsehappy.com/">обновите его</a> для корректного
    отображения сайтов.</p>
<![endif]-->
<div class="global-wrapper">
    <div class="wrapper-loader">
        <div class="preloader">
            <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
        </div>
    </div>
    <header class="ui-header">
        <div class="main-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-5 col-8 main-head_left-column">
                        <div class="head-logo">
                            <a href="/"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/logo.png" alt="alt"></a>
                        </div>
                        <div class="head_phone-box tablet-small_hidden">
                            <a href="tel:+74732075555" class="head_phone-number">+7 (473) 207-55-55 </a>
                            <div class="head_callback-btn">
                                <a href="">
                                    <span class="glipf-call-answer"></span>
                                    <span class="text">Заказать звонок</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-7 col-4 main-head_right-column">
                        <div class="head_opening-hours">
                            <strong>График работы:</strong>
                            <span class="min">Будни: 8:00 - 19:00</span>
                            Выходные: 9.00 - 17:00
                        </div>
                        <div class="head_select-city">
                            <a href="#citySelect" data-toggle="modal" class="select-city_btn">Выберите город:</a>
                            <div class="select-city_field">Воронеж</div>
                        </div>

                        <div class="fixed-menu_catalog">
                            <a href="" class="fixed-panel_catalog-btn"><span class="head-menu_text">каталог</span></a>
                            <div class="dropdown-content">
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_first"></span>АРМАТУРА</a>
                                        <div class="dropdown-submenu-content">
                                            <ul class="dropdown-submenu">
                                                <li><a href="">lorem</a></li>
                                                <li><a href="">lorem</a></li>
                                                <li><a href="">lorem</a></li>
                                                <li><a href="">lorem lorem</a></li>
                                                <li><a href="">lorem lorem</a></li>
                                            </ul>
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_second"></span>БАЛКА ДВУТАВРОВАЯ</a>
                                        <div class="dropdown-submenu-content">
                                            <ul class="dropdown-submenu">
                                                <li><a href="">lorem</a></li>
                                                <li><a href="">lorem</a></li>
                                                <li><a href="">lorem</a></li>
                                                <li><a href="">lorem lorem</a></li>
                                                <li><a href="">lorem lorem</a></li>
                                                <li><a href="">lorem lorem</a></li>
                                            </ul>
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_third"></span>ШВЕЛЛЕР</a>
                                        <div class="dropdown-submenu-content">
                                            <ul class="dropdown-submenu">
                                                <li><a href="">Швеллер гнутый</a></li>
                                                <li><a href="">Швеллер п</a></li>
                                                <li><a href="">Швеллер у</a></li>
                                                <li><a href="">Швеллер гнутый</a></li>
                                                <li><a href="">Швеллер п</a></li>
                                                <li><a href="">Швеллер у</a></li>
                                            </ul>
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_fourth"></span>УГОЛОК СТАЛЬНОЙ</a>
                                        <div class="dropdown-submenu-content">
                                            <ul class="dropdown-submenu">
                                                <li><a href="">Швеллер гнутый</a></li>
                                                <li><a href="">Швеллер п</a></li>
                                                <li><a href="">Швеллер у</a></li>
                                                <li><a href="">Швеллер гнутый</a></li>
                                                <li><a href="">Швеллер п</a></li>
                                                <li><a href="">Швеллер у</a></li>
                                            </ul>
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_fifth"></span>ТРУБА КРУГЛАЯ</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_six"></span>ТРУБА ПРОФИЛЬНАЯ</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_seven"></span>ПОЛОСА СТАЛЬНАЯ</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href="" ><span class="menu-icon menu-icon_eight"></span>КВАДРАТ</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href="" > <span class="menu-icon menu-icon_nine"></span>КРУГ СТАЛЬНОЙ</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_ten"></span>ШЕСТИГРАННИК СТАЛЬНОЙ</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_eleven"></span>ЛИСТ СТАЛЬНОЙ</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_tvelwe"></span>ОТВОДЫ</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_thirteen"></span>СЕТКА</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_fourteen"></span>ПРОВОЛКА</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_fifteen"></span>ЭЛЕКТРОДЫ</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu_item">
                                        <a href=""><span class="menu-icon menu-icon_sixteen"></span>НЕРЖАВЕЮЩАЯ СТАЛЬ</a>
                                        <div class="dropdown-submenu-content">
                                            <div class="dropdown-submenu_img">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                                                <ul class="dropdown-submenu_img-text">
                                                    <li>
                                                        <small>Только у нас</small>
                                                        швеллер
                                                    </li>
                                                    <li>
                                                        <small>по самой</small>
                                                        выгодной <br>цене
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hamburger hamburger--spring fixed-menu_hamburger">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                        <form action="#" class="head_form-search mobile-hidden">
                            <input type="text" class="head_form-search_input" placeholder="Введите ваш запрос">
                            <div class="wrapper_submit-btn">
                                <span class="glipf-search"></span>
                                <input type="submit" class="form-search_submit-btn" value="">
                            </div>
                        </form>
                        <div class="head-cart">
                            <a href="">
                                <span class="glipf-cart"></span>
                                <span class="head-cart_number">4</span>
                            </a>
                        </div>
                        <div class="hamburger hamburger--spring tablet-hamburger">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="head-nav">
            <div class="container">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "top.menu", Array(
                    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                    "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                    "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "MENU_THEME" => "site",	// Тема меню
                    "CACHE_SELECTED_ITEMS" => "N",
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MAX_LEVEL" => "3",	// Уровень вложенности меню
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "COMPONENT_TEMPLATE" => "catalog_horizontal"
                ),
                    false
                );?>
                <div class="tablet-visible">
                    <div class="head_select-city head_select-city_mobile">
                        <a href="#citySelect" data-toggle="modal" class="select-city_btn">Выберите город:</a>
                        <div class="select-city_field">Воронеж</div>
                    </div>
                </div>
                <div class="tablet-small_visible">
                    <div class="head_phone-box">
                        <a href="tel:+74732075555" class="head_phone-number">+7 (473) 207-55-55 </a>
                        <div class="head_callback-btn">
                            <a href="">
                                <span class="glipf-call-answer"></span>
                                <span class="text">Заказать звонок</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mobile-visible">
                    <form action="#" class="head_form-search">
                        <input type="text" class="head_form-search_input" placeholder="Введите ваш запрос">
                        <div class="wrapper_submit-btn">
                            <span class="glipf-search"></span>
                            <input type="submit" class="form-search_submit-btn" value="">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- END UI-HEADER -->