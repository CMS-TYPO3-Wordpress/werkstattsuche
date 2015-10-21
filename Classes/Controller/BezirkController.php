<?php
namespace Fakturaberlin\Werkstattsuche\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * BezirkController
 */
class BezirkController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * bezirkRepository
	 * 
	 * @var \Fakturaberlin\Werkstattsuche\Domain\Repository\BezirkRepository
	 * @inject
	 */
	protected $bezirkRepository = NULL;

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$bezirks = $this->bezirkRepository->findAll();
		$this->view->assign('bezirks', $bezirks);
	}

	/**
	 * action show
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk
	 * @return void
	 */
	public function showAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk) {
		$this->view->assign('bezirk', $bezirk);
	}

	/**
	 * action new
	 * 
	 * @return void
	 */
	public function newAction() {
		
	}

	/**
	 * action create
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $newBezirk
	 * @return void
	 */
	public function createAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $newBezirk) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->bezirkRepository->add($newBezirk);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk
	 * @ignorevalidation $bezirk
	 * @return void
	 */
	public function editAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk) {
		$this->view->assign('bezirk', $bezirk);
	}

	/**
	 * action update
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk
	 * @return void
	 */
	public function updateAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->bezirkRepository->update($bezirk);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk
	 * @return void
	 */
	public function deleteAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->bezirkRepository->remove($bezirk);
		$this->redirect('list');
	}

}