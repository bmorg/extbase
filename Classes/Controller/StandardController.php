<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Jochen Rau <jochen.rau@typoplanet.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * A Special Case of a Controller: If no controller could be resolved or no
 * controller has been specified in the request, this controller is chosen.
 *
 * @package Extbase
 * @subpackage Controller
 * @version $ID:$
 * @todo - is this ever called?
 */
class Tx_Extbase_Controller_StandardController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * Processes a generic request and returns a response
	 *
	 * @param Tx_Extbase_MVC_Request $request: The request
	 * @param Tx_Extbase_MVC_Response $response: The response
	 */
	public function processRequest(Tx_Extbase_MVC_Request $request, Tx_Extbase_MVC_Response $response) {
		$response->setContent(
			"\nWelcome to TYPO3!\n\n" .
			"This is the standard view of the TYPO3 MVC object. You see this message because no \n" .
			"other view is available. Please refer to the Developer's Guide for more information \n" .
			"how to create and configure one.\n\n" .
			"Have fun! The TYPO3 Development Team\n"
		);
	}

}

?>