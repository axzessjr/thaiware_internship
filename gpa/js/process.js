var total_subject = 1;
var action = 0;
function calGPA() {
    var formData = {
        total_subject: total_subject
    };
    let success = true;
    for(let i=1; i<=total_subject; i++) {
        var Inputsubject = $(`.cal .input:nth-child(${i}) .subject`).val()
        var Inputgrade = $(`.cal .input:nth-child(${i}) .grade`).val()
        var Inputcredits = $(`.cal .input:nth-child(${i}) .credits`).val()
        formData[`subject${i}`] = Inputsubject;
        formData[`grade${i}`] = Inputgrade;
        formData[`credits${i}`] = Inputcredits;
        if(Inputgrade === "" || Inputcredits === "") {
            $('.grade').addClass("error");
            $('.credits').addClass("error");
            $('#gpa-result').html("Please fill out the information completely.");
            $('#gpa-result').css({"color":"rgba(200, 0, 0, 0.8)"});
            $('#gpa-result').show();
            success = false;
            break;
        } else {
            $('.grade').removeClass("error");
            $('.credits').removeClass("error");
        }
    }
    if(success) {
        $.ajax({
            url: "process.php",
            method: "POST",
            data: formData,
            success: function(data) {
                var resultGPA = parseFloat(data)
                $('#gpa-result').html(resultGPA.toFixed(2));
                $('#gpa-result').css({"color":"rgba(0, 0, 0)"});
            },
            error: function(xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    } else {
        return;
    }
}
$(document).ready(function() {
    $("#addInput").click(function() {
        addInputDiv();
    });
    $("#deleteInput").click(function() {
        $(".input input[type=checkbox]:checked").each(function() {
            $(this).parent().remove();
            total_subject-=1
        });
    });
    $(document).on("input", ".cal .input .grade", function() {
        var gradeInput = $(this).closest(".input").find(".grade");
        if ($(gradeInput).val() === "") {
            $(this).css("background-color", "rgba(255, 0, 0, 0.3)");
        } else {
            $(this).css("background-color", "lch(0 0 0 / 0.1)");
        }
    });
    $(document).on("input", ".cal .input .credits", function() {
        var creditsInput = $(this).closest(".input").find(".credits");
        if ($(creditsInput).val() === "") {
            $(this).css("background-color", "rgba(255, 0, 0, 0.3)");
        } else {
            $(this).css("background-color", "lch(0 0 0 / 0.1)");
        }
    });
});
function addInputDiv() {
    total_subject+=1
    action+=1
    var newDiv = $("<div>").addClass("input");
    var checkbox = $("<input>").attr({
        type: "checkbox",
        id: "checkbox" + action,
        class: "delete-checkbox"
    });
    newDiv.append(checkbox);
    var checkboxsty = $("<label>").attr({
        class: "fc",
        for: "checkbox" + action
    });
    newDiv.append(checkboxsty);
    var subjectInput = $("<input>").addClass("subject").attr({
        type: "text",
        name: "subject" + action,
        placeholder: "Subject"
    });
    newDiv.append(subjectInput);
    var gradeSelect = $("<select>").addClass("grade").attr({
        name: "grade" + action,
        required: true
    });
    var gradeOptions = ["Grade","Drop (W)", "0 (F)", "1 (D)", "1.5 (D+)", "2 (C)", "2.5 (C+)", "3 (B)", "3.5 (B+)", "4 (A)"];
    var sum = 0;
    for (var i = 0; i < gradeOptions.length; i++) {
        if (i === 0) {
            sum = "";
        } else
        if (i === 1) {
            sum = -1;
        } else
        if (i === 2) {
            sum = 0;
        } else
        if (i === 3) {
            sum = sum + 1;
        } else {
            sum += 0.5;
        }
        var option = $("<option>").attr({
            value: sum
        }).text(gradeOptions[i]);
        gradeSelect.append(option);
    }
    newDiv.append(gradeSelect);
    var creditsInput = $("<input>").addClass("credits").attr({
        type: "number",
        name: "credits" + action,
        placeholder: "Credits",
        onkeyup: "if(this.value<0){this.value=this.value*-1}"
    });
    newDiv.append(creditsInput);
    $("#subjectContainer").append(newDiv);
}
function hideandseek() {
    $('#gpa-result').hide()
    $('.re-icon').hide()
    $('.cal').show()
}
$(document).ready(function () {
    $('#subjectContainer').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            calGPA();
        }
    });
});