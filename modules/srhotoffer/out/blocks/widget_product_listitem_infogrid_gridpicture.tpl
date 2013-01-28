<div class="pictureBox gridPicture">
    <a class="sliderHover" href="[{ $_productLink }]" title="[{ $product->oxarticles__oxtitle->value}] [{$product->oxarticles__oxvarselect->value}]"></a>
    <a href="[{$_productLink}]" class="viewAllHover glowShadow corners" title="[{ $product->oxarticles__oxtitle->value}] [{$product->oxarticles__oxvarselect->value}]"><span>[{oxmultilang ident="WIDGET_PRODUCT_PRODUCT_DETAILS"}]</span></a>

    [{if $oViewConf->isHotOffer($product->oxarticles__oxid->value)}]
        <div class="markHotOffer">
    [{/if }]

        <img class="imgA" src="[{$product->getThumbnailUrl()}]" alt="[{ $product->oxarticles__oxtitle->value}] [{$product->oxarticles__oxvarselect->value}]">

    [{if $oViewConf->isHotOffer($product->oxarticles__oxid->value)}]
        <img class="imgB" src="http://oxidtest.dev/out/hotoffer/img/hot_offer.png" alt="hot_offer.png">
        </div>
    [{/if }]
</div>
