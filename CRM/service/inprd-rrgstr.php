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
                        <div class="select-box">
                            <ul class="list-unstyled">
                                <li class="init">보험사 선택</li>
                                <li data-value="11">삼성화재</li>
                                <li data-value="12">DB손해보험</li>
                                <li data-value="13">CHUBB</li>
                                <li data-value="14">메리츠화재</li>
                            </ul>
                        </div>
                        
                        <div class="select-box">
                            <ul class="list-unstyled">
                                <li class="init">부서/채널 선택</li>
                                <li data-value="1">부서명1</li>
                                <li data-value="1">부서명2</li>
                                <li data-value="1">부서명3</li>
                            </ul>
                        </div>
                    </li>
                    <li class="title">보험종목 *</li>
                    <li>
                        <div class="select-box zindex3">
                            <ul class="list-unstyled">
                                <li class="init">분류 선택</li>
                                <li data-value="1">분류명1</li>
                                <li data-value="1">분류명2</li>
                                <li data-value="1">분류명3</li>
                            </ul>
                        </div>
                        
                        <div class="select-box">
                            <ul class="list-unstyled">
                                <li class="init">종목 선택</li>
                                <li data-value="1">종목1</li>
                                <li data-value="1">종목2</li>
                                <li data-value="1">종목3</li>
                                <li data-value="1">종목4</li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="title">상품명 *</li>
                    <li>
                        <input type="text" name="" id="" placeholder="상품명 입력">
                    </li>
                    <li class="title">내부 담당</li>
                    <li>
                        <div class="select-box">
                            <ul class="list-unstyled">
                                <li class="init">담당자 선택</li>
                                <li data-value="1">홍길동</li>
                                <li data-value="2">홍길순</li>
                                <li data-value="3">김아무개</li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="title">상품수수료 *</li>
                    <li class="fees">
                        <input type="number" name="" id="" placeholder="0">%
                    </li>
                    <li class="title">추가 수수료</li>
                    <li class="fees">
                        <div class="radiobox">
                            <input type="radio" id="YES" name="selector">
                            <label for="YES">예</label>
                            <div class="check"><div class="inside"></div></div>
                        </div>
                        <div class="radiobox">
                            <input type="radio" id="NO" name="selector">
                            <label for="NO">아니요</label>
                            <div class="check"><div class="inside"></div></div>
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