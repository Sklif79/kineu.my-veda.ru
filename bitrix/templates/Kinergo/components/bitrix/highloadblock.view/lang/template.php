<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult['ERROR']))
{
	echo $arResult['ERROR'];
	return false;
}
echo $arResult['row']['UF_LN'];

