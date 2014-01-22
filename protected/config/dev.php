<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			
                    'db'=>array(
			'connectionString' => 'sqlsrv:server=htg-db-01\ops; Database=onm_reporting;',
//			'emulatePrepare' => true,
			'username' => 'sa',
			'password' => 'AFtony19833',
//			'charset' => 'utf8',
		),
	),
));
