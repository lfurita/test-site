<?php
$menuNo=[1,2,1];
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/header.php";
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/sub-visual.php";
?>
<div class="contents">
    <div class="submenu">
        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_01_01.php'">
                <input type="radio" class="checkbox menu1" id="menu1" name="menu" />
                <div class="check">
                    <i class="icon submenu0101"></i>
                </div>
                <span>재산종합</span>
            </label>
        </div>

        <div class="radio-box" onclick="location.href='product_01_02.php'">
            <label class="subtab">
                <input type="radio" class="checkbox menu2" id="menu2" name="menu" />
                <div class="check">
                    <i class="icon submenu0102"></i>
                </div>
                <span>일반/공장화재</span>
            </label>
        </div>

        <div class="radio-box" onclick="location.href='product_01_03.php'">
            <label class="subtab">
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" checked/>
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>동산종합</span>
            </label>
        </div>
    </div>

    <section class="title">
        <h2>동산종합보험</h2>
        <p>
            동산종합보험은 보험의 목적인 동산이 우연한 사고로 
            생긴 모든 손해를 보상하는 보험
        </p>
    </section>
    
    <section class="accident-case">
        <div class="inner">
            <div class="title">
                <h2>사고 사례</h2>
                <p>사고 사례에 대한 간단한 설명 문구가 들어갈 자리입니다.</p>
            </div>
            <!-- Swiper -->
            <div class="swiper accident">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure>
                            <img src="/ubiz/img/sub/logo-news-news1.png" alt="">
                        </figure>
                        <h3>news1</h3>
                        <a href="https://www.news1.kr/articles/?4979657" target="_blank">보상 규모 최대 1.7조"…한국타이어 공장 화재에 보험사들 '촉각</a>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="/ubiz/img/sub/logo-news-news1.png" alt="">
                        </figure>
                        <h3>news1</h3>
                        <a href="https://www.news1.kr/articles/?4979657" target="_blank">보상 규모 최대 1.7조"…한국타이어 공장 화재에 보험사들 '촉각</a>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="/ubiz/img/sub/logo-news-seoulfn.png" alt="">
                        </figure>
                        <h3>서울파이낸스</h3>
                        <a href="https://www.seoulfn.com/news/articleView.html?idxno=423027" target="_blank">화재' 쿠팡 물류창고, DB 등 4개 손보사에 4015억 재산보험</a>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="/ubiz/img/sub/logo-news-news1.png" alt="">
                        </figure>
                        <h3>news1</h3>
                        <a href="https://www.news1.kr/articles/?4979657" target="_blank">보상 규모 최대 1.7조"…한국타이어 공장 화재에 보험사들 '촉각</a>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="/ubiz/img/sub/logo-news-seoulfn.png" alt="">
                        </figure>
                        <h3>서울파이낸스</h3>
                        <a href="https://www.seoulfn.com/news/articleView.html?idxno=423027" target="_blank">화재' 쿠팡 물류창고, DB 등 4개 손보사에 4015억 재산보험</a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <script>
            var swiper = new Swiper(".accident", {
                cssMode: true,
                loop: true,
                slidesPerView: 3,
                spaceBetween: 66,
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                },
                mousewheel: true,
                keyboard: true,
            });
        </script>
    </section>

    <section class="product-info">
        <div class="tab-wrap">
            <input class="radio" id="prdct" name="group" type="radio"checked>
            <input class="radio" id="grnt" name="group" type="radio">
            <input class="radio" id="loss" name="group" type="radio">
            <input class="radio" id="instr" name="group" type="radio">
            <div class="tab-menu">
                <label class="tab prdct" for="prdct">상품 안내</label>
                <label class="tab grnt" for="grnt">보장 내용</label>
                <label class="tab loss"  for="loss">보장하지 않는 손해</label>
                <label class="tab instr" for="instr">가입 유의사항</label>
            </div>

            <div class="panel-wrap">
                <div class="panel prdct">

                    <h2>상품 안내</h2>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>상품 정보</h3>

                            <p>
                                보험의 목적인 동산이 화재, 도난, 파손, 폭발 등 우연한 사고로 입은 손해를 보상하는 보험으로 다른 재물보험은 보험의 목적을 특정장소 내에 한정하여 담보하는데 종합보험은 계약자의 선택에 따라 보관중은 물론 사용중, 휴대중, 운송 중의 사고까지도 보장하는 보험
                            </p>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-mmbrs"></i>
                        </div>

                        <div class="conts">
                            <h3>가입 대상</h3>

                            <ul>
                                <li class="title">주요가입대상</li>
                                <li class="type-dash">- 공장의 재고자산(원, 부자재 및 반, 완제품)</li>
                                <li class="type-dash">- 공장의 리스기계</li>
                                <li class="type-dash">- 병원의 의료기기</li>
                                <li class="type-dash">- 전산기기, 방송/통신기기 및 장치</li>
                                <li class="type-dash">- 중장비 등 개인 및 기업체의 모든 동산이 보험가입대상</li>

                                <li class="title">리스물건</li>
                                <li class="type-dash">- 리스회사에서 주로 가입하며 가입 시 리스회사임대물건 특별약관을 첨부</li>
                                <li class="type-dash">- 리스계약서 상에 상세한 정보가 있을 뿐만 아니라 특별약관상 보험가입금액 산정이 달라질 수 있으므로 리스계약여부를 확인</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel grnt">
                    <h2>주요 보상하는 손해</h2>

                    <ul class="clearfix inb">
                        <li class="title">동산종합보험에서 보상하는 손해는 약관에 규정된 면책위험을 제외하고 보험에 가입된 물건이 보관, 사용, 수송 중에 우연한 사고로 입은 손해는 모두 보상하는데 그 위험을 예시하면 아래와 같음</li>
                        <li>1. 화재</li>
                        <li>2. 도난</li>
                        <li>3. 폭발 또는 파열</li>
                        <li>4. 항공기의 추락이나 접촉 또는 항공기로부터의 물체의 낙하</li>
                        <li>5. 차량의 충돌 또는 접촉</li>
                        <li>6. 소요 또는 노동쟁의에 수반한 폭행위험</li>
                        <li>7. 우, 담수유, 강설, 수해, 연해, 건물의 붕괴, 누손 등의 잡위험</li>
                        <li class="subsc">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</li>
                    </ul>
                </div>

                <div class="panel loss">
                    <h2>보장하지 않는 손해</h2>
                    
                    <h3 class="title">(약관상 면책사항)</h3>
                    <ul>
                        <li class="title">1. 절대적 면책사유
                            <ul class="circle">
                                <li class="type-circle">
                                    ① 회사는 아래의 사유로 인한 손해는 보상하여 드리지 않습니다.
                                    <ul>
                                        <li>1) 계약자, 피보험자 또는 이들의 법정대리인의 고의 또는 중대한 과실</li>
                                        <li>2) 피보험자에게 보험금을 받도록 하기 위하여 피보험자와 세대를 같이하는 친족(민법 제777조) 이나 고용인이 고의로 일으킨 손해</li>
                                        <li>3) 원인의 직접, 간접을 묻지 아니하고 전쟁, 혁명, 내란, 사변, 폭동, 소요, 노동쟁의 기타 이들과 유사한 사태로 생긴 손해</li>
                                        <li>4) 원인의 직접, 간접을 묻지 아니하고 압류, 징발, 몰수, 파괴 등 국가 또는 공공단체의 공권력의 행사로 생긴 손해. 그러나 이 약관에서 보상하는 사고에 따른 소방 또는 피난에 필요한 조치로서 행사되었을 경우에는 보상하여 드립니다.</li>
                                        <li>5) 원인의 직접, 간접을 묻지 아니하고 보험의 목적의 자연소모 또는 고유의 성질에 의한 마모, 녹, 곰팡이, 부식, 변질, 변색, 침식 기타 이와 비슷한 사유나 쥐나 벌레가 쏠거나 먹어서(서식 또는 충식) 생긴 손해</li>
                                        <li>6) 원인의 직접, 간접을 묻지 아니하고 보험의 목적의 흠으로 생긴 손해<br>그러나 계약자, 피보험자 또는 이들을 대신하여 보험의 목적을 관리하는자가 상당한 주의를 하였어도 발견하지 못한 흠으로 생긴 사고에 의한 손해는 보상하여 드립니다.</li>
                                        <li>7) 핵연료물질 또는 핵연료물질에 의하여 오염된 물질의 방사성, 폭발성 그 밖의 유해한 특성 또는 이들의 특성에 의한 사고로 인한 손해</li>
                                        <li>8) 위 제7호이외의 방사선을 쬐는 것 또는 방사능 오염으로 인한 손해</li>
                                        <li>9) 보험의 목적에 가공(수리를 제외합니다)을 하는 경우 가공착수 후에 내부적인 기계자체 또는 조작 잘못으로 인하여 생긴 손해</li>
                                        <li>10) 사기 또는 횡령으로 생긴 손해</li>
                                        <li>11) 망실 또는 분실에 의한 손해</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="title">2. 상대적 면책사유
                            <ul class="circle">
                                <li class="type-circle">① 보험의 목적의 수리, 청소 등의 작업 중에 있어서 작업상의 과실 또는 기술의 졸렬로 생긴 손해. 그러나 이들의 사유로 생긴 화재손해는 보상하여 드립니다.</li>
                                <li class="type-circle">② 보험의 목적의 전기적 사고 또는 기계적 사고로 생긴 손해. 그러나 이들의 사고로 인하여 화재손해가 발생하였거나 또는 이들의 사고가 우연한 외래의 사고의 결과로 생긴 손해는 보상하여 드립니다.</li>
                                <li class="type-circle">③ 원인의 직접, 간접을 묻지 아니하고 지진 또는 분화로 생긴 손해</li>
                                <li class="type-circle">④ 원인의 직접, 간접을 묻지 아니하고 홍수, 범람, 해일, 태풍, 회오리 바람, 폭풍우 등 풍수재로 생긴 손해</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="panel instr">
                    <?php include $_SERVER['DOCUMENT_ROOT']."/ubiz/insurance/product/sign-notes.php"; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="basic-dcmnt">
        <div class="inner">
            <h2>기초서류</h2>

            <div class="box-conts">
                <div class="conts-area">
                    <ul>
                        <li class="type-dot">사업자등록증</li>
                        <li class="type-dot">필요자료</li>
                        <li class="type-dash first">- 공통 : 업체개요, 생산개요 및 공정도, 사업장 배치도, 사고내역 등</li>
                        <li class="type-dash">- 1부문 : 자산대장, 전기설비,보일러설비,압축공기설비,용수설비현황(종류,용량,위치등), 소화 방재 시설 및 위험물 저장 시설 현황 등</li>
                        <li class="type-dash">- 2부문 : 기계장치 명세</li>
                        <li class="type-dash">- 3부문 : 손익계산서 및 제조원가 명세서</li>
                    </ul>
                </div>
                <div class="conts-area">
                    <ul>
                        <li class="type-dash">- 4부문</li>
                        <li class="type-numb">1. 시설소유배상책임 - 사업장 면적(m2) (단, 공장은 매출액)</li>
                        <li class="type-numb">2. 주차장배상책임 - 주차장면적(m2) 실내,외 구분면적 (단, 기계식추자장은 총가능주차대 수)</li>
                        <li class="type-numb">3. 체육시설배상책임 - 체육시설면적(m2) (단,골프장은 매출액)</li>
                        <li class="type-numb">4. 실화배상책임 - 사업장 면적(m2) (단, 공장은 매출액)</li>
                        <li class="type-numb">5. 기타 확장담보 - 담보별 관련 서류 (영업담당자문의)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="quest">
        <div class="inner">
            <h2>설문서 및 약관</h2>
            <div class="button-left">
                <a href="" class="button basic">설문서</a>
                <a href="" class="button basic">약관</a>
            </div>
        </div>
    </section>

    <section class="related">
        <div class="inner">
            <h2>연관 보험</h2>
            <div class="box-list">
                <ul class="clearfix inb">
                    <li>
                        <a href="">
                            <h3>배상책임보험</h3>
                            <p>배상책임보험에 관한 간단한 설명자리리</p>
                            <div class="icon-btn"><i class="icon-arrow">배상책임보험 Button</i></div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h3>배상책임보험</h3>
                            <p>배상책임보험에 관한 간단한 설명자리리</p>
                            <div class="icon-btn"><i class="icon-arrow">배상책임보험 Button</i></div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h3>배상책임보험</h3>
                            <p>배상책임보험에 관한 간단한 설명자리리</p>
                            <div class="icon-btn"><i class="icon-arrow">배상책임보험 Button</i></div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h3>배상책임보험</h3>
                            <p>배상책임보험에 관한 간단한 설명자리리</p>
                            <div class="icon-btn"><i class="icon-arrow">배상책임보험 Button</i></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>

<?php 
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/contactus.php";
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/footer.php";
?>