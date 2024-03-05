<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMR</title>
    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/bmr/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/bmr/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="topic-is">
            <div>เครื่องคำนวณการเผาผลาญพลังงาน (BMR)</div>
        </div>
    </div>
    <form id="bmr">
        <div class="gender">
            <label for="gender">เพศ:</label>
            <div style="padding: 15px 5px 0px 0px;">
                <input type="radio" id="rm" name="genderUnit" value="ชาย" class="radio-input" checked="">
                <label class="r" for="rm">ชาย</label>
                <input type="radio" id="rf" name="genderUnit" value="หญิง" class="radio-input">
                <label class="r" for="rf">หญิง</label>
            </div>
        </div>
        <div class="input">
            <label for="age">อายุ:</label>
            <input type="text" id="age" name="age" oninput="validateInput(this)">
            <label for="weight">น้ำหนัก (กก.):</label>
            <input type="text" id="weight" name="weight" step="0.1" oninput="validateInput(this)">
            <label for="height">ส่วนสูง (ซม.):</label>
            <input type="text" id="height" name="height" step="0.01" oninput="validateInput(this)">
        </div>
        <input type="button" id="submit" class="submit" onclick="calBMR()" value="คำนวณ BMR">
    </form>
    <div id="bmrResult"></div>
    <form id="tdee">
        <label for="step">ระดับการออกกำลังกาย</label>
        <select id="step">
            <option value="1.25">น้อยมาก หรือไม่ค่อยออกกำลังกาย</option>
            <option value="1.375">น้อย ออกกำลังกาย 1-3 ครั้งต่อสัปดาห์</option>
            <option value="1.55">ปานกลาง ออกกำลังกาย 4-5 ครั้งต่อสัปดาห์</option>
            <option value="1.7">หนัก ออกกำลังกาย 6-7 ครั้งต่อสัปดาห์</option>
            <option value="1.9">หนักมาก ออกกำลังกายวันละ 2 ครั้งขึ้นไป</option>
        </select>
        <input type="button" id="submit" class="submit" onclick="calTDEE()" value="คำนวณ TDEE">
    </form>
    <div id="tdeeResult"></div>
</body>
</html>