const validation = () => {
    if(checkFirstName() && checkLastName() && checkEmail() && checkPassword() && checkPhoneNumber()){
        return true;
    }
    else{
        console.log("returned False");
        return false;
    }
}

function checkFirstName(){
    const fName = document.getElementById("firstName").value;

    if(!(/^[A-Za-z]+$/.test(fName))){
        document.getElementById("firstNameError").innerHTML = "Only Alphebets are allowed";
        return false;
    }
    else{
        document.getElementById("firstNameError").innerHTML = "";
        return true;
    }
    
};

function checkLastName(){
    const lName = document.getElementById("lastName").value;

    if(!(/^[A-Za-z]+$/.test(lName))){
        document.getElementById("lastNameError").innerHTML = "Only Alphebets are allowed";
        return false;
    }
    else{
        document.getElementById("lastNameError").innerHTML = "";
        return true;
    }
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
