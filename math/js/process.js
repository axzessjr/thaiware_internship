function calGCD() {
    var GCD = $('input[name="gcd-ip"]').val();
    var Unit = $('input[name="unit"]:checked').val();
    if( GCD === "" ) {
        $('#gcdResult').html("กรุณากรอกข้อมูลให้ครบถ้วน");
        $('#gcdResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#gcdResult').show();
    } else {
        $.ajax({
            url: "process_gcd.php",
            method: "POST",
            data: {
                gcd: GCD,
                Unit: Unit
            },
            success: function(response) {
                console.log(response)
                // $('#gcdResult').html("หรม. ของตัวเลขทั้งหมดคือ: " + response);
                // $('#gcdResult').css({"color":"#0C78A6"});
                // $('#gcdResult').show();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function calLCM() {
    var LCM = $('input[name="lcm-ip"]').val();
    if( LCM === "" ) {
        $('#lcmResult').html("กรุณากรอกข้อมูลให้ครบถ้วน");
        $('#lcmResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#lcmResult').show();
    } else {
        $.ajax({
            url: "process_lcm.php",
            method: "POST",
            data: {
                lcm: LCM
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