
<link rel="stylesheet" type="text/css" href="/CRM/css/modal.css?v=<?=time()?>">
<!-- 취소 사유 start -->
<div name="divNationCancel" class="modal reasonCnclt">
	<div class="modal-bg">
		<div class="modal-cont">
            <h2>취소 사유
                <a class="close mdClose">닫기</a>
            </h2>
            
            <div class="cont-box">
                <table class="tableBox">
                    <colgroup>
                        <col width="30%">
                        <col width="*">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>사유</th>
                            <td>
                                <div class="radio-box">
                                    <div class="radiobox">
                                        <input id="rsnCn1" class="radio-custom" name="rsnCncGr" type="radio" checked>
                                        <label for="rsnCn1" class="radio-custom-label">인수 거절</label>
                                    </div>
                                    <div class="radiobox">
                                        <input id="rsnCn2" class="radio-custom" name="rsnCncGr" type="radio">
                                        <label for="rsnCn2" class="radio-custom-label">단순변심</label>
                                    </div>
                                    <div class="radiobox">
                                        <input id="rsnCn3" class="radio-custom" name="rsnCncGr" type="radio">
                                        <label for="rsnCn3" class="radio-custom-label">상담 거부</label>
                                    </div>
                                    <div class="radiobox">
                                        <input id="rsnCn4" class="radio-custom" name="rsnCncGr" type="radio">
                                        <label for="rsnCn4" class="radio-custom-label">타 보험 가입</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="btn-box-conts">
                    <a name="info" class="button point mdClose" motion="three">등록</a>
                </div>
            </div>
		</div>
	</div> 
    <div class="mask_background"></div>
</div> 

<script>
    // 셀렉트 취소 선택시에 modal 나타나기
    function rsnCnclt(e) {  
        const value = e.value;    
        if (value == 'reasonCnclt'){ 
            //alert(btn);
            $("div[name=divNationCancel]").removeClass("out").addClass("three");
        }
    }

	$(".mdClose").click(function(){
		 $(".modal.reasonCnclt").addClass("out");
	});
	$(".point.mdClose").click(function(){
		 $(".modal.reasonCnclt").addClass("out");
	});
</script>

<!-- 취소 사유 end -->