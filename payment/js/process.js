function calculate() {
    var productPrice = $('#productPrice').val();
    var downPaymentPercentage = $('#downPaymentPercentage').val();
    var months = $('#months').val();
    var interestRate = $('#interestRate').val();
    if(productPrice === "") {
        $('#result').html("กรุณากรอกข้อมูล");
        $('#result').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#result').show();
    } else {
        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: {
                productPrice: productPrice,
                downPaymentPercentage: downPaymentPercentage,
                months: months,
                interestRate: interestRate
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
    input.value = input.value.replace(/[^\d.]/g, '');
}