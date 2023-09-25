<?php
$menuNo=[4,0];
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/include/header.php";
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/include/sub-visual.php";
?>
<div class="content-wrap">
    <div class="search-box-wrap">
        <form name="searchForm" method="post">
        <div class="srch-input">
            <input type="text" class="searchint" name="_keyword" placeholder="검색어를 넣어주세요" value="<?=$_keyword?>">
            <button type="submit" class="seachButton"><i class="icon-search"></i></button>
        </div>
        <div class="srch-tag">
            <span class="span_keyword">가입</span>
            <span class="span_keyword">출발</span>
            <span class="span_keyword">보상</span>
            <span class="span_keyword">당일</span>
            <span class="span_keyword">도난</span>
        </div>
        </form>
    </div>

    <div class="accd-wrap">
        <!-- FAQ 첫번째 -->
        <div class="set">
            <div class="title active">
                <span>Q. 보험 증권과 보험 약관은 어떻게 받나요? <i class="icon-accordion"></i></span>
            </div>
            <div class="content" style="display: block;">
                <p class="type-A">A. 가입 즉시 고객님께서 가입시 작성하신 이메일로 증권과 약관을 보내 드립니다. 팩스로 받길 원하시면 고객센터(1800-9010)으로 연락주시면 팩스로 받아보실 수 있습니다.</p>
            </div>
        </div>

        <!-- FAQ 첫번째 -->
        <div class="set">
            <div class="title">
                <span>Q. 온라인 가입할때 공인인증서나 친필서명없이 가입이 가능한가요? <i class="icon-accordion"></i></span>
            </div>
            <div class="content">
                <p class="type-A">A. 네. 저희 투어세이프 여행자보험은 보험회사와 포괄계약을 맺고 있기 때문에 자필서명, 공인인증서, 회원가입 대신 동의하기를 하시는 것으로 대체하고 있습니다.</p>
            </div>
        </div>
        
        <!-- FAQ 첫번째 -->
        <div class="set">
            <div class="title">
                <span>Q. 해외여행 중 휴대품 손해에 대한 보상은 어떻게 되나요? <i class="icon-accordion"></i></span>
            </div>
            <div class="content">
                <p class="type-A">A. 여행 중 도난, 파손, 화재 등 우연한 사고로 피보험자의 휴대품에 생긴 손해에 대해서 증권에 기재된 보상한도액 내에서 보상해 드립니다.</p>
            </div>
        </div>
        
        <!-- FAQ 첫번째 -->
        <div class="set">
            <div class="title">
                <span>Q. 여행을 위해 집을 나서다 사고가 발생한 경우 보상이 가능한가요? <i class="icon-accordion"></i></span>
            </div>
            <div class="content">
                <p class="type-A">A. 여행보험은 여행을 위하여 주거지를 출발하여 여행을 마치고 주거지에 도착할 때까지의 기간을 보험기간으로 보기 때문에 보상받을 수 있습니다.</p>
            </div>
        </div>
        
        <!-- FAQ 첫번째 -->
        <div class="set">
            <div class="title">
                <span>Q. 스키를 타러 갈 예정인데 가입이 가능한가요? <i class="icon-accordion"></i></span>
            </div>
            <div class="content">
                <p class="type-A">A. 일반여행, 관광여행 등이 아닌 산악등반이나 기타 위험이 높은 레저활동에 참가하는경우에는 가입금액이 제한되거나 가입이 불가능할 수 있습니다.</p>
            </div>
        </div>
        
        <!-- FAQ 첫번째 -->
        <div class="set">
            <div class="title">
                <span>Q. 해외여행 중 입은 상해를 국내에서 치료했습니다. 보상이 가능한가요? <i class="icon-accordion"></i></span>
            </div>
            <div class="content">
                <p class="type-A">A. 보상이 가능합니다. 단 해외에서 발생한 사고라는 것을 본인이 서류로 입증하셔야 하며, 발생한 치료비는 보험가입금액 한도 내에서 보상하여 드립니다. 자세한 사항은 고객센터(1522-1133)의 보상관련 상담을 이용하시면 됩니다.</p>
            </div>
        </div>
        
        <!-- FAQ 첫번째 -->
        <div class="set">
            <div class="title">
                <span>Q. 해외여행보험 가입불가 국가는 어떻게 알 수 있나요? <i class="icon-accordion"></i></span>
            </div>
            <div class="content">
                <p class="type-A">A. 외교통상부 사이트에서 확인할 수 있으며, 해외여행경보 3,4단계(철수권고, 여행금지)에 해당되는 국가는 가입할 수 없습니다.</p>
            </div>
        </div>
        
        <!-- FAQ 첫번째 -->
        <div class="set">
            <div class="title">
                <span>Q. 여행 당일에 가입할 수 있나요? <i class="icon-accordion"></i></span>
            </div>
            <div class="content">
                <p class="type-A">A. 예 가입이 가능합니다. 공항으로 이동 중이거나 공항에 계시다면 모바일을 통해 간편하게 가입하실 수 있습니다.</p>
            </div>
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
<?php 
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/include/footer.php";
?>