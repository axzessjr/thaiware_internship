<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN test</title>

    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function login() {
            var username = $('input[name="username"]').val();
            var password = $('input[name="password"]').val();
            if (username === "" || password === "") {
                $('#result').html("Please enter username and password.");
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
                            $("#result").text("Success");
                            $("#username, #password").val("");
                        } else if (data === "wrong") {
                            $("#result").text("Username or password is wrong.");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error: " + status, error);
                    }
                });
            }  
        }
    </script>
</head>
<body>
    <div id="login-form">
        <!-- <label for="username">Username:</label> -->
        <input type="text" id="username" name="username" placeholder="username">
        <br>
        <!-- <label for="password">Password: </label> -->
        <input type="password" id="password" name="password" placeholder="password">
        <br>
        <button id="login-btn" onclick="login()">Login</button>
        <div id="result"></div>

    </div>
</body>
</html>


