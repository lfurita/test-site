<?php 
$menuNo=[4,2];
include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/header.php"; 
?>

<div class="view-conts-wrap">
    <!-- Swiper -->
    <div class="swiper viewPhoto">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure><img src="https://thumbnail6.coupangcdn.com/thumbnails/remote/492x492ex/image/retail/images/1594354173313669-1b0ded27-337c-4cde-8a9b-fbe30935d997.jpg"></figure>
            </div>
            <div class="swiper-slide">
                <figure><img src="../img/service/view-photo-img.jpg"></figure>
            </div>
            <div class="swiper-slide">
                <figure><img src="../img/main/best-list-img-03.jpg"></figure>
            </div>
            <div class="swiper-slide">
                <figure><img src="../img/main/best-list-img-04.jpg"></figure>
            </div>
        </div>
        
        <div class="swiper-pagination"></div>
    </div>

    <div class="view-title-box">
        <div class="inner">
            <h2>Mobile Phone Charging Port Dust Plug for IPhone 14 13 Pro Max Port Cleaner Kit</h2>
            <p>This product is shower mini cleaning brush, specially used for crevice cleaning Computer Keyboard Cleaner Tool Cleaner Brush</p>
            <strong>₱ 1,500</strong>
        </div>
    </div>

    <div class="view-box-wrap">
        <div class="inner">
            <h3>Product Details</h3>
            <p>
            Perhaps the most iconic sneaker of all-time, this original "Chicago"? colorway is the cornerstone to any sneaker collection. Made famous in 1985 by Michael Jordan, the shoe has stood the test of time, becoming the most famous colorway of the Air Jordan 1. This 2015 release saw the shoe has stood the test ... More
            </p>
        </div>
    </div>

    <div class="view-cont-wrap">
        <div class="inner">
            <ul class="menu clearfix inb">
                <li class="list-box-item">
                    <div class="ttl-box-item">
                        <strong>Delivery Price</strong>
                        <span></span>
                    </div>

                    <div class="cont-box-items">
                        Perhaps the most iconic sneaker of all-time, this original "Chicago"? colorway is the cornerstone to any sneaker collection. Made famous in 1985 by Michael Jordan, the shoe has stood the test of time, becoming the most famous colorway of the Air Jordan 1. This 2015 release saw the shoe has stood the test
                    </div>
                </li>

                <li class="list-box-item">
                    <div class="ttl-box-item">
                        <strong>Detail Informatoins</strong>
                        <span></span>
                    </div>

                    <div class="cont-box-items">
                        Perhaps the most iconic sneaker of all-time, this original "Chicago"? colorway is the cornerstone to any sneaker collection. Made famous in 1985 by Michael Jordan, the shoe has stood the test of time, becoming the most famous colorway of the Air Jordan 1. This 2015 release saw the shoe has stood the test
                    </div>
                </li>

                <li class="list-box-item">
                    <div class="ttl-box-item">
                        <strong>Product Inquiry</strong>
                        <span>V</span>
                    </div>

                    <div class="cont-box-items">
                        Perhaps the most iconic sneaker of all-time, this original "Chicago"? colorway is the cornerstone to any sneaker collection. Made famous in 1985 by Michael Jordan, the shoe has stood the test of time, becoming the most famous colorway of the Air Jordan 1. This 2015 release saw the shoe has stood the test
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    const list = document.querySelectorAll('.list-box-item');
    function accordion(e) {
    e.stopPropagation();
    if (this.classList.contains('active')) {
        this.classList.remove('active');
    } else
    if (this.parentElement.parentElement.classList.contains('active')) {
        this.classList.add('active');
    } else
    {
        for (i = 0; i < list.length; i++) {
        list[i].classList.remove('active');
        }
        this.classList.add('active');
    }
    }
    for (i = 0; i < list.length; i++) {
    list[i].addEventListener('click', accordion);
    }
</script>

<?php include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/bottom-view.php"; ?>
<!-- design Js -->
<script type="text/javascript" src="/Umarket/js/design.js"></script>
</body>
</html>