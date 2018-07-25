<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Заказать стенд для диагностики, проверки и ремонта гидроблока АКПП от производителя Kinergo выгодно. ✔Низкая цена на оборудование VBTМ-K в России. ►Качество и опытные специалисты!");
$APPLICATION->SetPageProperty("title", "Стенд для диагностики гидроблока АКПП, цена на оборудование для проверки и ремонта АКПП");
$APPLICATION->SetTitle("продукция");
?><?
//форма
require($_SERVER["DOCUMENT_ROOT"] . "/include/form_1.php");
?>


    <div id="center">
        <div class="content">
            <div class="equipment">
                <div class="gridl">
                    <div class="image">
                        <? $APPLICATION->IncludeFile("/include/vbtm_k/image.php", array(), array("MODE" => "html", "SHOW_BORDER" => true, "NAME" => "Logo ru", 'TEMPLATE' => 'default.php')); ?>
                    </div>
                    <!-- /new slider -->


                </div>
                <div class="gridr">
                    <div class="article-description js_min-height">
                        <div class="article-description__inner">
                            <? $APPLICATION->IncludeFile("/include/vbtm_k/description.php", array(), array("MODE" => "html", "SHOW_BORDER" => true, "NAME" => "Logo ru", 'TEMPLATE' => 'default.php')); ?>
                            <div id="_appInstalled">
                            </div>

                        </div>

                        <div class="article-description__btns">
                            <a href="#" class="btn-tech">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</a>
                            <a href="#" namem="Стенд диагностики гидроблоков VBTМ-K" class="btn-price cenazakaz_open"
                               data-popup-ordinal="1" id="open_49519426">Уточнить цену</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tbl-equip-wrap">
                <table class="tbl-equip">
                    <tr>
                        <td>Пиковая  мощность </td>
                        <td>12кВт</td>
                    </tr>
                    <tr>
                        <td>Номинальная мощность</td>
                        <td>4кВт</td>
                    </tr>
                    <tr>
                        <td>Напряжение сети питания, В</td>
                        <td>380 или 220</td>
                    </tr>
                    <tr>
                        <td>Вес, кг.</td>
                        <td>380</td>
                    </tr>
                    <tr>
                        <td>Габариты (ДШВ), мм</td>
                        <td>1250 х 850 х 1500</td>
                    </tr>
                </table>
            </div>

            <div id="scroll-content" style="height: 320px;">




	<div id="scroll-content" style="height: 320px;">


                <?$APPLICATION->IncludeComponent("bitrix:catalog", "VBTM-K2", Array(
	"IBLOCK_TYPE" => "Produkts",	// Тип инфоблока
		"IBLOCK_ID" => "3",	// Инфоблок
		"TEMPLATE_THEME" => "wood",	// Цветовая тема
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_COMPARE" => "Сравнение",	// Текст кнопки "Сравнение"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"DETAIL_USE_VOTE_RATING" => "N",	// Включить рейтинг товара
		"DETAIL_BRAND_USE" => "N",	// Использовать компонент "Бренды"
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404, если не найдены элемент или раздел
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"USE_ELEMENT_COUNTER" => "Y",	// Использовать счетчик просмотров
		"USE_FILTER" => "N",	// Показывать фильтр
		"FILTER_VIEW_MODE" => "VERTICAL",	// Вид отображения умного фильтра
		"USE_COMPARE" => "N",	// Разрешить сравнение товаров
		"PRICE_CODE" => "",	// Тип цены
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"PRICE_VAT_INCLUDE" => "N",	// Включать НДС в цену
		"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара, добавляемые в корзину
		"SHOW_TOP_ELEMENTS" => "Y",	// Выводить топ элементов
		"TOP_ELEMENT_COUNT" => "10",	// Количество выводимых элементов
		"TOP_LINE_ELEMENT_COUNT" => "10",	// Количество элементов, выводимых в одной строке таблицы
		"TOP_ELEMENT_SORT_FIELD" => "id",	// По какому полю сортируем товары в разделе
		"TOP_ELEMENT_SORT_ORDER" => "desc",	// Порядок сортировки товаров в разделе
		"TOP_ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
		"TOP_ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
		"TOP_PROPERTY_CODE" => array(	// Свойства
			0 => "SOVKRB",
			1 => "",
		),
		"SECTION_COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"SECTION_TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"SECTIONS_VIEW_MODE" => "LIST",	// Вид списка подразделов
		"SECTIONS_SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
		"ELEMENT_SORT_FIELD" => "",	// По какому полю сортируем товары в разделе
		"ELEMENT_SORT_ORDER" => "",	// Порядок сортировки товаров в разделе
		"ELEMENT_SORT_FIELD2" => "",	// Поле для второй сортировки товаров в разделе
		"ELEMENT_SORT_ORDER2" => "",	// Порядок второй сортировки товаров в разделе
		"LIST_PROPERTY_CODE" => array(	// Свойства
			0 => "NCATALOG",
			1 => "NPICT",
			2 => "SOVKRB",
			3 => "FILEPDF",
			4 => "",
		),
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"LIST_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства раздела
		"LIST_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства раздела
		"LIST_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства раздела
		"DETAIL_PROPERTY_CODE" => array(	// Свойства
			0 => "NCATALOG",
			1 => "NPICT",
			2 => "SOVKRB",
			3 => "SVFL",
			4 => "FILEPDF",
			5 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"DETAIL_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"DETAIL_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"DETAIL_DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",	// Режим показа детальной картинки
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "H",	// Показ описания для анонса на детальной странице
		"LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
		"LINK_IBLOCK_ID" => "3",	// ID инфоблока, элементы которого связаны с текущим элементом
		"LINK_PROPERTY_SID" => "SOVKRB",	// Свойство, в котором хранится связь
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
		"USE_STORE" => "N",	// Показывать блок "Количество товара на складе"
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"LABEL_PROP" => "-",	// Свойство меток товара
		"TOP_VIEW_MODE" => "BANNER",	// Показ элементов top'а
		"TOP_ROTATE_TIMER" => "30",	// Время показа одного слайда top'а элементов, сек (0 - выключить автоматическую смену слайдов)
		"DETAIL_USE_COMMENTS" => "N",	// Включить отзывы о товаре
		"SEF_FOLDER" => "/test2/",	// Каталог ЧПУ (относительно корня сайта)
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",	// Использовать код группы из переменной, если не задан раздел элемента
		"COMPONENT_TEMPLATE" => "Catalog_rgtf",
		"DETAIL_SET_CANONICAL_URL" => "Y",	// Устанавливать канонический URL
		"SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?>


            </div><!-- /#scroll-content -->

        </div>
    </div>
    <div class='clear'></div>
    <br>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>