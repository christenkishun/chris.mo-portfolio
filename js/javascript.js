/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
const hamburger = document.getElementById('hamburger');
const navUL = document.getElementById('nav-ul');

hamburger.addEventListener('click', () => {
  navUL.classList.toggle('show');
});