
<!-- 보험약관 start -->
<div class="modal-insrnPlcy">
    <div class="downupPopup-content">
        <p>보험계약청약 시 기재된 내용이 사실과 다르거나 누락된 사항이 없는지 확인하시고, 사실과 다르거나, 누락된 사항이 있으면 보험약관에 의하여 보험계약의 해지 또는 보험금 불지급 등의 불이익을 당할 수 있으니, 약관을 충분히 읽어보시기 바랍니다.</p>
    </div>
</div>
<!-- 보험약관 end -->


<script>
    $(document).ready(function () {
        $(".modal-insrnPlcy").downupPopup({
            distance: 50,
            headerText: "보험약관",
            contentScroll: true
        });
    });

    $(".btn-insrnPlcy-popup").click(function () { 
        $(".modal-insrnPlcy").downupPopup("open"); 
    });
</script>
