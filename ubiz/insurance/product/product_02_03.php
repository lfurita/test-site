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
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" checked/>
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
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" />
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>임원 배상</span>
            </label>
        </div>
    </div>

    <section class="title">
        <h2>전문인 배상 책임 보험</h2>
        <p>
            각종 전문인의 의무위반으로 부담할 수 있는 
            손해배상금 및 방어 비용 보상
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

                            <p>미디어, 테크놀로지, 설계/감리, 부동산, 아웃소싱 업체, 교육기관 등 전문인의 태만, 과오, 허위진술, 선의의 위임 권한 위반 및 비밀유지 위반 등과 같은 의무위반으로 제 3자가 제기한 손해배상청구로 인한 손해배상금 및 방어비용을 보상합니다.</p>
                            <p>이 외의 기타 전문인 역시 설계 가능합니다.</p>

                            <p>※ 보험기간 종료 시 만기환급금이 없는 순수보장성 보험입니다.</p>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>가입 대상</h3>
                            
                            <p>의사, 변호사, 회계사, 간병인, 미용사, 건축가, 방송전문직, 안마사, 공인중계사 등</p>
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
                            <h3>기본</h3>

                            <ul>
                                <li class="title">정보배상책임</li>
                                <li class="type-dash">1) 전문인배상책임: 전문인의 의무위반으로 인한 손해배상책임</li>
                                <li class="type-dash">2) 지적 재산권: 지적 재산권(특허 및 영업비밀 제외)의 비고의적 침해로 인한 손해배상책임<br>
                                    (의무위반: 태만, 과오, 허위진술, 오도하는 진술, 선의의 위임 권한 위반 및 비밀유지 위반 등)
                                </li>
                                <li>3) 명예훼손: 피보험자가 행한 명예훼손(비고의적 비방 또는 중상)으로 인한 손해배상책임</li>
                                <li>4) 직원의 사기/부정직 행위: 직원의 사기 및 부정직 행위로 인한 회사의 손해배상책임(행위자 본인 제외)</li>
                                <li>5) 방어비용: 피보험자가 손해배상청구에 대한 방어를 행하는데 필요한 비용</li>
                            </ul>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>주요 선택가능 특약</h3>

                            <ul>
                                <li class="title">정보배상책임</li>
                                <li class="type-dash">1) 법정출두비용: 대표자, 동업자 또는 임원인 피보험자 및 직원의 법정 출두비용</li>
                                <li class="type-dash">2) 문서분실담보: 피보험자가 법적인 책임을 가지는 제3자 문서를 파기, 훼손, 분실, 삭제 또는 잘못 보관함에 기인하여 제기된 손해배상청구로 발생되는 모든 손해배상금</li>
                            </ul>
                        </div>
                    </div>
                    <p class="prctn">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</p>
                </div>

                <div class="panel loss">
                    <h2>주요 보상하지 않는 손해</h2>

                    <ul>
                        <li class="title">아래의 사유로 인한 손해는 보상하여 드리지 아니합니다.</li>
                        <li class="type-dash">- 고의나 중과실로 법령을 위반한 경우 (행적규칙 등 하부규정포함)</li>
                        <li class="type-dash">- 벌과금 및 징벌적 손해에 대한 배상책임</li>

                        <li class="title">계약상의 가중책임</li>
                        <li class="type-dash">- 독점금지 위반, 거래제한 또는 불공정 경쟁과 관련된 손해배상청구</li>
                        <li class="type-dash">- 신체상해에 기인된 손해배상청구</li>
                        <li class="type-dash">- 테크놀로지 제품/ 전문인 업무의 사전견적을 정확하게 산출하지 못함에 기인한 손해배상청구</li>
                        <li class="type-dash">- 고용 관련 관행, 괴롭힘 또는 차별에 기인한 손해배상청구</li>
                        <li class="type-dash">- 피보험자의 지급불능 또는 도산에 기인한 손해배상청구</li>
                        <li class="type-dash">- 사전에 내용과 출처를 알지 못하는 상태에서 피보험자의 홈페이지, 게시판, 대화방에 공표 또는 게재된 자료에 기인한 손해배상청구</li>
                        <li class="type-dash">- 피보험자가 참가하는 조직 또는 합작사업이라는 이름 하에 실시한 업무에 기인한 손해배상청구</li>
                        <li class="type-dash">- 보험 개시 전에 제기, 진행 혹은 제기될 것을 예상할 수 있었던 정황에 기인한 손해배상청구</li>

                        <li class="title">피보험자의 부채 또는 피보험자에 의한 채무 보증에 기인한 손해배상청구</li>
                        <li class="type-dash">- 테크놀로지제품의 디자인 또는 생산결함에 기인된 손해배상청구</li>
                        <li class="type-dash">- 범죄행위/고의에 기인한 손해배상청구</li>
                        <li class="type-dash">- 특허권 또는 영업비밀의 사용허락 계약위반 및 침해에 기인한 손해배상청구</li>
                        <li class="type-dash">- 오염 / 전쟁 및 테러행위에 기인한 손해배상 청구</li>
                        
                        <li class="title">기타사항</li>
                        <li class="type-dash">- 보험사고가 생긴 것을 안 때에는 지체 없이 보험회사에 알려야하고 손해방지와 경감에 힘써야 합니다. 이를 게을리 하여 손해가 증가된 때에는 그 증가된 손해는 보상하여 드리지 않습니다.</li>
                        
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