<?php

require_once 'vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

$company = $_POST['company'];
$th_num = $_POST['th_num'];
$quantity = $_POST['quantity'];
$sum = $_POST['sum'];
$contract = $_POST['conract'];

$templateProcessor = new TemplateProcessor('claim_template.docx');
$templateProcessor->setValue('date', date('d.m.Y'));
$templateProcessor->setValue('company', $company);
$templateProcessor->setValue('contract', $contract);
$templateProcessor->setValue('th_num', $th_num);
$templateProcessor->setValue('quantity', $quantity);
$templateProcessor->setValue('sum', $sum);
$templateProcessor->saveAs('claim.docx');


echo '<div><h2>Файл создан</h2></div>';
echo '<a href="index.html"><button type="submit" class="btn btn-danger">Назад</button></a>';