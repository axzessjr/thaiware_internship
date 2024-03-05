var bmrValue;
function calBMR() {
    var Inputgender = $('input[name="genderUnit"]:checked').val();
    var Inputage = $('#age').val();
    var Inputweight = $('#weight').val();
    var Inputheight = $('#height').val();
    if(Inputage === "" || Inputweight === "" || Inputheight === "") {
        $('#bmrResult').html("กรุณากรอกข้อมูลให้ครบถ้วน");
        $('#bmrResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#bmrResult').show();
    } else {
        $.ajax({
            url: "process.php",
            method: "POST",
            data: {
                action: "bmr",
                gender: Inputgender,
                age: Inputage,
                weight: Inputweight,
                height: Inputheight               
            },
            success: function(data) {
                $('#bmrResult').html("พลังงานที่จำเป็นพื้นฐานในการมีชีวิต(BMR) ≈ " + data + "กิโลแคลอรี่");
                $('#bmrResult').css({"color":"#0C78A6"});
                $('#bmrResult').show();
                bmrValue = data;
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function calTDEE() {
    var Inputstep = $('#step').val();
    if (!bmrValue) {
        $('#tdeeResult').html("กรุณาคำนวณ BMR ก่อน");
        $('#tdeeResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#tdeeResult').show();
        return;
    }
    $.ajax({
        url: "process.php",
        method: "POST",
        data: {
            action: "tdee",
            step: Inputstep,
            bmr: bmrValue
        },
        success: function(data) {
            $('#tdeeResult').html("พลังงานที่คุณใช้ในแต่ละวัน(TDEE) ≈ " + data + "กิโลแคลอรี่");
            $('#tdeeResult').css({"color":"#0C78A6"});
            $('#tdeeResult').show();
        },
        error: function(xhr, status, error) {
            console.error("Error: " + status, error);
        }
    });
}
function validateInput(input) {
    input.value = input.value.replace(/[^\d]/g, '');
}