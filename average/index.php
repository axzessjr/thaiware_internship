<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค่าเฉลี่ยเลขคณิต</title>

    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/average/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/average/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="topic-is">
            <div>ค่าเฉลี่ย, มัธยฐาน, ฐานนิยม, ส่วนเบี่ยงเบนมาตรฐาน</div>
        </div>
    </div>
    <div class="form">
        <div class="main">
            <input type="text" id="input_number" name="input_number" oninput="validateInput(this)">
            <input type="button" id="submit" onclick="cal()" value="ตรวจสอบ">
        </div>
        <div id="result"></div>
    </div>
</body>
</html>