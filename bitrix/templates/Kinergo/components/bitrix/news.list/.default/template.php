<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id='center'>
			<div class='content'>
				<ul class='article'>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	if($arItem['PROPERTIES']['VVDIND']['VALUE_XML_ID']=='Y'){

		if($arItem['PROPERTIES']['PKRAZDL']['VALUE']!=''){$arItem["DETAIL_PAGE_URL"]=$arItem['PROPERTIES']['PKRAZDL']['VALUE'];}

	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">

<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<div class='image'><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"

						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/></a></div>
			<?endif;?>
		<?endif?>


			<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>				
			<div class='info'>
<a class="indexa" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
			<?else:?>
			<div class='info'>
<a class="indexa" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
			<?endif;?>
		<?endif;?>


		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
		<p><?echo $arItem["PREVIEW_TEXT"];?></p>
		</div>
		<?endif;?>




	</li>

<?
}//end if 
endforeach;
?>

</ul>
			</div>
		</div>

