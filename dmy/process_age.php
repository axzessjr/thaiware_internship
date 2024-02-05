<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dayInput = $_POST["dAge"];
    $monthInput = $_POST["mAge"];
    $yearInput = $_POST["yAge"];
    $birthdate = $yearInput . "-" . $monthInput . "-" . $dayInput;
    $age = calculateAge($birthdate);
    echo json_encode($age);
}
function calculateAge($birthdate) {
    $birthTimestamp = strtotime($birthdate);
    $currentTimestamp = time();
    $ageInSeconds = $currentTimestamp - $birthTimestamp;
    $ageInYears = floor($ageInSeconds / (365 * 24 * 60 * 60));
    $birthdate = new DateTime($birthdate);
    $now = new DateTime();
    $interval = $birthdate->diff($now);
    $age = array(
        'years' => $interval->y,
        'months' => $interval->m,
        'days' => $interval->d
    );
    return $age;
}
?>