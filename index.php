<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';

// Overwrite with dev file if the dev file exists
if (file_exists(dirname(__FILE__).'/protected/config/dev.php')) 
{
    $config=dirname(__FILE__).'/protected/config/dev.php';
    
        // remove the following lines when in production mod
    defined('YII_DEBUG') or define('YII_DEBUG',true);
    
    // specify how many levels of call stack should be shown in each log message
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
}
else 
{
    $config=dirname(__FILE__).'/protected/config/main.php';
}



require_once($yii);
Yii::createWebApplication($config)->run();