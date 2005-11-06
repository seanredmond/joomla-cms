<?php
/**
* @version $Id$
* @package Joomla
* @subpackage Contact
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

/**
* @package Joomla
* @subpackage Contact
*/
class TOOLBAR_contact {
	/**
	* Draws the menu for a New Contact
	*/
	function _EDIT() {
		global $id;
    	global $_LANG;
			
		$text = ( $id ? $_LANG->_( 'Edit' ) : $_LANG->_( 'New' ) );
		
		mosMenuBar::startTable();
		mosMenuBar::title( $_LANG->_( 'Contact' ) .': '. $text, 'generic.png' );
		mosMenuBar::save();
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancel', $_LANG->_( 'Close' ) );
		} else {
			mosMenuBar::cancel();
		}
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.contactmanager.edit' );
		mosMenuBar::endTable();
	}

	function _DEFAULT() {
		global $_LANG;
		
		mosMenuBar::startTable();
		mosMenuBar::title( $_LANG->_( 'Contact Manager' ), 'blank.png', 'index2.php?option=com_contact_details' );
		mosMenuBar::publishList();
		mosMenuBar::spacer();
		mosMenuBar::unpublishList();
		mosMenuBar::spacer();
		mosMenuBar::deleteList();
		mosMenuBar::spacer();
		mosMenuBar::editListX();
		mosMenuBar::spacer();
		mosMenuBar::addNewX();
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.contactmanager' );
		mosMenuBar::endTable();
	}
}
?>