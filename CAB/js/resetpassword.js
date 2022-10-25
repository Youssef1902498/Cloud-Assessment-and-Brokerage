function validatePassword(){



let pwField = document.getElementById('new-pw');
let errorText;

if(pwField.value.length < 8){
    errorText = 'Password needs to be at least 8 characters long';
    pwField.style.borderBlockColor= 'red';
}
    else{
        errorText = "";
        pwField.style.borderBlockColor= 'green';
       }

       document.getElementById("new-pw-error").innerHTML = errorText;

}

function validateConfirmPassword(){



    let pwField = document.getElementById('new-pw');
    let confPwField = document.getElementById('new-conf-pw');
    let errorText;
    
    if(pwField.value != confPwField.value){
        errorText = 'Passwords dont match';
        confPwField.style.borderBlockColor= 'red';
    }
        else{
            errorText = "";
            confPwField.style.borderBlockColor= 'green';
           }
    
           document.getElementById("conf-pw-error").innerHTML = errorText;
    
    }

    function enableSubmit(){
        let pwField = document.getElementById('new-pw');
        let confPwField = document.getElementById('new-conf-pw');
        let isValidated = false;

        if(pwField.value == confPwField.value && pwField.value.length > 7 ){
            isValidated = true;
        }

        

        if(isValidated){
            document.querySelector('#resetsubmit').disabled = false;
            document.getElementById("resetsubmit").style.backgroundColor = "blue";
        }
        else
        {
            document.querySelector('#resetsubmit').disabled = true;
            document.getElementById("resetsubmit").style.backgroundColor = "gray";
        }

    }