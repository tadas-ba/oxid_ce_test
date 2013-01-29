<?php
/**
 * Created by JetBrains PhpStorm.
 * User: HP
 * Date: 1/28/13
 * Time: 5:43 PM
 * To change this template use File | Settings | File Templates.
 */

class sroxArticleList extends sroxArticleList_parent
{
    public function getHotOffers()
    {

        $sArticleTable = getViewName('oxarticles');

        $sQuery  = "select * from $sArticleTable ";
        $sQuery .= "where sroxhotoffer = 1 and oxactive = 1 and oxissearch = 1";

        $this->selectString($sQuery);
    }

}