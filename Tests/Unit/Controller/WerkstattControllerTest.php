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
 * Test case for class Fakturaberlin\Werkstattsuche\Controller\WerkstattController.
 *
 * @author Thomas Wöhlke <woehlke@faktura-berlin.de>
 */
class WerkstattControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Fakturaberlin\Werkstattsuche\Controller\WerkstattController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Fakturaberlin\\Werkstattsuche\\Controller\\WerkstattController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}



	/**
	 * @test
	 */
	public function listActionFetchesAllWerkstattsFromRepositoryAndAssignsThemToView() {

		$allWerkstatts = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$werkstattRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\WerkstattRepository', array('findAll'), array(), '', FALSE);
		$werkstattRepository->expects($this->once())->method('findAll')->will($this->returnValue($allWerkstatts));
		$this->inject($this->subject, 'werkstattRepository', $werkstattRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('werkstatts', $allWerkstatts);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenWerkstattToView() {
		$werkstatt = new \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('werkstatt', $werkstatt);

		$this->subject->showAction($werkstatt);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenWerkstattToView() {
		$werkstatt = new \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newWerkstatt', $werkstatt);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($werkstatt);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenWerkstattToWerkstattRepository() {
		$werkstatt = new \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt();

		$werkstattRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\WerkstattRepository', array('add'), array(), '', FALSE);
		$werkstattRepository->expects($this->once())->method('add')->with($werkstatt);
		$this->inject($this->subject, 'werkstattRepository', $werkstattRepository);

		$this->subject->createAction($werkstatt);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenWerkstattToView() {
		$werkstatt = new \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('werkstatt', $werkstatt);

		$this->subject->editAction($werkstatt);
	}


	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenWerkstattInWerkstattRepository() {
		$werkstatt = new \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt();

		$werkstattRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\WerkstattRepository', array('update'), array(), '', FALSE);
		$werkstattRepository->expects($this->once())->method('update')->with($werkstatt);
		$this->inject($this->subject, 'werkstattRepository', $werkstattRepository);

		$this->subject->updateAction($werkstatt);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenWerkstattFromWerkstattRepository() {
		$werkstatt = new \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt();

		$werkstattRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\WerkstattRepository', array('remove'), array(), '', FALSE);
		$werkstattRepository->expects($this->once())->method('remove')->with($werkstatt);
		$this->inject($this->subject, 'werkstattRepository', $werkstattRepository);

		$this->subject->deleteAction($werkstatt);
	}
}
