
function validate(){
    if(document.login.username.value == ""){
        alert("Please enter your username");
        return false;
    }
    if(document.login.password.value == ""){
        alert("Please enter your password");
        return false;
    }
}

function validateCreate(){
    if(document.create.username.value == ""){
        alert("Please enter your username");
        return false;
    }
    if(document.create.password.value == ""){
        alert("Please enter your password");
        return false;
    }
    if(document.create.email.value == ""){
        alert("Please enter an email");
        return false;
    }

}