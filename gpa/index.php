<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA</title>

    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/gpa/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/gpa/js/process.js"></script>
</head>
<body>
    <div class="topic">คำนวณ GPA</div>
    <div class="cal">
        <div id="subjectContainer">
            <div class="input">
                <input type="checkbox" id="checkbox" class="delete-checkbox">
                <label class="fc" for="checkbox"></label>
                <input type="text" id="subject" class="subject" name="subject" placeholder="วิชา">
                <select class="grade" name="grade" id="grade">
                    <option value="">เกรด</option>
                    <option value="-1">ดรอป (W)</option>
                    <option value="0">0 (F)</option>
                    <option value="1">1 (D)</option>
                    <option value="1.5">1.5 (D+)</option>
                    <option value="2">2 (C)</option>
                    <option value="2.5">2.5 (C+)</option>
                    <option value="3">3 (B)</option>
                    <option value="3.5">3.5 (B+)</option>
                    <option value="4">4 (A)</option>
                </select>
                <input type="number" min="1" id="credits" class="credits" name="credits" placeholder="หน่วยกิต" onkeyup="if(this.value<0){this.value=this.value*-1}">
            </div>
        </div>
        <div class="bt">
            <input type="button" id="addInput" class="add" value="+เพิ่ม">
            <input type="button" id="deleteInput" class="delete" value="ลบ">
        </div>
        <div id="gpa-result"></div>
        <input type="button" id="submitBtn" class="cal" onclick="calGPA()" value="คำนวณ GPA">
    </div>
</body>
</html>