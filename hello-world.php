<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

//$connector = new CupsPrintConnector("printer2");
$connector = new WindowsPrintConnector('lx310');
$printer = new Printer($connector);
$printer->text("\n");
$printer->text("                                                INV-2022-11-01_200820!\n");
$printer->text("\n");
$printer->text("                                              Lihar Sendhi Wijaya!\n");
$printer->text("                                              PT Orion Teknologi!\n");
$printer->text("                                              Jakarta Selatan!\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("1.   CSD2022110100001        10                Rp15800           Rp15800\n");
$printer->text("\n");
$printer->text("2.   CSD2022110100002        10                Rp15800           Rp15800\n");
$printer->text("\n");
$printer->text("3.   CSD2022110100003        10                Rp15800           Rp15800\n");
$printer->text("\n");
$printer->text("4.   CSD2022110100004        10                Rp15800           Rp15800\n");
$printer->text("\n");
$printer->text("5.   CSD2022110100005        10                Rp15800           Rp15800\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("\n");
$printer->text("Seratus Lima Puluh Ribu Empat Ratus Delapan Puluh Rupiah");
$printer->text("\n");
$printer->cut();
$printer->close();

