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
 * @package   core
 * @copyright (C) OXID eSales AG 2003-2012
 * @version OXID eShop CE
 * @version   SVN: $Id: oxdisplayerror.php 48727 2012-08-16 09:09:02Z tomas $
 */

/**
 * simple class to add a error message to display
 */
class oxDisplayError implements oxIDisplayError
{
    /**
     * Error message
     *
     * @var string $_sMessage
     */
    protected $_sMessage;

    /**
     * returns the stored message
     *
     * @return string stored message
     */
    public function getOxMessage()
    {
        return oxRegistry::getLang()->translateString( $this->_sMessage );
    }

    /**
     * stored the message
     *
     * @param string $sMessage message
     *
     * @return null
     */
    public function setMessage( $sMessage )
    {
        $this->_sMessage = $sMessage;
    }

    /**
     * Returns errorrous class name (currently returns null)
     *
     * @return null
     */
    public function getErrorClassType()
    {
        return null;
    }

    /**
     * Returns value (currently returns empty string)
     *
     * @param string $sName value ignored
     *
     * @return empty string
     */
    public function getValue( $sName )
    {
        return '';
    }
}
