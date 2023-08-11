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
                <input type="radio" class="checkbox menu3" id="menu3" name="menu" checked/>
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
        <h2>개인정보 배상 책임 보험</h2>
        <p>
            개인정보의 유출로 인한 심각한 위기상황을
            순조롭게 극복할 수 있도록 손해배상책임 및 위기관리비용 보상
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

                            <p>개인정보보호배상책임보험은 회사가 소유·사용·관리하는 개인정보의 유출에 기인하는 회사의 법률상 손해배상책임을 보상하는 보험으로, 내부직원의 범행, 순간의 실수, 해킹 등 부정 액세스, 바이러스, 업무 위탁처로부터의 유출 등 다양한 경로로 발생하는 각종 개인정보 유출로 인하여 기업에 발생할 수 있는 위험에 대비하여 기업의 각종 비용을 전천후로 보상하는 신개념의 보험입니다.</p>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>가입 대상</h3>

                            <ul>
                                <li>아래 조건에 모두 해당 시 필수가입 대상</li>
                                <li>
                                    ① 업종에 관계없이 고객의 개인정보를 PC에 저장 또는 출력하여 보관<br>
                                    ② 지난해 사업연도 매출액이 5천만원 이상<br>
                                    ③ 지난해 4분기(10월~12월) 저장하고 있는 개인정보가 일평균 1천개 이상
                                </li>

                                <li class="title">과태료</li>
                                <li>1차 적발 400만원, 2차 적발 800만원, 3차 이상 1,600만원</li>

                                <li class="title">관련 법령</li>
                                <li>개인정보보호법 제39조의 9</li>
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
                            <h3>기본</h3>

                            <p>법률상 손해배상책임: 피해자에게 지급한 법률상 손해배상금 및 방어비용(소송비용, 변호사비용, 중재, 화해 또는 조정에 관한 비용)보상</p>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>주요 선택가능 특약</h3>

                            <p>위기관리 컨설팅서비스 및 비용 보상(특약) : 사고 발견 초기에 위기관리컨설팅 전문가를 통한 효과적인 대응 방안 확보로 회사 명성 및 브랜드가치 하락, 주가하락 및 피해자 집단소송 등을 사전에 예방하여 손실을 최소화하는 서비스</p>
                            <p>수행 및 비용 보상 - 피해자, 미디어, 주주, 행정 대응 위주
                            <p>위기관리 실행비용 보상(특약) : 변호사 상담비용, 위로금/위문품 및 사과문작성 송부비용, 사고원인 조사비용, 콜센터 위탁비용, 기자회견 및 사죄광고비용</p>
                        </div>
                    </div>
                    <p class="prctn">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</p>
                </div>

                <div class="panel loss">
                    <h2>주요 보상하지 않는 손해</h2>

                    <ul>
                        <li class="title">아래의 사유로 인한 손해는 보상하여 드리지 아니합니다.</li>
                        <li class="type-dash">- 피보험자나 피보험자의 임원 또는 임원이었던 사람 (피보험자의 직원이나 직원이었던 사람을 제외)의 고의 또는 범죄행위</li>
                        <li class="type-dash">- 피보험자의 직원이나 직원이었던 사람의 고의 또는 범죄행위에 기인하여 해당 직원이나 직원이었던 사람을 상대로 제기된 손해배상청구</li>
                        <li class="type-dash">- 신체장해(질병 또는 사망 포함)</li>
                        <li class="type-dash">- 초년도 계약의 보험개시일 이전에 발견된 개인정보유출로 인한 사고 및 손해</li>
                        <li class="type-dash">- 이 계약의 보험개시일 이전에 피보험자에 대한 손해배상청구가 제기될 우려가 있는 상황을 피보험자가 알고 있었던 경우, 그 상황의 원인이 되는 개인정보유출에 기인한 배상청구</li>
                        <li class="type-dash">- 피보험자가 “파견근로자보호 등에 관한 법률”에 따라 근로자파견사업을 영위하는 경우, 파견 근로자가 파견된 사업장에서 행한 행위에 기인해 피보험자에게 제기된 손해배상청구(특약으로 담보가능)</li>
                        <li class="type-dash">- 원인의 직간접을 불문하고, 신용카드번호, 계좌번호, 비밀번호, 인증번호 등(이에 한정되지 아니합니다) 기타 일체의 신용정보누출로 인하여, 그러한 정보가 부정하게 사용된 것에 의해 피보험자 이외의 사람에게 경제적 손해가 생긴 것에 기인하는 손해배상청구 (특약으로 담보가능)</li>

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