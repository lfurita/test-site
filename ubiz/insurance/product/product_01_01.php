<?php
$menuNo=[1,2,1];
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/header.php";
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/sub-visual.php";
?>
<div class="contents">
    <div class="submenu">
        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_01_01.php'">
                <input type="radio" class="checkbox menu1" id="menu1" name="menu" checked/>
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
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" />
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>동산종합</span>
            </label>
        </div>
    </div>

    <section class="title">
        <h2>재산종합보험</h2>
        <p>
            재산종합보험은 정유Plant, 종합화학Plant, 백화점, 대형할인점, 사무용건물, 놀이동산, 위락단지 등 대형 사업장에서 발생 가능한 다양한 
            위험을 종합적으로 담보하기 위하여 화재보험, 기계보험, 기업휴지보험, 배상책임보험을 하나로 통합한 종합보험
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

                            <ul>
                                <li>재산종합보험, 패키지보험, Package insurance 모두 같은의미.</li>
                                <li>기업 경영상 수반되는 각종 위험을 하나의 증권으로 포괄담보하는 종합보험으로 제1부문 재산손해(PAR) 보험가입금액 기준, 건물(시설, 집기비품 등 포함) 및 재고자산 200억원 초과시 가입가능한 보험.</li>
                                <li>All Risk보험으로 면책위험으로 정한 부분을 제외하고는 모든 위험을 담보하는 보험.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-mmbrs"></i>
                        </div>

                        <div class="conts">
                            <h3>가입 대상</h3>

                            <ul>
                                <li>공장 : 각종 대형공장, 정유Plant, 종합화학Plant 등</li>
                                <li>공공시설 : 백화점, 대형할인점 등</li>
                                <li>업무용시설 : 사무용 건물 등</li>
                                <li>위락시설 : 놀이동산, 위락단지 등 기타의 대형시설</li>
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
                            <h3>제1부분 (재산손해)</h3>

                            <ul>
                                <li>보험기간 중에 본 증권에 명기된 피보험자의 구내에서 본 증권에서 면책으로 하고 있지 않은 여하한 원인에 직접적으로 또한 전적으로 기인하여 보험의 목적에 급격하고도 우연하게 발생한 직접적인 재물손해, 즉, 화재, 낙뢰, 폭발, 지진, 폭풍우, 우박, 항공기 또는 차량에 의한 손해, 연기, 붕괴, 자동살수장치 누출(Sprinkler Leakage), 폭력, 침입에 따른 도난, 기타 보상하지 않는 손해에 명기되지 않은 모든 사고 보상</li>
                            </ul>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>제2부분 (기계손해)</h3>
                            
                            <ul>
                                <li>기계장치의 파손사고 담보. 재질, 설계, 건설, 조립상 결함.</li>
                                <li>진동, 조절불량, 부품의 느슨함, 안전장치의 고장 등 과전압, 부전압, 절연체의 하자, 단락, 누전, 방전, 정전기 능력부족, 기술부족, 종업원 또는 제3자의 부주의 추락, 충격, 충돌 등 기타 보상하지 않는 손해에 명기되지 않은 모든 사고</li>
                            </ul>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>제3부분 (기업휴지손해)</h3>

                            <ul>
                                <li>사고 발생으로 조업이 중단되었을 경우, 이에 따른 영업손실을 담보 보험기간 중에 본 증권에 명기된 구내에서 피보험자가 영위하는 조업이 이 보험의 제 1부문(재물위험)과 제 2부문(기계위험) 담보상에서 보상 가능한 사고의 결과로 중단 또는 휴지되었을 경우에, 보험자는 이 부문하의 제 규정에 따라 그러한 중단 또는 휴지로 인하여 생긴 손해액 보상</li>
                            </ul>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>제4부분 (배상책임손해)</h3>

                            <ul>
                                <li>신체 및 재물에 손해를 입힘으로써 발생하는 법률상의 배상책임을 담보</li>
                                <li>* 제1부분(재산보험)는 필수 가입</li>
                                <li>보험기간 중 본 증권에 명기된 담보지역에서 발생한 제 3자에 대한 신체장해 또는 재물손해로 피보험자가 법률상의 손해배상책임을 부담함으로써 입은 손해/손해배상청구 및 소송관련 비용 보상</li>

                                <li class="second">일반 배상책임(피보험자의 시설/업무로 인한 배상책임과 생산물 배상책임을 보상)</li>
                                <li>북미지역 수출품에 대한 생산물 배상책임(북미지역 수출품으로 인해 발생한 제3자의 신체장해나 재물손해 보상)</li>
                            </ul>
                        </div>
                    </div>

                    <p class="caution">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</p>
                </div>

                <div class="panel loss">
                    <h2>주요 보상하지 않는 손해</h2>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>공통</h3>
                            
                            <ul>
                                <li class="tyep-dash">- 전쟁, 침략, 외적행위, 적대행위, 내란, 전쟁유사행위 등 모반, 소요, 군사적 봉기, 반란, 혁명, 군사력, 찬탈자 폭력 조직관련 일인 또는 다수인의 테러행위 적법한 기관의 몰수, 국유화, 징발, 수용에 기인한 영구적 또는 일시적 점유의 박탈.</li>
                                <li class="tyep-dash">- 타인에 의한 건물의 불법점유에 기인한 영구적 또는 일시적 점유의 박탈 공공기관의 명령에 의한 재물파괴.</li></li>
                                <li class="tyep-dash">- 핵무기 원료</li>
                                <li class="tyep-dash">- 이온방사, 핵연료, 핵폐기물로 인한 방사능오염</li>
                                <li class="tyep-dash">- 피보험자 또는 그 대리인의 고의, 과실</li>
                                <li class="tyep-dash">- 제외되는 목적물</li>
                                <li class="tyep-dash">- 통화, 금괴, 동전, 수표, 보석, 미술품, 골동품, 데이터 등</li>
                                <li class="tyep-dash">- 건설, 조립공사, 철거 또는 시운전이 진행중인 재물 등</li>
                                <li class="tyep-dash">- 자동차, 궤도차량, 해상 또는 항공용 운반구</li>
                                <li class="tyep-dash">- 동물, 새, 물고기, 기타 생명체</li>
                                <li class="tyep-dash">- 입목, 재배 중 곡물</li>
                                <li class="tyep-dash">- 토지(배수로, 옹벽, 배수거, 표토, 복토 포함), 도로, 차도, 활주로, 철도, 운하, 댐, 터널</li>
                                <li class="tyep-dash">- 지하의 재물 (단, 터널, 터널내부의 파이프, 파이프 내 수용물, 전기시설, 기초토목공사는 포함)</li>
                                <li class="tyep-dash">- 해상재물</li>
                                <li class="tyep-dash">- 운송 중 상품 또는 재물</li>
                                <li class="tyep-dash">- 가공, 생산/제조 과정 중 투입된 촉매 및 소모성 재료</li>
                            </ul>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>제 1부문 (재물위험담보)</h3>

                            <ul>
                                <li class="tyep-dash">- 노동자의 철수, 태업, 조업중단</li>
                                <li class="tyep-dash">- 지면침하, 하강, 산사태, 토지의 수축, 팽창, 침식</li>
                                <li class="tyep-dash">- 마모, 마멸, 점진적 악화, 부식, 침식</li>
                                <li class="tyep-dash">- 발효, 증발, 중량감소, 오염, 품질의 변화</li>
                                <li class="tyep-dash">- 기계장치, 전기장치, 전자기기 등의 조작실패, 운전불량, 교착, 붕괴, 파열</li>
                                <li class="tyep-dash">- 전류단락, 자체발열, 누전, 과전류, 과부하, 과전압</li>
                                <li class="tyep-dash">- 기타 약관상 명기된 보상하지 않는 손해</li>
                            </ul>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>제 2부문 (기계위험담보)</h3>

                            <ul>
                                <li class="tyep-dash">- 화재, 소화, 낙뢰, 물리적 폭발</li>
                                <li class="tyep-dash">- 항공기 및 항공기구 또는 그로부터의 낙하물</li>
                                <li class="tyep-dash">- 건물의 도괴</li>
                                <li class="tyep-dash">- 절도, 협박행위</li>
                                <li class="tyep-dash">- 자재의 소모, 기계부품의 소모 또는 마모, 녹</li>
                                <li class="tyep-dash">- 보일러 스케일, 침전물의 발생</li>
                                <li class="tyep-dash">- 도색 또는 광태표면의 긁힘</li>
                                <li class="tyep-dash">- 화학적 또는 대기조건으로 인한 부식, 악화 등</li>
                                <li class="tyep-dash">- 성능시험 완료 후 적정 기간 동안 설계용량 100%로 운전전의 손해 및 시운전기간중의 사고관련 손해</li>
                                <li class="tyep-dash">- 안전한계치를 초과한 시운전, 고의적 과부하, 실험행위로 초래된 비정상적 상태에 의해 야기된 손해</li>
                                <li class="tyep-dash">- 사용손실, 결과적 손해</li>
                                <li class="tyep-dash">- 지진, 조수, 침하, 산사태, 태풍, 화산폭발, 기타의 천재지변, 홍수, 범람, 수조장치의 누수</li>
                                <li class="tyep-dash">- 고의적 행위, 고의적 태만</li>
                                <li class="tyep-dash">- 누출, 오염에 기인한 손해 및 관련한 제거, 중화, 청소비용</li>
                                <li class="tyep-dash">- 보험계약체결당시 보험자에게 미고지한 피보험자가 인지하고 있는 결함 및 하자에 기인한 손해</li>
                            </ul>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>제 3부문 (기계휴지위험담보)</h3>

                            <ul>
                                <li>다음의 원인에 의한 조업의 중단 또는 휴지관련 손해</li>
                                <li class="tyep-dash second">- 건물, 구축물의 건축 또는 수리규제 법률</li>
                                <li class="tyep-dash">- 지방자치단체, 국가기관의 명령</li>
                                <li class="tyep-dash">- 리스, 면허, 계약 또는 주문의 중지, 소멸 또는 취소</li>
                                <li class="tyep-dash">- 손해를 입은 재물의 재축, 재조달 또는 조업의 재개, 계속과 관련 동맹파업자 또는 타인에 의해 증권상 명기된 구내에서 조업이 중단되어 증가한 손해</li>
                                <li class="tyep-dash">- 공사과정 중 작업에 기인한 공사지연</li>
                            </ul>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>제 4부문 (배상책임위험 담보)</h3>

                            <ul>
                                <li class="tyep-dash">- 피보험자의 고의</li>
                                <li class="tyep-dash">- 계약상 가중배상책임</li>
                                <li class="tyep-dash">- 법률상의 근로자재해보상배상책임</li>
                                <li class="tyep-dash">- 피보험자의 근로자의 업무수행에 기인한 신체장애</li>
                                <li class="tyep-dash">- 오염배상책임</li>
                                <li class="tyep-dash">- 피보험자관련 항공기, 자동차, 선박관련 배상책임</li>
                                <li class="tyep-dash">- 인격침해 및 광고침해</li>
                                <li class="tyep-dash">- 징벌적 벌과금</li>
                                <li class="tyep-dash">- 기타 약관상 규정된 면책위험에 기인한 손해</li>
                            </ul>
                        </div>
                    </div>

                    <p class="caution">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</p>
                </div>

                <div class="panel instr">
                    <!-- /** 가입 유의 사항 -->
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