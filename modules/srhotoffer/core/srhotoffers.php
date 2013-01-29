<?php
/**
 * Created by JetBrains PhpStorm.
 * User: HP
 * Date: 1/29/13
 * Time: 8:26 AM
 * To change this template use File | Settings | File Templates.
 */

class srHotOffers extends oxUBase
{
    protected  $_sThisTemplate = 'hotoffers.tpl';

    public function getHotOfferList()
    {
        if ( $this->_aHotOfferList === null ) {
            $oArtList = oxNew( 'oxarticlelist' );
            $oArtList->getHotOffers();

            if ( count( $oArtList ) ) {
                $this->_aHotOfferList = $oArtList;
            }

        }
        return $this->_aHotOfferList;
    }
}