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

?><div class="row">
		<?foreach ($arResult['SECTIONS'] as &$arSection)
					{
					    $picture=CFile::GetPath($arSection["DETAIL_PICTURE"]); ?>
                        <div class="col-md-3">
                            <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>">
                                <img src="<?=$picture?>">
                                <span><? echo $arSection['NAME']; ?></span>
                            </a>
                        </div>

                    <?
					}?>
					</div>