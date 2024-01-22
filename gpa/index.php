<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA</title>

    <link rel="icon" type="image/png" href="/thaiware_internship/thaiware-icon.png">
    <link rel="stylesheet" href="/thaiware_internship/gpa/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/thaiware_internship/gpa/js/process.js"></script>
</head>
<body>
    <div class="topic">Calculate GPA</div>
    <div class="cal">
        <div class="bt">
            <input type="button" id="addInput" class="add" value="+Add">
            <input type="button" id="deleteInput" class="delete" value="Delete">
        </div>
        <div class="input">
            <input type="text" id="subject" class="subject" placeholder="Subject">
            <select class="grade" name="grade" required="">
                <option value="">Select Grade</option>
                <option value="0">0 (F)</option>
                <option value="1">1 (D)</option>
                <option value="1.5">1.5 (D+)</option>
                <option value="2">2 (C)</option>
                <option value="2.5">2.5 (C+)</option>
                <option value="3">3 (B)</option>
                <option value="3.5">3.5 (B+)</option>
                <option value="4">4 (A)</option>
            </select>
            <input type="text" id="credits" class="credits" name="credits" placeholder="Credits">
        </div>
        <div id="subjectContainer"></div>
        <input type="button" id="submitBtn" class="cal" onclick="calGPA()" value="Calculate GPA">
    </div>
    <div id="gpa-result"></div>
</body>
</html>