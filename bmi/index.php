<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/bmi/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/bmi/js/process.js"></script> 
</head>
<body>
    <div class="top-bar">
        <div class="tab">
            <img src="/thaiware_internship/bmi/img/table-icon.png" id="tab-icon">
        </div>
        <div class="menu">
            <div>หน้าหลัก</div>
            <div>ข้อมูล</div>
            <div>เกี่ยวกับ</div>
        </div>
        <div class="icon">
            <img src="/thaiware_internship/bmi/img/user-icon.png" id="user-icon">
        </div>
    </div>
    <form id="bmiForm" method="post" action="">
        <label for="gender">เพศ:</label>
        <div class="gender" style="padding: 15px 5px 0px 0px;">
            <input type="radio" id="rm" name="genderUnit" value="ชาย" class="radio-input">
            <label class="r" for="rm"></label>
            <label id="gm"> ชาย </label>
            <input type="radio" id="rf" name="genderUnit" value="หญิง" class="radio-input">
            <label class="r" for="rf"></label>
            <label id="gf"> หญิง </label>
        </div><br>
        <label for="weight">น้ำหนัก (กก.):</label>
        <input type="number" name="weight" step="0.1" value="" required><br>
        <div class="height-op">
        <label>ส่วนสูง:</label>
            <input type="radio" id="cm" name="heightUnit" value="เซนติเมตร" checked="" class="radio-input">
            <label class="r" for="cm"></label>
            <label>(ซม.)</label>
            <input type="radio" id="m" name="heightUnit" value="เมตร" class="radio-input">
            <label class="r" for="m"></label>
            <label>(ม.)</label><br>
            <input type="number" name="height" step="0.01" value="" required=""><br>
        </div>
        <input type="button" id="submitBtn" class="cal" onclick="calculateBMI()" value="คำนวณ BMI">
    </form>
    <div class="info-result" style="display: none;">
        <div id="genderResult"></div>
        <div id="weightResult"></div>
        <div id="heightResult"></div>
    </div>
    <div id="bmi-error"></div>
    <div id="bmiResult" style="display: none;"></div><br>
    <div class="re-icon" style="display: none;">
        <img src="/thaiware_internship/bmi/img/refresh-icon.png" id="re-icon" onclick="hideandseek()">
    </div><br>
    <div class="see-tb">
        <input type="button" id="stb" onclick="toggleTable()" value="ดูเพิ่มเติม">
    </div>
    <div class="hide-tb">
        <div class="table-m">
            <div class="tb-male">
                <div class="bmi-male">BMI ผู้ชาย</div>
                <div style="padding: 10px 0px 5px 0px;">น้อยกว่า 18.5</div>
                <div style="padding: 5px 0px;">18.5 - 24.9</div>
                <div style="padding: 5px 0px;">25 - 29.9</div>
                <div style="padding: 5px 0px;">30 - 34.9</div>
                <div style="padding: 5px 0px;">35 - 39.9</div>
                <div style="padding: 5px 0px 10px 0px;">มากกว่า 40</div>
            </div>
            <div class="tb-sm">
                <div class="status-male">สถานะ BMI</div>
                <div style="padding: 10px 0px 5px 0px;">ผอม</div>
                <div style="padding: 5px 0px;">ปกติ</div>
                <div style="padding: 5px 0px;">ท้วม</div>
                <div style="padding: 5px 0px;">โรคอ้วนระดับ 1</div>
                <div style="padding: 5px 0px;">โรคอ้วนระดับ 2</div>
                <div style="padding: 5px 0px 10px 0px;">โรคอ้วนระดับ 3</div>
            </div>
        </div>
        <div class="table-f">
            <div class="tb-female">
                <div class="bmi-female">BMI ผู้หญิง</div>
                <div style="padding: 10px 0px 5px 0px;">น้อยกว่า 18.5</div>
                <div style="padding: 5px 0px;">18.5 - 23.9</div>
                <div style="padding: 5px 0px;">24 - 28.9</div>
                <div style="padding: 5px 0px;">29 - 34.9</div>
                <div style="padding: 5px 0px;">35 - 39.9</div>
                <div style="padding: 5px 0px 10px 0px;">มากกว่า 40</div>
            </div>
            <div class="tb-sf">
                <div class="status-female">สถานะ BMI</div>
                <div style="padding: 10px 0px 5px 0px;">ผอม</div>
                <div style="padding: 5px 0px;">ปกติ</div>
                <div style="padding: 5px 0px;">ท้วม</div>
                <div style="padding: 5px 0px;">โรคอ้วนระดับ 1</div>
                <div style="padding: 5px 0px;">โรคอ้วนระดับ 2</div>
                <div style="padding: 5px 0px 10px 0px;">โรคอ้วนระดับ 3</div>
            </div>
        </div>
    </div>
</body>
</html>