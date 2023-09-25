<? $mNum = "6"; ?>
<?php include '../../include/header.php'; ?>
  <link rel="stylesheet" type="text/css" href="/samsun.b2b/css/member.css">

<div class="join-box-wrap">
    <h2>파트너스 가입</h2>
    <div class="basic-wrap">
        <h3 class="fourth">기본 정보
            <div class="necessary"> <i class="icon-necessary"></i> 표기된 항목은 필수 입력 사항입니다.</div>
        </h3>
        <div class="id-area">
            <strong>아이디 <i class="icon-necessary"></i></strong>
            <input type="text" class="input-member" name="" id="" placeholder="아이디 입력">
        </div>
        <ul class="clearfix inb">
            <li>
                <strong>비밀번호 <i class="icon-necessary"></i></strong>
                <input type="password" class="input-member" name="" id="" placeholder="비밀번호 입력">
            </li>
            <li>
                <strong>비밀번호 확인 <i class="icon-necessary"></i></strong>
                <input type="password" class="input-member" name="" id="" placeholder="비밀번호 확인">
            </li>
            
            <li>
                <strong>회사명 <i class="icon-necessary"></i></strong>
                <input type="text" class="input-member" name="" id="" placeholder="회사명 입력">
            </li>
            <li>
                <strong>사업자번호 <i class="icon-necessary"></i></strong>
                <input type="text" class="input-member" name="" id="" placeholder="‘-’ 없이 작성해주세요" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" pattern="[0-9]*">
            </li>
        </ul>
        <div class="bsnsLic-area">
            <strong>사업자 등록증<i class="icon-necessary"></i></strong>
            <div class="add-file">
                <input type="file" name="str_Image1" id="addfile" class="add-file-input class_img" val1="2" val2="2">
                <div class="add-file-txt">파일 업로드</div>
                <label for="addfile"><div class="add-file-btn">찾아보기</div></label>
            </div>
        </div>
        <ul class="clearfix inb">
            <li>
                <strong>담당자<i class="icon-necessary"></i></strong>
                <input type="text" class="input-member" name="" id="" placeholder="실명 입력">
            </li>
            <li>
                <strong>전화번호<i class="icon-necessary"></i></strong>
                <input type="text" class="input-member" name="" id="" placeholder="‘-’ 없이 작성해주세요" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" pattern="[0-9]*">
            </li>
            
            <li>
                <strong>휴대폰<i class="icon-necessary"></i></strong>
                <input type="text" class="input-member" name="" id="" placeholder="‘-’ 없이 작성해주세요" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" pattern="[0-9]*">
            </li>
            <li>
                <strong>이메일<i class="icon-necessary"></i></strong>
                <input type="text" class="input-member" name="" id="" placeholder="admin@admin.co.kr">
            </li>
        </ul>
        
        <h3 class="privacy fourth">이용약관
            <div class="checkbox-wrap">
                <div class="checkbox">
                    <input type="checkbox" id="terms" name="terms" />
                    <label for="terms"></label>
                </div>
                <span>동의합니다.</span>               
            </div>
        </h3>
        <div class="terms-box">
            <?php include 'terms.php'; ?>
        </div>
        
        <h3 class="privacy">개인정보 수집 및 이용목적
            <div class="checkbox-wrap">
                <div class="checkbox">
                    <input type="checkbox" id="privacy" name="privacy" />
                    <label for="privacy"></label>
                </div>
                <span>동의합니다.</span>               
            </div>
        </h3>
        <div class="terms-box">
            <?php include 'privacy.php'; ?>
        </div>
    </div>

    <div class="center-button-area">
        <a href="#;" class="button blue">가입하기</a>
    </div>
</div>

<script>
    // finle upload
    var fileinput = document.querySelector(".add-file-input"),
        button = document.querySelector(".add-file-btn"),
        returntxt = document.querySelector(".add-file-txt");

    button.addEventListener("keydown", function(event){
        if(event.keyCode == 13 || event.keyCode == 32){
        fileinput.focus();
        }
    });
    button.addEventListener("click", function(event){
        fileinput.focus();
        return false;
    });
    fileinput.addEventListener("change", function(event){
        returntxt.innerHTML = this.value;
    });
</script>

<?php include '../../include/footer.php'; ?>