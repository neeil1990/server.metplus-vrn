<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(false);
?>
<div class="gost-section">
    <div class="container">
        <div class="gost-section_header">
            <div class="left-column">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "flat",
                    Array(
                        "PAGE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["search"]
                    ),
                    $component
                );?>
            </div>
            <div class="right-column">
                <form action="#" class="form-static_small">
                    <div class="form-static_small_title">Остались вопросы?</div>
                    <span class="text">Оставьте заявку на обратный звонок и мы вам перезвоним!</span>
                    <div class="row">
                        <div class="form-column">
                            <div class="form-group">
                                <input type="text" class="form-input" placeholder="Введите имя *">
                            </div>
                        </div>
                        <div class="form-column">
                            <div class="form-group">
                                <input type="tel" class="form-input" placeholder="Телефон *">
                            </div>
                        </div>
                        <div class="form-column">
                            <input type="submit" class="form-static_small-submit main-btn" value="Перезвонить">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:search.page",
            "",
            Array(
                "CHECK_DATES" => $arParams["CHECK_DATES"]!=="N"? "Y": "N",
                "arrWHERE" => Array("iblock_".$arParams["IBLOCK_TYPE"]),
                "arrFILTER" => Array("iblock_".$arParams["IBLOCK_TYPE"]),
                "SHOW_WHERE" => "N",
                "RESTART" => "Y",
                "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                "CACHE_TIME" => $arParams["CACHE_TIME"],
                "SET_TITLE" => $arParams["SET_TITLE"],
                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                "LIST_PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
                "arrFILTER_iblock_".$arParams["IBLOCK_TYPE"] => Array($arParams["IBLOCK_ID"])
            ),
            $component
        );?>
        <p><a href="<?=$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"]?>"><?=GetMessage("T_NEWS_DETAIL_BACK")?></a></p>
    </div>
</div>

