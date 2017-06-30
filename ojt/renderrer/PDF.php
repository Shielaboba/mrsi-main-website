<?php
namespace Renderrer;
use Dompdf\Dompdf;
use Source\SourceOrder;

class PDF implements TableInterface {

    protected $source;

    public function __construct(SourceOrder $source)
    {
        $this->source = $source;
    }    

    public function render()
    {
        $html = new HTML($this->source);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html->getHTML());
        $dompdf->render();
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->stream();
    }
}


