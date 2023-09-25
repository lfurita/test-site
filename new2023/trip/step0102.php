<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/header-trip.php"; ?>

<script type="text/javascript">
    // 달력 script
    $(document).ready(function() {
      var today = new Date();
      var tomorrow = new Date(Date.parse(today) + (1000 * 60 * 60 * 24));
  
      $("#start_date").datepicker({
        showOn: "both",
        dateFormat: "yy-mm-dd",
        buttonImage: "/new2023/img/trip/icon-calendar.svg?en",
        buttonImageOnly: true,
        showOtherMonths: true,
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
        monthNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
        buttonText: "Select date",
        minDate: today,
        onClose: function( selectedDate ) {  
        }         
      });
  
      $(" #end_date").datepicker({
        showOn: "both",
        dateFormat: "yy-mm-dd",
        buttonImage: "/new2023/img/trip/icon-calendar.svg?en",
        buttonImageOnly: true,
        showOtherMonths: true,
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
        monthNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
        buttonText: "Select date",
        minDate: tomorrow              
      });
    });
</script>
<div class="content">
    <?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/menu-trip.php"; ?>

    <div class="cont-wrap">
        <div class="conts-box">
            <form name="sendForm" method="post">
                <section class="sc step1">
                    <div class="title-wrap">
                        <h2>여행자 정보</h2>
                    </div>

                    <div class="sort-box second">
                        <h3>본인</h3>
                        <ul>
                            <li>
                                <strong>생년월일</strong>
                                <input type="text" class="input02" name="nation_search" id="nation_search" value="" placeholder="19800101">
                            </li>
                            <li>
                                <strong>성별</strong>
                                <div class="radio-box">
                                    <div class="travel first">
                                        <input type="radio" id="genderM2" value="1" name="gender2" checked="checked">
                                        <label for="genderM2">남자</label>
                                    </div> 
                                    <div class="travel last">
                                        <input type="radio" id="genderW2" value="2" name="gender2">
                                        <label for="genderW2">여자</label>
                                    </div> 
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="sort-box second">
                        <h3>동반인 <span class="">1</span>
                            <a class="button delete">삭제</a>
                        </h3>
                        <ul>
                            <li>
                                <strong>생년월일</strong>
                                <input type="text" class="input02" name="nation_search" id="nation_search" value="" placeholder="19800101">
                            </li>
                            <li>
                                <strong>성별</strong>
                                <div class="radio-box">
                                    <div class="travel first">
                                        <input type="radio" id="genderM1" value="1" name="gender1" checked="checked">
                                        <label for="genderM1">남자</label>
                                    </div> 
                                    <div class="travel last">
                                        <input type="radio" id="genderW1" value="2" name="gender1">
                                        <label for="genderW1">여자</label>
                                    </div> 
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="button-wrap center">
                        <a  class="button add" name="btnAdd">동반인 추가</a>
                    </div>
                </section>
            </form>
        </div>
        <div class="button-wrap">
            <a onClick="history.go(-1)" class="button prev">이전</a>
            <a href="step02.php" class="button next">다음단계</a> 
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/footer-trip.php"; ?>