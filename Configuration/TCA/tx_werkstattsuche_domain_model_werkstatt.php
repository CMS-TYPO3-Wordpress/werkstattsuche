<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt',
		'label' => 'titel',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'titel,untertitel,strasse,plz,ort,telefon,telefax,email,website,kontakt_berufliche_rehabilitation,kontakt_auftraggeber,foerderbereich,a_b_f_b_t,werkstattladen,bezirke,produkte_dienstleistungen,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('werkstattsuche') . 'Resources/Public/Icons/tx_werkstattsuche_domain_model_werkstatt.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, titel, untertitel, strasse, plz, ort, telefon, telefax, email, website, kontakt_berufliche_rehabilitation, kontakt_auftraggeber, foerderbereich, a_b_f_b_t, werkstattladen, bezirke, produkte_dienstleistungen',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, titel, untertitel, strasse, plz, ort, telefon, telefax, email, website, kontakt_berufliche_rehabilitation;;;richtext:rte_transform[mode=ts_links], kontakt_auftraggeber;;;richtext:rte_transform[mode=ts_links], foerderbereich, a_b_f_b_t, werkstattladen, bezirke, produkte_dienstleistungen, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_werkstattsuche_domain_model_werkstatt',
				'foreign_table_where' => 'AND tx_werkstattsuche_domain_model_werkstatt.pid=###CURRENT_PID### AND tx_werkstattsuche_domain_model_werkstatt.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		
		
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		
	
		'titel' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.titel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'untertitel' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.untertitel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'strasse' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.strasse',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'plz' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.plz',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ort' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.ort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'telefon' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.telefon',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'telefax' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.telefax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'website' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.website',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'kontakt_berufliche_rehabilitation' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.kontakt_berufliche_rehabilitation',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'kontakt_auftraggeber' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.kontakt_auftraggeber',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'foerderbereich' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.foerderbereich',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'a_b_f_b_t' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.a_b_f_b_t',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'werkstattladen' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.werkstattladen',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bezirke' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.bezirke',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_werkstattsuche_domain_model_bezirk',
				'MM' => 'tx_werkstattsuche_werkstatt_bezirk_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'module' => array(
							'name' => 'wizard_edit',
						),
						'type' => 'popup',
						'title' => 'Edit',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'module' => array(
							'name' => 'wizard_add',
						),
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_werkstattsuche_domain_model_bezirk',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
					),
				),
			),
		),
		'produkte_dienstleistungen' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:werkstattsuche/Resources/Private/Language/locallang_db.xlf:tx_werkstattsuche_domain_model_werkstatt.produkte_dienstleistungen',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_werkstattsuche_domain_model_produktedienstleistungen',
				'MM' => 'tx_werkstattsuche_werkstatt_produktedienstleistungen_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'module' => array(
							'name' => 'wizard_edit',
						),
						'type' => 'popup',
						'title' => 'Edit',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'module' => array(
							'name' => 'wizard_add',
						),
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_werkstattsuche_domain_model_produktedienstleistungen',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
					),
				),
			),
		),
		
	),
);