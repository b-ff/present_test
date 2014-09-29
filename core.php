<?php

function __autoload($class_name) {   
    include_once(__DIR__."/classes/".strtolower($class_name) . '.class.php');

}

$с = new Color(0, 0, 127);
$с2 = new Color(0, 200, 0);
$bc = new Color(255, 0, 0);

$r = array();

$r[] = new Rect($с, 120, 40);
$r[] = new BorderedRect($с2, 120, 40, $bc, 3);
$r[] = new PositionedRect($с, 120, 40, 320, 200);

$renderer = new Renderer($r);

$renderer->render();

?>