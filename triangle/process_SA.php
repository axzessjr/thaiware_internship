<?php
$sideA = isset($_POST['sideA']) ? $_POST['sideA'] : "";
$sideB = isset($_POST['sideB']) ? $_POST['sideB'] : "";
$sideC = isset($_POST['sideC']) ? $_POST['sideC'] : "";
if (!empty($sideA) && !empty($sideB) && !empty($sideC)) {
    $s = ($sideA + $sideB + $sideC) / 2;
    $area = sqrt($s * ($s - $sideA) * ($s - $sideB) * ($s - $sideC));
    echo "พื้นที่ของสามเหลี่ยมคือ: " . $area;
} else {
    echo "กรุณากรอกข้อมูลด้านให้ครบถ้วน";
}
?>