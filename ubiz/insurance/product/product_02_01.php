<?php
$menuNo=[1,2,2];
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/header.php";
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/sub-visual.php";
?>
<div class="contents">
    <div class="submenu">
        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_02_01.php'">
                <input type="radio" class="checkbox menu1" id="menu1" name="menu" checked/>
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
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" />
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>임원 배상</span>
            </label>
        </div>
    </div>

    <section class="title">
        <h2>영업 배상 책임 보험</h2>
        <p>
            기업활동으로 제3자의 대인/대물에 피해를 입혀 
            법률(민사)적인 배상책임을 부담함으로써 입은 손해 담보
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
                                기업활동을 통하여 타인의 신체나 재산에 피해를 입혀 손해배상을 부담해야 할 위험에 대한 대비책으로서 우연한 사고로 인하여 타인의 신체에 상해를 입히거나 타인의 재물을 손괴하여 법률(민사)상의 배상책임을 부담함으로써 피보험자가 입은 손해를 보상하는 보험입니다.<br>
                                업종별로 아래의 특별약관을 첨부하여야 구체적인 담보를 받을 수 있습니다.
                            </p>
                            <p>※ 보험기간 종료 시 만기환급금이 없는 순수보장성 보험입니다.</p>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-mmbrs"></i>
                        </div>

                        <div class="conts">
                            <h3>가입 대상</h3>

                            <p>사무실, 오피스텔, 백화점, 학교, 병원, 판매시설</p>
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
                            <h3>시설소유(관리)자 배상책임)</h3>

                            <p class="ttl">담보내용</p>
                            <p>피보험자가 소유, 사용, 관리하는 시설과 그 시설을 본래의 용법에 따라 이용하는 중에 발생하는 사고로 제3자에게 신체장해나 재물손해를 입힘으로써 부담하는 법률(민사)상 배상책임을 보상하는 보험</p>
                            <p>구내치료비 추가특별약관</p>
                            <p>피보험자의 시설 구내에서 발생한 제3자의 신체상해사고에 대하여 피보험자에게 손해배상책임이 없을 경우에도 신체상해를 입은 자의 손해액 중 치료비 보상</p>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>도급업자 배상책임</h3>

                            <p>피보험자가 수행하는 작업(공사)의 잘못이나, 그 작업을 위해 소유, 사용 또는 관리하는 시설로 생긴 우연한 사고로 타인의 신체나 재산에 손해를 입힘으로써 피보험자가 부담하게 되는 법률상 손해배상책임을 보상하는 보험</p>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>임차자 배상책임</h3>

                            <p>피보험자가 임차한 부동산에 생긴 우연한 사고로 당해 부동산에 대하여 정당한 권리를 가지는 자(임대인)에게 부담하는 법률상 손해배상책임을 보상하는 보험</p>
                        </div>
                    </div>
                    
                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>학교경영자 배상책임</h3>

                            <p>학교경영자 배상책임보험은 시설소유관리자 배상책임보험에 의한 인수대상인 학교의 구체적 위험담보에 적합하도록 특화한 보험으로 교실, 체육관, 강당, 도서관, 운동장과 같이 학생의 교육과 일상적, 직접적으로 관련된 학교시설과 학교업무에 기인된 사고로 인한 학생이나 일반 제3자에 대한 배상책임을 보상하는 보험</p>
                        </div>
                    </div>
                    
                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>주차장 배상책임</h3>

                            <p>피보험자가 소유, 사용, 관리하는 주차시설과 그 시설의 용도에 따른 주차업무 수행 중 주차를 목적으로 수탁받은 차량이나 타인에게 입힌 법률상 배상책임을 보상하는 보험</p>
                        </div>
                    </div>
                    
                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>건설기계업자 배상책임</h3>

                            <p>피보험자가 소유, 사용, 관리하는 건설기계 및 그 건설기계의 용도에 따른 업무의 수행 중 생긴 우연한 사고로 인하여 제3자에게 입힌 법률상 배상책임을 보상하는 보험</p>
                        </div>
                    </div>
                    
                    <p class="prctn">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</p>
                </div>

                <div class="panel loss">
                    <h2>주요 보상하지 않는 손해</h2>

                    <ul>
                        <li>1.계약자, 피보험자 또는 이들의 법정대리인의 고의로 생긴 손해에 대한 배상책임</li>
                        <li>2.전쟁, 혁명, 내란, 사변, 테러, 폭동, 소요, 노동쟁의 기타 이들과 유사한 사태로 생긴 손해에 대한 배상책임</li>
                        <li>3.지진, 분화, 홍수, 해일 또는 이와 비슷한 천재지변으로 생긴 손해에 대한 배상책임</li>
                        <li>4.피보험자가 소유, 사용 또는 관리하는 재물이 손해를 입었을 경우에는 그 재물에 대하여 정당한 권리를 가진 사람에게 부담하는 손해에 대한 손해배상책임</li>
                        <li>5.피보험자와 타인 간에 손해배상에 관한 약정이 있는 경우 그 약정에 의하여 가중된 손해배상책임</li>
                        <li>6.핵연료물질 또는 핵연료물질에 의하여 오염된 물질의 방사성, 폭발성 그 밖의 유해한 특성 또는 이들의 특성에 의한 사고로 생긴 손해에 대한 배상책임</li>
                        <li>7.위 제6호 이외의 방사선을 쬐는 것 또는 방사능 오염으로 인한 손해</li>
                        <li>8.티끌, 먼지, 석면, 분진 또는 소음으로 생긴 손해에 대한 배상책임</li>
                        <li>9.전자파, 전자장(EMF)으로 생긴 손해에 대한 배상책임</li>
                        <li>10.벌과금 및 징벌적 손해에 대한 배상책임 등 보상하지 않는 손해는 해당 특별약관의 규정에 따릅니다.</li>

                        <li class="title">기타사항</li>
                        <li>보험사고가 생긴 것을 안 때는 지체 없이 보험회사에 알려야하고 손해방지와 경감에 힘써야 합니다. 이를 게을리하여 손해가 증가된 때에는 그 증가된 손해는 보상하여 드리지 않습니다.같은 위험을 담보하는 다른 계약이 있을 경우 그 다른 보험계약과 함께 보험금을 비례 보상합니다.</li>
                        
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