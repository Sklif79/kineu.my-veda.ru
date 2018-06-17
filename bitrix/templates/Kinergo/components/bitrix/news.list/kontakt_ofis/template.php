<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
$i=1;
$fin=count($arResult["ITEMS"]);
?>


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


if($i==1){echo "<ul class='contacts'>";}
	?>
 <li id="<?=$this->GetEditAreaId($arItem['ID']);?>" >

	 <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty){	
	 	$id_inf=$arProperty['ID'];
	 	switch ($id_inf) {
	 		case 5:
	 			$val1 = $arProperty['VALUE'];
	 			break;
	 		case 6:
	 			$val2= $arProperty['VALUE'];
	 			break;
	 		case 7:
	 			$val3 = $arProperty['VALUE'];
	 			break;
	 		case 8:
	 			$val4 = $arProperty['VALUE'];
	 			break;
	 		case 37:
$file_srx=false;
	 		CModule::IncludeModule('highloadblock');
$rsData = \Bitrix\Highloadblock\HighloadBlockTable::getList(array('filter'=>array('NAME'=>'Flagss')));
if ( !($arData = $rsData->fetch()) ){
    echo 'Инфоблок не найден';
}else{
	$LANG_entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arData);
	//Создадим объект - запрос
$main_query = new \Bitrix\Main\Entity\Query($LANG_entity); 
//Зададим параметры запроса, любой параметр можно опустить
$main_query->setSelect(array('*'));
$main_query->setFilter(array('UF_NAME'=>$arProperty['DISPLAY_VALUE'] ));
$main_query->setOrder(array('UF_SORT' => 'ASC'));
//Выполним запрос
$result = $main_query->exec();
//Получаем результат по привычной схеме
$result = new CDBResult($result);
$row = $result->Fetch();
$file_srx=$row['UF_FILE'];


  if($file_srx!=false){$val5=CFile::GetPath($file_srx);}

}
	 			//$val5 = $arProperty['VALUE'];
	 			break;
	 		case 38:
	 			$lon = $arProperty['VALUE'];
	 			break;
	 		case 40:
	 			$lat = $arProperty['VALUE'];
	 			break;		
	 		default:
	 			echo 'Непредусмотренны	функционал';	  
	 		break;
	}
?>
		
					
<?}?>				<? if($val5!=false){echo "<img style='height:30px;' src='".$val5."' alt=''>";$file_srx=false;$val5=false;}    ?>

					<span class='header'><?=$arItem['NAME']?></span>
	 				<p class='clik_map' onclick='goCenter(<? echo $lon;?>,<? echo $lat;?>)'><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "20",
		"LIST_URL" => ""
	)
);?></p>
	 <p><b><?=$val1;?></b><br/>
					<?=$val2;?><br/> 
					<?=$val3;?><br/>
					<?=$val4;?></p>
					<p><a style="
    margin-top: 10px;
    display: block;
    font-weight: 700;
" href="/contact#battoma"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "21",
		"LIST_URL" => ""
	)
);?></a></p>
	</li>
<?if($fin==$i){
echo "</ul>";
}
$i++;
?>
<?endforeach;?>