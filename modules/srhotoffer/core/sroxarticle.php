<?php
/**
 * Created by JetBrains PhpStorm.
 * User: HP
    * Date: 1/23/13
    * Time: 4:16 PM
    * To change this template use File | Settings | File Templates.
 */

class srOxArticle extends oxArticle
{
    /**
     * Check's if an article has a HotOffer tag
     * returns 1 if does, 0 otherwise
     */
    public function isHotOffer()
    {
//        $oArticle = oxNew('oxarticle');
//        $oArticle = init('oxarticles');
//        $oArticle->load($oArticle->oxarti);
//        print_r($this);
//        if($this->oxarticles__sroxhotoffer->value == '1'){
//            return true;
//        }
        return $this->oxarticles__sroxhotoffer->value;
    }

}
