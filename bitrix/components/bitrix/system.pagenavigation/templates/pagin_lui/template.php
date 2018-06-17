<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$ClientID = 'navigation_'.$arResult['NavNum'];

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}
?>
<ul class='pagination'>
<?
$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
if($arResult["bDescPageNumbering"] === true)
{
	


	
	
}
else
{
	

	?>
		
	<?
	$bFirst = true;
	$bPoints = false;
	do
	{
		if ($arResult["nStartPage"] <= 2 || $arResult["nEndPage"]-$arResult["nStartPage"] <= 1 || abs($arResult['nStartPage']-$arResult["NavPageNomer"])<=2)
		{

			if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
	?>
			<li><a href='' class='active'><?=$arResult["nStartPage"]?></a></li>
	<?
			elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
	?>
<li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li>
	<?
			else:
	?>
<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
	<?
			endif;
			$bFirst = false;
			$bPoints = true;
		}
		else
		{
			if ($bPoints)
			{
	?>...<?
				$bPoints = false;
			}
		}
		$arResult["nStartPage"]++;
	} while($arResult["nStartPage"] <= $arResult["nEndPage"]);
}

if ($arResult["bShowAll"]):
	if ($arResult["NavShowAll"]):
?>
<li><a class="nav-page-pagen" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0"><?=GetMessage("nav_paged")?></a></li>
<?
	else:
?>
<li><a class="nav-page-all" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_all")?></a></li>
<?
	endif;
endif;
?>
</ul> 



<?CJSCore::Init();?>
<script type="text/javascript">
	BX.bind(document, "keydown", function (event) {

		event = event || window.event;
		if (!event.ctrlKey)
			return;

		var target = event.target || event.srcElement;
		if (target && target.nodeName && (target.nodeName.toUpperCase() == "INPUT" || target.nodeName.toUpperCase() == "TEXTAREA"))
			return;

		var key = (event.keyCode ? event.keyCode : (event.which ? event.which : null));
		if (!key)
			return;

		var link = null;
		if (key == 39)
			link = BX('<?=$ClientID?>_next_page');
		else if (key == 37)
			link = BX('<?=$ClientID?>_previous_page');

		if (link && link.href)
			document.location = link.href;
	});
</script>


