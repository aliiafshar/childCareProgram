// Smooth scroll helpers for anchor links
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      var targetId = this.getAttribute('href');
      if (targetId === '#' || targetId === '') return;
      var target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        var navHeight = 0;
        var nav = document.querySelector('nav');
        if (nav) navHeight = nav.offsetHeight || 0;
        var top = target.getBoundingClientRect().top + window.pageYOffset - navHeight - 8;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });
});

function scrolltoId1() {
  var access = document.getElementById("activity");
  if (access) {
    var nav = document.querySelector('nav');
    var navHeight = nav ? nav.offsetHeight : 0;
    var top = access.getBoundingClientRect().top + window.pageYOffset - navHeight - 8;
    window.scrollTo({ top: top, behavior: "smooth" });
  }
}

function scrolltoId2() {
  var access = document.getElementById("DAILY_SCHEDULE");
  if (access) {
    var nav = document.querySelector('nav');
    var navHeight = nav ? nav.offsetHeight : 0;
    var top = access.getBoundingClientRect().top + window.pageYOffset - navHeight - 8;
    window.scrollTo({ top: top, behavior: "smooth" });
  }
}

function scrolltoId3() {
  var access = document.getElementById("Gallery");
  if (access) {
    var nav = document.querySelector('nav');
    var navHeight = nav ? nav.offsetHeight : 0;
    var top = access.getBoundingClientRect().top + window.pageYOffset - navHeight - 8;
    window.scrollTo({ top: top, behavior: "smooth" });
  }
}
