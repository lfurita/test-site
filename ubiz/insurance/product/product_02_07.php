<?php
$menuNo=[1,2,2];
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/header.php";
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/sub-visual.php";
?>
<div class="contents">
    <div class="submenu">
        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_02_01.php'">
                <input type="radio" class="checkbox menu1" id="menu1" name="menu" />
                <div class="check">
                    <i class="icon submenu0101"></i>
                </div>
                <span>영업 배상</span>
            </label>
        </div>

        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_02_02.php'">
                <input type="radio" class="checkbox menu2" id="menu2" name="menu" />
                <div class="check">
                    <i class="icon submenu0102"></i>
                </div>
                <span>생산물 배상</span>
            </label>
        </div>

        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_02_03.php'">
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" />
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>전문인 배상</span>
            </label>
        </div>

        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_02_04.php'">
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" />
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>개인정보 배상</span>
            </label>
        </div>

        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_02_05.php'">
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" />
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>근로자 재해배상</span>
            </label>
        </div>

        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_02_06.php'">
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" />
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>임상시험 배상</span>
            </label>
        </div>

        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_02_07.php'">
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" checked/>
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>임원 배상</span>
            </label>
        </div>
    </div>

    <section class="title">
        <h2>임원 배상 책임 보험</h2>
        <p>
            회사임원이 직무를 수행하는 과정에서 부당행위나
            태만, 실수 등으로 회사 및 제3자에 대해 법률상의 손해배상
            책임을 지게 됨에 따라 입게 되는 손해를 보상해주는 보험
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

                            <p>회사 임원이 직무를 수행하는 과정에서 부당행위나 태만, 실수 등으로 인하여 회사 및 제3자에 대해 법률상의 손해배상 책임을 지게 됨에 따라 입게 되는 손해를 보상해주는 보험입니다.</p>

                            <p>[주요 부당행위 :업무수행 중에 저지른 과실, 의무위반, 태만, 허위진술, 탈루 등]</p>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>가입 대상</h3>

                            <p>금융기관, 제조업, 유통업 및 기타 서비스업 등 모든 기업</p>
                        </div>
                    </div>
                </div>

                <div class="panel grnt">
                    <h2>주요 보상하는 손해</h2>
                    <ul>
                        <li>임원의 법률상 손해배상책임에 따른 회사 또는 제3자에 대한 손해배상금 및 손해배상금의 경정에 소요된 방어비용</li>
                        <li>보험회사는 보통약관 및 특별약관의 제규정에 따라 보험기간 중에 피보험자에 대하여 최초로 제기되고 또한 이 보험의 조건에 따라 회사에 그 사실을 통지한 다음의 손해배상청구에 한하여 보상합니다.</li>
                        <li class="type-numb2">1.1. 경영배상책임
                            <ul class="number">
                                <li>(i) 개인 보험자는 부당행위로 인하여 각 개인피보험자가 입은 손해를 보상합니다.</li>
                                <li>(ii) 외부법인이사 보험자는 부당행위로 인하여 각 외부 법인 이사가 입은 손해를 보상합니다.</li>
                                <li>(iii) 피보험회사 보상 피보험회사가 부당행위로 인하여 개인피보험자가 입은 손해액을 지불한 경우, 보험자는 그 지불한 손해액을 피보험회사에 보상합니다.</li>
                            </ul>
                        </li>
                        <li class="type-numb2">1.2. 피보험회사의 유가증권관련 손해배상청구 보험자는 부당행위로 인하여 각 피보험회사가 입은 유가증권 관련 손해배상청구에 기인된 손해를 보상합니다.</li>

                        <li class="subsc">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</li>
                    </ul>
                </div>

                <div class="panel loss">
                    <h2>주요 보상하지 않는 손해</h2>
                    
                    <ul>
                        <li class="type-dot">피보험자 개인의 이익 취득 및 의도적인 사기 및 범죄행위</li>
                        <li class="type-dot">신체상해 및 재산상의 손해 이전</li>
                        <li class="type-dot">손해배상청구 및 사고정황으로 이전 증권에서 보고된 사안</li>
                        <li class="type-dot">오염 물질의 배출, 유출, 살포, 또는 누출</li>
                        <li class="type-dot">피보험자 상호간의 소송. (단, 주주대표소송, 부당고용행위 및 과거 임원에 의하여 제기된 소송에는 적용되지 않음)</li>
                        <li class="type-dot">발행주식의 15% 이상을 소유한 대주주에 의하여 제기된 소송</li>
                        <li class="type-dot">퇴직금/퇴직연금 관련 수탁자 배상책임(fiduciary liability)</li>
                        
                        <li class="subsc">※ 위 보상하지않는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</li>
                    </ul>
                </div>

                <div class="panel instr">
                    <!-- 가입 유의사항 -->
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