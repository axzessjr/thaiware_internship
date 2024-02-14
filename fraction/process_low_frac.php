<?php
if(isset($_POST['input'])) {
    $input = $_POST['input'];
    $fraction = explode('/', $input);
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
    echo $resulLowFrac;
}
?>