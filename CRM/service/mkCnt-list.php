<?php 
$menuNo=[3,1,1];
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
            <h1>보험 계약</h1>
            <div class="details-table">
                <ul>
                    <li class="title">상태</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>선택</option>
                                <option value="" >상담/설계</option>
                                <option value="">심사</option>
                                <option value="">계약완료</option>
                                <option value="">취소</option>
                            </select>
                        </div>
                    </li>
                    <li class="title">가입상품</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>선택</option>
                                <option value="" >생산물배상책임보험</option>
                                <option value="">국내근로자재해보험</option>
                            </select>
                        </div>
                    </li>
                    <li class="title">담당자</li>
                    <li>
                        <input type="text" name="" id="" placeholder="담당자 입력">
                    </li>
                    
                    <li class="title">취급 담당자</li>
                    <li>
                        <input type="text" name="" id="" placeholder="취급 담당자 입력">
                    </li>
                    <li class="title">진행년도</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>진행년도 선택</option>
                                <option value="">2023</option>
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                                <option value="">2019</option>
                                <option value="">2018</option>
                            </select>
                        </div>
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
                </ul>
            </div>
            <div class="btn-box-conts">
                <a href="" class="button search"><i class="icon-search"></i>검색</a>
            </div>

            <div class="table-box">
                <table class="table-link">
                    <colgroup>
                        <col width="3%">
                        <col width="7%">
                        <col width="7%">
                        <col width="10%">
                        <col width="8%">
                        <col width="8%">
                        <col width="7%">
                        <col width="10%">
                        <col width="7%">
                        <col width="8%">
                        <col width="8%">
                        <col width="*">
                        <col width="9%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>상태</th>
                            <th>보험종목</th>
                            <th>상품명</th>
                            <th>계약자</th>
                            <th>피보험자</th>
                            <th>계약일</th>
                            <th>보험 기간</th>
                            <th>계약 담당자</th>
                            <th>연락처</th>
                            <th>이메일</th>
                            <th>취급 담당자 (주/부)</th>
                            <th>갱신 알림</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">22</td>
                            <td onclick="location.href='mkCnt-modify.php';">상담/설계</td>
                            <td onclick="location.href='mkCnt-modify.php';">배상책임</td>
                            <td onclick="location.href='mkCnt-modify.php';">생산물배상책임보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">-</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">김성일/민경선</td>
                            <td class="p0">&nbsp;</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">21</td>
                            <td onclick="location.href='mkCnt-modify.php';">심사</td>
                            <td onclick="location.href='mkCnt-modify.php';">근재보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">국내근로자재해보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">-</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">민경선</td>
                            <td class="p0">&nbsp;</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">20</td>
                            <td onclick="location.href='mkCnt-modify.php';">심사</td>
                            <td onclick="location.href='mkCnt-modify.php';">배상책임</td>
                            <td onclick="location.href='mkCnt-modify.php';">국내근로자재해보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">-</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">김성일</td>
                            <td class="p0">&nbsp;</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">19</td>
                            <td onclick="location.href='mkCnt-modify.php';">계약완료</td>
                            <td onclick="location.href='mkCnt-modify.php';">근재보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">국내근로자재해보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">민경선</td>
                            <td class="p0">
                                <div class="day-item">
                                    <span>60</span>
                                    <span>30</span>
                                    <span>15</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">18</td>
                            <td onclick="location.href='mkCnt-modify.php';">취소</td>
                            <td onclick="location.href='mkCnt-modify.php';">배상책임</td>
                            <td onclick="location.href='mkCnt-modify.php';">생산물배상책임보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">-</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">김성일</td>
                            <td class="p0"></td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">17</td>
                            <td onclick="location.href='mkCnt-modify.php';">상담/설계</td>
                            <td onclick="location.href='mkCnt-modify.php';">배상책임</td>
                            <td onclick="location.href='mkCnt-modify.php';">국내근로자재해보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">민경선</td>
                            <td class="p0"></td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">16</td>
                            <td onclick="location.href='mkCnt-modify.php';">심사</td>
                            <td onclick="location.href='mkCnt-modify.php';">배상책임</td>
                            <td onclick="location.href='mkCnt-modify.php';">생산물배상책임보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">-</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">김성일</td>
                            <td class="p0"></td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">15</td>
                            <td onclick="location.href='mkCnt-modify.php';">심사</td>
                            <td onclick="location.href='mkCnt-modify.php';">배상책임</td>
                            <td onclick="location.href='mkCnt-modify.php';">국내근로자재해보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">-</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">민경선</td>
                            <td class="p0"></td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">14</td>
                            <td onclick="location.href='mkCnt-modify.php';">계약완료</td>
                            <td onclick="location.href='mkCnt-modify.php';">배상책임</td>
                            <td onclick="location.href='mkCnt-modify.php';">생산물배상책임보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">-</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">김성일</td>
                            <td class="p0">
                                <div class="day-item">
                                    <span>60</span>
                                    <span>30</span>
                                    <span>15</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">13</td>
                            <td onclick="location.href='mkCnt-modify.php';">취소</td>
                            <td onclick="location.href='mkCnt-modify.php';">근재보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">국내근로자재해보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">민경선</td>
                            <td class="p0"></td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">12</td>
                            <td onclick="location.href='mkCnt-modify.php';">상담/설계</td>
                            <td onclick="location.href='mkCnt-modify.php';">배상책임</td>
                            <td onclick="location.href='mkCnt-modify.php';">생산물배상책임보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">-</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">김성일</td>
                            <td class="p0"></td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">11</td>
                            <td onclick="location.href='mkCnt-modify.php';">심사</td>
                            <td onclick="location.href='mkCnt-modify.php';">근재보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">국내근로자재해보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">민경선</td>
                            <td class="p0"></td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">10</td>
                            <td onclick="location.href='mkCnt-modify.php';">심사</td>
                            <td onclick="location.href='mkCnt-modify.php';">배상책임</td>
                            <td onclick="location.href='mkCnt-modify.php';">생산물배상책임보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">청학씨엔씨</td>
                            <td onclick="location.href='mkCnt-modify.php';">-</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">김성일</td>
                            <td class="p0"></td>
                        </tr>
                        <tr>
                            <td onclick="location.href='mkCnt-modify.php';">9</td>
                            <td onclick="location.href='mkCnt-modify.php';">계약완료</td>
                            <td onclick="location.href='mkCnt-modify.php';">근재보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">국내근로자재해보험</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">디와이글로벌㈜</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">2023.01.01~2024.01.01</td>
                            <td onclick="location.href='mkCnt-modify.php';">김철수</td>
                            <td onclick="location.href='mkCnt-modify.php';">02-1234-1234</td>
                            <td onclick="location.href='mkCnt-modify.php';">abc@bis.co.kr</td>
                            <td onclick="location.href='mkCnt-modify.php';">민경선</td>
                            <td class="p0">
                                <div class="day-item">
                                    <span class="active">60</span>
                                    <span class="active">30</span>
                                    <span>15</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/service/pagination.php"; ?>
            </div>
        </div>
    </div>
    

<?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/footer.php"; ?>