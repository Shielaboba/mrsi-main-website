<?php 
require_once("vendor/autoload.php");

$source = new Source\SourceOrder;
$HTML = new Renderrer\HTML($source);
$renderHTML = new Controller\OrderTable($HTML);
$renderHTML->showTable(); 
Controller\OrderTable::getDownloadLink();

    
