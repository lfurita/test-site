
/* All Menu span button Script */
function openNav(x) {
    x.classList.toggle("change");
}
function openNav() {
    $('#mobile-menu').addClass('active');
}
function closeNav() {
    $('#mobile-menu').removeClass('active');
}

/* Nav Menu Script */
$('header .gnb ul li.nav-item').hover(function(){
    $('header').addClass('menu-on');	
        if($(this).find('.dropdown').length){
            $('header .nav-bg').addClass('down');
        }else{
            $('header .nav-bg').removeClass('down');
    }
},function(){
    $('header').removeClass('menu-on');
    $('header .nav-bg').removeClass('down');
});

function openCity(evt, sideName) {
    var i, contsmenu, itemlink;
    contsmenu = document.getElementsByClassName("contsmenu");
    for (i = 0; i < contsmenu.length; i++) {
      contsmenu[i].style.display = "none";
    }
    itemlink = document.getElementsByClassName("itemlink");
    for (i = 0; i < itemlink.length; i++) {
      itemlink[i].className = itemlink[i].className.replace(" active", "");
    }
    document.getElementById(sideName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="openside" and click on it
  document.getElementById("openside").click();


/* Main visual Script */
var swiper = new Swiper(".visual", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    speed: 1200, /* 다음슬라이드 전환 속도 */
    effect: "slide", /* fade */
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });