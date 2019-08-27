<?php

require_once 'vendor/autoload.php';

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;



$company = $_POST['company'];
$th_num = $_POST['th_num'];
$output = implode(', ', explode(' ',$th_num));//  добавление запятой
$quantity = $_POST['quantity'];
$sum = $_POST['sum'];
$contract = $_POST['contract'];
$period = $_POST['period'];

$phpWord = new PhpWord();
$templateProcessor = new TemplateProcessor('claim_template.docx');
$templateProcessor->setValue('n_date', date('Ymd'));
$templateProcessor->setValue('date', date('d.m.Y'));
$templateProcessor->setValue('company', $company);
$templateProcessor->setValue('contract', $contract);
$templateProcessor->setValue('th_num', $output);
$templateProcessor->setValue('quantity', $quantity);
$templateProcessor->setValue('sum', $sum);
$templateProcessor->setValue('period', $period);
$templateProcessor->saveAs('claim.docx');

var_dump($company, $contract);
echo '<div><h2>Файл создан</h2></div>';
echo '<a href="index.html"><button type="submit" class="btn btn-danger">Назад к форме</button></a>';