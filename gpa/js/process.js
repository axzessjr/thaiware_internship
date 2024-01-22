function calGPA() {
    var Inputgrade = $('select[name="grade"]').val();
    var Inputcredits = $('input[name="credits"]').val();
    if(Inputgrade === "" || Inputcredits === "") {
        $('#gpa-result').html("Please fill out the information completely.");
        $('#gpa-result').css({"color":"rgba(200, 0, 0, 0.8)"});
        $('#gpa-result').show()
    } else {
        $.ajax({
            url: "process.php",
            method: "POST",
            data: {
                grade: Inputgrade,
                credits: Inputcredits
            },
            success: function(data) {
                var gpa = parseFloat(data) 
                $('#gpa-result').html(gpa.toFixed(2));
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
        $(".input:last").remove();
        // if ($(".input-container").length === 0) {
        //     $("#deleteInput").hide();
        // }
    });
});
function addInputDiv() {
    var newDiv = $("<div>").addClass("input");
    var subjectInput = $("<input>").addClass("subject").attr({
        type: "text",
        placeholder: "Subject"
    });
    newDiv.append(subjectInput);
    var gradeSelect = $("<select>").addClass("grade").attr({
        name: "grade",
        required: true
    });
    var gradeOptions = ["Select Grade", "0 (F)", "1 (D)", "1.5 (D+)", "2 (C)", "2.5 (C+)", "3 (B)", "3.5 (B+)", "4 (A)"];
    for (var i = 0; i < gradeOptions.length; i++) {
        var option = $("<option>").attr({
            value: i === 0 ? "" : i - 1
        }).text(gradeOptions[i]);
        gradeSelect.append(option);
    }
    newDiv.append(gradeSelect);
    var creditsInput = $("<input>").addClass("credits").attr({
        type: "text",
        name: "credits",
        placeholder: "Credits"
    });
    newDiv.append(creditsInput);
    $("#subjectContainer").append(newDiv);
}
