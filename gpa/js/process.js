function testArrayLoop() {
    var total_subject = 3;
    for (i=0; i<total_subject; i++) { // console.log(i); //  0 1 2 
        let unit;
        if (i===0) {
            unit = "";
        } else {
            unit = i;
        }
        let Inputgrade = $(`select[name='grade${unit}"']`).val();
        let Inputcredits = $(`input[name="credits${unit}`).val();

        let result = Inputgrade * Inputcredits;
        console.log(result);
    }
}


function calGPA() {
    var Inputgrade = $('select[name="grade"]').val();
    var Inputcredits = $('input[name="credits"]').val();

    var Inputgrade1 = $('select[name="grade1"]').val();
    var Inputcredits1 = $('input[name="credits1"]').val();

    var Inputgrade2 = $('select[name="grade2"]').val();
    var Inputcredits2 = $('input[name="credits2"]').val();

    var resultArray = [Inputgrade * Inputcredits, Inputgrade1 * Inputcredits1, Inputgrade2 * Inputcredits2];
    var creditsTotal = parseFloat(Inputcredits) + parseFloat(Inputcredits1) + parseFloat(Inputcredits2);
    var result = resultArray.reduce(function (acc, value) {
        return acc + value;
    });
    var resultGPA = result / creditsTotal;

    console.log(result);
    console.log(resultGPA.toFixed(2));
    
//     if(Inputgrade === "" || Inputcredits === "") {
//         $('#gpa-result').html("Please fill out the information completely.");
//         $('#gpa-result').css({"color":"rgba(200, 0, 0, 0.8)"});
//         $('#gpa-result').show()
//     } else {
//         $.ajax({
//             url: "process.php",
//             method: "POST",
//             data: {
//                 grade: Inputgrade,
//                 credits: Inputcredits
//             },
//             success: function(data) {
//                 var gpa = parseFloat(data) 
//                 var ReAr = [gpa];
//                 console.log(ReAr);
//                 // $('#gpa-result').html(gpa.toFixed(2));
//                 // $('#gpa-result').css({"color":"rgba(0, 0, 0)"});
//             },
//             error: function(xhr, status, error) {
//                 console.error("Error: " + status, error);
//             }
//         });
//     }
}
$(document).ready(function() {
    $("#addInput").click(function() {
        addInputDiv();
    });
    // $("#deleteInput").click(function() {
    //     $(".input input[type=checkbox]:checked").each(function() {
    //         $(this).closest(".input").remove();
    //     });
    // });
    $("#deleteInput").click(function() {
        $(".input:last").remove();
    });
});
function addInputDiv() {
    var newDiv = $("<div>").addClass("input");
    var index = $(".input").length;
    // var checkbox = $("<input>").attr({
    //     type: "checkbox",
    //     id: "checkbox" + index,
    //     class: "delete-checkbox"
    // });
    // newDiv.append(checkbox);

    // var checkboxsty = $("<label>").attr({
    //     class: "fc",
    //     for: "checkbox" + index
    // });
    // newDiv.append(checkboxsty);

    var subjectInput = $("<input>").addClass("subject").attr({
        type: "text",
        placeholder: "Subject"
    });
    newDiv.append(subjectInput);

    var gradeSelect = $("<select>").addClass("grade").attr({
        name: "grade" + index,
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
        name: "credits" + index,
        placeholder: "Credits"
    });
    newDiv.append(creditsInput);
    $("#subjectContainer").append(newDiv);
}
