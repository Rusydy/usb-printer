<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
use Mike42\Escpos\Printer;

// 0. Default line length
$default = str_pad("\n", 80, " ", STR_PAD_LEFT);

// 1. CSD
$csd_code = str_pad("CSD2022110000001", 16);
$before_csd_code = str_pad(" ", 34);
$after_csd_code = str_pad("\n", 30, " ", STR_PAD_LEFT);

// 2. AWB
$before_awb = str_pad(" ", 37);
$awb = str_pad("AWB2022110000001", 11);
$after_awb = str_pad("\n", 32, " ", STR_PAD_LEFT);

// 3. Flight Code
$before_flight_code = str_pad(" ", 37);
$flight_code = str_pad("AI-123", 5);
$after_flight_code = str_pad("\n", 38, " ", STR_PAD_LEFT);

// 4. Flight Date
$before_flight_date = str_pad(" ", 37);
$flight_date = str_pad("01-01-2021", 10);
$after_flight_date = str_pad("\n", 33, " ", STR_PAD_LEFT);

// 5. Goods Description
$before_good = str_pad(" ", 37);
$good = str_pad("Goods Description", 42);

// 6. Origin
$before_origin = str_pad(" ", 5);
$origin = str_pad("IDCGK", 5);
$space_1 = str_pad(" ", 17);
$destination = str_pad("BKK", 5);
$space_2 = str_pad(" ", 17);
$transit = str_pad("-", 5);
$space_3 = str_pad("\n", 26, " ", STR_PAD_LEFT);

// 7. Security status 1
$security_status_1 = "X";
$after_security_status_1 = str_pad("\n", 79, " ", STR_PAD_LEFT);

// 8. Security status 2
$security_status_2 = "X";
$after_security_status_2 = str_pad("\n", 79, " ", STR_PAD_LEFT);

// 9. Security status 3
$security_status_3 = "X";
$space_4 = str_pad(" ", 42);
$screening_method = str_pad("X-RAY DV ETD", 12);
$space_5 = str_pad("\n", 25, " ", STR_PAD_LEFT);

// 10. operational_staff_id
$before_operational_staff_id = str_pad(" ", 19);
$operational_staff_id = str_pad("OPERATOR", 20);
$space_6 = str_pad(" ", 12);
$security_status_date = str_pad("2022-10-06", 11);
$security_status_time = str_pad("10:00", 5);
$space_7 = str_pad("\n", 13, " ", STR_PAD_LEFT);

// 11. regulated_party_category
$before_regulated_party_category = str_pad(" ", 28);
$regulated_party_category = str_pad("UAI ID/RA3/00005-01", 19);
$after_regulated_party_category = str_pad("\n", 33, " ", STR_PAD_LEFT);

// 12. total_qty
$space_8 = str_pad(" ", 8);
$total_qty = str_pad("1", 3);
$space_9 = str_pad(" ", 14);
$total_netto = str_pad("500", 3);
$space_10 = str_pad(" ", 15);
$volume_weight = str_pad("-", 3);
$space_11 = str_pad(" ", 15);
$remarks = str_pad("-", 3);
$space_12 = str_pad("\n", 16, " ", STR_PAD_LEFT);

// 13. other_safety_information
$space_13 = str_pad(" ", 25);
$other_safety_information = str_pad("PT LOGISTIC INDONESIA", 55);

// 14. truck_number
$truck_number = str_pad("B 1234 ABC", 55);

// 15. plastic_seal_number
$plastic_seal_number = str_pad("BLACK/690", 55);

// 16. truck_driver
$truck_driver = str_pad("JEREMMY", 55);

$connector = new CupsPrintConnector("EPSON_LQ_310");
$printer = new Printer($connector);
$printer->text($default);
$printer->text($before_csd_code . $csd_code . $after_csd_code);
$printer->text($before_awb . $awb . $after_awb);
$printer->text($before_flight_code . $flight_code . $after_flight_code);
$printer->text($default);
$printer->text($before_flight_date . $flight_date . $after_flight_date);
$printer->text($default);
$printer->text($before_good . $good . "\n");
$printer->text($default);
$printer->text($default);
$printer->text($before_origin . $origin . $space_1 . $destination . $space_2 . $transit . $space_3);
$printer->text($default);
$printer->text($security_status_1 . $after_security_status_1);
$printer->text($security_status_2 . $after_security_status_2);
$printer->text($security_status_3 . $space_4 . $screening_method . $space_5);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($before_operational_staff_id . $operational_staff_id . $space_6 . $security_status_date . $security_status_time . $space_7);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($before_regulated_party_category . $regulated_party_category . $after_regulated_party_category);
$printer->text($default);
$printer->text($default);
$printer->text($default);
$printer->text($space_8 . $total_qty . $space_9 . $total_netto . $space_10 . $volume_weight . $space_11 . $remarks . $space_12);
$printer->text($space_13. $other_safety_information ."\n");
$printer->text($space_13. $truck_number ."\n");
$printer->text($space_13. $plastic_seal_number ."\n");
$printer->text($space_13. $truck_driver ."\n");
$printer->text($default);
$printer->text($default);
$printer->cut();
$printer->close();
