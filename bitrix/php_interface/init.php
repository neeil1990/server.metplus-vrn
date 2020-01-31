<?php

function priceDiscount($id){
    global $USER;
    $ar_res_price = CCatalogProduct::GetOptimalPrice($id, 1, $USER->GetUserGroupArray(), 'N');
    if($ar_res_price['DISCOUNT_PRICE'])
        return $ar_res_price;
    else
        return false;

}

function getGroupPriceForProduct($PriceID, $productID){
    if(empty($PriceID) || empty($productID))
        return false;

    $db_res = CPrice::GetList(array(), array("PRODUCT_ID" => $productID, "CATALOG_GROUP_ID" => $PriceID));
    if ($ar_res = $db_res->Fetch())
        return CurrencyFormat($ar_res["PRICE"], $ar_res["CURRENCY"]);
}

function isDebug(){
    $config = \Bitrix\Main\Config\Configuration::getInstance();
    $configConnections = $config->get("exception_handling");
    if($configConnections['debug'])
        return false;

    return true;
}
