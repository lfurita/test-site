
<div class="nav">
	<nav class="gnb">
		<ul>
			<li><a class="gnb-depth1 <?=($mNum==1)?"active":""?>">보험 서비스</a>
				<ul class="depth2">
					<li><a href="/bis/service/company/index.php">기업 보험</a></li>
					<li><a href="/bis/service/traveler.php">여행자 보험</a></li>
					<li><a href="/bis/service/health/index.php">건강 보험</a></li>
					<li><a href="/bis/service/vouch.php">보증 보험</a></li>
					<li><a href="/bis/service/claim.php">보험 청구</a></li>
				</ul>
			</li>
			<li><a class="gnb-depth2 <?=($mNum==2)?"active":""?>">비지니스</a>
				<ul class="depth2">
					<li><a href="/bis/business/digital.php">디지털</a></li>
					<li><a href="/bis/business/creditRating.php">기업신용평가</a></li>
					<!--li><a href="/bis/business/longRental.php">장기렌트</a></li-->
				</ul>
			</li>
			<li><a class="gnb-depth3 <?=($mNum==3)?"active":""?>">고객센터</a>
				<ul class="depth2">
					<li><a href="/bis/customer/serviceInquiry.php">보험 서비스 문의</a></li>
					<li><a href="/bis/customer/businessInquiry.php">비지니스 문의</a></li>
					<li><a href="/bis/customer/faq.php">자주하는 질문</a></li>
				</ul>
			</li>
			<li><a class="gnb-depth4 <?=($mNum==4)?"active":""?>">회사소개</a>
				<ul class="depth2">
					<li><a href="/bis/company/aboutus.php">인사말</a></li>
					<li><a href="/bis/company/introduce.php">소개</a></li>
					<li><a href="/bis/company/ourPeople.php">구성원</a></li>
					<li><a href="/bis/company/location.php">회사위치</a></li>
				</ul>
			</li>
			<li><a class="gnb-depth5 <?=($mNum==5)?"active":""?>">뉴스/공지</a>
				<ul class="depth2">
					<li><a href="/bis/notice/news.php">뉴스</a></li>
					<li><a href="/bis/notice/notice.php">공지사항</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</div>
<div class="sub_bg"></div>



<!-- /** 모바일 Nav Area start -->
<div class="mobile">
	<div class="open-menu">
		<a id="open-menu" title="사이트맵 열기" class="all"><span class="ir">메뉴전체보기</span></a>
	</div>
	<div id="mobile-gnb" class="mobile-gnb-wrap ">
		<a id="mobile-close" class="mobile-close"><i class="icon-close">닫기</i></a>
		<ul class="mobile-gnb gnb-accord">
			<li>
				<a class="toggle" href="javascript:void(0);">보험 서비스</a>
				<ul class="inner">
					<li><a href="/bis/service/company/index.php">기업 보험</a></li>
					<li><a href="/bis/service/traveler.php">여행자 보험</a></li>
					<li><a href="/bis/service/health.php">건강 보험</a></li>
					<li><a href="/bis/service/vouch.php">보증 보험</a></li>
					<li><a href="/bis/service/claim.php">보험 청구/보상</a></li>
				</ul>
			</li>
			<li>
				<a class="toggle" href="javascript:void(0);">비지니스</a>
				<ul class="inner">
					<li><a href="/bis/business/digital.php">디지털</a></li>
					<li><a href="/bis/business/creditRating.php">기업신용평가</a></li>
					<li><a href="/bis/business/longRental.php">장기렌트</a></li>
				</ul>
			</li>
			<li>
				<a class="toggle" href="javascript:void(0);">고객센터</a>
				<ul class="inner">
					<li><a href="/bis/customer/serviceInquiry.php">보험 서비스 문의</a></li>
					<li><a href="/bis/customer/businessInquiry.php">비지니스 문의</a></li>
					<li><a href="/bis/customer/faq.php">자주하는 질문</a></li>
				</ul>
			</li>
			<li>
				<a class="toggle" href="javascript:void(0);">회사소개</a>
				<ul class="inner">
					<li><a href="/bis/company/aboutus.php">인사말</a></li>
					<li><a href="/bis/company/introduce.php">소개</a></li>
					<li><a href="/bis/company/ourPeople.php">구성원</a></li>
					<li><a href="/bis/company/location.php">회사위치</a></li>
				</ul>
			</li>
			<li>
				<a class="toggle" href="javascript:void(0);">뉴스/공지</a>
				<ul class="inner">
					<li><a href="/bis/notice/news.php">뉴스</a></li>
					<li><a href="/bis/notice/notice.php">공지사항</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="layerAllmenuBg" ></div>
</div>

<script>
	/** Mobile open close all menu area */
	$('#open-menu').on('click',function(){
		$('#mobile-gnb').addClass('active');
		$('#mobile-gnb').addClass('fade-in');
		$('#mobile-gnb').removeClass('fade-out');
		$('.layerAllmenuBg').addClass('open');
	});
	$('#mobile-close').on('click',function(){
		$('#mobile-gnb').removeClass('active');
		$('#mobile-gnb').removeClass('fade-in');
		$('#mobile-gnb').addClass('fade-out');

		setTimeout(function() {
			$('.layerAllmenuBg').removeClass('open');
		}, 500);
	});

	/** Mobile open jquery accordion area */
	$('.toggle').click(function(e) {
		e.preventDefault();
	  
		var $this = $(this);
	  
		if ($this.next().hasClass('show')) {
			$this.next().removeClass('show');
			$this.next().slideUp(350);
		} else {
			$this.parent().parent().find('li .inner').removeClass('show');
			$this.parent().parent().find('li .inner').slideUp(350);
			$this.next().toggleClass('show');
			$this.next().slideToggle(350);
		}
	});
</script>
<!-- /** 모바일 Nav Area end -->