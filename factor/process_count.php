<?php
$input_number = $_POST['number'];
function findFactors($number) {
    $factors = array();
    $divisor = 2;
    while ($number >= $divisor) {
        if ($number % $divisor == 0) {
            array_push($factors, $divisor);
            $number = $number / $divisor;
        } else {
            $divisor++;
        }
    }
    return $factors;
}
$factors = findFactors($input_number);
echo json_encode($factors);
?>