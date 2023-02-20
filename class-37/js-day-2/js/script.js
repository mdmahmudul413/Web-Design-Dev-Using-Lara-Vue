/*
    ======================================================================
        When we writing something in the input field then hover, click,
                keyup, blur, etc event fired at the same time.
    ======================================================================
*/

/* jQuery Basic Syntax: $(selector).action();

    $           = jQuery Object Sign
    selector    = To grab html element by id, class, etc
    .           = JS object sign
    action()    = jQuery Method

*/

$('#h1Element').click(function () {
    $(this).css('color', 'red');
});

// Name field validation
function nameFieldValidate()
{
    var nameValue = $('#name').val();
    var regex = /^[a-zA-Z-. ]{2,20}$/;
    if (regex.test(nameValue))
    {
        $('#nameError').text('');
        return true;
    }
    else
    {
        $('#nameError').text('Name field need 3 to 20 characters only with spaces');
        return false;
    }
}

$('#name').keyup(function () {
    nameFieldValidate();
});

// Email Field Validation
function emailFieldValidate()
{
    var emailValue = $('#email').val();
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(emailValue))
    {
        $('#emailError').text('');
        return true;
    }
    else
    {
        $('#emailError').text('Email address is invalid');
        return false;
    }
}
$('#email').keyup(function () {
    emailFieldValidate();
});

// Password Field Validation
function passwordFieldValidate()
{
    var passwordValue = $('#password').val();
    var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[^a-zA-Z0-9])(?!.*\s).{7,15}$/;
    if (regex.test(passwordValue))
    {
        $('#passwordError').text('');
        return true;
    }
    else
    {
        $('#passwordError').text('Password format is invalid');
        return false;
    }
}

$('#password').keyup(function () {
    passwordFieldValidate();
});

// Password Show Hide functionality
$('input[type=checkbox]').click(function () {
    if ($(this).is(":checked"))
    {
        $('#password').attr('type', 'text');
        $('#passwordText').text('Hide Password');
    }
    else
    {
        $('#password').attr('type', 'password');
        $('#passwordText').text('Show Password');
    }
});

// Confirm password validation
function confirmPasswordValidation()
{
    var passwordValue = $('#password').val();
    var confirmPasswordValue = $('#confirmPassword').val();
    if (passwordValue == confirmPasswordValue)
    {
        $('#confirmPasswordError').text('');
        return true;
    }
    else
    {
        $('#confirmPasswordError').text('Password and Confirm Password are not match');
        return false;
    }
}
$('#confirmPassword').keyup(function () {
    confirmPasswordValidation();
});

// Mobile Field Validation
function mobileFieldValidate()
{
    var mobileValue = $('#mobile').val();
    var regex = /^(?:\+88|88)?(01[3-9]\d{8})$/;
    if (regex.test(mobileValue))
    {
        $('#mobileError').text('');
        return true;
    }
    else
    {
        $('#mobileError').text('Mobile number format is invalid');
        return false;
    }
}
$('#mobile').keyup(function () {
    mobileFieldValidate();
});



$('#regform').submit(function () {
    if (nameFieldValidate() && emailFieldValidate() && passwordFieldValidate() && confirmPasswordValidation() && mobileFieldValidate())
    {
        return true;
    }
    else
    {
        return false;
    }

});