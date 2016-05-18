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
<h1>Каталог мебели</h1>
<?//echo "<pre>"; print_r($arResult); echo "</pre>";?>
<div class="shop-items">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<? $i = 0; ?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="shop-items__item__wrap">
	   <div class="shop-items__item">
	       <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
	       <span class="shop-items__item__text">
	       	<?if(!empty($arItem ["DISPLAY_PROPERTIES"]["NAME_FURNITURE"]["VALUE"])):?>
	         	<?=$arItem ["DISPLAY_PROPERTIES"]["NAME_FURNITURE"]["VALUE"]?> <b><?=$arItem ["DISPLAY_PROPERTIES"]["NAME_FURNITURE"]["DESCRIPTION"]?></b><br>
	        <?endif?>
	        <?if(empty($arItem ["DISPLAY_PROPERTIES"]["NAME_FURNITURE"]["VALUE"])):?>
	         	<?echo $arItem["NAME"]?> <br>
	        <?endif?>
	         <?=$arItem ["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?>
	       </span>
	       <span class="shop-items__item__order">
	        <button class="download_btn order-btn" href="#order-form-<? echo $i; ?>">Заказать</button>
	        <div id="order-form-<? echo $i; ?>" class="white-popup mfp-with-anim mfp-hide">
	            <div class="order-form__row">
	                <div class="order-form__row__col order-form__row__col_image">
	                    <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="">
	                    <div class="form">
	                        <form method="post" action="" class="order-form-send" >
	                            <input name="name" style="height:28px" type="text" maxlength="30" placeholder="Имя*" pattern="[A-Za-zА-Яа-яЁё]{2,30}" required>
	                            <input name="phone" style="height:28px" type="text" maxlength="12" placeholder="Телефон*"  required>
	                            <input name="email" style="height:28px" type="text" maxlength="30" placeholder="E-mail*" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
	                            <textarea name="message" maxlength="500" maxlength="10" placeholder="Название модели и количество*"></textarea>
	                            <button class="download_btn send-form-btn" type="submit">Отправить</button>
	                        </form>
	                    </div>
	                </div>
	                <div class="order-form__row__col order-form__row__col_text">
	                    <span class="order-form__row__col_text_title">
	                        <?if(!empty($arItem ["DISPLAY_PROPERTIES"]["NAME_FURNITURE"]["VALUE"])):?>
					         	<?=$arItem ["PROPERTIES"]["NAME_FURNITURE"]["VALUE"]?> <b><?=$arItem ["DISPLAY_PROPERTIES"]["NAME_FURNITURE"]["DESCRIPTION"]?></b><br>
					        <?endif?>
					        <?if(empty($arItem ["PROPERTIES"]["NAME_FURNITURE"]["VALUE"])):?>
					         	<?echo $arItem["NAME"]?> <br>
					        <?endif?>
					        <?=$arItem ["PROPERTIES"]["PRICE"]["VALUE"]?>
	                    </span>
	                    <p class="order-form__row__col_text_p">
	                    	<?if(!empty($arItem ["PROPERTIES"]["MATERIAL"]["VALUE"])):?>
	                    		<?=$arItem ["PROPERTIES"]["MATERIAL"]["NAME"]?>: <?=$arItem ["PROPERTIES"]["MATERIAL"]["VALUE"]?><br>
	                    	<?endif?>
	                    	<?if(!empty($arItem ["PROPERTIES"]["PROFILE"]["VALUE"])):?>
	                    		<?=$arItem ["PROPERTIES"]["PROFILE"]["NAME"]?>: <?=$arItem ["PROPERTIES"]["PROFILE"]["VALUE"]?>
	                    	<?endif?>

							<?if (count($arItem["PROPERTIES"]["ADD"]["VALUE"]) > 0) {
		                        foreach ($arItem["PROPERTIES"]["ADD"]["VALUE"] as $key => $other_prop) {?>
		                           <br> <?=$other_prop;?>: <?=$arItem["PROPERTIES"]["ADD"]["DESCRIPTION"][$key];?>
		                        <?}
		                    }?>
	                    </p>
	                    <p class="order-form__row__col_text_p">
						Оформите заказ у нашего менеджера по телефону: <b><a href="tel:+79089933619">+7(908) 993-36-19</a></b> <br>или по почте: <b><a href="mailto:mail@cjungle.com">mail@cjungle.com</a></b>
	                   </p>
	                    <button class="download_btn order-form-btn toggle-form-btn">Форма заказа</button>
	                </div>
	            </div>
	        </div>
	       </span>
	   </div>
	</div>
<? $i++; ?>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>




