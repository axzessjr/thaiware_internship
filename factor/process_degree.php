<?php
if (isset($_POST['input1']) && isset($_POST['input2']) && isset($_POST['input3'])) {
    $a = $_POST['input1'];
    $b = $_POST['input2'];
    $c = $_POST['input3'];
    $result = findXY($a, $b, $c);
    echo $result;
}
function findXY($a, $b, $c) {
    if ($a === "") {
        $a = 1;
    }
    $delta = $b * $b - 4 * $a * $c;
    $found_solution = false;
    if ($delta >= 0 ) {
        $x1y1 = array();
        $x2y2 = array();
        for ($x1 = -abs($a); $x1 <= abs($a); $x1++) {
            if ($x1 == 0) continue;
            if ($a % $x1 == 0) {
                $y1 = $a / $x1;
                $x1y1[] = array($x1, $y1);
            }
        }
        for ($x2 = -abs($c); $x2 <= abs($c); $x2++) {
            if ($x2 == 0) continue;
            if ($c % $x2 == 0) {
                $y2 = $c / $x2;
                $x2y2[] = array($x2, $y2);
            }
        }
        foreach ($x1y1 as $point1) {
            $x1 = intVal($point1[0]);
            $y1 = intVal($point1[1]);
            $resultXY = 0;
            foreach ($x2y2 as $point2) {
                $x2 = intVal($point2[0]);
                $y2 = intVal($point2[1]);
                $B = intVal($b);
                $product_of_A = $x1 * $y2;
                $product_of_C = $x2 * $y1;
                $sum_of_AC = $product_of_A + $product_of_C;
                if ($x1 == -1) {
                    $x1_display = '-';
                } else if ($x1 == 1) {
                    $x1_display = '';
                } else {
                    $x1_display = $x1;
                }
                if ($y1 == -1) {
                    $y1_display = '-';
                } else if ($y1 == 1) {
                    $y1_display = '';
                } else {
                    $y1_display = $y1;
                }
                if ($sum_of_AC == $B) {
                    echo "(" . $x1_display . "x" . ($x2 >= 0 ? "+" : "") . $x2 . ")(" . $y1_display . "x" . ($y2 >= 0 ? "+" : "") . $y2 . ")<br>";
                    $found_solution = true;
                }
            }
        } 
    }
    if (!$found_solution) {
        return "หาค่าไม่ได้";
    }
}
?>