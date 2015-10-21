<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Werkstattliste',
	'Werkstatt Liste'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Foerdergruppen',
	'Fördergruppen'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Abfbt',
	'ABFBT'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Werkstattlaeden',
	'Werkstattläden'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Werkstattkarte',
	'Werkstattkarte'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Produkt2werkstatt',
	'Werkstattsuche nach Produkten'
);



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'werkstattsuche');


	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_werkstattsuche_domain_model_werkstatt', 'EXT:werkstattsuche/Resources/Private/Language/locallang_csh_tx_werkstattsuche_domain_model_werkstatt.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_werkstattsuche_domain_model_werkstatt');
	

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_werkstattsuche_domain_model_bezirk', 'EXT:werkstattsuche/Resources/Private/Language/locallang_csh_tx_werkstattsuche_domain_model_bezirk.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_werkstattsuche_domain_model_bezirk');
	

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_werkstattsuche_domain_model_produktedienstleistungen', 'EXT:werkstattsuche/Resources/Private/Language/locallang_csh_tx_werkstattsuche_domain_model_produktedienstleistungen.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_werkstattsuche_domain_model_produktedienstleistungen');
	

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_werkstattsuche_domain_model_produktkategorie', 'EXT:werkstattsuche/Resources/Private/Language/locallang_csh_tx_werkstattsuche_domain_model_produktkategorie.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_werkstattsuche_domain_model_produktkategorie');
