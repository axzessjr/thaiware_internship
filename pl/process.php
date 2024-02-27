<?php
if(isset($_POST['cost']) && isset($_POST['price'])) {
    $cost = $_POST['cost'];
    $price = $_POST['price'];
    $difference = $price - $cost;
    if ($difference < 0) {
        $difference = $difference * -1;
    }
    $result = $difference / $cost * 100;
    if ($cost < $price) {
        echo "ได้กำไร $difference บาท คิดเป็น $result%";
    } else if ($cost > $price) {
        echo "ขาดทุน $difference บาท คิดเป็น $result%";
    } else if ($cost = $price) {
        echo "ไม่ได้กำไรและไม่ขาดทุน";
    }
}
?>