<?php 
$menuNo=[0,1];
include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/header.php"; 
?>

<div class="member-wrap">
    <div class="logo-item">
        <figure><img src="../img/member/logo.png" alt="LOGO"></figure>
    </div>

    <h2>Welcome back!</h2>
    <p class="cont-explain">Please log in to use member services.</p>

    <div class="inp-box-wrap">
        <ul class="clearfix inb">
            <li>
                <div class="email">
                    <strong>Email</strong>
                    <input type="text" name="" id="" placeholder="abc@abc.com">
                </div>
            </li>
            <li>
                <div class="password">
                    <strong>Password</strong>
                    <input type="password" name="" id="password" class="password" placeholder="">
                    <div class="eyes-item"><i class="eyes-on" onclick="togglePassword(this, 'password')"></i></div>
                </div>
            </li>
        </ul>
    </div>

    <div class="bottom-text-wrap">
        <div class="pw-item">
            <a href="">Forgot Password?</a>
        </div>
        <div class="signup-item">
            Create An Account <a href="signup-step01.php">Sign Up</a>
        </div>
    </div>

    <div class="btn-box-wrap first">
        <a href="/Umarket/" class="button point radius-36">Login</a>
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