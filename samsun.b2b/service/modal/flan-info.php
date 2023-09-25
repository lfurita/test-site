
<!-- 플랜 정보 start -->
    <div id="flan-info-modal">
        <div class="modal-bg">
            <div class="modal-cont">
				<div class="title">
					<h2>플랜 정보</h2>
					<a href="#;" class="close md-close"></a>
				</div>

				<div class="cont-wrap">
					<input class="radio" id="junior" name="group" type="radio" checked>
					<input class="radio" id="adult" name="group" type="radio">
					<input class="radio" id="senior1" name="group" type="radio">
					<input class="radio" id="senior2" name="group" type="radio">

					<div class="tab-menu-wrap">
						<label class="tab" id="junior-tab" for="junior">주니어(0~15세 미만)</label>
						<label class="tab" id="adult-tab" for="adult">성인(15~70세 미만)</label>
						<label class="tab" id="senior1-tab" for="senior1">시니어1(70~80세 미만)</label>
						<label class="tab" id="senior2-tab" for="senior2">시니어2(80세~100세 미만)</label>
					</div>

					<div class="panels">
						<div class="panel" id="junior-panel">
							<?php include 'flan-table-junior.php'; ?>
						</div>
						<div class="panel" id="adult-panel">
							<?php include 'flan-table-adult.php'; ?>
						</div>
						<div class="panel" id="senior1-panel">
							<?php include 'flan-table-senior1.php'; ?>
						</div>
						<div class="panel" id="senior2-panel">
							<?php include 'flan-table-senior2.php'; ?>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <script>
        $(".btn-flan-info").click(function(){
            var btn = $(this).attr("id");
            //alert(btn);
            $("#flan-info-modal").removeAttr("class").addClass(btn);
        });

        $(".md-close").click(function(){
             $("#flan-info-modal").addClass("out");
        });
    </script>

<!-- 플랜 정보 end -->