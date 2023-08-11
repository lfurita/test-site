<? $mNum = "5";  $sNum = "1"; ?>
<?php include '../layout/header.php'; ?>

<!-- /** Contents start -->
<section class="content-wrap">
	<?php include '../layout/subVisual.php'; ?>	
	<div class="sub-bis-visual">
		<div class="visual-box-wrap">
			<div class="inner">
				<h3 class="eng">News</h3>
				<p>매일매일 새롭게 달라지는 비아이에스 소식을신속하고 정확하게 전달해 드립니다.</p>
			</div>
			<div class="notice-visual"></div>
		</div>
	</div>

	<div class="notice-news-list-wrap">
		<div class="inner">
			<!-- /** 검색 start -->
			<div class="search-box-wrap">				
				<div class="select-box">
					<select name="trip_purpose">
						<option value="" selected="selected">전체</option>
						<option value="" >제목</option>
						<option value="" >작성일</option>
						<option value="" >제목+작성일</option>
					</select>
				</div>
				<input type="text" class="input01" name="" placeholder="검색어를 넣어주세요" value="">
				<a class="seach-button-item">
					<i class="icon-search"></i>
				</a>
			</div>
			<!-- 검색 end **/ -->

			<!-- /** 뉴스 리스트 start -->
			<div class="notice-table-list-wrap">
				<div class="notice-cont-wrap">
					<ul class="table-header-item clearfix inb">
						<li>번호</li>
						<li>제목</li>
						<li>날짜</li>
					</ul>
					
					<ul class="table-tbody-item clearfix inb">
						<li>5</li>
						<li>
							<strong class="subject">
								<a href="view.php">afsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdxafsdfaszdx</a>
							</strong>
						</li>
						<li>2022.11.15</li>
						
						<li>4</li>
						<li>
							<strong class="subject">
								<a href="view.php">10월 2일 정상업무 합니다.</a>
							</strong>
						</li>
						<li>2022.09.26</li>
						
						<li>3</li>
						<li>
							<strong class="subject">
								<a href="view.php">이집트 카이로 폭발테러 관련 안전공지</a>
							</strong>
						</li>
						<li>2022.09.15</li>
						
						<li>2</li>
						<li>
							<strong class="subject">
								<a href="view.php">해외여행자보험 가입자 국내서 사고나도 보장 받는다.</a>
							</strong>
						</li>
						<li>2022.08.28</li>
						
						<li>1</li>
						<li>
							<strong class="subject">
								<a href="view.php">가짜 해외 의료진단서로 여행자보험금 가로챈 일당</a>
							</strong>
						</li>
						<li>2022.07.18</li>
					</ul>
				</div>
					
				<!-- pagination -->
				<div class="pagination notice">
					<a class="btn-icon page-first disabled">
						<span class="blind">처음 페이지</span>
					</a>
					<a class="btn-icon page-prev disabled">
						<span class="blind">이전 페이지</span>
					</a>

					<span class="page_wrap">
						<a class="btn-icon page active">
							<span class="num">1</span>
						</a>
						<a class="btn-icon page">
							<span class="num">2</span>
						</a>
						<a class="btn-icon page">
							<span class="num">3</span>
						</a>
					</span>
					
					<a class="btn-icon page-next">
						<span class="blind">다음 페이지</span>
					</a>
					<a class="btn-icon page-last">
						<span class="blind">끝 페이지</span>
					</a>
				</div>
			</div>
			<!-- 뉴스 리스트 end **/ -->
		</div>
	</div>

</section>
<!-- Contents end **/ -->

<?php include '../layout/footer.php'; ?>