class CustomFooter extends HTMLElement{
    constructor(){
        super();
        this.innerHTML = `
        <div class="home__footer">
            <div class="footer_wrapper">
                <div class="wrapper-content">
                    <h6>Shop and Learn</h6>
                    <p>Store</p>
                    <p>Mac</p>
                    <p>iPad</p>
                    <p>iPhone</p>
                    <p>Watch</p>
                    <p>Vision</p>
                    <p>AirPods</p>
                    <p>TV & Home</p>
                    <p>AirTag</p>
                    <p>Accessories</p>
                    <p>Gift Cards</p>
                    <h6>Apple Wallet</h6>
                    <p>Wallet</p>
                    <p>Apple Card</p>
                    <p>Apple Pay</p>
                    <p>Apple Cash</p>
                </div>
                <div class="wrapper-content">
                    <h6>Account</h6>
                    <p>Manage Your Apple ID</p>
                    <p>Apple Store Account</p>
                    <p>iCloud.com</p>
                    <h6>Entertainment</h6>
                    <p>Apple One</p>
                    <p>Apple TV+</p>
                    <p>Apple Music</p>
                    <p>Apple Arcade</p>
                    <p>Apple Fitness+</p>
                    <p>Apple News+</p>
                    <p>Apple Podcasts</p>
                    <p>Apple Books</p>
                    <p>Apple Store</p>
                </div>
                <div class="wrapper-content">
                    <h6>Apple Store</h6>
                    <p>Find a Store</p>
                    <p>Genius Bar</p>
                    <p>Today at Apple</p>
                    <p>Group Reservations</p>
                    <p>Apple Camp</p>
                    <p>Apple Store App</p>
                    <p>Certified Refurbished</p>
                    <p>Apple Trade In</p>
                    <p>Financing</p>
                    <p>Carrier Deals at Apple</p>
                    <p>Order Status</p>
                    <p>Shopping Help</p>
                </div>
                <div class="wrapper-content">
                    <h6>For Business</h6>
                    <p>Apple and Business</p>
                    <p>Shop for Business</p>
                    <h6>For Education</h6>
                    <p>Apple and Education</p>
                    <p>Shop for K-12</p>
                    <p>Shop for College</p>
                    <h6>For Healthcaae</h6>
                    <p>Apple in Healthcare</p>
                    <p>Health on Apple Watch</p>
                    <p>Health Records on iPhone</p>
                    <h6>For Government</h6>
                    <p>Shop for Government</p>
                    <p>Shop for Veterans and Military</p>
                </div>
                <div class="wrapper-content">
                    <h6>Apple Values</h6>
                    <p>Accessibility</p>
                    <p>Education</p>
                    <p>Environment</p>
                    <p>Inclusion and Diversity</p>
                    <p>Privacy</p>
                    <p>Racial Equity and Justice</p>
                    <p>Supply Chain</p>
                    <h6>About Apple</h6>
                    <p>Newsroom</p>
                    <p>Apple Leadership</p>
                    <p>Career Oppertunities</p>
                    <p>Investors</p>
                    <p>Ethics & Compliance</p>
                    <p>Events</p>
                    <p>Contact Apple</p>
                </div>
            </div>
        </div>
        `
    }
}

window.customElements.define('footer-section', CustomFooter);