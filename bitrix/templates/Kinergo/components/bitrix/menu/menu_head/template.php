<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class='menu'>

<ul>
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a   <? if($arItem["LINK"]=='/products/'){echo "href='#'";}else{ echo "href='".$arItem["LINK"]."'"; }?> class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>


<div class="share-new"><a class="icon-facebook" href="https://www.facebook.com/kinergo.equipment/?fref=ts" target="_blank"></a></div>
<div class="share-new" style="margin-top: 6px;"><a href="https://www.youtube.com/channel/UCB3eSASP7xa4LTy1-qITKJQ" target="_blank"><img class="alignleft wp-image-290" src="https://kinergo.ru/bitrix/images/youtube.png" width="32" /></a></div>
<div class="share-new" style="margin-top: 6px;"><a href="https://www.instagram.com/kinergo.equipment/" target="_blank"><img class="alignleft wp-image-290" src="https://kinergo.ru/bitrix/images/instagram.png" width="32" height="32" /></a></div>


<form class='search' method='GET' action="https://<?=$_SERVER['HTTP_HOST']?>/sreach.php" >
						<input type='text' name='q'  class='input-text' required placeholder='<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "51",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>' />
						<input type='submit' class='btn-submit' value='' />
					</form>
