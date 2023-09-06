<?php 
$menuNo=[0,1];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/common.php"; 
?>
    <div class="memContents">
        <div class="login-box">
            <div class="logo">
                <img src="../img/common/Logo.png" alt="">
            </div>
            <div class="naming"><strong>C</strong>ustomer <strong>R</strong>elationship <strong>M</strong>anagement</div>

            <div class="input-box">
                <div class="input-item radius-5">
                    <strong>ID</strong>
                    <input type="text" class="" name="" id="" value="" placeholder="admin ID">
                </div>
                <div class="input-item radius-5">
                    <strong>PW</strong>
                    <input type="password" class="" name="" id="" value="" placeholder="password">
                </div>
            </div>

            <div class="check-box save">
                <div class="checkbox">
                    <input type="checkbox" id="saveId" name="saveId" />
                    <label for="saveId"></label>
                </div>
                아이디 저장
            </div>

            <div class="btn-box-conts">
                <a href="/CRM/" class="button gradient">로그인</a>
            </div>
        </div>
    </div>
</body>
</html>