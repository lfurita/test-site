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
                        <h2>여행 기본 정보</h2>
                    </div>
                    
                    <div class="sort-box first">
                        <h3>여행종류</h3>
                        <div class="radio-box">
                            <div class="travel first">
                                <input type="radio" id="dmstc" name="dmstcFrgn" checked="checked">
                                <label for="dmstc">해외</label>
                            </div> 
                            <div class="travel last">
                                <input type="radio" id="ovrss" name="dmstcFrgn">
                                <label for="ovrss">국내</label>
                            </div> 
                        </div>
                        <div class="text-box">
                            <p>1. 여러국가를 여행하셔도 보장되오니, <span class="fc-sky">여러국가를 여행하실 경우에는 가장 오래 체류할 국가를 선택</span>해주시면 됩니다. 
                            단, 여행 예정인 국가 중 보험인수 제한 국가가 포함되어 있을 경우 보험 가입이 불가능합니다. ( 
                            <a name="restrict" class="restrict" motion="three">여행금지국가</a> 확인)<br>
                            ※ 여행 중 해당 국가에 여행금지 구역 방문하는 경우 보상이 되지 않을 수 있습니다.</p>
                            <p>2. 이중국적자, 외국인의 경우 모국으로 여행은 가입 불가합니다.</p>
                            <p>3. 가입 시점의 현재 체류지가 국내인 경우에만 가입이 가능합니다.</p>
                        </div>
                    </div>

                    <div class="sort-box">
                        <ul>
                            <li>
                                <strong>여행국가</strong>
                                <input type="text" class="input02" name="nation_search" id="nation_search" value="" placeholder="여행국가 명을 입력하세요.">
                            </li>
                            <li>
                                <strong>출국목적</strong>
                                <div class="select-box">
                                    <!-- 국낸/해외 단기일경우 -->
                                    <select name="trip_purpose" style="display: none;">
                                        <option value="1" selected="selected">여행/관광</option>
                                        <option value="2">연수/출장</option>
                                    </select>                                    
                                    <!-- 해외 장기일경우 -->
                                    <select name="">
                                        <option value="1" selected="selected">유학/연수</option>
                                        <option value="2">주재원</option>
                                        <option value="2">업무/출장</option>
                                        <option value="2">워킹홀리데이</option>
                                    </select>
                                </div>
                            </li>
                            
                            <li>
                                <strong>출발일(출국일)</strong>
                                <div class="date_picker">
                                    <input type="text" class="picker" name="start_date" id="start_date" readonly placeholder="YYYY.MM.DD">
                                </div>
                            </li>
                            <li>
                                <strong>도착일(입국일)</strong>
                                <div class="date_picker">
                                    <input type="text" class="picker" name="end_date" id="end_date" readonly placeholder="YYYY.MM.DD">
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="title-wrap second">
                        <h2>여행자 정보</h2>
                    </div>

                    <div class="sort-box second">
                        <h3 class="first">본인</h3>
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
            <a onClick="history.go(-1)" class="button prev">취소</a>
            <a href="step02.php" class="button next">다음단계</a>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/new2023/include/footer-trip.php"; ?>