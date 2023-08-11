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
                <input type="radio" class="checkbox menu2" id="menu2" name="menu" checked/>
                <div class="check">
                    <i class="icon submenu0102"></i>
                </div>
                <span>일반/공장화재</span>
            </label>
        </div>

        <div class="radio-box" onclick="location.href='product_01_03.php'">
            <label class="subtab">
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" />
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>동산종합</span>
            </label>
        </div>
    </div>

    <section class="title">
        <h2>일반/공장화재보험</h2>
        <p>
        화재보험은 손해보험의 근간을 이루는 보험으로 기업의 창고, 공장까지 다양한 대상을 그 목적물로 하는 보험
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
            <input class="radio" id="prdct" name="group" type="radio" checked>
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
                                우연한 화재 및 낙뢰 사고로 인하여 발생한 재산상의 직접손해, 소방손해 및 피난손해를 보상하는 보험 특별약관으로 화재위험 이외에도 도난위험, 지진위험, 풍수재위험, 전기위험 등 다양한 위험으로 인한 손실을 추가적으로 보상
                            </p>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-mmbrs"></i>
                        </div>

                        <div class="conts">
                            <h3>가입 대상</h3>
                            <ul class="clearfix inb">
                                <li class="type-dash">
                                    1) 일반화재<br>
                                    (1) 병용주택, 점포, 사무실 및 이들의 부속건물 및 옥외설비, 장치, 공작물 또는 이들에 수용되는 설치기계 및 야적동산<br>
                                    (2) 주택 및 공장을 제외한 나머지 물건
                                </li>
                                <li class="type-dash">
                                    2) 공장화재<br>
                                    (1) 아래에 해당하는 공장 또는 작업장의 구내에 있는 건물 및 이에 수용된 동산<br>
                                    (2) 제조 및 가공작업<br>
                                    (3) 기계, 기구류의 수리 또는 개조작업<br>
                                    (4) 광석, 광유 및 천연가스 채취작업<br>
                                    (5) 석유 및 석유제품의 저장, 혼합조성 및 압송작업<br>
                                    (6) 발전소, 변전소 및 개폐소에서의 발전, 변전 또는 개폐작업<br>
                                    (7) 기타
                                    <ul class="dash">
                                        <li>
                                            - 동물의 도축 및 해체작업<br>
                                            - 가스충전작업<br>
                                            - 세탁작업<br>
                                            - 폐기물처리(폐수처리 포함)<br>
                                            - 곡물정선(콩 포함) 및 종자를 선별하는 작업
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel grnt">
                    <h2>주요 보상하는 손해</h2>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>주요보장내용</h3>

                            <p>화재에 따른 직접 손해 : 건물, 가재도구, 시설, 기계, 집기비품, 재고자산 등의 화재손해를 보상</p>
                            <p>화재에 따른 소방 손해 : 화재사고 발생 시 보험에 가입한 목적물이 소방수에 젖는 수침손, 파열 등의 손해를 보상</p>
                            <p>화재에 따른 피난 손해 : 화재에 따른 직접 손해 외에 피난지에서 5일 동안에 생긴 화재에 따른 직접손해, 소방손해를 보상</p>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>주요 선택가능 특약</h3>

                            <ul class="clearfix inb">
                                <li class="type-numb">
                                    1) 도난위험담보<br>
                                    보험의 목적이 강도 또는 절도로 생긴 도난, 훼손 또는 망가진 손해를 보상
                                </li>
                                <li class="type-numb">
                                    2) 전기위험담보<br>
                                    발전기, 여자기(勵磁機), 정류기, 변류기(變流器), 변압기, 전압조정기, 축전기, 개폐기, 차단기, 피뢰기, 배전반 및 이와 비슷한 전기기기 또는 장치 중 일부 또는 전부를 보험의 목적으로 하였을 경우 그 전기기기 또는 장치에 전기적 사고로 발생한 손해를 보상
                                </li>
                                <li class="type-numb">
                                    3) 풍수재 위험담보<br>
                                    태풍, 회오리바람, 폭풍, 폭풍우, 홍수, 해일, 범람 및 이와 비슷한 풍재 또는 수해로 보험의 목적에 생긴 손해를 보상하여 드립니다.
                                </li>
                                <li class="type-numb">
                                    4) 구내폭발 손해담보<br>
                                    보험의 목적이 있는 구내에서 생긴 폭발, 파열(폭발, 파열이라 함은 급격한 산화반응을 포함하는 파괴 또는 그 현상을 말합니다)로 보험의 목적에 생긴 손해를 보상
                                </li>
                                <li class="type-numb">
                                    5) 신체손해배상책임담보<br>
                                    특수건물의 화재로 타인이 사망하거나 부상함으로써 건물 소유자 손해배상책임에 따라 피보험자가 부담할 손해를 보상합니다.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class="prctn">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</p>
                </div>

                <div class="panel loss">
                    <h2>주요 보상하지 않는 손해</h2>
                    <ul>
                        <li>계약자, 피보험자 또는 이들의 법정대리인의 고의 또는 중대한 과실</li>
                        <li>화재가 발생했을 때 생긴 도난 또는 분실로 생긴 손해</li>
                        <li>원인의 직접, 간접을 묻지 않고 지진, 분화 또는 전쟁, 혁명, 내란, 사변, 폭동, 소요, 노동쟁의, 기타 이들과 유사한 사태로 생긴 화재 및 연소 또는 그 밖의 손해</li>
                        <li>핵연료물질 또는 핵연료물질에 의하여 오염된 물질의 방사성, 폭발성 그 밖의 유해한 특성 또는 이들의 특성에 의한 사고로 인한 손해</li>
                        <li class="subsc">※ 위 보상하지않는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</li>
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