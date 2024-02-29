<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vatrate = $_POST['vatrate'];
    $taxrate = $_POST['taxrate'];
    $numtype = $_POST['numtype'];
    $pricein = $_POST['pricein'];
    $price_before_tax = 0;
    $price_after_tax = 0;
    $price_with_vat = 0;
    switch ($numtype) {
        case 'vatex':
            $price_before_tax = $pricein;
            $vat = round(($pricein * $vatrate) / 100, 2);
            $price_with_vat = round($pricein + $vat, 2);
            $tax = round(($pricein * $taxrate) / 100, 2);
            $price_after_tax = round($price_with_vat - $tax, 2);
            break;
        case 'vatin':
            $price_before_tax = round($pricein / (1 + ($taxrate / 100)), 2);
            $vat = round($price_before_tax * ($vatrate / 100), 2);
            $price_with_vat = $pricein;
            $tax = round($price_before_tax * ($taxrate / 100), 2);
            $price_after_tax = round($pricein - $tax, 2);
            break;
        case 'taxin':
            $price_before_tax = round($pricein / (1 + ($taxrate / 100)), 2);
            $vat = round($price_before_tax * ($vatrate / 100), 2);
            $price_with_vat = round($price_before_tax + ($price_before_tax * ($vatrate / 100)), 2);
            $tax = round($price_before_tax * ($taxrate / 100), 2);
            $price_after_tax = $pricein;
            break;
        default:
            break;
    }
    echo "ราคาก่อนภาษี = " . number_format($price_before_tax, 2) . "<br>";
    echo "VAT $vatrate% = " . number_format($vat, 2) . "<br>";
    echo "ราคารวม VAT = " . number_format($price_with_vat, 2) . "<br>";
    echo "หัก ณ ที่จ่าย $taxrate% = " . number_format($tax, 2) . "<br>";
    echo "ราคาหลังหัก ณ ที่จ่าย = " . number_format($price_after_tax, 2) . "<br>";
}
?>