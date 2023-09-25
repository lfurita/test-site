<?php 
$menuNo=[0,0];
include $_SERVER['DOCUMENT_ROOT']."/new2023/include/header.php"; 
?>
<link rel="stylesheet" type="text/css" href="css/main.ver1.css">

    <!-- visual area start -->
    <section class="main-sct-01">
        <!-- Swiper -->
        <div class="swiper main-visual2">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="img/main/visual-main-img-01.jpg?e">
            </div>
            <div class="swiper-slide">
                <img src="img/main/visual-main-img-02.jpg?e">
            </div>
            <div class="swiper-slide">
                <img src="img/main/visual-main-img-03.jpg?e">
            </div>
            </div>
        </div>

        <div thumbsSlider="" class="swiper main-visual">
            <div class="swiper-wrapper">
                <!-- 국내 - 여행/관광 -->
                <div class="swiper-slide swiper-slide-thumb-active">
                    <div class="title">국내 여행</div>
                    <div class="text-decoration">
                        <p>
                            여행 중 발생할 수 있는 질병, 사고, 취소, 지연 등의 상황에 대해 보장을 제공합니다. 여행 전에 미리 가입해두면 여행 중 발생하는 예기치 못한 상황에 대비할 수 있어 안심할 수 있습니다.
                        </p>
                        <div  class="btn-wrap">
                            <a href="/new2023/trip/step01.php" class="button main-more">보험료 계산</a>
                            <a name="info" class="button main-more" motion="three">상품 안내</a>
                        </div>
                    </div>
                    <div class="text">마음 편하게 어디든 떠날 수 있게!</div>
                </div>
                <!-- 해외 - 여행/관광 -->
                <div class="swiper-slide">
                    <div class="title">해외여행</div>
                    <div class="text-decoration">
                        <p>
                            해외 여행 중 발생할 수 있는 다양한 상황에 대비하여 가입하는 보험 상품입니다. 질병, 사고, 여행자 교통사고 등의 상황에 대해 다향한 보장을 제공합니다.
                        </p>
                        <div  class="btn-wrap">
                            <a href="/new2023/trip/step01.php" class="button main-more">보험료 계산</a>
                            <a name="info" class="button main-more" motion="three">상품 안내</a>
                        </div>
                    </div>
                    <div class="text">더욱 자유로운 여행을 위한 완벽한 보호막</div>
                </div>
                <!-- 해외 - 연수/출장 -->
                <div class="swiper-slide">
                    <div class="title">해외 장기체류</div>
                    <div class="text-decoration">
                        <p>
                            출장이나 연수 등의 목적으로 해외에 체류해야 할 경우, 안전 관리에 필요한 다양한 보장 제공하는 보험 상품입니다. 추가로 언어지원, 안전상담 등의 서비스를 제공합니다.
                        </p>
                        <div  class="btn-wrap">
                            <a href="/new2023/trip/step01.php" class="button main-more">보험료 계산</a>
                            <a name="long" class="button main-more" motion="three">상품 안내</a>
                        </div>
                    </div>
                    <div class="text">언제 어디서나 안전한 비즈니스 여정</div>
                </div>
            </div>
        </div>
    </section>
    <?php include $_SERVER['DOCUMENT_ROOT']."/new2023/modal/product-long-time.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/new2023/modal/product-info.php"; ?>
    
    <!-- UDIRECT Life start --> 
    <section class="main-sct-02">
        <div class="inner">
            <!-- Swiper -->
            <div class="swiper partner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="logo"><img src="img/main/logo-db.png?e" alt=""></div>
                        <div class="title">DB손해보험</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="logo"><img src="img/main/logo-meritz.png?e" alt=""></div>
                        <div class="title">메리츠화재</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="logo"><img src="img/main/logo-hi.png?e" alt=""></div>
                        <div class="title">현대해상</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="logo"><img src="img/main/logo-samsunglife.png?e" alt=""></div>
                        <div class="title">삼성화재</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="logo"><img src="img/main/logo-chubb.png?e" alt=""></div>
                        <div class="title">CHUBB</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="logo"><img src="img/main/logo-let.png?e" alt=""></div>
                        <div class="title">롯데손해보험</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="logo"><img src="img/main/logo-kb.png?e" alt=""></div>
                        <div class="title">KB 손해보험</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="logo"><img src="img/main/logo-mg.png?e" alt=""></div>
                        <div class="title">MG 손해보험</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="logo"><img src="img/main/logo-hwgi.png?e" alt=""></div>
                        <div class="title">한화손해보험</div>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="swiper-btn-next"></div>
        <div class="swiper-btn-prev"></div>
    </section>

    <!-- UDIRECT Life start -->
    <section class="main-sct-03">
        <div class="direct-life-wrap">
            <div class="title">
                <h2>UDIRECT Life</h2>
                <p>
                    <span>일상에서 휴식을 찾는 것은 어려운 일이지만</span>
                    이 곳에서는 나만을 위한 온전한 휴식을 어렵지 않게
                    찾으실 수 있습니다.
                </p>
            </div>

            <div class="swiper direct-life-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-box-list">
                            <a href="">
                                <figure>
                                    <img src="img/main/270318596.png" alt="">
                                </figure>
                                <h3>[출입국 신고서] - 홍콩</h3>
                                <div class="text-conts">
                                    홍콩 여행시 세신고서를 작성해야 합니다. 작성하기 전에 기본적으로 필기구(검정 펜이 기본), 여권, 항공권, 도착지 정보 등을 준비하여 작성합니다.
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="swiper-box-list">
                            <a href="">
                                <figure>
                                    <img src="img/main/222603574.png" alt="">
                                </figure>
                                <h3>[출입국 신고서] - 호주</h3>
                                <div class="text-conts">
                                    홍콩 여행시 세신고서를 작성해야 합니다. 작성하기 전에 기본적으로 필기구(검정 펜이 기본), 여권, 항공권, 도착지 정보 등을 준비하여 작성합니다.
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="swiper-box-list">
                            <a href="">
                                <figure>
                                    <img src="img/main/1814961938.png" alt="">
                                </figure>
                                <h3>[출입국 신고서] - 미국</h3>
                                <div class="text-conts">
                                    홍콩 여행시 세신고서를 작성해야 합니다. 작성하기 전에 기본적으로 필기구(검정 펜이 기본), 여권, 항공권, 도착지 정보 등을 준비하여 작성합니다.
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="swiper-box-list">
                            <a href="">
                                <figure>
                                    <img src="img/main/375766480.png" alt="">
                                </figure>
                                <h3>[유학생 정보] 필리핀</h3>
                                <div class="text-conts">
                                    홍콩 여행시 세신고서를 작성해야 합니다. 작성하기 전에 기본적으로 필기구(검정 펜이 기본), 여권, 항공권, 도착지 정보 등을 준비하여 작성합니다.
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="swiper-box-list">
                            <a href="">
                                <figure>
                                    <img src="img/main/1115520437.png" alt="">
                                </figure>
                                <h3>[유학생 정보] 아일랜드</h3>
                                <div class="text-conts">
                                    홍콩 여행시 세신고서를 작성해야 합니다. 작성하기 전에 기본적으로 필기구(검정 펜이 기본), 여권, 항공권, 도착지 정보 등을 준비하여 작성합니다.
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="swiper-box-list">
                            <a href="">
                                <figure>
                                    <img src="img/main/681948142.png" alt="">
                                </figure>
                                <h3>[유학생 정보] 영국</h3>
                                <div class="text-conts">
                                    홍콩 여행시 세신고서를 작성해야 합니다. 작성하기 전에 기본적으로 필기구(검정 펜이 기본), 여권, 항공권, 도착지 정보 등을 준비하여 작성합니다.
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- 고객센터 start -->
    <section class="main-sct-04">
        <div class="inner">
            <div class="cstmr-left-wrap">
                <h2>도와드릴까요?</h2>
                <strong><i class="icon-tel"></i> 유다이렉트 대표번호</strong>
                <div class="tel">
                    1800-9010
                </div>
            </div>
            <div class="cstmr-right-wrap">
                <p>※ 해당모집종사자는 보험사로부터 보험계약체결권을 부여받지 아니한 금융상품판매대리·중개업자임을 알려드립니다.</p>
                <div class="btn-cstmr-wrap">
                    <a href="https://ud.udirect.co.kr/travel/meritz/files/overseas.pdf" class="button radius-3 red" target="_blank">해외여행보험약관</a>
                    <a href="https://ud.udirect.co.kr/travel/meritz/files/domestic.pdf" class="button radius-3 dark-red" target="_blank">국내여행보험약관</a>
                    <a href="https://ud.udirect.co.kr/travel/meritz/files/overseas_longterm.pdf" class="button radius-3 dark-gray" target="_blank">해외여행보험약관(장기)</a>
                </div>
            </div>
        </div>
    </section>

<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/footer.php"; ?>