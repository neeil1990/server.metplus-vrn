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

if(!count($arResult['SECTIONS']))
    return false;

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="title-h3 title-h3_mod"><?=$arResult['SECTION']['NAME'];?></div>
<div class="row">
    <? foreach ($arResult['SECTIONS'] as &$arSection):
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        ?>
        <div class="col-md-6 subcategory-column">
            <div class="subcategory-item">
                <a href="<?=$arSection['SECTION_PAGE_URL']?>">
                    <span class="subcategory-item_img">
                        <? if($arSection['PICTURE']): ?>
                            <img data-src="<?=$arSection['PICTURE']['SRC']?>" alt="<?=$arSection['NAME']?>">
                        <? endif; ?>
                    </span>
                    <span class="subcategory-item_name"><?=$arSection['NAME']?></span>
                </a>
            </div>
        </div>
    <?endforeach;?>
</div>

<div class="unified-text-section"><?=$arResult['SECTION']['DESCRIPTION'];?></div>



