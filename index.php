<?php
//autoload composer
require __DIR__ .'/vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml('<b>OLAAAA</b>');

$dompdf->render();

$dompdf-> output();