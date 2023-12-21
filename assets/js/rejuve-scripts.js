window.addEventListener("scroll", function () {
    if (window.pageYOffset > 0) {
        document.querySelector(".rejuve-header").classList.add("sticky");
    } else {
        document.querySelector(".rejuve-header").classList.remove("sticky");
    }
});

function Toggler() {
    const headerToggle = document.querySelector('.bars'); 
    const headerMainMenu = document.querySelector('.main-header-menu'); 
    headerToggle.addEventListener('click', function () {
        this.classList.toggle('bar-active'); 
        headerMainMenu.classList.toggle('show-menu')
    });
}

function headerGutter() {
    // Header gutter for adjusting header height
    const header = document.querySelector('.rejuve-header')
    const header_gutter = document.querySelector('.header_gutter')
    if (header && header_gutter) {
        header_gutter.style.height = header.clientHeight + 'px'
    }
}

function rejuveOnLoad(){
    Toggler()
    headerGutter()
}

window.addEventListener('load', rejuveOnLoad);