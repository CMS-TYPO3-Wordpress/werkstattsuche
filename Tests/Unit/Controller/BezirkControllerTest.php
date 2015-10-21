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
 * Test case for class Fakturaberlin\Werkstattsuche\Controller\BezirkController.
 *
 * @author Thomas Wöhlke <woehlke@faktura-berlin.de>
 */
class BezirkControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Fakturaberlin\Werkstattsuche\Controller\BezirkController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Fakturaberlin\\Werkstattsuche\\Controller\\BezirkController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}



	/**
	 * @test
	 */
	public function listActionFetchesAllBezirksFromRepositoryAndAssignsThemToView() {

		$allBezirks = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$bezirkRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\BezirkRepository', array('findAll'), array(), '', FALSE);
		$bezirkRepository->expects($this->once())->method('findAll')->will($this->returnValue($allBezirks));
		$this->inject($this->subject, 'bezirkRepository', $bezirkRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('bezirks', $allBezirks);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenBezirkToView() {
		$bezirk = new \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('bezirk', $bezirk);

		$this->subject->showAction($bezirk);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenBezirkToView() {
		$bezirk = new \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newBezirk', $bezirk);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($bezirk);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenBezirkToBezirkRepository() {
		$bezirk = new \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk();

		$bezirkRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\BezirkRepository', array('add'), array(), '', FALSE);
		$bezirkRepository->expects($this->once())->method('add')->with($bezirk);
		$this->inject($this->subject, 'bezirkRepository', $bezirkRepository);

		$this->subject->createAction($bezirk);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenBezirkToView() {
		$bezirk = new \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('bezirk', $bezirk);

		$this->subject->editAction($bezirk);
	}


	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenBezirkInBezirkRepository() {
		$bezirk = new \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk();

		$bezirkRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\BezirkRepository', array('update'), array(), '', FALSE);
		$bezirkRepository->expects($this->once())->method('update')->with($bezirk);
		$this->inject($this->subject, 'bezirkRepository', $bezirkRepository);

		$this->subject->updateAction($bezirk);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenBezirkFromBezirkRepository() {
		$bezirk = new \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk();

		$bezirkRepository = $this->getMock('Fakturaberlin\\Werkstattsuche\\Domain\\Repository\\BezirkRepository', array('remove'), array(), '', FALSE);
		$bezirkRepository->expects($this->once())->method('remove')->with($bezirk);
		$this->inject($this->subject, 'bezirkRepository', $bezirkRepository);

		$this->subject->deleteAction($bezirk);
	}
}
