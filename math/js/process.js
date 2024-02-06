function calGCD() {
    var GCD = $('input[name="gcd-ip"]').val();
    var unit = $('input[name="unit"]:checked').val();
    var isValidInput = true;
    if (unit === 'dot' && GCD.indexOf('.') === -1) {
        isValidInput = false;
    } else if (unit === 'comma' && GCD.indexOf(',') === -1) {
        isValidInput = false;
    } else if (unit === 'hyphen' && GCD.indexOf('-') === -1) {
        isValidInput = false;
    } else if (unit === 'space-bar' && GCD.indexOf(' ') === -1) {
        isValidInput = false;
    }
    if( GCD === "" ) {
        $('#gcdResult').html("กรุณากรอกข้อมูลให้ครบถ้วน");
        $('#gcdResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#gcdResult').show();
    } else 
    if (!isValidInput) {
        $('#gcdResult').html("ใส่ข้อมูลไม่ถูกต้อง");
        $('#gcdResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#gcdResult').show(); 
    }
    else {
        $.ajax({
            url: "process_gcd.php",
            method: "POST",
            data: {
                gcd: GCD,
                unit: unit
            },
            success: function(response) {
                $('#gcdResult').html("หรม. ของตัวเลขทั้งหมดคือ: " + response);
                $('#gcdResult').css({"color":"#0C78A6"});
                $('#gcdResult').show();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function calLCM() {
    var LCM = $('input[name="lcm-ip"]').val();
    var unit2 = $('input[name="unit2"]:checked').val();
    var isValidInput = true;
    if (unit2 === 'dot2' && LCM.indexOf('.') === -1) {
        isValidInput = false;
    } else if (unit2 === 'comma2' && LCM.indexOf(',') === -1) {
        isValidInput = false;
    } else if (unit2 === 'hyphen2' && LCM.indexOf('-') === -1) {
        isValidInput = false;
    } else if (unit2 === 'space-bar2' && LCM.indexOf(' ') === -1) {
        isValidInput = false;
    }
    if( LCM === "" ) {
        $('#lcmResult').html("กรุณากรอกข้อมูลให้ครบถ้วน");
        $('#lcmResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#lcmResult').show();
    } else if (!isValidInput) {
        $('#lcmResult').html("ใส่ข้อมูลไม่ถูกต้อง");
        $('#lcmResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#lcmResult').show(); 
    } else {
        $.ajax({
            url: "process_lcm.php",
            method: "POST",
            data: {
                lcm: LCM,
                unit2: unit2
            },
            success: function(response) {
                $('#lcmResult').html("ครน. ของตัวเลขทั้งหมดคือ: " + response);
                $('#lcmResult').css({"color":"#0C78A6"});
                $('#lcmResult').show();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
$(document).ready(function(){
    $('.btn-topic button').click(function(){
      if (!$(this).hasClass('active')) {
        $('.btn-topic button').removeClass('active');
        $(this).addClass('active');
      }
    });
    $('#gcd').click(function(){
        $('.form-gcd').show()
        $('.form-lcm').hide()
    })
    $('#lcm').click(function(){
        $('.form-gcd').hide()
        $('.form-lcm').show()
    })
    $('.form-gcd').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            calGCD();
        }
    });
    $('.form-lcm').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            calLCM();
        }
    });
})