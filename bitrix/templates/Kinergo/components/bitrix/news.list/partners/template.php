<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id='partners'>
				<ul class='partners'>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	$url=$arItem['PROPERTIES']['URL']['VALUE'];
	$img=$arItem['PREVIEW_PICTURE'];
	?>
	<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">

		<?if($url){?>
			<a href ='<?=$url;?>' target='_blanck'>
		<?}?>
			<img src='<?=$img['SRC'];?>'alt='<?=$img['ALT'];?>' >
		<?if($url){?>
			</a>
		<?}?>
	</li>

<?endforeach;?>

</ul>
			</div>

