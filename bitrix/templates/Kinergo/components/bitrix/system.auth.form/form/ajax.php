<?
if($_POST['USER_PASSWORD']){
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 	
global $USER;
$arAuthResult = $USER->Login($_POST['USER_LOGIN'],$_POST['USER_PASSWORD'], "Y","Y");
	if($arAuthResult==1){
$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "63",
		"LIST_URL" => ""
	)
);
	echo "<input id='errL2' type='hidden' err='N'>";
?>
<script>
$(document).ready(function() {
	location.href='/';
});
</script>
<?
	}else{
	$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "94",
		"LIST_URL" => ""
	)
);
	}
}
?>



