// localStorage.clear();
if (localStorage.getItem('accountLogged') === null) {
    localStorage.setItem('accountLogged', false);
}

class CustomNav extends HTMLElement{
    connectedCallback(){
        this.innerHTML = `
        <div class="navBarWrapper">
            <i class="fa-brands fa-apple" onclick = "window.location.href = '../home/index.html'"></i>
            <i class="fas fa-bars" id="menuIcon" onclick = "menuClick()"></i>
            <div>
                <h3><a href="../../src/home/index.html">Store</a></h3>
                <h3><a href="../../src/mac/mac.html">Mac</a></h3>
                <h3><a href="../../src/iPad/iPad.html">iPad</a></h3>
                <h3><a href="../../src/iPhone/iPhone.html">iPhone</a></h3>
                <h3><a href="../../src/watch/watch.html">Watch</a></h3>
                <h3><a href="../../src/support/support.html">Support</a></h3>
            </div>
            <i class="fa-solid fa-user" onclick="userAccount()"></i>
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
    if (localStorage.getItem('accountLogged') === 'true') {
        window.location.href = "../../src/profile/profile.php";
    } else {
        window.location.href = "../../src/account/signin.html";
    }
}
