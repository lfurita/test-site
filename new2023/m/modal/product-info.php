
<link rel="stylesheet" type="text/css" href="/new2023/m/css/downupPopup.css">

<!-- 상품안내 start -->
<div class="modal-prod">
    <div class="downupPopup-content"> 
        <!-- Banner start -->
        <div class="prod-bnnr">
            <div class="box-list">
                <div class="circle">
                    <img src="/new2023/m/img/icon-browser.png" alt="편리한 가입">
                </div>
                <strong>편리한 가입</strong>
            </div>
            <div class="box-list">
                <div class="circle">
                    <img src="/new2023/m/img/icon-inde.png" alt="든든한보장">
                </div>
                <strong>든든한 보장</strong>
            </div>
            <div class="box-list">
                <div class="circle">
                    <img src="/new2023/m/img/icon-simple.png" alt="간편보험청구">
                </div>
                <strong>간편 보험청구</strong>
            </div>
        </div>
        <!-- Banner end -->

        <!-- 상품설명 start -->
        <div class="cont-product">
            <h3>상품 설명</h3>
            <div class="bnnr-box">
                <div class="round-box">
                    <i class="icon-medical"></i>
                    <div class="title">
                        <strong>해외 의료실비 보장</strong>
                        <p>해외장기체류 중 발생한 상해·질병 치료비 등을 보장</p>
                    </div>
                </div>
                
                <div class="round-box">
                    <i class="icon-actual"></i>
                    <div class="title">
                        <strong>중대사고 구조송환 비용</strong>
                        <p>제3자 배상책임 및 예상치 중대사고 발생시 구조송환 비용 보장</p>
                    </div>
                </div>
                
                <div class="round-box">
                    <i class="icon-language"></i>
                    <div class="title">
                        <strong>우리말 도움 서비스</strong>
                        <p>응급사항 또는 여행관련 도움이 필요한 경우 365일 24시간 우리말로 상담</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- 상품설명 end -->

        <div class="bottom-box">
            <div class="text">※ 준법감시인 심의필 제2022-광고-1566호 (2022.11.04 ~ 2023.11.03)</div>
            <div class="img"><img src="/new2023/img/common/modal-meritz.png?en" alt=""></div>
        </div>
    </div>
</div>
<!-- 상품안내 end -->

<script>
    $(document).ready(function () {
        $(".modal-prod").downupPopup({
            distance: 10,
            headerText: "상품안내",
            contentScroll: true
        });
    });

    $(".btn-prod-popup").click(function () { 
        $(".modal-prod").downupPopup("open"); 
    });
</script>
