<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "basket.small", Array(
    "HIDE_ON_BASKET_PAGES" => "N",	// Не показывать на страницах корзины и оформления заказа
    "POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
    "SHOW_AUTHOR" => "N",	// Добавить возможность авторизации
    "SHOW_EMPTY_VALUES" => "Y",	// Выводить нулевые значения в пустой корзине
    "SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
    "SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
    "SHOW_PRODUCTS" => "N",	// Показывать список товаров
    "SHOW_REGISTRATION" => "N",	// Добавить возможность регистрации
    "SHOW_TOTAL_PRICE" => "N",	// Показывать общую сумму по товарам
    "COMPONENT_TEMPLATE" => ".default_old"
),
    false
);?>