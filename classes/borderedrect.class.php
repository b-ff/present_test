<?php

class BorderedRect extends Rect {
	var $bordercolor = null;
	var $borderwidth = 0;

	function __construct($color, $width, $height, $bordercolor = null, $borderwidth = 0) {
		parent::__construct($color, $width, $height);

		$this->bordercolor = ($bordercolor instanceof Color) ? $bordercolor : new Color(0, 0, 0);
		$this->borderwidth = (int)$borderwidth;
	}
	
	function renderBorderColor() {
		return 'rgb('.$this->bordercolor->red.', '.$this->bordercolor->green.', '.$this->bordercolor->blue.')';
	}

	function render() {
		$border = ($this->borderwidth > 0) ? 'border:'.$this->borderwidth.'px solid '.$this->renderBorderColor() : '';

		print '<div style="background-color:'.$this->renderColor().';width:'.$this->width.'px;height:'.$this->height.'px;'.$border.'"></div>';
	}
}

?>