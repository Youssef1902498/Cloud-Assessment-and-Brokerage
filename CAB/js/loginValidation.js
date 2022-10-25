function emailValidation() {
    var emailField = document.getElementById("e-mail").value;
    var errorText;
    var emailRegexFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (emailField.match(emailRegexFormat)) {
        errorText = "";
        document.getElementById('e-mail').style.borderBlockColor= 'gray';
        
    } else{
        errorText =
            "Invalid email format. Example for email format: youssef@mail.com";
            document.getElementById('e-mail').style.borderBlockColor= 'red';
    }
    document.getElementById("email-err").innerHTML = errorText;
}



function passwordValidation() {
    var passwordField = document.getElementById("p-word").value;
    var errorText;

    if (passwordField.length == 0) {
        errorText = "Password field can't be empty";
        document.getElementById('p-word').style.borderBlockColor= 'red';
    } else{
     errorText = "";
     document.getElementById('p-word').style.borderBlockColor= 'gray';
    }
    document.getElementById("pw-err").innerHTML = errorText;
}



function enableSubmit(){
    var emailField = document.getElementById("e-mail").value;
    var passwordField = document.getElementById("p-word").value;
    var emailRegexFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let isValidated = false;

    if(emailField.match(emailRegexFormat) && passwordField.length != 0 ){
        isValidated = true;
    }

    

    if(isValidated){
        document.querySelector('#submit-btn').disabled = false;
        document.getElementById("submit-btn").style.backgroundColor = "blue";
    }
    else
    {
        document.querySelector('#submit-btn').disabled = true;
        document.getElementById("submit-btn").style.backgroundColor = "gray";
    }

}