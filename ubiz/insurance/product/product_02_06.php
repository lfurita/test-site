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
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" checked/>
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
        <h2>임상시험 배상 책임 보험</h2>
        <p>
            임상시험중에 발생하는 피보험자의 배상책임 손해액에
            대하여 과실상계없이 무과실로 보상하는 보험
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

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>상품 정보</h3>

                            <p>임상시험을 수행하는데 있어, 임상시험에 참여중인 피 시험자에게 우연히 발생한 사고로 신체상에 손해가 발생한 경우 보상하는 보험입니다.</p>

                            <p class="title">보험료 산정</p>

                            <p>피시험자수/ 피시험자의 특성(건강한 성인인지? 임산부 또는 영유아인지?)여부</p>
                            <p class="type-dash">- 임상단계<br>
                                대상질환/의약품종류에 따라 리스크가 다르므로 보험료가 달라지거나 인수가능여부 결정. 유행성 전염병 백신 시험의 경우는 인수가 어려울 수 있음
                            </p>
                            <p class="type-dash">- 보험기간</p>
                            <p class="type-dash">- 보상한도(통상적으로 1~3억 내외로 가입)/공제금액</p>

                            <p>※ 보험기간 종료 시 만기환급금이 없는 순수보장성 보험입니다.</p>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>가입 대상</h3>

                            <p>제약업체, 의료기구 제조업체, 임상시험 또는 연구 대행업체 등</p>
                        </div>
                    </div>
                </div>

                <div class="panel grnt">
                    <h2>주요 보상하는 손해</h2>

                    <ul class="clearfix inb">
                        <li class="type-dot">피험자에 대해 피보험자가 부담하는 보상액과 제반 비용</li>
                        <li class="type-dot">피험자가 제시한 보상액에 동의하지 않고 소송을 제기 하여 피보험자가 법률상 배상책임을 부담하는 경우, 그 배상책임액과 소송비용을 지급함.</li>
                        <li class="type-dot">임상시험은 약사법 시행령 제31조 (임상시험계획의 승인 등), 제 32조 (임상시험의 실시기준 등)에 적합한 것임을 전제로 합니다.
                            <ul class="number">
                                <li class="type-numb">1) 법률상 손해배상금<br>
                                    보상한도 내에서 피보험자가 부담해야 하는 법률상 손해배상금 또는 법원의 판결 前 합의금
                                </li>
                                <li class="type-numb">2) 방어비용<br>
                                사전에 보험회사의 동의를 받아 지급한 소송비, 변호사비, 중재, 화해 또는 조정에 관한 비용
                                </li>
                            </ul>
                        </li>

                        <li class="subsc">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</li>
                    </ul>
                </div>

                <div class="panel loss">
                    <h2>주요 보상하지 않는 손해</h2>

                    <ul class="clearfix inb">
                        <li class="type-dot">피험자 이외의 사람(대조군 제외)에게 입힌 신체장해손해에 대한 배상책임</li>
                        <li class="type-dot">임상시험 동의서를 받지 아니한 피험자에게 입힌 신체장해손해에 대한 배상책임</li>
                        <li class="type-dot">연구실험 중에 있는 의약품이나 다른 생성물질이 의도된 또는 어떤 다른 효능을 갖지 못한 것에 대한 손해</li>
                        <li class="type-dot">임상시험 동의서를 받지 아니한 피험자에게 입힌 신체장해손해에 대한 배상책임</li>
                        <li class="type-dot">이 보험계약은 임상시험 의뢰자와 임상시험 실시기관 간에 체결된 임상시험 계약서 및 식품의약품안전청에 보고 및 식품의약품 안전청이 승인한 임상시험 계약서를
                            근거로 체결된 것입니다. 따라서 임상시험이 임상시험 계약서 및 임상시험계획서에 위배되는 경우 사고의 원인 여부에 관계없이 어떠한 경우에도 보상하지 아니합니다.</li>
                        <li class="type-dot">이 보험 개시 이전 다른 보험에 고지된 사정 또는 사고로인한 배상청구</li>
                        <li class="type-dot">기타 약관에서 정한 보상하지 않는 손해에 대한 배상책임</li>

                        <li class="subsc">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</li>
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