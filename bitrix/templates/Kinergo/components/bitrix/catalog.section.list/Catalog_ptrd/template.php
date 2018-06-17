<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div>
<ul class='submenu default-skin' id='submenu'> 
<?
$CURRENT_DEPTH=$arResult["SECTION"]["DEPTH_LEVEL"]+1;
global $APPLICATION;
$prov2=$APPLICATION->GetCurPage();
$provAR=explode( "/", $prov2);
$prov="/".$provAR[1]."/".$provAR[2]."/";
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
   
   <li id="<?=$this->GetEditAreaId($arSection['ID']);?>"  >
      <a <? if(($arSection["DEPTH_LEVEL"]==1) and ( $prov==$arSection["SECTION_PAGE_URL"] ) ){echo " id='activef' ac='Y' class='active'";} ?>  href="<? if($arSection["DEPTH_LEVEL"]==1){echo "#";}else{ echo $arSection["SECTION_PAGE_URL"];}?>"><?=$arSection["NAME"];?></a>
   <?$CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];?>
<?endforeach?>
</ul><!-- /#submenu -->
<script>
$(document).ready(function(){
	$("#submenu a").each(function(){
		var prov=$(this).attr('ac');
		if(prov=='Y'){
            jQuery('#activef').next('ul').slideToggle('slow', function() {
    			$('#submenu').customScrollbar("resize", true)
   			});
		}
	});
});
</script>
</div><!-- /div-->