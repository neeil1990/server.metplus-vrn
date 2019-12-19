<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("reviews");
?>

    <main class="main-content">
        <div class="inner-page_title-section">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="">Главная</a></li>
                    <li>Отзывы</li>
                </ul>
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
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/beams.png" alt="alt">
                        </div>
                    </div>
                    <div class="col-lg-8 form-content_mod-desc">
                        <div class="form-content_title title-h3">Остались вопросы? <span class="blue-color">Задайте</span> их прямо сейчас</div>
                        <span class="top-small_text">Напишите руководителю</span>
                        <form action="#" class="static-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-input" placeholder="ФИО *">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="tel" class="form-input" placeholder="Телефон *">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="email" class="form-input" placeholder="E-mail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <textarea  class="form-textarea" placeholder="Введите текст сообщения"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/static/captcha.jpg" alt="alt">
                                    <input type="submit" class="form-static_submit-btn main-btn" value="Перезвонить">
                                    <span class="form-static_policy-text">
													Нажимая кнопку вы соглашаетес с правилами
													обработки персональных данных
												</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end form-content -->
    </main>
    <!-- end main-content -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>