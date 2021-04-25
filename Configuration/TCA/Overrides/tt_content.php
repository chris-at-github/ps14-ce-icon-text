<?php

// ---------------------------------------------------------------------------------------------------------------------
// Icon Text Module von TT-Content
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:ce_icon_text/Resources/Private/Language/locallang_tca.xlf:tx_ce_icon_text.title',
		'ce_icon_text',
		'content-textpic'
	),
	'CType',
	'ce_icon_text'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	'*',
	'FILE:EXT:ce_icon_text/Configuration/FlexForms/IconText.xml',
	'ce_icon_text'
);

$GLOBALS['TCA']['tt_content']['types']['ce_icon_text'] = [
	'showitem' => '
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,bodytext,tx_xo_elements,pi_flexform,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
			--palette--;;hidden,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
	',
];

$GLOBALS['TCA']['tt_content']['types']['ce_icon_text']['columnsOverrides']['bodytext']['config'] = [
	'enableRichtext' => true,
	'richtextConfiguration' => 'xoDefault',
];

$GLOBALS['TCA']['tt_content']['types']['ce_icon_text']['columnsOverrides']['tx_xo_elements']['config']['overrideChildTca'] = [
	'columns' => [
		'record_type' => [
			'config' => [
				'items' => [
					['LLL:EXT:ce_icon_text/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.record_type.default', 'icon_text_default'],
				],
				'default' => 'icon_text_default'
			]
		],
		'media' => [
			'label' => 'LLL:EXT:ce_icon_text/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.media'
		],
		'description' => [
			'config' => [
				'richtextConfiguration' => 'xoMinimal'
			]
		],
	],
	'types' => [
		'icon_text_default' => [
			'showitem' => '
				l10n_diffsource, record_type, --palette--;;header, link, description, media,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
				--palette--;;visibility,
				--palette--;;access',
		],
	]
];