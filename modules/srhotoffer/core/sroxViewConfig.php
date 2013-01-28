<?php
/**
 * Created by JetBrains PhpStorm.
 * User: HP
 * Date: 1/28/13
 * Time: 2:06 PM
 * To change this template use File | Settings | File Templates.
 */
class sroxViewConfig extends sroxViewConfig_parent
{
    /**
     * Check's if an article has a HotOffer tag
     * returns 1 if does, 0 otherwise
     */
    public function isHotOffer($oxid)
    {
        $oArticle = oxNew('oxarticle');
//        $oArticle->init('oxarticles');
        $oArticle->load($oxid);
        return $oArticle->oxarticles__sroxhotoffer->value;
    }
}
