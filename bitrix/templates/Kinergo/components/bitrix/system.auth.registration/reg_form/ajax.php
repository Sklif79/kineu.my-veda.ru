<?if($_POST['L_USER_LOGIN']){
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");

if(!$APPLICATION->CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_code"])){
    // Неправильное значение
	echo "<span class='header'>Registration</span>";
	echo "<span style='
    color: rgb(247, 182, 182);
    font-size: 16px;
    margin-bottom: 10px;
    display: block;
'>NO CATCHA</span>";
	include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/Kinergo/components/bitrix/system.auth.registration/reg_form/template.php");
}else{
    // Правильное значение
//регистрация пользователя

global $USER;
	$arResult = $USER->Register($_POST['L_USER_LOGIN'], $_POST['L_USER_NAME'], "", $_POST['L_USER_PASSWORD'], $_POST['L_USER_CONFIRM_PASSWORD'], $_POST['L_USER_EMAIL']);
?>
<br>
<?if($arResult['TYPE']=='OK'){?>

<?
$arEventFields = array(
    "USER_EMAIL"=> $_POST['L_USER_EMAIL'],
	'USER_LOGIN'=>$_POST['L_USER_LOGIN'],
	'USER_PASSWORD'=>$_POST['L_USER_PASSWORD'],
    );
CEvent::SendImmediate("USER_CONGRATULATION",array('s1'), $arEventFields);
?>
<span class='header'>
<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "103",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>
</span>
<script>
	location.href='/';
</script>
		<?}
	}
}
?>

