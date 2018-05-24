<?php

namespace Epiqworx\Abstraction;

abstract class Glitch {
    public static function e404($page = '') {
        require_once 'epiqworx/error/404.php';
    }
    public static function dberror($emsg = '') {
        require_once 'epiqworx/error/dberror.php';
    }
}

?>
