<?php

function __autoload($class_name) {   
    include_once(__DIR__."/classes/".strtolower($class_name) . '.class.php');

}

$с = new Color(0, 0, 127);
$bc = new Color(255, 0, 0);
// $r = new Rect($с, 120, 40);
// $r = new BorderedRect($с, 120, 40, $bc, 3);
$r = new PositionedRect($с, 120, 40, 320, 200);
$r->render();

?>