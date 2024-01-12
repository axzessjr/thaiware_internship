
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>

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

    <div class="table">
        <table class="male" style="width:50%">
        <tr>
            <th>BMI ผู้ชาย (kg/m2)</th>
            <th>อยู่ในเกณท์</th>
        </tr>
        <tr>
            <td>น้อยกว่า 18.5</td>
            <td>ผอม (Underweight)</td>
        </tr>
        <tr>
            <td>18.5 - 24.9</td>
            <td>ปกติ (Normal weight)</td>
        </tr>
        <tr>
            <td>25 - 29.9</td>
            <td>ท้วม (Overweight)</td>
        </tr>
        <tr>
            <td>30 - 34.9</td>
            <td>โรคอ้วนระดับ 1 (Obese class I)</td>
        </tr>
        <tr>
            <td>35 - 39.9</td>
            <td>โรคอ้วนระดับ 2 (Obese class II)</td>
        </tr>
        <tr>
            <td>40 ขึ้นไป</td>
            <td>โรคอ้วนระดับ 3 (Obese class III)</td>
        </tr>
        </table>

        <table class="female" style="width:50%">
        <tr>
            <th>BMI ผู้หญิง (kg/m2)</th>
            <th>อยู่ในเกณท์</th>
        </tr>
        <tr>
            <td>น้อยกว่า 18.5</td>
            <td>ผอม (Underweight)</td>
        </tr>
        <tr>
            <td>18.5 - 23.9</td>
            <td>ปกติ (Normal weight)</td>
        </tr>
        <tr>
            <td>24 - 28.9</td>
            <td>ท้วม (Overweight)</td>
        </tr>
        <tr>
            <td>29 - 34.9</td>
            <td>โรคอ้วนระดับ 1 (Obese class I)</td>
        </tr>
        <tr>
            <td>35 - 39.9</td>
            <td>โรคอ้วนระดับ 2 (Obese class II)</td>
        </tr>
        <tr>
            <td>40 ขึ้นไป</td>
            <td>โรคอ้วนระดับ 3 (Obese class III)</td>
        </tr>
        </table>
    </div>

</body>
</html>
