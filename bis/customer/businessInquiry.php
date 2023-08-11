<? $mNum = "3";  $sNum = "2"; ?>
<?php include '../layout/header.php'; ?>

<!-- /** Contents start -->
<section class="content-wrap">
	<?php include '../layout/subVisual.php'; ?>
	<div class="sub-bis-visual">
		<div class="visual-box-wrap">
			<div class="inner">
				<h3 class="wow fadeInUp" data-wow-delay=".2s">비지니스 문의</h3>
				<p class="wow fadeInUp" data-wow-delay=".4s">매일매일 새롭게 달라지는 비아이에스 소식을신속하고 정확하게 전달해 드립니다.</p>
			</div>
			<div class="faq-visual"></div>
		</div>
	</div>

	<!-- /** 비지니스 문의 start -->
	<div class="inquiry-wrap">
		<div class="inner">
			<p class="required">필수입력항목</p>
			<ul>
				<li>
					<strong>상호명 <span class="required">필수</span></strong>
					<div class="con">
						<input type="text" class="input02" id="" name="" placeholder="성명을 입력하세요">
					</div>
				</li>

				<li>
					<strong>담당자(성명) <span class="required">필수</span></strong>
					<div class="con">
						<input type="text" class="input02" id="" name="" placeholder="성명을 입력하세요">
					</div>
				</li>
				
				<li>
					<strong>업종 <span class="required">필수</span></strong>
					<div class="con">
						<input type="text" class="input02" id="" name="" placeholder="성명을 입력하세요">
					</div>
				</li>

				<li>
					<strong>연락처 <span class="required">필수</span></strong>
					<div class="con phone">
						<div class="select-box">
							<select name="trip_purpose">
								<option value="010" selected="selected">010</option>
								<option value="011" >011</option>
								<option value="017" >017</option>
								<option value="019" >019</option>
								<option value="02" >02</option>
								<option value="02" >070</option>
							</select>
						</div>
						<span>-</span>
						<input type="text" class="input02" id="" name="">
						<span>-</span>
						<input type="text" class="input02" id="" name="">
					</div>
				</li>

				<li>
					<strong>팩스번호 <span class="required">필수</span></strong>
					<div class="con fax">
						<input type="text" class="input02" id="" name="">
						<span>-</span>
						<input type="text" class="input02" id="" name="">
						<span>-</span>
						<input type="text" class="input02" id="" name="">
					</div>
				</li>

				<li>
					<strong>이메일 <span class="required">필수</span></strong>
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
					㈜유라이프파이낸셜은 정보통신망 이용촉진 및 정보보호 등 관한 법률을 준수하며 고객님의 개인정보를 수집하고 소중하게 다루고 있습니다.<br>
					1. 수집 및 이용 항목 : 이메일, 이름, 연락처 <br>
					2. 수집 및 이용 목적 : 앱 이용 문의에 대한 답변 관련 업무 <br>
					3. 보유 및 이용 기간 : 수집 목적이 달성되면 모든 개인정보를 파기합니다. 동의를 하지 않을 경우 문의한 내용에 대한 답변에 제한이 있을 수 있습니다.<br>
					1. 수집 및 이용 항목 : 이메일, 이름, 연락처 <br>
					2. 수집 및 이용 목적 : 앱 이용 문의에 대한 답변 관련 업무 <br>
					3. 보유 및 이용 기간 : 수집 목적이 달성되면 모든 개인정보를 파기합니다. 동의를 하지 않을 경우 문의한 내용에 대한 답변에 제한이 있을 수 있습니다.<br>
					1. 수집 및 이용 항목 : 이메일, 이름, 연락처 <br>
					2. 수집 및 이용 목적 : 앱 이용 문의에 대한 답변 관련 업무 <br>
					3. 보유 및 이용 기간 : 수집 목적이 달성되면 모든 개인정보를 파기합니다. 동의를 하지 않을 경우 문의한 내용에 대한 답변에 제한이 있을 수 있습니다.
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
	<!-- 비지니스 문의 end **/ -->
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