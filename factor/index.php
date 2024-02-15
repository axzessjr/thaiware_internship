<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แยกตัวประกอบ</title>

    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/factor/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/factor/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="btn-topic" role="group">
            <button type="button" class="count active" id="count" name="count">แยกตัวประกอบ (จำนวนนับ)</button>
            <button type="button" class="degree" id="degree" name="degree" >แยกตัวประกอบ พหุนามดีกรีสอง</button>
        </div>
    </div>
    <div class="form-count">
        <div class="main">
            <input type="number" id="count-ip" name="count-ip" oninput="validateInput(this)">
            <input type="button" id="submit" onclick="calCount()" value="ตรวจสอบ">
        </div>
        <div id="countResult"></div>
    </div>
    <div class="form-degree" style="display: none;">
        <div class="main">
            <input type="number" id="degree-ip1" name="degree-ip1">
            <label>x<sup>2</sup> +</label>
            <input type="number" id="degree-ip2" name="degree-ip2">
            <label>x +</label>
            <input type="number" id="degree-ip3" name="degree-ip3">
            <input type="button" id="submit" onclick="calDegree()" value="ตรวจสอบ">
        </div>
        <div id="degreeResult"></div>
    </div>
</body>
</html>