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
                
                <div class="selector disabled">
                    <input type="radio" id="prvtBsns" name="Prvdr" disabled>
                    <label for="prvtBsns">개인 사업자</label>
                </div>
                
                <div class="selector disabled">
                    <input type="radio" id="indvd" name="Prvdr" disabled>
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
                        <!--div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>선택</option>
                                <option value="" >통신판매업</option>
                                <option value="">제조업</option>
                                <option value="">정보서비스업</option>
                                <option value="">건설업</option>
                                <option value="">기타..... 모르겠다...</option>
                            </select>
                        </div-->
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
                <a href="" class="button point rgstr">수정</a>
            </div>

            <h2 class="subtitle">보험 가입 정보
                <a class="button new-regis"><i class="icon-plus">등록</i>신규 등록</a>
            </h2>
            <div class="table-box mgT10">
                <table>
                    <colgroup>
                        <col width="3%">
                        <col width="7%">
                        <col width="10%">
                        <col width="10%">
                        <col width="7%">
                        <col width="13%">
                        <col width="7%">
                        <col width="7%">
                        <col width="7%">
                        <col width="7%">
                        <col width="7%">
                        <col width="*">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>종목</th>
                            <th>상품명</th>
                            <th>증권번호</th>
                            <th>청약일</th>
                            <th>보험 기간</th>
                            <th>보험료</th>
                            <th>피보험자</th>
                            <th>취급 담당자 </th>
                            <th>부 담당자</th>
                            <th>상태</th>
                            <th>기타</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3</td>
                            <td>배상책임</td>
                            <td>생산물배상책임보험</td>
                            <td>58SD230002</td>
                            <td>2023.01.01</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>500,000</td>
                            <td>홍길동</td>
                            <td>김성일</td>
                            <td>민경선</td>
                            <td>설계</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>배상책임</td>
                            <td>생산물배상책임보험</td>
                            <td>58SD230002</td>
                            <td>2023.01.01</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>500,000</td>
                            <td>홍길동</td>
                            <td>김성일</td>
                            <td>민경선</td>
                            <td>만료</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>배상책임</td>
                            <td>생산물배상책임보험</td>
                            <td>58SD230002</td>
                            <td>2023.01.01</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>500,000</td>
                            <td>홍길동</td>
                            <td>김성일</td>
                            <td>민경선</td>
                            <td>만료</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h2 class="subtitle">히스토리</h2>
            <div class="history-box">
                <ul class="clearfix inb">
                    <li>
                        <div class="title">
                            <div class="icon-box-item">
                                <i class="icon-email">이메일</i>
                            </div>

                            <div class="text-box-item">
                                <strong>시스템</strong>
                                <p>2023.02.03</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-box-item">
                            <strong>생산물배상책임보험</strong>
                            <p>만기 알림 자동 발송 90일 전</p>
                        </div>
                    </li>
                    
                    <li>
                        <div class="title">
                            <div class="icon-box-item">
                                <i class="icon-tel">전화기</i>
                            </div>

                            <div class="text-box-item">
                                <strong>민경선</strong>
                                <p>2023.02.03</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-box-item">
                            <strong>생산물배상책임보험</strong>
                            <p>전화 연락 후,  필요 서류 요청 및 미팅 약속</p>
                            <p>미팅 일시 : 2월 4일  11시 광화문 광장</p>
                        </div>
                    </li>
                    
                    <li>
                        <div class="title">
                            <div class="icon-box-item">
                                <i class="icon-file">파일</i>
                            </div>

                            <div class="text-box-item">
                                <strong>민경선</strong>
                                <p>2023.02.03</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-box-item">
                            <strong>생산물배상책임보험</strong>
                            <p>보험 상담 - 서류 수급</p>
                            <p>(주) 가나다 승강기 보험 2021년 보험료.pdf</p>
                        </div>
                    </li>
                    
                    <li>
                        <div class="title">
                            <div class="icon-box-item">
                                <i class="icon-file">파일</i>
                            </div>

                            <div class="text-box-item">
                                <strong>민경선</strong>
                                <p>2023.02.03</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-box-item">
                            <strong>생산물배상책임보험</strong>
                            <p>견적발행</p>
                            <p>(주) 가나다 승강기 보험 2021년 보험료.pdf</p>
                        </div>
                    </li>
                    
                    <li>
                        <div class="title">
                            <div class="icon-box-item">
                                <i class="icon-file">파일</i>
                            </div>

                            <div class="text-box-item">
                                <strong>민경선</strong>
                                <p>2023.02.03</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-box-item">
                            <strong>생산물배상책임보험</strong>
                            <p>청약서류 발급</p>
                            <p>(주) 가나다 승강기 보험 2021년 보험료.pdf</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    

<?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/footer.php"; ?>