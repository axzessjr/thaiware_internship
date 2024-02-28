<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เศษส่วนอย่างต่ำ</title>
    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/fraction/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/fraction/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="btn-topic" role="group">
            <button type="button" class="low-frac active" id="low-frac" name="low-frac">เศษส่วนอย่างต่ำ</button>
            <button type="button" class="decimals" id="decimals" name="decimals" >แปลงทศนิยมซ้ำให้เป็นเศษส่วน</button>
        </div>
    </div>
    <div class="form-low-frac">
        <div class="main">
            <input type="text" id="low-frac-ip" name="low-frac-ip" oninput="validateInput1(this)">
            <input type="button" id="submit" onclick="calLowFrac()" value="ตรวจสอบ">
        </div>
        <div id="low-fracResult"></div>
    </div>
    <div class="form-decimals" style="display: none;">
        <div class="main">
            <label id="text-decimals">ทศนิยมซ้ำ</label>
            <input type="text" id="decimals-ip" name="decimals-ip" oninput="validateInput2(this)">
            <label id="text-repeat">หลักที่ซ้ำ</label>
            <input type="number" id="repeat" name="repeat" value="1" min="1" max="10" oninput="validateInput3(this)">
            <input type="button" id="submit" onclick="calDecimals()" value="ตรวจสอบ">
        </div>
        <div id="decimalsResult"></div>
    </div>
</body>
</html>