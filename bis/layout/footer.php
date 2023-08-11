
    <footer>
        <div class="copyr-wrap clearfix inb">
            <div class="address-wrap">
                <h1><img src="/bis/img/common/logo_White.png" alt=""></h1>
                <ul class="clearfix inb">
                    <li><a href="../company/#">회사소개</a></li>
                    <li><a href="#">개인정보보호정책</a></li>
                </ul>
                <div class="copyright-area">
                    <div class="short">
                        <span>(우)04614 서울특별시 중구 광희동2가 266 성우빌딩 10F</span>
                    </div>
                    
                    <div class="short">
                        <span>대표 : 김정훈</span>
                        <span>사업자등록번호 : 636 - 87 - 00912</span>
                    </div>

                    <div class="short">
                        <span>고객지원 : 1670-9010</span>
                        <span>FAX : 02-2088-1673</span>
                        <span>E-MAIL : insurance@bis.co.kr</span>
                    </div>

                    <div class="short">
                        <span class="copyright">(c) (주)비아이에스.2022.All Rights Reserved.</span>
                    </div>
                </div>
            </div>
            <div class="brand-wrap">
                <strong>브랜드 사이트</strong>
                <a href="#" class="link-text">여행자 보험</a>
                <a href="#" class="link-text">기업 보험 비교견적</a>
                <a href="#" class="link-text">기업 의무보험</a>
                <a href="#" class="link-text">보증 보험</a>
                <a href="#" class="link-text">펫보험</a>
            </div>
        </div>
    </footer>
	<div class="top-btn-wrap">
		<span class="top-btn"><img src="/bis/img/common/icon-top-arrow.svg"></span>
	</div>
	

    <script src="/bis/js/wow.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        $(function(){
            $(window).scroll(function(){
                if($(this).scrollTop() > 200){
                    $(".top-btn-wrap").fadeIn()
                }else{
                    $(".top-btn-wrap").fadeOut()
                }
            })
            
            $(".top-btn-wrap").click(function(){
                $("html").animate({scrollTop:0},500,"swing")
            })
        })

        new WOW().init();
    </script>
</body>
</html>