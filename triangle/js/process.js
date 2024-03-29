function calBH() {
    var base = $('#base').val();
    var high = $('#high').val();
    if( base === "" || high === "" ) {
        $('#BHresult').html("กรุณากรอกข้อมูล");
        $('#BHresult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#BHresult').show();
    } else {
        $.ajax({
            url: 'process_BH.php',
            type: 'POST',
            data: {
                base: base,
                high: high
            },
            success: function(data) {
                $('#BHresult').html("พื้นที่ของสามเหลี่ยม = " + data);
                $('#BHresult').css({"color":"#0C78A6"});
                $('#BHresult').show();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function calSA() {
    var sideA = $('#sideA').val();
    var sideB = $('#sideB').val();
    var sideC = $('#sideC').val();
    var angleA = $('#angleA').val();
    var angleB = $('#angleB').val();
    var angleC = $('#angleC').val();
    if( sideA === "" && sideB === "" && sideC === "") {
        $('#SAresult').html("กรุณากรอกข้อมูล");
        $('#SAresult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#SAresult').show();
    } else
     if( sideA === "0" || sideB === "0" || sideC === "0") {
        $('#SAresult').html("ข้อมูลไม่ถูกต้อง");
        $('#SAresult').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#SAresult').show();
    }
     else {
        $.ajax({
            url: 'process_SA.php',
            type: 'POST',
            data: {
                sideA: sideA,
                sideB: sideB,
                sideC: sideC,
                angleA: angleA,
                angleB: angleB,
                angleC: angleC
            },
            success: function(data) {
                $('#SAresult').html(data);
                $('#SAresult').css({"color":"#0C78A6"});
                $('#SAresult').show();
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }
}
function validateInput(input) {
    input.value = input.value.replace(/[^\d.]/g, '');
}
$(document).ready(function(){
    $('.sub-topic button').click(function(){
      if (!$(this).hasClass('active')) {
        $('.sub-topic button').removeClass('active');
        $(this).addClass('active');
      }
    });
    $('#BH').click(function(){
        $('.find1').show()
        $('.find2').hide()
    })
    $('#SA').click(function(){
        $('.find1').hide()
        $('.find2').show()
    })
})
$(document).ready(function () {
    $('.find1').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            calBH();
        }
    });
    $('.find2').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            calSA();
        }
    });
});