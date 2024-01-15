
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
        var gender_result
        if (gender === "male") {
            gender_result =  showBMIStatusMale(bmi);
        } else if (gender === "female") {
            gender_result = showBMIStatusFemale(bmi);
        }
        return gender_result;
    }

    function showBMIStatusMale(bmi) {
        var male_result
        if (bmi < 18.5) {
            male_result = "Underweight";
        } else if (bmi >= 18.5 && bmi <= 24.9) {
            male_result = "Normal weight";
        } else if (bmi >= 25 && bmi <= 29.9) {
            male_result = "Overweight";
        } else if (bmi >= 30 && bmi <= 34.9) {
            male_result = "Obese class I";
        } else if (bmi >= 35 && bmi <= 39.9) {
            male_result = "Obese class II";
        } else {
            male_result = "Obese class III";
        }
        return male_result;
    }

    function showBMIStatusFemale(bmi) {
        var female_result
        if (bmi < 18.5) {
            female_result = "Underweight";
        } else if (bmi >= 18.5 && bmi <= 23.9) {
            female_result = "Normal weight";
        } else if (bmi >= 24 && bmi <= 28.9) {
            female_result = "Overweight";
        } else if (bmi >= 29 && bmi <= 34.9) {
            female_result = "Obese class I";
        } else if (bmi >= 35 && bmi <= 39.9) {
            female_result = "Obese class II";
        } else {
            female_result = "Obese class III";
        }
        return female_result;
    }

    $('#bmiForm input[type="button"]').click(function() {
        calculateBMI();
    });

    function toggleTable() {
        $(".table").toggle()
    }