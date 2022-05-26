
import imagemin from 'imagemin';
import imageminJpegtran from 'imagemin-jpegtran';
import imageminPngquant from 'imagemin-pngquant';

const files = await imagemin(['img/*.{jpg,png}'], {
	destination: 'assets/img',
	plugins: [
		imageminJpegtran(),
		imageminPngquant({
			quality: [0.6, 0.8]
		})
	]
});

console.log(files);
//=> [{data: <Buffer 89 50 4e …>, destinationPath: 'build/images/foo.jpg'}, …]




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