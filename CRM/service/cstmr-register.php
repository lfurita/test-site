<?php 
$menuNo=[2,1,2];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php"; 
?>
    <div class="servContents">
        <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>

        <div class="conts-box">
            <h1>고객 정보 관리</h1>

            <div class="indvd-bsns">
                <div class="selector">
                    <input type="radio" id="crsrvPrvdr" name="Prvdr" checked>
                    <label for="crsrvPrvdr">법인 사업자</label>
                </div>
                
                <div class="selector">
                    <input type="radio" id="prvtBsns" name="Prvdr">
                    <label for="prvtBsns">개인 사업자</label>
                </div>
                
                <div class="selector">
                    <input type="radio" id="indvd" name="Prvdr">
                    <label for="indvd">개인</label>
                </div>
            </div>

            <div class="write-table">
                <!-- 법인 사업자 start -->
                <ul>
                    <li class="title">법인명 *</li>
                    <li>
                        <input type="text" name="" id="" placeholder="법인명 입력">
                    </li>
                    <li class="title">업종</li>
                    <li>
                        <div class="select-box zindex3">
                            <ul class="list-unstyled">
                                <li class="init">선택</li>
                                <li data-value="1">업종1</li>
                                <li data-value="2">업종2</li>
                                <li data-value="3">업종3</li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="title">대표자명</li>
                    <li>
                        <input type="text" name="" id="" placeholder="대표자명 입력">
                    </li>                    
                    <li class="title">사업자번호</li>
                    <li>
                        <input type="text" name="" id="" placeholder="012-34-34567">
                    </li>
                    
                    <li class="title">고객사 담당자 *</li>
                    <li>
                        <input type="text" name="" id="" placeholder="담당자명 입력"> /                        
                        <input type="text" name="" id="" placeholder="직책 입력">
                    </li>                    
                    <li class="title">부서</li>
                    <li>
                        <input type="text" name="" id="" placeholder="총무부">
                    </li>
                    
                    <li class="title">연락처</li>
                    <li>
                        <input type="text" name="" id="" placeholder="02-3456-7890">
                    </li>                    
                    <li class="title">휴대전화번호</li>
                    <li>
                        <input type="text" name="" id="" placeholder="010-2345-6789">
                    </li>                    
                    
                    <li class="title">대표번호</li>
                    <li>
                        <input type="text" name="" id="" placeholder="1566-1234">
                    </li>     
                    <li class="title">홈페이지</li>
                    <li>
                        <span class="url">http://</span>
                        <input type="text" name="" id="" placeholder="bis.co.kr">
                    </li>

                    <li class="title">이메일</li>
                    <li>
                        <input type="email" name="" id="" placeholder="amdin@amdin.co.kr">
                    </li>
                    <li class="title">관리 채널</li>
                    <li class="fees">
                        <div class="radiobox">
                            <input type="radio" id="oplin1" name="selector">
                            <label for="oplin1">오프라인</label>
                            <div class="check"><div class="inside"></div></div>
                        </div>
                        <div class="radiobox">
                            <input type="radio" id="online1" name="selector">
                            <label for="online1">온라인(유비즈)</label>
                            <div class="check"><div class="inside"></div></div>
                        </div>
                    </li>

                    <li class="title">소재지</li>
                    <li class="first address">
                        <input type="text" name="" id="" placeholder="우편번호 찾기" readonly>
                        <button type="button" class="" id="">주소검색</button>
                        <input type="text" name="" id="" placeholder="상세주소 입력">
                    </li>

                    <li class="title2">메모</li>
                    <li class="first tarea">
                        <textarea name="" id="" class="textarea" placeholder="추가 사항 입력"></textarea>
                    </li>
                </ul>
                <!-- 법인 사업자 end -->

                <!-- 개인 start -->
                <ul>
                    <li class="title">성명 *</li>
                    <li>
                        <input type="text" name="" id="" placeholder="법인명 입력">
                    </li>
                    <li class="title">주소</li>
                    <li class="address">
                        <input type="text" name="" id="" placeholder="우편번호 찾기" readonly>
                        <button type="button" class="" id="">주소검색</button>
                        <input type="text" name="" id="" placeholder="상세주소 입력">
                    </li>
                    
                    <li class="title">연락처</li>
                    <li>
                        <input type="text" name="" id="" placeholder="02-3456-7890">
                    </li>                    
                    <li class="title">휴대전화번호</li>
                    <li>
                        <input type="text" name="" id="" placeholder="010-2345-6789">
                    </li>       
                    
                    <li class="title">이메일</li>
                    <li>
                        <input type="email" name="" id="" placeholder="amdin@amdin.co.kr">
                    </li>                    
                    <li class="title">관리 채널</li>
                    <li class="fees">
                        <div class="radiobox">
                            <input type="radio" id="oplin2" name="selector">
                            <label for="oplin2">오프라인</label>
                            <div class="check"><div class="inside"></div></div>
                        </div>
                        <div class="radiobox">
                            <input type="radio" id="online2" name="selector">
                            <label for="online2">온라인(유비즈)</label>
                            <div class="check"><div class="inside"></div></div>
                        </div>
                    </li>
                </ul>
                <!-- 개인 end -->
            </div>

            <div class="btn-box-conts">
                <a href="" class="button point rgstr">추가</a>
            </div>
        </div>
    </div>
    

<?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/footer.php"; ?>