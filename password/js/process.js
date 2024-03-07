$(document).ready(function() {
    $("#submit").on("click", function() {
        generatePassword();
    });
    $("#copy").on("click", function() {
        copyPassword();
    });
    $("#password-length").on("input", function() {
        updatePasswordLength($(this).val());
    });
});
function generatePassword() {
    var length = $("#password-length").val();
    var charset = "";
    if ($("#uppercase").is(":checked"))
        charset += "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    if ($("#lowercase").is(":checked"))
        charset += "abcdefghijklmnopqrstuvwxyz";
    if ($("#numbers").is(":checked"))
        charset += "0123456789";
    if ($("#special").is(":checked"))
        charset += "!@#$%^&*()-_+=~[]{}|:;<>,.?/";
    var password = "";
    for (var i = 0; i < length; i++) {
        password += charset.charAt(Math.floor(Math.random() * charset.length));
    }
    $("#password-display").text(password);
}
function copyPassword() {
    var passwordText = document.getElementById("password-display");
    var range = document.createRange();
    range.selectNode(passwordText);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    document.execCommand("copy");
    window.getSelection().removeAllRanges();
}
function updatePasswordLength(length) {
    $("#password-length-display").text(length);
}
function copyPassword() {
    var password = $("#password-display").text();
    var passwordText = document.getElementById("password-display");
    var range = document.createRange();
    range.selectNode(passwordText);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    document.execCommand("copy");
    window.getSelection().removeAllRanges();
    $("#copied-password").text(password);
}
function openPopup() {
    var popup = document.getElementById('popup');
    var topic = document.getElementById('topic');
    popup.style.display = 'block';
    topic.style.display = 'none';
}
function closePopup() {
    var popup = document.getElementById('popup');
    var topic = document.getElementById('topic');
    popup.style.display = 'none';
    topic.style.display = 'block';
}