<?php
/**
 *    This file is part of OXID eShop Community Edition.
 *
 *    OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @package   admin
 * @copyright (C) OXID eSales AG 2003-2012
 * @version OXID eShop CE
 * @version   SVN: $Id: news_list.php 48458 2012-08-10 06:59:10Z linas.kukulskis $
 */

/**
 * Admin news list manager.
 * Performs collection and managing (such as filtering or deleting) function.
 * Admin Menu: Customer News -> News.
 * @package admin
 */
class News_List extends oxAdminList
{
    /**
     * Current class template name.
     * @var string
     */
    protected $_sThisTemplate = 'news_list.tpl';

    /**
     * Name of chosen object class (default null).
     *
     * @var string
     */
    protected $_sListClass = 'oxnews';

    /**
     * Type of list.
     *
     * @var string
     */
    protected $_sListType = 'oxnewslist';

    /**
     * Default SQL sorting parameter (default null).
     *
     * @var string
     */
    protected $_sDefSortField = "oxdate";

    /**
     * Returns sorting fields array
     *
     * @return array
     */
    public function getListSorting()
    {
        $aSorting = parent::getListSorting();
        if ( isset( $aSorting["oxnews"][$this->_sDefSortField] )) {
            $this->_blDesc = true;
        }
        return $aSorting;
    }
}