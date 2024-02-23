<?php
$sideA = isset($_POST['sideA']) ? $_POST['sideA'] : "";
$sideB = isset($_POST['sideB']) ? $_POST['sideB'] : "";
$sideC = isset($_POST['sideC']) ? $_POST['sideC'] : "";
$angleA = isset($_POST['angleA']) ? $_POST['angleA'] : "";
$angleB = isset($_POST['angleB']) ? $_POST['angleB'] : "";
$angleC = isset($_POST['angleC']) ? $_POST['angleC'] : "";
if (!empty($sideA) && !empty($sideB) && !empty($sideC)) {
    if ($sideA + $sideB > $sideC && $sideA + $sideC > $sideB && $sideB + $sideC > $sideA) {
        $s = ($sideA + $sideB + $sideC) / 2;
        $area = sqrt($s * ($s - $sideA) * ($s - $sideB) * ($s - $sideC));
        echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
    } else {
        echo "ไม่สามารถสร้างสามเหลี่ยมได้";
    }
} else if(!empty($sideA) && !empty($sideB) && !empty($angleA)) {
    $area = ($sideA * $sideB) / 2 * sin(deg2rad($angleA));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideA) && !empty($sideC) && !empty($angleA)) {
    $area = ($sideA * $sideC) / 2 * sin(deg2rad($angleA));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideC) && !empty($sideB) && !empty($angleA)) {
    $area = ($sideC * $sideB) / 2 * sin(deg2rad($angleA));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideA) && !empty($sideB) && !empty($angleB)) {
    $area = ($sideA * $sideB) / 2 * sin(deg2rad($angleB));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideA) && !empty($sideC) && !empty($angleB)) {
    $area = ($sideA * $sideC) / 2 * sin(deg2rad($angleB));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideC) && !empty($sideB) && !empty($angleB)) {
    $area = ($sideC * $sideB) / 2 * sin(deg2rad($angleB));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideA) && !empty($sideB) && !empty($angleC)) {
    $area = ($sideA * $sideB) / 2 * sin(deg2rad($angleC));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideA) && !empty($sideC) && !empty($angleC)) {
    $area = ($sideA * $sideC) / 2 * sin(deg2rad($angleC));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideC) && !empty($sideB) && !empty($angleC)) {
    $area = ($sideC * $sideB) / 2 * sin(deg2rad($angleC));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideA) && !empty($angleB) && !empty($angleA)) {
    $angleC = 180 - $angleB - $angleA;
    $angleC_rad = deg2rad($angleC);
    $angleA_rad = deg2rad($angleA);
    $sideB = ($sideA * sin($angleA_rad)) / sin($angleC_rad);
    $area = 0.5 * $sideA * $sideB * sin(deg2rad($angleB));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideB) && !empty($angleB) && !empty($angleA)) {
    $angleC = 180 - $angleB - $angleA;
    $angleC_rad = deg2rad($angleC);
    $angleA_rad = deg2rad($angleA);
    $sideC = ($sideB * sin($angleA_rad)) / sin($angleC_rad);
    $area = 0.5 * $sideB * $sideC * sin(deg2rad($angleB));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
}  else if(!empty($sideC) && !empty($angleB) && !empty($angleA)) {
    $angleC = 180 - $angleB - $angleA;
    $angleC_rad = deg2rad($angleC);
    $angleA_rad = deg2rad($angleA);
    $sideA = ($sideC * sin($angleA_rad)) / sin($angleC_rad);
    $area = 0.5 * $sideC * $sideA * sin(deg2rad($angleB));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideA) && !empty($angleC) && !empty($angleA)) {
    $angleB = 180 - $angleC - $angleA;
    $angleB_rad = deg2rad($angleB);
    $angleA_rad = deg2rad($angleA);
    $sideB = ($sideA * sin($angleA_rad)) / sin($angleB_rad);
    $area = 0.5 * $sideA * $sideB * sin(deg2rad($angleC));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideB) && !empty($angleC) && !empty($angleA)) {
    $angleB = 180 - $angleC - $angleA;
    $angleB_rad = deg2rad($angleB);
    $angleA_rad = deg2rad($angleA);
    $sideC = ($sideB * sin($angleA_rad)) / sin($angleB_rad);
    $area = 0.5 * $sideB * $sideC * sin(deg2rad($angleC));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
}  else if(!empty($sideC) && !empty($angleC) && !empty($angleA)) {
    $angleB = 180 - $angleC - $angleA;
    $angleB_rad = deg2rad($angleB);
    $angleA_rad = deg2rad($angleA);
    $sideA = ($sideC * sin($angleA_rad)) / sin($angleB_rad);
    $area = 0.5 * $sideC * $sideA * sin(deg2rad($angleC));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
}  else if(!empty($sideA) && !empty($angleB) && !empty($angleC)) {
    $angleA = 180 - $angleB - $angleC;
    $angleA_rad = deg2rad($angleA);
    $angleC_rad = deg2rad($angleC);
    $sideB = ($sideA * sin($angleC_rad)) / sin($angleA_rad);
    $area = 0.5 * $sideA * $sideB * sin(deg2rad($angleB));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else if(!empty($sideB) && !empty($angleB) && !empty($angleC)) {
    $angleA = 180 - $angleB - $angleC;
    $angleA_rad = deg2rad($angleA);
    $angleC_rad = deg2rad($angleC);
    $sideC = ($sideB * sin($angleC_rad)) / sin($angleA_rad);
    $area = 0.5 * $sideB * $sideC * sin(deg2rad($angleB));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
}  else if(!empty($sideC) && !empty($angleB) && !empty($angleC)) {
    $angleA = 180 - $angleB - $angleC;
    $angleA_rad = deg2rad($angleA);
    $angleC_rad = deg2rad($angleC);
    $sideA = ($sideC * sin($angleC_rad)) / sin($angleA_rad);
    $area = 0.5 * $sideC * $sideA * sin(deg2rad($angleB));
    echo "พื้นที่ของสามเหลี่ยม = " . round($area, 4);
} else {
    echo "กรอกข้อมูลไม่ครบ";
}
?>