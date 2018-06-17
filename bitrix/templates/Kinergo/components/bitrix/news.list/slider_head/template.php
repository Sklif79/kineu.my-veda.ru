<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$i=1;
$fin=count($arResult["ITEMS"]);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

if($i==1){echo "<ul class='slider'>";}
	?>

 <li id="<?=$this->GetEditAreaId($arItem['ID']);?>" >
	 <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty){	
	 	$id_inf=$arProperty['ID'];
		//echo $id_inf;
	 	switch ($id_inf) {
	 		case 1:
	 			$img = array('src' => $arProperty['FILE_VALUE']['SRC']);
	 			break;
	 		case 2:
	 			$had = array('val' => $arProperty['VALUE'] );
	 			break;
	 		case 3:
	 			$tex = array('val' => $arProperty['VALUE'] );
	 			break;
	 		case 42:
	 			$sin = array('val' => $arProperty['VALUE'] );
	 			break;
	 		default:
	 			echo 'Непредусмотренны	функционал';
	 			break;
	 	}
?>
		

<?}?>

	<div class='image' style="background-image: url(<?=$img['src']?>)"></div>
		<?if($had['val'] or $tex['val']){?>
						<div class='info'>
							<?if(strlen($sin['val'])>1){
								 ?><span class='label'><?=$sin['val'];?></span>
							<?}?>
							<span class='header'><?=$had['val']?></span>
							<p class='text'><?=$tex['val']?></p>
						</div>
	 <?}?>
	</li>
<?if($fin==$i){
echo "</ul>";
}
$i++;
?>
<?endforeach;?>
