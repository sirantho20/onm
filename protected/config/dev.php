<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			
//                    'db'=>array(
//			'connectionString' => 'dblib:host=10.3.0.55\OPS; dbname=onm',
////			'emulatePrepare' => true,
//			'username' => 'sa',
//			'password' => 'AFtony19833',
////			'charset' => 'utf8',
//                        ),
                    
		),
	)
);
