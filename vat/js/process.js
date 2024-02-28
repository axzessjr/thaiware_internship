function calVAT() {
    var vatrate = $('#vatrate').val();
    var taxrate = $('#taxrate').val();
    var numtype = $('select[name="numtype"]').val();
    var pricein = $('#pricein').val();
    if(pricein === "") {
        $('#result').html("กรุณากรอกข้อมูล");
        $('#result').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#result').show();
    } else {
        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: {
                vatrate: vatrate,
                taxrate: taxrate,
                numtype: numtype,
                pricein: pricein
            },
            success: function(data) {
                $('#result').html(data);
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
    input.value = input.value.replace(/[^\d]/g, '');
}