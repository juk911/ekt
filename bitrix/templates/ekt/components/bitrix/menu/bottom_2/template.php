<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="col-sm-5 col-md-3">
        <h4>Группа компаний Электрокомплект</h4>
<ul>
    <?
    $i=0;
    ?>
    <? foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>

		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

        <?
        $i++;
        if(($i % 3)==0 and $arItem):?>
            </ul>
            </div>
            <div class="col-sm-5 col-md-3">
            <ul>
        <?endif;?>
<?endforeach?>

</ul>
    </div>
<?endif?>