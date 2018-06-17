<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arResult["FORM_TYPE"] == "login"){?>
<span class='enter'><a href='#' class='login_open'><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "64",
		"LIST_URL" => "",
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></a></span>
<span class='register'><a href='#' id='reg_open' class='register_open'><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "52",
		"LIST_URL" => "",
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></a></span>
<?}else{?>
   <span class='enter'> <?=$arResult["USER_NAME"]?> </span>
   <span class='register'><a href='?logout=yes' style=" margin-left: 10PX;"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "65",
		"LIST_URL" => "",
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></a></span>
<?}?> 