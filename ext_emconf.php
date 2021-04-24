<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Ps14 Icon Text',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Christian Pschorr',
	'author_email' => 'pschorr.christian@gmail.com',
	'state' => 'alpha',
	'clearCacheOnLoad' => 0,
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '10.4.0-10.4.99',
			'xna' => '1.0.0-1.99.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
	'autoload' => [
		'psr-4' => [
			'Ps14\\CeIconText\\' => 'Classes',
		],
	],
];
