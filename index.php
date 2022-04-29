<?php
//autoload composer
require __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml('<h1>teste</h1>');

$dompdf->render();

$dompdf-> output();

?>