<div class="quick-wrap">
    <div class="conts-list">
        <div class="menu-box-list">
            <a href="" class="">
                <div class="img-icon">
                    <img src="" alt="">
                </div>
                <span>간편 신청</span>
            </a>
        </div>
        
        <div class="menu-box-list">
            <a href="" class="">
                <div class="img-icon">
                    <img src="" alt="">
                </div>
                <span>보험 신청</span>
            </a>
        </div>
        
        <div class="menu-box-list">
            <a href="" class="">
                <div class="img-icon">
                    <img src="" alt="">
                </div>
                <span>제휴 서비스</span>
            </a>
        </div>

        <div class="btn moveUp"><img src="/ubiz/img/common/icon-updown.png" alt=""></div>
        <div class="btn moveDown"><img src="/ubiz/img/common/icon-updown.png" alt=""></div>
    </div>
</div>

<script>
    const $topBtn = document.querySelector(".moveUp");
    // 버튼 클릭 시 맨 위로 이동
    $topBtn.onclick = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });  
    }

    const $bottomBtn = document.querySelector(".moveDown");

    // 버튼 클릭 시 페이지 하단으로 이동
    $bottomBtn.onclick = () => {
    window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });
    };
</script>