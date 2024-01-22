<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['grade']) && isset($_POST['credits'])) {
        $grade = $_POST['grade'];
        $credits = $_POST['credits'];
      
        $gpa = ($grade * $credits) / $credits ;
        echo number_format($gpa, 2);
    } 
} 
?>