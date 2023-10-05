<?php 
$menuNo=[3,1];
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
<!-- 상품관리 start -->
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
                
            <!-- 상품관리 start -->
            <div class="table-box">
                <!-- Table List start -->
                <table>
                    <colgroup>
                        <col width="5%">

                        <col width="10%">
                        <col width="*">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="9%">
                        <col width="9%">
                        <col width="9%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>상품번호</th>
                            <th>상품명</th>
                            <th>판매가</th>
                            <th>분류</th>
                            <th>상태</th>
                            <th>재고</th>
                            <th>등록일</th>
                            <th>수정일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr onclick="location.href='prdct-view.php';" class="link-item">
                            <td>22</td>
                            <td>1234567890</td>
                            <td>Frozen fish 1kg</td>
                            <td>5,000</td>
                            <td>Frozen</td>
                            <td>판매중</td>
                            <td>100</td>
                            <td>2023-05-05</td>
                            <td>2023-05-05</td>
                        </tr>
                        <tr onclick="location.href='prdct-view.php';" class="link-item">
                            <td>21</td>
                            <td>1234567890</td>
                            <td>Frozen fish 1kg</td>
                            <td>5,000</td>
                            <td>Frozen</td>
                            <td>판매중</td>
                            <td>100</td>
                            <td>2023-05-05</td>
                            <td>2023-05-05</td>
                        </tr>
                        <tr onclick="location.href='prdct-view.php';" class="link-item">
                            <td>20</td>
                            <td>1234567890</td>
                            <td>Frozen fish 1kg</td>
                            <td>5,000</td>
                            <td>Frozen</td>
                            <td>판매중</td>
                            <td>100</td>
                            <td>2023-05-05</td>
                            <td>2023-05-05</td>
                        </tr>
                        <tr onclick="location.href='prdct-view.php';" class="link-item">
                            <td>19</td>
                            <td>1234567890</td>
                            <td>Frozen fish 1kg</td>
                            <td>5,000</td>
                            <td>Frozen</td>
                            <td>판매중</td>
                            <td>100</td>
                            <td>2023-05-05</td>
                            <td>2023-05-05</td>
                        </tr>
                        <tr onclick="location.href='prdct-view.php';" class="link-item">
                            <td>18</td>
                            <td>1234567890</td>
                            <td>Frozen fish 1kg</td>
                            <td>5,000</td>
                            <td>Frozen</td>
                            <td>판매중</td>
                            <td>100</td>
                            <td>2023-05-05</td>
                            <td>2023-05-05</td>
                        </tr>
                        <tr onclick="location.href='prdct-view.php';" class="link-item">
                            <td>17</td>
                            <td>1234567890</td>
                            <td>Frozen fish 1kg</td>
                            <td>5,000</td>
                            <td>Frozen</td>
                            <td>판매중</td>
                            <td>100</td>
                            <td>2023-05-05</td>
                            <td>2023-05-05</td>
                        </tr>
                        <tr onclick="location.href='prdct-view.php';" class="link-item">
                            <td>16</td>
                            <td>1234567890</td>
                            <td>Frozen fish 1kg</td>
                            <td>5,000</td>
                            <td>Frozen</td>
                            <td>판매중</td>
                            <td>100</td>
                            <td>2023-05-05</td>
                            <td>2023-05-05</td>
                        </tr>
                        <tr onclick="location.href='prdct-view.php';" class="link-item">
                            <td>15</td>
                            <td>1234567890</td>
                            <td>Frozen fish 1kg</td>
                            <td>5,000</td>
                            <td>Frozen</td>
                            <td>판매중</td>
                            <td>100</td>
                            <td>2023-05-05</td>
                            <td>2023-05-05</td>
                        </tr>
                        <tr onclick="location.href='prdct-view.php';" class="link-item">
                            <td>14</td>
                            <td>1234567890</td>
                            <td>Frozen fish 1kg</td>
                            <td>5,000</td>
                            <td>Frozen</td>
                            <td>판매중</td>
                            <td>100</td>
                            <td>2023-05-05</td>
                            <td>2023-05-05</td>
                        </tr>
                        <tr onclick="location.href='prdct-view.php';" class="link-item">
                            <td>13</td>
                            <td>1234567890</td>
                            <td>Frozen fish 1kg</td>
                            <td>5,000</td>
                            <td>Frozen</td>
                            <td>판매중</td>
                            <td>100</td>
                            <td>2023-05-05</td>
                            <td>2023-05-05</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Table List end -->

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

                <div class="button-pagin-box">
                    <a href="prdct-register.php" class="button point">등록</a>
                </div>
            </div>
            <!-- 상품관리 end -->
        </div>
    </div>
</div>
<!-- 상품관리 end -->
<?php include $_SERVER['DOCUMENT_ROOT']."/Umarket/admin/include/footer.php"; ?>