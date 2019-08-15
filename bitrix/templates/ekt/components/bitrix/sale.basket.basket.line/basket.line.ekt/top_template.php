<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?> <ul class="user-menu">
    <li class="header-favorites">
        <a href=""><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/like.svg" width="25px" height="22px" ></object></a>
    </li>
    <li class="header-compare">
        <a href="/catalog/compare/"><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/share.svg" width="25px" height="22px" ></object></span></a>
    </li>

<?if (!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y'):?>

		<?if ($USER->IsAuthorized()):
			$name = trim($USER->GetFullName());
			if (! $name)
				$name = trim($USER->GetLogin());
			if (strlen($name) > 15)
				$name = substr($name, 0, 12).'...';
			?>

        <li class="header-my-acc">
            <a href="<?=$arParams['PATH_TO_PROFILE']?>"><span><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/avatar.svg" width="25px" height="22px" ></object></span></a>
        </li>



		<?else:
			$arParamsToDelete = array(
				"login",
				"login_form",
				"logout",
				"register",
				"forgot_password",
				"change_password",
				"confirm_registration",
				"confirm_code",
				"confirm_user_id",
				"logout_butt",
				"auth_service_id",
				"clear_cache"
			);

			$currentUrl = urlencode($APPLICATION->GetCurPageParam("", $arParamsToDelete));
			if ($arParams['AJAX'] == 'N')
			{
				?><script type="text/javascript"><?=$cartId?>.currentUrl = '<?=$currentUrl?>';</script><?
			}
			else
			{
				$currentUrl = '#CURRENT_URL#';
			}
			
			$pathToAuthorize = $arParams['PATH_TO_AUTHORIZE'];
			$pathToAuthorize .= (stripos($pathToAuthorize, '?') === false ? '?' : '&');
			$pathToAuthorize .= 'login=yes&backurl='.$currentUrl;
			?>
        <li class="header-my-acc">
            <a href="<?=$pathToAuthorize?>"><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/avatar.svg" width="25px" height="22px" ></object></span></a>
        </li>
			<?
			if ($arParams['SHOW_REGISTRATION'] === 'Y')
			{
				$pathToRegister = $arParams['PATH_TO_REGISTER'];
				$pathToRegister .= (stripos($pathToRegister, '?') === false ? '?' : '&');
				$pathToRegister .= 'register=yes&backurl='.$currentUrl;
				?>
        <li class="header-my-acc">
            <a href="<?=$pathToRegister?>"><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/avatar.svg" width="25px" height="22px" ></object></span></a>
        </li>
				<?
			}
			?>
		<?endif?>

<?endif?>
  <?
		if (!$arResult["DISABLE_USE_BASKET"])
		{
			?>
            <li class="header-basket">
                <a href="<?= $arParams['PATH_TO_BASKET'] ?>"><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/shopping-cart.svg" width="25px" height="22px" ></object></span></a>
            </li>
			<?
		}

		if (!$compositeStub)
		{
			if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y'))
			{
				echo '<span style="color:#fff">'.$arResult['NUM_PRODUCTS'].'</span>';

				if ($arParams['SHOW_TOTAL_PRICE'] == 'Y')
				{
					?>

					<?
				}
			}
		}

		if ($arParams['SHOW_PERSONAL_LINK'] == 'Y'):?>

            <li class="header-basket">
                <a href="<?= $arParams['PATH_TO_PERSONAL'] ?>"><object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/shopping-cart.svg" width="25px" height="22px" ></object></span></a>
            </li>
		<?endif?>

</ul>
<div class="city-selector">
    <a href="">
        <span class="city-name-before">Ваш город</span>
        <span class="city-name">Алматы</span>
    </a>
</div>