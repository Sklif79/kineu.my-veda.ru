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
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>


  <?$dat=$arItem['FIELDS']['DATE_CREATE'];
  $dat=strtotime($dat);
  $day = date("j" ,$dat);
  $month = $monthes[date("n",$dat)];

	$year=date("Y" ,$dat);
  $dat=$day.' '.$month.' '.$year;
  ?>
	<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class='image'><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="123"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/></a>
				</div>
<div class='info'>
<span class="date"><?=$dat;?></span>		
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class='header'><?echo $arItem["NAME"]?></a>
<p><?echo $arItem["PREVIEW_TEXT"];?></p>
						<a href='<?=$arItem["DETAIL_PAGE_URL"]?>' class='about'><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "8",
		"LIST_URL" => ""
	)
);?></a>
					</div>
		</li>
<?endforeach;?>
