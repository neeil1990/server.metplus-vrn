<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(
	\Bitrix\Main\Application::getDocumentRoot() . '/bitrix/blocks/bitrix/59.2.search_sidebar/.description.php'
);
/**
 * @var StoreSalesCenterOrderDetails $classBlock
 */
?>

<section class="landing-block g-pt-15 g-pb-15 g-pl-15 g-pr-15">
	<div class="container">
		<form class="landing-block-node-form input-group g-font-open-sans">
			<input class="form-control g-brd-gray-light-v3 g-brd-primary--focus g-color-gray-dark-v3 g-bg-white g-font-size-13 g-px-20 g-height-45"
				   type="text" name="q">
			<div class="landing-block-node-button input-group-append g-z-index-4 g-bg-black-opacity-0_1 g-color-gray-dark-v4 g-color-primary--hover">
				<button class="btn g-font-weight-600 g-font-size-13 text-uppercase g-pl-20 g-pr-20"
						type="submit">
					<div class="d-none d-md-block"><?=Loc::getMessage("LANDING_BLOCK_59_2-SEARCH")?></div>
					<i class="d-block d-md-none fa fa-search"></i>
				</button>
			</div>
		</form>
	</div>
</section>