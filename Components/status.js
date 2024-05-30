class ScrollStatus extends HTMLElement{
    constructor(){
        super();
        this.innerHTML = `
            <div class = "status">
                <div class="status-img">
                    <img src = ${this.getAttribute("img-src")}>
                    <div class = "status-text">
                        <h6>${this.getAttribute("sub-title")}</h6>
                        <h2>${this.getAttribute("main-title")}</h2>
                    </div>
                </div>
            </div>
        `
    }
}

customElements.define('scroll-status', ScrollStatus);