function cal() {
    var input = $('#text-ip').val();
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
        $('#result').html("กรุณากรอกข้อมูล");
        $('#result').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#result').show();
    } else if (!isValidInput) {
        $('#result').html("ใส่ข้อมูลไม่ถูกต้อง");
        $('#result').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#result').show();
    }
    else {
        $.ajax({
            url: "process.php",
            method: "POST",
            data: {
                input: input,
                unit: unit,
                solutionType: solutionType
            },
            success: function(data) {
                if (solutionType === 'gcd') {
                    $('#result').html("หรม. คือ: " + data)
                } else if (solutionType === 'lcm') {
                    $('#result').html("ครน. คือ: " + data)
                }
                $('#result').css({"color":"#0C78A6"});
                $('#result').show();
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
})