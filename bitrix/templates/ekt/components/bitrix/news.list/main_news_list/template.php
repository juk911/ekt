<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?><div class="white-bg">
    <div class="container main-news">
        <h1 class="text-center main-title">Узнать больше о компании</h1>
        <div class="owl-carousel main-news-slider">

<?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="slider-news-item">
        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
            <div class="news-text">
                <div class="news-date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
                <div class="news-title"><?echo $arItem["NAME"]?></div>
            </div>
        </a>
    </div>
<?endforeach;?>
        </div>
    </div>
</div>
