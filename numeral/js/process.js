function convert(inputBase) {
    var value = $('#' + inputBase).val();
    var bases = ['binary', 'octal', 'decimal', 'hexadecimal'];
    var validInput = validateInput(value, inputBase);
    if (value.trim() === '') {
        bases.forEach(function (base) {
            if (base != inputBase) {
                $('#' + base).val('');
            }
        });
        return;
    }
    if (!validInput) {
        return;
    }
    var decimal = parseInt(value, getInputBase(inputBase));
    bases.forEach(function (base) {
        if (base != inputBase) {
            $('#' + base).val(decimal.toString(getInputBase(base)));
        }
    });
}
function getInputBase(inputBase) {
    if (inputBase === 'binary') {
        return 2;
    } else if (inputBase === 'octal') {
        return 8;
    } else if (inputBase === 'decimal') {
        return 10;
    } else if (inputBase === 'hexadecimal') {
        return 16;
    }
}
function validateInput(value, inputBase) {
    if (inputBase === 'binary') {
        var validChars = /^[01]*$/;
        return validChars.test(value);
    } else if (inputBase === 'octal') {
        var validChars = /^[0-7]*$/;
        return validChars.test(value);
    } else if (inputBase === 'decimal') {
        var validChars = /^\d*$/;
        return validChars.test(value);
    } else if (inputBase === 'hexadecimal') {
        var validChars = /^[0-9A-Fa-f]*$/;
        return validChars.test(value);
    }
}
function validateBinary(event) {
    var key = event.key;
    if (key !== '0' && key !== '1') {
        event.preventDefault();
    }
}
function validateOctal(event) {
    var key = event.key;
    if (key < '0' || key > '7') {
        event.preventDefault();
    }
}
function validateNumeric(event) {
    var key = event.key;
    if (key < '0' || key > '9') {
        event.preventDefault();
    }
}
function validateHexadecimal(event) {
    var key = event.key.toLowerCase();
    if (key < '0' || key > '9') {
        if (key < 'a' || key > 'f') {
            event.preventDefault();
        }
    }
}