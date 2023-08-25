
<!-- Footer start -->    
<footer>
    <div class="foot-menu">
        <a href="" class="">Privacy Policy <i class="icon-arrow">></i></a>
        <a href="" class="">Terms of Use <i class="icon-arrow">></i></a>
        <a href="" class="">Help Center <i class="icon-arrow">></i></a>
    </div>
    <div class="cont-box-item">
        <p>Quality and convenience meet at our grocery mart! Fresh produce, pantry essentials, delightful treats, and more—all under one roof. Elevate your cooking with premium ingredients. Join us for a world of flavors and possibilities!</p>
    </div>
</footer>
<!-- Footer end -->
<? if($menuNo[0]==4 && $menuNo[1]==2): ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/bottom-view.php"; ?>

<? elseif($menuNo[0]==0): ?>
<!-- no bottom 일 경우 모음 -->

<? else: ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/bottom-menu.php"; ?>
<? endif ?>
  
  <!-- design Js -->
  <script type="text/javascript" src="/Umarket/js/design.js"></script>
</body>
</html>