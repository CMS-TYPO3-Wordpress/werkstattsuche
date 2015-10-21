<?php
namespace Fakturaberlin\Werkstattsuche\Domain\Model;

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
 * Werkstatt
 */
class Werkstatt extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * titel
	 * 
	 * @var string
	 */
	protected $titel = '';

	/**
	 * untertitel
	 * 
	 * @var string
	 */
	protected $untertitel = '';

	/**
	 * strasse
	 * 
	 * @var string
	 */
	protected $strasse = '';

	/**
	 * plz
	 * 
	 * @var string
	 */
	protected $plz = '';

	/**
	 * ort
	 * 
	 * @var string
	 */
	protected $ort = '';

	/**
	 * telefon
	 * 
	 * @var string
	 */
	protected $telefon = '';

	/**
	 * telefax
	 * 
	 * @var string
	 */
	protected $telefax = '';

	/**
	 * email
	 * 
	 * @var string
	 */
	protected $email = '';

	/**
	 * website
	 * 
	 * @var string
	 */
	protected $website = '';

	/**
	 * kontaktBeruflicheRehabilitation
	 * 
	 * @var string
	 */
	protected $kontaktBeruflicheRehabilitation = '';

	/**
	 * kontaktAuftraggeber
	 * 
	 * @var string
	 */
	protected $kontaktAuftraggeber = '';

	/**
	 * foerderbereich
	 * 
	 * @var boolean
	 */
	protected $foerderbereich = FALSE;

	/**
	 * aBFBT
	 * 
	 * @var boolean
	 */
	protected $aBFBT = FALSE;

	/**
	 * werkstattladen
	 * 
	 * @var string
	 */
	protected $werkstattladen = '';

	/**
	 * Bezirke von Berlin, in denen es eine Niederlassung der Werkstatt gibt.
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk>
	 */
	protected $bezirke = NULL;

	/**
	 * Produkt und Dienstleistungs-Angebot der Werkstatt
	 * 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen>
	 */
	protected $produkteDienstleistungen = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 * 
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->bezirke = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->produkteDienstleistungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the titel
	 * 
	 * @return string $titel
	 */
	public function getTitel() {
		return $this->titel;
	}

	/**
	 * Sets the titel
	 * 
	 * @param string $titel
	 * @return void
	 */
	public function setTitel($titel) {
		$this->titel = $titel;
	}

	/**
	 * Returns the untertitel
	 * 
	 * @return string $untertitel
	 */
	public function getUntertitel() {
		return $this->untertitel;
	}

	/**
	 * Sets the untertitel
	 * 
	 * @param string $untertitel
	 * @return void
	 */
	public function setUntertitel($untertitel) {
		$this->untertitel = $untertitel;
	}

	/**
	 * Returns the strasse
	 * 
	 * @return string $strasse
	 */
	public function getStrasse() {
		return $this->strasse;
	}

	/**
	 * Sets the strasse
	 * 
	 * @param string $strasse
	 * @return void
	 */
	public function setStrasse($strasse) {
		$this->strasse = $strasse;
	}

	/**
	 * Returns the plz
	 * 
	 * @return string $plz
	 */
	public function getPlz() {
		return $this->plz;
	}

	/**
	 * Sets the plz
	 * 
	 * @param string $plz
	 * @return void
	 */
	public function setPlz($plz) {
		$this->plz = $plz;
	}

	/**
	 * Returns the ort
	 * 
	 * @return string $ort
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * Sets the ort
	 * 
	 * @param string $ort
	 * @return void
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
	}

	/**
	 * Returns the telefon
	 * 
	 * @return string $telefon
	 */
	public function getTelefon() {
		return $this->telefon;
	}

	/**
	 * Sets the telefon
	 * 
	 * @param string $telefon
	 * @return void
	 */
	public function setTelefon($telefon) {
		$this->telefon = $telefon;
	}

	/**
	 * Returns the telefax
	 * 
	 * @return string $telefax
	 */
	public function getTelefax() {
		return $this->telefax;
	}

	/**
	 * Sets the telefax
	 * 
	 * @param string $telefax
	 * @return void
	 */
	public function setTelefax($telefax) {
		$this->telefax = $telefax;
	}

	/**
	 * Returns the email
	 * 
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 * 
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the website
	 * 
	 * @return string $website
	 */
	public function getWebsite() {
		return $this->website;
	}

	/**
	 * Sets the website
	 * 
	 * @param string $website
	 * @return void
	 */
	public function setWebsite($website) {
		$this->website = $website;
	}

	/**
	 * Returns the kontaktBeruflicheRehabilitation
	 * 
	 * @return string $kontaktBeruflicheRehabilitation
	 */
	public function getKontaktBeruflicheRehabilitation() {
		return $this->kontaktBeruflicheRehabilitation;
	}

	/**
	 * Sets the kontaktBeruflicheRehabilitation
	 * 
	 * @param string $kontaktBeruflicheRehabilitation
	 * @return void
	 */
	public function setKontaktBeruflicheRehabilitation($kontaktBeruflicheRehabilitation) {
		$this->kontaktBeruflicheRehabilitation = $kontaktBeruflicheRehabilitation;
	}

	/**
	 * Returns the kontaktAuftraggeber
	 * 
	 * @return string $kontaktAuftraggeber
	 */
	public function getKontaktAuftraggeber() {
		return $this->kontaktAuftraggeber;
	}

	/**
	 * Sets the kontaktAuftraggeber
	 * 
	 * @param string $kontaktAuftraggeber
	 * @return void
	 */
	public function setKontaktAuftraggeber($kontaktAuftraggeber) {
		$this->kontaktAuftraggeber = $kontaktAuftraggeber;
	}

	/**
	 * Adds a Bezirk
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirke
	 * @return void
	 */
	public function addBezirke(\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirke) {
		$this->bezirke->attach($bezirke);
	}

	/**
	 * Removes a Bezirk
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirkeToRemove The Bezirk to be removed
	 * @return void
	 */
	public function removeBezirke(\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk $bezirkeToRemove) {
		$this->bezirke->detach($bezirkeToRemove);
	}

	/**
	 * Returns the bezirke
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk> $bezirke
	 */
	public function getBezirke() {
		return $this->bezirke;
	}

	/**
	 * Sets the bezirke
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fakturaberlin\Werkstattsuche\Domain\Model\Bezirk> $bezirke
	 * @return void
	 */
	public function setBezirke(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bezirke) {
		$this->bezirke = $bezirke;
	}

	/**
	 * Adds a ProdukteDienstleistungen
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen
	 * @return void
	 */
	public function addProdukteDienstleistungen(\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungen) {
		$this->produkteDienstleistungen->attach($produkteDienstleistungen);
	}

	/**
	 * Removes a ProdukteDienstleistungen
	 * 
	 * @param \Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungenToRemove The ProdukteDienstleistungen to be removed
	 * @return void
	 */
	public function removeProdukteDienstleistungen(\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen $produkteDienstleistungenToRemove) {
		$this->produkteDienstleistungen->detach($produkteDienstleistungenToRemove);
	}

	/**
	 * Returns the produkteDienstleistungen
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen> $produkteDienstleistungen
	 */
	public function getProdukteDienstleistungen() {
		return $this->produkteDienstleistungen;
	}

	/**
	 * Sets the produkteDienstleistungen
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fakturaberlin\Werkstattsuche\Domain\Model\ProdukteDienstleistungen> $produkteDienstleistungen
	 * @return void
	 */
	public function setProdukteDienstleistungen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $produkteDienstleistungen) {
		$this->produkteDienstleistungen = $produkteDienstleistungen;
	}

	/**
	 * Returns the foerderbereich
	 * 
	 * @return boolean $foerderbereich
	 */
	public function getFoerderbereich() {
		return $this->foerderbereich;
	}

	/**
	 * Sets the foerderbereich
	 * 
	 * @param boolean $foerderbereich
	 * @return void
	 */
	public function setFoerderbereich($foerderbereich) {
		$this->foerderbereich = $foerderbereich;
	}

	/**
	 * Returns the boolean state of foerderbereich
	 * 
	 * @return boolean
	 */
	public function isFoerderbereich() {
		return $this->foerderbereich;
	}

	/**
	 * Returns the aBFBT
	 * 
	 * @return boolean $aBFBT
	 */
	public function getABFBT() {
		return $this->aBFBT;
	}

	/**
	 * Sets the aBFBT
	 * 
	 * @param boolean $aBFBT
	 * @return void
	 */
	public function setABFBT($aBFBT) {
		$this->aBFBT = $aBFBT;
	}

	/**
	 * Returns the boolean state of aBFBT
	 * 
	 * @return boolean
	 */
	public function isABFBT() {
		return $this->aBFBT;
	}

	/**
	 * Returns the werkstattladen
	 * 
	 * @return string $werkstattladen
	 */
	public function getWerkstattladen() {
		return $this->werkstattladen;
	}

	/**
	 * Sets the werkstattladen
	 * 
	 * @param string $werkstattladen
	 * @return void
	 */
	public function setWerkstattladen($werkstattladen) {
		$this->werkstattladen = $werkstattladen;
	}

}