import './bootstrap';

import '../css/mrp/mrp-style.css'

import '../css/mrp/components/mrp-navbar.css'
import '../css/mrp/components/mrp-program.css'

import '../css/mrp/mrp-utils.css'

const navbarList = document.querySelector('.mrp-navbar__list');
const navbarBars = document.querySelector('.mrp-navbar__bars');
navbarBars.onclick = () => {
    navbarList.classList.toggle('active');
}

// document.addEventListener('click', function(e) {
//     if(!navbarBars.contains(e.target) && !navbarList.contains(e.target))
//     {
//         navbarList.remove('active');
//     }
// });
