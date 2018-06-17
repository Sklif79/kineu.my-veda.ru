<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();/*?>
<ul class='submenu default-skin' id='submenu'> 
<?
$CURRENT_DEPTH=$arResult["SECTION"]["DEPTH_LEVEL"]+1;
foreach($arResult["SECTIONS"] as $arSection):
   $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
   $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
?>
   <?if($CURRENT_DEPTH<$arSection["DEPTH_LEVEL"]):?>
      <ul>
   <?elseif($CURRENT_DEPTH>$arSection["DEPTH_LEVEL"]):?>
      <?=str_repeat("</ul>", $CURRENT_DEPTH - $arSection["DEPTH_LEVEL"]);?>
      </li>
   <?else:?>
      </li>
   <?endif;?>
   
   <li id="<?=$this->GetEditAreaId($arSection['ID']);?>">
      <a href="<? if($arSection["DEPTH_LEVEL"]==1){echo "#";}else{ echo $arSection["SECTION_PAGE_URL"];}?>"><?=$arSection["NAME"];?></a>
   
   <?$CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];?>
<?endforeach?>

</ul>
</div>
<?*/?>
