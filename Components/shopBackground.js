let link = "";

class ShopBackground extends HTMLElement{
    constructor(){
        super();
        link = this.getAttribute("linkToShop");
        console.log(link)
        this.innerHTML = `
            <div class="wrapper__shopBackground">
                <div class="backgroundText">
                    <h1>Expore <span>${this.getAttribute("innerText")}</span></h1>
                </div>
                <div class="bubble"></div>
                <div class="bubble2"></div>
                <div onclick="linkToPage()" class="light"></div>
            </div>
        `;
    }
}

customElements.define("shop-background", ShopBackground);

function linkToPage(){
    location.href = link;
}

var doc = document.documentElement;
        
doc.addEventListener('mousemove', e => {
    doc.style.setProperty('--x', e.clientX + 'px');
    doc.style.setProperty('--y', e.clientY + 'px');
})