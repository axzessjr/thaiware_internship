<?php
function showBMIStatusMale($bmi) {
    echo "<p>BMI Category: ";
    if ($bmi < 18.5) {
        echo "Underweight";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        echo "Normal weight";
    } elseif ($bmi >= 25 && $bmi <= 29.9) {
        echo "Overweight";
    } elseif ($bmi >= 30 && $bmi <= 34.9) {
        echo "Obese class I";
    } elseif ($bmi >= 35 && $bmi <= 39.9) {
        echo "Obese class II";
    } else {
        echo "Obese class III";
    }
    echo "</p>";
}

function showBMIStatusFemale($bmi) {
    echo "<p>BMI Category: ";
    if ($bmi < 18.5) {
        echo "Underweight";
    } elseif ($bmi >= 18.5 && $bmi <= 23.9) {
        echo "Normal weight";
    } elseif ($bmi >= 24 && $bmi <= 28.9) {
        echo "Overweight";
    } elseif ($bmi >= 29 && $bmi <= 34.9) {
        echo "Obese class I";
    } elseif ($bmi >= 35 && $bmi <= 39.9) {
        echo "Obese class II";
    } else {
        echo "Obese class III";
    }
    echo "</p>";
}

function calculateBMI ($gender, $weight, $height) {
    $gender = $gender;
    $weight = floatval($weight);
    $height = floatval($height);
    
    $bmi = $weight / ($height * $height);

    return  number_format($bmi, 2);
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//     $gender = $_POST["gender"];
//     $weight = floatval($_POST["weight"]);
//     $height = floatval($_POST["height"]);

//     $bmi = $weight / ($height * $height);

//     $result = "Your BMI is: " . number_format($bmi, 2);

//     echo "<p>$result</p>";

//     if ($gender == "male") {
//         showBMIStatusMale($bmi);
//     } elseif ($gender == "female") {
//         showBMIStatusFemale($bmi);
//     }
// }



?>
