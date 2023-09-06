<?php 
$menuNo=[4,1,2];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php"; 
?>
    <div class="servContents">
        <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>

        <div class="conts-box">
            <h1>보험사 추가</h1>

            <div class="write-table">
                <ul>
                    <li class="title">구분 *</li>
                    <li class="first">
                        <div class="radiobox">
                            <input type="radio" id="insur1" name="selector">
                            <label for="insur1">손해보험</label>
                            <div class="check"><div class="inside"></div></div>
                        </div>
                        <div class="radiobox"> <!-- class="radiobox disabled" 비활성시 class에 "disabled" 넣기 -->
                            <input type="radio" id="insur2" name="selector">
                            <label for="insur2">생명보험</label>
                            <div class="check"><div class="inside"></div></div>
                        </div>
                    </li>

                    <li class="title">보험사명 *</li>
                    <li>
                        <div class="select-box">
                            <ul class="list-unstyled">
                                <li class="init">선택</li>
                                <li data-value="1">손해보험</li>
                                <li data-value="2">여행자보험</li>
                                <li data-value="3">단체상해보험</li>
                            </ul>
                        </div>
                    </li>
                    <li class="title">부서 *</li>
                    <li>
                        <input type="text" name="" id="" value="" placeholder="부서명 입력">
                    </li>
                    
                    <li class="title">담당자 *</li>
                    <li>
                        <input type="text" name="" id="" class="second" placeholder="담당자명 입력"> /
                        <input type="text" name="" id="" class="second" placeholder="직책 입력">
                    </li>
                    <li class="title">이메일 *</li>
                    <li>
                        <input type="email" name="" id="" value="" placeholder="부서명 입력">
                    </li>
                    
                    <li class="title">연락처 *</li>
                    <li>
                        <input type="tel" name="" id="" class="second" placeholder="연락처 입력">
                    </li>
                    <li class="title">휴대전화번호 *</li>
                    <li>
                        <input type="tel" name="" id="" value="" placeholder="휴대전화번호 입력">
                    </li>
                    
                    <li class="title">내부 담당</li>
                    <li>
                        <div class="select-box">
                            <ul class="list-unstyled">
                                <li class="init">부서 선택</li>
                                <li data-value="1">총무팀</li>
                                <li data-value="1">인사팀</li>
                            </ul>
                        </div>
                        /
                        <div class="select-box">
                            <ul class="list-unstyled">
                                <li class="init">담당자 선택</li>
                                <li data-value="1">홍길동 부장</li>
                                <li data-value="2">홍길순 팀장</li>
                                <li data-value="3">김아무개 대리</li>
                            </ul>
                        </div>
                    </li>
                    <li class="title"></li>
                    <li></li>

                    <li class="title2">메모</li>
                    <li class="first tarea">
                        <textarea name="" id="" class="textarea" placeholder="추가 사항 입력"></textarea>
                    </li>
                </ul>
            </div>

            <div class="btn-box-conts">
                <a href="" class="button point rgstr">추가</a>
            </div>
        </div>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/footer.php"; ?>