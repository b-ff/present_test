<?php

function __autoload($class_name) {   
    include_once(__DIR__."/classes/".strtolower($class_name) . '.class.php');

}

$с = new Color(0, 0, 127);
$r = new Rect($с, 120, 40);
$r->render();

?>