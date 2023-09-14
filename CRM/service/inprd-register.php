<?php 
$menuNo=[4,2,2];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php"; 
?>
    <div class="servContents">
        <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>

        <div class="conts-box">
            <h1>보험상품 추가</h1>

            <div class="write-table">
                <ul>
                    <li class="title">보험사/부서 *</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>보험사 선택</option>
                                <option value="">삼성화재</option>
                                <option value="">DB손해보험</option>
                                <option value="">CHUBB</option>
                                <option value="">메리츠화재</option>
                            </select>
                        </div>
                        
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>부서/채널  선택</option>
                                <option value="">경영관리부</option>
                                <option value="">기업보험부</option>
                                <option value="">여행자보험부</option>
                                <option value="">디지털사업부</option>
                            </select>
                        </div>
                    </li>
                    <li class="title">보험종목 *</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>분류 선택</option>
                                <option value="">종합</option>
                                <option value="">화재/재산/동산</option>
                                <option value="">배상책임</option>
                                <option value="">근로자 재해</option>
                                <option value="">해상/적하/운송</option>
                                <option value="">자동차/건설기계</option>
                                <option value="">건설공사/기계/기술</option>
                                <option value="">기타</option>
                            </select>
                        </div>
                        
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>종목 선택</option>
                                <option value="">영업배상책임</option>
                                <option value="">생산물 배상</option>
                                <option value="">전문인 배상</option>
                                <option value="">개인정보 배상</option>
                                <option value="">근로자 재해배상</option>
                                <option value="">임상시험 배상</option>
                                <option value="">임원 배상</option>
                            </select>
                        </div>
                    </li>
                    
                    <li class="title">상품명 *</li>
                    <li>
                        <input type="text" name="" id="" placeholder="상품명 입력">
                    </li>
                    <li class="title">내부 담당</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>담당자 선택</option>
                                <option value="">김성일</option>
                                <option value="">최은선</option>
                                <option value="">홍길동</option>
                                <option value="">홍길순</option>
                                <option value="">김아무개</option>
                            </select>
                        </div>
                    </li>
                    
                    <li class="title">상품수수료 *</li>
                    <li class="fees">
                        <input type="number" name="" id="" placeholder="0">%
                    </li>
                    <li class="title">추가 수수료</li>
                    <li class="fees">
                        <div class="radiobox">
                            <input id="YES" class="radio-custom" name="YESNO" type="radio" checked>
                            <label for="YES" class="radio-custom-label">예</label>
                        </div>
                        <div class="radiobox">
                            <input id="NO" class="radio-custom" name="YESNO" type="radio">
                            <label for="NO" class="radio-custom-label">아니요</label>
                        </div>
                    </li>
                    
                    <li class="title2">상품 설명</li>
                    <li class="first tarea">
                        <textarea name="" id="" class="textarea" placeholder="추가 사항 입력"></textarea>
                    </li>
                    
                    <li class="title">자료 파일</li>
                    <li class="first">
                        <div class="file-add">
                            <input type="file" name="str-Image1" id="fileAdd" class="add-file-input class-img">
                            <div class="add-file-txt">파일선택</div>
                            <label for="fileAdd"><div class="add-file-btn">찾아보기</div></label>
                        </div>
                    </li>
                    
                    <li class="title2">제출서류 정보</li>
                    <li class="first tarea">
                        <textarea name="" id="" class="textarea" placeholder="보험 확인에 필요한 서류 입력"></textarea>
                    </li>
                </ul>
            </div>

            <div class="btn-box-conts">
                <a href="" class="button point rgstr">추가</a>
            </div>
        </div>
    </div>
    <script>
    </script>

<?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/footer.php"; ?>