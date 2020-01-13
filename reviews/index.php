<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Отзывы о компании Металлинвест");
$APPLICATION->SetPageProperty("keywords", "отзывы");
$APPLICATION->SetPageProperty("description", "отзывы");
$APPLICATION->SetTitle("Отзывы");
?>

    <main class="main-content">
        <div class="inner-page_title-section">
            <div class="container">
                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array("SITE_ID" => SITE_ID),
                    false
                );?>
                <h1>Отзывы</h1>
            </div>
        </div>
        <!-- end inner-page_title-section -->

        <?$APPLICATION->IncludeComponent("bitrix:news.line", "reviews.galery", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "300",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
            "FIELD_CODE" => array(	// Поля
                0 => "NAME",
                1 => "PREVIEW_PICTURE",
                2 => "",
            ),
            "IBLOCKS" => array(	// Код информационного блока
                0 => "19",
            ),
            "IBLOCK_TYPE" => "reviews",	// Тип информационного блока
            "NEWS_COUNT" => "20",	// Количество новостей на странице
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
        ),
            false
        );?>
        <!-- end reviews-section -->

        <?$APPLICATION->IncludeComponent("bitrix:news.line", "reviews.partner", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "300",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
            "FIELD_CODE" => array(	// Поля
                0 => "NAME",
                1 => "PREVIEW_TEXT",
                2 => "PREVIEW_PICTURE",
                3 => "",
            ),
            "IBLOCKS" => array(	// Код информационного блока
                0 => "20",
            ),
            "IBLOCK_TYPE" => "reviews",	// Тип информационного блока
            "NEWS_COUNT" => "20",	// Количество новостей на странице
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "COMPONENT_TEMPLATE" => "reviews.galery"
        ),
            false
        );?>
        <!-- end partners_section -->
        <div class="form-content form-content_mod">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="beam-img">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/eo.png" alt="alt">
                        </div>
                    </div>
                    <div class="col-lg-8 form-content_mod-desc">
                        <div class="form-content_title title-h3">Ваши предложения и пожелания руководителю компании</div>
                        <span class="top-small_text"></span>
                        <?$APPLICATION->IncludeComponent("prime:main.feedback", "reviews", Array(
                            "EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
                                0 => "1",
                            ),
                            "IBLOCK_ID" => "29",	// Код информационного блока
                            "IBLOCK_TYPE" => "feedback",	// Тип информационного блока (используется только для проверки)
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
                            "PROPERTY_CODE" => array(	// Поля формы
                                0 => "NAME",
                                1 => "PHONE",
                                2 => "EMAIL",
                            ),
                            "USE_CAPTCHA" => "Y",
                            "CAPTCHA_SITE_KEY" => "6Ld60c4UAAAAAGXC83w4_ZPy-Q6OErFzaVYjjNQl",
                            "CAPTCHA_SERVER_KEY" => "6Ld60c4UAAAAAP7qkcYtAQ_byWeHtD0kgGFiH0Q9",
                        ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end form-content -->
    </main>
    <!-- end main-content -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>