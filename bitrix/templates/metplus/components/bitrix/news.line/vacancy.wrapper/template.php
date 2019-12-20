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
$this->setFrameMode(true);
?>
<div class="title-h3"><?=$arResult['BLOCK']['NAME']?></div>
<div class="row wrapper-vacanvy">
    <?foreach($arResult["ITEMS"] as $key => $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="col-md-6">
        <div class="vacancy-item">
            <div class="vacancy-item_title"><?=$arItem['NAME']?></div>
            <span class="vacancy-item_list-title">Обязанности:</span>
            <?=$arItem['PREVIEW_TEXT']?>
            <div class="vacancy-item_hidden">
                <?=$arItem['DETAIL_TEXT']?>
            </div>
            <div class="vacancy-item_more-details">Подробнее</div>
        </div>
    </div>
    <?endforeach;?>
</div>


