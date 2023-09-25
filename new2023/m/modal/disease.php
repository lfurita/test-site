
<!-- 입원, 수술, 질병확진 start -->
<div class="modal-disease">
    <div class="downupPopup-content">
        <p>암, 백혈병, 협심증, 심근경색, 심장판막증, 간경화증, 뇌졸중증(뇌출혈, 뇌경색), 에이즈 및 HIV</p>
    </div>
</div>
<!-- 입원, 수술, 질병확진 end -->

<script>
    $(document).ready(function () {
        $(".modal-disease").downupPopup({
            distance: 50,
            headerText: "입원, 수술, 질병확진",
            contentScroll: true
        });
    });

    $(".btn-disease-popup").click(function () { 
        $(".modal-disease").downupPopup("open"); 
    });
</script>
