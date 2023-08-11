<? $mNum = "3";  $sNum = "1"; ?>
<?php include '../layout/header.php'; ?>

<!-- /** Contents start -->
<section class="content-wrap">
	<?php include '../layout/subVisual.php'; ?>
	<div class="sub-bis-visual">
		<div class="visual-box-wrap">
			<div class="inner">
				<h3 class="wow fadeInUp" data-wow-delay=".2s">보험 서비스 문의</h3>
				<p class="wow fadeInUp" data-wow-delay=".4s">
					비아이에스 웹사이트를 방문해 주셔서 감사합니다.<br>
					궁금하신 사항을 아래 양식에 맞게 작성하여 접수해 주시면 빠른 시간 내에 답변 드리겠습니다.					
				</p>
			</div>
			<div class="faq-visual"></div>
		</div>
	</div>

	<!-- /** 보험 서비스 문의 start -->
	<div class="inquiry-wrap">
		<div class="inner">
			<p class="required">필수입력항목</p>

			<ul>
				<li>
					<strong>필요보험 선택 <span class="required">필수</span></strong>
					<div class="con">
						<div class="select-box">
							<select name="trip_purpose">
								<option value="" selected="selected">필요한 보험을 선택해주세요.</option>
								<option value="의무보험" >의무보험</option>
								<option value="배상책임보험" >배상책임보험</option>
								<option value="화재/재산종합/동산보험" >화재/재산종합/동산보험</option>
								<option value="근로자재해보험" >근로자재해보험</option>
								<option value="해상/적하/운송보험" >해상/적하/운송보험</option>
								<option value="자동차/건설기계보험" >자동차/건설기계보험</option>
								<option value="건설공사/기계/기술보험" >건설공사/기계/기술보험</option>
							</select>
						</div>
					</div>
				</li>
				<li>
					<strong>성명 <span class="required">필수</span></strong>
					<div class="con">
						<input type="text" class="input02" id="" name="" placeholder="성명을 입력하세요">
					</div>
				</li>
				<li>
					<strong>연락처 <span class="required">필수</span></strong>
					<div class="con phone">
						<div class="select-box">
							<select name="trip_purpose">
								<option value="" selected="selected">010</option>
								<option value="02" >02</option>
								<option value="011" >011</option>
								<option value="017" >017</option>
								<option value="019" >019</option>
							</select>
						</div>
						<span>-</span>
						<input type="text" class="input02" id="" name="">
						<span>-</span>
						<input type="text" class="input02" id="" name="">
					</div>
				</li>
				<li>
					<strong>이메일</strong>
					<div class="con email">
						<input type="text" class="input02" id="str_email01" name="str_email01" placeholder="이메일 아이디">
						<span>@</span>
						<input type="text" class="input02" name="str_email02" id="str_email02" disabled value="naver.com">
						<div class="select-box">
							<select name="selectEmail" id="selectEmail">
								<option value="1">직접입력</option>
								<option value="naver.com" selected>naver.com</option>
								<option value="gmail.com">gmail.com</option>
								<option value="daum.net">daum.net</option>
								<option value="hanmail.net">hanmail.net</option>
								<option value="hotmail.com">hotmail.com</option>
								<option value="nate.com">nate.com</option>
								<option value="yahoo.co.kr">yahoo.co.kr</option>
								<option value="paran.com">paran.com</option>
							</select>
						</div>
					</div>
				</li>
				<li>
					<strong>회사명</strong>
					<div class="con">
						<input type="text" class="input02" id="" name="" placeholder="">
					</div>
				</li>
				<li>
					<strong>제목 <span class="required">필수</span></strong>
					<div class="con">
						<input type="text" class="input02" id="" name="" placeholder="">
					</div>
				</li>
				<li>
					<strong>내용 <span class="required">필수</span></strong>
					<div class="con">
						<textarea name="" id="" class="textCont"></textarea>
					</div>
				</li>
			</ul>

			<div class="privacy-wrap">
				<strong>개인정보 수집 및 이용에 대한 동의 내용</strong>
				<div class="privacy-box">
					<strong>㈜유라이프파이낸셜 귀중</strong>
					<p>본인은 귀사가 유라이프파이낸셜 보험토탈케어서비스 회원가입을 위하여 본인의 개인정보를 수집/이용하는 것에 동의합니다.</p>
					<p class="type-dash first">- 수집하는 개인정보 항목 : (회원가입) 성명, 생년월일 / (보험료 산출) 성별, 출발일, 귀국일</p>
					<p class="type-dash">- 개인정보 수집/제공 목적 : 유라이프파이낸셜 보험토탈케어서비스 회원가입</p>
					<p class="type-dash">- 개인정보 보유 및 이용 기간 : 회원 탈퇴 시까지 동의 거부 시 서비스 이용이 불가합니다.</p>
				</div>
				<div class="agree">
					<label class="checkbox">
						<input type="checkbox" name="" value="1">동의합니다.<span></span>
					</label>
				</div>
			</div>

			<!-- /** Button Area start -->
			<div class="btn-center-wrap">
				<div class="inner">
					<a href="#" class="button middle-52 basic-line" onClick="history.back()">문의하기</a>
				</div>
			</div>
			<!-- Button end **/ -->
		</div>
	</div>
	<!-- 보험 서비스 문의 end **/ -->

</section>
<!-- Contents end **/ -->

<script>
	//이메일 입력방식 선택
	$('#selectEmail').change(function(){
	   $("#selectEmail option:selected").each(function () {
			
			if($(this).val()== '1'){						//직접입력일 경우
				 $("#str_email02").val('');                 //값 초기화
				 $("#str_email02").attr("disabled",false);  //활성화
			}else{											//직접입력이 아닐경우
				 $("#str_email02").val($(this).text());     //선택값 입력
				 $("#str_email02").attr("disabled",true);   //비활성화
			}
	   });
	});
</script>
<?php include '../layout/footer.php'; ?>