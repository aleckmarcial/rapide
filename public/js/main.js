// Open menu when hamburger clicked
const hamburger = document.getElementById(`hamburger-btn`);
const navlinks = document.querySelector(`.navlinks`);
const mainContent = document.querySelector('main');

hamburger.addEventListener(`click`, () => {
    navlinks.classList.toggle(`active`);
    hamburger.classList.toggle(`open`);
    mainContent.classList.toggle('dimmed');
});

// Close menu when clicked outside
document.addEventListener('click', (event) => {
    const clickedInsideMenu = navlinks.contains(event.target);
    const clickedHamburger =  hamburger.contains(event.target);

    if(!clickedInsideMenu && !clickedHamburger && navlinks.classList.contains(`active`)){
        navlinks.classList.remove(`active`);
        hamburger.classList.remove(`open`);
        mainContent.classList.remove('dimmed');
    }
});

