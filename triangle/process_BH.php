<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = $_POST['base'];
    $high = $_POST['high'];
    $result = 0.5 * $base * $high;
    echo $result;
}
?>