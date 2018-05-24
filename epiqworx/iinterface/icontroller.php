<?php
namespace Epiqworx\IInterface;

interface IController {

	public function setBlueprint($template);
	public function getBlueprint();
	public function setFields($field, $value);
	public function getFields($field);
	public function render();
}

?>
