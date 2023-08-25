<div class="search-wrap">
    <div class="inner">
        <div class="search-item radius-5">
            <i class="icon-search">검색아이콘</i>
            <input type="search" class="input" placeholder="Search any Product..">
            <button class="btnClear"></button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const input = document.querySelector(".search-item input");
        const clearButton = document.querySelector(".btnClear");

        // 초기화 함수: 인풋 내용을 비우고 버튼을 감춤
        function resetInput() {
            input.value = "";
            clearButton.style.display = "none";
        }

        // 입력 내용이 변경될 때마다 버튼을 표시하거나 감춥니다.
        input.addEventListener("input", function () {
            if (input.value === "") {
                clearButton.style.display = "none";
            } else {
                clearButton.style.display = "block";
            }
        });

        // 버튼 클릭 시 초기화 함수 호출
        clearButton.addEventListener("click", resetInput);

        // 페이지 로딩 시 초기화
        resetInput();
    });
</script>