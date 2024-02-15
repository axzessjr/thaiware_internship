function calLowFrac() {
    var input = $('input[name="low-frac-ip"]').val();
    if( input === "" ) {
        $('#low-fracResult').html("กรุณากรอกข้อมูล");
        $('#low-fracResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#low-fracResult').show();
    } else {
        $.ajax({
            url: 'process_low_frac.php',
            type: 'POST',
            data: {
                input: input
            },
            success: function(data) {
                $('#low-fracResult').html("เศษส่วนอย่างต่ำคือ: " + data);
                $('#low-fracResult').css({"color":"#0C78A6"});
                $('#low-fracResult').show();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function calDecimals() {
    var input = $('input[name="decimals-ip"]').val();
    var repeat = $('input[name="repeat"]').val();
    if(input === "" || repeat === "") {
        $('#decimalsResult').html("กรุณากรอกข้อมูล");
        $('#decimalsResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#decimalsResult').show();
    } else {
        $.ajax({
            url: 'process_decimals.php',
            type: 'POST',
            data: {
                input: input,
                repeat: repeat
            },
            success: function(data) {
                $('#decimalsResult').html("แปลงเป็นเศษส่วนได้ = " + data);
                $('#decimalsResult').css({"color":"#0C78A6"});
                $('#decimalsResult').show();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function validateInput1(input) {
    input.value = input.value.replace(/[^\d/]/g, '');
}
function validateInput2(input) {
    input.value = input.value.replace(/[^\d.]/g, '');
}
function validateInput3(input) {
    input.value = input.value.replace(/[^\d]/g, '');
}
$(document).ready(function(){
    $('.btn-topic button').click(function(){
      if (!$(this).hasClass('active')) {
        $('.btn-topic button').removeClass('active');
        $(this).addClass('active');
      }
    });
    $('#low-frac').click(function(){
        $('.form-low-frac').show()
        $('.form-decimals').hide()
    })
    $('#decimals').click(function(){
        $('.form-low-frac').hide()
        $('.form-decimals').show()
    })
})