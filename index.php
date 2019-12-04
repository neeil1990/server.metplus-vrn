<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>

    <main class="main-content">
        <div class="main-section">
            <div class="container">
                <div class="main-slider">
                    <?$APPLICATION->IncludeComponent("bitrix:news.line", "slider", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "300",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                        "FIELD_CODE" => array(	// Поля
                            0 => "CODE",
                            1 => "NAME",
                            2 => "PREVIEW_TEXT",
                            3 => "",
                        ),
                        "IBLOCKS" => array(	// Код информационного блока
                            0 => "5",
                        ),
                        "IBLOCK_TYPE" => "components",	// Тип информационного блока
                        "NEWS_COUNT" => "20",	// Количество новостей на странице
                        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                        false
                    );?>
                </div>
            </div>
        </div>
        <!-- end main-section -->
        <div class="category-section">
            <div class="container">
                <ul class="category-list">
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_first"></span>Арматура</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_second"></span>Балка <br>двутавровая</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_seventeen"></span>Швеллер</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_fifteen"></span>Уголок <br> стальной</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_eight"></span>Труба  круглая</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_fourteen"></span>Труба <br>профильная</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_ten"></span>Полоса <br>стальная</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_fourth"></span>Квадрат</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_six"></span>Круг <br>стальной</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_eighteen"></span>Шестигранник <br> стальной</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_seven"></span>Лист <br>стальной</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_nine"></span>Отводы</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_tvelwe"></span>Сетка</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_eleven"></span>Проволка</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_nineteen"></span>Электроды</a>
                    </li>
                    <li class="category-item">
                        <a href=""><span class="category-icon category-icon_eight"></span>Нержавеющая <br>сталь</a>
                    </li>
                    <li class="category-item_mod">
                        <div class="category-item_mod-content">
                            <span class="category-icon category-icon_thirst"></span>
                            <span class="text">Инженерная <br>сантехника</span>
                            <a href="" class="site-link">Перейти на сайт</a>
                        </div>
                    </li>
                    <li class="category-item_mod">
                        <div class="category-item_mod-content">
                            <span class="category-icon category-icon_fifth"></span>
                            <span class="text">Кровельные <br>материалы</span>
                            <a href="" class="site-link">Перейти на сайт</a>
                        </div>
                    </li>
                    <li class="category-item_mod">
                        <div class="category-item_mod-content">
                            <span class="category-icon category-icon_sixteen"></span>
                            <span class="text">Художественная <br>ковка</span>
                            <a href="" class="site-link">Перейти на сайт</a>
                        </div>
                    </li>
                </ul>
                <a href="" class="download-price_btn main-btn"><span class="glipf-download"></span>Скачать прайс</a>
            </div>
        </div>
        <!-- end category-section -->
        <div class="services-section">
            <div class="container">
                <div class="section-title">УСЛУГИ</div>
                <div class="row">
                    <?$APPLICATION->IncludeComponent("bitrix:news.line", "services", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "300",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                        "FIELD_CODE" => array(	// Поля
                            0 => "PREVIEW_PICTURE",
                            1 => "PREVIEW_TEXT",
                        ),
                        "IBLOCKS" => array(	// Код информационного блока
                            0 => "4",
                        ),
                        "IBLOCK_TYPE" => "news",	// Тип информационного блока
                        "NEWS_COUNT" => "20",	// Количество новостей на странице
                        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                    ),
                        false
                    );?>
                </div>
            </div>
        </div>
        <!-- end services-section -->
        <div class="advantages-section">
            <div class="container">
                <div class="section-title">НАШИ ПРИЕМУЩЕСТВА</div>
                <div class="row">
                    <div class="left-column">
                        <div class="wrapper_advantages-slider">
                            <div class="advantages-slider">
                                <?$APPLICATION->IncludeComponent("bitrix:news.line", "slider.advantages", Array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                    "CACHE_TIME" => "300",	// Время кеширования (сек.)
                                    "CACHE_TYPE" => "A",	// Тип кеширования
                                    "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                                    "FIELD_CODE" => array(	// Поля
                                        0 => "CODE",
                                        1 => "NAME",
                                        2 => "PREVIEW_TEXT",
                                        3 => "PREVIEW_PICTURE",
                                    ),
                                    "IBLOCKS" => array(	// Код информационного блока
                                        0 => "7",
                                    ),
                                    "IBLOCK_TYPE" => "components",	// Тип информационного блока
                                    "NEWS_COUNT" => "20",	// Количество новостей на странице
                                    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                                    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                                    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                                    "COMPONENT_TEMPLATE" => "advantages"
                                ),
                                    false
                                );?>
                            </div>
                            <div class="advantages-slide_dots js-dots"></div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="row">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:news.line",
                                "advantages",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "300",
                                    "CACHE_TYPE" => "A",
                                    "DETAIL_URL" => "",
                                    "FIELD_CODE" => array(
                                        0 => "CODE",
                                        1 => "NAME",
                                        2 => "PREVIEW_TEXT",
                                        3 => "",
                                    ),
                                    "IBLOCKS" => array(
                                        0 => "6",
                                    ),
                                    "IBLOCK_TYPE" => "components",
                                    "NEWS_COUNT" => "20",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "COMPONENT_TEMPLATE" => "advantages"
                                ),
                                false
                            );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end advantages-section -->
        <div class="our-partners_section">
            <div class="container">
                <div class="section-title">НАШИ ПАРТНЁРЫ</div>
                <div class="our-partners_slider">
                    <?$APPLICATION->IncludeComponent("bitrix:news.line", "partners", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "300",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                        "FIELD_CODE" => array(	// Поля
                            0 => "CODE",
                            1 => "NAME",
                            2 => "PREVIEW_PICTURE",
                            3 => "",
                        ),
                        "IBLOCKS" => array(	// Код информационного блока
                            0 => "8",
                        ),
                        "IBLOCK_TYPE" => "components",	// Тип информационного блока
                        "NEWS_COUNT" => "20",	// Количество новостей на странице
                        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                        "COMPONENT_TEMPLATE" => "slider.advantages"
                    ),
                        false
                    );?>
                </div>
            </div>
        </div>
        <!-- end our-partners_section -->
        <div class="text-section" data-paroller-factor="0.8">
            <div class="container">
                <h2 class="white-title">СЕО текст</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. iat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                </p>
            </div>
        </div>
        <!-- end text-section -->
        <div class="map-container">
            <div class="map-contact_box">
                <div class="section-title">КОНТАКТЫ</div>
                <select class="js-select">
                    <option value="">Склад №1</option>
                    <option value="">Склад №1</option>
                    <option value="">Склад №1</option>
                    <option value="">Склад №1</option>
                    <option value="">Склад №1</option>
                </select>
                <ul class="map-contact_list">
                    <li><span class="contact-icon glipf-place-2"></span>Воронеж, Монтажный проезд, д. 26</li>
                    <li><a href="tel:+74732075555"><span class="contact-icon glipf-call-answer"></span>+7 (473) 207-55-55 </a></li>
                    <li><a href="mailto:info@metplus-vrn.ru" class="map-contact_mail"><span class="contact-icon glipf-email"></span>info@metplus-vrn.ru</a></li>
                </ul>
                <a href="" class="main-btn map-callback_btn"><span class="glipf-call-answer"></span>Заказать обратный звонок</a>
            </div>
            <div id="map"></div>
        </div>
    </main>
    <!-- end main-content -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>