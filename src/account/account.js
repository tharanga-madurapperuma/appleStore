const validation = () => {
    if(checkFirstName() && checkLastName() && checkEmail() && checkPassword() && checkPhoneNumber()){
        return true;
    }
    else{
        false;
    }
}

function checkFirstName(){
    const fName = document.getElementById("firstName").value;

    if(!/^[a-zA-Z]+$/.test(fName)){
        document.getElementById("firstNameError").innerHTML = "Only Alphebets are allowed";
        return false;
    }
    else{
        return true;
    }
    
};

function checkLastName(){

    return true;
}

function checkEmail(){

    return true;
}

function checkPassword(){

    return true;
}

function checkPhoneNumber(){

    return true;
}
