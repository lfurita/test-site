<?php 
$menuNo=[2,1];
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

<div class="contents-wrap">
    <div class="inner">
        <div class="conts-box">
            <form id="orderSrfrm">
                <!-- 검색 Form start -->
                <div class="search-box">
                    <ul class="clearfix inb">
                        <li>
                            <div class="date_picker">
                                <label>주문일</label>
                                <input type="text" class="picker format-date" name="order_date" id="order_date"  placeholder="YYYY-MM-DD" maxlength="10">
                            </div>
                        </li>
                        <li>
                            <div class="date_picker">
                                <label>배송요청일</label>
                                <input type="text" class="picker format-date" name="delivery_date" id="delivery_date"  placeholder="YYYY-MM-DD" maxlength="10">
                            </div>
                        </li>
                        <li>
                            <div class="input-box">
                                <label>주문자</label>
                                <input type="text" id="orderer" placeholder="홍길동">
                            </div>
                        </li>
                        <li>
                            <div class="select-custom">
                                <select id="dlvryType">
                                    <option value="" selected>배송유형 선택</option>
                                    <option value="jkpsn" >직배송</option>
                                    <option value="crrDlvry">택배배송</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                    <a class="button point search">검색</a>
                </div>
                <!-- 검색 Form end -->
            </form>
                
            <!-- 주문관리 start -->
            <h2>주문관리</h2>
            <div class="order-box">
                <!-- 총주문 start -->
                <div class="diagram-box">
                    <div class="icon-item">
                        <i class="icon-total-order">총주문</i>
                    </div>
                    <div class="text-item">
                        <strong>총주문 건수</strong>
                        <p>17</p>
                    </div>
                </div>
                <!-- 총주문 end -->

                <!-- 주문접수 start -->
                <div class="diagram-box">
                    <div class="icon-item">
                        <i class="icon-total-order">주문접수</i>
                    </div>
                    <div class="text-item">
                        <strong>주문접수 건수</strong>
                        <p>57</p>
                    </div>
                </div>
                <!-- 주문접수 end -->

                <!-- 취소 start -->
                <div class="diagram-box">
                    <div class="icon-item">
                        <i class="icon-total-order">취소</i>
                    </div>
                    <div class="text-item">
                        <strong>취소 건수</strong>
                        <p>57</p>
                    </div>
                </div>
                <!-- 취소 end -->
                
                <!-- 완료 start -->
                <div class="diagram-box">
                    <div class="icon-item">
                        <i class="icon-total-order">완료</i>
                    </div>
                    <div class="text-item">
                        <strong>완료 건수</strong>
                        <p>18</p>
                    </div>
                </div>
                <!-- 완료 end -->
            </div>

            <div class="table-box">
                <!-- 주문관리 List start -->
                <table>
                    <colgroup>
                        <col width="5%">

                        <col width="10%">
                        <col width="10%">

                        <col width="10%">
                        <col width="17%">
                        
                        <col width="8%">
                        <col width="8%">

                        <col width="*">
                        
                        <col width="7%">
                        <col width="7%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Oder Date</th>
                            <th>배송요청일</th>
                            <th>주문번호</th>
                            <th>제품</th>
                            <th>주문자</th>
                            <th>배송유형</th>
                            <th>배송지</th>
                            <th>가격</th>
                            <th>주문현황</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr onclick="location.href='order-view.php';" class="link-item">
                            <td>22</td>
                            <td>2023-05-01</td>
                            <td>2023-05-01</td>
                            <td>#2023050100001</td>
                            <td>냉동만두 외 1</td>
                            <td>필한식당</td>
                            <td>택배배송</td>
                            <td class="text-left">Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila</td>
                            <td>₱10,000</td>
                            <td>주문확인</td>
                        </tr>
                        <tr onclick="location.href='order-view.php';" class="link-item">
                            <td>21</td>
                            <td>2023-05-01</td>
                            <td>2023-05-01</td>
                            <td>#2023050100001</td>
                            <td>냉동만두 외 1</td>
                            <td>필한식당</td>
                            <td>직배송</td>
                            <td class="text-left">Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila</td>
                            <td>₱10,000</td>
                            <td>주문확인</td>
                        </tr>
                        <tr onclick="location.href='order-view.php';" class="link-item">
                            <td>20</td>
                            <td>2023-05-01</td>
                            <td>2023-05-01</td>
                            <td>#2023050100001</td>
                            <td>냉동만두 외 1</td>
                            <td>필한식당</td>
                            <td>택배배송</td>
                            <td class="text-left">Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila</td>
                            <td>₱10,000</td>
                            <td>주문확인</td>
                        </tr>
                        <tr onclick="location.href='order-view.php';" class="link-item">
                            <td>19</td>
                            <td>2023-05-01</td>
                            <td>2023-05-01</td>
                            <td>#2023050100001</td>
                            <td>냉동만두 외 1</td>
                            <td>필한식당</td>
                            <td>직배송</td>
                            <td class="text-left">Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila</td>
                            <td>₱10,000</td>
                            <td>주문확인</td>
                        </tr>
                        <tr onclick="location.href='order-view.php';" class="link-item">
                            <td>18</td>
                            <td>2023-05-01</td>
                            <td>2023-05-01</td>
                            <td>#2023050100001</td>
                            <td>냉동만두 외 1</td>
                            <td>필한식당</td>
                            <td>택배배송</td>
                            <td class="text-left">Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila</td>
                            <td>₱10,000</td>
                            <td>주문확인</td>
                        </tr>
                        <tr onclick="location.href='order-view.php';" class="link-item">
                            <td>17</td>
                            <td>2023-05-01</td>
                            <td>2023-05-01</td>
                            <td>#2023050100001</td>
                            <td>냉동만두 외 1</td>
                            <td>필한식당</td>
                            <td>직배송</td>
                            <td class="text-left">Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila</td>
                            <td>₱10,000</td>
                            <td>주문확인</td>
                        </tr>
                        <tr onclick="location.href='order-view.php';" class="link-item">
                            <td>16</td>
                            <td>2023-05-01</td>
                            <td>2023-05-01</td>
                            <td>#2023050100001</td>
                            <td>냉동만두 외 1</td>
                            <td>필한식당</td>
                            <td>택배배송</td>
                            <td class="text-left">Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila</td>
                            <td>₱10,000</td>
                            <td>주문확인</td>
                        </tr>
                        <tr onclick="location.href='order-view.php';" class="link-item">
                            <td>15</td>
                            <td>2023-05-01</td>
                            <td>2023-05-01</td>
                            <td>#2023050100001</td>
                            <td>냉동만두 외 1</td>
                            <td>필한식당</td>
                            <td>직배송</td>
                            <td class="text-left">Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila</td>
                            <td>₱10,000</td>
                            <td>주문확인</td>
                        </tr>
                        <tr onclick="location.href='order-view.php';" class="link-item">
                            <td>14</td>
                            <td>2023-05-01</td>
                            <td>2023-05-01</td>
                            <td>#2023050100001</td>
                            <td>냉동만두 외 1</td>
                            <td>필한식당</td>
                            <td>택배배송</td>
                            <td class="text-left">Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila</td>
                            <td>₱10,000</td>
                            <td>주문확인</td>
                        </tr>
                        <tr onclick="location.href='order-view.php';" class="link-item">
                            <td>13</td>
                            <td>2023-05-01</td>
                            <td>2023-05-01</td>
                            <td>#2023050100001</td>
                            <td>냉동만두 외 1</td>
                            <td>필한식당</td>
                            <td>직배송</td>
                            <td class="text-left">Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila</td>
                            <td>₱10,000</td>
                            <td>주문확인</td>
                        </tr>
                    </tbody>
                </table>
                <!-- 주문관리 List end -->

                <!-- paginate start -->
                <div class="paginate">
                    <ol class="page-list">
                        <li class="page selected">
                            <a class="page-link">1</a><span class="blind">번째 페이지</span>
                        </li>
                        <li class="page">
                            <a class="page-link">2</a><span class="blind">번째 페이지</span>
                        </li>
                        <li class="page">
                            <a class="page-link">3</a><span class="blind">번째 페이지</span>
                        </li>
                        <li class="page">
                            <a class="page-link">4</a><span class="blind">번째 페이지</span>
                        </li>
                        <li class="page">
                            <a class="page-link">5</a><span class="blind">번째 페이지</span>
                        </li>
                    </ol>

                    <button type="button" class="button-first" disabled="" id="first-page"><span class="blind">첫 페이지</span></button>
                    <button type="button" class="button-prev" disabled="" id="prev-page"><span class="blind">이전 페이지</span></button>
                    <button type="button" class="button-next" id="next-page"><span class="blind">다음 페이지</span></button>
                    <button type="button" class="button-last" id="last-page"><span class="blind">마지막 페이지</span></button>
                </div>
                <!-- paginate end -->
            </div>
            <!-- 주문관리 end -->
        </div>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/Umarket/admin/include/footer.php"; ?>