const navbarList = document.querySelector('.mrp-navbar__list');
const navbarBars = document.querySelector('.mrp-navbar__bars');
navbarBars.onclick = () => {
    navbarList.classList.toggle('active');
}