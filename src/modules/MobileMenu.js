class MobileMenu {
// 1. describe and create/initiate object
    constructor() {
        this.toggleButton = document.querySelector('.site-header__menu-trigger');
        this.menuOverlay = document.querySelector('.menu-overlay');
        this.events();
        this.isOverlayOpen = false;
        console.log(this.toggleButton.classList);
    }
// 2. events
    events(){
        this.toggleButton.addEventListener('click', () => this.toggleOverlay());
        console.log("events working");
    }

// 3. methods (functions, actions...)
    toggleOverlay(){
        if (this.isOverlayOpen) {
            this.menuOverlay.classList.remove("site-header__menu--active");
            document.querySelector('body').classList.remove("body-no-scroll");
            this.toggleButton.classList.remove('rotated-menu-icon');
            this.isOverlayOpen = false;
            console.log("closing");
        } else {
            this.menuOverlay.classList.add("site-header__menu--active");
            document.querySelector('body').classList.add("body-no-scroll");
            this.toggleButton.classList.add('rotated-menu-icon');
            this.isOverlayOpen = true;
            console.log("opening");
        }
    }
}

export default MobileMenu;