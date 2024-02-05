<?php
if(isset($_POST['lcm'])) {
    $numbers = explode(" ", $_POST['lcm']);
    $lcm = $numbers[0];
    foreach($numbers as $number) {
        $lcm = find_lcm($lcm, $number);
    }
    echo $lcm;
}
function find_lcm($a, $b) {
    return abs($a * $b) / find_gcd($a, $b);
}
function find_gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
?>