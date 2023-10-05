<?php 
$menuNo=[3,2];
include $_SERVER['DOCUMENT_ROOT']."/Umarket/admin/include/header.php"; 
?>
<script type="text/javascript">
    // 달력 script
    $(document).ready(function() {
      var today = new Date();
      var tomorrow = new Date(Date.parse(today) + (1000 * 60 * 60 * 24));
  
      $("#order_date").datepicker({
        showOn: "both",
        dateFormat: "yy-mm-dd",
        buttonImage: "../img/icon/icon-calendar.svg?e",
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
  
      $(" #delivery_date").datepicker({
        showOn: "both",
        dateFormat: "yy-mm-dd",
        buttonImage: "../img/icon/icon-calendar.svg?e",
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
    });
</script>
<!-- 상품등록 start -->
<div class="contents-wrap">
    <div class="inner">
        <div class="conts-box">
            <form id="rgstrPrdctfrm" >
                <!-- 등록 Form start -->
                <div class="rgstr-table-box">
                    <table>
                        <colgroup>
                            <col width="15%">
                            <col width="*">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>상품코드</th>
                                <td><input type="text" id="" class="input25" placeholder="상품코드 입력해 주세요."></td>
                            </tr>
                            <tr>
                                <th>분류</th>
                                <td><input type="text" id="" class="input25" placeholder="상품코드 입력해 주세요."></td>
                            </tr>
                            <tr>
                                <th>상품명</th>
                                <td>
                                    <div class="country-box">
                                        <div class="box-item">
                                            <div class="nation-box">
                                                <i class="ko-item">한국어</i>
                                            </div>
                                            <input type="text" id="" class="input50" placeholder="상품명 입력해 주세요.">
                                        </div>
                                        <div class="box-item">
                                            <div class="nation-box">
                                                <i class="eng-item">영어</i>
                                            </div>
                                            <input type="text" id="" class="input50" placeholder="Please enter the product name.">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>제조사</th>
                                <td>
                                    <div class="country-box">
                                        <div class="box-item">
                                            <div class="nation-box">
                                                <i class="ko-item">한국어</i>
                                            </div>
                                            <input type="text" id="" class="input25" placeholder="제조사를 입력해 주세요.">
                                        </div>
                                        <div class="box-item">
                                            <div class="nation-box">
                                                <i class="eng-item">영어</i>
                                            </div>
                                            <input type="text" id="" class="input25" placeholder="Please enter the manufacturer.">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>원산지</th>
                                <td>
                                    <div class="country-box">
                                        <div class="box-item">
                                            <div class="nation-box">
                                                <i class="ko-item">한국어</i>
                                            </div>
                                            <input type="text" id="" class="input25" placeholder="미국산">
                                        </div>
                                        <div class="box-item">
                                            <div class="nation-box">
                                                <i class="eng-item">영어</i>
                                            </div>
                                            <input type="text" id="" class="input25" placeholder="made in usa">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>판매규격</th>
                                <td>
                                    <input type="text" id="" class="input25" placeholder="500g x 3개,1개">
                                </td>
                            </tr>
                            <tr>
                                <th>판매단위</th>
                                <td>
                                    <div class="select-wrap">
                                        <input type="number" id="" class="input80px" placeholder="1">

                                        <div class="select-box saleUnit">
                                            <select id="cmdtyDscdn" >
                                                <option value="">단위선택</option>
                                                <option value="orderBOX">box</option>
                                                <option value="orderKG" selected>kg</option>
                                                <option value="orderEA">ea</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>배송유형</th>
                                <td>
                                    <div class="radio-wrap">
                                        <div class="radiobox">
                                            <input id="Dlvr1" class="radio-custom" name="Delivery" type="radio" checked>
                                            <label for="Dlvr1" class="radio-custom-label">직배송</label>
                                        </div>
                                        <div class="radiobox">
                                            <input id="Dlvr2" class="radio-custom"name="Delivery" type="radio">
                                            <label for="Dlvr2" class="radio-custom-label">택배배송</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>대표 이미지</th>
                                <td>
                                    <div class="rprsn-img-wrap">
                                        <div class="up-file">
                                            <input type="file" id="image" accept="image/*" onchange="setThumbnail(event);"/>
                                            <div id="img-conts-item" class="img-item"></div>
                                        </div>

                                        <div class="delete-box">
                                            <a href="" class="dlt-img">이미지 삭제</a>
                                            <p>권장크기 : 750x750</p>
                                            <p>지원파일 및 형식 : png, jpg, jpeg</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>추가 이미지</th>
                                <td>
                                    <div class="rprsn-img-wrap">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 등록 Form end -->
            </form>
        </div>
    </div>
</div>
<!-- 상품등록 end -->
<?php include $_SERVER['DOCUMENT_ROOT']."/Umarket/admin/include/footer.php"; ?>