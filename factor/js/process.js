function calCount() {
    var input = $('input[name="count-ip"]').val();
    if( input === "" ) {
        $('#countResult').html("กรุณากรอกข้อมูล");
        $('#countResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#countResult').show();
    } else {
        $.ajax({
            url: 'process_count.php',
            type: 'POST',
            data: { number: input },
            success: function(response) {
                var factors = JSON.parse(response);
                var resultMessage = input + " = ";
                for (var i = 0; i < factors.length; i++) {
                    resultMessage += factors[i];
                    if (i < factors.length - 1) {
                        resultMessage += " * ";
                    }
                }
                $('#countResult').html(resultMessage);
                $('#countResult').css({"color":"#0C78A6"});
                $('#countResult').show();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function calDegree() {
    var input1 = $('input[name="degree-ip1"]').val();
    var input2 = $('input[name="degree-ip2"]').val();
    var input3 = $('input[name="degree-ip3"]').val();
    if(input2 === "" || input3 === "" ) {
        $('#degreeResult').html("กรุณากรอกข้อมูล");
        $('#degreeResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#degreeResult').show();
    } else {
        $.ajax({
            url: 'process_degree.php',
            type: 'POST',
            data: { 
                input1: input1,
                input2: input2,
                input3: input3
             },
            success: function(data) {
                $('#degreeResult').html(data);
                $('#degreeResult').css({"color":"#0C78A6"});
                $('#degreeResult').show();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function validateInput(input) {
    input.value = input.value.replace(/[^\d]/g, '');
}
$(document).ready(function(){
    $('.btn-topic button').click(function(){
      if (!$(this).hasClass('active')) {
        $('.btn-topic button').removeClass('active');
        $(this).addClass('active');
      }
    });
    $('#count').click(function(){
        $('.form-count').show()
        $('.form-degree').hide()
    })
    $('#degree').click(function(){
        $('.form-count').hide()
        $('.form-degree').show()
    })
})