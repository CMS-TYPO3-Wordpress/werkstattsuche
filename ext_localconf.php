<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Fakturaberlin.' . $_EXTKEY,
	'Werkstattliste',
	array(
		'Werkstatt' => 'list, show, werkstaettenImBezirk, werkstaettenProAngebot, werkstattAuswahl',
		
	),
	// non-cacheable actions
	array(
		'Werkstatt' => 'list, werkstaettenImBezirk, werkstaettenProAngebot, werkstattAuswahl',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Fakturaberlin.' . $_EXTKEY,
	'Foerdergruppen',
	array(
		'Werkstatt' => 'foerdergruppen, show',
		
	),
	// non-cacheable actions
	array(
		'Werkstatt' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Fakturaberlin.' . $_EXTKEY,
	'Abfbt',
	array(
		'Werkstatt' => 'aBFBT, show',
		
	),
	// non-cacheable actions
	array(
		'Werkstatt' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Fakturaberlin.' . $_EXTKEY,
	'Werkstattkarte',
	array(
		'Werkstatt' => 'werkstattkarte, show',
		
	),
	// non-cacheable actions
	array(
		'Werkstatt' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Fakturaberlin.' . $_EXTKEY,
	'Produkt2werkstatt',
	array(
		'ProduktKategorie' => 'list, werkstattlaeden',
        'ProdukteDienstleistungen' => 'category2produktlist',
        'Werkstatt' => 'werkstaettenProAngebot, show',
	),
	// non-cacheable actions
	array(
		'ProduktKategorie' => 'list, werkstattlaeden',
        'ProdukteDienstleistungen' => 'category2produktlist',
        'Werkstatt' => 'werkstaettenProAngebot',
	)
);
