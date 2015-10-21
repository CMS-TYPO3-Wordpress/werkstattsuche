<?php

namespace Fakturaberlin\Werkstattsuche\Tests\Unit\Domain\Model;

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
 * Test case for class \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Thomas Wöhlke <woehlke@faktura-berlin.de>
 */
class WerkstattTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Fakturaberlin\Werkstattsuche\Domain\Model\Werkstatt();
	}

	protected function tearDown() {
		unset($this->subject);
	}



	/**
	 * @test
	 */
	public function getTitelReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitel()
		);
	}

	/**
	 * @test
	 */
	public function setTitelForStringSetsTitel() {
		$this->subject->setTitel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'titel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUntertitelReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getUntertitel()
		);
	}

	/**
	 * @test
	 */
	public function setUntertitelForStringSetsUntertitel() {
		$this->subject->setUntertitel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'untertitel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStrasseReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStrasse()
		);
	}

	/**
	 * @test
	 */
	public function setStrasseForStringSetsStrasse() {
		$this->subject->setStrasse('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'strasse',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPlzReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPlz()
		);
	}

	/**
	 * @test
	 */
	public function setPlzForStringSetsPlz() {
		$this->subject->setPlz('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'plz',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOrtReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOrt()
		);
	}

	/**
	 * @test
	 */
	public function setOrtForStringSetsOrt() {
		$this->subject->setOrt('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ort',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTelefonReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTelefon()
		);
	}

	/**
	 * @test
	 */
	public function setTelefonForStringSetsTelefon() {
		$this->subject->setTelefon('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'telefon',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTelefaxReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTelefax()
		);
	}

	/**
	 * @test
	 */
	public function setTelefaxForStringSetsTelefax() {
		$this->subject->setTelefax('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'telefax',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() {
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWebsiteReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWebsite()
		);
	}

	/**
	 * @test
	 */
	public function setWebsiteForStringSetsWebsite() {
		$this->subject->setWebsite('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'website',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKontaktBeruflicheRehabilitationReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getKontaktBeruflicheRehabilitation()
		);
	}

	/**
	 * @test
	 */
	public function setKontaktBeruflicheRehabilitationForStringSetsKontaktBeruflicheRehabilitation() {
		$this->subject->setKontaktBeruflicheRehabilitation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'kontaktBeruflicheRehabilitation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKontaktAuftraggeberReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getKontaktAuftraggeber()
		);
	}

	/**
	 * @test
	 */
	public function setKontaktAuftraggeberForStringSetsKontaktAuftraggeber() {
		$this->subject->setKontaktAuftraggeber('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'kontaktAuftraggeber',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFoerderbereichReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getFoerderbereich()
		);
	}

	/**
	 * @test
	 */
	public function setFoerderbereichForBooleanSetsFoerderbereich() {
		$this->subject->setFoerderbereich(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'foerderbereich',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getABFBTReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getABFBT()
		);
	}

	/**
	 * @test
	 */
	public function setABFBTForBooleanSetsABFBT() {
		$this->subject->setABFBT(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'aBFBT',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWerkstattladenReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWerkstattladen()
		);
	}

	/**
	 * @test
	 */
	public function setWerkstattladenForStringSetsWerkstattladen() {
		$this->subject->setWerkstattladen('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'werkstattladen',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBezirkeReturnsInitialValueForBezirk() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getBezirke()
		);
	}

	/**
	 * @test
	 */
	public function setBezirkeForObjectStorageContainingBezirkSetsBezirke() {
		$bezirke = new \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk();
		$objectStorageHoldingExactlyOneBezirke = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneBezirke->attach($bezirke);
		$this->subject->setBezirke($objectStorageHoldingExactlyOneBezirke);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneBezirke,
			'bezirke',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addBezirkeToObjectStorageHoldingBezirke() {
		$bezirke = new \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk();
		$bezirkeObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$bezirkeObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($bezirke));
		$this->inject($this->subject, 'bezirke', $bezirkeObjectStorageMock);

		$this->subject->addBezirke($bezirke);
	}

	/**
	 * @test
	 */
	public function removeBezirkeFromObjectStorageHoldingBezirke() {
		$bezirke = new \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk();
		$bezirkeObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$bezirkeObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($bezirke));
		$this->inject($this->subject, 'bezirke', $bezirkeObjectStorageMock);

		$this->subject->removeBezirke($bezirke);

	}

	/**
	 * @test
	 */
	public function getProdukteDienstleistungenReturnsInitialValueForProdukteDienstleistungen() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getProdukteDienstleistungen()
		);
	}

	/**
	 * @test
	 */
	public function setProdukteDienstleistungenForObjectStorageContainingProdukteDienstleistungenSetsProdukteDienstleistungen() {
		$produkteDienstleistungen = new \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen();
		$objectStorageHoldingExactlyOneProdukteDienstleistungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneProdukteDienstleistungen->attach($produkteDienstleistungen);
		$this->subject->setProdukteDienstleistungen($objectStorageHoldingExactlyOneProdukteDienstleistungen);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneProdukteDienstleistungen,
			'produkteDienstleistungen',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addProdukteDienstleistungenToObjectStorageHoldingProdukteDienstleistungen() {
		$produkteDienstleistungen = new \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen();
		$produkteDienstleistungenObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$produkteDienstleistungenObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($produkteDienstleistungen));
		$this->inject($this->subject, 'produkteDienstleistungen', $produkteDienstleistungenObjectStorageMock);

		$this->subject->addProdukteDienstleistungen($produkteDienstleistungen);
	}

	/**
	 * @test
	 */
	public function removeProdukteDienstleistungenFromObjectStorageHoldingProdukteDienstleistungen() {
		$produkteDienstleistungen = new \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen();
		$produkteDienstleistungenObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$produkteDienstleistungenObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($produkteDienstleistungen));
		$this->inject($this->subject, 'produkteDienstleistungen', $produkteDienstleistungenObjectStorageMock);

		$this->subject->removeProdukteDienstleistungen($produkteDienstleistungen);

	}
}
