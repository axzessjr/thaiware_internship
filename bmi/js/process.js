function calculateBMI() {
    var Inputgender = $('input[name="genderUnit"]:checked').val();
    var Inputweight = $('#weight').val();
    var Inputheight = $('#height').val();
    var InputheightUnit = $('input[name="heightUnit"]:checked').val();
    if(Inputweight === "" || Inputheight === "") {
        $('#bmi-error').html("กรุณากรอกข้อมูลให้ครบถ้วน");
        $('#bmi-error').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#bmi-error').show()
    } else {
        $(".cal").addClass("loading");
        $(".cal").attr({"disabled":"true"})
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
                $('#genderResult').html("เพศ: " + Inputgender);
                $('#weightResult').html("น้ำหนัก: " + Inputweight + " กิโลกรัม");
                $('#heightResult').html("ส่วนสูง: " + Inputheight + " " + InputheightUnit);
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
    if (gender === 'ชาย') {
        colorMale(bmiResult, bmi);
    } else if (gender === 'หญิง') {
        colorFemale(bmiResult, bmi);
    }
    var gender_result
    if (gender === "ชาย") {
        gender_result =  showBMIStatusMale(bmi);
    } else if (gender === "หญิง") {
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
        male_result = "ผอม";
    } else if (bmi >= 18.5 && bmi <= 24.9) {
        male_result = "ปกติ";
    } else if (bmi >= 25 && bmi <= 29.9) {
        male_result = "ท้วม";
    } else if (bmi >= 30 && bmi <= 34.9) {
        male_result = "โรคอ้วนระดับ 1";
    } else if (bmi >= 35 && bmi <= 39.9) {
        male_result = "โรคอ้วนระดับ 2";
    } else {
        male_result = "โรคอ้วนระดับ 3";
    }
    return male_result;
}
function showBMIStatusFemale(bmi) {
    var female_result
    if (bmi < 18.5) {
        female_result = "ผอม";
    } else if (bmi >= 18.5 && bmi <= 23.9) {
        female_result = "ปกติ";
    } else if (bmi >= 24 && bmi <= 28.9) {
        female_result = "ท้วม";
    } else if (bmi >= 29 && bmi <= 34.9) {
        female_result = "โรคอ้วนระดับ 1";
    } else if (bmi >= 35 && bmi <= 39.9) {
        female_result = "โรคอ้วนระดับ 2";
    } else {
        female_result = "โรคอ้วนระดับ 3";
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
    $(".cal").removeClass("loading");
    $(".cal").removeAttr("disabled");
}
$(document).ready(function () {
    $('#bmiForm').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            calculateBMI();
        }
    });
});