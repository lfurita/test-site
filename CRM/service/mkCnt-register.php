<?php 
$menuNo=[3,2,1];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php"; 
?>
<script type="text/javascript">
    // 달력 script
    $(document).ready(function() {
      var today = new Date();
      var tomorrow = new Date(Date.parse(today) + (1000 * 60 * 60 * 24));
  
      $("#start_date").datepicker({
        showOn: "both",
        dateFormat: "yy-mm-dd",
        buttonImage: "../img/service/icon-calendar.svg?e",
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
        buttonImage: "../img/service/icon-calendar.svg?e",
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

    <div class="servContents">
        <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>

        <div class="conts-box">
            <h1>보험 계약 등록</h1>

            <div class="indvd-bsns">
                <div class="selector">
                    <input type="radio" id="mkStart" name="mk" checked>
                    <label for="mkStart">시작</label>
                </div>
                
                <div class="selector">
                    <input type="radio" id="mkDesig" name="mk">
                    <label for="mkDesig">설계/상담</label>
                </div>
                
                <div class="selector">
                    <input type="radio" id="mkDone" name="mk">
                    <label for="mkDone">계약완료</label>
                </div>
                
                <div class="selector">
                    <input type="radio" id="mkCancel" name="mk">
                    <label for="mkCancel">취소</label>
                </div>
            </div>

            <!-- /** 기본 정보 -->
            <h2 class="subtitle">기본 정보</h2>
            <div class="write-table mgT10">
                <ul>
                    <li class="title">계약구분</li>
                    <li class="fees">
                        <div class="radiobox"><!-- /** 비황성시 class="disabled" 넣기 -->
                            <input id="new" class="radio-custom" name="radioGr" type="radio" checked>
                            <label for="new" class="radio-custom-label">신규</label>
                        </div>
                        <div class="radiobox">
                            <input id="novation" class="radio-custom"name="radioGr" type="radio">
                            <label for="novation" class="radio-custom-label">갱신</label>
                        </div>

                        <div class="select-custom bord-left">
                            <select name="" id="">
                                <option value="" >자사</option>
                                <option value="" >자사1111</option>
                                <option value="">자사2222</option>
                            </select>
                        </div>
                    </li>                    
                    <li class="title">상태</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="">심사</option>
                                <option value="" selected>상담/설계</option>
                                <option value="">계약완료</option>
                                <option value="">취소</option>
                            </select>
                        </div>
                    </li>

                    <li class="title">구분 *</li>
                    <li class="fees">
                        <div class="radiobox">
                            <input id="in1" class="radio-custom" name="insurance" type="radio" checked>
                            <label for="in1" class="radio-custom-label">손해보험</label>
                        </div>
                        <div class="radiobox">
                            <input id="in2" class="radio-custom"name="insurance" type="radio">
                            <label for="in2" class="radio-custom-label">생명보험</label>
                        </div>
                    </li>
                    <li class="title">보험 상품</li>
                    <li>
                        <div class="search-item radius-5">
                            <i class="icon-search">검색아이콘</i>
                            <input type="search" class="input" placeholder="보험상품명">
                            <button class="btnClear"></button>
                        </div>
                        <!--div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>분류</option>
                                <option value="">심사</option>
                                <option value="">계약완료</option>
                                <option value="">취소</option>
                            </select>
                        </div>
                        
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>심사</option>
                                <option value="">종목</option>
                                <option value="">계약완료</option>
                                <option value="">취소</option>
                            </select>
                        </div-->
                    </li>

                    <li class="title">보험기간</li>
                    <li>
                        <div class="date_picker">
                            <input type="text" class="picker format-date" name="start_date" id="start_date"  placeholder="YYYY-MM-DD" maxlength="10">
                        </div>
                        <span class="picker-interval">~</span>
                        <div class="date_picker">
                            <input type="text" class="picker format-date" name="end_date" id="end_date"  placeholder="YYYY-MM-DD" maxlength="10">
                        </div>
                    </li>
                    <li class="title">견적 보험료</li>
                    <li>
                        <input type="number" name="" id="" class="widht-200" placeholder="금액 입력"> 원
                    </li>
                </ul>
            </div>
            
            <!-- /** 계약 정보 -->
            <h2 class="subtitle">계약 정보</h2>
            <div class="write-table mgT10">
                <ul>
                    <li class="title">계약자(고객) *</li>
                    <li>
                        <div class="search-item radius-5">
                            <i class="icon-search">검색아이콘</i>
                            <input type="search" class="input" placeholder="홍길동">
                            <button class="btnClear"></button>
                        </div>
                    </li>
                    <li class="title">피보험자</li>
                    <li>
                        <input type="number" name="" id="" placeholder="피보험자 입력">
                    </li>
                </ul>
            </div>
            
            <h2 class="subtitle">계약 담당</h2>
            <div class="write-table mgT10">
                <ul>
                    <li class="title">취급 담당자</li>
                    <li class="second">
                        <div class="second-wrap">
                            <strong>주 :</strong>
                            <div class="select-custom">
                                <select name="" id="">
                                    <option value="" selected>선택</option>
                                    <option value="" >홍길동</option>
                                    <option value="" >홍길순</option>
                                </select>
                            </div>
                        </div>

                        <div class="second-wrap">
                            <strong>부 :</strong>
                            <div class="select-custom">
                                <select name="" id="">
                                    <option value="" selected>선택</option>
                                    <option value="" >홍길동</option>
                                    <option value="" >홍길순</option>
                                </select>
                            </div>
                        </div>
                    </li>
                    <li class="title">실적배분</li>
                    <li class="second">
                        <div class="second-wrap">
                            <strong>주 :</strong>
                            <div class="select-custom width-35p">
                                <select name="" id="">
                                    <option value="" >100</option>
                                    <option value="" >95</option>
                                    <option value="" >90</option>
                                    <option value="" >80</option>
                                    <option value="" selected>70</option>
                                    <option value="" >60</option>
                                    <option value="" >50</option>
                                </select>
                            </div>
                            %
                        </div>
                        <div class="second-wrap">
                            <strong>부 :</strong>
                            <div class="select-custom width-35p disabled">
                                <select name="" id="" disabled>
                                    <option value="" >0</option>
                                    <option value="" >50</option>
                                    <option value="" >40</option>
                                    <option value="" selected>30</option>
                                    <option value="" >20</option>
                                    <option value="" >10</option>
                                    <option value="" >5</option>
                                    <option value="" >0</option>
                                </select>
                            </div>
                            %
                        </div>
                    </li>
                </ul>
            </div>
            
            <h2 class="subtitle">수수료</h2>
            <div class="write-table mgT10">
                <ul>
                    <li class="title">상품 수수료</li>
                    <li class="third">
                        <div class="third-wrap">
                            기본 :<input type="number" name="" id="" class="" placeholder="0"> %
                        </div>

                        <span>+</span>
                        
                        <div class="third-wrap">
                            추가 :<input type="number" name="" id="" class="" placeholder="0"> %
                        </div>
                    </li>                    
                    <li class="title">지급광고비</li>
                    <li>
                        <div class="advert-cost">
                            <strong>거래처 :</strong>
                            <input type="text" name="" id="" class="" placeholder="거래처명 입력">
                            <input type="number" name="" id="" class="" placeholder="수수료율">
                            %
                        </div>
                    </li>
                </ul>
            </div>
            
            <h2 class="subtitle">기타</h2>
            <div class="write-table mgT10">
                <ul>
                    <li class="title2">메모</li>
                    <li class="first tarea">
                        <textarea name="" id="" class="textarea" placeholder="추가 사항 입력"></textarea>
                    </li>
                </ul>
            </div>

            <div class="btn-box-conts mgB30">
                <a href="mkCnt-list.php" class="button point rgstr">등록</a>
            </div>
        </div>
    </div>
    
<?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/footer.php"; ?>