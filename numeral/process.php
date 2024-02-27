<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["input"];
    $fromBase = $_POST["fromBase"];
    $decimal = 0;
    if ($fromBase === 'binary') {
        $decimal = bindec($input);
    } else if ($fromBase === 'octal') {
        $decimal = octdec($input);
    } else if ($fromBase === 'decimal') {
        $decimal = $input;
    } else if ($fromBase === 'hexadecimal') {
        $decimal = hexdec($input);
    }
    $results = array();
    $results["binary"] = decbin($decimal);
    $results["octal"] = decoct($decimal);
    $results["decimal"] = $decimal;
    $results["hexadecimal"] = dechex($decimal);
    echo json_encode($results);
}
?>