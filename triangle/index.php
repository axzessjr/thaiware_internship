<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พื้นที่สามเหลี่ยม</title>

    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/triangle/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/triangle/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="topic-is">
            <div>พื้นที่สามเหลี่ยม</div>
        </div>
        <div class="sub-topic" role="group">
            <button type="button" class="BH active" id="BH" name="BH">หาด้วยความยาวฐาน และความสูง</button>
            <button type="button" class="SA" id="SA" name="SA">หาด้วยด้าน หรือมุม</button>
        </div>
    </div>
    <div class="form">
        <div class="find1">
            <div class="main">
                <label for="base">ฐาน</label>
                <input type="text" id="base" name="base" oninput="validateInput(this)">
                <label for="high">สูง</label>
                <input type="text" id="high" name="high" oninput="validateInput(this)">
                <input type="button" id="submit" onclick="calBH()" value="ตรวจสอบ">
            </div>
            <div id="BHresult"></div>
        </div>
        <div class="find2" style="display: none;">
            <img src="/thaiware_internship/triangle/img/tri.png">
            <div class="main2">
                <div class="side">
                    <label for="sideA">ด้าน a</label>
                    <input type="text" id="sideA" name="sideA" oninput="validateInput(this)">
                    <label for="sideB">ด้าน b</label>
                    <input type="text" id="sideB" name="sideB" oninput="validateInput(this)">
                    <label for="sideC">ด้าน c</label>
                    <input type="text" id="sideC" name="sideC" oninput="validateInput(this)">
                </div><br>
                <div class="angle">
                    <label for="angleA">มุม A</label>
                    <input type="text" id="angleA" name="angleA" oninput="validateInput(this)">
                    <label for="angleB">มุม B</label>
                    <input type="text" id="angleB" name="angleB" oninput="validateInput(this)">
                    <label for="angleC">มุม C</label>
                    <input type="text" id="angleC" name="angleC" oninput="validateInput(this)">
                </div>
                <input type="button" id="submit" onclick="calSA()" value="ตรวจสอบ" style="margin-top: 30px;">
                <div id="SAresult"></div>
            </div>
        </div>
    </div>
</body>
</html>