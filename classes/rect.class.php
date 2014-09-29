<?php

class Rect extends Component {

	function renderColor() {
		return 'rgb('.$this->color->red.', '.$this->color->green.', '.$this->color->blue.')';
	}

	function render() {
		print '<div style="background-color:'.$this->renderColor().';width:'.$this->width.'px;height:'.$this->height.'px"></div>';
	}
}

?>