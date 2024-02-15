<?php

if(isset($_POST['input']) && isset($_POST['repeat'])) {
    $input = $_POST['input'];
    $repeat = $_POST['repeat'];
    $switch = true;
    $decimal_part = substr(strval($input), strpos(strval($input), '.') + 1);
    if ($repeat >= strlen($decimal_part)) {
        $decimal_not_repeat = 0;
    } 
    else {
        $decimal_not_repeat = substr($decimal_part, -$repeat, $repeat);
        $switch = false;
    }
    echo $decimal_part . "," . $decimal_not_repeat;
}

// if(isset($_POST['input']) && isset($_POST['repeat'])) {
//     $input = $_POST['input'];
//     $repeat = $_POST['repeat'];
//     if(is_numeric($input) && is_numeric($repeat)) {
//         function convertToFraction($decimal, $repeat) {
//             $y = pow(10, strlen(substr(strrchr($decimal, "."), 1))) * $decimal - $decimal;
//             $z = pow(10, $repeat) - 1;
//             $gcd = gcd($y, $z);
//             $numerator = $y / $gcd;
//             $denominator = $z / $gcd;
//             return array($numerator, $denominator);
//         }
//         function gcd($a, $b) {
//             return ($b == 0) ? $a : gcd($b, $a % $b);
//         }
//         list($numerator, $denominator) = convertToFraction($input, $repeat);
//         echo simplifyFraction($numerator, $denominator);
//     }
// }
// function simplifyFraction($numerator, $denominator) {
//     $gcd = gcd($numerator, $denominator);
//     $simplified_numerator = $numerator / $gcd;
//     $simplified_denominator = $denominator / $gcd;
//     $multiplied_numerator = $simplified_numerator * 3;
//     $multiplied_denominator = $simplified_denominator * 3;
//     $rounded_numerator = ceil($multiplied_numerator);
//     return ($rounded_numerator)."/".($multiplied_denominator);
// }
?>