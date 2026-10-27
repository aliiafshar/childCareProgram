
function scrolltoId1() {
  var access = document.getElementById("activity");
  access.scrollIntoView({ behavior: "smooth" }, true);
}

function scrolltoId2() {
  var access = document.getElementById("DAILY_SCHEDULE");
  access.scrollIntoView({ behavior: "smooth" }, true);
}


function scrolltoId3() {
  var access = document.getElementById("Gallery");
  access.scrollIntoView({ behavior: "smooth" }, true);
}

const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const closeMenu = document.getElementById('close-menu');

// باز کردن منو
menuToggle.addEventListener('click', () => {
  mobileMenu.classList.add('open'); 
  mobileMenu.classList.remove('hidden');
});

// بستن منو
closeMenu.addEventListener('click', () => {
  mobileMenu.classList.remove('open');
  mobileMenu.classList.add('hidden');
});
