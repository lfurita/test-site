<?php 
$menuNo=[2,2,1];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php"; 
?>
    <div class="servContents">
        <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>

        <div class="conts-box">
            <h1>고객(사) 등록</h1>

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
                        <input type="text" name="" id="" placeholder="업종 입력">
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
                            <input id="offline" class="radio-custom" name="onoffGr" type="radio" checked>
                            <label for="offline" class="radio-custom-label">오프라인</label>
                        </div>
                        <div class="radiobox disabled">
                            <input id="online" class="radio-custom"name="onoffGr" type="radio">
                            <label for="online" class="radio-custom-label">온라인(유비즈)</label>
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
                            <input id="offline2" class="radio-custom" name="onoff2Gr" type="radio" checked>
                            <label for="offline2" class="radio-custom-label">오프라인</label>
                        </div>
                        <div class="radiobox disabled">
                            <input id="online2" class="radio-custom"name="onoff2Gr" type="radio">
                            <label for="online2" class="radio-custom-label">온라인(유비즈)</label>
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