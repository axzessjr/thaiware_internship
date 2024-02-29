<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณภาษี</title>
    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/vat/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/vat/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="topic-is">
            <div>คำนวณภาษี</div>
        </div>
    </div>
    <div class="form">
        <div class="main">
            <div class="rate">
                <label for="vatrate">อัตรา VAT</label>
                <input type="text" id="vatrate" name="vatrate" oninput="validateInput(this)" value="7">
                <label for="vatrate">% </label>
                <label for="taxrate"> อัตราภาษีหัก ณ ที่จ่าย</label>
                <input type="text" id="taxrate" name="taxrate" oninput="validateInput(this)" value="3">
                <label for="taxrate">%</label>
            </div>
            <div class="price">
                <select name="numtype" id="numtype">
                    <option value="vatex">ราคาก่อน VAT</option>
                    <option value="vatin">ราคารวม VAT</option>
                    <option value="taxin">ราคาหลังหัก ณ ที่จ่าย</option>
                </select>
                <input type="text" id="pricein" name="pricein" oninput="validateInput(this)">
            </div>
            <input type="button" id="submit" onclick="calVAT()" value="ตรวจสอบ">
        </div>
        <div id="result"></div>
    </div>
</body>
</html>