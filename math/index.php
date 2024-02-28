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
            <button type="button" class="gcd active" id="gcd" name="gcd" onclick="$('#solutionType').val('gcd');">หรม. (หารร่วมมาก)</button>
            <button type="button" class="lcm" id="lcm" name="lcm" onclick="$('#solutionType').val('lcm');">ครน. (คูณร่วมน้อย)</button>
        </div>
    </div>
    <div class="form">
        <div class="radio">
            <input type="radio" class="space-bar" id="space-bar" name="unit" value="space-bar" checked=""><label> ( space )</label>
            <input type="radio" class="enter" id="enter" name="unit" value="enter"><label> ( enter )</label>
            <input type="radio" class="dot" id="dot" name="unit" value="dot"><label> ( . )</label>
            <input type="radio" class="comma" id="comma" name="unit" value="comma"><label> ( , )</label>
        </div>
        <div class="main">
            <input type="hidden" class="solutionType" id="solutionType" name="solutionType" value="gcd">
            <textarea class="text-ip" id="text-ip" name="text-ip" placeholder="กรุณาใส่ตัวเลข (2 จำนวนขึ้นไป)" oninput="validateInput(this)"></textarea>
            <input type="button" id="submit" class="submit" onclick="cal()" value="ตรวจสอบ">
        </div>
        <div id="result"></div>
    </div>
</body>
</html>