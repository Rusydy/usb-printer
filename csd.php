<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
use Mike42\Escpos\Printer;

$connector = new CupsPrintConnector("EPSON_LQ_310");
$printer = new Printer($connector);
$printer->text("                                                                               \n");
$printer->text("                                  CSD2022110000001                             \n");
$printer->text("                                     21702754476                               \n");
$printer->text("                                     TG434                                     \n");
$printer->text("                                                                               \n");
$printer->text("                                     2022-10-06                                \n");
$printer->text("                                                                               \n");
$printer->text("             CEMENT RETAINER PT. DOWELL ANADRILL                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("     IDCGK                 BKK                   -                             \n");
$printer->text("                                                                               \n");
$printer->text("X                                                                              \n");
$printer->text("X                                                                              \n");
$printer->text("X                                          X-RAY DV ETD                        \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                   ADE IRMA                        2022-10-06 14:40            \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                            UAI ID/RA3/00005-01                                \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("        5                500               -               -                   \n");
$printer->text("                         PT LOGISTIC INDONESIA                                 \n");
$printer->text("                         B 68894 BC                                            \n");
$printer->text("                         BLACK/690                                             \n");
$printer->text("                         JEREMMY                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");


$printer->cut();
$printer->close();
