<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

   <div class="article-list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<a class="article-item article-list__item" href="<?=$arItem["LINK"]?>"
                                 data-anim="anim-3">
        <div class="article-item__background"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                                   data-src="<?=$arItem["DETAIL_PAGE_URL"]?>"
                                                   alt=""/>
												   </div>
        <div class="article-item__wrapper">
            <div class="article-item__title"><?=$arItem["NAME"]?></div>
            <div class="article-item__content"><?=$arItem["PREVIEW_TEXT"]?> </div>
        </div>
    </a>
    
    <?endforeach;?>    
    </div>
    </div>