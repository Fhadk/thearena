<?php
$yii = '/opt/yii/framework/yii.php';
$config='/opt/tksproduction/protected/config/console.php';
require_once($yii);
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
Yii::createConsoleApplication($config)->run();

?>
