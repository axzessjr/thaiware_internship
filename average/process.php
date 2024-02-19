<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $numbers = array_map('intval', explode(' ', $input));
    $numbers = array_filter($numbers);
    $mean = array_sum($numbers) / count($numbers);
    sort($numbers);
    $count = count($numbers);
    $median = ($count % 2 == 0) ? (($numbers[$count / 2 - 1] + $numbers[$count / 2]) / 2) : $numbers[($count - 1) / 2];
    $mode = array_count_values($numbers);
    arsort($mode);
    $maxFrequency = reset($mode);
    $mode = array_keys(array_filter($mode, function($value) use ($maxFrequency) {
        return $value === $maxFrequency;
    }));
    $mode = implode(", ", $mode);
    $sumSquaredDiff = 0;
    foreach ($numbers as $num) {
        $sumSquaredDiff += pow($num - $mean, 2);
    }
    $variance = $sumSquaredDiff / count($numbers);
    $standardDeviation = sqrt($variance);
    $standardDeviation = round($standardDeviation, 2, PHP_ROUND_HALF_UP);
    $result = "ค่าเฉลี่ย = $mean<br>";
    $result .= "ค่ามัธยฐาน = $median<br>";
    $result .= "ค่าฐานนิยม = $mode<br>";
    $result .= "ส่วนเบี่ยงเบนมาตรฐาน ≈ $standardDeviation";
    echo $result;
}
?>