
<?php
$menuNo=[1,4];
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/include/header-trip.php"; 
?>

<div class="content">
    <div class="conts-wrap">
        <form name="sendForm" method="post">
            <section class="sc step4">
                <div class="title-wrap">
                    <h2>여행 출발전 고지사항</h2>
                    
                    <div class="radio-box">
                        <div class="terms allNo">
                            <input type="checkbox" id="no1" name="allno">
                            <label for="no1">전체 아니오</label>
                        </div>
                    </div>
                </div>
                
                <div class="list-box">
                    <div class="text-cont">
                        1. 현재 해외 체류중이신가요?<br>
                        <span class="fc-red">(해외 체류시 가입 불가. 국내 전 보험사 공통사항)</span>
                    </div>

                    <div class="radio-box">
                        <label class="terms">
                            <input type="radio" class="checkbox yes" id="yes1" name="yesno1"/>
                            <div class="check"></div>
                            <span>예</span>
                        </label>

                        <label class="terms">                         
                            <input type="radio" class="checkbox no" id="no1" name="yesno1" />
                            <div class="check"></div>
                            <span>아니요</span>
                        </label>
                    </div>
                </div>

                <div class="list-box">
                    <div class="text-cont">2. 최근 3개월 내에 <a  class="btn-disease-popup">입원, 수술, 질병확진[보기]</a>을 받은 사실이 있나요?</div>
                    <div class="radio-box">
                        <label class="terms">
                            <input type="radio" class="checkbox yes" id="yes2" name="yesno2"/>
                            <div class="check"></div>
                            <span>예</span>
                        </label>

                        <label class="terms">                         
                            <input type="radio" class="checkbox no" id="no2" name="yesno2" />
                            <div class="check"></div>
                            <span>아니요</span>
                        </label>
                    </div>
                </div>

                <div class="list-box">
                    <div class="text-cont">3. 위험한 운동이나 전문적인 체육활동을 목적으로 출국하시나요?</div>
                    <div class="radio-box">
                        <label class="terms">
                            <input type="radio" class="checkbox yes" id="yes3" name="yesno3"/>
                            <div class="check"></div>
                            <span>예</span>
                        </label>

                        <label class="terms">                         
                            <input type="radio" class="checkbox no" id="no3" name="yesno3" />
                            <div class="check"></div>
                            <span>아니요</span>
                        </label>
                    </div>
                </div>

                <div class="list-box">
                    <div class="text-cont">4. 여행지역이 <a class="btn-restrict-popup">여행금지국가[보기]</a>인가요?</div>
                    <div class="radio-box">
                        <label class="terms">
                            <input type="radio" class="checkbox yes" id="yes4" name="yesno4"/>
                            <div class="check"></div>
                            <span>예</span>
                        </label>

                        <label class="terms">                         
                            <input type="radio" class="checkbox no" id="no4" name="yesno4" />
                            <div class="check"></div>
                            <span>아니요</span> 
                        </label>
                    </div>
                </div>
            </section>
            <section class="sc step4">                
                <div class="title-wrap">
                    <h2><span>(필수)</span> 이용동의</h2>

                    <div class="radio-box">
                        <div class="terms allagree">
                            <input type="checkbox" id="allagree" name="allagree">
                            <label for="allagree">전체 동의</label>
                        </div>
                    </div>
                </div>

                <div class="agree-box-wrap">
                    <div class="list-box">
                        <div class="text-cont">이용약관</div>

                        <div class="radio-box">
                            <label class="terms">
                                <input type="radio" class="checkbox agree" id="agree1" name="notAgre1"/>
                                <div class="check"></div>
                                <span>동의</span>
                            </label>

                            <label class="terms">                         
                                <input type="radio" class="checkbox notagree" id="notagree1" name="notAgre1" />
                                <div class="check"></div>
                                <span>동의하지 않음</span>
                            </label>
                        </div>

                        <div class="view-cont">
                            <a class="linkMore btn-termsUse-popup">자세히보기</a>
                        </div>
                    </div>

                    <div class="list-box">
                        <div class="text-cont">개인정보수집 및 이용 동의</div>

                        <div class="radio-box">
                            <label class="terms">
                                <input type="radio" class="checkbox agree" id="agree2" name="notAgre2"/>
                                <div class="check"></div>
                                <span>동의</span>
                            </label>

                            <label class="terms">                         
                                <input type="radio" class="checkbox notagree" id="notagree2" name="notAgre2" />
                                <div class="check"></div>
                                <span>동의하지 않음</span>
                            </label>
                        </div>

                        <div class="view-cont">
                            <a class="linkMore btn-privacy-popup">자세히보기</a>
                        </div>
                    </div>
                    
                    <div class="list-box accordion">
                        <input type="checkbox" id="chck1">
                        <div class="top-box">
                            <label class="text-cont" for="chck1">개인정보 처리 및 단체가입규약 동의 <i class="icon-accod">화살표</i></label>
                                                        
                            <div class="radio-box">
                                <label class="terms">
                                    <input type="radio" class="checkbox agree" id="agree3" name="notAgre3"/>
                                    <div class="check"></div>
                                    <span>동의</span>
                                </label>
    
                                <label class="terms">                         
                                    <input type="radio" class="checkbox notagree" id="notagree3" name="notAgre3" />
                                    <div class="check"></div>
                                    <span>동의하지 않음</span>
                                </label>
                            </div>

                            <div class="view-cont">
                                <a class="linkMore btn-group-popup">자세히보기</a>
                            </div>
                        </div>

                        <div class="cont-accord">
                            <div class="inner">
                                <div class="box-list">
                                    <strong>- 단체가입규약 동의</strong>
                                    
                                    <div class="radio-box">
                                        <label class="terms">
                                            <input type="radio" class="checkbox not" id="agree31" name="notAgre31"/>
                                            <div class="check"></div>
                                            <span>동의</span>
                                        </label>

                                        <label class="terms">                         
                                            <input type="radio" class="checkbox agree" id="notagree31" name="notAgre31" />
                                            <div class="check"></div>
                                            <span>동의하지 않음</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="box-list">
                                    <strong>- 개인정보 수집 및 이용 및 제3자 제공 동의</strong>
                                    
                                    <div class="radio-box">
                                        <label class="terms">
                                            <input type="radio" class="checkbox not" id="agree32" name="notAgre32"/>
                                            <div class="check"></div>
                                            <span>동의</span>
                                        </label>

                                        <label class="terms">                         
                                            <input type="radio" class="checkbox agree" id="notagree32" name="notAgre32" />
                                            <div class="check"></div>
                                            <span>동의하지 않음</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="box-list">
                                    <strong>- 고유식별 정보 수집 및 이용제공 및 제3자 제공 동의</strong>
                                    
                                    <div class="radio-box">
                                        <label class="terms">
                                            <input type="radio" class="checkbox not" id="agree33" name="notAgre33"/>
                                            <div class="check"></div>
                                            <span>동의</span>
                                        </label>

                                        <label class="terms">                         
                                            <input type="radio" class="checkbox agree" id="notagree33" name="notAgre33" />
                                            <div class="check"></div>
                                            <span>동의하지 않음</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="box-list">
                                    <strong>- 케팅 활용을 위한 개인정보 수집 및 이용 동의 (선택)</strong>
                                    
                                    <div class="radio-box">
                                        <label class="terms">
                                            <input type="radio" class="checkbox not" id="agree34" name="notAgre34"/>
                                            <div class="check"></div>
                                            <span>동의</span>
                                        </label>

                                        <label class="terms">                         
                                            <input type="radio" class="checkbox agree" id="notagree34" name="notAgre34" />
                                            <div class="check"></div>
                                            <span>동의하지 않음</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="list-box">
                        <div class="text-cont">
                            보험약관
                            <a href="" class="button downlink">해외여행보험약관 다운로드</a>
                            <a href="" class="button downlink" style="display: none;">국내여행보험약관 다운로드</a>
                        </div>
                        
                        <div class="radio-box">
                            <label class="terms">
                                <input type="radio" class="checkbox agree" id="agree2" name="notAgre4"/>
                                <div class="check"></div>
                                <span>동의</span>
                            </label>

                            <label class="terms">                         
                                <input type="radio" class="checkbox notagree" id="notagree2" name="notAgre4" />
                                <div class="check"></div>
                                <span>동의하지 않음</span>
                            </label>
                        </div>
                        
                        <div class="view-cont">
                            <a class="linkMore btn-insrnPlcy-popup">자세히보기</a>
                        </div>
                    </div>
                </div>
                
                <div class="modal-box-wrap">
                    <div class="know-area">
                        <a class="btn-know-popup">※ 알아두실 사항
                            <i></i>
                        </a>
                    </div>
                    <div class="prod-info-area">
                        <a class="btn-prod-popup">상품안내
                            <i></i>
                        </a>
                    </div>
                </div>
            </section>
        </form>
    </div>    
</div>

<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/m/include/footer-trip.php"; ?>