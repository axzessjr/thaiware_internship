<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณภาษี</title>
    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/payment/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/payment/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="topic-is">
            <div>คำนวณการดาวน์และผ่อนจ่ายสินค้า</div>
        </div>
    </div>
    <div class="form">
        <div class="sup">
            <div>
                <label for="productPrice">ราคาสินค้า (บาท): </label>
                <input type="text" id="productPrice" oninput="validateInput(this)">
            </div>
            <div>
                <label for="downPaymentPercentage">การดาวน์ (%): </label>
                <select id="downPaymentPercentage">
                    <option value="20">20%</option>
                    <option value="30">30%</option>
                    <option value="40">40%</option>
                    <option value="50">50%</option>
                    <option value="60">60%</option>
                    <option value="70">70%</option>
                    <option value="80">80%</option>
                </select>
            </div>
            <div>
                <label for="months">จำนวนเดือน: </label>
                <select id="months">
                    <option value="3">3 เดือน</option>
                    <option value="6">6 เดือน</option>
                    <option value="9">9 เดือน</option>
                    <option value="12">12 เดือน</option>
                    <option value="18">18 เดือน</option>
                    <option value="24">24 เดือน</option>
                </select>
            </div>
            <div>
                <label for="interestRate">อัตราดอกเบี้ยต่อเดือน (%): </label>
                <input type="text" id="interestRate" oninput="validateInput(this)">
            </div>
            <div class="sm">
                <input type="button" id="submit" onclick="calculate()" value="ตรวจสอบ">
            </div>
        </div>
        <div id="result"></div>
    </div>
</body>
</html>