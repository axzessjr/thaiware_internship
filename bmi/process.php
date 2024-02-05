<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['gender']) && isset($_POST['weight']) && isset($_POST['height']) && isset($_POST['heightUnit'])) {
        $gender = $_POST['gender'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $heightUnit = $_POST['heightUnit'];
        if ($heightUnit === 'เซนติเมตร') {
            $height /= 100;
        }
        $gender = $gender;
        $weight = floatval($weight);
        $height = floatval($height);
        $bmi = $weight / ($height * $height);
        sleep(5);
        echo number_format($bmi, 2);
    } 
} 
?>