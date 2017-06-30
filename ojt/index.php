<?php 
require_once("vendor/autoload.php");

    $source = new Source\SourceOrder;
    $renderHTML = new Renderrer\HTML;
    $renderPDF =new Renderrer\PDF;
    $renderCSV = new Renderrer\CSV;
    
   // $renderPDF->render();
    $renderHTML->setOrders($source->getOrders()); 
    $renderHTML->setMeals($source->getMeals());
    $renderHTML->render(); 
    $renderCSV->render();
    
