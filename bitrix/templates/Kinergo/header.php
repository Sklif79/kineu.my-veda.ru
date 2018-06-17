<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)die();
$page = $APPLICATION->GetCurPage();?><!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<base href="http://kineu.my-veda.ru/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>

	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.png" />
	<link href='https://fonts.googleapis.com/css?family=Russo+One&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/slick/slick.css' />
	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/slick/slick-theme.css' />

	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/style.css' />
	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/popup.css' />
	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/jquery.bxslider.css' />
	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/lightbox.css' />
	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/jquery.custom-scrollbar.css' />
	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/luiwadjogs.css' />
    <link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/adaptive.css' />

	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/slick/slick.min.js"></script>

	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.popupoverlay.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxslider.min.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/initialization.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/lightbox.min.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.form.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.mousewheel.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.custom-scrollbar.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js" type="text/javascript"></script>
<script>
$(document).ready(function() {

$('.cenazakaz_open').click(function() {
		var tex=$(this).attr('namem');
		$('#TextTovar').html('<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "78",
		"LIST_URL" => "",
	),
$component, 
array("HIDE_ICONS" => "Y") 

);?> '+tex+' <?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "79",
		"LIST_URL" => "",
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?>');
		var mal=$('#user_dan').attr('user_mail');
		$('#form_emal_cen').val(mal);
	});

});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46335635-2', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"form",
	Array(
		"REGISTER_URL" => "",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"SHOW_ERRORS" => "N",
	)
);?>
	<div id='removepasvord' style='display:none;' >
<a href='#' style='display:none'  id='removepasvord_open_1'  class='removepasvord_open' >removepasvord_open</a>
<span id='valid_removepasvord' class='header' style="font-size: 15px;"><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "96",
		"LIST_URL" => ""
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></span>
		<form  method="post"  id='removepasvord_form' action="/form/removepasvord.php" >
		<input type='hidden' name='CONTROL1'  value='1'>
		<input type="mail"  id='removepasvord_email' name="USER_MAIL" class="input-text" maxlength="50" size="17" placeholder="Email">
		<br>
		<div class="center"><input type="submit" class="button" value="<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "36",
		"LIST_URL" => "",
	)
);?>"></div>
	</form>
<div id="removepasvord_closes" class="removepasvord_close"></div>
</div>
<div id='register'  style="display:none;">
		<span class='header'><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.view",
	"lang",
	Array(
		"BLOCK_ID" => "3",
		"ROW_ID" => "52",
		"LIST_URL" => "",
	)
);?></span>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.registration",
	"reg_form",
	Array(
	)
);?>
		<div class='register_close'></div>
	</div>
<style type="text/css">
.error{
  color: rgb(250, 153, 161);
margin-bottom: 10px;
display: block;
font-weight: 700;
font-size: 12px;
}
</style>
<script>
$(document).ready(function(){
	$('#removepasvord_form').submit(function(){
	var eml33=$('#removepasvord_email').val();
var d='USER_MAIL='+eml33+'&CONTROL1=1';
		if(eml33.length>5){
			$.ajax({
  type: "POST",
	url: "/form/removepasvord.php",
  data: d,
  success: function(msg){
    $('#valid_removepasvord').html(msg);
  }
});
$('#removepasvord_email').removeClass('error');	}else{
			$('#removepasvord_email').addClass('error');
		}
 	 return false;
	});
});
</script>

	<div id='main'>
		<div id='head'>
			<div class='content'>
				<div class='logo'><a href='/'><img src='<?=SITE_TEMPLATE_PATH?>/img/kinergo-logo.png' alt='' /></a></div>
				<div class='info'>
					<div class='contacts'>

<div id='language'>
<p>Choose your language</p>
<?$APPLICATION->IncludeComponent("bitrix:highloadblock.list", "list-country2", Array(
	"BLOCK_ID" => "4",	// ID инфоблока
		"DETAIL_URL" => "",	// Путь к странице просмотра записи
	),
$component, 
array("HIDE_ICONS" => "Y") 
);?></div>

						
<div id='linkJS'>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"form_linck",
	Array(
		"REGISTER_URL" => "",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"SHOW_ERRORS" => "N"
	),
	$component,
	array("HIDE_ICONS" => "Y")
);?>
</div>
					</div>


				</div>

                <div class="mobile_navbar">

                    <form class='search' method='GET' action="https://<?=$_SERVER['HTTP_HOST']?>/sreach.php" >
                        <input type='text' name='q'  class='input-text' required placeholder='<?$APPLICATION->IncludeComponent(
                            "bitrix:highloadblock.view",
                            "lang",
                            Array(
                                "BLOCK_ID" => "3",
                                "ROW_ID" => "51",
                                "LIST_URL" => ""
                            ),
                            $component,
                            array("HIDE_ICONS" => "Y")
                        );?>' />
                        <input type='submit' class='btn-submit' value='' />
                    </form>

                    <div class="mobile-btn">
                        <button type="button" class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <span>Menu</span>
                    </div>
                </div>


			
					<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_head", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "top_c",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>

				</div>
			</div>
		</div>