<ul>
<?
global $USER;
if ($USER->IsAuthorized()){$aut=1;}else{$aut=-1;}
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<? if($aut==1){?>
<iframe width="310" height="205" src="https://www.youtube.com/embed/<?=$arItem['PROPERTIES']['VIDEOYOUTUBE']['VALUE'];?>" frameborder="0" allowfullscreen></iframe>
<a target='_blanck' href='https://www.youtube.com/watch?v=<?=$arItem['PROPERTIES']['VIDEOYOUTUBE']['VALUE'];?>'><?=$arItem['NAME'];?></a>
	<? }else{ ?>
			<img src='<?=$arItem['DISPLAY_PROPERTIES']['FOTONOAUT']['FILE_VALUE']['SRC'];?>'>
	<?}?>
</li>
<?endforeach;?>
</ul>
<div class='pag'>
<div class='pag'>
				<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
</div>

