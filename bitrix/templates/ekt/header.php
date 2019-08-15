<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);
?>
<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<link rel="shortcut icon" type="image/x-icon" href="<?=htmlspecialcharsbx(SITE_DIR)?>favicon.ico" />
	<?$APPLICATION->ShowHead();?>
	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css?1555342110121326");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/modern-business.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/webslidemenu.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fade-down.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.theme.default.min.css");

	?>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Подключаем JS -->
    <?// для js-файлов
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap.bundle.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/webslidemenu.js');
    ?>

	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>

<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<!-- Навигационное меню -->
<!-- Над меню -->

<!-- Navigation -->
<nav class="top-header navbar fixed-top">
    <div class="container">
        <div class="top-menu">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_top_ekt", Array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "",    // Тип меню для остальных уровней
                "DELAY" => "N", // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1", // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "360000000",   // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "Y",   // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "N", // Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
                "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            );?>
        </div>
        <div class="top-right-menu">

            <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "basket.line.ekt", Array(
                "PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
                "PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
                "SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
                "SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
                "SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
                "SHOW_PRODUCTS" => "N",	// Показывать список товаров
                "POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
                "SHOW_AUTHOR" => "Y",	// Добавить возможность авторизации
                "PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
                "PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
            ),
                false
            );?>
            
        </div>
    </div>
</nav>
<nav class="main-menu navbar fixed-top navbar-expand-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?=htmlspecialcharsbx(SITE_DIR)?>"><img src="<?php echo SITE_TEMPLATE_PATH?>/images/logo.png"></a>
        <div class="wsmain clearfix">
            <nav class="wsmenu clearfix"><div class="overlapblackbg"></div>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_horizontal_ekt", Array(
                    "ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
                    "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                    "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "MENU_THEME" => "site",	// Тема меню
                    "CACHE_SELECTED_ITEMS" => "N",
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MAX_LEVEL" => "3",	// Уровень вложенности меню
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                ),
                    false
                );?>
            </nav>
        </div>

            <?$APPLICATION->IncludeComponent("bitrix:search.title", "search.title_ekt", array(
                "NUM_CATEGORIES" => "1",
                "TOP_COUNT" => "5",
                "CHECK_DATES" => "N",
                "SHOW_OTHERS" => "N",
                "PAGE" => SITE_DIR."catalog/",
                "CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS") ,
                "CATEGORY_0" => array(
                    0 => "iblock_catalog",
                ),
                "CATEGORY_0_iblock_catalog" => array(
                    0 => "all",
                ),
                "CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
                "SHOW_INPUT" => "Y",
                "INPUT_ID" => "title-search-input",
                "CONTAINER_ID" => "search",
                "PRICE_CODE" => array(
                    0 => "BASE",
                ),
                "SHOW_PREVIEW" => "Y",
                "PREVIEW_WIDTH" => "75",
                "PREVIEW_HEIGHT" => "75",
                "CONVERT_CURRENCY" => "Y"
            ),
                false
            );?>

        <div class="feedback-button">
            <button type="button" class="feedback-button btn btn-primary">Оставить заявку</button>
        </div>
        <div class="phone-numbers">
            <object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/phone.svg" width="22px" height="22px" ></object>
            <ul>
                <li><a href="tel:+77277777777">+7 (727) 777 77 77</a></li>
                <li><a href="tel:+77777777777">+7 (777) 777 77 77</a></li>
            </ul>
        </div>
    </div>
</nav>


			<?
			if ($curPage != SITE_DIR."index.php")
			{
			?>
			<div class="row">
				<div class="col-lg-12" id="navigation">
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
							"START_FROM" => "0",
							"PATH" => "",
							"SITE_ID" => "-"
						),
						false,
						Array('HIDE_ICONS' => 'Y')
					);?>
				</div>
			</div>
			<h1 class="bx-title dbg_title" id="pagetitle"><?=$APPLICATION->ShowTitle(false);?></h1>
			<?
			}
			else
			{
			?>
			<h1 style="display: none"><?$APPLICATION->ShowTitle()?></h1>
			<?
			}
			?>


