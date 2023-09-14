
<link rel="stylesheet" type="text/css" href="/CRM/css/modal.css?v=<?=time()?>">
<script type="text/javascript">
    // 달력 script
    $(document).ready(function() {
      var today = new Date();
      var tomorrow = new Date(Date.parse(today) + (1000 * 60 * 60 * 24));
  
      $("#first_date").datepicker({
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
    });
</script>
<!-- 계약 완료 start -->
<div name="divNationInfo" class="modal cmplt">
	<div class="modal-bg">
		<div class="modal-cont">
            <h2>계약 완료
                <a class="close mdClose">닫기</a>
            </h2>
            
            <div class="cont-box">
                <table class="tableBox">
                    <colgroup>
                        <col width="20%">
                        <col width="*">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>증권번호</th>
                            <td><input type="number" name="" id="" placeholder="증권번호 입력"></td>
                        </tr>
                        <tr>
                            <th>보험계약서</th>
                            <td class="date">
                                <div class="file-add">
                                    <input type="file" name="str-Image1" id="fileAdd" class="add-file-input class-img">
                                    <div class="add-file-txt">파일선택</div>
                                    <label for="fileAdd"><div class="add-file-btn">찾아보기</div></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>보험료</th>
                            <td><input type="number" name="" id="" placeholder="보험료 입력"></td>
                        </tr>
                        <tr>
                            <th>계약일</th>
                            <td class="date">
                                <div class="date_picker">
                                    <input type="text" class="picker format-date" name="first_date" id="first_date"  placeholder="YYYY-MM-DD" maxlength="10">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>만기 알림</th>
                            <td class="check-box">
                                <div class="checkbox">
                                    <input id="pst-90" class="checkbox-custom" name="pstGr" type="checkbox" checked>
                                    <label for="pst-90" class="checkbox-custom-label">90</label>
                                </div>
                                <div class="checkbox">
                                    <input id="pst-60" class="checkbox-custom" name="pstGr" type="checkbox">
                                    <label for="pst-60" class="checkbox-custom-label">60</label>
                                </div>
                                <div class="checkbox">
                                    <input id="pst-45" class="checkbox-custom" name="pstGr" type="checkbox">
                                    <label for="pst-45" class="checkbox-custom-label">45</label>
                                </div>
                                <div class="checkbox">
                                    <input id="pst-30" class="checkbox-custom" name="pstGr" type="checkbox">
                                    <label for="pst-30" class="checkbox-custom-label">30</label>
                                </div>
                                <div class="checkbox">
                                    <input id="pst-15" class="checkbox-custom" name="pstGr" type="checkbox">
                                    <label for="pst-15" class="checkbox-custom-label">15</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
		</div>
	</div> 
    <div class="mask_background"></div>
</div> 


<script>
	$("a[name=info]").click(function(){
		var btn = $(this).attr("motion");
		//alert(btn);
		$("div[name=divNationInfo]").removeClass("out").addClass(btn);
	});

	$(".mdClose").click(function(){
		 $(".modal.cmplt").addClass("out");
	});
</script>
<!-- 계약 완료 end -->