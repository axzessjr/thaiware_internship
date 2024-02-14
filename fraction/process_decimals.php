<?php
if(isset($_POST['input']) && isset($_POST['repeat'])) {
    $input = $_POST['input'];
    $repeat = $_POST['repeat'];
    if(is_numeric($input) && is_numeric($repeat)) {
        function convertToFraction($decimal, $repeat) {
            $y = pow(10, $repeat) * $decimal - $decimal;
            $z = pow(10, $repeat) - 1;
            $gcd = gcd($y, $z);
            $numerator = $y / $gcd;
            $denominator = $z / $gcd;
            return array($numerator, $denominator);
        }
        function gcd($a, $b) {
            return ($b == 0) ? $a : gcd($b, $a % $b);
        }
        list($numerator, $denominator) = convertToFraction($input, $repeat);
        echo simplifyFraction($numerator, $denominator);
    } else {
        echo "ข้อมูลที่รับมาไม่ถูกต้อง";
    }
}
function simplifyFraction($numerator, $denominator) {
    $gcd = gcd($numerator, $denominator);
    $simplified_numerator = $numerator / $gcd;
    $simplified_denominator = $denominator / $gcd;
    $multiplied_numerator = $simplified_numerator * 3;
    $multiplied_denominator = $simplified_denominator * 3;
    $rounded_numerator = ceil($multiplied_numerator);
    return ($rounded_numerator)."/".($multiplied_denominator);
}
?>