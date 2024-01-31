<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);
    $seconds_diff = abs($timestamp2 - $timestamp1);
    $days_diff = floor($seconds_diff / (60 * 60 * 24));
    echo $days_diff;
}
?>