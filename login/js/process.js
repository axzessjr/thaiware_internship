function login() {
    var username = $('input[name="username"]').val();
    var password = $('input[name="password"]').val();
    if (username === "" || password === "") {
        $('#result').html("Please enter username and password.");
        $('#result').css({"color":"gray"})
        $('#result').show()
    } else {
        $.ajax({
            url: "process.php",
            method: "POST",
            data: {
                username: $("#username").val(),
                password: $("#password").val()
            },
            success: function(data) {
                if (data === "success") {
                    $("#result").text("Success")
                    $('#result').css({"color":"limegreen"})
                    $("#username, #password").val("")
                } else if (data === "wrong") {
                    $("#result").text("Username or password is wrong.")
                    $('#result').css({"color":"red"})
                }
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    }  
}
$(document).ready(function () {
    $('#login-form').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            login();
        }
    });
});