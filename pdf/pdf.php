<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/vendor/autoload.php';
use mikehaertl\wkhtmlto\Pdf;
$path=$_POST['pdfpath'];
$filename=$_POST['filename'];   
$tempName=$filename;
$saveFilePath =$_POST['savefilepath'].''.$tempName; 
$pdf = new Pdf(array(
    'no-outline',#Make Chrome not complain
    'margin-top'    => 10,
    'margin-right'  => 0,
    'margin-bottom' => 0,
    'margin-left'   => 0,
    /*Default page options
    'disable-smart-shrinking',
    'user-style-sheet' => '/path/to/pdf.css',*/
));

$pdf->addPage($path);
$pdf->binary = '/usr/local/bin/wkhtmltopdf';

if (!$pdf->saveAs($saveFilePath)) {
    echo $pdf->getError();
}
?>