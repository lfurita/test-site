<?php 
$menuNo=[0,0];
include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/header.php"; 
?>

    <!-- /**** 간편비교신청 start -->
    <div class="wow fadeInRight easy-apply">
        <form action="">
            <div class="inner">
                <h3>간편하게 로그인 없이!</h3>
                <p>
                    길고 긴 로그인 절차 없이 간편하게<br>
                    기업보험을 신청하세요
                </p>

                <ul class="clearfix inb">
                    <li>
                        <div class="select-box">
                            <select name="" id="">
                                <option value="">필요보험선택 *</option>
                                <option value="">의무보험</option>
                                <option value="">배상책임보험</option>
                                <option value="">화재/재산/동산보험</option>
                                <option value="">근로자재해보험</option>
                                <option value="">해상/적하/운송보험</option>
                                <option value="">자동차/건설기계보험</option>
                                <option value="">건설공사/기계/기술보험</option>
                                <option value="">기타</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <input type="text" class="" name="" placeholder="">
                        <label for="">이메일 주소 *</label>
                    </li>
                    <li>
                        <input type="text" class="" name="" placeholder="">
                        <label for="">핸드폰 번호 *</label>
                    </li>
                    <li>
                        <input type="text" class="" name="" placeholder="">
                        <label for="">이름 *</label>
                    </li>
                    <li>
                        <input type="text" class="" name="" placeholder="">
                        <label for="">요청사항</label>
                    </li>
                </ul>

                <div class="apply-bottom">
                    <div class="privacy-agree">
                        <div class="priv-more btn-priv-more">개인정보취급방침 자세히보기</div>
                        <div class="radio-agree">
                            <input id="agree" class="check-box" name="checkbox-group" type="checkbox">
                            <label for="agree" class="check-box-label">동의합니다</label>
                        </div>
                    </div>
                     
                    <a href="" class="button apply">간편 보험 비교 신청하기</a>
                </div>
            </div>
        </form>
    </div>

    <div class="mobile-easy wow fadeInRight">
        <a class="btn-easy" id="btn-easy-apply">
            <img src="img/icon-easy.png">
            간편신청            
        </a>
    </div>

    <div id="easyDownup">
        <div class="downupPopup-content">
            <p>길고 긴 로그인 절차 없이 간편하게 기업보험을 신청하세요.</p>
            <ul class="clearfix inb">
                <li>
                    <div class="select-box">
                        <select name="" id="">
                            <option value="">필요보험선택 *</option>
                            <option value="">의무보험</option>
                            <option value="">배상책임보험</option>
                            <option value="">화재/재산/동산보험</option>
                            <option value="">근로자재해보험</option>
                            <option value="">해상/적하/운송보험</option>
                            <option value="">자동차/건설기계보험</option>
                            <option value="">건설공사/기계/기술보험</option>
                            <option value="">기타</option>
                        </select>
                    </div>
                </li>
                <li>
                    <input type="text" class="" name="" placeholder="">
                    <label for="">이메일 주소 *</label>
                </li>
                <li>
                    <input type="text" class="" name="" placeholder="">
                    <label for="">핸드폰 번호 *</label>
                </li>
                <li>
                    <input type="text" class="" name="" placeholder="">
                    <label for="">이름 *</label>
                </li>
                <li>
                    <input type="text" class="" name="" placeholder="">
                    <label for="">요청사항</label>
                </li>
            </ul>

            <div class="apply-bottom">
                <div class="privacy-agree">
                    <div class="priv-more btn-priv-more">개인정보취급방침 자세히보기</div>
                    <div class="radio-agree">
                        <input id="agree1" class="check-box" name="checkbox-group" type="checkbox">
                        <label for="agree1" class="check-box-label">동의합니다</label>
                    </div>
                </div>
                    
                <a href="" class="button apply">간편 보험 비교 신청하기</a>
            </div>
        </div>
    </div>
    <!-- /**** 간편비교신청 end -->

    <section class="visual-main">
        <div class="swiper visual">
            <div class="swiper-wrapper">
                <!-- /**** Main Visual First -->
                <div class="swiper-slide visual1">
                    <div class="visual-img">visual-img-1</div>

                    <div class="visual-copy">
                        <strong>안전한 기업 운영을 위한</strong>
                        <strong>첫 번째 단추</strong>
                        <!-- <p>보험금청구는 물론 제휴서비스까지!</p> -->
                    </div>
                </div>
                
                <!-- /**** Main Visual Second -->
                <div class="swiper-slide visual2">
                    <div class="visual-img">visual-img-2</div>

                    <div class="visual-copy">
                        <strong>맞춤형 보험으로 비즈니스의</strong>
                        <strong>미래를 안전하게 보장하세요.</strong>
                        <!-- <p>보험금청구는 물론 제휴서비스까지!</p> -->
                    </div>
                </div>
                
                <!-- /**** Main Visual Third -->
                <div class="swiper-slide visual3">
                    <div class="visual-img">visual-img-3</div>

                    <div class="visual-copy">
                        <strong>비지니스를 위한 완벽한 파트너,</strong>
                        <strong>유비즈 기헙보험을 경험해보세요</strong>
                        <!-- <p>보험금청구는 물론 제휴서비스까지!</p> -->
                    </div>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    
    <section class="search">
        <div class="inner">
            <h3 class="wow fadeInLeft" data-wow-delay=".4s">업종 별 맞춤 보험 상품을 찾아보세요.</h3>
            <div class="search-box wow fadeInLeft" data-wow-delay=".8s">
                <input type="text" class="search" name="_keyword" placeholder="#미용실, #노래방, #음식점, #학원" value="">
                <button type="submit" class="seach-btn"><i class="icon-search"></i></button>
            </div>
        </div>
    </section>

    <!-- 보험 상품안내 -->
    <section class="prod-info">
        <div class="inner">
            <h2 class="wow fadeInDown" data-wow-delay=".2s">
                <span>기업 보험 상품안내</span>
            </h2>

            <div class="tab-container">
                <input class="radio" id="riches" name="group" type="radio" checked>
                <input class="radio" id="group" name="group" type="radio">
                <input class="radio" id="lblty" name="group" type="radio">
                <input class="radio" id="workers" name="group" type="radio">
                <input class="radio" id="sea" name="group" type="radio">
                <input class="radio" id="car" name="group" type="radio">
                <input class="radio" id="cnstr" name="group" type="radio">
                <input class="radio" id="etc" name="group" type="radio">
            
                <div class="menu">
                    <label class="tab wow fadeInDown" data-wow-delay=".1s" id="riches-tab" for="riches">
                        <span class="box-icon"><i class="riches"></i></span>
                        <strong>화재/재산/동산</strong>
                    </label>

                    <label class="tab wow fadeInDown" data-wow-delay=".2s" id="group-tab" for="group">
                        <span class="box-icon"><i class="group"></i></span>
                        <strong>단체보험</strong>
                    </label>

                    <label class="tab wow fadeInDown" data-wow-delay=".3s" id="lblty-tab" for="lblty">
                        <span class="box-icon"><i class="lblty"></i></span>
                        <strong>배상책임</strong>
                    </label>
                    
                    <label class="tab wow fadeInDown" data-wow-delay=".4s" id="workers-tab" for="workers">
                        <span class="box-icon"><i class="workers"></i></span>
                        <strong>근로자재해</strong>
                    </label>

                    <label class="tab wow fadeInDown" data-wow-delay=".5s" id="sea-tab" for="sea">
                        <span class="box-icon"><i class="sea"></i></span>
                        <strong>해상/적하/운송</strong>
                    </label>

                    <!-- 
                    <label class="tab wow fadeInDown" data-wow-delay=".6s" id="car-tab" for="car">
                        <span class="box-icon"><i class="car"></i></span>
                        <strong>자동차/건설기계</strong>
                    </label>
                    -->

                    <label class="tab wow fadeInDown" data-wow-delay=".7s" id="cnstr-tab" for="cnstr">
                        <span class="box-icon"><i class="cnstr"></i></span>
                        <strong>건설공사/기계/기술</strong>
                    </label>

                    <!--
                    <label class="tab wow fadeInDown" data-wow-delay=".8s" id="etc-tab" for="etc">
                        <span class="box-icon"><i class="etc"></i></span>
                        <strong>기타보험</strong>
                    </label>
                    -->
                </div>
            
                <div class="panels wow fadeInDown" data-wow-delay=".5s">
                    <div class="panel" id="riches-panel">
                        <div class="title-area">
                            <h3>화재/재산/동산</h3>
                            <p class="first">각 기업의 재산, 설비, 재고 등을 보호하는 상품입니다.</p>
                            <p>
                                <span>보험 가입 시 발생 가능한 자연재해, 화재, 도난 등의 위험으로부터</span>
                                보호를 받을 수 있으며,  이로 인한 손해를 보상받을 수 있습니다.
                            </p>
                            <a href="" class="button more">자세히 보기</a>

                            <div class="img"><img src="img/main/img-right-riches.png" alt="화재/재산/동산"></div>
                        </div>

                        <div class="list-wrap">
                            <div class="box-list">
                                <h4>재산종합보험</h4>
                                <p>화재보험,기계보험, 배상책임보험등을 하나로 통합한 종합보험</p>
                                <img src="img/main/icon-riches-0101.png?n" alt="재산종합보험">
                            </div>
                            
                            <div class="box-list">
                                <h4>일반/공장화재보험</h4>
                                <p>기업의 창고,공장까지 다양한 대상을 그 목적물로 하는 보험</p>
                                <img src="img/main/icon-riches-0102.png?n" alt="일반/공장화재보험">
                            </div>
                            
                            <div class="box-list">
                                <h4>동산종합보험</h4>
                                <p>동산이 우연한 사고로생긴 모든 손해를 보상하는 보험</p>
                                <img src="img/main/icon-riches-0103.png?u" alt="동산종합보험">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="group-panel">
                        <div class="title-area">
                            <h3>단체보험</h3>
                            <p class="first">각 기업의 재산, 설비, 재고 등을 보호하는 상품입니다.</p>
                            <p>
                                <span>보험 가입 시 발생 가능한 자연재해, 화재, 도난 등의 위험으로부터</span>
                                보호를 받을 수 있으며,  이로 인한 손해를 보상받을 수 있습니다.
                            </p>
                            <a href="" class="button more">자세히 보기</a>

                            <div class="img"><img src="img/main/img-right-group.png" alt=""></div>
                        </div>

                        <div class="list-wrap">
                            <div class="box-list">
                                <h4>단체보험</h4>
                                <p>단체보험단체보험</p>
                                <img src="img/main/icon-group-0101.png" alt="단체보험">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="lblty-panel">
                        <div class="title-area">
                            <h3>배상책임</h3>
                            <p class="first">각 기업의 재산, 설비, 재고 등을 보호하는 상품입니다.</p>
                            <p>
                                <span>보험 가입 시 발생 가능한 자연재해, 화재, 도난 등의 위험으로부터</span>
                                보호를 받을 수 있으며,  이로 인한 손해를 보상받을 수 있습니다.
                            </p>
                            <a href="" class="button more">자세히 보기</a>

                            <div class="img"><img src="img/main/img-right-lblty.png" alt="배상책임"></div>
                        </div>
                        
                        <div class="list-wrap">
                            <div class="box-list">
                                <h4>영업배상</h4>
                                <p>기업활동으로 대인/대물에 피해를 입은 손해 담보</p>
                                <img src="img/main/icon-lblty-0101.png?e" alt="영업배상">
                            </div>
                            
                            <div class="box-list">
                                <h4>전문인 배상</h4>
                                <p>전문인의 의무위반으로 부담할 수 있는 손해배상금등 비용 보상</p>
                                <img src="img/main/icon-lblty-0102.png?e" alt="전문인 배상">
                            </div>
                            
                            <div class="box-list">
                                <h4>개인정보 배상</h4>
                                <p>개인정보의 유출로 인한 손해배상책임등 위기관리비용 보상</p>
                                <img src="img/main/icon-lblty-0103.png?e" alt="개인정보 배상">
                            </div>
                            
                            <div class="box-list">
                                <h4>근로자 재해배상</h4>
                                <p>산재/근재보험의 손해배상책임을 짐으로써 부담하는 손해 담보</p>
                                <img src="img/main/icon-lblty-0104.png?e" alt="근로자 재해배상">
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel" id="workers-panel">
                        <div class="title-area">
                            <h3>근로자재해</h3>

                            <p class="first">각 기업의 재산, 설비, 재고 등을 보호하는 상품입니다.</p>
                            <p>
                                <span>보험 가입 시 발생 가능한 자연재해, 화재, 도난 등의 위험으로부터</span>
                                보호를 받을 수 있으며,  이로 인한 손해를 보상받을 수 있습니다.
                            </p>
                            <a href="" class="button more">자세히 보기</a>

                            <div class="img"><img src="img/main/img-right-workers.png?e" alt="근로자재해"></div>
                        </div>
                        <div class="list-wrap">
                            <div class="box-list">
                                <h4>근로자재해보장책임(국내)</h4>
                                <p>대한민국 내의 사업장을 대상으로 업무 수행 중에 손해를 보상하는 보험</p>
                                <img src="img/main/icon-workers-0101.png" alt="근로자재해보장책임(국내)">
                            </div>
                            
                            <div class="box-list">
                                <h4>근로자재해보장책임(해외)</h4>
                                <p>사업장이 해외인 경우를 대상으로 함</p>
                                <img src="img/main/icon-workers-0102.png" alt="근로자재해보장책임(해외)">
                            </div>
                            
                            <div class="box-list">
                                <h4>근로자재해보장책임(선원)</h4>
                                <p>선원이 승무 중 부상등 법률상 손해배상액을 보험자가 보상하여 주는 보험</p>
                                <img src="img/main/icon-workers-0103.png" alt="근로자재해보장책임(선원)">
                            </div>
                            
                            <div class="box-list">
                                <h4>직업훈련생재해보상책임</h4>
                                <p>직업훈련을 받는 훈련생이 훈련 중에 손해등 손해배상 책임액을 보상하는 보험</p>
                                <img src="img/main/icon-workers-0104.png" alt="직업훈련생재해보상책임">
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel" id="sea-panel">
                        <div class="title-area">
                            <h3>해상/적하/운송</h3>
                            <p class="first">각 기업의 재산, 설비, 재고 등을 보호하는 상품입니다.</p>
                            <p>
                                <span>보험 가입 시 발생 가능한 자연재해, 화재, 도난 등의 위험으로부터</span>
                                보호를 받을 수 있으며,  이로 인한 손해를 보상받을 수 있습니다.
                            </p>
                            <a href="" class="button more">자세히 보기</a>

                            <div class="img"><img src="img/main/img-right-sea.png" alt="해상/적하/운송"></div>
                        </div>

                        <div class="list-wrap">
                            <div class="box-list">
                                <h4>적하</h4>
                                <p>운송중에 우연한 사고의 결과로 입게 되는 손실을 보상하는 보험</p>
                                <img src="img/main/icon-sea-0101.png" alt="적하">
                            </div>
                            
                            <div class="box-list">
                                <h4>운송</h4>
                                <p>운송중인 화물의 멸실 및 손상으로 손해를 입는 경우 이를 보상하는 보험</p>
                                <img src="img/main/icon-sea-0102.png" alt="운송">
                            </div>
                            
                            <div class="box-list">
                                <h4>선박</h4>
                                <p>해상위험으로 발생한 선박 손실을 보상하는 보험</p>
                                <img src="img/main/icon-sea-0103.png" alt="선박">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="car-panel">
                        <div class="title-area">
                            <h3>자동차/건설기계</h3>
                            <p class="first">각 기업의 재산, 설비, 재고 등을 보호하는 상품입니다.</p>
                            <p>
                                <span>보험 가입 시 발생 가능한 자연재해, 화재, 도난 등의 위험으로부터</span>
                                보호를 받을 수 있으며,  이로 인한 손해를 보상받을 수 있습니다.
                            </p>
                            <a href="" class="button more">자세히 보기</a>

                            <div class="img"><img src="img/main/img-right-car.png" alt="자동차/건설기계"></div>
                        </div>
                        <div class="list-wrap">
                            <div class="box-list">
                                <h4>재산종합보험</h4>
                                <p>재산종합보험 재산종합 종합보험</p>
                                <img src="img/main/718832083.png" alt="재산종합보험">
                            </div>
                            
                            <div class="box-list">
                                <h4>일반화재보험</h4>
                                <p>일반화재보험 일반화재 화재보험</p>
                                <img src="img/main/718832083.png" alt="재산종합보험">
                            </div>
                            
                            <div class="box-list">
                                <h4>재산종합보험</h4>
                                <p>재산종합보험 재산종합 종합보험</p>
                                <img src="img/main/718832083.png" alt="재산종합보험">
                            </div>
                            
                            <div class="box-list">
                                <h4>일반화재보험</h4>
                                <p>일반화재보험 일반화재 화재보험</p>
                                <img src="img/main/718832083.png" alt="재산종합보험">
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel" id="cnstr-panel">
                        <div class="title-area">
                            <h3>건설공사/기계/기술</h3>

                            <p class="first">각 기업의 재산, 설비, 재고 등을 보호하는 상품입니다.</p>
                            <p>
                                <span>보험 가입 시 발생 가능한 자연재해, 화재, 도난 등의 위험으로부터</span>
                                보호를 받을 수 있으며,  이로 인한 손해를 보상받을 수 있습니다.
                            </p>
                            <a href="" class="button more">자세히 보기</a>

                            <div class="img"><img src="img/main/img-right-cnstr.png" alt="건설공사/기계/기술"></div>
                        </div>

                        <div class="list-wrap">
                            <div class="box-list">
                                <h4>건설공사</h4>
                                <p>토목 및 건축공사의 배상책임손해를 종합적으로 보상받을 수 있는 보험</p>
                                <img src="img/main/icon-cnstr-0101.png" alt="건설공사">
                            </div>
                            
                            <div class="box-list">
                                <h4>조립</h4>
                                <p>각종 기계, 돌발적인 사고로 인하여 공사 목적물에 발생한 손해 보상 받을 수 있는 보험</p>
                                <img src="img/main/icon-cnstr-0102.png" alt="조립">
                            </div>
                            
                            <div class="box-list">
                                <h4>기계</h4>
                                <p>공장 또는 사업장 등에서 우발적인 사고로 손상을 입은 경우 비용을 보상하는 보험</p>
                                <img src="img/main/icon-cnstr-0103.png" alt="기계">
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel" id="etc-panel">
                        <div class="title-area">
                            <h3>기타보험</h3>

                            <p class="first">각 기업의 재산, 설비, 재고 등을 보호하는 상품입니다.</p>
                            <p>
                                <span>보험 가입 시 발생 가능한 자연재해, 화재, 도난 등의 위험으로부터</span>
                                보호를 받을 수 있으며,  이로 인한 손해를 보상받을 수 있습니다.
                            </p>
                            <a href="" class="button more">자세히 보기</a>

                            <div class="img"><img src="img/main/img-right-etc.png" alt="기타보험"></div>
                        </div>

                        <div class="list-wrap">
                            <div class="box-list">
                                <h4>재산종합보험</h4>
                                <p>재산종합보험 재산종합 종합보험</p>
                                <img src="img/main/718832083.png" alt="재산종합보험">
                            </div>
                            
                            <div class="box-list">
                                <h4>일반화재보험</h4>
                                <p>일반화재보험 일반화재 화재보험</p>
                                <img src="img/main/718832083.png" alt="재산종합보험">
                            </div>
                            
                            <div class="box-list">
                                <h4>재산종합보험</h4>
                                <p>재산종합보험 재산종합 종합보험</p>
                                <img src="img/main/718832083.png" alt="재산종합보험">
                            </div>
                            
                            <div class="box-list">
                                <h4>일반화재보험</h4>
                                <p>일반화재보험 일반화재 화재보험</p>
                                <img src="img/main/718832083.png" alt="재산종합보험">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 업종별 Best 보험 -->
    <section class="indus-best">
        <div class="inner">
            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                <span>업종별 Best 보험</span>
            </h2>

            <div class="best-wrap">
                <!--/*********************** tab-menu start -->
                <!-- csss는 motion으로 잡고 작업했습니다. id & for은 변경하셔도 상관없습니다. 개발담당자님 확인하셨으면 주석은 삭제해주세요!! -->
                
                <input id="tabLink1" motion="tabLink1"  type="radio" name="tabsecond" checked>
                <label for="tabLink1" class="tablink first wow fadeInUp" data-wow-delay=".1s"><span>전체</span></label>

                <input id="tabLink2" motion="tabLink2" type="radio" name="tabsecond">
                <label for="tabLink2" class="tablink wow fadeInUp" data-wow-delay=".2s"><span>미용실</span></label>

                <input id="tabLink3" motion="tabLink3" type="radio" name="tabsecond">
                <label for="tabLink3" class="tablink wow fadeInUp" data-wow-delay=".3s"><span>운송</span></label>

                <input id="tabLink4" motion="tabLink4" type="radio" name="tabsecond">
                <label for="tabLink4" class="tablink wow fadeInUp" data-wow-delay=".4s"><span>병원</span></label>

                <input id="tabLink5" motion="tabLink5" type="radio" name="tabsecond">
                <label for="tabLink5" class="tablink wow fadeInUp" data-wow-delay=".5s"><span>학교</span></label>

                <input id="tabLink6" motion="tabLink6" type="radio" name="tabsecond">
                <label for="tabLink6" class="tablink wow fadeInUp" data-wow-delay=".6s"><span>교육</span></label>

                <input id="tabLink7" motion="tabLink7" type="radio" name="tabsecond">
                <label for="tabLink7" class="tablink wow fadeInUp" data-wow-delay=".7s"><span>숙박</span></label>

                <input id="tabLink8" motion="tabLink8" type="radio" name="tabsecond">
                <label for="tabLink8" class="tablink wow fadeInUp" data-wow-delay=".8s"><span>건설</span></label>
                <!-- <div class="tab-menu">
                </div> -->
                <!--/*********************** tab-menu end -->

                <div class="tab-conts-box conts1">
                    <div class="box-list-wrap wow fadeInRight" data-wow-delay=".5s">
                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/hd-logo.png" alt="현대해상"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>영업배상책임보험</span>
                            </h3>
                            <p>영영업하는 공간에서 우연히 생긴 사고로  손님등 타인의 신체나 재산에 피해가  발생할 경우 이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/directdb-logo.png" alt="DB손해보험"></div>  
                            <h3>
                                <i class="icon-best"></i>
                                <span>개인정보배상책임보험</span>
                            </h3>
                            <p>저장하고 있는 고객의 개인정보를  잃어버리거나 누군가 훔쳐가거나 잘못된  내용으로 바뀌어버리는 등 우연히 생긴  사고로 인해 고객에게 피해가 발생할 경우  이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list push">
                            <div class="logo"><img src="img/common/samsung-logo.png" alt="삼성화재"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>화재 보험</span>
                            </h3>
                            <p>재로 인해 생긴 내 가게의 직접적인 손해  건물의 칸막이, 담장, 간판, 냉난방설비 등  부속물와생활용품, 집기 등 포함하여 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-conts-box conts2">
                    <div class="box-list-wrap">
                        <div class="box-list push">
                            <div class="logo"><img src="img/common/samsung-logo.png" alt="삼성화재"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>화재 보험</span>
                            </h3>
                            <p>재로 인해 생긴 내 가게의 직접적인 손해  건물의 칸막이, 담장, 간판, 냉난방설비 등  부속물와생활용품, 집기 등 포함하여 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/hd-logo.png" alt="현대해상"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>영업배상책임보험</span>
                            </h3>
                            <p>영영업하는 공간에서 우연히 생긴 사고로  손님등 타인의 신체나 재산에 피해가  발생할 경우 이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/directdb-logo.png" alt="DB손해보험"></div>  
                            <h3>
                                <i class="icon-best"></i>
                                <span>개인정보배상책임보험</span>
                            </h3>
                            <p>저장하고 있는 고객의 개인정보를  잃어버리거나 누군가 훔쳐가거나 잘못된  내용으로 바뀌어버리는 등 우연히 생긴  사고로 인해 고객에게 피해가 발생할 경우  이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="tab-conts-box conts3">
                    <div class="box-list-wrap">
                        <div class="box-list push">
                            <div class="logo"><img src="img/common/directdb-logo.png" alt="DB손해보험"></div>  
                            <h3>
                                <i class="icon-best"></i>
                                <span>화재 보험</span>
                            </h3>
                            <p>재로 인해 생긴 내 가게의 직접적인 손해  건물의 칸막이, 담장, 간판, 냉난방설비 등  부속물와생활용품, 집기 등 포함하여 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/hd-logo.png" alt="현대해상"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>영업배상책임보험</span>
                            </h3>
                            <p>영영업하는 공간에서 우연히 생긴 사고로  손님등 타인의 신체나 재산에 피해가  발생할 경우 이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-conts-box conts4">
                    <div class="box-list-wrap">
                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/hd-logo.png" alt="현대해상"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>영업배상책임보험</span>
                            </h3>
                            <p>영영업하는 공간에서 우연히 생긴 사고로  손님등 타인의 신체나 재산에 피해가  발생할 경우 이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/directdb-logo.png" alt="DB손해보험"></div>  
                            <h3>
                                <i class="icon-best"></i>
                                <span>개인정보배상책임보험</span>
                            </h3>
                            <p>저장하고 있는 고객의 개인정보를  잃어버리거나 누군가 훔쳐가거나 잘못된  내용으로 바뀌어버리는 등 우연히 생긴  사고로 인해 고객에게 피해가 발생할 경우  이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list push">
                            <div class="logo"><img src="img/common/samsung-logo.png" alt="삼성화재"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>화재 보험</span>
                            </h3>
                            <p>재로 인해 생긴 내 가게의 직접적인 손해  건물의 칸막이, 담장, 간판, 냉난방설비 등  부속물와생활용품, 집기 등 포함하여 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-conts-box conts5">
                    <div class="box-list-wrap">
                        <div class="box-list push">
                            <div class="logo"><img src="img/common/directdb-logo.png" alt="DB손해보험"></div>  
                            <h3>
                                <i class="icon-best"></i>
                                <span>화재 보험</span>
                            </h3>
                            <p>재로 인해 생긴 내 가게의 직접적인 손해  건물의 칸막이, 담장, 간판, 냉난방설비 등  부속물와생활용품, 집기 등 포함하여 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-conts-box conts6">
                    <div class="box-list-wrap">
                        <div class="box-list push">
                            <div class="logo"><img src="img/common/samsung-logo.png" alt="삼성화재"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>화재 보험</span>
                            </h3>
                            <p>재로 인해 생긴 내 가게의 직접적인 손해  건물의 칸막이, 담장, 간판, 냉난방설비 등  부속물와생활용품, 집기 등 포함하여 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/hd-logo.png" alt="현대해상"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>영업배상책임보험</span>
                            </h3>
                            <p>영영업하는 공간에서 우연히 생긴 사고로  손님등 타인의 신체나 재산에 피해가  발생할 경우 이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/directdb-logo.png" alt="DB손해보험"></div>  
                            <h3>
                                <i class="icon-best"></i>
                                <span>개인정보배상책임보험</span>
                            </h3>
                            <p>저장하고 있는 고객의 개인정보를  잃어버리거나 누군가 훔쳐가거나 잘못된  내용으로 바뀌어버리는 등 우연히 생긴  사고로 인해 고객에게 피해가 발생할 경우  이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-conts-box conts7">
                    <div class="box-list-wrap">
                        <div class="box-list push">
                            <div class="logo"><img src="img/common/samsung-logo.png" alt="삼성화재"></div>  
                            <h3>
                                <i class="icon-best"></i>
                                <span>화재 보험</span>
                            </h3>
                            <p>재로 인해 생긴 내 가게의 직접적인 손해  건물의 칸막이, 담장, 간판, 냉난방설비 등  부속물와생활용품, 집기 등 포함하여 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-conts-box conts8">
                    <div class="box-list-wrap">
                        <div class="box-list push">
                            <div class="logo"><img src="img/common/samsung-logo.png" alt="삼성화재"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>화재 보험</span>
                            </h3>
                            <p>재로 인해 생긴 내 가게의 직접적인 손해  건물의 칸막이, 담장, 간판, 냉난방설비 등  부속물와생활용품, 집기 등 포함하여 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/hd-logo.png" alt="현대해상"></div>
                            <h3>
                                <i class="icon-best"></i>
                                <span>영업배상책임보험</span>
                            </h3>
                            <p>영영업하는 공간에서 우연히 생긴 사고로  손님등 타인의 신체나 재산에 피해가  발생할 경우 이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>

                        <div class="box-list duty">
                            <div class="logo"><img src="img/common/directdb-logo.png" alt="DB손해보험"></div>  
                            <h3>
                                <i class="icon-best"></i>
                                <span>개인정보배상책임보험</span>
                            </h3>
                            <p>저장하고 있는 고객의 개인정보를  잃어버리거나 누군가 훔쳐가거나 잘못된 내용으로 바뀌어버리는 등 우연히 생긴 사고로 인해 고객에게 피해가 발생할 경우 이를 보상</p>
                            <div class="btn-bottom">
                                <a href="#" class="button more">자세히</a>
                                <a href="#" class="button counsel">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!--  새로운 기준 Banner -->
    <section class="new-baner">
        <div class="inner">
            <div class="text-left">
                <strong class="wow fadeInLeft" data-wow-delay=".2s">“기업보험의 새로운 기준, 유비즈”</strong>

                <p class="first wow fadeInLeft" data-wow-delay=".4s">기업이 원했던 온라인 비교견적의 모든 것.</p>
                <p class="wow fadeInLeft" data-wow-delay=".6s">가입부터 운영까지 고민 끝!</p>
            </div>
            <div class="img wow fadeInRight" data-wow-delay=".5s">
                <img src="img/main/icon-graph.png">
            </div>
        </div>
    </section>

    <!--  선택 하는 이유 -->
    <section class="choice">
        <div class="inner">
            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                <span>유비즈에서 보험을 선택 해야 하는 이유?</span>
            </h2>

            <div class="box-list-wrap">
                <div class="box-list wow bounceInRight" data-wow-delay=".2s">
                    <figure><img src="img/main/custom-img.png"></figure>
                    <strong>맞춤형 상품</strong>
                    <p>고객의 요구와 상황에 맞게 다양한 맞춤형 보험상품 제공</p>
                </div>
                <div class="box-list wow bounceInRight" data-wow-delay=".4s">
                    <figure><img src="img/main/specialty-img.png"></figure>
                    <strong>전문성</strong>
                    <p>보험 전문가 고객의 다양한 보험 문제를 해결</p>
                </div>
                <div class="box-list wow bounceInRight" data-wow-delay=".6s">
                    <figure><img src="img/main/convenience-img.png"></figure>
                    <strong>편의성</strong>
                    <p>보험 가입부터 보상 청구까지 고객 편의 최우선</p>
                </div>
            </div>
        </div>
    </section>
    
    <!--  유비즈 서비스 -->
    <section class="service">
        <div class="inner">
            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                <span>유비즈 서비스</span>
            </h2>

            <div class="box-list-wrap">
                <div class="box-list wow bounceInLeft" data-wow-delay=".6s">
                    <figure>
                        <img src="img/main/icon-cut-money.png">
                    </figure>
                    <strong>시스템을 통한 비용절감</strong>
                    <p>보험계약에 따른 입찰, 정보, 손해율 및 계약 관리  등 기업보험 관리 절차가 간소화되어 기업의 관리  인력 및 비용이 절감됩니다.</p>
                </div>

                <div class="box-list wow bounceInLeft" data-wow-delay=".4s">
                    <figure>
                        <img src="img/main/icon-bidding.png">
                    </figure>
                    <strong>투명한 입찰시스템</strong>
                    <p>표준 절차에 따른 업무처리로 입찰 견적 투명성 및  최저 보험료로 기업의 이익 극대화에 기여합니다. 이해관계인 해소를 통해 기업 내 비용 리스크를  획기적으로 개선할 수 있습니다.</p>
                </div>

                <div class="box-list wow bounceInLeft" data-wow-delay=".2s">
                    <figure>
                        <img src="img/main/icon-automation.png">
                    </figure>
                    <strong>자동화된 온라인 시스템</strong>
                    <p>
                        온라인 문서 송수신 방식으로 계약자/ 보험사 간  조회 및 정보 서비스 제공이 원활합니다.
                        30여 개 보험사와 입찰/ 계약/ 문서관리/ 입찰계약  정보를 연계하여 전 과정을 ‘ONE-Stop’ 처리할 수  있습니다.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--  신용평가 서비스 Banner -->
    <section class="credit-baner">
        <div class="inner">
            <div class="text-left wow fadeInUp" data-wow-delay=".4s">
                <strong>KCB비즈그라운드 신용평가 서비스</strong>

                <p class="wow fadeInUp" data-wow-delay=".6s">신용평가 전문회사 코리아크레딧뷰로(KCB)의 업무협약으로 조달청 적격 심사 및 공공기관 입찰을  위한 기업평가 서비스</p>
            </div>
            <a href="#;" target="_blank" class="wow fadeInRight" data-wow-delay=".4s">자세히보기</a>
        </div>
    </section>

    <!--  VIP 서비스 -->
    <section class="vip-service">
        <div class="inner">
            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                <span>VIP 서비스</span>
            </h2>

            <div class="box-baner">
                <div class="baner-list wow slideInLeft" data-wow-delay=".8s">
                    <h3>국내, 해외</br>(동남아 또는 미주지역)</h3>
                    <p>왕복항공권 혜택</p>
                    <div class="img"><img src="img/main/icon-airplane.png" alt=""></div>
                </div>

                <div class="baner-list wow slideInLeft" data-wow-delay=".6s">
                    <h3>국내</br>(레스토랑, 카페)</h3>
                    <p>식사권 혜택</p>
                    <div class="img"><img src="img/main/icon-restaurant.png?n" alt=""></div>
                </div>

                <div class="baner-list wow slideInLeft" data-wow-delay=".4s">
                    <h3>국내, 해외</br>(호텔, 콘도 예약)</h3>
                    <p>숙박권 혜택</p>
                    <div class="img"><img src="img/main/icon-hotel-ticket.png?e" alt=""></div>
                </div>
            </div>

            <div class="join-text">
                <div class="txt-left wow fadeInUp" data-wow-delay=".4s">
                    <strong>
                        오직 유비즈 VIP 회원님들을 위한 독특한 혜택입니다.</br>
                        만약 VIP 회원으로 가입하시면 이 서비스를 특별히 제공받으실 수 있습니다.
                    </strong>
                </div>

                <div class="btn-right">
                    <a href="#;" class="button vip wow fadeInRight" data-wow-delay=".4s">가입하기</a>
                    <a href="#;" class="button vip wow fadeInRight" data-wow-delay=".6s">자세히 보기</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 보험사 -->
    <section class="partner">
        <div class="inner">
            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                <span>유비즈는 <strong>국내최고</strong>의</span>
                <span><strong>보험사와 보험담당자</strong>와 함께합니다.</span>
            </h2>

            <div class="part-box">
                <ul class="clearfix inb">
                    <li>
                        <figure>
                            <img src="img/main/link-chubb-logo.png" alt="에이스손해보험">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="img/main/link-samsung-logo.png" alt="삼성화재">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="img/main/link-meritz-logo.png" alt="메리츠화재">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="img/main/link-hd-logo.png" alt="현대해상">
                        </figure>
                    </li>
                    <li>
                        <figure>
                        <img src="img/main/link-db-logo.png" alt="DB손해보험">
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="css/downupPopup.css">
    <script src="js/downupPopup.js"></script>
    <script>
        /** 모바일용 간편신청 Modal */
        $("#btn-easy-apply").click(function () { 
            $("#easyDownup").downupPopup("open");            
        });

        $("#easyDownup").downupPopup({
            headerText: "간편하게 로그인 없이!"
            , animation: "ease-in"
            , radiusLeft: "0px"
            , radiusRight: "0px"
            , duration: 400
            , distance: 0
            , contentScroll: true
        });
    </script>
<?php include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/footer.php"; ?>