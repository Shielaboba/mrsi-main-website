<?php
namespace Renderrer;
use Dompdf\Dompdf;
use Source\SourceOrder;
class PDF implements TableInterface {

    public function render()
    {
        
        $source = new SourceOrder();
        $html = new HTML;
        $html->setMeals($source->getMeals());
        $html->setOrders($source->getOrders());
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html->getHTML());
        $dompdf->render();
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->stream();
    }
}


