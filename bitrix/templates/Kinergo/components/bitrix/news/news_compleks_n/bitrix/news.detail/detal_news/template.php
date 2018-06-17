<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

 <?
  
// $monthes = array('','января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря');

CModule::IncludeModule('highloadblock');
$rsData = \Bitrix\Highloadblock\HighloadBlockTable::getList(array('filter'=>array('NAME'=>'Lang')));
if ( !($arData = $rsData->fetch()) ){
    echo 'Инфоблок не найден';
}
$LANG_entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arData);
$main_query = new \Bitrix\Main\Entity\Query($LANG_entity);
$main_query->setSelect(array('*'));
$main_query->setFilter(array('ID'=> array(80,81,82,83,84,85,86,87,88,89,90,91)));
$result = $main_query->exec();
$result = new CDBResult($result);
$monthes[]='';
while ($row = $result->Fetch()){
$monthes[]=$row['UF_LN'];
}
  $dat=$arResult['FIELDS']['DATE_CREATE'];
  $dat=strtotime($dat);
  $day = date("j" ,$dat);
  $month = $monthes[date("n",$dat)];

 	$year=date("Y" ,$dat);
  $dat=$day.' '.$month.' '.$year;
  ?>


<div class='content'>
			<div class='design'>
<div class='image'><a href='<?=$arResult['DETAIL_PICTURE']['SRC'];?>' data-lightbox="roadtrip"><img src='<?=$arResult['DETAIL_PICTURE']['SRC'];?>' width="236" alt='' /></a></div>
				<h1><?=$arResult['NAME'];?></h1>


				<span class="date"><?=$dat;?></span>
				<?=$arResult['DETAIL_TEXT'];?>
				</div>

		</div>
		<div class='clear'></div>
	</div>

	
	  
