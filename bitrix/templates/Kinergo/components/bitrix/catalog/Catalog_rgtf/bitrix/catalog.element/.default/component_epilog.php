<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */
global $APPLICATION;
$section_id = $arResult['IBLOCK_SECTION_ID'];
$res = CIBlockSection::GetByID($section_id);
if(strpos($APPLICATION->GetCurUri(),'?') !== false)
	$uri = stripos($APPLICATION->GetCurUri(),'?',true);
else
	$uri = $APPLICATION->GetCurUri();
if($ar_res = $res->GetNext())
	$APPLICATION->AddHeadString('<link rel="canonical" href="https://kinergo.eu'.$ar_res['SECTION_PAGE_URL'].basename($uri).'/" />',true);
if (isset($templateData['TEMPLATE_THEME']))
{
	$APPLICATION->SetAdditionalCSS($templateData['TEMPLATE_THEME']);
}
if (isset($templateData['JS_OBJ']))
{
?>
<script type="text/javascript">
BX.ready(
	BX.defer(function(){
		if (!!window.<? echo $templateData['JS_OBJ']; ?>)
		{
			window.<? echo $templateData['JS_OBJ']; ?>.allowViewedCount(true);
		}
	})
);
</script>
<?
}
?>