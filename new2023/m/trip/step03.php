
<?php
$menuNo=[1,3];
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/include/header-trip.php"; 
?>

<div class="content">
    <div class="conts-wrap">
        <form name="sendForm" method="post">
            <section class="sc step2">
                <div class="title-wrap">
                    <h2>대표피보험자 (<span>여</span>)</h2>
                </div>

                 <div class="sort-box third">
                    <ul>
                        <li>
                            <strong>성명 (한글)</strong>
                            <input type="text" class="input02" name="" id="" value="" placeholder="홍길동">
                        </li>
                        <li>
                            <strong>성명 (영문) <span class="pick">※ 선택사항 : 영문증서 필요시기입</span></strong>
                            <div class="eng-name">
                                <input type="text" class="input02" name="" id="" value="" placeholder="성">
                                <input type="text" class="input02" name="" id="" value="" placeholder="이름">
                            </div>
                        </li>
                        
                        <li>
                            <strong>주민등록번호</strong>
                            <div class="twonum">
                                <input type="text" class="input02" name="" id="" value="" placeholder="800101">
                                <span>-</span>
                                <input type="text" class="input02" name="" id="" value="" placeholder="*******">
                            </div>
                        </li>                            
                        <li class="permanent">
                            <strong>영주권자 / 이중국적자
                                <span name="spanCaution" class="spanCaution" style="">※ 모국 여행은 가입 불가!</span>
                            </strong>
                            <div class="radio-box">
                                <div class="travel first">
                                    <input type="radio" id="dualY_" value="1" name="is_dual_" value="Y" checked="checked">
                                    <label for="dualY_">예</label>
                                </div> 
                                <div class="travel last">
                                    <input type="radio" id="dualN_" value="2" name="is_dual_" value="N">
                                    <label for="dualN_">아니요</label>
                                </div> 
                            </div>
                            <div class="nationality" name="divNation" style="">
                                <input type="text" class="input02" placeholder="미국" name="nation_name[]" value="">
                                <div class="caption">※ 해당 국가를 입력하여 주시기 바랍니다.</div>
                            </div>
                        </li>

                        <li>
                            <strong>휴대폰 번호</strong>
                            <div class="thirdum">
                                <div class="select-box">
                                    <select name="">
                                        <option value="010" selected="selected">010</option>
                                        <option value="011">011</option>
                                        <option value="016">016</option>
                                        <option value="017">017</option>
                                        <option value="018">018</option>
                                        <option value="019">019</option>
                                    </select>
                                </div>
                                <span>-</span>
                                <input type="text" class="input02" name="" id="" value="" placeholder="2345">
                                <span>-</span>
                                <input type="text" class="input02" name="" id="" value="" placeholder="6789">
                            </div>
                        </li>
                        <li>
                            <strong>이메일</strong>
                            <div class="twonum">
                                <input type="text" class="input02" name="" id="" value="" placeholder="udirect">
                                <span>@</span>
                                <input type="text" class="input02" name="" id="" value="" placeholder="naver.com">
                            </div>
                        </li>
                    </ul>
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

<?php
// Modal
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/product-info.php";
?>

<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/m/include/footer-trip.php"; ?>