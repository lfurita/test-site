
<?php
$menuNo=[1,5];
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/include/header-trip.php"; 
?>

<div class="content">
    <div class="conts-wrap">
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
                            <col width="40%">
                            <col width="*">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>상품명</th>
                                <td>해외</td>
                            </tr>
                            <tr>
                                <th>피보험자/계약자</th>
                                <td>해외</td>
                            </tr>
                            <tr>
                                <th>출발 일시</th>
                                <td>해외</td>
                            </tr>
                            <tr>
                                <th>도착 일시</th>
                                <td>해외</td>
                            </tr>
                            <tr>
                                <th>여행목적 (지역)</th>
                                <td>
                                    여행/관광
                                </td>
                            </tr>
                            <tr>
                                <th>인원(1명)</th>
                                <td>홍길동 (820918) &nbsp; ￦49,340원</td>
                            </tr>
                        </tbody>
                    </table>
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