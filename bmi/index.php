<?php
    // include "process.php";

    // if(isset($_POST["submit"])) {
    //     $input_gender = $_POST["gender"];
    //     $input_weight = floatval($_POST["weight"]);
    //     $input_height = floatval($_POST["height"]);

    //     $gender = $input_gender;
    //     $bmi = calculateBMI($input_gender, $input_weight, $input_height);

         
    //     if ($gender == "male") {
    //         $bmi_status = showBMIStatusMale($bmi);
    //     } else
    //     if ($gender == "female") {
    //         $bmi_status = showBMIStatusFemale($bmi);
    //     }
        
    //     $result = "Your BMI: " . $bmi . " <br>Your Status: " . $bmi_status;

    //     $_POST["result"] = $result;
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="/thaiware_internship/bmi/css/style.css" />
    <!-- <script src="/thaiware_internship/bmi/js/process.js"></script>  -->

</head>
<body>
    <script>
        function calculateBMI(gender, weight, height) {
            var bmi = weight / (height * height);
            // console.log (gender + " " + weight + " " + height + " " + bmi)
            return bmi.toFixed(2);
        }

        function showBMIStatusMale(bmi) {
            if (bmi < 18.5) {
                return "Underweight";
            } else if (bmi >= 18.5 && bmi <= 24.9) {
                return "Normal weight";
            } else if (bmi >= 25 && bmi <= 29.9) {
                return "Overweight";
            } else if (bmi >= 30 && bmi <= 34.9) {
                return "Obese class I";
            } else if (bmi >= 35 && bmi <= 39.9) {
                return "Obese class II";
            } else {
                return "Obese class III";
            }
        }

        function showBMIStatusFemale(bmi) {
            if (bmi < 18.5) {
                return "Underweight";
            } else if (bmi >= 18.5 && bmi <= 23.9) {
                return "Normal weight";
            } else if (bmi >= 24 && bmi <= 28.9) {
                return "Overweight";
            } else if (bmi >= 29 && bmi <= 34.9) {
                return "Obese class I";
            } else if (bmi >= 35 && bmi <= 39.9) {
                return "Obese class II";
            } else {
                return "Obese class III";
            }
        }

        function BMIStatus(gender, bmi) {
            if (gender === "male") {
                return showBMIStatusMale(bmi);
            } else if (gender === "female") {
                return showBMIStatusFemale(bmi);
            }
        }

        // var input_gender = "female";
        // var input_weight = 65;
        // var input_height = 1.65;

        // var out_put_bmi = calculateBMI(input_gender, input_weight, input_height);

        // console.log("bmi: " + out_put_bmi);
        // console.log("bmi status: " + BMIStatus(input_gender, out_put_bmi));

        $("#bmiResult").html("bmi status: " + BMIStatus(input_gender, out_put_bmi));

    </script>

    <div id="jobs">JOBS</div>
    <div class="summer">SUMMER</div>

    <form method="post" action="">
        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>

        <label for="weight">Weight (kg):</label>
        <input type="number" name="weight" step="0.1" value="" required><br>

        <label for="height">Height (m):</label>
        <input type="number" name="height" step="0.01" value="" required><br>

        <input type="submit" name="submit" value="Calculate BMI">
        
        <div id="bmiResult"></div>
    </form>
    

   
</body>
</html>