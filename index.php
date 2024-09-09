<?php

require "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;


$spread = IOFactory::load('employee-cp.ods');


$sheet = $spread->getActiveSheet();

foreach ($sheet->getRowIterator() as $row) {    
    $celliterator = $row->getCellIterator();
    $celliterator->setIterateOnlyExistingCells(true);

    foreach ($celliterator as $cell) {
        echo $cell->getValue() .'\t';
    }

    echo "<BR>";
}

?>
