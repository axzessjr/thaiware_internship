<?php
if(isset($_POST['input']) && isset($_POST['unit']) && isset($_POST['solutionType'])) {
    $unit = $_POST['unit'];
    $type = $_POST['solutionType'];
    $number_list = [];
    if ($unit === 'dot' || $unit === 'comma' || $unit === 'space-bar' || $unit === 'enter') {
        switch ($unit) {
            case 'dot':
                $number_list = explode(".", $_POST['input']);
                break;
            case 'comma':
                $number_list = explode(",", $_POST['input']);
                break;
            case 'space-bar':
                $number_list = explode(" ", $_POST['input']);
                break;
            case 'enter':
                $number_list = explode("\n", $_POST['input']);
                break;
        }
    }    
    function find_gcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }
    function find_lcm($a, $b) {
        return abs($a * $b) / find_gcd($a, $b);
    }
    $gcd = $number_list[0];
    $lcm = $number_list[0];
    foreach($number_list as $number) {
        $gcd = find_gcd($gcd, $number);
        $lcm = find_lcm($lcm, $number);
    }
    if ($type === 'gcd') {
        echo $gcd;
    } else if ($type === 'lcm') {
        echo $lcm;
    }
}
?>