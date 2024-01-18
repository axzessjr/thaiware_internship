function calculateBMI() {
    var Inputgender = $('input[name="genderUnit"]:checked').val();
    var Inputweight = $('input[name="weight"]').val();
    var Inputheight = $('input[name="height"]').val();
    var InputheightUnit = $('input[name="heightUnit"]:checked').val();
    if(Inputweight === "" || Inputheight === "") {
        $('#bmi-error').html("Please fill out the information completely.");
        $('#bmi-error').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#bmi-error').show()
    } else {
        $.ajax({
            url: "process.php",
            method: "POST",
            data: {
                gender: Inputgender,
                weight: Inputweight,
                height: Inputheight,
                heightUnit: InputheightUnit
            },
            success: function(data) {
                var bmi = parseFloat(data) 
                var resultText = getBMIStatus(Inputgender, bmi);
                $('#bmiForm').hide()
                $('#bmi-error').hide()
                $('.info-result').show()
                $('#genderResult').html("gender: " + Inputgender);
                $('#weightResult').html("weight: " + Inputweight + " kg");
                $('#heightResult').html("height: " + Inputheight + " " + InputheightUnit);
                $('#bmiResult').show()
                $('#bmiResult').html("BMI: " + bmi.toFixed(2) + " - " + resultText);
                $('.re-icon').show()
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function getBMIStatus(gender, bmi) {
    var bmiResult = $('#bmiResult');
    if (gender === 'male') {
        colorMale(bmiResult, bmi);
    } else if (gender === 'female') {
        colorFemale(bmiResult, bmi);
    }
    var gender_result
    if (gender === "male") {
        gender_result =  showBMIStatusMale(bmi);
    } else if (gender === "female") {
        gender_result = showBMIStatusFemale(bmi);
    }
    return gender_result;
   
}
function colorMale(color, bmi) {
    if (bmi < 18) {
        color.css({"border": "solid #0C78A6", "color": "gray"});
    } else if (bmi >= 25) {
        color.css({"border": "solid #0C78A6", "color": "red"});
    } else {
        color.css({"border": "solid #0C78A6", "color": "limegreen"});
    }
}
function colorFemale(color, bmi) {
    if (bmi < 18) {
        color.css({"border": "solid #0C78A6", "color": "gray"});
    } else if (bmi >= 24) {
        color.css({"border": "solid #0C78A6", "color": "red"});
    } else {
        color.css({"border": "solid #0C78A6", "color": "limegreen"});
    }
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
function toggleTable() {
    $('.hide-tb').toggle()
}
function hideandseek() {
    $('.info-result').hide()
    $('#bmiResult').hide()
    $('.re-icon').hide()
    $('#bmiForm').show()
}
$(document).ready(function () {
    $('#bmiForm').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            calculateBMI();
        }
    });
});