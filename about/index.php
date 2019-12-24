<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>
<main class="main-content">
<div class="inner-page_title-section">
	<div class="container">
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array("SITE_ID" => SITE_ID),
            false
        );?>
		<h1>О компании</h1>
	</div>
</div>
 <!-- end inner-page_title-section -->
<div class="about-us_section">
	<div class="container">
		<div class="title-h3">
			 Общая информация о компании МетеллИнвест
		</div>
		<div class="row">
			<div class="about-us_left-column">
                <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH.'/inc/about_us.php',
                    Array(),
                    Array("MODE" => "html",)
                );?>
			</div>
			<div class="about-us_right-column">
				<div class="about-us_img">
                     <img alt="МетеллИнвест" src="<?=SITE_TEMPLATE_PATH?>/img/static/team.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/img/static/team.jpg">
				</div>
			</div>
		</div>
	</div>
</div>
 <!-- end about-us_section -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.line",
        "about.digit",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "300",
            "CACHE_TYPE" => "A",
            "DETAIL_URL" => "",
            "FIELD_CODE" => array(
                0 => "NAME",
                1 => "PREVIEW_TEXT",
                2 => "",
            ),
            "IBLOCKS" => array(
                0 => "14",
            ),
            "IBLOCK_TYPE" => "about",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "about.digit"
        ),
        false
    );?>
 <!-- end digit-section -->

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.line",
        "about.history",
        array(
            "ACTIVE_DATE_FORMAT" => "j M Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "300",
            "CACHE_TYPE" => "A",
            "DETAIL_URL" => "",
            "FIELD_CODE" => array(
                0 => "NAME",
                1 => "PREVIEW_TEXT",
                2 => "DATE_ACTIVE_FROM",
                3 => "",
            ),
            "IBLOCKS" => array(
                0 => "15",
            ),
            "IBLOCK_TYPE" => "about",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "about.history"
        ),
        false
    );?>
 <!-- end history-company_section -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.line",
        "about.advantages",
        array(
            "ACTIVE_DATE_FORMAT" => "j M Y",
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
                0 => "16",
            ),
            "IBLOCK_TYPE" => "about",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "about.advantages"
        ),
        false
    );?>
 <!-- end advantages-mod_section -->

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.line",
        "about.galery",
        array(
            "ACTIVE_DATE_FORMAT" => "j M Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "300",
            "CACHE_TYPE" => "A",
            "DETAIL_URL" => "",
            "FIELD_CODE" => array(
                0 => "NAME",
                1 => "PREVIEW_PICTURE",
                2 => "",
            ),
            "IBLOCKS" => array(
                0 => "17",
            ),
            "IBLOCK_TYPE" => "about",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "about.galery"
        ),
        false
    );?>
 <!-- end photo-galery_section -->
<div class="current-vacancies_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="current-vacancies_left">
				<div class="current-vacancies_img">
 <img alt="alt" src="/bitrix/templates/metplus/img/static/current-vacancies.png" data-src="/bitrix/templates/metplus/img/static/current-vacancies.png">
				</div>
			</div>
			<div class="current-vacancies_right">
				<div class="top-text">
					 Хотите работать у нас?
				</div>
				<div class="current-vacancies_title">
					 Посмотрите актуальные <span class="min blue-color">вакансии</span>
				</div>
 <a href="" class="main-btn">Смотреть вакансии</a>
			</div>
		</div>
	</div>
</div>
 <!-- end current-vacancies_section -->
</main>
    <!-- end main-content -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>