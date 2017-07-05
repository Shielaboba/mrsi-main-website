<?php
namespace Renderrer;
use Dompdf\Dompdf;
use Renderrer\HTML;
use Source\SourceOrder;

class PDF implements TableInterface {

    protected $source;

    public function __construct(SourceOrder $source)
    {
        $this->source = $source;
    }    

    public function render()
    {
<<<<<<< HEAD:dixiePHPTutorial/ojtpdf/renderrer/PDF.php
        $html = new HTML();
        $source = new SourceOrder();
        $html->setMeals($source->getMeals());
        $html->setOrders($source->getOrders());
=======
        $html = new HTML($this->source);
>>>>>>> dc6c185d7f6a62b670221688dbef082be1b9aac8:ojt/renderrer/PDF.php
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html->getHTML());
        $dompdf->render();
        $dompdf->stream();
        $dompdf->setPaper('A4', 'landscape');
    }
}
