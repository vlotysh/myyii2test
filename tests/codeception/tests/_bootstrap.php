<?php
// This is global bootstrap for autoloading
/*defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
require_once __DIR__ . implode(DIRECTORY_SEPARATOR, ['', '..','..', '..' , 'vendor', 'autoload.php']);
require_once __DIR__ . implode(DIRECTORY_SEPARATOR, ['', '..', '..', '..','vendor', 'yiisoft', 'yii2', 'Yii.php']);
Yii::setAlias('@tests', __DIR__);
Yii::setAlias('@data', __DIR__ . DIRECTORY_SEPARATOR . '_data');

*/

//require(__DIR__ . '/../../../vendor/autoload.php');
//require(__DIR__ . '/../../../vendor/yiisoft/yii2/Yii.php');
//require(__DIR__ . '/../../../common/config/aliases.php');


//$config = require(__DIR__ . '/../../../console/config/main.php');

//$application = new yii\console\Application( $config );


defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

require(__DIR__ . '/../../../vendor/autoload.php');
require(__DIR__ . '/../../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../../common/config/bootstrap.php');
require(__DIR__ . '/../../../frontend/config/bootstrap.php');

//$config = require(__DIR__ . '/../../../console/config/main.php');
$config = require(__DIR__ . '/../../../frontend/config/main.php');

(new yii\web\Application($config));