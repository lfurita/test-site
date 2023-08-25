<?php 
$menuNo=[5,1];
include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/header.php"; 
?>
<div class="basker-cont-wrap">
    <h2>Shopping List</h2>
    
    <div class="box-list-wrap">
        <div class="list-box-item" data-link="">
            <figure><img src="../img/service/view-photo-img.jpg"></figure>

            <div class="conts-ttl-item">
                <h3>Mobile Phone Charging Port Dust Plug for IPhone 14</h3>

                <strong>₱15,000</strong>
                <div class="input-number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" >-</button>
                    <input type="number" name="quantity" id="quantity" class="qty" value="10">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
                </div>
            </div>

            <a class="delete">
                <span></span>
            </a>
        </div>

        <div class="total-box-item">
            <div class="inner">
                <strong>Total</strong>
                <div class="amount-item">₱ 17,500</div>
            </div>
        </div>

        <div class="btn-box-wrap first">
            <a href="/Umarket/" class="button point radius-10">Check Out</a>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/Umarket/include/footer.php"; ?>