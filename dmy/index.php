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
            <button type="button" class="age active" id="age" name="age" >Age</button>
            <button type="button" class="daydiff" id="daydiff" name="daydiff">Day Diff</button>
            <button type="button" class="dayafter" id="dayafter" name="dayafter">Day After</button>
        </div>
    </div>
    <div class="form-age">
        <div class="input">
            <input type="number" class="dAge" id="dAge" name="dAge" min="1" max="31" placeholder="Day" value="<?php echo date('d'); ?>">
            <select class="mAge" id="mAge" name="mAge">
                <option value="">Month</option>
                <option value="1" <?php echo (date('m') == '01') ? 'selected' : ''; ?>>January</option>
                <option value="2" <?php echo (date('m') == '02') ? 'selected' : ''; ?>>February</option>
                <option value="3" <?php echo (date('m') == '03') ? 'selected' : ''; ?>>March</option>
                <option value="4" <?php echo (date('m') == '04') ? 'selected' : ''; ?>>April</option>
                <option value="5" <?php echo (date('m') == '05') ? 'selected' : ''; ?>>May</option>
                <option value="6" <?php echo (date('m') == '06') ? 'selected' : ''; ?>>June</option>
                <option value="7" <?php echo (date('m') == '07') ? 'selected' : ''; ?>>July</option>
                <option value="8" <?php echo (date('m') == '08') ? 'selected' : ''; ?>>August</option>
                <option value="9" <?php echo (date('m') == '09') ? 'selected' : ''; ?>>September</option>
                <option value="10" <?php echo (date('m') == '10') ? 'selected' : ''; ?>>October</option>
                <option value="11" <?php echo (date('m') == '11') ? 'selected' : ''; ?>>November</option>
                <option value="12" <?php echo (date('m') == '12') ? 'selected' : ''; ?>>December</option>
            </select>
            <input type="number" class="yAge" id="yAge" name="yAge" min="1000" max="3000" placeholder="Year" value="<?php echo date('Y'); ?>">
        </div>
        <div id="ageResult"></div>
        <input type="button" id="submitAge" class="btnAge" onclick="calAge()" value="Check">
    </div>
    <div class="form-diff" style="display: none;">
        <div class="input">
            <input type="number" class="dDiff" id="dDiff" name="dDiff" min="1" max="31" placeholder="Day">
            <select class="mDiff" id="mDiff" name="mDiff">
                <option value="">Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <input type="number" class="yDiff" id="yDiff" name="yDiff" min="1000" max="3000" placeholder="Year"><br>
            <input type="number" class="dDiff2" id="dDiff2" name="dDiff2" min="1" max="31" placeholder="Day" value="<?php echo date('d'); ?>">
            <select class="mDiff2" id="mDiff2" name="mDiff2">
                <option value="">Month</option>
                <option value="1" <?php echo (date('m') == '01') ? 'selected' : ''; ?>>January</option>
                <option value="2" <?php echo (date('m') == '02') ? 'selected' : ''; ?>>February</option>
                <option value="3" <?php echo (date('m') == '03') ? 'selected' : ''; ?>>March</option>
                <option value="4" <?php echo (date('m') == '04') ? 'selected' : ''; ?>>April</option>
                <option value="5" <?php echo (date('m') == '05') ? 'selected' : ''; ?>>May</option>
                <option value="6" <?php echo (date('m') == '06') ? 'selected' : ''; ?>>June</option>
                <option value="7" <?php echo (date('m') == '07') ? 'selected' : ''; ?>>July</option>
                <option value="8" <?php echo (date('m') == '08') ? 'selected' : ''; ?>>August</option>
                <option value="9" <?php echo (date('m') == '09') ? 'selected' : ''; ?>>September</option>
                <option value="10" <?php echo (date('m') == '10') ? 'selected' : ''; ?>>October</option>
                <option value="11" <?php echo (date('m') == '11') ? 'selected' : ''; ?>>November</option>
                <option value="12" <?php echo (date('m') == '12') ? 'selected' : ''; ?>>December</option>
            </select>
            <input type="number" class="yDiff2" id="yDiff2" name="yDiff2" min="1000" max="3000" placeholder="Year" value="<?php echo date('Y'); ?>">
        </div>
        <select id="format" name="format">
            <option value="days">days</option>
            <option value="months">month and days</option>
            <option value="year">year, month and days</option>
        </select>
        <div id="diffResult"></div>
        <input type="button" id="submitDiff" class="btnDiff" onclick="calDiff()" value="Check">
    </div>
    <div class="form-after" style="display: none;">
        <div class="input">
            <input type="number" class="dAfter" id="dAfter" name="dAfter" min="1" max="31" placeholder="Day" value="<?php echo date('d'); ?>">
            <select class="mAfter" id="mAfter" name="mAfter">
                <option value="">Month</option>
                <option value="1" <?php echo (date('m') == '01') ? 'selected' : ''; ?>>January</option>
                <option value="2" <?php echo (date('m') == '02') ? 'selected' : ''; ?>>February</option>
                <option value="3" <?php echo (date('m') == '03') ? 'selected' : ''; ?>>March</option>
                <option value="4" <?php echo (date('m') == '04') ? 'selected' : ''; ?>>April</option>
                <option value="5" <?php echo (date('m') == '05') ? 'selected' : ''; ?>>May</option>
                <option value="6" <?php echo (date('m') == '06') ? 'selected' : ''; ?>>June</option>
                <option value="7" <?php echo (date('m') == '07') ? 'selected' : ''; ?>>July</option>
                <option value="8" <?php echo (date('m') == '08') ? 'selected' : ''; ?>>August</option>
                <option value="9" <?php echo (date('m') == '09') ? 'selected' : ''; ?>>September</option>
                <option value="10" <?php echo (date('m') == '10') ? 'selected' : ''; ?>>October</option>
                <option value="11" <?php echo (date('m') == '11') ? 'selected' : ''; ?>>November</option>
                <option value="12" <?php echo (date('m') == '12') ? 'selected' : ''; ?>>December</option>
            </select>
            <input type="number" class="yAfter" id="yAfter" name="yAfter" min="1000" max="3000" placeholder="Year" value="<?php echo date('Y'); ?>">
            <input type="number" class="cAfter" id="cAfter" name="cAfter" placeholder="Count Number">
        </div>
        <div id="afterResult"></div>
        <input type="button" id="submitAfter" class="btnAfter" onclick="calAfter()" value="Check">
    </div>
</body>
</html>