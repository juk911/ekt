<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */

$this->setFrameMode(true);?>
    <div class="row special-offers">



	<?


		?>
		<!-- items-container -->
		<? foreach ($arResult['ITEMS'] as $item)
		{
            //echo '<pre>';
			//print_r($item['OFFERS']);
            $price = CPrice::GetBasePrice($item['ID']);
?>
            <div class="col-md-2 product-card-out ">
                <div class="product-card">
                    <a href="<?=$item['DETAIL_PAGE_URL']?>"><img src="<?=$item['PREVIEW_PICTURE']['SRC']?>">
                        <h3 class="product-title"><?=$item['NAME']?></h3></a>
                    <hr>
                    <div class="advantages">
                        <div><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/star.svg" width="13px" height="13px" ></object><span class="product-description">Тут будет текст преимущества</span></div>
                        <div><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/star.svg" width="13px" height="13px" ></object><span class="product-description">Тут будет текст преимущества</span></div>
                    </div>
                    <hr>
                    <div class="price-text">цена (от)</div>
                    <div class="price"><?=$price["PRICE"]?> ₸</p></div>
                </div>
            </div>

			<?
		}

		?>
		<!-- items-container -->
		<?

	?>
</div>
<?

$signer = new \Bitrix\Main\Security\Sign\Signer;
$signedTemplate = $signer->sign($templateName, 'catalog.section');
$signedParams = $signer->sign(base64_encode(serialize($arResult['ORIGINAL_PARAMETERS'])), 'catalog.section');
?>