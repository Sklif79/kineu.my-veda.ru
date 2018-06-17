<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if (!function_exists(cutStr))
{
function cutStr($str, $lenght = 150, $end = ' ...', $charset = 'UTF-8', $token = '~') {
    $str = strip_tags($str);
    if (mb_strlen($str, $charset) >= $lenght) {
        $wrap = wordwrap($str, $lenght, $token);
        $str_cut = mb_substr($wrap, 0, mb_strpos($wrap, $token, 0, $charset), $charset);    
        return $str_cut .= $end;
    } else {
        return $str;
    }
}

function cutStr2($str, $lenght = 150, $charset = 'UTF-8') {
    $str = strip_tags($str);
    if (mb_strlen($str, $charset) >= $lenght) {
        $str_cut = substr($str, $lenght);    
        return $str_cut ;
    } else {
        return '';
    }
}  
}
global $USER;
if ($USER->IsAuthorized()){$aut=1;}else{$aut=-1;}
?>

	<div class='nodes'>
		<ul class='slider2'>
			<? foreach ($arResult['ITEMS'] as $key => $arItems) {

				$textcorob='';
				$arSOVKRB='';
				$text_start='';
				$text_end='';
				$j=0;
				$countS=count($arItems['PROPERTIES']['SOVKRB']['VALUE']);
				$countT=$countS-1;
				if($countS>0){
					foreach ($arItems['PROPERTIES']['SOVKRB']['DESCRIPTION'] as $key => $arSOVKRB) { 
						if($countT!=$j){
							$textcorob.=$arSOVKRB.', ';
							if(strlen($textcorob) <= 55){
									// 1 часть
								$arSovkrb=$arItems['PROPERTIES']['SOVKRB']['VALUE'][$j];
								$text_start.="<a href='".$arSovkrb."'>".$arSOVKRB."</a>, ";
							}else{
									// 2 часть
								$arSovkrb=$arItems['PROPERTIES']['SOVKRB']['VALUE'][$j];
								$text_end.="<a href='".$arSovkrb."'>".$arSOVKRB."</a>, ";
							}
						}else{
							$textcorob.=$arSOVKRB.' ,';
							if(strlen($textcorob) <= 55){
									// 1 часть
								$arSovkrb=$arItems['PROPERTIES']['SOVKRB']['VALUE'][$j];
								$text_start.="<a href='".$arSovkrb."'>".$arSOVKRB."</a>.";
							}else{
									// 2 часть
								$arSovkrb=$arItems['PROPERTIES']['SOVKRB']['VALUE'][$j];
								$text_end.="<a href='".$arSovkrb."'>".$arSOVKRB."</a>.";
							}
						}
						$j++;
					}
				}
?>
		<?
$arWaterMark = Array(  
   array(  
      "name" => "watermark",   
      "position" => "left",    
      "type" => "image",      
	  "fill"=>"repeat",
      "file" => $_SERVER["DOCUMENT_ROOT"]."/upload/_water22.png",  
   ) 
); 
$arResizeFile = CFile::ResizeImageGet( 
         $arItems["PREVIEW_PICTURE"]["ID"], 
         array("width" => 219, 'height' => 156), 
         BX_RESIZE_IMAGE_PROPORTIONAL, 
         true, 
         $arWaterMark 
      ); 
?>		<li class="luitop" >
					<div class='image'>
						<a style="text-align:center;display:inline-block;width:100%" deturl='<?=$arItems['DETAIL_PAGE_URL'];?>' <?if($aut==1){echo "href='".$arItems['DETAIL_PAGE_URL']."'";}else{ echo "href='".$arItems['DETAIL_PAGE_URL']."' class=''";}?>>
							<img src='<?=$arResizeFile['src']//$arItems['PREVIEW_PICTURE']['SRC'];?>' alt='' />
						</a>
					</div>
					<div class='info'>
						<a deturl='<?=$arItems['DETAIL_PAGE_URL'];?>' <?if($aut==1){echo "href='".$arItems['DETAIL_PAGE_URL']."' class='header'";}else{ echo "href='".$arItems['DETAIL_PAGE_URL']."' class='header'";}?> ><?=$arItems['NAME'];?></a>
						<p><? echo cutStr($arItems['PREVIEW_TEXT'],100); ?></p>
						<? if($countS>0){?>
							<span  class='btn-more2'>
								<b style='display:block;'>
									<?$APPLICATION->IncludeComponent(
										"bitrix:highloadblock.view",
										"lang",
										Array(
											"BLOCK_ID" => "3",
											"ROW_ID" => "102",
											"LIST_URL" => ""
										),
									$component, 
									array("HIDE_ICONS" => "Y") 
									);?>
								</b>
								<?
								if($text_end){
									echo $text_start.' ...'; 
								}else{
									echo $text_start; 					
								} 
								?>
								<p>
									<? echo $text_end; ?>
								</p>
							</span>
						<?}?>
					</div>
				</li>
			<?}?>
		</ul>
		<input type="hidden"  id="URAD" URAD="1" >
	</div><!-- / .nodes -->
	<script>			
	function urad1(){
		$(".luitop a").each(function(){
			var cls=$(this).attr('deturl');
			$(this).attr('href',cls);
			$(this).removeClass('login_open');
		});
		$("#col_all_prodk").removeClass('login_open');
		var urk=$("#col_all_prodk").attr('deturl');
		$("#col_all_prodk").attr('href',urk);
	}
	</script>
	<style>
	.btn-more2 {
		display: inline-block;
		height: 60px;
		color: white;
		padding: 5px 10px 0;
		text-decoration: none;
		background-color: #13487c;
		width: 	205px;
	}
	.btn-more2 a{
		display: inline;	
		color: white;
		font-size: 	12px;
	}
	.btn-more2:hover{
		height: 100%;
		min-height: 50px;	
		padding-bottom: 10px;
	}
	.btn-more2>p{
		display: none;
	}
	.btn-more2:hover>p{
		display: inline;
	}
</style>
<script >
$(document).ready(function() {
	function second_passed(){
		$('.bx-viewport').css('height','500px');
	}
	setTimeout(second_passed, 600)
});
</script>


