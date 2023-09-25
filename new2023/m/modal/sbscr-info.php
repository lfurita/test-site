
<!-- 상품안내 start -->
<div class="modal-sbscr">
    <div class="downupPopup-content">
        <div class="sbscr-box-list">
            <h2>1. 여행정보
                <a class="button popup-mdf">수정</a>
            </h2>
            <div class="text-area">
                여행지 : 미국령 버진 아일랜드
            </div>
            <div class="text-area">
                여행 목적 : 여행/관광
            </div>
            <div class="text-area">
                여행 기간 : 2023-04-21 ~ 2023-04-29
            </div>
            <div class="text-area">
                가입 인원 : 1명
            </div>
        </div>

        <div class="sbscr-box-list">
            <h2>2. 보험료 계산결과
                <a class="button popup-mdf">수정</a>
            </h2>
            <div class="text-area">
                11,620원 (실속형)
            </div>
        </div>

        <div class="sbscr-box-list">
            <h2>3. 피보험자 계역 정보
                <a class="button popup-mdf">수정</a>
            </h2>
        </div>

        <div class="sbscr-box-list">
            <h2>4.가입 동의
                <a class="button popup-mdf">수정</a>
            </h2>
        </div>

        <div class="sbscr-box-list">
            <h2>5.보험료 결제
                <a class="button popup-mdf">수정</a>
            </h2>
        </div>
    </div>
</div>
<!-- 상품안내 end -->

<script>
    $(document).ready(function () {
        $(".modal-sbscr").downupPopup({
            distance: 10,
            headerText: "가입정보 수정하기",
            contentScroll: true
        });
    });

    $(".btn-subsInfo").click(function () { 
        $(".modal-sbscr").downupPopup("open"); 
    });
</script>
