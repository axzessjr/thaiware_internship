<?php
$productPrice = $_POST['productPrice'];
$downPaymentPercentage = $_POST['downPaymentPercentage'];
$months = $_POST['months'];
$interestRate = isset($_POST['interestRate']) && $_POST['interestRate'] != '' ? $_POST['interestRate'] : 0;
$downPayment = ($downPaymentPercentage / 100) * $productPrice;
$loanAmount = $productPrice - $downPayment;
if ($interestRate != 0) {
    $monthlyInterestRate = $interestRate / 100 / 12;
    $monthlyPayment = ($loanAmount * $monthlyInterestRate) / (1 - pow(1 + $monthlyInterestRate, -$months));
} else {
    $monthlyPayment = $loanAmount / $months;
}
echo "ราคาดาวน์: " . number_format($downPayment, 2) . " บาท<br>";
echo "ค่าใช้จ่ายเงินผ่อนต่อเดือน: " . number_format($monthlyPayment, 2) . " บาท<br>";
?>