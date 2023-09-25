<? $mNum = "6"; ?>
<?php include '../../include/header.php'; ?>
  <link rel="stylesheet" type="text/css" href="/samsun.b2b/css/member.css">

<div class="forget-box-wrap">
    <div class="box-wrap">
        <input class="radio" id="id-find" name="group" type="radio" checked>
        <input class="radio" id="pw-find" name="group" type="radio">

        <div class="tab-menu-wrap">
            <label class="tab" id="id-find-tab" for="id-find">아이디 찾기</label>
            <label class="tab" id="pw-find-tab" for="pw-find">비밀번호 찾기</label>
        </div>

        <div class="panels">
            <!-- 아이디 찾기 start -->
            <div class="panel" id="id-find-panel">
                <div class="id-area">
                    <strong>기업명</strong>
                    <input type="text" class="input-member" name="" id="" placeholder="기업명">
                </div>
                <div class="email-area">
                    <strong>이메일주소</strong>
                    <input type="text" class="input-member" name="" id="" placeholder="이메일주소">
                </div>
                
                <div class="center-button-area">
                    <a href="#;" class="button blue">LOGIN</a>
                </div>
            </div>
            <!-- 아이디 찾기 end -->
            
            <!-- 비밀번호 찾기 start -->
            <div class="panel" id="pw-find-panel">
                <div class="id-area">
                    <strong>아이디</strong>
                    <input type="text" class="input-member" name="" id="" placeholder="아이디">
                </div>
                <div class="id-area">
                    <strong>기업명</strong>
                    <input type="text" class="input-member" name="" id="" placeholder="기업명">
                </div>
                <div class="email-area">
                    <strong>이메일주소</strong>
                    <input type="text" class="input-member" name="" id="" placeholder="이메일주소">
                </div>
                
                <div class="center-button-area">
                    <a href="#;" class="button blue">확인</a>
                </div>
            </div>
            <!-- 비밀번호 찾기 end -->
        </div>
    </div>
</div>


<?php include '../../include/footer.php'; ?>