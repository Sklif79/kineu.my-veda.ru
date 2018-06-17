<div id='footer'>
		<div class='content'>
		<a name="battoma"></a>
			<div class='logo'><a href='/'><img src='<?=SITE_TEMPLATE_PATH?>/img/kinergo-logo-mini.png' alt='' /></a></div>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"menu_bottom",
	Array(
		"ROOT_MENU_TYPE" => "bottom",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(""),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	)
);?>
			<div class='copyright'></div>
		</div>
	</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46773678 = new Ya.Metrika({
                    id:46773678,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46773678" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
    $(document).ready(function(){
      $('#FormAuthL input[type=\"submit\"]').click(function(){
      yaCounter46773678.reachGoal('loginkinergo');
    });

    $('#FormRegValid input[type=\"submit\"]').click(function(){
      yaCounter46773678.reachGoal('registrationsignin');
    });

$('#svaz_form_obr input[type=\"submit\"]').click(function(){
      yaCounter46773678.reachGoal('feedbacksend'); 
    });

$('#insudeprice input[type=\"submit\"]').click(function(){
      yaCounter46773678.reachGoal('sendpriceinquiry');
    });

$('#a_obgt_open').click(function(){
      yaCounter46773678.reachGoal('additionalmaterialssend'); 
});
  });
</script>
</body>
</html>