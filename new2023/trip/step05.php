<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/header-trip.php"; ?>

<div class="content">
    <?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/menu-trip.php"; ?>

    <div class="cont-wrap">
        <div class="conts-box">
            <form name="sendForm" method="post">
                <section class="sc step5">
                    <div class="title-wrap">
                        <h2>여행자보험 가입신청정보</h2>
                    </div>
                    <div class="box-total">
                        <div class="price-box">
                            <span>메리츠 여행자 보험 총 금액(일시납)</span>
                            <div class="total-won">￦49,340원</div>
                        </div>

                        <div class="cont-right">
                            <div class="circle-box">
                                <strong>여행 지역</strong>
                                <p>미국령 작은 섬</p>
                            </div>
                            <div class="circle-box">
                                <strong>여행 기간</strong>
                                <p>3 일</p>
                            </div>
                        </div>
                    </div>

                    <div class="table-wralp">
                        <table class="details">
                            <colgroup>
                                <col width="20%">
                                <col width="30%">
                                <col width="20%">
                                <col width="*">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>상품명</th>
                                    <td>해외</td>
                                    <th>피보험자/계약자</th>
                                    <td>해외</td>
                                </tr>
                                <tr>
                                    <th>출발 일시</th>
                                    <td>해외</td>
                                    <th>도착 일시</th>
                                    <td>해외</td>
                                </tr>
                                <tr>
                                    <th>여행목적 (지역)</th>
                                    <td>
                                        여행/관광
                                    </td>
                                    <th>인원(1명)</th>
                                    <td>홍길동 (820918) &nbsp; ￦49,340원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </form>
        </div>
        <div class="button-wrap">
            <a onClick="history.go(-1)" class="button prev">이전</a>
            <a href="step06.php" class="button next">카드결제</a>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/footer-trip.php"; ?>