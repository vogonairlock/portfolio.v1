
//Displays the mobile navigation menu when the hamburger menu is clicked
function trigger() {
  const nav = document.getElementById('primary-nav');
  const icon = document.getElementById('icon');
  const logo = document.getElementById('logo');

  if (nav.className === 'nav-container') {
    nav.className += ' responsive';
    icon.innerHTML = 'close';
    logo.style.display = 'none';
  } else {
    nav.className = 'nav-container';
    icon.innerHTML = 'menu';
    logo.style.display = 'flex';
  }
}

//creates smooth-scrolling effect 
const links = document.querySelector('body');

for (const link of links) {
  link.addEventListener('click', clickHandler);
}

function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute('href');

  document.querySelector(href).scrollIntoView({
    behavior: 'smooth'
  });
}
