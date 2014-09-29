<?php

class Renderer {
	var $renderQueue = array();

	function __construct($queue) {
		$this->renderQueue = (is_array($queue)) ? $queue : array();
	}

	function render() {
		if (count($this->renderQueue) == 0) {
			print 'Ой, кажется что тут совершенно нечего делать =\'(';
			return false;
		}

		foreach ($this->renderQueue as $queueNum => $component) {
			if (method_exists($component, 'render') && is_subclass_of($component, 'Component')) {
				$component->render();
			} else {
				print 'Похоже компонент #'.$queueNum.' нам не родня, либо не умеет рисовать! Фу ему!';
			}
		}
	}
}

?>