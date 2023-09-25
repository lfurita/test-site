
    <div class="button-wrap bottom">
        <? if($menuNo[0]==1 && $menuNo[1]==1): ?>
            <a onClick="history.go(-1)" class="button prev">취소</a>
            <a href="step02.php" class="button next">다음단계</a>
        <? elseif($menuNo[0]==1 && $menuNo[1]==2): ?>
            <a onClick="history.go(-1)" class="button prev">이전</a>
            <a href="step03.php" class="button next">다음단계</a>
        <? elseif($menuNo[0]==1 && $menuNo[1]==3): ?>
            <a onClick="history.go(-1)" class="button prev">이전</a>
            <a href="step04.php" class="button next">다음단계</a>
        <? elseif($menuNo[0]==1 && $menuNo[1]==4): ?>
            <a onClick="history.go(-1)" class="button prev">이전</a>
            <a href="step05.php" class="button next">최종 확인 및 결제</a>
        <? elseif($menuNo[0]==1 && $menuNo[1]==5): ?>
            <a onClick="history.go(-1)" class="button prev">취소</a>
            <a href="step06.php" class="button next">카드결제</a>
        <? elseif($menuNo[0]==1 && $menuNo[1]==6): ?>
            <a onClick="history.go(-1)" class="button prev">취소</a>
            <a href="/new2023/m" class="button next">확인</a>
        <? endif ?>
    </div>


<script>
    // 모바일 height 100vh 관련
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    window.addEventListener('resize', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
    window.addEventListener('touchend', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });    
</script>

<script src="/new2023/m/js/downupPopup.js" defer></script>
<?php
// Modal
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/sbscr-info.php";   // 가입정보수정
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/product-info.php"; // 상품안내
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/things-know.php";  // 알아두실사항

include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/restrict.php";        // 여행금지국가
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/disease.php";         // 입원, 수술, 질병확진

include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/step04-terms01.php"; // 이용약관
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/step04-terms02.php"; // 개인정보수집 및 이용 동의
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/step04-terms03.php"; // 개인정보 처리 및 단체가입규약 동의
include $_SERVER['DOCUMENT_ROOT']."/new2023/m/modal/step04-terms04.php"; // 보험약관
?>
</body>
</html>