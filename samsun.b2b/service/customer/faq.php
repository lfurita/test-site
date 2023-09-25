<? $mNum = "5"; ?>
<?php include '../../include/header.php'; ?>
    <div class="check-box-wrap">
        <div class="customer-list-wrap">
            <div class="tab-menu">
                <ul class="clearfix inb">
                    <li><a href="notice.php">공지사항</a></li>
                    <li class="active">FAQ</li>
                </ul>
            </div>

            <div class="accordion-wrap">
                <div class="set">
                    <div class="title active">
                        <a href="#">가입 방법, 가입 방법, 가입 방법, 가입 방법, 가입 방법, 가입 방법 <i class="icon-accordion"></i> </a>
                    </div>
                    <div class="content" style="display: block;">
                        <p>미성년자의 경우 개인정보 동의란 (또는 위임사항)에 부모님(법정대리인)이 서명</p>
                    </div>
                </div>

                <div class="set">
                    <div class="title">
                        <a href="#">가입 방법, 가입 방법, 가입 방법, 가입 방법, 가입 방법, 가입 방법 <i class="icon-accordion"></i> </a>
                    </div>
                    <div class="content">
                        <p>ⓐ 해외여행 : 여권사본, 출입국증명서 (여권 스탬프면 사본으로 대체 가능)</p>
                        <p class="type-dash">
                            ⓑ 국내여행 : 신분증사본<br>
                            * 미성년자의 경우 등본 or 가족관계증명서 추가 첨부
                        </p>
                    </div>
                </div>

                <div class="set">
                    <div class="title">
                        <a href="#">가입 방법, 가입 방법, 가입 방법, 가입 방법, 가입 방법, 가입 방법 <i class="icon-accordion"></i> </a>
                    </div>
                    <div class="content">
                        <p>ⓐ 해외여행 : 여권사본, 출입국증명서 (여권 스탬프면 사본으로 대체 가능)</p>
                        <p class="type-dash">
                            ⓑ 국내여행 : 신분증사본<br>
                            * 미성년자의 경우 등본 or 가족관계증명서 추가 첨부
                        </p>
                    </div>
                </div>

                <div class="set">
                    <div class="title">
                        <a href="#">가입 방법, 가입 방법, 가입 방법, 가입 방법, 가입 방법, 가입 방법 <i class="icon-accordion"></i> </a>
                    </div>
                    <div class="content">
                        <p>ⓐ 해외여행 : 여권사본, 출입국증명서 (여권 스탬프면 사본으로 대체 가능)</p>
                        <p class="type-dash">
                            ⓑ 국내여행 : 신분증사본<br>
                            * 미성년자의 경우 등본 or 가족관계증명서 추가 첨부
                        </p>
                    </div>
                </div>

                <div class="set">
                    <div class="title">
                        <a href="#">가입 방법, 가입 방법, 가입 방법, 가입 방법, 가입 방법, 가입 방법 <i class="icon-accordion"></i> </a>
                    </div>
                    <div class="content">
                        <p>ⓐ 해외여행 : 여권사본, 출입국증명서 (여권 스탬프면 사본으로 대체 가능)</p>
                        <p class="type-dash">
                            ⓑ 국내여행 : 신분증사본<br>
                            * 미성년자의 경우 등본 or 가족관계증명서 추가 첨부
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- paginate start -->
            <div class="paginate">
                <a href="#;" class="first"><i class="prev-arrow-double"></i></a>
                <a href="#;" class="prev"><i class="prev-arrow"></i></a>
                
                <a href="#;" class="active">1</a>
                <a href="#;" class="">2</a>
                <a href="#;" class="">3</a>
                <a href="#;" class="">4</a>
                <a href="#;" class="">5</a>
                
                <a href="#;" class="next"><i class="next-arrow"></i></a>
                <a href="#;" class="last"><i class="next-arrow-double"></i></a>
            </div>
        </div>
    </div>

    <script>
        // accordion menu
        $(document).ready(function() {
            $(".title").on("click", function() {
                if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this)
                    .siblings(".content")
                    .slideUp(500);
                $(".title i")
                    .removeClass("fa-minus")
                    .addClass("fa-plus");
                } else {
                $(".title i")
                    .removeClass("fa-minus")
                    .addClass("fa-plus");
                $(this)
                    .find("i")
                    .removeClass("fa-plus")
                    .addClass("fa-minus");
                $(".title").removeClass("active");
                $(this).addClass("active");
                $(".content").slideUp(500);
                $(this)
                    .siblings(".content")
                    .slideDown(500);
                }
            });
        });
    </script>
<?php include '../../include/footer.php'; ?> 