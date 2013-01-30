[{if $oViewConf->isHotOffer($product->oxarticles__oxid->value)}]
<div class="markHotOffer">
    [{/if }]

    <img class="imgA" src="[{$product->getThumbnailUrl()}]" alt="[{ $product->oxarticles__oxtitle->value}] [{$product->oxarticles__oxvarselect->value}]">

    [{if $oViewConf->isHotOffer($product->oxarticles__oxid->value)}]
    <img class="imgB" src="http://oxidtest.dev/out/hotoffer/img/hot_offer.png" alt="hot_offer.png">
</div>
[{/if }]