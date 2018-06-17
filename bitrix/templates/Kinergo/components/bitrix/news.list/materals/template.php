<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $USER;
if ($USER->IsAuthorized()){$aut=1;}else{$aut=-1;}
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
<div class='image'><a href=''><img src='<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>' alt='<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>' /></a></div><div class='info'>
							
						
							<?$rashr=$arItem['DISPLAY_PROPERTIES']['FILEMATERL']['FILE_VALUE']['FILE_NAME'];
							$rashr=explode(".", $rashr);
							$fil_sz=$arItem['DISPLAY_PROPERTIES']['FILEMATERL']['FILE_VALUE']['FILE_SIZE'];
							$url_downlodd_file=$arItem['DISPLAY_PROPERTIES']['FILEMATERL']['FILE_VALUE']['SRC'];//ссылка на скачку файла
							$fil_sz=round($fil_sz/1000);
							?>	

							<a <?if($aut==1){echo "target='_blank'   href='$url_downlodd_file'";}else{ echo "href='#' deturl='".$url_downlodd_file."' target='_blank'   class='login_open'";}?> >
							 <?echo $arItem["NAME"]?>
							 </a>
							<span><b>.<?echo $rashr[1];?></b>, <? echo $fil_sz;?>КБ</span>
							
						</div>				
					</li>

<?endforeach;?>
<script>			
			function urad3(){
				$("a").each(function(){
					var cls=$(this).attr('deturl');	
						if(cls){
								$(this).attr('href',cls);
								$(this).removeClass('login_open');
						}
					
				});
			}
			</script>