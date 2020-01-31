<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

$this->setFrameMode(true);

if(!count($arResult['ITEMS']))
    return false;
?>


<table class="product-table" id="product-table">
    <thead>
        <tr>
            <? foreach ($arResult['FIELDS'] as $field):?>
            <th><?=$field?></th>
            <? endforeach;?>
        </tr>
    </thead>
    <tbody>
        <? foreach ($arResult['ITEMS'] as $arItem):
            $priceGroup = getGroupPriceForProduct(16, $arItem['ID']);
            $price = array_map(function($val){
                return $val['PRINT_PRICE'];
            }, $arItem['ITEM_PRICES']);
            ?>
        <tr>
            <td class="product-table_first-cell">
                <span class="product-item_name <? if($arItem['CATALOG_QUANTITY'] < 1000):?>product-item_name-mod<?endif;?>">
                    <?=htmlspecialchars_decode(preg_replace(array('|[\s]+|s','/\(|\)/'), array(' ', '"'), trim($arItem['NAME'])))?>
                </span>
                <span class="product-availability">В наличии на складе.</span>
                <div class="product-item_popup">
                    <div class="product-item_popup-close"><span class="glipf-reset"></span></div>
                    <ul class="product-item_popup-list">
                        <li>
                            <strong>Наименование товара</strong>
                            <span class="product-item_name"><?=htmlspecialchars_decode(preg_replace(array('|[\s]+|s','/\(|\)/'), array(' ', '"'), trim($arItem['NAME'])))?></span>
                        </li>
                        <li>
                            <strong>Марка Стали</strong>
                            <?=$arItem['PROPERTIES']['TYPE_METALL']['VALUE']?>
                        </li>
                        <li>
                            <strong>Вес</strong>
                            <?=$arItem['PROPERTIES']['_3_VESPMSAYT']['VALUE']?>
                        </li>
                        <li>
                            <strong>Цена руб/кг (с НДС)</strong>
                            <?=$priceGroup?>
                        </li>
                        <li>
                            <strong>Порезка, руб</strong>
                            <?=CurrencyFormat($arItem['PROPERTIES']['PRICE_CUTTING']['VALUE'], $arItem['ITEM_PRICES'][0]['CURRENCY']);?>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="main-btn product-item_buy-btn">Купить</a>
                </div>
            </td>
            <td><?=$arItem['PROPERTIES']['TYPE_METALL']['VALUE']?></td>
            <td><?=$arItem['PROPERTIES']['_3_VESPMSAYT']['VALUE']?></td>
            <td><?=$priceGroup?></td>
            <td><?=CurrencyFormat($arItem['PROPERTIES']['PRICE_CUTTING']['VALUE'], $arItem['ITEM_PRICES'][0]['CURRENCY']);?></td>
            <td><?=implode(', ', $price)?></td>
            <td>
                <a href="javascript:void(0)" class="product-item_cart-btn main-btn" id="<?=$arItem['ID']?>"><span class="glipf-cart"></span></a>
            </td>
        </tr>
        <?endforeach;?>
    </tbody>
</table>

<div class="row">
    <div class="col-md-4">
        <div class="product-availability_text">— наличие товара на складе</div>
    </div>
    <div class="col-md-8">
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <?=$arResult["NAV_STRING"]?>
        <?endif;?>
    </div>
</div>