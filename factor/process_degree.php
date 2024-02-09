<?php
if (isset($_POST['input1']) && isset($_POST['input2']) && isset($_POST['input3'])) {
    $a = $_POST['input1'];
    $b = $_POST['input2'];
    $c = $_POST['input3'];
    $result = findXY($a, $b, $c);

    echo json_encode($result);

}
function findXY($a, $b, $c) {
    $result = array();
    for ($x1 = 1; $x1 <= $a; $x1++) {
        if ($a % $x1 == 0) {
            $y1 = $a / $x1;
            $x1y1 = array($x1, $y1);
        }
    }
    for ($x2 = 1; $x2 <= $c; $x2++) {
        if ($c % $x2 == 0) {
            $y2 = $c / $x2;
            $x2y2 = array($x2, $y2);
        }
    }
    foreach ($x1y1 as $point1) {
        $x1 = $point1[0];
        $y1 = $point1[1];
        
        foreach ($x2y2 as $point2) {
            $x2 = $point2[0];
            $y2 = $point2[1];
            
            $result_x = $x1 * $x2;
            $result_y = $y1 * $y2;
            $result = $result_x + $result_y;
            
            $resultB = [$result];
        }
    }
    // if ($resultB = $b) {
    //     echo $resultB;
    // }


    return $result;
}
// function factor($a, $b, $c) {
//     $delta = $b * $b - 4 * $a * $c;
//     if ($delta > 0 && $a = 1) {
//         $root1 = ($b + sqrt($delta)) / (2 * $a);
//         $root2 = ($b - sqrt($delta)) / (2 * $a);
//         $factor1 = "(x + $root1)";
//         $factor2 = "(x + $root2)";
//         return $factor1.$factor2;
//     }
//     else if ($delta == 0) {
//         $root = $b / (2 * $a);
//         $factor1 = "(x + $root)";
//         $factor2 = "(x + $root)";
//         return $factor1.$factor2;
//     }
//     else {
//        return "หาค่าไม่ได้";
//     }
// }
?>