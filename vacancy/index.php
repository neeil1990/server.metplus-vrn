<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Вакансии компании Металлинвест");
$APPLICATION->SetPageProperty("keywords", "вакансии");
$APPLICATION->SetPageProperty("description", "вакансии");
$APPLICATION->SetTitle("Вакансии");
?>

    <main class="main-content">
        <div class="inner-page_title-section">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="">Главная</a></li>
                    <li>Вакансии</li>
                </ul>
                <h1>Вакансии</h1>
            </div>
        </div>
        <!-- end inner-page_title-section -->
        <div class="vacancy-section">
            <div class="container">
                <?$APPLICATION->IncludeComponent("bitrix:news.line", "vacancy.advatages", Array(
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
                        0 => "26",
                    ),
                    "IBLOCK_TYPE" => "vacancy",	// Тип информационного блока
                    "NEWS_COUNT" => "20",	// Количество новостей на странице
                    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                ),
                    false
                );?>


                <?$APPLICATION->IncludeComponent("bitrix:news.line", "vacancy.wrapper", Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                    "CACHE_TIME" => "300",	// Время кеширования (сек.)
                    "CACHE_TYPE" => "A",	// Тип кеширования
                    "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                    "FIELD_CODE" => array(	// Поля
                        0 => "NAME",
                        1 => "PREVIEW_TEXT",
                        2 => "DETAIL_TEXT",
                        3 => "",
                    ),
                    "IBLOCKS" => array(	// Код информационного блока
                        0 => "27",
                    ),
                    "IBLOCK_TYPE" => "vacancy",	// Тип информационного блока
                    "NEWS_COUNT" => "20",	// Количество новостей на странице
                    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                    "COMPONENT_TEMPLATE" => "vacancy.advatages"
                ),
                    false
                );?>
                <div class="title-h3">Вы хотите работать с нами? Отправьте свое резюме</div>
                <form action="#" class="static-form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-input" placeholder="ФИО *">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" class="form-input" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea  class="form-textarea" placeholder="Краткое описание к резюме*"></textarea>
                    </div>
                    <div class="row form-static_footer">
                        <div class="col-sm-6">
                            <label class="input-file">
                                <span class="input-file_icon glipf-paper-clip"></span>
                                <span class="button">
											<input type="file" name="photo" multiple="" class="requiredField callback-file" onchange="this.parentNode.nextSibling.value = this.value" tabindex="0">
										</span><input class="input-file-text" placeholder="Прикрепить резюме">
                            </label>
                        </div>
                        <div class="col-sm-6 static-form_right-column">
                            <input type="submit" class="form-static_submit-btn form-static_submit-btn--mod main-btn" value="Выслать резюме">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end vacancy-section -->
    </main>
    <!-- end main-content -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>