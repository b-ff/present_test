<?php

function __autoload($class_name) {   
    include_once(__DIR__."/classes/".strtolower($class_name) . '.class.php');

}

$c = new Color(100,200,300);
?>