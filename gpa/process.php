<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['subject']) && isset($_POST['grade']) && isset($_POST['credits'])) {
        $total_subject = $_POST['total_subject'];
        $totalResult = 0;
        $creditsTotal = 0;
        for ($i = 0; $i < $total_subject; $i++) {
            $unit = $i === 0 ? "" : $i;
            $Inputsubject = $_POST["subject{$unit}"];
            $Inputgrade = $_POST["grade{$unit}"];
            $Inputcredits = $_POST["credits{$unit}"];
            $result = $Inputgrade * $Inputcredits;
            $totalResult += $result;
            $creditsTotal += floatval($Inputcredits);
        }
        $resultGPA = $totalResult / $creditsTotal;
        echo number_format($resultGPA, 2);
    } 
} 
?>
