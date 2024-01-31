function calAge() {
    var dayInput = $('input[name="dAge"]').val();
    var monthInput = $('select[name="mAge"]').val();
    var yearInput = $('input[name="yAge"]').val();
    if( dayInput === "" || monthInput === "" || yearInput === "") {
        $('#ageResult').html("Please fill out the information completely.");
        $('#ageResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#ageResult').show();
    } else {
        $.ajax({
            url: "process_age.php",
            method: "POST",
            data: {
                dAge: dayInput,
                mAge: monthInput,
                yAge: yearInput
            },
            dataType: "json",
            success: function(data) {
                $('#ageResult').html("คุณอายุ " + data.years + " ปี " + data.months + " เดือน กับอีก " + data.days + " วัน");
                $('#ageResult').css({"color":"rgba(0, 0, 0)"});
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }  
}
function calDiff() {
    var dayInput = $('input[name="dDiff"]').val();
    var monthInput = $('select[name="mDiff"]').val();
    var yearInput = $('input[name="yDiff"]').val();
    var dayInput2 = $('input[name="dDiff2"]').val();
    var monthInput2 = $('select[name="mDiff2"]').val();
    var yearInput2 = $('input[name="yDiff2"]').val();
    var format = $('#format').val();
    if( dayInput === "" || monthInput === "" || yearInput === "" || dayInput2 === "" || monthInput2 === "" || yearInput2 === "") {
        $('#diffResult').html("กรุณากรอกข้อมูลให้ครบถ้วน");
        $('#diffResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#diffResult').show();
    } else {
        $.ajax({
            url: 'process_diff.php',
            type: 'POST',
            data: {
                date1: yearInput + '-' + monthInput + '-' + dayInput,
                date2: yearInput2 + '-' + monthInput2 + '-' + dayInput2,
                format: format
            },
            success: function(response){
              $('#diffResult').html('ระยะห่าง : ' + response);
              $('#diffResult').css({"color":"rgba(0, 0, 0)"});
            }
          });
    }
}
function calAfter() {
    var dayInput = $('input[name="dAfter"]').val();
    var monthInput = $('select[name="mAfter"]').val();
    var yearInput = $('input[name="yAfter"]').val();
    var countInput = $('input[name="cAfter"]').val();
    if( dayInput === "" || monthInput === "" || yearInput === "" || countInput === "") {
        $('#afterResult').html("กรุณากรอกข้อมูลให้ครบถ้วน");
        $('#afterResult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#afterResult').show();
    } else {
        $.ajax({
            type: "POST",
            url: "process_after.php",
            data: {
                day: dayInput,
                month: monthInput,
                year: yearInput,
                count: countInput
            },
            success: function(response) {
                $('#afterResult').html(response);
                $('#afterResult').css({"color":"rgba(0, 0, 0)"});
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
    $('#age').click(function(){
        $('.form-age').show()
        $('.form-diff').hide()
        $('.form-after').hide()
    })
    $('#daydiff').click(function(){
        $('.form-age').hide()
        $('.form-diff').show()
        $('.form-after').hide()
    })
    $('#dayafter').click(function(){
        $('.form-age').hide()
        $('.form-diff').hide()
        $('.form-after').show()
    })
    $('#switch').click(function() {
        var tempDayInput = $('input[name="dDiff"]').val();
        var tempMonthInput = $('select[name="mDiff"]').val();
        var tempYearInput = $('input[name="yDiff"]').val();
        $('input[name="dDiff"]').val($('input[name="dDiff2"]').val());
        $('select[name="mDiff"]').val($('select[name="mDiff2"]').val());
        $('input[name="yDiff"]').val($('input[name="yDiff2"]').val());
        $('input[name="dDiff2"]').val(tempDayInput);
        $('select[name="mDiff2"]').val(tempMonthInput);
        $('input[name="yDiff2"]').val(tempYearInput);
    });
});