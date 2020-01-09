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


<table class="product-table">
    <tr>
        <th>
            Наименование товара, <span class="min">размер (мм)</span>
        </th>
        <th>Марка Стали</th>
        <th>Вес пм</th>
        <th>Цена руб/кг <span class="min">(с НДС)</span></th>
        <th>Порезка, руб</th>
        <th>Купить</th>
    </tr>
    <tr>
        <td colspan="6" class="product-table_form-search">
            <form action="#" class="product_form-search">
                <input type="text" class="product_form-search_input" placeholder="Введите название или марку стали">
                <div class="wrapper_submit-btn">
                    <span class="glipf-search"></span>
                    <input type="submit" class="form-search_submit-btn"  value="">
                </div>
            </form>
        </td>
    </tr>
    <? foreach ($arResult['ITEMS'] as $arItem):
        $price = array_map(function($val){
            return $val['PRICE'];
        }, $arItem['ITEM_PRICES']);
        ?>
    <tr>
        <td class="product-table_first-cell">
            <span class="product-item_name <? if($arItem['CATALOG_QUANTITY'] < 1000):?>product-item_name-mod<?endif;?>"><?=$arItem['NAME']?></span>
            <span class="product-availability">В наличии на складе.</span>
            <div class="product-item_popup">
                <div class="product-item_popup-close"><span class="glipf-reset"></span></div>
                <ul class="product-item_popup-list">
                    <li>
                        <strong>Наименование товара</strong>
                        <span class="product-item_name">Балка двутавровая №10 (12)</span>
                    </li>
                    <li>
                        <strong>Марка Стали</strong>
                        С255/3сп-5
                    </li>
                    <li>
                        <strong>Вес пм</strong>
                        9.46
                    </li>
                    <li>
                        <strong>Цена руб/кг (с НДС)</strong>
                        59.30
                    </li>
                    <li>
                        <strong>Порезка, руб</strong>
                        30
                    </li>
                </ul>
                <a href="" class="main-btn product-item_buy-btn">Купить</a>
            </div>
        </td>
        <td><?=$arItem['PROPERTIES']['TYPE_METALL']['VALUE']?></td>
        <td><?=$arItem['PROPERTIES']['_3_VESPMSAYT']['VALUE']?></td>
        <td><?=implode(', ', $price)?></td>
        <td><?=$arItem['PROPERTIES']['PRICE_CUTTING']['VALUE']?></td>
        <td>
            <a href="javascript:void(0)" class="product-item_cart-btn main-btn" id="<?=$arItem['ID']?>"><span class="glipf-cart"></span></a>
        </td>
    </tr>
    <?endforeach;?>
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