<? $mNum = "0"; ?>
<?php include 'include/header.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" type="text/css" href="/samsun.b2b/css/member.css">
    <div class="login-wrap">
        <div class="login-cont-box">
            <div class="info-box-left">
                <h1><img src="/samsun.b2b/img/common/logo-toursafe.png" alt="투어세이프 로고"></h1>
                <div class="rgstr-guide-wrpa">
                    <div class="rgstr-guide">
                        <strong>가입안내</strong>
                        <p class="type-number">1. 가입 시 비용이 발생 하지 않습니다.</p>
                        <p class="type-number">2. 사업자 등록 증은 필수 사항 입니다. 가입전 미리 준비해 주세요.</p>
                        <p class="type-number">3. 가입 후 관리자 승인이 필요 합니다.</p>
                    </div>

                    <div class="user-manual">
                        <strong>사용자 메뉴얼</strong>
                        <a href="#;" class="button gray">다운로드</a>
                    </div>

                    <div class="join-contact">
                        <strong>가입문의</strong>
                        <span class="tel-number">1800-9010</span>
                    </div>
                </div>

                <div class="banner">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="login-box-right">
                <h2>투어세이프 파트너스 <span>로그인</span></h2>

                <div class="login-inputbox-wrap">
                    <ul class="clearfix inb">
                        <li>
                            <input type="text" class="input-login" name="" id=""  placeholder="admin ID">
                        </li>
                        <li>
                            <input type="password" class="input-login" name="" id=""  placeholder="password">
                        </li>
                        <li>
                            <a href="service/register/register.php" class="button blue">LOGIN</a>
                        </li>
                    </ul>
                    <div class="save-find">
                        <div class="check-box-save">
                            <div class="checkbox">
                                <input type="checkbox" id="cb" name="cb" />
                                <label for="cb"></label>
                            </div>
                            아이디 저장
                        </div>
                        <div class="find-right-area">
                            <a href="service/member/forget.php" class="link-find">아이디 찾기</a>
                            <a href="service/member/forget.php" class="link-find">비밀번호 찾기</a>
                        </div>
                    </div>
                    <div class="join-wrap">
                        <a href="service/member/join.php" class="button gray">회원가입</a>
                    </div>
                </div>
            </div>
        </div>  
    </div>    
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</body>
</html>