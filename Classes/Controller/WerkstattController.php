<?php
/* declare(ENCODING = 'utf-8'); */
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
 * WerkstattController
 */
class WerkstattController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * werkstattRepository
	 * 
	 * @var \Fakturaberlin\Werkstattsuche\Domain\Repository\WerkstattRepository
	 * @inject
	 */
	protected $werkstattRepository = NULL;

	/**
	 * bezirkRepository
	 * 
	 * @var \Fakturaberlin\Werkstattsuche\Domain\Repository\BezirkRepository
	 * @inject
	 */
	protected $bezirkRepository = NULL;

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
		$this->view->assign('werkstattlistenUeberschrift', 'Alle Werkstätten in Berlin');
		$werkstatts = $this->werkstattRepository->findAll();
		$this->view->assign('werkstatts', $werkstatts);
		$bezirke = $this->bezirkRepository->findAll();
		$this->view->assign('bezirke', $bezirke);
		$produkteDienstleistungens = $this->produkteDienstleistungenRepository->findAll();
		$this->view->assign('produkteDienstleistungens', $produkteDienstleistungens);
	}

	/**
	 * action show
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt $werkstatt
	 * @return void
	 */
	public function showAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt $werkstatt) {
		$apiKey="";
		$width=500;
		$height=300;
		// http://docs.typo3.org/typo3cms/extensions/wec_map/Configuration/CreateTheMapObject/Index.html
		include_once(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('typo3conf/ext/wec_map/map_service/google/class.tx_wecmap_map_google.php'));
		$className = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance("tx_wecmap_map_google");
		$map = new $className($apiKey, $width, $height);
		$map->addMarkerByAddress($werkstatt->getStrasse(),$werkstatt->getOrt(),"",$werkstatt->getPlz(),"Germany",$werkstatt->getTitel());
		$output = $map->drawMap();
		$this->view->assign('googlemap', $output);
		$this->view->assign('werkstatt', $werkstatt);
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
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt $newWerkstatt
	 * @return void
	 */
	public function createAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt $newWerkstatt) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->werkstattRepository->add($newWerkstatt);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt $werkstatt
	 * @ignorevalidation $werkstatt
	 * @return void
	 */
	public function editAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt $werkstatt) {
		$this->view->assign('werkstatt', $werkstatt);
	}

	/**
	 * action update
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt $werkstatt
	 * @return void
	 */
	public function updateAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt $werkstatt) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->werkstattRepository->update($werkstatt);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt $werkstatt
	 * @return void
	 */
	public function deleteAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt $werkstatt) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->werkstattRepository->remove($werkstatt);
		$this->redirect('list');
	}

	/**
	 * action foerdergruppen
	 * 
	 * @return void
	 */
	public function foerdergruppenAction() {
		$werkstatts = $this->werkstattRepository->findByFoerdergruppen();
		$this->view->assign('werkstatts', $werkstatts);
	}

	/**
	 * action aBFBT
	 * 
	 * @return void
	 */
	public function aBFBTAction() {
		$werkstatts = $this->werkstattRepository->findByABFBT();
		$this->view->assign('werkstatts', $werkstatts);
	}

	/**
	 * action werkstaettenImBezirk
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk
	 * @return void
	 */
	public function werkstaettenImBezirkAction(\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk) {
		$this->view->setTemplatePathAndFilename(
			\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName(
				'typo3conf/ext/werkstattsuche/Resources/Private/Templates/Werkstatt/List.html'
			)
		);
		$ueberschrift = 'Werkstätten in ' . $bezirk->getName();
		$this->view->assign('werkstattlistenUeberschrift', $ueberschrift);
		$werkstatts = $this->werkstattRepository->findByBezirk($bezirk);
		$this->view->assign('werkstatts', $werkstatts);
		$bezirke = $this->bezirkRepository->findAll();
		$this->view->assign('bezirke', $bezirke);
		$produkteDienstleistungens = $this->produkteDienstleistungenRepository->findAll();
		$this->view->assign('produkteDienstleistungens', $produkteDienstleistungens);
	}

	/**
	 * action werkstaettenProAngebot
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen
	 * @return void
	 */
	public function werkstaettenProAngebotAction(\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen) {
		$werkstatts = $this->werkstattRepository->findByAngebot($produkteDienstleistungen);
		$this->view->assign('werkstatts', $werkstatts);
		$bezirke = $this->bezirkRepository->findAll();
		$this->view->assign('bezirke', $bezirke);
		$produkteDienstleistungens = $this->produkteDienstleistungenRepository->findAll();
		$this->view->assign('produkteDienstleistungens', $produkteDienstleistungens);
		$this->view->assign('produkteDienstleistungen', $produkteDienstleistungen);
	}

	/**
	 * action werkstattAuswahl
	 * 
	 * @return void
	 */
	public function werkstattAuswahlAction() {
		$this->view->assign('werkstattlistenUeberschrift', 'Suchergebnis');
		$this->view->setTemplatePathAndFilename(
			\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName(
				'typo3conf/ext/werkstattsuche/Resources/Private/Templates/Werkstatt/List.html'
			)
		);
		$bezirke = $this->bezirkRepository->findAll();
		$this->view->assign('bezirke', $bezirke);
		$produkteDienstleistungens = $this->produkteDienstleistungenRepository->findAll();
		$this->view->assign('produkteDienstleistungens', $produkteDienstleistungens);
		// /** @var $logger \TYPO3\CMS\Core\Log\Logger */
		//$logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);
		$bezirkArray = $this->request->getArgument('bezirk');
		$angebotArray = $this->request->getArgument('angebot');
		//$logger->info('werkstattAuswahlAction: Bezirke ', $bezirkArray);
		//$logger->info('werkstattAuswahlAction: Angebote', $angebotArray);
		/*
		 * Validierung
		 */

		$inputOk = true;
		if (is_array($bezirkArray) and is_array($angebotArray)) {
			foreach ($bezirkArray as $bezirkArrayId) {
				if (!is_numeric($bezirkArrayId)) {
					$inputOk = false;
				} else {
					$bezirkArrayId *= 1;
					if (!is_int($bezirkArrayId)) {
						$inputOk = false;
					}
				}
			}
			foreach ($angebotArray as $angebotArrayId) {
				if (!is_numeric($angebotArrayId)) {
					$inputOk = false;
				} else {
					$angebotArrayId *= 1;
					if (!is_int($angebotArrayId)) {
						$inputOk = false;
					}
				}
			}
		}
		if ($inputOk) {
			$bezirks = array();
			foreach ($bezirkArray as $bezirkArrayId) {
				$bezirk = $this->bezirkRepository->findByUid($bezirkArrayId);
				if (!is_null($bezirk)) {
					$bezirks[] = $bezirk;
				}
			}
			$angebots = array();
			foreach ($angebotArray as $angebotArrayId) {
				$angebot = $this->produkteDienstleistungenRepository->findByUid($angebotArrayId);
				if (!is_null($angebot)) {
					$angebots[] = $angebot;
				}
			}
			$werkstatts = array();
			//assuming, that there is small number of $werkstatts
			$werkstatts_all = $this->werkstattRepository->findAll();
			foreach ($werkstatts_all as $werkstatt) {
				//$x = array($werkstatts_all,$werkstatt);
				//$logger->info('werkstattAuswahlAction: $werkstatt ', $x);
				$angebot_found = false;
				$bezirk_found = false;
				foreach ($werkstatt->getProdukteDienstleistungen() as $angebot) {
					if (in_array($angebot, $angebots)) {
						$angebot_found = true;
					}
				}
				foreach ($werkstatt->getBezirke() as $bezirk) {
					if (in_array($bezirk, $bezirks)) {
						$bezirk_found = true;
					}
				}
                if((count($angebots)==0) and (count($bezirks)>0)){
					$angebot_found = true;
				}
                if((count($bezirks)==0) and (count($angebots)>0)){
					$bezirk_found = true;
				}
				if ($angebot_found and $bezirk_found) {
					$werkstatts[] = $werkstatt;
				}
			}
			$this->view->assign('werkstatts', $werkstatts);
		} else {
			$werkstatts = $this->werkstattRepository->findAll();
			$this->view->assign('werkstatts', $werkstatts);
		}
	}

}