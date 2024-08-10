const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
                
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    this.textContent = type === 'password' ? '🫣 Show Password' : '😌 Hide Password';
});

const loginValidation = () => {
    const email = document.getElementById("loginEmail");
    const password = document.getElementById("loginPassword");

    if(checkEmail(email) && checkPassword(password)){
        return true;
    }
    else{
        return false;
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
