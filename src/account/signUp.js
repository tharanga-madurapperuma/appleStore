const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
                
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    this.textContent = type === 'password' ? '🫣 Show Password' : '😌 Hide Password';
});

const signUpValidation = () => {
    const email = document.getElementById("email");
    const password = document.getElementById("password");

    if(checkFirstName() && checkLastName() && checkEmail(email) && checkPassword(password) && checkPhoneNumber()){
        return true;
    }
    else{
        return false;
    }
}


function checkFirstName(){
    const fName = document.getElementById("firstName");

    if(!(/^[A-Za-z]+$/.test(fName.value))){
        document.getElementById("firstNameError").innerHTML = "Only Alphebets are allowed";
        fName.focus();
        fName.classList.add("inputRedFocus");
        return false;
    }
    else{
        document.getElementById("firstNameError").innerHTML = "";
        fName.classList.remove("inputRedFocus");
        return true;
    }
};

function checkLastName(){
    const lName = document.getElementById("lastName");

    if(!(/^[A-Za-z]+$/.test(lName.value))){
        document.getElementById("lastNameError").innerHTML = "Only Alphebets are allowed";
        lName.focus();
        lName.classList.add("inputRedFocus");
        return false;
    }
    else{
        document.getElementById("lastNameError").innerHTML = "";
        lName.classList.remove("inputRedFocus");
        return true;
    }
}

function checkEmail(email){
    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value))){
        document.getElementById("emailError").innerHTML = "Please provide a valid email";
        email.focus();
        email.classList.add("inputRedFocus");
        return false;
    }
    else{
        document.getElementById("emailError").innerHTML = "";
        email.classList.remove("inputRedFocus");
        return true;
    }
}

function checkPassword(password){
    if(!(/^(?=.*[A-Z])(?=.*\d)(?=.*[a-z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/.test(password.value))){
        document.getElementById("passwordError").innerHTML = "Password must be 8-15 characters long, contain at least one uppercase letter, one lowercase letter, one numeric digit, one special character, and no spaces.";
        password.focus();
        password.classList.add("inputRedFocus");
        return false;
    }
    else{
        document.getElementById("passwordError").innerHTML = "";
        password.classList.remove("inputRedFocus");
        return true;
    }
}

function checkPhoneNumber(){
    const phoneNumber = document.getElementById("phone");

    if(!(/^\d{10}$/.test(phoneNumber.value))){
        document.getElementById("numberError").innerHTML = "Please enter a valid 10-digit phone number.";
        phoneNumber.focus();
        phoneNumber.classList.add("inputRedFocus");
        return false;
    }
    else{
        document.getElementById("numberError").innerHTML = "";
        phoneNumber.classList.remove("inputRedFocus");
        return true;
    }
}


