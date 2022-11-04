<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
use Mike42\Escpos\Printer;

// 0. Default line length
$default = str_pad("\n", 80, " ", STR_PAD_LEFT);

// 1. header
$space_1 = str_pad(" ", 52);
$header = [
    "INV.22.01815542",
    "PT. UNIQLO INDONESIA",
    "SUDIRMAN STREET AVENUE",
    "JAKARTA 10210",
];

// 2. table
$space_2 = str_pad(" ", 2);
$space_3 = str_pad(" ", 14);
$space_4 = str_pad(" ", 12);
$space_5 = str_pad(" ", 6);

$table = [
    ["CSD.22.0361255", "90", "902.10", "757,091"],
    ["CSD.22.0361256", "90", "902.10", "757,091"],
    ["CSD.22.0361257", "90", "931.98", "127,131"],
    ["CSD.22.0361258", "90", "931.98", "127,131"],
    ["CSD.22.0361259", "90", "931.98", "127,131"],
    ["CSD.22.0361260", "90", "931.98", "127,131"],
    ["CSD.22.0361261", "90", "931.98", "127,131"],
    ["CSD.22.0361262", "90", "931.98", "127,131"],
];

// 3. footer
$space_6 = str_pad(" ", 4);
$total_in_words = str_pad("SATU JUTA LIMA RATUS DUA PULUH RIBU", 51);
$space_7 = str_pad(" ", 11);
$space_8 = str_pad(" ", 66);
$space_9 = str_pad(" ", 58);
$amount_1 = str_pad("1,500,000", 13);
$amount_2 = str_pad("1,500,000", 13);
$amount_3 = str_pad("1,500,000", 13);
$signer = str_pad("TIMOTHY ELVIN", 21);

$connector = new CupsPrintConnector("EPSON_LQ_310");
$printer = new Printer($connector);
foreach ($header as $item) {
    $printer->text($space_1 . str_pad($item, 27) . "\n");
}
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$i = 0;
foreach ($table as $item) {
    $i++;
    $printer->text($space_2 . $i . ".  " . $item[0] . $space_3 . $item[1] . $space_4 . $item[2] . $space_5 . $item[3] . "\n");
    $printer->text("$default");
}
$printer->text($default);
//              ----xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-----------xxxxxxx------\
$printer->text($space_6 . $total_in_words . $space_7 . $amount_1 . "\n");
$printer->text($space_8 . $amount_2 . "\n");
$printer->text($space_8 . $amount_3 . "\n");
$printer->text($default);
$printer->text($default);
$printer->text($space_9 . $signer . "\n");
$printer->text($default);

$printer->cut();
$printer->close();
