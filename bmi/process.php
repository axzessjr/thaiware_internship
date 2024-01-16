<?php
    function calculateBMI ($gender, $weight, $height) {
        $gender = $gender;
        $weight = floatval($weight);
        $height = floatval($height);
        $bmi = $weight / ($height * $height);
        return  number_format($bmi, 2);
    }
    function showBMIStatusMale($bmi) {
        if ($bmi < 18.5) {
            return "Underweight";
        } else if ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal weight";
        } else if ($bmi >= 25 && $bmi <= 29.9) {
            return "Overweight";
        } else if ($bmi >= 30 && $bmi <= 34.9) {
            return "Obese class I";
        } else if ($bmi >= 35 && $bmi <= 39.9) {
            return "Obese class II";
        } else {
            return "Obese class III";
        }
    }
    function showBMIStatusFemale($bmi) {
        if ($bmi < 18.5) {
            return "Underweight";
        } elseif ($bmi >= 18.5 && $bmi <= 23.9) {
            return "Normal weight";
        } elseif ($bmi >= 24 && $bmi <= 28.9) {
            return "Overweight";
        } elseif ($bmi >= 29 && $bmi <= 34.9) {
            return "Obese class I";
        } elseif ($bmi >= 35 && $bmi <= 39.9) {
            return "Obese class II";
        } else {
            return "Obese class III";
        }
        echo "</p>";
    }
    function BMIStatus($gender, $bmi) {
        if ($gender == "male") {
            showBMIStatusMale($bmi);
        } else if ($gender == "female") {
            showBMIStatusFemale($bmi);
        }
    }
?>



