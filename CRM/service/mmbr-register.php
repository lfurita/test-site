<?php 
$menuNo=[0,4,1];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php";
?>
<div class="servContents">
    <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>
    <div class="conts-box">
        <h1>회원 관리</h1>
        
        <h2 class="subtitle">회원 등록</h2>
        <div class="write-table mgT10">
            <ul>
                <li class="title">아이디 *</li>
                <li>
                    <input type="text" name="" id="" placeholder="아이디 입력">
                </li>
                <li class="title">비밀번호 *</li>
                <li>
                    <input type="password" name="" id="" placeholder="비밀번호 입력">
                </li>
                
                <li class="title">이름 *</li>
                <li>
                    <input type="text" name="" id="" placeholder="이름 입력">
                </li>
                <li class="title">하이웍스 아이디</li>
                <li>
                    <input type="text" name="" id="" placeholder="하이웍스 아이디 입력">
                </li>
                
                <li class="title">휴대폰번호</li>
                <li>
                    <input type="tel" name="" id="" placeholder="휴대폰번호 입력">
                </li>
                <li class="title">이메일</li>
                <li>
                    <input type="email" name="" id="" placeholder="이메일 입력">
                </li>
                
                <li class="title">권한</li>
                <li class="first check-box">
                    <div class="checkbox">
                        <input id="sprnt-1" class="checkbox-custom" name="sprntGr" type="checkbox" checked>
                        <label for="sprnt-1" class="checkbox-custom-label">고객관리</label>
                    </div>
                    <div class="checkbox">
                        <input id="sprnt-2" class="checkbox-custom" name="sprntGr" type="checkbox">
                        <label for="sprnt-2" class="checkbox-custom-label">계약 관리</label>
                    </div>
                    <div class="checkbox">
                        <input id="sprnt-3" class="checkbox-custom" name="sprntGr" type="checkbox">
                        <label for="sprnt-3" class="checkbox-custom-label">기초 정보 관리</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/footer.php"; ?>