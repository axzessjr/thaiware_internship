<?php
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$format = $_POST['format'];
$datetime1 = new DateTime($date1);
$datetime2 = new DateTime($date2);
$interval = $datetime1->diff($datetime2);
switch ($format) {
    case 'days':
        echo $interval->days . " วัน";
        break;
    case 'months':
        $totalMonths = $interval->y * 12 + $interval->m;
        echo $totalMonths . " เดือน " . $interval->d . " วัน";
        break;
    case 'year':
        echo $interval->y . " ปี " . $interval->m . " เดือน " . $interval->d . " วัน";
        break;
}
?>
