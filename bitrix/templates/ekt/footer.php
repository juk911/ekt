<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row top-footer">
            <div class="col-sm-5 col-md-3">
                <h4>Подписаться на рассылку</h4>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR."include/sender.php",
                        "AREA_FILE_RECURSIVE" => "N",
                        "EDIT_MODE" => "html",
                    ),
                    false,
                    Array('HIDE_ICONS' => 'Y')
                );?>
            </div>
            <div class="col-sm-5 col-md-3">
                <h4>Группа компаний Электрокомплект</h4>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_1", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "2",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MENU_CACHE_TIME" => "360000000",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
                "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "COMPONENT_TEMPLATE" => "list.multilevel",
                "LIST_CLASS_NAME" => ""
            ),
                false
            );?>
            </div>
            <div class="col-sm-5 col-md-3">
                <h4>Будь с нами</h4>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_1", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "2",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MENU_CACHE_TIME" => "360000000",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "bottom2",	// Тип меню для первого уровня
                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "list.multilevel",
                    "LIST_CLASS_NAME" => ""
                ),
                    false
                );?>
            </div>
            <div class="col-sm-5 col-md-3">
                <h4>Интернет магазин</h4>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_1", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "2",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MENU_CACHE_TIME" => "360000000",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "bottom3",	// Тип меню для первого уровня
                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "list.multilevel",
                    "LIST_CLASS_NAME" => ""
                ),
                    false
                );?>
            </div>
        </div>
        <hr>
        <div class="row middle-footer">
            <div class="col-sm-5 col-md-3">
                <div class="social-bottom">
                    <ul>
                        <a href=""><li><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/instagram.svg" width="25px" height="25px" ></object></li></a>
                        <a href=""><li><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/Facebook.svg" width="25px" height="25px" ></object></li></a>
                        <a href=""><li><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/Vk.svg" width="25px" height="25px" ></object></li></a>
                        <a href=""><li><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/youtube.svg" width="25px" height="25px" ></object></li></a>
                    </ul>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_2", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "2",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MENU_CACHE_TIME" => "360000000",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "bottom4",	// Тип меню для первого уровня
                "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "COMPONENT_TEMPLATE" => "list.multilevel",
                "LIST_CLASS_NAME" => ""
            ),
                false
            );?>
        </div>
        <hr>
        <div class="row bottom-footer">
            <div class="col-md-6">© 2019 Группа компаний Электрокомплект</div>
            <div class="col-md-6 text-right"><a href="#">Политика конфиденциальности</a></div>
        </div>
    </div>
    <!-- ДОПИСАЛ -->
    <?// для js-файлов
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap-input-spinner.js');
    ?>
    <script> $("input[type='number']").inputSpinner()</script>
    <?// для js-файлов
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/owl.carousel.min.js');
    ?>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            navText:["<div class='nav-btn prev-slide'>&#8249;</div>","<div class='nav-btn next-slide'>&#8250;</div>"],
            responsiveClass:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
</footer>
<div class="col-xs-12 hidden-lg hidden-md hidden-sm">
</div>

</body>
</html>