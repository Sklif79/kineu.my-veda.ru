<?
if($_POST['LUI']=='Y'){
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
global $USER;
?>
<span class='enter'><? echo $USER->GetLogin();?></span><span class='register'><a href='?logout=yes' ><?$APPLICATION->IncludeComponent(
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
<div class='register_close'></div>
<?}?>
