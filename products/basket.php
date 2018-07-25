<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?>
<div class="content">
	<div id="scroll-content" style="height: 320px;">
		<div class="left">
 <span class="sm-label"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "17",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></span>
			<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"Catalog_ptrd", 
	array(
		"IBLOCK_TYPE" => "Produkts",
		"IBLOCK_ID" => "3",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"VIEW_MODE" => "LIST",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "#SITE_DIR#/products/#SECTION_CODE_PATH#/",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"COMPONENT_TEMPLATE" => "Catalog_ptrd"
	),
	false
);?>
<div class="right">
			<div class="details">
			<?
			// проверка есть ли у нас вообще товар;
			$allcount=$_SESSION['LUAKOL'];
			if($allcount>0){?>
	<table cellpadding="0" cellspacing="0" class="cat-table tbl-cart">
				<tbody>
				<tr>
					<td>
						 <?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "11",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>
					</td>
					<td> 
						 <?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "39",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>
					</td>
					<td>
						<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "13",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>
					</td>
					<td>
						 <?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "40",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>
					</td>
					<td>
						 <?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "41",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>
					</td>
				</tr>

				<?foreach ( $_SESSION['LU'] as $key => $lui) {?>
					<tr id='tablun_<?=$lui['ID'];?>'>
						<td>
							<div class="image">
 							
								<a href='<? echo $lui['SRC'];?>' data-lightbox="roadtrip">
										<img width='60' src="<?echo $lui['SRC']; ?>" alt='' />
										</a>

							</div>
					</td>
					<td>
						 <?echo $lui['NAME'] ;?>
					</td>
					<td>
 						<a href="<?echo $lui['URL'];?>"><?echo $lui['NAMB'];?></a>
					</td>
					<td id='redtvr_<?=$lui['ID'];?>'>
 						<span class="ne-kol"><?echo $lui['KOLCH']?></span><p onclick="redform(<?=$lui['ID']?>,<?=$lui['KOLCH'];?>)" class="edit"></p>
					</td>
					<td>
						 <p  onclick="del_tovar('<?=$lui['ID'];?>')"  class="delete"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "41",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></p>
					</td>
				</tr>


				<?}?>
				</tbody>
				</table>
				<div id='test777'></div>
				<style>
				.delete , 
				.edit ,
				.save {
				cursor: pointer;
				}
				</style>
				<script>
						function del_tovar(delid){
								var otv=confirm('<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "42",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>');
								if(otv){
									var s='#tablun_'+delid;
									$(s).remove();
									del_id(delid,'del',0);
								}

						}

						function redform(redid,koltvr){
								var vbr='#redtvr_'+redid;
								var hts="<input type='text' id='savef_"+redid+"' class='input-text' value='"+koltvr+"' /><p onclick='saveform("+redid+")' class='save'></p>";
								$(vbr).html(hts);
						}

						function saveform(idsav){
							var ids='#savef_'+idsav;
							var kolt=$(ids).val();
							kolt=parseInt(kolt.replace(/\D+/g,""));
							if(isNaN(kolt)==true){kolt=0;}
							var red="<span class='ne-kol'>"+kolt+"</span><p onclick='redform("+idsav+","+kolt+")' class='edit'></p>";
							var obr='#redtvr_'+idsav;
							$(obr).html(red);
							if(kolt==0){
								del_id(idsav,'del',0);
								var s='#tablun_'+idsav;
								$(s).remove();
							}else{
								del_id(idsav,'red',kolt);
							}
							
						}

						function del_id(idt,par,kol2){
								$.ajax({
 								 type: "POST",
 								 url: "https://<?=$_SERVER['HTTP_HOST']?>/bitrix/templates/Kinergo/components/bitrix/ajax_basket_del.php",
 								 data: "dest="+par+"&id="+idt+"&kol="+kol2,
 								 success: function(response) {
										$("#test777").html(response);
										var gh=$('#LUIAKOL').attr('kolch');
										if(gh==0){
											$(".details").html('<h2><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "43",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></h2>');
										}
									}				  
								});

								
						}		
				</script>

				<h2><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "66",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></h2>

				<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"forms_zakaz", 
	array(
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Your order has been placed, our manager will contact you in 24 hours.",
		"EMAIL_TO" => "info@kinergo.by, edgar@kinergo.by, am@kinergo.by",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		)
	),
	false
);?>

				
			</div>
		
<?}else{?>
<h2><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "43",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></h2>
<?}?>	
</div>
</div>
</div>
<div class="clear">
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>