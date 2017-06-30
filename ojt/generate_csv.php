<?php 
require_once("vendor/autoload.php");

$source = new Source\SourceOrder;
$CSV = new Renderrer\CSV($source);
$render = new Controller\OrderTable($CSV);

$render->showTable(); 
