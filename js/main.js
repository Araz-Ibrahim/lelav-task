
// NAVBAR ACTIVE LINK
const activePage = window.location.pathname;
const navLinks= document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
  if(link.href.includes(`${activePage}`)){
    link.classList.add('active');
  }
});

// FOOTER
const year = document.querySelector(".year");

year.textContent = new Date().getFullYear();
console.log(year);

