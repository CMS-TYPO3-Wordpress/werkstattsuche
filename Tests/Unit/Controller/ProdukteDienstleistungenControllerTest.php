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
 * Test case for class Fakturaberlin\Werkstattsuche\Controller\ProdukteDienstleistungenController.
 *
 * @author Thomas Wöhlke <woehlke@faktura-berlin.de>
 */
class ProdukteDienstleistungenControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Fakturaberlin\Werkstattsuche\Controller\ProdukteDienstleistungenController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Fakturaberlin\\Werkstattsuche\\Controller\\ProdukteDienstleistungenController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}



	/**
	 * @test
	 */
	public function listActionFetchesAllProdukteDienstleistungensFromRepositoryAndAssignsThemToView() {

		$allProdukteDienstleistungens = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$produkteDienstleistungenRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\ProdukteDienstleistungenRepository', array('findAll'), array(), '', FALSE);
		$produkteDienstleistungenRepository->expects($this->once())->method('findAll')->will($this->returnValue($allProdukteDienstleistungens));
		$this->inject($this->subject, 'produkteDienstleistungenRepository', $produkteDienstleistungenRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('produkteDienstleistungens', $allProdukteDienstleistungens);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenProdukteDienstleistungenToView() {
		$produkteDienstleistungen = new \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('produkteDienstleistungen', $produkteDienstleistungen);

		$this->subject->showAction($produkteDienstleistungen);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenProdukteDienstleistungenToView() {
		$produkteDienstleistungen = new \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newProdukteDienstleistungen', $produkteDienstleistungen);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($produkteDienstleistungen);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenProdukteDienstleistungenToProdukteDienstleistungenRepository() {
		$produkteDienstleistungen = new \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen();

		$produkteDienstleistungenRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\ProdukteDienstleistungenRepository', array('add'), array(), '', FALSE);
		$produkteDienstleistungenRepository->expects($this->once())->method('add')->with($produkteDienstleistungen);
		$this->inject($this->subject, 'produkteDienstleistungenRepository', $produkteDienstleistungenRepository);

		$this->subject->createAction($produkteDienstleistungen);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenProdukteDienstleistungenToView() {
		$produkteDienstleistungen = new \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('produkteDienstleistungen', $produkteDienstleistungen);

		$this->subject->editAction($produkteDienstleistungen);
	}


	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenProdukteDienstleistungenInProdukteDienstleistungenRepository() {
		$produkteDienstleistungen = new \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen();

		$produkteDienstleistungenRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\ProdukteDienstleistungenRepository', array('update'), array(), '', FALSE);
		$produkteDienstleistungenRepository->expects($this->once())->method('update')->with($produkteDienstleistungen);
		$this->inject($this->subject, 'produkteDienstleistungenRepository', $produkteDienstleistungenRepository);

		$this->subject->updateAction($produkteDienstleistungen);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenProdukteDienstleistungenFromProdukteDienstleistungenRepository() {
		$produkteDienstleistungen = new \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen();

		$produkteDienstleistungenRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\ProdukteDienstleistungenRepository', array('remove'), array(), '', FALSE);
		$produkteDienstleistungenRepository->expects($this->once())->method('remove')->with($produkteDienstleistungen);
		$this->inject($this->subject, 'produkteDienstleistungenRepository', $produkteDienstleistungenRepository);

		$this->subject->deleteAction($produkteDienstleistungen);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllProdukteDienstleistungensFromRepositoryAndAssignsThemToView() {

		$allProdukteDienstleistungens = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$produkteDienstleistungenRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\ProdukteDienstleistungenRepository', array('findAll'), array(), '', FALSE);
		$produkteDienstleistungenRepository->expects($this->once())->method('findAll')->will($this->returnValue($allProdukteDienstleistungens));
		$this->inject($this->subject, 'produkteDienstleistungenRepository', $produkteDienstleistungenRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('produkteDienstleistungens', $allProdukteDienstleistungens);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}
}
