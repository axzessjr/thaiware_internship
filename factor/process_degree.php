<?php
if (isset($_POST['input1']) && isset($_POST['input2']) && isset($_POST['input3'])) {
    $a = $_POST['input1'];
    $b = $_POST['input2'];
    $c = $_POST['input3'];
    $result = findXY($a, $b, $c);
    echo $result;
}
function findXY($a, $b, $c) {
    $negative_result = false;
    if ($a < 0 || $b < 0 || $c < 0) {
        $negative_result = true;
    }
    $delta = $b * $b - 4 * $a * $c;
    if ($delta >= 0 ) {
        $x1y1 = array();
        $x2y2 = array();
        for ($x1 = -abs($a); $x1 <= abs($a); $x1++) {
            if ($x1 == 0) continue; // หาก x1 เป็น 0 ให้ข้ามไปต่อ
            if ($a % $x1 == 0) {
                $y1 = $a / $x1;
                $x1y1[] = array($x1, $y1);
            }
        }
        for ($x2 = -abs($c); $x2 <= abs($c); $x2++) {
            if ($x2 == 0) continue; // หาก x2 เป็น 0 ให้ข้ามไปต่อ
            if ($c % $x2 == 0) {
                $y2 = $c / $x2;
                $x2y2[] = array($x2, $y2);
            }
        }
        foreach ($x1y1 as $point1) {
            $x1 = intval($point1[0]);
            $y1 = intval($point1[1]);
            foreach ($x2y2 as $point2) {
                $x2 = intval($point2[0]);
                $y2 = intval($point2[1]);
                $B = intval($b);
                $product_of_A = $x1 * $y2;
                $product_of_C = $x2 * $y1;
                $sum_of_AC = $product_of_A + $product_of_C;
                if ($negative_result && $sum_of_AC < 0) {
                    $x1 = -$x1;
                    $x2 = -$x2;
                    $y1 = -$y1;
                    $y2 = -$y2;
                }
                if($sum_of_AC == $B){
                    echo "(" . $x1 . "x" . ($x2 >= 0 ? "+" : "") . $x2 . ")(" . $y1 . "x" . ($y2 >= 0 ? "+" : "") . $y2 . ")<br>";
                }
            }
        }
    } else {
        return "หาค่าไม่ได้";
    }
}
?>