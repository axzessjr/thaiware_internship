<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบเลขฐาน</title>

    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/numeral/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/numeral/js/process.js"></script>
</head>
<body>
    <div class="topic">
        <div class="topic-is">
            <div>แปลงเลขฐาน</div>
        </div>
    </div>
    <div class="form">
        <div class="main">
            <label for="decimal">เลขฐานสิบ :</label>
            <input type="text" id="decimal" name="decimal" oninput="convert('decimal')" onkeypress="return validateNumeric(event)">
            <label for="binary">เลขฐานสอง :</label>
            <input type="text" id="binary" name="binary" oninput="convert('binary')" onkeypress="return validateBinary(event)">
            <label for="octal">เลขฐานแปด :</label>
            <input type="text" id="octal" name="octal" oninput="convert('octal')" onkeypress="return validateOctal(event)">
            <label for="hexadecimal">เลขฐานสิบหก :</label>
            <input type="text" id="hexadecimal" name="hexadecimal" oninput="convert('hexadecimal')" onkeypress="return validateHexadecimal(event)">
        </div>
    </div>
</body>
</html>