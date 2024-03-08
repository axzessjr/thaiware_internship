<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวสร้างรหัสผ่านแบบสุ่ม</title>
    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/password/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/password/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="topic-is">
            <div>ตัวสร้างรหัสผ่านแบบสุ่ม</div>
        </div>
    </div>
    <div class="form">
        <div class="main">
            <div class="password-box" id="password-display">กด "สุ่ม" เพื่อเริ่มใช้งาน</div>
            <input type="button" id="submit" onclick="generatePassword()" value="สุ่ม">
            <input type="button" id="submit" onclick="copyPassword()" value="คัดลอก">
        </div>
        <div class="tools">
            <label for="password-length">ความยาวของรหัสผ่าน:</label>
            <input type="range" id="password-length" min="1" max="20" value="4" oninput="updatePasswordLength(this.value)">
            <span id="password-length-display">4</span><br>
            <div class="check">
                <div class="checkbox-wrapper-19">
                    <input type="checkbox" id="uppercase" checked>
                    <label for="uppercase" class="check-box">
                    <label style="margin-left: 25px;">ABC</label>
                </div>
                <div class="checkbox-wrapper-19">
                    <input type="checkbox" id="lowercase" checked>
                    <label for="lowercase" class="check-box">
                    <label style="margin-left: 25px;">abc</label>
                </div>
                <div class="checkbox-wrapper-19">
                    <input type="checkbox" id="numbers" checked>
                    <label for="numbers" class="check-box">
                    <label style="margin-left: 25px;">123</label>
                </div>
                <div class="checkbox-wrapper-19">
                    <input type="checkbox" id="special">
                    <label for="special" class="check-box">
                    <label style="margin-left: 25px;">#$&</label>
                </div>
            </div>
        </div>
        <div class="tab">
            <!-- <div class="topic-copied" id="topic" onclick="openPopup()">ประวัติการคัดลอก</div>
            <div class="tab-close" id="popup" style="display: none;">
                <div class="topic-copied" onclick="closePopup()">ประวัติการคัดลอก</div> -->
                <div class="copied-password" id="copied-password"></div>
            <!-- </div> -->
        </div>
    </div>
</body>
</html>