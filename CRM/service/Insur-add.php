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
                            <input id="in1" class="radio-custom" name="insurance" type="radio" checked>
                            <label for="in1" class="radio-custom-label">손해보험</label>
                        </div>
                        <div class="radiobox">
                            <input id="in2" class="radio-custom"name="insurance" type="radio">
                            <label for="in2" class="radio-custom-label">생명보험</label>
                        </div>
                    </li>

                    <li class="title">보험사명 *</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>선택</option>
                                <option value="">손해보험</option>
                                <option value="">여행자보험</option>
                                <option value="">단체상해보험</option>
                            </select>
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
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>부서선택</option>
                                <option value="">총무팀</option>
                                <option value="">인사팀</option>
                                <option value="">몰라팀</option>
                            </select>
                        </div>
                        /
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>담당자선택</option>
                                <option value="">홍길동 부장</option>
                                <option value="">홍길순 팀장</option>
                                <option value="">김아무개 대리</option>
                            </select>
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