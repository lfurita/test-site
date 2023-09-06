<div class="menu-box">
    <ul class="menu-cont-item">
        <li class="list-item <?=($menuNo[0]==2)?"active":""?>"><span>고객(사) 관리</span>
            <ul class="items">
                <li class="<?=($menuNo[0]==2 && $menuNo[1]==1)?"on":""?>"><a href="/CRM/service/cstmr-list.php">전체 리스트</a></li>
                <li class="<?=($menuNo[0]==2 && $menuNo[1]==2)?"on":""?>"><a href="/CRM/service/cstmr-register.php">고객 등록</a></li>
            </ul>
        </li>
        <li class="list-item <?=($menuNo[0]==3)?"active":""?>"><span>보험 계약 관리</span>
            <ul class="items">
                <li class="<?=($menuNo[0]==3 && $menuNo[1]==1)?"on":""?>"><a href="/CRM/service/">전체 리스트</a></li>
                <li class="<?=($menuNo[0]==3 && $menuNo[1]==2)?"on":""?>"><a href="/CRM/service/">계약 등록</a></li>
                <li class="<?=($menuNo[0]==3 && $menuNo[1]==3)?"on":""?>"><a href="/CRM/service/">거래처 관리</a></li>
            </ul>
        </li>
        <li class="list-item <?=($menuNo[0]==4)?"active":""?>"><span>기초 정보</span>
            <ul class="items">
                <li class="<?=($menuNo[0]==4 && $menuNo[1]==1)?"on":""?>"><a href="/CRM/service/insur-list.php">보험사 관리</a></li>
                <li class="<?=($menuNo[0]==4 && $menuNo[1]==2)?"on":""?>"><a href="/CRM/service/inprd-list.php">보험상품 관리</a></li>
            </ul>
        </li>
    </ul>
</div>

<script>
    const list = document.querySelectorAll('.list-item');
    function accordion(e) {
    e.stopPropagation();
    if (this.classList.contains('active')) {
        this.classList.remove('active');
    } else
    if (this.parentElement.parentElement.classList.contains('active')) {
        this.classList.add('active');
    } else
    {
        for (i = 0; i < list.length; i++) {
        list[i].classList.remove('active');
        }
        this.classList.add('active');
    }
    }
    for (i = 0; i < list.length; i++) {
    list[i].addEventListener('click', accordion);
    }
</script>