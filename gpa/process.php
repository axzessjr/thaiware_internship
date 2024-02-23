<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $total_subject = $_POST['total_subject'];
    $totalResult = 0;
    $creditsTotal = 0;
    for($i=1; $i<=$total_subject; $i++) {
        $Inputsubject = $_POST["subject$i"];
        $Inputgrade = $_POST["grade$i"];
        $Inputcredits = $_POST["credits$i"];
        if(($Inputgrade != -1)) {
            $result = $Inputgrade * $Inputcredits;
            $totalResult += $result;
            $creditsTotal += floatval($Inputcredits);
        }
    }
    $resultGPA = $totalResult / $creditsTotal;
    echo number_format($resultGPA, 2);
}
?>