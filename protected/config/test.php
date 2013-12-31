<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			
                    'db'=>array(
			'connectionString' => 'dblib:host=HTG-LP-59\OPS:1433; dbname=onm',
//			'emulatePrepare' => true,
			'username' => 'sa',
			'password' => 'AFtony19833',
//			'charset' => 'utf8',
                        ),
                    
		),
	)
);
