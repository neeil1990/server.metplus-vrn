<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>

    <main class="main-content">

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
        <!-- end main-section -->
        <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "main", Array(
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
            "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
            "IBLOCK_ID" => "13",	// Инфоблок
            "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
            "SECTION_CODE" => "",	// Код раздела
            "SECTION_FIELDS" => array(	// Поля разделов
                0 => "",
                1 => "",
            ),
            "SECTION_ID" => "",	// ID раздела
            "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
            "SECTION_USER_FIELDS" => array(	// Свойства разделов
                0 => "UF_ICON",
                1 => "",
            ),
            "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
            "TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
            "VIEW_MODE" => "LINE",	// Вид списка подразделов
        ),
            false
        );?>
        <!-- end category-section -->
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
        <!-- end services-section -->
        <div class="advantages-section">
            <div class="container">
                <div class="section-title">НАШИ ПРИЕМУЩЕСТВА</div>
                <div class="row">
                    <div class="left-column">
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
                    <div class="right-column">
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
        <!-- end advantages-section -->
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
        <!-- end our-partners_section -->
        <div class="text-section" data-paroller-factor="0.8">
            <div class="container">
                <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH.'/inc/main_desc.php',
                    Array(),
                    Array("MODE" => "html",)
                );?>
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