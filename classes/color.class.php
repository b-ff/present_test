<?php

class Color {
	var $red = 0;
	var $green = 0;
	var $blue = 0;

	function __construct($r, $g, $b) {
		$this->red = (int)$r;
		$this->green = (int)$g;
		$this->blue = (int)$b;
	}
}

?>