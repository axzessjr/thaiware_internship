<?php
if (isset($_POST['degree-ip1']) && isset($_POST['degree-ip2']) && isset($_POST['degree-ip3'])) {
    $a = $_POST['degree-ip1'];
    $b = $_POST['degree-ip2'];
    $c = $_POST['degree-ip3'];
    $result = factor($a, $b, $c);
    echo $result;
}
function factor($a, $b, $c) {
    $delta = $b * $b - 4 * $a * $c;
    if ($delta > 0) {
        $root1 = (-$b + sqrt($delta)) / (2 * $a);
        $root2 = (-$b - sqrt($delta)) / (2 * $a);
        $factor1 = "(x - $root1)";
        $factor2 = "(x - $root2)";
        return array($factor1, $factor2);
    }
    elseif ($delta == 0) {
        $root = -$b / (2 * $a);
        $factor1 = "(x - $root)";
        $factor2 = "(x - $root)";
        return array($factor1, $factor2);
    }
    else {
        return "หาค่าไม่ได้";
    }
}
?>
