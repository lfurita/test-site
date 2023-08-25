<?php 
$menuNo=[3,2];
include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/header.php"; 
?>

<div class="contents-wrap">
    <?php include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/search.php"; ?>

    <div class="sch-menu">
        <ul class="clearfix inb">
            <li><a href="" class="sch-link-item on">Total</a></li>
            <li><a href="" class="sch-link-item">Fresh</a></li>
            <li><a href="" class="sch-link-item">Prozen</a></li>
            <li><a href="" class="sch-link-item">Sauce</a></li>
            <li><a href="" class="sch-link-item">Drink</a></li>
            <li><a href="" class="sch-link-item">Grain</a></li>
            <li><a href="" class="sch-link-item">Etc</a></li>
        </ul>        
    </div>

    <ol class="lst-search">
        <li class="sch-item" data-link="">
            <figure class="radius-8">
                <img src="../img/main/best-list-img-01.jpg" alt="">
            </figure>
            
            <div class="text-list-item">
                <h3>Mobile Phone Charging Port Dust Plug for IPhone 14 13 Pro Max Port Cleaner Kit</h3>
                <p>This product is shower mini cleaning brush, specially used for crevice cleaning Computer Keyboard Cleaner Tool Cleaner Brush</p>
            </div>
        </li>
        <li class="sch-item">
            <figure class="radius-8">
                <img src="../img/main/best-list-img-02.jpg" alt="">
            </figure>
            
            <div class="text-list-item">
                <h3>Max Port Cleaner Comter</h3>
                <p>This product is shower mini cleaning brush, specially used for crevice cleaning Computer Keyboard Cleaner Tool Cleaner Brush</p>
            </div>
        </li>

        <li class="sch-item" data-link="">
            <figure class="radius-8">
                <img src="../img/main/best-list-img-03.jpg" alt="">
            </figure>
            
            <div class="text-list-item">
                <h3>Mobile Phone Charging Port Dust Plug for IPhone 14 13 Pro Max Port Cleaner Kit</h3>
                <p>This product is shower mini cleaning brush, specially used for crevice cleaning Computer Keyboard Cleaner Tool Cleaner Brush</p>
            </div>
        </li>
        <li class="sch-item">
            <figure class="radius-8">
                <img src="../img/main/best-list-img-04.jpg" alt="">
            </figure>
            
            <div class="text-list-item">
                <h3>Max Port Cleaner Comter</h3>
                <p>This product is shower mini cleaning brush, specially used for crevice cleaning Computer Keyboard Cleaner Tool Cleaner Brush</p>
            </div>
        </li>

        <li class="sch-item" data-link="">
            <figure class="radius-8">
                <img src="../img/main/best-list-img-01.jpg" alt="">
            </figure>
            
            <div class="text-list-item">
                <h3>Mobile Phone Charging Port Dust Plug for IPhone 14 13 Pro Max Port Cleaner Kit</h3>
                <p>This product is shower mini cleaning brush, specially used for crevice cleaning Computer Keyboard Cleaner Tool Cleaner Brush</p>
            </div>
        </li>
        <li class="sch-item">
            <figure class="radius-8">
                <img src="../img/main/best-list-img-02.jpg" alt="">
            </figure>
            
            <div class="text-list-item">
                <h3>Max Port Cleaner Comter</h3>
                <p>This product is shower mini cleaning brush, specially used for crevice cleaning Computer Keyboard Cleaner Tool Cleaner Brush</p>
            </div>
        </li>
    </ol>
</div>

<script>
    $(document).ready(function() {
        $('.sch-link-item').click(function(event) {
            // 모든 메뉴 항목에서 "on" 클래스를 제거합니다.
            $('.sch-link-item').removeClass('on');
            // 클릭된 메뉴 항목에 "on" 클래스를 추가합니다.
            $(this).addClass('on');
            event.preventDefault();
        });
    });
</script>

<?php include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/footer.php"; ?>