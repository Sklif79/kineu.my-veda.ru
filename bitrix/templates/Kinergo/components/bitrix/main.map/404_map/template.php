<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->SetTitle("Страница не найдена");
?>
<div class="content">
	<div id="scroll-content" style="height: 320px;">
		<div class="left">
 <span class="sm-label">ВЫБЕРИТЕ ПРОИЗВОДИТЕЛЯ ДЛЯ АКПП:</span>
			<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"Catalog_ptrd",
	Array(
		"IBLOCK_TYPE" => "Produkts",
		"IBLOCK_ID" => "3",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"VIEW_MODE" => "LIST",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "#SITE_DIR#//produktsiya/#SECTION_CODE_PATH#/",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y"
	)
);?>
<div class="right">
			<div class="details">
<h2>Запрашиваемая страница не найдена</h2>
<?





if (!is_array($arResult["arMap"]) || count($arResult["arMap"]) < 1)
	return;

$arRootNode = Array();
foreach($arResult["arMap"] as $index => $arItem)
{
	if ($arItem["LEVEL"] == 0)
		$arRootNode[] = $index;
}

$allNum = count($arRootNode);
$colNum = ceil($allNum / $arParams["COL_NUM"]);

?>
<table class="map-columns">
<tr>
	<td>
		<ul class="map-level-0">

		<?
		$previousLevel = -1;
		$counter = 0;
		$column = 1;
		foreach($arResult["arMap"] as $index => $arItem):?>

			<?if ($arItem["LEVEL"] < $previousLevel):?>
				<?=str_repeat("</ul></li>", ($previousLevel - $arItem["LEVEL"]));?>
			<?endif?>


			<?if ($counter >= $colNum && $arItem["LEVEL"] == 0): 
					$allNum = $allNum-$counter;
					$colNum = ceil(($allNum) / ($arParams["COL_NUM"] > 1 ? ($arParams["COL_NUM"]-$column) : 1));
					$counter = 0;
					$column++;
			?>
				</ul></td><td><ul class="map-level-0">
			<?endif?>

			<?if (array_key_exists($index+1, $arResult["arMap"]) && $arItem["LEVEL"] < $arResult["arMap"][$index+1]["LEVEL"]):?>

				<li><a href="<?=$arItem["FULL_PATH"]?>"><?=$arItem["NAME"]?></a><?if ($arParams["SHOW_DESCRIPTION"] == "Y" && strlen($arItem["DESCRIPTION"]) > 0) {?><div><?=$arItem["DESCRIPTION"]?></div><?}?>
					<ul class="map-level-<?=$arItem["LEVEL"]+1?>">

			<?else:?>

					<li><a href="<?=$arItem["FULL_PATH"]?>"><?=$arItem["NAME"]?></a><?if ($arParams["SHOW_DESCRIPTION"] == "Y" && strlen($arItem["DESCRIPTION"]) > 0) {?><div><?=$arItem["DESCRIPTION"]?></div><?}?></li>

			<?endif?>


			<?
				$previousLevel = $arItem["LEVEL"];
				if($arItem["LEVEL"] == 0)
					$counter++;
			?>

		<?endforeach?>

		<?if ($previousLevel > 1)://close last item tags?>
			<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
		<?endif?>

		</ul>
	</td>
</tr>
</table>


	
</div>
</div>
</div>
<div class="clear">
</div>












