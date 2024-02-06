<?php
if(isset($_POST['gcd']) && isset($_POST['unit'])) {
    $unit = $_POST['unit'];
    if ($unit === 'dot') {
        $numbers = explode(".", $_POST['gcd']);
    } else if ($unit === 'comma') {
        $numbers = explode(",", $_POST['gcd']);
    } else if ($unit === 'Hyphen') {
        $numbers = explode("-", $_POST['gcd']);
    } else if ($unit === 'space-bar') {
        $numbers = explode(" ", $_POST['gcd']);
    }
    $gcd = $numbers;
    foreach($numbers as $number) {
        $gcd = find_gcd($gcd, $numbers);
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
