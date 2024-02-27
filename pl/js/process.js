function calPL() {
    var cost = $('#cost').val();
    var price = $('#price').val();
    if( cost === "" || price === "") {
        $('#result').html("กรุณากรอกข้อมูล");
        $('#result').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#result').show();
    } else {
        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: {
                cost: cost,
                price: price
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