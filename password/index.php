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
            <input type="checkbox" id="uppercase" checked>
            <label for="uppercase">ABC</label>
            <input type="checkbox" id="lowercase" checked>
            <label for="lowercase">abc</label>
            <input type="checkbox" id="numbers" checked>
            <label for="numbers">123</label>
            <input type="checkbox" id="special">
            <label for="special">#$&</label>
        </div>
    </div>
</body>
</html>