const HamburgerMenu = () => {
    const mainNavigation = document.querySelector('.main-navigation');
    if(!mainNavigation) {
        return;
    }

    const hamburgerBtn = document.querySelector('.hamburger-menu-btn');
    const mobileNavigation = document.querySelector('.mobile-navigation');
    const mobileNavigationCloseBtn = document.querySelector('.mobile-navigation-close');
    const isMenuOpen = false;

    hamburgerBtn.addEventListener('click', () => mobileNavigation.classList.toggle('hidden'));
    mobileNavigationCloseBtn.addEventListener('click', () => mobileNavigation.classList.add('hidden'));
}

export default HamburgerMenu;
