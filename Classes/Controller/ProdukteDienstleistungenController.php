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
 * ProdukteDienstleistungenController
 */
class ProdukteDienstleistungenController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * produkteDienstleistungenRepository
	 * 
	 * @var \Fakturaberlin\Werkstattsuche\Domain\Repository\ProdukteDienstleistungenRepository
	 * @inject
	 */
	protected $produkteDienstleistungenRepository = NULL;

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$produkteDienstleistungens = $this->produkteDienstleistungenRepository->findAll();
		$this->view->assign('produkteDienstleistungens', $produkteDienstleistungens);
	}

	/**
	 * action show
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen
	 * @return void
	 */
	public function showAction(\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen) {
		$this->view->assign('produkteDienstleistungen', $produkteDienstleistungen);
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
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $newProdukteDienstleistungen
	 * @return void
	 */
	public function createAction(\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $newProdukteDienstleistungen) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->produkteDienstleistungenRepository->add($newProdukteDienstleistungen);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen
	 * @ignorevalidation $produkteDienstleistungen
	 * @return void
	 */
	public function editAction(\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen) {
		$this->view->assign('produkteDienstleistungen', $produkteDienstleistungen);
	}

	/**
	 * action update
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen
	 * @return void
	 */
	public function updateAction(\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->produkteDienstleistungenRepository->update($produkteDienstleistungen);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen
	 * @return void
	 */
	public function deleteAction(\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->produkteDienstleistungenRepository->remove($produkteDienstleistungen);
		$this->redirect('list');
	}

	/**
	 * action category2produktlist
	 *
     * @param \Fakturaberlin\Werkstattsuche\Domain\Model\ProduktKategorie $produktKategorie
	 * @return void
	 */
	public function category2produktlistAction(\Fakturaberlin\Werkstattsuche\Domain\Model\ProduktKategorie $produktKategorie) {
        $produkteDienstleistungens = $this->produkteDienstleistungenRepository->findByProduktkategorie($produktKategorie);
        $this->view->assign('produkteDienstleistungens', $produkteDienstleistungens);
        $this->view->assign('produktKategorie',$produktKategorie);
	}

	/**
	 * action
	 * 
	 * @return void
	 */
	public function Action() {
		
	}

}