<?php
$menuNo=[2,0];
include $_SERVER['DOCUMENT_ROOT']."/new2023/include/header.php";
include $_SERVER['DOCUMENT_ROOT']."/new2023/include/sub-visual.php";
?>
<div class="content-wrap">
    <form name="send_form" id="send_form">
        <div class="check-box-wrap">
            <h2>인증받으실 휴대폰 번호를 입력해주세요.</h2>
            <div class="ph-box-wrap">
                <ul class="clearfix inb">
                    <li><input type="tel" class="input01" name="phone1" id="phone1"  maxlength='4'></li>

                    <li class="dash">-</li>

                    <li><input type="tel" class="input01" name="phone2" id="phone2"  maxlength='4'></li>

                    <li class="dash">-</li>

                    <li><input type="tel" class="input01" name="phone3" id="phone3"  maxlength='4'></li>
                </ul>
                <div class="btn-box-center">
                    <a href="javascript:void(0);" onclick="check_form();" class="button red">인증번호 받기</a>
                </div>
            </div>

            <div class="numberhidden" id="r_hp" style="display:none">
                <h3>수신받은 인증번호를 3분 이내로 입력해주세요.</h3>
                <ul class="number inb">
                    <li><input type="tel" name="phone_c" id="phone_c" class="input01" placeholder="인증번호" maxlength='6'></li>
                    <li><a  href="javascript:void(0);" onclick="check_phone();" class="button red">인증완료</a></li>
                </ul>
            </div>
        </div>
    </form>
</div>
<?php 
include $_SERVER['DOCUMENT_ROOT']."/new2023/include/footer.php";
?>