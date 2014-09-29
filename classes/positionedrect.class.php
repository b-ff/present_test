<?php

class PositionedRect extends Rect {
	var $x = 0;
	var $y = 0;

	function __construct($color, $width, $height, $x = 0, $y = 0) {
		parent::__construct($color, $width, $height);

		$this->x = (int)$x;
		$this->y = (int)$y;
	}

	function render() {
		print '<div style="background-color:'.$this->renderColor().';width:'.$this->width.'px;height:'.$this->height.'px;position:absolute;top:'.$this->x.'px;left:'.$this->y.'px;"></div>';
	}
}

?>