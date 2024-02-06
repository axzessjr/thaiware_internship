<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หรม./ครน.</title>

    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/math/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/math/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="btn-topic" role="group">
            <button type="button" class="gcd active" id="gcd" name="gcd">หรม. (หารร่วมมาก)</button>
            <button type="button" class="lcm" id="lcm" name="lcm">ครน. (คูณร่วมน้อย)</button>
        </div>
    </div>
    <div class="form-gcd">
        <input type="text" class="gcd-ip" id="gcd-ip" name="gcd-ip" placeholder="หรม." oninput="validateInput(this)">
        <input type="button" id="gcd-bt" class="gcd-bt" onclick="calGCD()" value="ตรวจสอบ">
        <div class="radio">
            <input type="radio" class="dot" id="dot" name="unit" value="dot"><label> ( . )</label>
            <input type="radio" class="comma" id="comma" name="unit" value="comma"><label> ( , )</label>
            <input type="radio" class="hyphen" id="hyphen" name="unit" value="hyphen"><label> ( - )</label>
            <input type="radio" class="space-bar" id="space-bar" name="unit" value="space-bar" checked=""><label> ( space )</label>
        </div>
        <div id="gcdResult"></div>
    </div>
    <div class="form-lcm" style="display: none;">
        <input type="text" class="lcm-ip" id="lcm-ip" name="lcm-ip"placeholder="ครน." oninput="validateInput(this)">
        <input type="button" id="lcm-bt" class="lcm-bt" onclick="calLCM()" value="ตรวจสอบ">
        <div class="radio">
            <input type="radio" class="dot2" id="dot2" name="unit2" value="dot2"><label> ( . )</label>
            <input type="radio" class="comma2" id="comma2" name="unit2" value="comma2"><label> ( , )</label>
            <input type="radio" class="hyphen2" id="hyphen2" name="unit2" value="hyphen2"><label> ( - )</label>
            <input type="radio" class="space-bar2" id="space-bar2" name="unit2" value="space-bar2" checked=""><label> ( space )</label>
        </div>
        <div id="lcmResult"></div>
    </div>
</body>
</html>