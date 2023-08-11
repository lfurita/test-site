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
                <input type="radio" class="checkbox menu2" id="menu2" name="menu" checked/>
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
        <h2>생산물 배상 책임 보험</h2>
        <p>
            제조, 판매, 공급, 시공한 생산물의 결함으로 인한
            우연한 사고로 인하여 발생한 제3자의 대인/대물에
            대한 민사상 배상책임 손해 담보
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

                            <p class="ttl">상품 가입의 필요성</p>
                            <p>
                            소비자우선주의 대두 : 소비자의식수준 향상, 제조자의 책임 강화, 기업의 안정된 경영의 유지, 상품의 선전효과 및 기업의 국제경쟁력 강화 손해배상책임 청구와 관련한 소송업무의 대행
                            </p>
                            <p>※ 보험기간 종료 시 만기환급금이 없는 순수보장성 보험입니다.</p>
                        </div>
                    </div>

                    <div class="short">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>가입 대상</h3>
                            
                            <p>제조(수출)업자(완성품제조, 부품제조, 원료제조 등), 수입업자, 표시제조업자(OEM제조자, PB(Private Brand) 유통업자), 판매업자, 대형마트 및 홈쇼핑 납품업체, 상표권자 등</p>
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

                            <p>피보험자가 피해자에게 지급한 법률상 손해배상금</p>
                            <p>손해방지비용(사고가 발생한 후 손해의 확대를 방지하거나 경감하는데 소요된 비용)</p>
                            <p>피보험자가 미리 회사의 동의를 받아 지급한 소송비용, 변호사 비용, 중재, 화해, 조정에 관한 비용</p>
                            <p>증권상 보상한도액 내의 금액에 대한 공탁보증보험료</p>
                            <p>피보험자 협력비용</p>
                        </div>
                    </div>

                    <div class="short flex-start">
                        <div class="icon-area">
                            <i class="icon-info"></i>
                        </div>

                        <div class="conts">
                            <h3>주요특약</h3>

                            <ul>
                                <li class="title">판매인 특별약관</li>
                                <li class="type-dash">- 대리점과 같은 해당 제품의 판매인을 피보험자로 추가함으로써 제조업자와 동일한 보상을 받을 수 있도록 함</li>

                                <li class="title">보험료정산 특별약관</li>
                                <li class="type-dash">- 신규사업자나 최근 3년 동안 한해라도 매출액 변동이 20% 이상인 경우 보험기간 종료 후 보험료 정산해 드림</li>

                                <li class="title">효능불발휘 부담보 특별약관</li>
                                <li class="type-dash">- 의약품, 농약, 식품, 화장품, 비료, 사료, 기타에 적용되며, 직•간접을 불문하고 생산물이 보증된 효능, 성능, 기능을 발휘하지 못함으로써 발생하는 손해는 보상 제외</li>
                            </ul>
                        </div>
                    </div>
                    <p class="prctn">※ 위 보상하는 내용은 보험사마다 차이가 발생할 수 있으며 자세한 내용은 보험사 약관을 참조하시길 바랍니다.</p>
                </div>

                <div class="panel loss">
                    <h2>주요 보상하지 않는 손해</h2>

                    <ul>
                        <li class="title">기타사항</li>
                        <li class="type-dash">- 고의나 중과실로 법령을 위반한 경우 (행적규칙 등 하부규정포함)</li>
                        <li class="type-dash">- 벌과금 및 징벌적 손해에 대한 배상책임</li>

                        <li class="title">계약상의 가중책임</li>
                        <li class="type-dash">- 환경오염에 대한 배상책임</li>
                        <li class="type-dash">- 생산물자체, 작업자체 손해</li>
                        <li class="type-dash">- 생산물의 회수, 검사, 수리 또는 대체비용</li>
                        <li class="type-dash">- 생산물 고유의 흠, 마모, 찢어짐, 점진적인 품질하락에 대한 배상청구</li>
                        <li class="type-dash">- 티끌, 먼지, 석면, 분진, 소음, 전자파, 전자장으로 생긴 손해</li>
                        <li class="type-dash">- 효능, 성능, 기능의 불발휘 등 해당 특별약관의 규정에 따릅니다.</li>

                        <li class="title">기타사항</li>
                        <li class="type-dash">- 보험사고가 생긴 것을 안 때는 지체 없이 보험회사에 알려야하고 손해방지와 경감에 힘써야 합니다. 이를 게을리하여 손해가 증가된 때에는 그 증가된 손해는 보상하여 드리지 않습니다.</li>
                        <li class="type-dash">- 같은 위험을 담보하는 다른 계약이 있을 경우 그 다른 보험계약과 함께 보험금을 비례 보상합니다.</li>
                        
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