<? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); ?>
<?
include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/classes/general/captcha.php");
$code = $APPLICATION->CaptchaGetCode();
?>
    <div id='svaz_form_obr_otvet'>
        <? if (($_POST['foms_l_s']) && ($APPLICATION->CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_sid"]))){ ?>
            <?
            ?>
           <h1 style="color:#8abb0d;"><? $APPLICATION->IncludeComponent(
                    "bitrix:highloadblock.view",
                    "lang",
                    Array(
                        "BLOCK_ID" => "3",
                        "ROW_ID" => "22",
                        "LIST_URL" => ""
                    ),
                    $component,
                    array("HIDE_ICONS" => "Y")
                ); ?></h1>
            <?

            $arEventFields = array(
                "NAME" => $_POST['s_user_name'],
                'EMAIL' => $_POST['s_user_email'],
                'PHONE' => $_POST['s_user_phone'],
                'COMPANY' => $_POST['s_organization_name'],
                'BUSINESS' => $_POST['s_svera_eadt'],
                'REGION' => $_POST['s_strana_region'],
                'JOB' => $_POST['s_dolznost'],
                'US' => $_POST['s_info_onas'],
                'MASSAGE' => $_POST['s_masage'],
            );

            CEvent::SendImmediate("FEEDBACK_FORM", array('s1'), $arEventFields);

            ?>
        <? }else{ ?>
        <? if ((isset($_POST["captcha_word"]) && !empty($_POST["captcha_word"])) && (!$APPLICATION->CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_sid"]))) {
            ?><h2 style="color: red;">Invalid Captcha code</h2><?
        } ?>
        <form id='svaz_form_obr'
              action="/bitrix/templates/Kinergo/components/bitrix/main.feedback/forms_svaz/template.php" method="POST">
            <input type="hidden" name='foms_l_s' value='Y'>
            <div class="block">
                <input type="text" name="s_user_name" id="s_user_name" class="input-text"
                       placeholder="<? $APPLICATION->IncludeComponent(
                           "bitrix:highloadblock.view",
                           "lang",
                           Array(
                               "BLOCK_ID" => "3",
                               "ROW_ID" => "23",
                               "LIST_URL" => ""
                           ),
                           $component,
                           array("HIDE_ICONS" => "Y")
                       ); ?>">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_user_email" name="s_user_email"
                       placeholder="<? $APPLICATION->IncludeComponent(
                           "bitrix:highloadblock.view",
                           "lang",
                           Array(
                               "BLOCK_ID" => "3",
                               "ROW_ID" => "24",
                               "LIST_URL" => ""
                           ),
                           $component,
                           array("HIDE_ICONS" => "Y")
                       ); ?>">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_user_phone" name="s_user_phone"
                       placeholder="<? $APPLICATION->IncludeComponent(
                           "bitrix:highloadblock.view",
                           "lang",
                           Array(
                               "BLOCK_ID" => "3",
                               "ROW_ID" => "25",
                               "LIST_URL" => ""
                           ),
                           $component,
                           array("HIDE_ICONS" => "Y")
                       ); ?>">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_organization_name" name="s_organization_name"
                       placeholder="<? $APPLICATION->IncludeComponent(
                           "bitrix:highloadblock.view",
                           "lang",
                           Array(
                               "BLOCK_ID" => "3",
                               "ROW_ID" => "26",
                               "LIST_URL" => ""
                           ),
                           $component,
                           array("HIDE_ICONS" => "Y")
                       ); ?>">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_svera_eadt" name="s_svera_eadt"
                       placeholder="<? $APPLICATION->IncludeComponent(
                           "bitrix:highloadblock.view",
                           "lang",
                           Array(
                               "BLOCK_ID" => "3",
                               "ROW_ID" => "27",
                               "LIST_URL" => ""
                           ),
                           $component,
                           array("HIDE_ICONS" => "Y")
                       ); ?>">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_strana_region" name="s_strana_region"
                       placeholder="<? $APPLICATION->IncludeComponent(
                           "bitrix:highloadblock.view",
                           "lang",
                           Array(
                               "BLOCK_ID" => "3",
                               "ROW_ID" => "28",
                               "LIST_URL" => ""
                           ),
                           $component,
                           array("HIDE_ICONS" => "Y")
                       ); ?>">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_dolznost" name="s_dolznost"
                       placeholder="<? $APPLICATION->IncludeComponent(
                           "bitrix:highloadblock.view",
                           "lang",
                           Array(
                               "BLOCK_ID" => "3",
                               "ROW_ID" => "29",
                               "LIST_URL" => ""
                           ),
                           $component,
                           array("HIDE_ICONS" => "Y")
                       ); ?>">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_info_onas" name="s_info_onas"
                       placeholder="<? $APPLICATION->IncludeComponent(
                           "bitrix:highloadblock.view",
                           "lang",
                           Array(
                               "BLOCK_ID" => "3",
                               "ROW_ID" => "30",
                               "LIST_URL" => ""
                           ),
                           $component,
                           array("HIDE_ICONS" => "Y")
                       ); ?>">
            </div>
            <textarea name="s_masage" id="s_masage" class="input-comm"></textarea>
            <span class="need-pole"><? $APPLICATION->IncludeComponent(
                    "bitrix:highloadblock.view",
                    "lang",
                    Array(
                        "BLOCK_ID" => "3",
                        "ROW_ID" => "31",
                        "LIST_URL" => ""
                    ),
                    $component,
                    array("HIDE_ICONS" => "Y")
                ); ?></span>
            <input type="hidden" name="captcha_sid" value="<?= $code; ?>"/>

