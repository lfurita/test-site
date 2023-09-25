
<!-- 플랜코드 변경 start -->
<div id="flan-select-modal">
    <div class="modal-bg">
        <div class="modal-cont">
            <div class="title">
                <h2>플랜코드 변경</h2>
                <a href="#;" class="close md-close"></a>
            </div>

            <div class="cont-wrap">
                <div class="title-box">
                    <strong>주니어(0~15세 미만)</strong>
                </div>

                <div class="flansel-box-wrap">
                    <div class="flansel-cont">
                        <?php include 'flan-table-junior.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(".btn-flan-select").click(function(){
        var btn = $(this).attr("id");
        //alert(btn);
        $("#flan-select-modal").removeAttr("class").addClass(btn);
    });

    $(".md-close").click(function(){
            $("#flan-select-modal").addClass("out");
    });
</script>
<!-- 플랜코드 변경 end -->