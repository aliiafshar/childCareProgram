// ---------Responsive-navbar-active-animation-----------
function test() {
  var tabsNewAnim = $("#navbarSupportedContent");
  var selectorNewAnim = $("#navbarSupportedContent").find("li").length;
  var activeItemNewAnim = tabsNewAnim.find(".active");
  var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
  var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
  var itemPosNewAnimTop = activeItemNewAnim.position();
  var itemPosNewAnimLeft = activeItemNewAnim.position();
  $(".hori-selector").css({
    top: itemPosNewAnimTop.top + "px",
    left: itemPosNewAnimLeft.left + "px",
    height: activeWidthNewAnimHeight + "px",
    width: activeWidthNewAnimWidth + "px",
  });
  $("#navbarSupportedContent").on("click", "li", function (e) {
    $("#navbarSupportedContent ul li").removeClass("active");
    $(this).addClass("active");
    var activeWidthNewAnimHeight = $(this).innerHeight();
    var activeWidthNewAnimWidth = $(this).innerWidth();
    var itemPosNewAnimTop = $(this).position();
    var itemPosNewAnimLeft = $(this).position();
    $(".hori-selector").css({
      top: itemPosNewAnimTop.top + "px",
      left: itemPosNewAnimLeft.left + "px",
      height: activeWidthNewAnimHeight + "px",
      width: activeWidthNewAnimWidth + "px",
    });
  });
}
$(document).ready(function () {
  setTimeout(function () {
    test();
  });
});
$(window).on("resize", function () {
  setTimeout(function () {
    test();
  }, 500);
});
$(".navbar-toggler").click(function () {
  $(".navbar-collapse").slideToggle(300);
  setTimeout(function () {
    test();
  });
});

// --------------add active class-on another-page move----------
jQuery(document).ready(function ($) {
  // Get current path and find target link
  var path = window.location.pathname.split("/").pop();

  // Account for home page with empty path
  if (path == "") {
    path = "index.html";
  }

  var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
  // Add active class to target link
  target.parent().addClass("active");
});

// Add active class on another page linked
// ==========================================
// $(window).on('load',function () {
//     var current = location.pathname;
//     console.log(current);
//     $('#navbarSupportedContent ul li a').each(function(){
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if($this.attr('href').indexOf(current) !== -1){
//             $this.parent().addClass('active');
//             $this.parents('.menu-submenu').addClass('show-dropdown');
//             $this.parents('.menu-submenu').parent().addClass('active');
//         }else{
//             $this.parent().removeClass('active');
//         }
//     })
// });

function scrolltoId1() {
  var access = document.getElementById("welcome");
  access.scrollIntoView({ behavior: "smooth" }, true);
}

function scrolltoId2() {
  var access = document.getElementById("activity");
  access.scrollIntoView({ behavior: "smooth" }, true);
}

function scrolltoId3() {
  var access = document.getElementById("DAILY_SCHEDULE");
  access.scrollIntoView({ behavior: "smooth" }, true);
}

function scrolltoId4() {
  var access = document.getElementById("ABOUT_ME");
  access.scrollIntoView({ behavior: "smooth" }, true);
}

function scrolltoId5() {
  var access = document.getElementById("CONTACT_ME");
  access.scrollIntoView({ behavior: "smooth" }, true);
}

function scrolltoId6() {
  var access = document.getElementById("Gallery");
  access.scrollIntoView({ behavior: "smooth" }, true);
}



// Sattar
window.onscroll = function () {
  changeNavbar();
};

let navBarId = [
  "welcome-js",
  "activity-js",
  "daily-schedule-js",
  "Gallery-js",
  "about-me-js",
  "contact-me-js",
];

function changeNavbar() {
  let offset = -550;
  let elId = [
    "welcome",
    "activity",
    "DAILY_SCHEDULE",
    "Gallery",
    "ABOUT_ME",
    "CONTACT_ME",
  ];
  let elOffsetTop = [];
  for (let i = 0; i < elId.length; i++) {
    const element = document.getElementById(elId[i]);
    elOffsetTop.push(element.offsetTop);
  }

  var doc = document.documentElement;
  var top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
  
  console.log(top,elOffsetTop[4] + offset);

  if (top < elOffsetTop[1] + offset) {
    addAndRemoveClass(navBarId[0]);
  }
  else if (top > elOffsetTop[1] + offset && top < elOffsetTop[2] + offset) {
    addAndRemoveClass(navBarId[1]);
  }
  else if (top > elOffsetTop[2] + offset && top < elOffsetTop[3] + offset) {
    addAndRemoveClass(navBarId[2]);
  }
  else if (top > elOffsetTop[3] + offset && top < elOffsetTop[4] + offset) {
    addAndRemoveClass(navBarId[3]);
  }
  else if (top > elOffsetTop[4] + offset && top < elOffsetTop[5] + offset) {
    addAndRemoveClass(navBarId[4]);
  }
  else if (top > elOffsetTop[5] + offset) {
    addAndRemoveClass(navBarId[5]);
  }
  else {
    addAndRemoveClass(navBarId[0]);
  }
}

function addAndRemoveClass(elIdName) {
  for (let i = 0; i < navBarId.length; i++) {
    document.getElementById(navBarId[i]).classList.remove("active");
  }
  document.getElementById(elIdName).classList.add("active");
  var activeWidthNewAnimHeight = $("#" + elIdName).innerHeight();
  var activeWidthNewAnimWidth = $("#" + elIdName).innerWidth();
  var itemPosNewAnim = $("#" + elIdName).position();
  $(".hori-selector").css({
    top: itemPosNewAnim.top + "px",
    left: itemPosNewAnim.left + "px",
    height: activeWidthNewAnimHeight + "px",
    width: activeWidthNewAnimWidth + "px",
  });
}
