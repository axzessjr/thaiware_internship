<?php
if(isset($_POST['action'])) {
    if($_POST['action'] == "bmr") {
        $gender = $_POST['gender'];
        $age = intval($_POST['age']);
        $weight = floatval($_POST['weight']);
        $height = floatval($_POST['height']);
        if ($gender == 'ชาย') {
            $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
        } else {
            $bmr = 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
        }
        echo ceil($bmr);
    } else if($_POST['action'] == "tdee") {
        $bmr = floatval($_POST['bmr']);
        $inputStep = floatval($_POST['step']);
        $tdee = $bmr * $inputStep;
        echo ceil($tdee);
    }
}
?>