<?php

/**
 *
 */

namespace Epiqworx;
require_once 'manifold/immutable.php';
/**
 * Description of Autoloader
 * Searches and loads file that contains a class / interface is called.
 * That class / interface should have the same name as the file, excluding the extension.
 */
class Autoloader {

    static public function loader($className) {
            $file = strtolower(str_replace('\\', DIRECTORY_SEPARATOR, $className)).'.php';
            $file = str_replace(basename(dirname(__FILE__)), '', $file);
            //echo dirname(__FILE__) . $file . "<br/><br/>";
            if (file_exists(dirname(__FILE__) . $file)) {
                require_once dirname(__FILE__) . $file;
                return true;
            }
            else if(file_exists(WEBCONTROLLER . $file)) {
            	require_once(WEBCONTROLLER . $file);
            	return true;
    		}
            echo WEBCONTROLLER . "<br/><br/>";
	}
}
spl_autoload_register('Epiqworx\Autoloader::loader');

?>
