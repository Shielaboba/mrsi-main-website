<?php
namespace Controller;
use Renderrer\TableInterface;

class OrderTable {

protected $table;

    public function __construct(TableInterface $table)
    {
        $this->table = $table;
    }

    public function showTable() 
    {
        $this->table->render();
    }
    
    public static function getDownloadLink()
    {
        echo '<br><a href="./generate_pdf.php">Download PDF</a><br>';
        echo '<a href="./generate_csv.php">Download CSV</a>';
    }
}
