<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $expectedUsername = "muggle";
        $expectedPassword = "123456";
        if ($username == $expectedUsername && $password == $expectedPassword) {
            echo "success";
        } else {
            echo "wrong";
        }
    } 
} 
?>