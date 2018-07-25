<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "You can find torque converter parts of different transmission manufacturer on Kinergo.eu. To find out more please contact ☎ +1 949 333 3800.");
$APPLICATION->SetPageProperty("keywords", "torque converter parts, parts of a torque converter, torque converter parts supplier");
$APPLICATION->SetPageProperty("Kinergo", "Torque Converter Parts | Supplier of Racing Torque Converter Clutch Parts");
$APPLICATION->SetPageProperty("title", "Torque Converter Parts | Supplier of Racing Torque Converter Clutch Parts");
$APPLICATION->SetTitle("Torque converter parts");
?><?
global $USER;
if ($USER->IsAuthorized()){$aut=1;}else{$aut=-1;}
$page = $APPLICATION->GetCurPage();
$levl=count(explode("/", $page ));
?>
<div class="content">
	<div class="big-search">
<form method="GET" action="https://<?=$_SERVER['HTTP_HOST'];?>/sreach.php">
 <input type="text" class="input-text" name='q' placeholder="<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "50",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>"><input type="submit" class="btn-search" value="">
</form>
	</div>
	<?$all_zap_hed=$_SESSION['LUAKOL'];
	if($all_zap_hed==''){$all_zap_hed=0;}?>
	<a deturl='http://<?=$_SERVER['HTTP_HOST']?>/produktsiya/basket.php' <?if($aut==1){?>href="http://<?=$_SERVER['HTTP_HOST']?>/products/basket.php" class="cart"<?}else{?>
	class="cart login_open" href="#" <?}?>
	 id='col_all_prodk' ><span><?=$all_zap_hed;?> <?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "47",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></span></a>
	<?if($levl!=5){?>
</div>
<?}?> 
<?if($levl==3){?>
<div class="text-block">
<h1 style="text-align:center;margin-bottom:0px;">Torque Converter Parts</h1>
	<div class="content">
		 <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
	"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "nnn",
		"EDIT_TEMPLATE" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
	</div>
</div>
 <?}?>

<?if($levl!=5){?>
<div class="content">
<?}?> 


	<div id="scroll-content" style="height: 320px;">
		<div class="left">
			 <span class="sm-label"><?$APPLICATION->IncludeComponent(
				"bitrix:highloadblock.view",
				"lang",
				Array(
					"BLOCK_ID" => "3",
					"ROW_ID" => "17",
					"LIST_URL" => ""
				),
			$component, 
			array("HIDE_ICONS" => "Y") 
			);?></span>
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "template1", Array(
				"AREA_FILE_SHOW" => "page",	// Показывать включаемую область
					"AREA_FILE_SUFFIX" => "leftmenu",	// Суффикс имени файла включаемой области
					"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
				),
				false
			);?>
		</div><!-- /.left-->
		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"Catalog_rgtf", 
	array(
		"IBLOCK_TYPE" => "Produkts",
		"IBLOCK_ID" => "3",
		"TEMPLATE_THEME" => "wood",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DETAIL_BRAND_USE" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"USE_COMPARE" => "N",
		"PRICE_CODE" => array(
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "N",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"SHOW_TOP_ELEMENTS" => "Y",
		"TOP_ELEMENT_COUNT" => "10",
		"TOP_LINE_ELEMENT_COUNT" => "10",
		"TOP_ELEMENT_SORT_FIELD" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "desc",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_PROPERTY_CODE" => array(
			0 => "SOVKRB",
			1 => "",
		),
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "2",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"PAGE_ELEMENT_COUNT" => "30",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "",
		"ELEMENT_SORT_ORDER" => "",
		"ELEMENT_SORT_FIELD2" => "",
		"ELEMENT_SORT_ORDER2" => "",
		"LIST_PROPERTY_CODE" => array(
			0 => "NCATALOG",
			1 => "NPICT",
			2 => "SOVKRB",
			3 => "FILEPDF",
			4 => "",
		),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "NCATALOG",
			1 => "NPICT",
			2 => "SOVKRB",
			3 => "SVFL",
			4 => "FILEPDF",
			5 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "H",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "3",
		"LINK_PROPERTY_SID" => "SOVKRB",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_STORE" => "N",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"TOP_VIEW_MODE" => "BANNER",
		"TOP_ROTATE_TIMER" => "30",
		"DETAIL_USE_COMMENTS" => "N",
		"SEF_FOLDER" => "/products/",
		"AJAX_OPTION_ADDITIONAL" => "",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"COMPONENT_TEMPLATE" => "Catalog_rgtf",
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"SHOW_DEACTIVATED" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?>

	</div><!-- /#scroll-content -->
 <br>
 <br>
 <br>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>