class CustomBackground extends HTMLElement{ 
    constructor(){
        super();
        this.innerHTML = `
        <div class = "customBackground_wrapper">
            <div class = "wrapper_bgImage">
                <img src = ${this.getAttribute("bg-image")}>
            </div>
            <div class = "image-texts">
                <h2>${this.getAttribute("title-text")}</h2>
                <h5>${this.getAttribute("sub-text")}</h5>
                <button>Buy Now</button>
            </div>
        </div>
        `
    }
}

window.customElements.define('custom-background', CustomBackground);