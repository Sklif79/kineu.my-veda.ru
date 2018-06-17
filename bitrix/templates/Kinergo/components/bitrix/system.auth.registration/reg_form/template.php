<?
/**************************
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<form method="post"action="https://<?=$_SERVER['HTTP_HOST']?>/bitrix/templates/Kinergo/components/bitrix/system.auth.registration/reg_form/ajax.php" name="bform" id='FormRegValid'>
	<input type="text" name="L_USER_LOGIN"  id="L_USER_LOGIN" maxlength="50" value="<?=$_POST['L_USER_LOGIN'];?>" placeholder='<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "53",
		"LIST_URL" => ""
	)
);?>' class="input-text" />
	<input type="password" name="L_USER_PASSWORD" id="L_USER_PASSWORD"  value="<?=$_POST['L_USER_PASSWORD'];?>"  maxlength="50"  placeholder='<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "54",
		"LIST_URL" => ""
	)
);?>' class="input-text" />
	<input type="password" name="L_USER_CONFIRM_PASSWORD" id="L_USER_CONFIRM_PASSWORD"  value="<?=$_POST['L_USER_CONFIRM_PASSWORD'];?>"   maxlength="50" value="" placeholder='<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "55",
		"LIST_URL" => ""
	)
);?>' class="input-text" />
	<input type="text" name="L_USER_LAST_NAME" id="L_USER_LAST_NAME" maxlength="50"  value="<?=$_POST['L_USER_LAST_NAME'];?>"  class="input-text"  placeholder='<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "23",
		"LIST_URL" => ""
	)
);?>' />
	<input type="text" name="L_USER_EMAIL" id="L_USER_EMAIL" maxlength="255"  value="<?=$_POST['L_USER_EMAIL'];?>"  class="input-text"  placeholder='<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "24",
		"LIST_URL" => ""
	)
);?>' />

<?
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
$cpt = new CCaptcha();
$captchaPass = COption::GetOptionString("main", "captcha_password", "");
if(strlen($captchaPass) <= 0)
{
   $captchaPass = randString(10);
  COption::SetOptionString("main", "captcha_password", $captchaPass);
}
$cpt->SetCodeCrypt($captchaPass);
?>
<img src="/bitrix/tools/captcha.php?captcha_code=<?=htmlspecialchars($cpt->GetCodeCrypt());?>">
<br>
<input name="captcha_code" value="<?=htmlspecialchars($cpt->GetCodeCrypt());?>" type="hidden">
<input id="captcha_word" name="captcha_word" class='input-text'  placeholder='captcha code *' type="text">


<div class='center'><input type='submit' class='button' value='<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "56",
		"LIST_URL" => ""
	)
);?>' /></div>
</form>
<style type="text/css">
.error{
  color: rgb(4, 2, 5);
margin-bottom: 10px;
display: block;
}
</style>
<script>
	$(document).ready(function(){
            var options = {
    timeout: 3000 ,// тайм-аут
    success : function(response) {
         $("#register").html(response);
            var err=$("#errL").attr('err');
				if(err!='error'){
					 $.ajax({
						type : "POST",
						url : "https://<?=$_SERVER['HTTP_HOST'];?>/bitrix/templates/Kinergo/components/bitrix/system.auth.registration/reg_form/form.php",
						data : "&LUI=Y",
						success : function(response) {
							$("#linkJS").html(response);

							//setTimeout(function() { $('.register_close').trigger('click'); }, 3000);

								var pol=$('#URAD').attr('URAD');
		 						if(pol==1){urad1();};
		 						if(pol==2){urad2();};
		 						if(pol==3){urad3();};	
							}
						});
                }
                
            }
     };
    $("#FormRegValid").validate({
        submitHandler: function(form) {
      $(form).ajaxSubmit(options);
    },
       rules:{
           L_USER_LOGIN:{
                required: true,
                minlength: 4,
                 remote : "https://<?=$_SERVER['HTTP_HOST'];?>/bitrix/templates/Kinergo/components/bitrix/system.auth.registration/reg_form/provlog.php",
            },
            L_USER_PASSWORD:{
                required: true,
                minlength: 6,
            },
            L_USER_CONFIRM_PASSWORD:{
                required: true,
                minlength: 6,
                equalTo: "#L_USER_PASSWORD",
            },
            L_USER_LAST_NAME:{
                required: true,
                minlength: 2,
            },
             L_USER_EMAIL:{
                required: true,
                email: true,
            },

       },
       messages:{
            L_USER_LOGIN:{
                required: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "32",
		"LIST_URL" => ""
	)
);?>",
                minlength: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "57",
		"LIST_URL" => ""
	)
);?>",
                remote: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "58",
		"LIST_URL" => ""
	)
);?>",
            },
            L_USER_PASSWORD:{
                required: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "32",
		"LIST_URL" => ""
	)
);?>",
                minlength: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "57",
		"LIST_URL" => ""
	)
);?>",
            },
            L_USER_CONFIRM_PASSWORD:{
                required: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "59",
		"LIST_URL" => ""
	)
);?>",
                equalTo: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "60",
		"LIST_URL" => ""
	)
);?>",
                minlength: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "59",
		"LIST_URL" => ""
	)
);?>",
            },
            L_USER_LAST_NAME:{
                required: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "32",
		"LIST_URL" => ""
	)
);?>",
                minlength: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "32",
		"LIST_URL" => ""
	)
);?>",
            },
            L_USER_EMAIL:{
                required: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "32",
		"LIST_URL" => ""
	)
);?>",
                email: "<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "34",
		"LIST_URL" => ""
	)
);?>",
            },
       }
    });
});
</script>