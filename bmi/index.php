<?php
    include "process.php";

    if(isset($_POST["submit"])){
        $input_gender = $_POST["gender"];
        $input_weight = floatval($_POST["weight"]);
        $input_height = floatval($_POST["height"]);
    
        $result = "Your BMI is: " . calculateBMI($input_gender, $input_weight, $input_height);
    
        $_POST["result"] = $result;
        
        //$_GET["result"] = $result;        
    
        // if ($gender == "male") {
        //     showBMIStatusMale($bmi);
        // } elseif ($gender == "female") {
        //     showBMIStatusFemale($bmi);
        // }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>

<link rel="stylesheet" href="/thaiware_internship/bmi/css/style.css" />

<body>
<form method="post" action="">
    <label for="gender">Gender:</label>
    <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>

    <label for="weight">Weight (kg):</label>
    <input type="number" name="weight" step="0.1" required><br>

    <label for="height">Height (m):</label>
    <input type="number" name="height" step="0.01" required><br>

    <input type="submit" name="submit" value="Calculate BMI">
</form>
<?php echo $_POST["result"]; ?>

</body>
</html>