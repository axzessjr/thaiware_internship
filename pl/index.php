<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กำไร ขาดทุน</title>

    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/pl/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/pl/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="topic-is">
            <div>กำไร-ขาดทุน</div>
        </div>
    </div>
    <div class="form">
        <div class="main">
            <label for="cost">ต้นทุน</label>
            <input type="text" id="cost" name="cost" oninput="validateInput(this)">
            <label for="price">ราคาขาย</label>
            <input type="text" id="price" name="price" oninput="validateInput(this)">
            <input type="button" id="submit" onclick="calPL()" value="ตรวจสอบ">
        </div>
        <div id="result"></div>
    </div>
</body>
</html>