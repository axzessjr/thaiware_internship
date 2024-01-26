var total_subject = 1;
var action = 0;
function calGPA() {
    var formData = {
        total_subject: total_subject
    };
    for (var i = 0; i < total_subject; i++) {
        var unit = i === 0 ? "" : i;
        var Inputsubject = $(`input[name='subject${unit}']`).val();
        var Inputgrade = $(`select[name='grade${unit}']`).val();
        var Inputcredits = $(`input[name='credits${unit}']`).val();
        formData[`subject${unit}`] = Inputsubject;
        formData[`grade${unit}`] = Inputgrade;
        formData[`credits${unit}`] = Inputcredits;
    }
    if(Inputgrade === "" || Inputcredits === "") {
        $('#gpa-result').html("Please fill out the information completely.");
        $('#gpa-result').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#gpa-result').show();
    } else {
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
    // $("#deleteInput").click(function() {
    //     $(".input:last").remove();
    //     
    // });
});
function addInputDiv() {
    total_subject+=1
    action+=1
    var newDiv = $("<div>").addClass("input");
    // var index = $(".input").length;

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
    var gradeOptions = ["Select Grade", "0 (F)", "1 (D)", "1.5 (D+)", "2 (C)", "2.5 (C+)", "3 (B)", "3.5 (B+)", "4 (A)"];
    var sum = 0;
    for (var i = 0; i < gradeOptions.length; i++) {
        if (i === 0) {
            sum = "";
        } else
        if (i === 1) {
            sum = 0;
        } else
        if (i === 2) {
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
        type: "text",
        name: "credits" + action,
        placeholder: "Credits"
    });
    newDiv.append(creditsInput);
    $("#subjectContainer").append(newDiv);
}
function hideandseek() {
    $('#gpa-result').hide()
    $('.re-icon').hide()
    $('.cal').show()
}