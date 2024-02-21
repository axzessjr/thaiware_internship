<?php
$sideA = isset($_POST['sideA']) ? $_POST['sideA'] : "";
$sideB = isset($_POST['sideB']) ? $_POST['sideB'] : "";
$sideC = isset($_POST['sideC']) ? $_POST['sideC'] : "";
if (!empty($sideA) && !empty($sideB) && !empty($sideC)) {
    $s = ($sideA + $sideB + $sideC) / 2;
    $area = sqrt($s * ($s - $sideA) * ($s - $sideB) * ($s - $sideC));
    echo $area;
}
?>