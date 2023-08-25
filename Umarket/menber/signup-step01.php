<?php 
$menuNo=[0,2,1];
include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/header.php"; 
?>

<div class="member-wrap">
    <h2 class="title">Create New Account</h2>

    <div class="inp-box-first">
        <ul class="clearfix inb">
            <li>
                <div class="email member-input-error">
                    <strong>Email</strong>
                    <input type="text" class="" placeholder="abc@abc.com" value="admin@admin.com">
                    <!-- <div class="check-item"><i class="icon-check"></i></div> 기본상태 -->
                    <!-- <div class="check-item"><i class="icon-check active"></i></div> 이메일 확인 -->
                    <div class="check-item"><i class="icon-check error"></i></div><!-- 이메일 중복시 -->
                </div>
                <div class="member-text-error" style="display: flex;"><i class="icon-error"></i>이미 사용중인 아이디 입니다.</div>
            </li>
            
            <li>
                <div class="password">
                    <strong>Password</strong>
                    <input type="password" name="" id="password1" class="password" placeholder="최소 6자리이 이상">
                    <div class="eyes-item"><i class="eyes-on" onclick="togglePassword(this, 'password1')"></i></div>
                </div>
            </li>
            
            <li>
                <div class="password-confirm">
                    <strong>Confirm Password</strong>
                    <input type="password" name="" id="password2" class="password" placeholder="최소 6자리이 이상">
                    <div class="eyes-item"><i class="eyes-on" onclick="togglePassword(this, 'password2')"></i></div>
                </div>

                <div class="member-text-error" style="display: none;"><i class="icon-error"></i>비밀번호가 일치하지 않습니다.</div>
            </li>
        </ul>
    </div>

    <div class="text-cont-wrap">
        <p>
            By clicking the <span class="accent">Create Accout</span> button, you agree to our
            <a href="" class="">terms of use</a> and 
            <a href="" class="">privacy policy</a>.
        </p>
    </div>

    <div class="btn-box-wrap second">
        <a href="signup-step02.php" class="button point radius-36">Create Account</a>
    </div>

    <script>
        function togglePassword(eyeIcon, inputId) {
            const passwordInput = document.getElementById(inputId);
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('eyes-on');
                eyeIcon.classList.add('eyes-off');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('eyes-off');
                eyeIcon.classList.add('eyes-on');
            }
        }
    </script>
</div>
</body>
</html>