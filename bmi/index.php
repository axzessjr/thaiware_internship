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

    <link rel="icon" type="image/png" href="/thaiware_internship/bmi/img/1.png">
    <link rel="stylesheet" href="/thaiware_internship/bmi/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="/thaiware_internship/bmi/js/process.js"></script> 
</head>
<body>
    <div class="top-bar">
        <div class="tab">
            <img src="/thaiware_internship/bmi/img/table-icon.png" id="tab-icon">
        </div>
        <div class="menu">
            <div>Home</div>
            <div>Information</div>
            <div>About</div>
        </div>
        <div class="icon">
            <img src="/thaiware_internship/bmi/img/user-icon.png" id="user-icon">
        </div>
    </div>
    <form id="bmiForm" method="post" action="">
        <label for="gender">Gender:</label>
        <div class="gender" style="padding: 15px 5px 0px 0px;">
            <input type="radio" name="genderUnit" value="male">
            <label id="gm"> Male </label>
            <input type="radio" name="genderUnit" value="female">
            <label id="gf"> Female </label>
        </div><br>
        <label for="weight">Weight (kg):</label>
        <input type="number" name="weight" step="0.1" value="" required><br>
        <div class="height-op">
            <label>Height:</label>
            <label for="cm">(cm)</label>
            <input type="radio" id="cm" name="heightUnit" value="cm" checked>
            <label for="m">(m)</label>
            <input type="radio" id="m" name="heightUnit" value="m"><br>
            <input type="number" name="height" step="0.01" value="" required><br>
        </div>
        <input type="button" class="cal" onclick="calculateBMI()" value="Calculate BMI">
    </form>
    <div class="info-result" style="display: none;">
        <div id="genderResult"></div>
        <div id="weightResult"></div>
        <div id="heightResult"></div>
    </div>
    <div id="bmi-error"></div>
    <div id="bmiResult" style="display: none;"></div><br>
    <div class="re-icon" style="display: none;">
        <img src="/thaiware_internship/bmi/img/refresh-icon.png" id="re-icon" onclick="hideandseek()">
    </div><br>
    <div class="see-tb">
        <input type="button" id="stb" onclick="toggleTable()" value="see table">
    </div>
    <div class="hide-tb">
        <div class="table-m">
            <div class="tb-male">
                <div class="bmi-male">BMI male</div>
                <div style="padding: 10px 0px 5px 0px;">less 18.5</div>
                <div style="padding: 5px 0px;">18.5 - 24.9</div>
                <div style="padding: 5px 0px;">25 - 29.9</div>
                <div style="padding: 5px 0px;">30 - 34.9</div>
                <div style="padding: 5px 0px;">35 - 39.9</div>
                <div style="padding: 5px 0px 10px 0px;">more 40</div>
            </div>
            <div class="tb-sm">
                <div class="status-male">BMI status</div>
                <div style="padding: 10px 0px 5px 0px;">Underweight</div>
                <div style="padding: 5px 0px;">Normal weight</div>
                <div style="padding: 5px 0px;">Overweight</div>
                <div style="padding: 5px 0px;">Obese class I</div>
                <div style="padding: 5px 0px;">Obese class II</div>
                <div style="padding: 5px 0px 10px 0px;">Obese class III</div>
            </div>
        </div>
        <div class="table-f">
            <div class="tb-female">
                <div class="bmi-female">BMI female</div>
                <div style="padding: 10px 0px 5px 0px;">less 18.5</div>
                <div style="padding: 5px 0px;">18.5 - 23.9</div>
                <div style="padding: 5px 0px;">24 - 28.9</div>
                <div style="padding: 5px 0px;">29 - 34.9</div>
                <div style="padding: 5px 0px;">35 - 39.9</div>
                <div style="padding: 5px 0px 10px 0px;">more 40</div>
            </div>
            <div class="tb-sf">
                <div class="status-female">BMI status</div>
                <div style="padding: 10px 0px 5px 0px;">Underweight</div>
                <div style="padding: 5px 0px;">Normal weight</div>
                <div style="padding: 5px 0px;">Overweight</div>
                <div style="padding: 5px 0px;">Obese class I</div>
                <div style="padding: 5px 0px;">Obese class II</div>
                <div style="padding: 5px 0px 10px 0px;">Obese class III</div>
            </div>
        </div>
    </div>
</body>
</html>

