<?php
namespace Fakturaberlin\Werkstattsuche\Domain\Repository;

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
 * The repository for Werkstatts
 */
class WerkstattRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	protected $defaultOrderings = array('titel' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING);

	/**
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findByABFBT() {
		$query = $this->createQuery();
		$query->matching($query->equals('aBFBT', TRUE));
		return $query->execute();
	}

	/**
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findByFoerdergruppen() {
		$query = $this->createQuery();
		$query->matching($query->equals('foerderbereich', TRUE));
		return $query->execute();
	}

	/**
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findByWerkstattlaeden() {
		$query = $this->createQuery();
		$query->matching($query->logicalNot($query->equals('werkstattladen', '')));
		return $query->execute();
	}

	/**
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findByBezirk(\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirk) {
		$query = $this->createQuery();
		$query->matching($query->contains('bezirke', $bezirk));
		return $query->execute();
	}

	/**
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findByAngebot(\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen) {
		$query = $this->createQuery();
		$query->matching($query->contains('produkteDienstleistungen', $produkteDienstleistungen));
		return $query->execute();
	}

}