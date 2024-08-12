if(localStorage.getItem('profile_image') == null){
    localStorage.setItem('profile_image', "../../assets/users/guestUser.png");
}

var profileImage = localStorage.getItem('profile_image');

class CustomNav extends HTMLElement{
    connectedCallback(){
        this.innerHTML = `
        <div class="navBarWrapper">
            <i class="fa-brands fa-apple" onclick = "window.location.href = '../home/index.html'"></i>
            <i class="fas fa-bars" id="menuIcon" onclick = "menuClick()"></i>
            <div class="navBarWrapper-div">
                <h3><a href="../../src/home/index.html">Store</a></h3>
                <h3><a href="../../src/mac/mac.html">Mac</a></h3>
                <h3><a href="../../src/iPad/iPad.html">iPad</a></h3>
                <h3><a href="../../src/iPhone/iPhone.html">iPhone</a></h3>
                <h3><a href="../../src/watch/watch.html">Watch</a></h3>
                <h3><a href="../../src/support/support.html">Support</a></h3>
            </div>
            <div class="navBarWrapper_user">
                <div id="userImage">
                    <img src="${profileImage}" onclick="userAccount()"/>
                </div>
                <p id="userName" onclick="userAccount()">Guest</p>
            </div>
        </div>
        `
    }
}

customElements.define('custom-nav', CustomNav);

function menuClick(){
    const displayProperty = window.getComputedStyle(document.querySelector(".navBarWrapper > div"), null);
    
    if(displayProperty.display == "none"){
        document.querySelector(".firstSection-navBar").style.height = "80vh";
        document.querySelector(".navBarWrapper > div").style.display = "block";
    }
    else if(displayProperty.display == "block" || displayProperty.display == "flex"){
        document.querySelector(".firstSection-navBar").style.height = "8vh";
        document.querySelector(".navBarWrapper > div").style.display = "none";
    }
}

function userAccount() {
    const isLoggedIn = localStorage.getItem('accountLogged');
    console.log('Account Logged:', isLoggedIn); 

    if (isLoggedIn === 'true') {
        window.location.href = "../../src/profile/profile.php";
    } else {
        window.location.href = "../../src/account/signin.html";
    }
}

document.addEventListener('DOMContentLoaded', (event) => {
    if (localStorage.getItem('accountLogged') === null) {
        document.getElementById("userName").innerHTML = "Guest";
        localStorage.setItem('accountLogged', false);
        profileImage = "../../assets/users/guestUser.png";
    }
    else if(localStorage.getItem('accountLogged') == 'true'){
        document.getElementById("userName").innerHTML = localStorage.getItem('first_name');
        profileImage = localStorage.getItem('profile_image');
    }
});


