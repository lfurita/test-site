

<!-- /******************************** 기업보험비교 -->
<? if($menuNo[0]==1 && $menuNo[1]==1): ?>


<!-- /**** 보험상품안내 -->
<? elseif($menuNo[0]==1 && $menuNo[1]==2 && $menuNo[2]==1): ?>
<div class="sub-visual insurance">
    <div class="inner">
        <div class="sm-eng">Fire / Property / Personal Property</div>
        <h2>화재/재산/동산</h2>
        <p>
            <span>필요한 기업보험이 어떤 보험인지 자세히 확인하시고</span>
            <span>기업보험 비교를 신청해 보세요.</span>
        </p>
    </div>
</div>
<!-- /**** 배상책임보험 -->
<? elseif($menuNo[0]==1 && $menuNo[1]==2 && $menuNo[2]==2): ?>
<div class="sub-visual insurance">
    <div class="inner">
        <div class="sm-eng">Liability Insurance</div>
        <h2>배상책임보험</h2>
        <p>
            <span>필요한 기업보험이 어떤 보험인지 자세히 확인하시고</span>
            <span>기업보험 비교를 신청해 보세요.</span>
        </p>
    </div>
</div>
<!-- /**** 단체상해보험 -->
<? elseif($menuNo[0]==1 && $menuNo[1]==2 && $menuNo[2]==3): ?>
<div class="sub-visual insurance">
    <div class="inner">
        <div class="sm-eng">Fire / Property / Personal Property</div>
        <h2>단체상해보험</h2>
        <p>
            <span>우리 직원들의 안전한 일터 우리 직원들의 안전한 일터</span>
        </p>
    </div>
</div>

<!-- /******************************** 마이유비즈 -->
<? elseif($menuNo[0]==3): ?>
<div class="sub-visual life">
    <div class="inner">
        <h2>단체가입</h2>
        <p>알아두면 유용한 생활 정보</p>
    </div>
</div>

<!-- /******************************** 단체가입 -->
<? elseif($menuNo[0]==5 && $menuNo[1]==1): ?>
<div class="sub-visual terms">
    <div class="inner">
        <h2>단체가입</h2>
    </div>
</div>

<!-- /******************************** 단체가입 -->
<? elseif($menuNo[0]==5 && $menuNo[1]==2): ?>
<div class="sub-visual terms">
    <div class="inner">
        <h2>단체가입</h2>
    </div>
</div>
<? endif ?>

<?php  include $_SERVER['DOCUMENT_ROOT']."/ubiz/include/location.php";?>

