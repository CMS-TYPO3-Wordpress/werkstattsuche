<?php
namespace Fakturaberlin\Werkstattsuche\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Thomas Wöhlke <woehlke@faktura-berlin.de>, faktura gGmbH
 *  			
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
 * Test case for class Fakturaberlin\Werkstattsuche\Controller\ProduktKategorieController.
 *
 * @author Thomas Wöhlke <woehlke@faktura-berlin.de>
 */
class ProduktKategorieControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Fakturaberlin\Werkstattsuche\Controller\ProduktKategorieController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Fakturaberlin\\Werkstattsuche\\Controller\\ProduktKategorieController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}



	/**
	 * @test
	 */
	public function listActionFetchesAllProduktKategoriesFromRepositoryAndAssignsThemToView() {

		$allProduktKategories = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$produktKategorieRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\ProduktKategorieRepository', array('findAll'), array(), '', FALSE);
		$produktKategorieRepository->expects($this->once())->method('findAll')->will($this->returnValue($allProduktKategories));
		$this->inject($this->subject, 'produktKategorieRepository', $produktKategorieRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('produktKategories', $allProduktKategories);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}
}
