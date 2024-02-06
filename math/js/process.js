function cal() {
    var input = $('textarea[name="text-ip"]').val();
    var unit = $('input[name="unit"]:checked').val();
    var solutionType = $('#solutionType').val();
    var isValidInput = true;
    if (unit === 'dot' && input.indexOf('.') === -1) {
        isValidInput = false;
    } else if (unit === 'comma' && input.indexOf(',') === -1) {
        isValidInput = false;
    } else if (unit === 'space-bar' && input.indexOf(' ') === -1) {
        isValidInput = false;
    } else if (unit === 'enter' && input.indexOf('\n') === -1) {
        isValidInput = false;
    }
    if( input === "" ) {
        $('#Result').html("กรุณากรอกข้อมูลให้ครบถ้วน");
        $('#Result').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#Result').show();
    } else 
    if (!isValidInput) {
        $('#Result').html("ใส่ข้อมูลไม่ถูกต้อง");
        $('#Result').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#Result').show(); 
    }
    else {
        $.ajax({
            url: "process.php",
            method: "POST",
            data: {
                input: input,
                unit: unit
            },
            success: function(data) {
                if (solutionType.val(gcd)) {
                    $('#Result').html("หรม. คือ" + data.gcd)
                } else if (solutionType.val(lcm)) {
                    $('#Result').html("ครน. คือ" + data.lcm)
                }
                $('#Result').css({"color":"#0C78A6"});
                $('#Result').show();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function validateInput(input) {
    input.value = input.value.replace(/[^\d\s\.,\n]/g, '');
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
})