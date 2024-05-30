class CustomCard extends HTMLElement{
    constructor(){
        super();
        
        const btn = this.getAttribute("btn-2-text");
        if(btn == null){
            this.classList.add("btn-visibility");
        }

        this.innerHTML = `
            <div class = "wrapper_card">
                <div class = "card--bgImage">
                    <img src = ${this.getAttribute("card-bg-image")}>
                </div>
                <div class = "card--bgImage-text">
                    <h3>${this.getAttribute("title-text")}</h3>
                    <h4>${this.getAttribute("sub-text")}</h4>
                    <div class = "card--button">
                        <button class = "card--button-bgFill">${this.getAttribute("btn-1-text")}</button>
                        <button class = "card--button-outline">${this.getAttribute("btn-2-text")}</button>
                    </div>
                </div>
            </div>
        `;
    }
}

window.customElements.define('custom-card', CustomCard);