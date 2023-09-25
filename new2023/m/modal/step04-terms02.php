
<!-- 개인정보수집 및 이용 동의 start -->
<div class="modal-privacy">
    <div class="downupPopup-content">
        <div class="cont-box-wrap">
            <div class="terms-list">
                <ul>
                    <li><strong>㈜유라이프파이낸셜 귀중</strong></li>

                    <li>본인은 귀사가 유라이프파이낸셜 보험토탈케어서비스 회원가입을 위하여 본인의 개인정보를 수집/이용하는 것에 동의합니다.</li>
                    <li class="type-dash">- 수집하는 개인정보 항목 : (회원가입) 성명, 생년월일 / (보험료 산출) 성별, 출발일, 귀국일</li>
                    <li class="type-dash">- 개인정보 수집/제공 목적 : 유라이프파이낸셜 보험토탈케어서비스 회원가입</li>
                    <li class="type-dash">- 개인정보 보유 및 이용 기간 : 회원 탈퇴 시까지 동의 거부 시 서비스 이용이 불가합니다.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 개인정보수집 및 이용 동의 end -->

<script>
    $(document).ready(function () {
        $(".modal-privacy").downupPopup({
            distance: 40,
            headerText: "개인정보수집 및 이용 동의",
            contentScroll: true
        });
    });

    $(".btn-privacy-popup").click(function () { 
        $(".modal-privacy").downupPopup("open"); 
    });
</script>