<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
GLOBAL $USER;
$mail_f_1 = $USER->GetEmail();
if ($USER->IsAuthorized()) {
    $aut = 1;
} else {
    $aut = -1;
}
?>
<input type="hidden" user_mail="<?= $mail_f_1 ?>" id='user_dan'>
<?
//форма
require($_SERVER["DOCUMENT_ROOT"] . "/include/form_1.php");
?>

<div class='content'>
    <div class='equipment'>
        <div class='gridl'>

<!-- old slider
            <div class='image'>
                <div class="image_slider">
                    <div class="item">
                        <a data-fancybox="gallery " href='<?=$arResult["DETAIL_PICTURE"]["SRC"]?>'>
                            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                                 width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
                                 height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
                                 alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                                 title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"/>
                        </a>
                    </div>
                </div>
				<?
				//krumo($arItem["PROPERTIES"]["UF_GALERY"]["VALUE"]);
				if ($arResult["PROPERTIES"]["UF_GALERY"]["VALUE"] !== false && count($arResult["PROPERTIES"]["UF_GALERY"]["VALUE"]) > 0)
				{
					$file = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width' => 90, 'height' => 90), BX_RESIZE_IMAGE_PROPORTIONAL, true);
					?>
					<div class="image_slider_nav">
						<span class="item_nav">
							<img src="<?=$file["src"]?>"
								 alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
								 title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
								 data-bigimg="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" />
						</span>
						<? foreach($arResult["PROPERTIES"]["UF_GALERY"]["VALUE"] as $img)
						{
							$file = CFile::ResizeImageGet($img, array('width' => 90, 'height' => 90), BX_RESIZE_IMAGE_PROPORTIONAL, true);
							$img_src = CFile::GetPath($img);
							?><span class="item_nav">
							<img src="<?=$file["src"];?>"
								 alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
								 title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
								 data-bigimg="<?=$img_src?>" />
							</span><?
						}?>
					</div>
					<?
				}
				?>
            </div>
/old slider -->

<!-- new slider-->
<!--     include there slider from page   http://kineu.my-veda.ru/products/obgt/     -->
<!--     for video items add data-video attribute with source in image tag,
        for example   data-video="https://www.youtube.com/embed/Zfxm-ZvveQs", like last thumbnail     -->
            <div class="image">
                <div class="image_slider">
                    <div class="item">
                        <a data-fancybox="gallery " href="/upload/iblock/4f4/4f47aa5e24d493eca80e97d19107a538.png">
                            <img src="/upload/iblock/4f4/4f47aa5e24d493eca80e97d19107a538.png" width="268" height="389" alt="Automatic Torque Converters industrial welding machine SV 50.001" title="Automatic Torque Converters industrial welding machine SV 50.001">
                        </a>
                    </div>
                </div>
                <div class="image_slider_nav">
                    <span class="item_nav">
                        <img src="/upload/resize_cache/iblock/977/90_90_1/977f057655ccbf1cffc5b478563a28ee.png" alt="Automatic Torque Converters industrial welding machine SV 50.001" title="Automatic Torque Converters industrial welding machine SV 50.001" data-bigimg="/upload/iblock/977/977f057655ccbf1cffc5b478563a28ee.png">
                    </span>
                    <span class="item_nav active">
                        <img src="/upload/resize_cache/iblock/4f4/90_90_1/4f47aa5e24d493eca80e97d19107a538.png" alt="Automatic Torque Converters industrial welding machine SV 50.001" title="Automatic Torque Converters industrial welding machine SV 50.001" data-bigimg="/upload/iblock/4f4/4f47aa5e24d493eca80e97d19107a538.png">
                    </span>
                    <span class="item_nav">
                        <img src="/upload/resize_cache/iblock/6c0/90_90_1/6c06780fd2f243358333dbed3dcfd5d8.png" alt="Automatic Torque Converters industrial welding machine SV 50.001" title="Automatic Torque Converters industrial welding machine SV 50.001" data-bigimg="/upload/iblock/6c0/6c06780fd2f243358333dbed3dcfd5d8.png">
                    </span>
    <!--       video             -->
                    <span class="item_nav">
                        <img src="http://www.backgroundsy.com/file/film-frame-play.jpg" alt="Automatic Torque Converters industrial welding machine SV 50.001" title="Automatic Torque Converters industrial welding machine SV 50.001" data-bigimg="http://www.backgroundsy.com/file/film-frame-play.jpg" data-video="https://www.youtube.com/embed/Zfxm-ZvveQs">
                    </span>
    <!--       /video             -->
                </div>
            </div>
