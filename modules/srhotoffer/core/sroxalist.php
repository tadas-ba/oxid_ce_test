<?php
/**
 * Created by JetBrains PhpStorm.
 * User: HP
 * Date: 1/28/13
 * Time: 9:21 AM
 * To change this template use File | Settings | File Templates.
 */


/**
 * Check's if an article has a HotOffer tag
 * returns true if does, false otherwise
 */
class sroxaList extends aList
{
    public function isHotOffer($sOxId)
    {
        $oArticle = oxNew('oxarticle');
        $oArticle = init('oxarticle');
        $oArticle->load($sOxId);
        if($oArticle->oxarticle__sroxhotoffer->value == '1'){
            return true;
        }
        return false;
    }
}