<?php

/**
*
*/
class Welcome extends \Epiqworx\Concrete\Controller
{
	function home() {
		$this->setBlueprint('welcome');
		$this->render();
	}

	function summon($option) {
                $opt = explode("&", $option);
		$this->setBlueprint("welcome");
		$this->setFields("req_ano", 'section/' . $opt[0] . '.php');
		$this->render();
	}
}
?>
