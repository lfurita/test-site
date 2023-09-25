<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/header-trip.php"; ?>

<div class="content">
    <?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/menu-trip.php"; ?>

    <div class="cont-wrap">
            <div class="conts-box">
                <form name="sendForm" method="post">
                    <section class="sc step1">
                        <div class="title-wrap">
                            <h2>보험료 계산 결과 - 플랜 선택</h2>
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
                                    <table class="table">
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
                                                <th>해외여행중 상해_사망 
                                                    <div class="tooltip">
                                                        <i class="icon-tooltip">툴팁</i>
                                                        <div class="tooltip-content">
                                                            가. 해외여행 중에 상해의 직접결과로써 사망한 경우 보험가입금액전액 지급<br>나. 해외여행 중 상해로 장해지급률에 해당하는 장해가 되었을 경우 보험가입금액×지급률로 산출한 금액 지급
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_후유장해
                                                    <div class="tooltip">
                                                        <i class="icon-tooltip">툴팁</i>
                                                        <div class="tooltip-content">해외여행 중 상해로 장해분류표에서 정한 각 장해지급률에 해당하는 장해상태가 되었을 때 보험가입금액×지급률로 산출한 금액 지급</div>
                                                    </div>
                                                </th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel" id="stndr-panel">
                                    <table class="table">
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
                                                <th>해외여행중 상해_사망 
                                                    <div class="tooltip">
                                                        <i class="icon-tooltip">툴팁</i>
                                                        <div class="tooltip-content">
                                                            가. 해외여행 중에 상해의 직접결과로써 사망한 경우 보험가입금액전액 지급<br>나. 해외여행 중 상해로 장해지급률에 해당하는 장해가 되었을 경우 보험가입금액×지급률로 산출한 금액 지급
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_후유장해
                                                    <div class="tooltip">
                                                        <i class="icon-tooltip">툴팁</i>
                                                        <div class="tooltip-content">해외여행 중 상해로 장해분류표에서 정한 각 장해지급률에 해당하는 장해상태가 되었을 때 보험가입금액×지급률로 산출한 금액 지급</div>
                                                    </div>
                                                </th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_사망 <i class="icon-tooltip">툴팁</i></th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel" id="stall-panel">
                                    <table class="table">
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
                                                <th>해외여행중 상해_사망 
                                                    <div class="tooltip">
                                                        <i class="icon-tooltip">툴팁</i>
                                                        <div class="tooltip-content">
                                                            가. 해외여행 중에 상해의 직접결과로써 사망한 경우 보험가입금액전액 지급<br>나. 해외여행 중 상해로 장해지급률에 해당하는 장해가 되었을 경우 보험가입금액×지급률로 산출한 금액 지급
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                            <tr>
                                                <th>해외여행중 상해_후유장해
                                                    <div class="tooltip">
                                                        <i class="icon-tooltip">툴팁</i>
                                                        <div class="tooltip-content">해외여행 중 상해로 장해분류표에서 정한 각 장해지급률에 해당하는 장해상태가 되었을 때 보험가입금액×지급률로 산출한 금액 지급</div>
                                                    </div>
                                                </th>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                                <td>0원</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="bill">※ 중도해지시 해지환급금은 납입한 보험료보다 적거나 없을 수 있습니다.</p>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
            <div class="button-wrap">
                <a onClick="history.go(-1)" class="button prev">이전</a>
                <a href="step03.php" class="button next">다음단계</a> 
            </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/footer-trip.php"; ?>