<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true){
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 	
};
global $USER;
if($_POST['bf_emal']){ 
 session_start();
?>
<h3><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "67",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></h3>
<a href='/' class='btn-home'><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "68",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></a>
<?/*
echo '<!--<pre>';
print_r($_POST);
print_r($_SESSION['LU']);
echo '</pre>-->';*/
?>
<?
if(count($_SESSION['LU'])>0){
	$ZAKAZ="<table cellpadding='0' width='30%' cellspacing='0'>";
	$ZAKAZ.="<tbody><tr><td>Ваш заказ</td><td>№ Запчасти</td><td>Количество</td></tr>";
	foreach ( $_SESSION['LU'] as $key => $lui) {
		$ZAKAZ.="<tr><td>".$lui['NAME']."</td>";
		$ZAKAZ.="<td><a href='https://kinergo.eu".$lui['URL']."''>".$lui['NAMB']."</a></td>";
		$ZAKAZ.="<td><span >".$lui['KOLCH']."</span></td></tr>";
	}
	$ZAKAZ.="</tbody></table>";
	$arEventFields = array(
    	"ZAKAZ"=>$ZAKAZ,
    	"EMAIL"=>$_POST['bf_emal'],
    	"PHONE"=> $_POST['bf_phone'],
    	"FIO"=> $_POST['bf_fio'],
    	"COMPANY"=> $_POST['bf_orgn'],
    	"JOB"=> $_POST['bf_dlz'],
    	"ADSRESS"=> $_POST['bf_adrs'],
    	"COMMENT"=> $_POST['bf_coment'],
    );
CEvent::SendImmediate("ZAKAZ",array('s1'), $arEventFields);
}
unset($_SESSION['LU']);
unset($_SESSION['LUAKOL']);
}else{
?>
<form id='bf_form' class="contact-form" action="https://<?=$_SERVER['HTTP_HOST']?>/bitrix/templates/Kinergo/components/bitrix/main.feedback/forms_zakaz/template.php" method="post">
					<div class="leftb">
						<div>
 <span class="label"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "69",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></span><input id="bf_emal" value="<? echo $USER->GetEmail() ; ?>" name="bf_emal"  type="text" class="input-text">
						</div>
						<div>
 <span class="label"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "70",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></span><input id="bf_phone" name="bf_phone" type="text" class="input-text">
						</div>
						<div>
 <span class="label"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "71",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></span><input id="bf_fio" value='<? echo "{$USER->GetFirstName()} {$USER->GetLastName()}"; ?>' name="bf_fio" type="text" class="input-text">
						</div>
						<div>
 <span class="label"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "72",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></span><input id="bf_orgn" name="bf_orgn" type="text" class="input-text">
						</div>
						<div>
 <span class="label"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "73",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></span><input id="bf_dlz" name="bf_dlz" type="text" class="input-text">
						</div>
					</div>
				<div class="rightb">
					 <span class="label"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "74",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></span>
					 <textarea id="bf_adrs" name="bf_adrs" class="input-big"></textarea> 
					 <span class="label"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "75",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></span>
					 <textarea id="bf_coment" name="bf_coment" class="input-big"></textarea>
					 <input type="submit" class="btn-submit" value="<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "76",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>">
				</div>
			</form>
			<div id='test666'></div>
			<style>
			.error{
				display: inline-block;
				color:red;
			}
			</style>
<script>
$(document).ready(function(){	
	var options_form = {
			timeout: 3000 ,// тайм-аут
			success : function(response) {
			$(".details").html(response);
			}
		}

		$("#bf_form").validate({

	     submitHandler: function(form) {
	     $(form).ajaxSubmit(options_form);
	    },

	     rules:{
	     	bf_emal:{
	     		required: true,
                email: true,
            },
            bf_phone:{
	     		required: true,
                minlength: 7,
                maxlength: 30,
            }, 
             bf_orgn:{
	     		
            }, 
             bf_dlz:{
	     		required: false,
            }, 
             bf_adrs:{
	     		required: false,
            }, 
             bf_bf_coment:{
	     		required: false,
            }, 
	     },
	      messages:{
	      	bf_emal:{
	     		required: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "32",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>",
                 email: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "34",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>",
            },
          bf_phone:{
	     		required: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "32",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>",
	     		minlength: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "77",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>",
            }, 
         bf_fio:{
	     		required:"<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "32",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>",
                minlength: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "77",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>",
            }, 
	      }

	 });

});
</script>
<?}?>
