<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

if(count($arResult['PATH']) > 0){
    foreach (array_reverse($arResult['PATH']) as $section){
        if($curSec = CIBlockSection::GetList(Array( $by => $order), Array('IBLOCK_ID' => $section['IBLOCK_ID'], 'ID' => $section['ID']), false, array('NAME','UF_WEIGHT'))->GetNext())
            if(strlen(trim($curSec['UF_WEIGHT'])) > 0){
                $arResult['WEIGHT'] = $curSec['UF_WEIGHT'];
                break;
            }
    }
}