<?php
if (isset($_POST['input1']) && isset($_POST['input2']) && isset($_POST['input3'])) {
    $a = $_POST['input1'];
    $b = $_POST['input2'];
    $c = $_POST['input3'];
    $result = factor($a, $b, $c);
    echo $result;
}
function factor($a, $b, $c) {
    $delta = $b * $b - 4 * $a * $c;
    if ($delta > 0) {
        $root1 = ($b + sqrt($delta)) / (2 * $a);
        $root2 = ($b - sqrt($delta)) / (2 * $a);
        $factor1 = "(x + $root1)";
        $factor2 = "(x + $root2)";
        return $factor1.$factor2;
    }
    elseif ($delta == 0) {
        $root = $b / (2 * $a);
        $factor1 = "(x + $root)";
        $factor2 = "(x + $root)";
        return $factor1.$factor2;
    }
    else {
        return "หาค่าไม่ได้";
    }
}
?>
