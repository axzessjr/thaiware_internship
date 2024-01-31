<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $count = $_POST['count'];
    $date = date_create("$year-$month-$day");
    date_add($date, date_interval_create_from_date_string("$count days"));
    echo "After $count days, the date is: " . date_format($date, "d-m-Y");
}
?>