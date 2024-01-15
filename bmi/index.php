<?php
    include "process.php";

    if(isset($_POST["submit"])) {
        $input_gender = $_POST["gender"];
        $input_weight = floatval($_POST["weight"]);
        $input_height = floatval($_POST["height"]);

        $gender = $input_gender;
        $bmi = calculateBMI($input_gender, $input_weight, $input_height);

         
        if ($gender == "male") {
            $bmi_status = showBMIStatusMale($bmi);
        } else
        if ($gender == "female") {
            $bmi_status = showBMIStatusFemale($bmi);
        }
        
        $result = "Your BMI: " . $bmi . " <br>Your Status: " . $bmi_status;

        $_POST["result"] = $result;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>

    <link rel="stylesheet" href="/thaiware_internship/bmi/css/style.css" />

</head>
<body>
    <form method="post" action="">
        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male"<?php echo (isset($_POST['gender']) && $_POST['gender'] == 'male') ? 'selected' : ''; ?>>Male</option>
            <option value="female"<?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ? 'selected' : ''; ?>>Female</option>
        </select><br>

        <label for="weight">Weight (kg):</label>
        <input type="number" name="weight" step="0.1" value="<?php echo $_POST["weight"]; ?>" required><br>

        <label for="height">Height (m):</label>
        <input type="number" name="height" step="0.01" value="<?php echo $_POST["height"]; ?>" required><br>

        <input type="submit" name="submit" value="Calculate BMI">
    </form>
    
    <div class="rs">
        <?php echo $_POST["result"]; ?>
    </div>
   
</body>
</html>