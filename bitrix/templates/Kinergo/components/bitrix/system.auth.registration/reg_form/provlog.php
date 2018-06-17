<?
if($_GET['L_USER_LOGIN']){
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
global $USER;
$UserLogin = $_GET['L_USER_LOGIN'];
$rsUser = CUser::GetByLogin($UserLogin);
$rsUser=$rsUser->Fetch();
if($rsUser['ID']){
echo 'false';
}else{
echo 'true';
}
}
?>