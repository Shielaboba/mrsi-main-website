<?php 
require_once("vendor/autoload.php");

$source = new Source\SourceOrder;
$PDF = new Renderrer\PDF($source);
$render = new Controller\OrderTable($PDF);

$render->showTable(); 
