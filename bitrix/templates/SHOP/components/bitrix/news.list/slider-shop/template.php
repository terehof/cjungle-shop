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




 <div class="shop__slider__wrap">
	<div class="shop__arrow shop__arrow_left" id="shop-arrow-left">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/arrow-hover.png" class="hover" alt="">
	</div>
	<div class="shop__slider" id="shop-slider">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="slider__item"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"></div>
		<?endforeach;?>
	</div>
	<div class="shop__arrow shop__arrow_right" id="shop-arrow-right">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/arrow-hover.png" class="hover" alt="">
	</div>
</div>




