<?
//echo str_pad("Last Execution Time: " . date('l jS \of F Y h:i:s A'), 100);
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__) . '/../');

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS',true);

require($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

print 1;