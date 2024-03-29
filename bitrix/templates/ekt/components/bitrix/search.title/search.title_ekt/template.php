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


$INPUT_ID = trim($arParams["~INPUT_ID"]);
if(strlen($INPUT_ID) <= 0)
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if(strlen($CONTAINER_ID) <= 0)
	$CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if($arParams["SHOW_INPUT"] !== "N"):?>

    <form class="input-group search-block" id="<?echo $CONTAINER_ID?>" action="<?echo $arResult["FORM_ACTION"]?>">

            <input id="<?echo $INPUT_ID?>"  class="form-control" type="text" name="q" placeholder="Поиск по сайту" value="<?=htmlspecialcharsbx($_REQUEST["q"])?>"  autocomplete="off" >
            <div class="input-group-append">
                <button class="btn btn-outline-secondary search-button" name="s" type="submit">
                    <object type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/images/icons/search.svg" width="17px" height="17px" ></object>
                </button>
            </div>

       
    </form>
<?endif?>
<script>
	BX.ready(function(){
		new JCTitleSearch({
			'AJAX_PAGE' : '<?echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
			'CONTAINER_ID': '<?echo $CONTAINER_ID?>',
			'INPUT_ID': '<?echo $INPUT_ID?>',
			'MIN_QUERY_LEN': 2
		});
	});
</script>

