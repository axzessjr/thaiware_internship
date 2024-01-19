function calGPA() {
    var Inputgrade = $('input[name="grade"]').val();
    var Inputcredits = $('input[name="credits"]').val();
    if(Inputgrade === "" || Inputcredits === "") {
        $('#gpa-error').html("Please fill out the information completely.");
        $('#gpa-error').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#gpa-error').show()
    }
}