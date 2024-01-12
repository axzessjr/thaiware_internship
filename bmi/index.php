
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>

<link rel="stylesheet" href="/thaiware_internship/bmi/css/style.css" />

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="gender">Gender:</label>
    <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>

    <label for="weight">Weight (kg):</label>
    <input type="number" name="weight" step="0.1" required><br>

    <label for="height">Height (m):</label>
    <input type="number" name="height" step="0.01" required><br>

    <input type="submit" value="Calculate BMI">
</form>

<?php
// Include the PHP file containing functions
include 'process.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $gender = $_POST["gender"];
    $weight = floatval($_POST["weight"]);
    $height = floatval($_POST["height"]);

    $bmi = $weight / ($height * $height);

    $result = "Your BMI is: " . number_format($bmi, 2);

    echo "<p>$result</p>";

    if ($gender == "male") {
        showBMIStatusMale($bmi);
    } elseif ($gender == "female") {
        showBMIStatusFemale($bmi);
    }
}
?>

</body>
</html>
