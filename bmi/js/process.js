$(document).ready(function() {
    function calculateBMI() {
        var gender = $('select[name="gender"]').val();
        var weight = parseFloat($('input[name="weight"]').val());
        var height = parseFloat($('input[name="height"]').val());
        var heightUnit = $('input[name="heightUnit"]:checked').val();

        if (heightUnit === 'cm') {
            height /= 100;
        }

        var bmi = weight / (height * height);
        var resultText = getBMIStatus(gender, bmi);

        $('#bmiResult').html("BMI: " + bmi.toFixed(2) + " - " + resultText);
    }

    function getBMIStatus(gender, bmi) {
        if (gender === "male") {
            return showBMIStatusMale(bmi);
        } else if (gender === "female") {
            return showBMIStatusFemale(bmi);
        }
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

    $('#bmiForm input[type="button"]').click(function() {
        calculateBMI();
    });
});