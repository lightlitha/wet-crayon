<?php

$phpSelf = explode(DIRECTORY_SEPARATOR, filter_input(INPUT_SERVER, 'PHP_SELF'));
if (empty($level)){$level=1;}   // website hierachy
$temp = "";
for($k=1;$k<count($phpSelf)-$level;$k++){
    $temp .= DIRECTORY_SEPARATOR.$phpSelf[$k];
};
define('WEBROOT', $temp);
define('WEBPATH', "http://" . filter_input(INPUT_SERVER, 'HTTP_HOST') . '/' . WEBROOT);
define('WEBNAME', 'epiqworx');
define('WEBVERSION', '0.7 Alpha');
define('WEBDFLTMETHOD', 'home');
define('WEBDFLTCLASS', 'Welcome');

define('WEB_DFLTEMPLT', '/sites/view/welcome.php');

define('WEBCONTROLLER', $rootfile .'/sites/controller/');
define('WEBMODEL', $rootfile.'/sites/model/');
define('WEBVIEW', $rootfile.'/sites/view/');
define('WEBUSR', $rootfile.'/sites/usr/');

define('WEBABSTRACT', 'epiqworx/abstraction/');
define('WEBCONCRETE', 'epiqworx/concrete/');
define('WEBINTERFACE', 'epiqworx/interface/');