<div class="submit-wrap">
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $code; ?>" alt="CAPTCHA"/>
            <input type="text" class="input-text" id="captcha_word" name="captcha_word"
                   placeholder="Enter the code below">
            <input type="submit" class="btn-submit" value="<? $APPLICATION->IncludeComponent(
                "bitrix:highloadblock.view",
                "lang",
                Array(
                    "BLOCK_ID" => "3",
                    "ROW_ID" => "36",
                    "LIST_URL" => ""
                ),
                $component,
                array("HIDE_ICONS" => "Y")
            ); ?>">
</div>

        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var options = {
                timeout: 3000,// тайм-аут
                success: function (response) {
                    $("#svaz_form_obr_otvet").html(response);

                }
            }

            $("#svaz_form_obr").validate({
                submitHandler: function (form) {
                    $(form).ajaxSubmit(options);
                },
                rules: {
                    s_user_name: {
                        required: true,
                        minlength: 1,
                    },
                    s_user_email: {
                        required: true,
                        email: true,
                    },
                    s_user_phone: {
                        required: true,
                        minlength: 3,
                        number: true,
                    },

                    s_organization_name: {
                        required: true,
                        minlength: 3,
                    },
                    captcha_word:{
                        required: true,
                        minlength: 5,
                    }

                },
                messages: {
                    s_user_name: {
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
                                "ROW_ID" => "33",
                                "LIST_URL" => ""
                            ),
                            $component,
                            array("HIDE_ICONS" => "Y")
                        );?>",
                    },
                    s_user_email: {
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
                    s_user_phone: {
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
                                "ROW_ID" => "33",
                                "LIST_URL" => ""
                            ),
                            $component,
                            array("HIDE_ICONS" => "Y")
                        );?>",
                        number: "<?$APPLICATION->IncludeComponent(
                            "bitrix:highloadblock.view",
                            "lang",
                            Array(
                                "BLOCK_ID" => "3",
                                "ROW_ID" => "35",
                                "LIST_URL" => ""
                            ),
                            $component,
                            array("HIDE_ICONS" => "Y")
                        );?>",
                    },
                    s_organization_name: {
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
                                "ROW_ID" => "33",
                                "LIST_URL" => ""
                            ),
                            $component,
                            array("HIDE_ICONS" => "Y")
                        );?>",
                    },
                    captcha_word:{
                        required: "This field is required",
                        minlength: "5 characters with pictures",
                    }
                }

            });

        });

    </script>
    <style type="text/css">
        .error {
            font-size: 10px;
        }
    </style>
<? } ?>