<?php

class Component {
	var $color = null;
	var $width = 0;
	var $height = 0;

	function __construct($color, $width, $height) {
		$this->color = $color;
		$this->width = $width;
		$this->height = $height;
	}

	function render() {
		// code...
	}
}

?>