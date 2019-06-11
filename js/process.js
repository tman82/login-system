document.getElementById('submit').onclick = function() {

    var validating = checkFields();

    if(validating === false) {

        return false;

    } else {

        return true;

    }

        var submitButton = document.getElementById('submit');
        submitButton.addEventListener('click', checkFields, false);

}

function checkFields() {

    var email = document.getElementById('email');
    var emailValue = email.value;
    var password = document.getElementById('password');
    var passwordValue = password.value;

    if(emailValue.trim() !== "user@gmail.com" || passwordValue.trim() !== "secret") {

        var message = document.getElementById('message');
        message.style.color = 'red';
        message.textContent = "Please enter correct email and password.";

        return false;

    } else if(emailValue.trim() == "" && passwordValue.trim() == "") {

        message.style.color = 'red';
        message.textContent = "Please enter email and password.";
        
        return false;

    } else {

        return true;

    }

}





