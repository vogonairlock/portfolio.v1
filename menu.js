// Displays mobile navigation menu when the hamburger menu is clicked
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
  
  