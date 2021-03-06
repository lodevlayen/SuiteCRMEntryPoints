<?php

/*********************************************************************************
* This code was developed by:
* LV Consulting
* You can contact us at:
* Web: www.lvlayen-consulting.com
* Email: info@lvlayen-consulting.com
********************************************************************************/

$manifest = array(
	'acceptable_sugar_flavors' => array(
		0 => 'CE',
	),
	'acceptable_sugar_versions' => array(
		'exact_matches' => array(
		0 => '6.5.20',
		1 => '6.5.21',
		2 => '6.5.22',
		),
		'regex_matches' => array(
		),
	),
	'is_uninstallable' => true,
	'name' => 'Custom EntryPoints',
	'author' => 'LV Consulting',
	'description' => 'Custom EntryPoints',
	'published_date' => '2015/11/15',
	'version' => 'v1.0',
	'type' => 'module',
);

$installdefs = array(
	'id' => 'customentrypoints'
	'copy' => array(
		array(
			'from' => '<basepath>/WebToOpportunity.php',
			'to' => 'custom/WebToOpportunity.php',
		),
		array(
			'from' => '<basepath>/WebToSeminarie.php',
			'to' => 'custom/WebToSeminarie.php',
		),		
		array(
			'from' => '<basepath>/AccountOpportunitiesChart.php',
			'to' => 'custom/AccountOpportunitiesChart.php',
		),
	),
	'entrypoints' => array(
		array(
			'from' => '<basepath>/CustomEntryPoints.php',
			'to_module' => 'application',
			),
		),
);
