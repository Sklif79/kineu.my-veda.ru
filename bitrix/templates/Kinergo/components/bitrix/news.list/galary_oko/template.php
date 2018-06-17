<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	$imgs=$arItem['DISPLAY_PROPERTIES']['IMG_OKM']['FILE_VALUE']['SRC'];
	?>

 <li id="<?=$this->GetEditAreaId($arItem['ID']);?>" >

<a href='<?=$imgs?>' data-lightbox="roadtrip"><img style="height:154px;" src='<?=$imgs?>' alt='' /></a>

</li>

<?endforeach;?>
