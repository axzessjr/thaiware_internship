<?php
if(isset($_POST['gcd'])) {
    $numbers = explode(" ", $_POST['gcd']);
    $gcd = $numbers[0];
    foreach($numbers as $number) {
        $gcd = find_gcd($gcd, $number);
    }
    echo $gcd;
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