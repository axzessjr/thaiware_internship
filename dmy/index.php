<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D/M/Y</title>
    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/dmy/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/dmy/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="btn-topic" role="group">
            <button type="button" class="age active" id="age" name="age">อายุเท่าไหร่แล้ว?</button>
            <button type="button" class="daydiff" id="daydiff" name="daydiff">ระยะห่างระหว่างวัน</button>
            <button type="button" class="dayafter" id="dayafter" name="dayafter">ถัดจากนี้ไปอีก...</button>
        </div>
    </div>
    <div class="form-age">
        <div class="inputAge">
            <input type="number" class="dAge" id="dAge" name="dAge" min="1" max="31" placeholder="วัน">
            <select class="mAge" id="mAge" name="mAge">
                <option value="">เดือน</option>
                <option value="1">มกราคม</option>
                <option value="2">กุมภาพันธ์</option>
                <option value="3">มีนาคม</option>
                <option value="4">เมษายน</option>
                <option value="5">พฤษภาคม</option>
                <option value="6">มิถุนายน</option>
                <option value="7">กรกฎาคม</option>
                <option value="8">สิงหาคม</option>
                <option value="9">กันยายน</option>
                <option value="10">ตุลาคม</option>
                <option value="11">พฤศจิกายน</option>
                <option value="12">ธันวาคม</option>
            </select>
            <input type="number" class="yAge" id="yAge" name="yAge" min="1000" max="3000" placeholder="ปี">
        </div>
        <div id="ageResult"></div>
        <input type="button" id="submitAge" class="btnAge" onclick="calAge()" value="ตรวจสอบ">
    </div>
    <div class="form-diff" style="display: none;">
        <div class="inputDiff">
            <div class="ip1">
                <input type="number" class="dDiff" id="dDiff" name="dDiff" min="1" max="31" placeholder="วัน">
                <select class="mDiff" id="mDiff" name="mDiff">
                    <option value="">เดือน</option>
                    <option value="1">มกราคม</option>
                    <option value="2">กุมภาพันธ์</option>
                    <option value="3">มีนาคม</option>
                    <option value="4">เมษายน</option>
                    <option value="5">พฤษภาคม</option>
                    <option value="6">มิถุนายน</option>
                    <option value="7">กรกฎาคม</option>
                    <option value="8">สิงหาคม</option>
                    <option value="9">กันยายน</option>
                    <option value="10">ตุลาคม</option>
                    <option value="11">พฤศจิกายน</option>
                    <option value="12">ธันวาคม</option>
                </select>
                <input type="number" class="yDiff" id="yDiff" name="yDiff" min="1000" max="3000" placeholder="ปี">
            </div>
            <div class="icon-switch">
                <img src="/thaiware_internship/dmy/img/vector.png" id="switch">
            </div>
            <div class="ip2">
                <input type="number" class="dDiff2" id="dDiff2" name="dDiff2" min="01" max="31" placeholder="วัน" value="<?php echo date('j'); ?>">
                <select class="mDiff2" id="mDiff2" name="mDiff2">
                    <option value="">เดือน</option>
                    <option value="1" <?php echo (date('m') == '01') ? 'selected' : ''; ?>>มกราคม</option>
                    <option value="2" <?php echo (date('m') == '02') ? 'selected' : ''; ?>>กุมภาพันธ์</option>
                    <option value="3" <?php echo (date('m') == '03') ? 'selected' : ''; ?>>มีนาคม</option>
                    <option value="4" <?php echo (date('m') == '04') ? 'selected' : ''; ?>>เมษายน</option>
                    <option value="5" <?php echo (date('m') == '05') ? 'selected' : ''; ?>>พฤษภาคม</option>
                    <option value="6" <?php echo (date('m') == '06') ? 'selected' : ''; ?>>มิถุนายน</option>
                    <option value="7" <?php echo (date('m') == '07') ? 'selected' : ''; ?>>กรกฎาคม</option>
                    <option value="8" <?php echo (date('m') == '08') ? 'selected' : ''; ?>>สิงหาคม</option>
                    <option value="9" <?php echo (date('m') == '09') ? 'selected' : ''; ?>>กันยายน</option>
                    <option value="10" <?php echo (date('m') == '10') ? 'selected' : ''; ?>>ตุลาคม</option>
                    <option value="11" <?php echo (date('m') == '11') ? 'selected' : ''; ?>>พฤศจิกายน</option>
                    <option value="12" <?php echo (date('m') == '12') ? 'selected' : ''; ?>>ธันวาคม</option>
                </select>
                <input type="number" class="yDiff2" id="yDiff2" name="yDiff2" min="1000" max="3000" placeholder="ปี" value="<?php echo date('Y'); ?>">
            </div>
        </div>
        <select id="format" name="format">
            <option value="days">เฉพาะวัน</option>
            <option value="months">เดือน และ วัน</option>
            <option value="year">ปี เดือน และ วัน</option>
        </select>
        <div id="diffResult"></div>
        <input type="button" id="submitDiff" class="btnDiff" onclick="calDiff()" value="ตรวจสอบ">
    </div>
    <div class="form-after" style="display: none;">
        <div class="inputAfter">
            <input type="number" class="dAfter" id="dAfter" name="dAfter" min="01" max="31" placeholder="วัน" value="<?php echo date('j'); ?>">
            <select class="mAfter" id="mAfter" name="mAfter">
                <option value="">เดือน</option>
                <option value="1" <?php echo (date('m') == '01') ? 'selected' : ''; ?>>มกราคม</option>
                <option value="2" <?php echo (date('m') == '02') ? 'selected' : ''; ?>>กุมภาพันธ์</option>
                <option value="3" <?php echo (date('m') == '03') ? 'selected' : ''; ?>>มีนาคม</option>
                <option value="4" <?php echo (date('m') == '04') ? 'selected' : ''; ?>>เมษายน</option>
                <option value="5" <?php echo (date('m') == '05') ? 'selected' : ''; ?>>พฤษภาคม</option>
                <option value="6" <?php echo (date('m') == '06') ? 'selected' : ''; ?>>มิถุนายน</option>
                <option value="7" <?php echo (date('m') == '07') ? 'selected' : ''; ?>>กรกฎาคม</option>
                <option value="8" <?php echo (date('m') == '08') ? 'selected' : ''; ?>>สิงหาคม</option>
                <option value="9" <?php echo (date('m') == '09') ? 'selected' : ''; ?>>กันยายน</option>
                <option value="10" <?php echo (date('m') == '10') ? 'selected' : ''; ?>>ตุลาคม</option>
                <option value="11" <?php echo (date('m') == '11') ? 'selected' : ''; ?>>พฤศจิกายน</option>
                <option value="12" <?php echo (date('m') == '12') ? 'selected' : ''; ?>>ธันวาคม</option>
            </select>
            <input type="number" class="yAfter" id="yAfter" name="yAfter" min="1000" max="3000" placeholder="ปี" value="<?php echo date('Y'); ?>">
            <input type="number" class="cAfter" id="cAfter" name="cAfter" placeholder="อีกกี่วัน?">
        </div>
        <div id="afterResult"></div>
        <input type="button" id="submitAfter" class="btnAfter" onclick="calAfter()" value="ตรวจสอบ">
    </div>
</body>
</html>