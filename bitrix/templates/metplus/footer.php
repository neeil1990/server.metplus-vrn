<footer class="main-footer">
    <div class="container">
        <div class="row">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom.menu", Array(
                "ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
                "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "MENU_THEME" => "site",	// Тема меню
                "CACHE_SELECTED_ITEMS" => "N",
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MAX_LEVEL" => "2",	// Уровень вложенности меню
                "CHILD_MENU_TYPE" => "bottom_left",	// Тип меню для остальных уровней
                "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "COMPONENT_TEMPLATE" => "catalog_horizontal"
            ),
                false
            );?>

            <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_useful.menu", Array(
                "ROOT_MENU_TYPE" => "bottom_useful",	// Тип меню для первого уровня
                "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "MENU_THEME" => "site",	// Тема меню
                "CACHE_SELECTED_ITEMS" => "N",
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                "CHILD_MENU_TYPE" => "bottom_useful",	// Тип меню для остальных уровней
                "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "COMPONENT_TEMPLATE" => "catalog_horizontal"
            ),
                false
            );?>
            <div class="footer-column">
                <ul class="footer-contact_list">
                    <li><a href="tel:+74732075555"><span class="glipf-call-answer"></span>+7 (473) 207-55-55</a></li>
                    <li><a href="tel:+74732075555"><span class="glipf-call-answer"></span>+7 (473) 207-55-55</a></li>
                    <li><a href="tel:info@metplus-vrn.ru" class="footer-mail"><span class="glipf-email"></span>info@metplus-vrn.ru</a></li>
                    <li>
                        <span class="glipf-clock"></span>Будни: 8:00 - 19:00 <br>Выходные: 9.00 - 17:00
                    </li>
                </ul>
                <ul class="social-network">
                    <li><a href=""><span class="glipf-vk"></span></a></li>
                    <li><a href=""><span class="glipf-facebook"></span></a></li>
                    <li><a href=""><span class="glipf-odnoklassniki"></span></a></li>
                    <li><a href=""><span class="glipf-twitter"></span></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="rules">
                    <a href="/upload/politics.pdf" target="_blank">Политика конфиденциальности.</a>
                    <a href="/upload/compliance.pdf" target="_blank">Согласие на обработку персональных данных.</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end main-footer -->
<div class="scroll-to-top"></div>
</div>
<!-- END GLOBAL-WRAPPER -->
<div class="cart-content">
    <div class="cart-content_first"></div>
    <div class="cart-content_second"></div>

    <div class="cart-content_third">
        <div class="container">
            <div class="cart-close"></div>
            <div class="cart-content_header">
                <div class="cart-content_title">Заявка оформлена</div>
                <ul class="cart-steps">
                    <li class="cart-step_item">Шаг 1</li>
                    <li class="cart-step_item cart-step_item-second">Шаг 2</li>
                    <li class="cart-step_item active">Шаг 3</li>
                </ul>
            </div>
            <div class="cart-content_body cart-content_body-mod text-center">
                <div class="check-icon"></div>
                <div class="thanks-text">
                    Спасибо за Ваш заказ!
                    <small>Специалист в ближайшее время с Вами свяжется и уточнит все детали</small>
                </div>
                <a href="" class="main-btn js-back-site_2">Вернуться на сайт</a>
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" class="modal fade js-modal" id="citySelect" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-city" role="document">
        <div class="modal-content">
            <div class="modal-city_title section-title">Выберите ваш город</div>
            <button aria-label="Close" class="close uhified_close-btn" data-dismiss="modal" type="button"></button>
            <div class="row">
                <ul class="modal-city_list-unstyled col-sm-6">
                    <li>
                        Балашиха
                    </li>
                    <li>
                        Белгород
                    </li>
                    <li>
                        Брянск
                    </li>
                    <li>
                        Великий Новгород
                    </li>
                    <li>
                        Владимир
                    </li>
                    <li>
                        Волгоград
                    </li>
                    <li>
                        Воронеж
                    </li>
                    <li>
                        Екатеринбург
                    </li>
                    <li>
                        Ижевск
                    </li>
                    <li>
                        Калининград
                    </li>
                    <li>
                        Калуга
                    </li>
                    <li>
                        Краснодар
                    </li>
                </ul>
                <ul class="modal-city_list-unstyled col-sm-6">
                    <li>
                        Балашиха
                    </li>
                    <li>
                        Белгород
                    </li>
                    <li>
                        Брянск
                    </li>
                    <li>
                        Великий Новгород
                    </li>
                    <li>
                        Владимир
                    </li>
                    <li>
                        Волгоград
                    </li>
                    <li>
                        Воронеж
                    </li>
                    <li>
                        Екатеринбург
                    </li>
                    <li>
                        Ижевск
                    </li>
                    <li>
                        Калининград
                    </li>
                    <li>
                        Калуга
                    </li>
                    <li>
                        Краснодар
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<link href="<?=SITE_TEMPLATE_PATH?>/css/min.css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/css/main.css" rel="stylesheet" />
<script src="<?=SITE_TEMPLATE_PATH?>/js/min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</body>
</html>
