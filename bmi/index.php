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
    <script src="/thaiware_internship/bmi/js/process.js"></script> 

</head>
<body>

<form id="bmiForm" method="post" action="">
    <label for="gender">Gender:</label>
    <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>

    <label for="weight">Weight (kg):</label>
    <input type="number" name="weight" step="0.1" value="" required><br>

    <div class="height-op">
        <label>Height:</label>
        <label for="cm">cm</label>
        <input type="radio" id="cm" name="heightUnit" value="cm" checked>
        
        <label for="m">m</label>
        <input type="radio" id="m" name="heightUnit" value="m"><br>

        <input type="number" name="height" step="0.01" value="" required><br>
    </div>

    <input type="button" class="cal" onclick="calculateBMI()" value="Calculate BMI">
    
</form>
    <div id="bmiResult"></div>
    <div class="see-tb">
        <input type="button" id="stb" onclick="toggleTable()" value="see table">
    </div>
    <div class="table">
        <div class="tb-gender">
            <div class="bmi-male">BMI male</div>
            <div>less 18.5</div>
            <div>18.5 - 24.9</div>
            <div>25 - 29.9</div>
            <div>30 - 34.9</div>
            <div>35 - 39.9</div>
            <div>more 40</div>
            <div class="bmi-female">BMI female</div>
            <div>less 18.5</div>
            <div>18.5 - 23.9</div>
            <div>24 - 28.9</div>
            <div>29 - 34.9</div>
            <div>35 - 39.9</div>
            <div>more 40</div>
        </div>
        <div class="tb-status">
            <div class="status-male">BMI status</div>
            <div>Underweight</div>
            <div>Normal weight</div>
            <div>Overweight</div>
            <div>Obese class I</div>
            <div>Obese class II</div>
            <div>Obese class III</div>
            <div class="status-female">BMI status</div>
            <div>Underweight</div>
            <div>Normal weight</div>
            <div>Overweight</div>
            <div>Obese class I</div>
            <div>Obese class II</div>
            <div>Obese class III</div>
        </div>
    </div>
</body>
</html>

