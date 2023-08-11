<?php
$menuNo=[1,2,4];
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/header.php";
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/sub-visual.php";
?>
<div class="contents">
    <div class="submenu">
        <div class="radio-box">
            <label class="subtab" onclick="location.href='product_04_01.php'">
                <input type="radio" class="checkbox menu1" id="menu1" name="menu" checked/>
                <div class="check">
                    <i class="icon submenu0101"></i>
                </div>
                <span>근로자재해보장책임(국내)</span>
            </label>
        </div>

        <div class="radio-box" onclick="location.href='product_04_02.php'">
            <label class="subtab">
                <input type="radio" class="checkbox menu2" id="menu2" name="menu" />
                <div class="check">
                    <i class="icon submenu0102"></i>
                </div>
                <span>근로자재해보장책임(해외)</span>
            </label>
        </div>

        <div class="radio-box" onclick="location.href='product_04_03.php'">
            <label class="subtab">
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" />
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>근로자재해보장책임(선원)</span>
            </label>
        </div>

        <div class="radio-box" onclick="location.href='product_04_04.php'">
            <label class="subtab">
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" />
                <div class="check">
                    <i class="icon submenu0103"></i>
                </div>
                <span>직업훈련생재해보상책임</span>
            </label>
        </div>
    </div>

    <section class="title">
        <h2>근로자재해보장책임보험(국내)</h2>
        <p>
            근로자를 고용하고 있는 사업주(사용자)를 위한 보험으로 대한민국 내의 사업장을 대상으로 하며, 고용된
            근로자 (상용 및 일용)가 업무 수행 중에 업무에 기인한 재해를 입었을 경우 이에 따른 재해보상을 행함으로써
            사업주가 입게 되는 손해를 보상하는 보험
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

                            <p class="type-dot">재해보상책임담보 특별약관 (Workmen’s Compensation) 과 사용자배상책임담보 특별약관 (Employer’s Liability) 두 가지의 보상형태로 나누어져 있습니다.</p>
                            <p class="type-dot">재해보상책임담보와 재해보상확장담보가 기본이 되어 산재(산업재해 보상보험)의 담보 수준과 동일하게 담보합니다.</p>
                            <p class="type-dot">사용자배상책임담보 특별약관에서는 산재에서 담보하는 범위 이상의 배상 책임이 사용자에게 발생하였을 경우, 이로 인한 합의금이나 소송 비용을 담보합니다.</p>
                            <p class="type-dot">대부분의 업체는 산재 의무 가입대상 이므로, 재해보상(WC)을 제외한 사용자배상책임(EL) 만을 가입합니다.</p>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-mmbrs"></i>
                        </div>

                        <div class="conts">
                            <h3>가입 대상</h3>

                            <p class="type-dot">근로자를 고용하고 있는 모든 사용자(사업주)는 근재보험가입 가능하나 산재보험 의무가입 대상업체인 경우는 재해보상책임담보특약(WC)은 가입불가</p>
                            <p class="type-dot">또한, 일정규모이상이 되는 업체는 근로복지공단에서 운영하는 산재보험에 강제 가입</p>
                            <p class="type-dot">상시 1인 이상의 근로자를 사용하는 전사업장은 민영손해보험사에서 재해보상담보부분의 인수 가능성이 희박</p>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-mmbrs"></i>
                        </div>

                        <div class="conts">
                            <h3>보험가입 시 필요사항</h3>

                            <ul>
                                <li>보험가입 시 계약자가 보험자에게 알려야 할 내용은 아래와 같습니다.</li>

                                <li class="title">연간 단위 가입 시</li>
                                <li class="type-dot">사업자 등록증 사본</li>
                                <li class="type-dot">임금 산출 내역서(전년도 손익 계산서, 전년도 공사(제조)원가 명세서)</li>
                                <li class="type-dot">산재 보험 보험료 신고서</li>
                                
                                <li class="title">공사 건별 가입 시</li>
                                <li class="type-dot">사업자 등록증 사본</li>
                                <li class="type-dot">인건비 내역서</li>
                                <li class="type-dot">공사(하도급)계약서</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel grnt">
                    <h2>주요 보상하는 손해</h2>

                    <h3 class="title">주요보장내용</h3>
                    <ul>
                        <li class="type-dot">
                            <strong>손해배상금</strong>
                            <ul>
                                <li>근로기준법 또는 산재보험법에서 보상 받을 수 있는 금액을 초과하는 법률상 손해 배상책임액(위자료 및 상실수익)을 약정한 보상한도액 범위 내에서 보상하여 드립니다.</li>
                            </ul>
                        </li>
                        <li class="type-dot">
                            <strong>소송비용</strong>
                            <ul>
                                <li>재해를 입은 근로자 또는 그 유족이 소송을 제기한 경우, 또는 조정을 할 경우에 그에 필요한 비용이나 변호사 보수 등의 소송비용도 보상하여 드립니다.</li>
                            </ul>
                        </li>
                        <li class="type-dot">
                            <strong>협력비용</strong>
                            <ul>
                                <li>피보험자(사용자)가 보험회사의 요청에 의거 보험회사에 협력하기 위하여 지출한 비용도 보상하여 드립니다.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>특별약관보상내용</strong>
                            <ul>
                                <li class="type-dot">재해보상책임담보 특별약관(WC) : 근로기준법 상의 제보상을 시행합니다.</li>
                                <li class="type-dot">재해보상확장담보 추가 특별약관 : WC의 보상내용을 산재보험법 수준으로 확장하여 보상합니다.</li>
                                <li class="type-dot">사용자배상책임담보 특별약관(EL) : 재해보상책임 특별약관 및 재해보상관련 법령에 따라 보상되는 재해보상 금액을 초과하는 법률상 배상책임을 보상합니다.</li>
                            </ul>
                        </li>
                        <li class="subsc">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</li>
                    </ul>
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
                                <li><strong>근재보험(국내)에서 보상하지 않는 대표적인 손해는 다음과 같습니다.</strong></li>
                                <li class="type-dot">계약자, 피보험자 또는 이들의 법정대리인의 고의나 법령위반(고의 또는 중과실로 법령을 위반하고 법령위반사실과 보험사고간 인과관계가 있는 경우에 한합니다)으로 인한 손해</li>
                                <li class="type-dot">근로자의 고의 또는 범죄행위로 생긴 손해. 이 경우 그 근로자가 입은 손해에 한합니다.</li>
                                <li class="type-dot">근로자가 도로교통법 제43조에서 정하는 무면허운전 또는 도로교통법 제44조에서 정하는 음주운전 중에 생긴 손해. 이 경우 그 근로자가 입은 손해에 한합니다.</li>
                                <li class="type-dot">피보험자의 원수급인, 하도급인 및 그들의 근로자에게 생긴 손해. 그러나 보험계약을 맺을 때에 미리 정하여 이에 해당하는 보험료를 받았을 때에는 보상하여 드립니다.</li>
                                <li class="type-dot">피보험자가 아닌 다른 자연인 또는 법인에 의하여 사실상 고용되어 있는 동안에 생긴 손해 지진, 분화, 홍수, 해일 또는 이와 비슷한 천재지변으로 인한 손해</li>
                                <li class="type-dot">전쟁, 침략, 교전, 외국의 무력행위, 혁명, 내란, 테러, 반란, 계엄령선포, 폭동, 소요, 기타 이와 비슷한 사태로 생긴 손해</li>
                                <li class="type-dot">핵연료물질 또는 핵연료 물질에 의하여 오염된 물질의 방사성, 폭발성 그 밖에 유해한 특성 또는 이들의 특성에 의한 사고로 생긴 손해</li>
                                <li class="type-dot">위 제8호 이외의 방사선을 쬐는 것 또는 방사능 오염으로 인한 손해</li>
                            </ul>
                        </div>
                    </div>

                    <p class="prctn">※ 위 보상하지않는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</p>
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