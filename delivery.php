<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
use Mike42\Escpos\Printer;

// 0. Default line length
$default = str_pad("\n", 80, " ", STR_PAD_LEFT);
$space_0 = str_pad(" ", 16);

// 1. code
$before_code = str_pad(" ", 26);
$code = str_pad("DO.2022-11-01_200820", 20);
$after_code = str_pad("\n", 34, " ", STR_PAD_LEFT);

// 2. truck_number
$truck_number = str_pad("BB 1234 ABC", 11);
$after_truck_number = str_pad("\n", 53, " ", STR_PAD_LEFT);

// 3. seal_number
$seal_number = str_pad("SEAL/BLACK-01", 13);
$after_seal_number = str_pad("\n", 67, " ", STR_PAD_LEFT);

// 4. table
$space_1 = str_pad(" ", 8);
$space_2 = str_pad(" ", 11);
$space_3 = str_pad(" ", 5);
$space_4 = str_pad(" ", 9);
$space_5 = str_pad(" ", 3);

$table = [
    ['AWB0001', '9', '900', 'SHOES', 'PT. NIKE INDONESIA'],
    ['AWB0002', '4', '100', 'T-SHIRT', 'PT. UNIQLO KARAWANG'],
    ['AWB0003', '9', '900', 'SHOES', 'PT. NIKE INDONESIA'],
    ['AWB0004', '9', '900', 'T-SHIRT', 'PT. UNIQLO KARAWANG'],
    ['AWB0005', '9', '900', 'SHOES', 'PT. NIKE INDONESIA'],
    ['AWB0006', '9', '900', 'T-SHIRT', 'PT. UNIQLO KARAWANG'],
    ['AWB0007', '9', '900', 'SHOES', 'PT. NIKE INDONESIA'],
    ['AWB0008', '9', '900', 'T-SHIRT', 'PT. UNIQLO KARAWANG'],
    ['AWB0009', '9', '900', 'SHOES', 'PT. NIKE INDONESIA'],
    ['AWB0010', '9', '900', 'T-SHIRT', 'PT. UNIQLO KARAWANG'],
];

// 5. delivery_time
$before_delivery_time = str_pad(" ", 8);
$delivery_time = str_pad("20:08", 5);
$space_6 = str_pad(" ", 57);
$handover_time = str_pad("20:08", 5);
$after_delivery_time = str_pad("\n", 5, " ", STR_PAD_LEFT);

// 6. handlers
$space_7 = str_pad(" ", 4);
$supervisor_handler = str_pad("JONATHAN", 8, " ", STR_PAD_BOTH);
$space_8 = str_pad(" ", 12);
$truck_driver = str_pad("STEVEN", 8, " ", STR_PAD_BOTH);
$space_9 = str_pad(" ", 11);
$lini1_handler = str_pad("PRISKILA", 8, " ", STR_PAD_BOTH);
$space_10 = str_pad(" ", 11);
$airline_handler = str_pad("JONATHAN", 8, " ", STR_PAD_BOTH);

$connector = new CupsPrintConnector("EPSON_LQ_310");
$printer = new Printer($connector);
$printer->text("\n");
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($before_code . $code . $after_code);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($space_0 . $truck_number . $after_truck_number);
$printer->text($default);
$printer->text($space_0 . $seal_number . $after_seal_number);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$i = 0;
foreach ($table as $row) {
    $i++;
    $printer->text(str_pad($i, 2) . $row[0] . $space_2 . $row[1] . $space_3 . $row[2] . $space_4 . $row[3] . $space_5 . $row[4] . "\n");
    $printer->text($default);
}
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($before_delivery_time . $delivery_time . $space_6 . $handover_time . $after_delivery_time);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($space_7 . $supervisor_handler . $space_8 . $truck_driver . $space_9 . $lini1_handler . $space_10 . $airline_handler . $space_10 . "\n");
$printer->text($default);
$printer->cut();
$printer->close();
