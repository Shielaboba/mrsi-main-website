<?php

require_once("vendor/autoload.php");

$source = new Source\SourceOrder;
$render = new Renderrer\HTML;
$pdf = new Renderrer\PDF;

//$render->setMeals($source->getMeals());
//$render->setOrders($source->getOrders());
//$render->render();
$pdf->render();