<!-- /new slider -->


<!-- delete
            <? if ($arResult['PROPERTIES']['URLYTB']['VALUE'] != '') { ?>
                <div class='video'>
                    <iframe width="310" height="205"
                            src="https://www.youtube.com/embed/<? echo $arResult['PROPERTIES']['URLYTB']['VALUE']; ?>"
                            frameborder="0" allowfullscreen></iframe>
                    <a target='_blanck'
                       href='https://www.youtube.com/watch?v=<? echo $arResult['PROPERTIES']['URLYTB']['VALUE'] ?>'><? echo $arResult['PROPERTIES']['URLYTBNAME']['VALUE'] ?></a>
                </div>
            <? } ?>
            <a deturl="/products/obgt/secret.php" id='a_obgt_open' href="/products/obgt/secret.php"
               class=" <? if ($aut != 1) {
                   echo "login_open ";
               } ?> btn-more header"><? $APPLICATION->IncludeComponent(
                    "bitrix:highloadblock.view",
                    "lang",
                    Array(
                        "BLOCK_ID" => "3",
                        "ROW_ID" => "104",
                        "LIST_URL" => ""
                    )
                ); ?></a>
/delete -->
        </div>
        <div class='gridr'>
            <div class="article-description js_min-height">
                <div class="article-description__inner">
                <h1><? echo $arResult['NAME']; ?></h1>
                <p><? echo $arResult['DETAIL_TEXT']; ?></p>

                <? $ko = count($arResult['PROPERTIES']['SVFL']['VALUE']); ?>

                <? if ($ko != 0) { ?>
                    <table cellpadding='0' cellspacing='0' border='0' class='tbl-equip'>
                        <? foreach ($arResult['PROPERTIES']['SVFL']['VALUE'] as $val) { ?>
                            <? $val = explode("/", $val) ?>
                            <tr>
                                <td><?= $val[0]; ?></td>
                                <td><?= $val[1]; ?></td>
                            </tr>
                        <? } ?>
                    </table>
                <? }//closed if?>
                </div>

                <div class="article-description__btns">
                    <a href='<?echo $arItem["DETAIL_PAGE_URL"]?>' class='btn-tech'><?$APPLICATION->IncludeComponent(
                            "bitrix:highloadblock.view",
                            "lang",
                            Array(
                                "BLOCK_ID" => "3",
                                "ROW_ID" => "6",
                                "LIST_URL" => ""
                            )
                        );?>
                    </a>


                    <a href='#' namem='<? echo $arResult["NAME"] ?>'
                       class='btn-price cenazakaz_open'><? $APPLICATION->IncludeComponent(
                            "bitrix:highloadblock.view",
                            "lang",
                            Array(
                                "BLOCK_ID" => "3",
                                "ROW_ID" => "7",
                                "LIST_URL" => ""
                            )
                        ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
		<input type="hidden"  id="URAD" URAD="1" >
				-->


<!-- div.content aside nav and sliders insert here -->


<script>

    function urad3() {
        var cls = $('#a_obgt_open').attr('deturl');
        $('#a_obgt_open').attr('href', cls);
        $('#a_obgt_open').removeClass('login_open');

    }
</script>

<div class='clear'></div>
</div>
