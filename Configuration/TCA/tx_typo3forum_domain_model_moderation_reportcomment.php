<?php

$lllPath = 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang_db.xml:tx_typo3forum_domain_model_moderation_reportcomment.';

return [
	'ctrl' => [
		'title' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang_db.xml:tx_typo3forum_domain_model_moderation_reportcomment',
		'label' => 'text',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'enablecolumns' => [
			'disabled' => 'hidden'
		],
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('typo3_forum') . 'Resources/Public/Icons/Moderation/ReportComment.png'
	],
	'interface' => [
		'showRecordFieldList' => 'report,author,text,tstamp'
	],
	'types' => [
		'1' => ['showitem' => 'report,author,text'],
	],
	'columns' => [
		'hidden' => [
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => [
				'type' => 'check',
			],
		],
		'tstamp' => [
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.tstamp',
			'config'  => [
				'type' => 'passthrough',
			],
		],
		'report' => [
			'exclude' => 1,
			'label'   => $lllPath . 'report',
			'config' => [
				'type' => 'select',
				'foreign_table' => 'tx_typo3forum_domain_model_moderation_report',
				'maxitems' => 1,
			],
		],
		'author' => [
			'exclude' => 1,
			'label'   => $lllPath . 'author',
			'config' => [
				'type' => 'select',
				'foreign_table' => 'fe_users',
				'maxitems' => 1,
			],
		],
		'text' => [
			'exclude' => 1,
			'label'   => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang_db.xml:tx_typo3forum_domain_model_moderation_report.moderator',
			'config' => [
				'type' => 'text',
			],
		],
	],
];
