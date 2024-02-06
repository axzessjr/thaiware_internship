<?php
if(isset($_POST['lcm']) && isset($_POST['unit2'])) {
    $unit2 = $_POST['unit2'];
    if ($unit2 === 'dot2') {
        $number_list = explode(".", $_POST['lcm']);
    } else if ($unit2 === 'comma2') {
        $number_list = explode(",", $_POST['lcm']);
    } else if ($unit2 === 'hyphen2') {
        $number_list = explode("-", $_POST['lcm']);
    } else if ($unit2 === 'space-bar2') {
        $number_list = explode(" ", $_POST['lcm']);
    }
    $lcm = $number_list[0];
    foreach($number_list as $number) {
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