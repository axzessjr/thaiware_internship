<?php
if(isset($_POST['gcd']) && isset($_POST['unit'])) {
    $unit = $_POST['unit'];
    if ($unit === 'dot') {
        $number_list = explode(".", $_POST['gcd']);
    } else if ($unit === 'comma') {
        $number_list = explode(",", $_POST['gcd']);
    } else if ($unit === 'space-bar') {
        $number_list = explode(" ", $_POST['gcd']);
    } else if ($unit === 'enter') {
        $number_list = explode("\n", $_POST['gcd']);
    }
    $gcd = $number_list[0];
    foreach($number_list as $number) {
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
