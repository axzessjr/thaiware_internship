<?php
if(isset($_POST['input']) && isset($_POST['repeat'])) {
    $input = $_POST['input'];
    $repeat = $_POST['repeat'];
    $integer_part = intval($input);
    $decimal_part = substr(strval($input), strpos(strval($input), '.') + 1);
    $decimal_not_repeat = "";
    $array = str_split($decimal_part);
    $count = count($array);
    if ($repeat <= 0 || $repeat > strlen($decimal_part)) {
        echo "ข้อมูลไม่ถูกต้อง";
        exit;
    } else {
        if ($repeat < strlen($decimal_part)) {
            for ($i = 0; $i < $count; $i++) {
                if ($i < $count-$repeat) {
                    $decimal_not_repeat.=$array[$i];
                }
            }
        } else if ($repeat = strlen($decimal_part)) {
            $decimal_not_repeat = 0;
        }
        $number_repeat = str_repeat("9", $repeat);
        $number_not_repeat = str_repeat("0", $count-$repeat);
        $decimal_btm_result = $number_repeat.$number_not_repeat;
        $decimal_top = $decimal_part-$decimal_not_repeat;
        $decimal_top_result = $decimal_top+($integer_part*$decimal_btm_result);
        $result = $decimal_top_result . "/" . $decimal_btm_result;
        $fraction = explode('/', $result);
        if(count($fraction) == 1) {
            $resulLowFrac = $fraction[0];
        } else {
            $numerator = $fraction[0];
            $denominator = $fraction[1];
            function gcd($a, $b) {
                while ($b != 0) {
                    $t = $b;
                    $b = $a % $b;
                    $a = $t;
                }
                return $a;
            }
            $gcd = gcd($numerator, $denominator);
            $numerator /= $gcd;
            $denominator /= $gcd;
            if ($denominator > 1) {
                $resulLowFrac = $numerator . "/" . $denominator;
            } else {
                $resulLowFrac = $numerator;
            }
        }
        echo "แปลงเป็นเศษส่วนได้ = ".$resulLowFrac;
    }
}
?>