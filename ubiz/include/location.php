
<div class="location-top">
    <div class="select-inner">
        <div class="home">
            <i class="icon-home"></i>
        </div>
        <!-- 1depth menu -->
        <div class="depth">
            <div class="selected">
                <div class="selected-value">기업보험비교</div>
                <div class="arrow"></div>
            </div>
            <ul class="clearfix inb">
                <li class="selected-option">기업보험비교</li><!-- 기본선택항목 -->
                <li>마이유비즈</li>
                <li>간편보상청구</li>
                <li>혜택</li>
                <li>고객센터</li>
                <li>회사소개</li>
            </ul>
        </div>

        <!-- 2depth menu -->
        <div class="depth">
            <div class="selected">
                <div class="selected-value">기업보험비교</div>
                <div class="arrow"></div>
            </div>
            <ul class="clearfix inb">
                <li>기업보험비교</li>
                <li class="selected-option">보험상품안내</li><!-- 기본선택항목 -->
            </ul>
        </div>

        <!-- 3depth menu -->
        <div class="depth">
            <div class="selected">
                <div class="selected-value">화재/재산/동산</div>
                <div class="arrow"></div>
            </div>
            <ul class="clearfix inb">
                <li class="selected-option">화재/재산/동산</li><!-- 기본선택항목 -->
                <li>단체상해보험</li>
                <li>배상책임</li>
                <li>근로자 재해</li>
                <li>해상/적하/운송</li>
                <li>건설공사/기계/기술</li>
            </ul>
        </div>
    </div>
</div>

<script>
    // select box script
    const selectBoxElements = document.querySelectorAll(".depth");

    selectBoxElements.forEach(selectBoxElement => {
        const selectedValueElement = selectBoxElement.querySelector(".selected-value");
        const selectedOptionElement = selectBoxElement.querySelector(".selected-option");
        const options = selectBoxElement.querySelectorAll("li");

        selectBoxElement.addEventListener("click", function (event) {
            const target = event.target;

            if (target.tagName === "LI") {
            selectedValueElement.textContent = target.textContent;
            selectedOptionElement.classList.remove("selected-option");
            target.classList.add("selected-option");
            }

            selectBoxElement.classList.toggle("active");
        });

        document.addEventListener("click", function (event) {
            if (!selectBoxElement.contains(event.target)) {
            selectBoxElement.classList.remove("active");
            }
        });

        selectedValueElement.textContent = selectedOptionElement.textContent;
    });
</script>