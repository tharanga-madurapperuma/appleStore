class CustomButton extends HTMLElement{
    constructor(){
        super();
        this.innerHTML = `
            <button class = "customButton">
            ${this.getAttribute("text")}
            </button>
        `
    }
}

customElements.define('custom-button', CustomButton);