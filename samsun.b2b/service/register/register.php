<? $mNum = "1"; ?>
<?php include '../../include/header.php'; ?>

  <script type="text/javascript">
    // 달력 script
    $(document).ready(function() {
      var today = new Date();
      var tomorrow = new Date(Date.parse(today) + (1000 * 60 * 60 * 24));
  
      $("#start_date").datepicker({
        showOn: "both",
        dateFormat: "yy-mm-dd",
        buttonImage: "/samsun.b2b/img/service/icon-calendar.svg?en",
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
        buttonImage: "/samsun.b2b/img/service/icon-calendar.svg?en",
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

  <!-- 청약등록 start -->
    <!-- 기본정보 start -->
    <div class="search-basic-wrap">
        <h2>기본정보</h2>
        <table class="table-search">
            <colgroup>
                <col width="133px">
                <col width="400px">
                <col width="133px">
                <col width="400px">
                <col width="*">
                <col width="400px">
            </colgroup>
            <tbody>
                <tr>
                    <th>회사명(여행사)</th>
                    <td><input type="text"  class="input-search" name="" id="" readonly value="참좋은 여행사"></td>

                    <th>계약 담당자 <em class="bulStyle1">*</em></th>                    
                    <td>
                        <div class="select-box">
                            <select name="" id="">
                                <option value="">홍길동</option>
                                <option value="">홍길동</option>
                                <option value="">홍길동</option>
                                <option value="">홍길동</option>
                            </select>
                        </div>
                    </td>

                    <th>청약일</th>
                    <td><input type="text"  class="input-search" name="" id="" readonly value="2023. 01. 13"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- 기본정보 end -->
    
    <!-- 여행정보 start -->
    <div class="search-basic-wrap">
        <h2>여행정보</h2>
        <table class="table-search">
            <colgroup>
                <col width="133px">
                <col width="400px">
                <col width="133px">
                <col width="400px">
                <col width="*">
                <col width="400px">
            </colgroup>
            <tbody>
                <tr>
                    <th>여행종류 <em class="bulStyle1">*</em><a id="three" class="btn-travel-type"><i class="icon-question"></i></a></th>
                    <td>
                        <div class="radio-wrap">
                            <input type="radio" id="f-option" name="selector" checked>
                            <label for="f-option">국내</label>
                            <div class="check"></div>
                        </div>
                        <div class="radio-wrap">
                            <input type="radio" id="s-option" name="selector">
                            <label for="s-option">해외</label>
                            <div class="check"><div class="inside"></div></div>
                        </div>
                    </td>

                    <th>여행지역 <em class="bulStyle1">*</em><a id="three" class="btn-travel-area"><i class="icon-globe"></i></a></th>   
                    <td class="inpt">
                        <input type="text"  class="input-search" name="" id="" placeholder="여행국가 명을 입력하세요">
                    </td>

                    <th>여행기간 <em class="bulStyle1">*</em></th>
                    <td class="inpt">
                        <div class="date_picker">
                            <input type="text" class="picker" name="start_date" id="start_date" readonly placeholder="YYYY.MM.DD">
                        </div>
                        <span class="picker-interval">~</span>
                        <div class="date_picker">
                            <input type="text" class="picker" name="end_date" id="end_date" readonly placeholder="YYYY.MM.DD">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>여행목적 <em class="bulStyle1">*</em></th>
                    <td class="inpt">
                        <div class="select-box">
                            <select name="" id="">
                                <option value="">여행/관광</option>
                                <option value="">연수/출장</option>
                            </select>
                        </div>
                    </td>

                    <th>추가정보 1</th>                    
                    <td><input type="text"  class="input-search" name="" id="" placeholder="50자 이내로 작성해주세요"></td>

                    <th>추가정보 2</th>
                    <td><input type="text"  class="input-search" name="" id="" placeholder="50자 이내로 작성해주세요"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- 여행정보 end -->

    <!-- 플랜정보선택 start -->
    <div class="search-basic-wrap">
        <h2 class="six">플랜정보선택
            <div class="select-style-01">
                <select name="" id="">
                    <option value="">실속형</option>
                    <option value="">표준형</option>
                    <option value="">고급형</option>
                </select>
            </div>

        </h2>
        <div class="flan-info-wrap inb">
            <!-- 주니어 start -->
            <div class="flan-box-list">
                <ul class="clearfix inb">
                    <li class="title">주니어 (0~15세 미만) <a id="three" class="btn-flan-info"><i class="icon-question"></i></a></li>
                    <li>
                        <div class="select-box">
                            <select name="" id="">
                                <option value="">주니어 (0~15세 미만) 실속형</option>
                                <option value="">주니어 (0~15세 미만) 표준형</option>
                                <option value="">주니어 (0~15세 미만) 고급형</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- 주니어 end -->
            <!-- 성인 start -->
            <div class="flan-box-list">
                <ul class="clearfix inb">
                    <li class="title">성인 (15~70세 미만) <a id="three" class="btn-flan-info"><i class="icon-question"></i></a></li>
                    <li>
                        <div class="select-box">
                            <select name="" id="">
                                <option value="">성인 (15~70세 미만) 실속형</option>
                                <option value="">성인 (15~70세 미만) 표준형</option>
                                <option value="">성인 (15~70세 미만) 고급형</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- 성인 end -->
            <!-- 시니어1 start -->
            <div class="flan-box-list">
                <ul class="clearfix inb">
                    <li class="title">시니어1 (70~80세 미만) <a id="three" class="btn-flan-info"><i class="icon-question"></i></a></li>
                    <li>
                        <div class="select-box">
                            <select name="" id="">
                                <option value="">시니어1 (70~80세 미만) 실속형</option>
                                <option value="">시니어1 (70~80세 미만) 표준형</option>
                                <option value="">시니어1 (70~80세 미만) 고급형</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- 시니어1 end -->
            <!-- 시니어2 start -->
            <div class="flan-box-list">
                <ul class="clearfix inb">
                    <li class="title">시니어2 (80세~100세 미만) <a id="three" class="btn-flan-info"><i class="icon-question"></i></a></li>
                    <li>
                        <div class="select-box">
                            <select name="" id="">
                                <option value="">시니어2 (80세~100세 미만) 실속형</option>
                                <option value="">시니어2 (80세~100세 미만) 표준형</option>
                                <option value="">시니어2 (80세~100세 미만) 고급형</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- 시니어2 end -->
        </div>
    </div>
    <!-- 플랜정보선택 end -->
    
    <!-- 정보입력 start -->
    <div class="table-list-wrap">
        <h2>정보입력</h2>
        <div class="right-btn-area">
            <div class="number">
                <div class="many">
                    피보험자수 <span class="number">0</span> 명
                </div>
                <div class="amount">
                    총보험료  <span class="number">105,250</span>원
                </div>
            </div>
            <a href="#;" class="button add">추가</a>
            <a href="#;" class="button delete">삭제</a>
            <a href="#;" class="button blue">산출</a>
        </div>
        <!-- table start -->
        <div class="table-wrap">
            <table class="table-list">
                <colgroup>
                    <col width="3%">
                    <col width="5%">
                    <col width="8%">
                    <col width="10%">
                    <col width="12%">
                    
                    <col width="7%">
                    <col width="7%">
                    <col width="7%">
                    <col width="12%">
                    <col width="*">

                    <col width="8%">
                </colgroup>
                <thead>
                    <tr>
                        <th class="navy">
                            <div class="checkbox">
                                <input type="checkbox" id="cb" name="cb" />
                                <label for="cb"></label>
                            </div>
                        </th>
                        <th class="navy">no</th>
                        <th class="navy">이름(국문)</th>
                        <th class="navy">이름(영문)</th>
                        <th class="navy">주민등록번호</th>
                        <th>성별</th>
                        <th>나이</th>
                        <th>구분</th>
                        <th>플랜코드</th>
                        <th>플랜코드</th>
                        <th>보험료</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="navy">
                            <div class="checkbox">
                                <input type="checkbox" id="cb1" name="cb1" />
                                <label for="cb1"></label>
                            </div>
                        </td>
                        <td class="navy">1</td>
                        <td class="navy">
                            <input type="text" class="input" name="" id="" >
                        </td>
                        <td class="navy">                            
                            <input type="text" class="input" name="" id="" >
                        </td>
                        <td class="navy">                            
                            <input type="text" class="input" name="" id="" >
                        </td>
                        <td>                            
                            <input type="text" class="input" name="" id="" readonly value="남자">
                        </td>
                        <td>                            
                            <input type="text" class="input" name="" id="" readonly value="만 34세">
                        </td>
                        <td>                            
                            <input type="text" class="input" name="" id="" readonly value="성인">
                        </td>
                        <td>                            
                            <input type="text" class="input" name="" id="" readonly value="kh6bv856ref35">
                        </td>
                        <td class="flan">                           
                            <input type="text" class="input1" name="" id="" readonly value="성인 (15~70세 미만) 표준형">
                            <a href="#;" id="three" class="button change btn-flan-select">변경</a>
                        </td>
                        <td class="right">                            
                            <input type="text" class="input" name="" id="" readonly value="12,590">
                        </td>
                    </tr>
                    <tr>
                        <td class="navy">
                            <div class="checkbox">
                                <input type="checkbox" id="cb2" name="cb2" />
                                <label for="cb2"></label>
                            </div>
                        </td>
                        <td class="navy">2</td>
                        <td class="navy">
                            <input type="text" class="input" name="" id="" >
                        </td>
                        <td class="navy">                            
                            <input type="text" class="input" name="" id="" >
                        </td>
                        <td class="navy">                            
                            <input type="text" class="input" name="" id="" >
                        </td>
                        <td>                            
                            <input type="text" class="input" name="" id="" readonly value="남자">
                        </td>
                        <td>                            
                            <input type="text" class="input" name="" id="" readonly value="만 34세">
                        </td>
                        <td>                            
                            <input type="text" class="input" name="" id="" readonly value="성인">
                        </td>
                        <td>                            
                            <input type="text" class="input" name="" id="" readonly value="kh6bv856ref35">
                        </td>
                        <td class="flan">                           
                            <input type="text" class="input1" name="" id="" readonly value="성인 (15~70세 미만) 표준형">
                            <a href="#;" id="three" class="button change btn-flan-select">변경</a>
                        </td>
                        <td class="right">                            
                            <input type="text" class="input" name="" id="" readonly value="12,590">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="center-button-area">
            <a href="#;" class="button sbscr">청약 신청</a>
        </div>
        <!-- table end -->
    </div>
    <!-- 정보입력 end -->
  <!-- 청약등록 end -->

    <!-- modal start -->
	<?php include '../modal/travel-type.php'; ?> <!-- 여행 종류 -->
	<?php include '../modal/travel-area.php'; ?> <!-- 보험인수 제한 국가 안내 -->
	<?php include '../modal/flan-info.php'; ?> <!-- 플랜 정보 -->
	<?php include '../modal/flan-select.php'; ?> <!-- 플랜코드 변경 -->
    <!-- modal end -->
<?php include '../../include/footer.php'; ?>