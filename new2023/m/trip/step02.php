
<?php
$menuNo=[1,2];
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/include/header-trip.php"; 
?>

<div class="content">
    <div class="conts-wrap">
        <form name="sendForm" method="post">
            <section class="sc step2">
                <div class="title-wrap">
                    <h2>여행 기본 정보</h2>
                </div>

                <div class="plan-wrap">
                    <input class="radio" id="advnc" name="group" type="radio" checked>
                    <input class="radio" id="stndr" name="group" type="radio">
                    <input class="radio" id="stall" name="group" type="radio">

                    <div class="plan-tab-menu">
                        <label class="tab" id="advnc-tab" for="advnc">
                            <div class="radio-box">
                                <div class="choose">
                                    <input type="radio" id="high" value="1" name="choose">
                                    <div class="check"></div>
                                    <span for="high">고급형 (￦49,340원)</span>
                                </div>
                            </div>
                        </label>

                        <label class="tab" id="stndr-tab" for="stndr">
                            <div class="radio-box">
                                <div class="choose">
                                    <input type="radio" id="standard" value="1" name="choose">
                                    <div class="check"></div>
                                    <span for="standard">표준형 (￦35,910원)</span>
                                </div>
                            </div>
                        </label>

                        <label class="tab" id="stall-tab" for="stall">
                            <div class="radio-box">
                                <div class="choose">
                                    <input type="radio" id="ecnmy" value="1" name="choose">
                                    <div class="check"></div>
                                    <span for="ecnmy">실속형 (￦14,790원)</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="panels">
                        <div class="panel" id="advnc-panel">
                            <table class="tablemb01">
                                <colgroup>
                                    <col width="*">
                                    <col width="17%">
                                    <col width="17%">
                                    <col width="17%">
                                    <col width="17%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th rowspan="2">보장명</th>
                                        <th colspan="4">보장명</th>
                                    </tr>
                                    <tr>
                                        <th>0 ~ 14세</th>
                                        <th>15 ~ 69세</th>
                                        <th>70 ~ 79세</th>
                                        <th>80 ~ 99세</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><i class="question"></i>해외여행중 상해_사망</th>
                                        <td>0원</td>
                                        <td>3억원</td>
                                        <td>1억원</td>
                                        <td>5,000만원</td>
                                    </tr>
                                    <tr>
                                        <th><i class="question"></i>해외여행중 상해_후유장해</th>
                                        <td>0원</td>
                                        <td>3억원</td>
                                        <td>1억원</td>
                                        <td>5,000만원</td>
                                    </tr>
                                    <tr>
                                        <th><i class="question"></i>해외여행중 상해_후유장해</th>
                                        <td>0원</td>
                                        <td>3억원</td>
                                        <td>1억원</td>
                                        <td>5,000만원</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="panel" id="stndr-panel">
                            <table class="tablemb01">
                                <colgroup>
                                    <col width="*">
                                    <col width="17%">
                                    <col width="17%">
                                    <col width="17%">
                                    <col width="17%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th rowspan="2">보장명</th>
                                        <th colspan="4">보장명</th>
                                    </tr>
                                    <tr>
                                        <th>0 ~ 14세</th>
                                        <th>15 ~ 69세</th>
                                        <th>70 ~ 79세</th>
                                        <th>80 ~ 99세</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><i class="question"></i>해외여행중 상해_사망</th>
                                        <td>0원</td>
                                        <td>2억원</td>
                                        <td>5,000만원</td>
                                        <td>5,000만원</td>
                                    </tr>
                                    <tr>
                                        <th><i class="question"></i>해외여행중 상해_후유장해</th>
                                        <td>2억원</td>
                                        <td>2억원</td>
                                        <td>5,000만원</td>
                                        <td>5,000만원</td>
                                    </tr>
                                    <tr>
                                        <th><i class="question"></i>해외여행중 상해_후유장해</th>
                                        <td>3,000만원</td>
                                        <td>3,000만원</td>
                                        <td>500만원</td>
                                        <td>500만원</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="panel" id="stall-panel">
                            <table class="tablemb01">
                                <colgroup>
                                    <col width="*">
                                    <col width="17%">
                                    <col width="17%">
                                    <col width="17%">
                                    <col width="17%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th rowspan="2">보장명</th>
                                        <th colspan="4">보장 금액</th>
                                    </tr>
                                    <tr>
                                        <th>0 ~ 14세</th>
                                        <th>15 ~ 69세</th>
                                        <th>70 ~ 79세</th>
                                        <th>80 ~ 99세</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><i class="question"></i>해외여행중 상해_사망</th>
                                        <td>0원</td>
                                        <td>1억원</td>
                                        <td>5,000만원</td>
                                        <td>5,000만원</td>
                                    </tr>
                                    <tr>
                                        <th><i class="question"></i>해외여행중 상해_후유장해</th>
                                        <td>1억원</td>
                                        <td>1억원</td>
                                        <td>5,000만원</td>
                                        <td>5,000만원</td>
                                    </tr>
                                    <tr>
                                        <th><i class="question"></i>해외여행중 상해_후유장해</th>
                                        <td>1,000만원</td>
                                        <td>1,000만원</td>
                                        <td>500만원</td>
                                        <td>500만원</td>
                                    </tr>
                                </tbody>
                            </table>
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

<?php
// Modal
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/product-info.php";
?>

<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/m/include/footer-trip.php"; ?>