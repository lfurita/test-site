

// main visual image area
var swiper = new Swiper(".main-visual", {
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".main-visual2", {
    spaceBetween: 4,
    effect: "fade",
    thumbs: {
      swiper: swiper,
    },
  });


// Partner Life Area
  var swiper = new Swiper(".partner", {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-btn-next",
      prevEl: ".swiper-btn-prev",
    },
  });

// UDIRECT Life Area
  var swiper = new Swiper(".direct-life-swiper", {
    slidesPerView: "auto",
    spaceBetween: 0,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

// Button Top Area
  $(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 500){
            $("#topBtn").fadeIn()
        }else{
            $("#topBtn").fadeOut()
        }
    })
    
    $("#topBtn").click(function(){
        $("html").animate({scrollTop:0},1000,"swing")
    })
  })


  // Life-view-left
  var swiper = new Swiper(".relation", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
  });


  // Life-view-right
  var swiper = new Swiper(".recomm", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
  });