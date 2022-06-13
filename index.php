<?php
//autoload composer
require __DIR__.'/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true); //usar links de imagens e outras coisas 

$dompdf = new Dompdf($options);

//pagina
$dompdf->setPaper('A4');

// $dompdf->loadHtml('<h1> deu certo inferooooooooo</h1>');
$dompdf->loadHtmlFile(__DIR__.'/home.html');

$dompdf->render();
header('Content-type: application/pdf');
echo $dompdf->output();

$dompdf->stream('ExtensaoEeventos.pdf');

