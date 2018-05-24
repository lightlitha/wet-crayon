<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Epiqworx\Concrete;
//require_once '/srv/http/epiqworx/v0.7/epiqworx/abstraction/glitch.php';
/**
 * Description of Router
 *
 * @author math
 */
class Router {
    /**
     * Controller Class
     * e.g https://epiquadruple.org/classname/
     * @var string
     * @access private
     */
    private $controller = '';
    /**
     * Method in class
     * e.g https://epiquadruple.org/classname/methodname
     * @var string
     * @access private
     */
    private $method = '';
    /**
     * Method Parameters
     * e.g https://epiquadruple.org/classname/methodname/param1/param2/ etc.
     * @var array
     * @access private
     */
    private $params = [];

    function __construct() {
        $url = $this->uri();

        if (count($url) == 0) {
            $this->controller = WEBDFLTCLASS;
            $this->method = WEBDFLTMETHOD;
            $this->controller = new $this->controller();
        } else {
            //print_r($url);
            //echo $url[0]."<br/>";
            $this->setFileClass($url[0]);
            $this->controller = new $this->controller();
            $this->setMethod($this->controller, $url[1]);
            unset($url[0]);
            unset($url[1]);
            $this->params = $url ? array_values($url) : [];
        }
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    /**
     * Takes URL request, splits to array, removes web parent directories
     * @return array : Class, Method, Method Params
     */
    private function uri() {
        $uri = explode("/", $this->getRequest());
        $webpath = explode("/", WEBROOT);
        if ($uri[0] === NULL | $uri[0] === "" | $uri[0] === "/") {
            unset($uri[0]);
        }
        if ($webpath[0] === NULL | $webpath[0] === "" | $webpath[0] === "/") {
            unset($webpath[0]);
        }
        //print_r($uri); echo "<br/>";
        //print_r($webpath);
        $uri = array_values($uri);
        $webpath = array_values($webpath);
        //for($x = 0; $x < count($webpath); $x++) {
        //    if(array_key_exists($x, $webpath) && array_key_exists($x, $uri)) {
        //        unset($uri[$x]);
        //    }
        //}
        return array_values($uri);
    }

    /**
     * Looks for file and requires it.
     * @param type $classObj
     */
    private function setFileClass($classObj) {
        if (is_readable(WEBCONTROLLER . strtolower($classObj) . '.php')) {
            $this->controller = $classObj;
            require_once WEBCONTROLLER . strtolower($this->controller) . '.php';
        } else {
            \Epiqworx\Abstraction\Glitch::e404("Class : " . $classObj . " Does Not Exist <br>");
        }
    }

    /**
     * Set Method Call for Class
     * Display Error Message If Method Not Found
     * And No Page Content Rendered
     * @param type $classObj : Class
     * @param type $method : Method
     */
    private function setMethod($classObj, $method) {
        if (!is_null($method)) {
            if (method_exists($classObj, $method)) {
                $this->method = $method;
            } else {
               \Epiqworx\Abstraction\Glitch::e404("Method : " . $method . " Does Not Exist <br>");
            }
        } else {
           \Epiqworx\Abstraction\Glitch::e404("Method : " . $method . " Is Not Set <br>");
        }
    }

    /**
     * Removes Get Parameter Values From URL
     * @param server-request $url
     * @return string
     */
    private function getRequest() {
        $urlArray = explode("?", filter_var($_SERVER["REQUEST_URI"], FILTER_SANITIZE_URL));
        if(!isset($urlArray[1])) { return ''; }
        else { return $urlArray[1]; }
    }
}

?>
