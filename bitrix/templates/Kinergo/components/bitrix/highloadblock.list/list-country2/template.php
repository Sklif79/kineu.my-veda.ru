<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult['ERROR']))
{
	echo $arResult['ERROR'];
	return false;
}
global $page;
if(count($arResult['rows'])>0){
	$mas = array();
	foreach ($arResult['rows'] as $k => $v) {
		if($v['UF_ACTIV']=='да'){
			$mas[$v['UF_SORT']]= array('ABR' => $v['UF_ABR'], 'URL'=>$v['UF_URL'],'IMG'=> $v['UF_IMG'] ); 
		}
	}
}
ksort($mas);
$i=1;
if(count($mas)>0){
echo "<ul class='language'>";
foreach ($mas as $k => $v) {
	if($i==1){
	echo "<li class='active'><a href='javascript: void 0;'><span>{$v['ABR']}</span>{$v['IMG']}</a></li>";
	}else{
		echo "<li><a href='{$v['URL']}'><span>{$v['ABR']}</span>{$v['IMG']}</a></li>";
	}
$i++;
}
echo "</ul>";
}
?>