<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<ul class="head-menu">
<?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>
    <?$existPictureDescColomn = ($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] || $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]) ? true : false;?>
    <li class="head-menu_item <? if(count($arColumns) > 0): ?>head-menu_catalog-item<?endif;?>">
        <a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>">
            <span class="head-menu_text"><?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?></span>
        </a>
    <?if (is_array($arColumns) && count($arColumns) > 0):?>

        <div class="dropdown-content is-animation">
            <?foreach($arColumns as $key=>$arRow):?>
                <ul class="dropdown-menu">
                <?foreach($arRow as $itemIdLevel_2=>$arLevel_3):?>
                    <li class="dropdown-menu_item">
                        <a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>">
                            <span class="menu-icon <?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["PARAMS"]["ICON_MENU"]?>"></span>
                            <?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?>
                        </a>
                    <?if (is_array($arLevel_3) && count($arLevel_3) > 0):?>
                    <div class="dropdown-submenu-content">
                        <ul class="dropdown-submenu">
                            <?foreach($arLevel_3 as $itemIdLevel_3):?>
                                <li>
                                    <a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"]?>">
                                        <?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"]?>
                                    </a>
                                </li>
                            <?endforeach;?>
                        </ul>
                        <div class="dropdown-submenu_img">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/menu/01.jpg" alt="alt">
                            <ul class="dropdown-submenu_img-text">
                                <li>
                                    <small>Только у нас</small>
                                    швеллер
                                </li>
                                <li>
                                    <small>по самой</small>
                                    выгодной <br>цене
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?endif?>
                    </li>
                <?endforeach;?>
                </ul>
            <?endforeach;?>
        </div>
    <?endif?>
    </li>
<?endforeach;?>
</ul>
