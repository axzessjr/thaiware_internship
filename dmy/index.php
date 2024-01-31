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
            <input type="number" class="dAge" id="dAge" name="dAge" min="1" max="31" placeholder="Day">
            <select class="mAge" id="mAge" name="mAge">
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
            <input type="number" class="yAge" id="yAge" name="yAge" min="1000" max="3000" placeholder="Year">
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
            <input type="number" class="dDiff2" id="dDiff2" name="dDiff2" min="1" max="31" placeholder="Day">
            <select class="mDiff2" id="mDiff2" name="mDiff2">
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
            <input type="number" class="yDiff2" id="yDiff2" name="yDiff2" min="1000" max="3000" placeholder="Year">
        </div>
        <div id="diffResult"></div>
        <input type="button" id="submitDiff" class="btnDiff" onclick="calDiff()" value="Check">
    </div>
    <div class="form-after" style="display: none;">
        <div class="input">
            <input type="number" class="dAfter" id="dAfter" name="dAfter" min="1" max="31" placeholder="Day">
            <select class="mAfter" id="mAfter" name="mAfter">
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
            <input type="number" class="yAfter" id="yAfter" name="yAfter" min="1000" max="3000" placeholder="Year">
            <input type="number" class="cAfter" id="cAfter" name="cAfter" placeholder="Count Number">
        </div>
        <div id="afterResult"></div>
        <input type="button" id="submitAfter" class="btnAfter" onclick="calAfter()" value="Check">
    </div>
</body>
</html>