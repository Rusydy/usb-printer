<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
use Mike42\Escpos\Printer;

$connector = new CupsPrintConnector("EPSON_LQ_310");
$printer = new Printer($connector);
$printer->text("                                                    INV.22.01815542            \n");
$printer->text("                                                    PT. UNIQLO INDONESIA       \n");
$printer->text("                                                    SUDIRMAN STREET AVENUE     \n");
$printer->text("                                                    JAKARTA 10210              \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("1.  CSD.22.0361255              90              902.10            757,091      \n");
$printer->text("                                                                               \n");
$printer->text("2.  CSD.22.0361256              90              902.10            757,091      \n");
$printer->text("                                                                               \n");
$printer->text("3.  CSD.22.0361257              90              931.98            127,131      \n");
$printer->text("                                                                               \n");
$printer->text("4.  CSD.22.0361258              90              931.98            127,131      \n");
$printer->text("                                                                               \n");
$printer->text("5.  CSD.22.0361259              90              931.98            127,131      \n");
$printer->text("                                                                               \n");
$printer->text("6.  CSD.22.0361260              90              931.98            127,131      \n");
$printer->text("                                                                               \n");
$printer->text("7.  CSD.22.0361261              90              931.98            127,131      \n");
$printer->text("                                                                               \n");
$printer->text("8.  CSD.22.0361262              90              931.98            127,131      \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("    SATU JUTA LIMA RATUS DUA PULUH RIBU                           999,090      \n");
$printer->text("                                                                  870,129      \n");
$printer->text("                                                                  980,213      \n");
$printer->text("                                                                               \n");
$printer->text("                                                                               \n");
$printer->text("                                                          TIMOTHY ELVIN        \n");
$printer->text("                                                                               \n");

$printer->cut();
$printer->close();
