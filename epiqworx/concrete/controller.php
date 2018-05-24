<?php

namespace Epiqworx\Concrete;

/**
*
*/
class Controller implements \Epiqworx\IInterface\IController
{
		protected $template = WEB_DFLTEMPLT;
		protected $fields = array();

		function __construct($tempate = null, array $fields = array())
		{
			if($tempate !== null) {
				$this->setBlueprint($tempate);
			}
			if(!empty($fields)) {
				foreach ($fields as $name => $value) {
					$this->$name = $value;
				}
			}
		}

    public function setBlueprint($template) {
        $template = WEBVIEW . $template . ".php";
        if (!is_file($template) || !is_readable($template)) {
            throw new \InvalidArgumentException(
                "The template '$template' is invalid.");
        }
        $this->template = $template;
    }

		public function getBlueprint() {
			return $this->template;
		}

		public function setFields($name, $value) {
        $this->fields[$name] = $value;
    }

    public function getFields($name) {
        return $this->fields;
    }

    public function render($required = true) {
    	//var_dump($this->fields);
        extract($this->fields);
        ob_start();
				//ob_get_clean();
		if($required) {require_once $this->template;}
		else {include_once $this->template;}
    }
}

?>