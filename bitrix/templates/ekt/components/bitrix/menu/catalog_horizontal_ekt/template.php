<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

if (empty($arResult["ALL_ITEMS"]))
	return;


?>


<ul class="wsmenu-list">
    <li aria-haspopup="true"><span class="wsmenu-click"><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/catalog.svg" width="11px" height="24px" ></object></span><a href="#" class="navtext"><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/catalog.svg" width="28px" height="24px" ></object><span>Каталог товаров</span></a>
        <div class="wsshoptabing wtsdepartmentmenu clearfix">
            <div class="wsshopwp container clearfix" style="height: 450px;">
                <ul class="wstabitem clearfix">
		<?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>     <!-- first level-->
			<?$existPictureDescColomn = ($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] || $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]) ? true : false;?>
			<li>
				<a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>">
                    <img src="<?=$arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"]?>" alt="" width="auto" height="27px"/>
					<span>
						<?=htmlspecialcharsbx($arResult["ALL_ITEMS"][$itemID]["TEXT"])?>

					</span>

				</a>
			<?if (is_array($arColumns) && count($arColumns) > 0):?>
                <div class="wstitemright clearfix" style="height: auto;">
                    <div class="container-fluid">
                        <div class="row">
					<?foreach($arColumns as $key=>$arRow):?>

						<?foreach($arRow as $itemIdLevel_2=>$arLevel_3):?>  <!-- second level-->
                            <div class="col-lg-3 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
                    <li class="wstheading clearfix">
								<a
									href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>"
									<?if ($existPictureDescColomn):?>
										onmouseover="window.obj_<?=$menuBlockId?> && obj_<?=$menuBlockId?>.changeSectionPicure(this, '<?=$itemIdLevel_2?>');"
									<?endif?>
									data-picture="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["PARAMS"]["picture_src"]?>"

								>
									<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?>
								</a>
							<?if (is_array($arLevel_3) && count($arLevel_3) > 0):?>

								<?foreach($arLevel_3 as $itemIdLevel_3):?>	<!-- third level-->
                                    <li>
										<a
											href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"]?>"
											<?if ($existPictureDescColomn):?>
												onmouseover="window.obj_<?=$menuBlockId?> && obj_<?=$menuBlockId?>.changeSectionPicure(this, '<?=$itemIdLevel_3?>');return false;"
											<?endif?>
											data-picture="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["picture_src"]?>"

										>
											<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"]?>
										</a>
									</li>
								<?endforeach;?>

							<?endif?>
							</li>
                            </ul>
                            </div>
						<?endforeach;?>

					<?endforeach;?>
					<?/*if ($existPictureDescColomn):?>
						<div class="bx-nav-list-2-lvl bx-nav-catinfo dbg" data-role="desc-img-block">
							<a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>">
								<img src="<?=$arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"]?>" alt="">
							</a>
							<p><?=$arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]?></p>
						</div>
						<div class="bx-nav-catinfo-back"></div>
					<?endif*/?>
                        </div>
                    </div>
                </div>
			<?endif?>
                <?if (is_array($arColumns) && count($arColumns) == 0):?>
                    <div class="wstitemright clearfix" style="height: auto;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-8 col-md-12 clearfix">

                                </div>
                            </div>
                        </div>
                    </div>
                <?endif?>
			</li>
		<?endforeach;?>
                                    </ul>
                                </div>
                            </div>
                </li>
            </ul>




