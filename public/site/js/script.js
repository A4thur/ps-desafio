function openPage(link) {
    window.open(link, "_blank").focus();
}
class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
        this.navLinks.forEach((link, index) => {
            link.style.animation
                ? (link.style.animation = "")
                : (link.style.animation = `navLinkFade 0.5s ease forwards ${
                      index / 7 + 0.3
                  }s`);
        });
    }
    handleClick() {
        var section = document.querySelector(".section-container");
        var painel = document.querySelector(".painel");
        if (painel.style.zIndex == "-1") {
            painel.style.zIndex = "1";
            section.style.zIndex = "1";
        } else {
            painel.style.zIndex = "-1";
            section.style.zIndex = "-1";
        }
        this.navList.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
        this.animateLinks();
    }
    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }
    init() {
        if (this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }
}
const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li"
);
mobileNavbar.init();

const $html = document.querySelector("html");
const $checkbox = document.querySelector("#switch");

$checkbox.addEventListener("change", function () {
    $html.classList.toggle("dark-mode");
});
