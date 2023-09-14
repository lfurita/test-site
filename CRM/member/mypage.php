<?php 
$menuNo=[0,3];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php";
?>
    <div class="memContents">
        <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>
        <div class="conts-box">
            <h1>내 업무</h1> <!--마이페이지-->
            
            <h2 class="subtitle">계약 정보</h2>
            <div class="memb-table">
                <table>
                    <colgroup>
                        <col width="3%">
                        <col width="7%">
                        <col width="8%">
                        <col width="*">
                        <col width="8%">                        
                        <col width="8%">
                        <col width="12%">
                        <col width="7%">
                        <col width="8%">
                        <col width="10%">
                        <col width="10%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>상태</th>
                            <th>보험종목</th>
                            <th>상품명</th>
                            <th>계약자</th>
                            <th>피보험자</th>

                            <th>보험 기간</th>
                            <th>계약 담당자</th>
                            <th>연락처</th>
                            <th>이메일</th>
                            <th>취급 담당자 (주/부)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>22</td>
                            <td>상담/설계</td>
                            <td>배상책임</td>
                            <td>생산물배상책임보험</td>
                            <td>청학씨엔씨</td>
                            <td>청학씨엔씨</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>김철수</td>
                            <td>02-1234-1234</td>
                            <td>abc@bis.co.kr</td>
                            <td>김성일/민경선</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>청약</td>
                            <td>근재보험</td>
                            <td>국내근로자재해보험</td>
                            <td>청학씨엔씨</td>
                            <td>청학씨엔씨</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>김철수</td>
                            <td>02-1234-1234</td>
                            <td>abc@bis.co.kr</td>
                            <td>민경선</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>심사</td>
                            <td>배상책임</td>
                            <td>생산물배상책임보험</td>
                            <td>청학씨엔씨</td>
                            <td>청학씨엔씨</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>김철수</td>
                            <td>02-1234-1234</td>
                            <td>abc@bis.co.kr</td>
                            <td>김성일</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>청약완료</td>
                            <td>근재보험</td>
                            <td>국내근로자재해보험</td>
                            <td>디와이글로벌㈜</td>
                            <td>디와이글로벌㈜</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>김철수</td>
                            <td>02-1234-1234</td>
                            <td>abc@bis.co.kr</td>
                            <td>민경선</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>취소</td>
                            <td>배상책임</td>
                            <td>생산물배상책임보험</td>
                            <td>청학씨엔씨</td>
                            <td>청학씨엔씨</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>김철수</td>
                            <td>02-1234-1234</td>
                            <td>abc@bis.co.kr</td>
                            <td>김성일</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <h2 class="subtitle">만기 도래 리스트</h2>
            <div class="memb-table">
                <table>
                    <colgroup>
                        <col width="3%">
                        <col width="7%">
                        <col width="8%">
                        <col width="*">
                        <col width="8%">
                        <col width="8%">
                        <col width="8%">
                        <col width="12%">
                        <col width="7%">
                        <col width="10%">
                        <col width="10%">
                        <col width="12%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>상태</th>
                            <th>보험종목</th>
                            <th>상품명</th>
                            <th>계약자</th>
                            <th>피보험자</th>
                            <th>계약일</th>
                            <th>보험 기간</th>
                            <th>계약 담당자</th>
                            <th>연락처</th>
                            <th>이메일</th>
                            <th>갱신 알림</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>22</td>
                            <td>계약완료</td>
                            <td>배상책임</td>
                            <td>생산물배상책임보험</td>
                            <td>청학씨엔씨</td>
                            <td>청학씨엔씨</td>
                            <td>2023.01.01</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>김철수</td>
                            <td>02-1234-1234</td>
                            <td>abc@bis.co.kr</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>계약완료</td>
                            <td>근재보험</td>
                            <td>국내근로자재해보험</td>
                            <td>청학씨엔씨</td>
                            <td>청학씨엔씨</td>
                            <td>-</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>김철수</td>
                            <td>02-1234-1234</td>
                            <td>abc@bis.co.kr</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>계약완료</td>
                            <td>배상책임</td>
                            <td>생산물배상책임보험</td>
                            <td>청학씨엔씨</td>
                            <td>청학씨엔씨</td>
                            <td>2023.01.01</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>김철수</td>
                            <td>02-1234-1234</td>
                            <td>abc@bis.co.kr</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>계약완료</td>
                            <td>근재보험</td>
                            <td>국내근로자재해보험</td>
                            <td>디와이글로벌㈜</td>
                            <td>디와이글로벌㈜</td>
                            <td>2023.01.01</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>김철수</td>
                            <td>02-1234-1234</td>
                            <td>abc@bis.co.kr</td>
                            <td class="p0">
                                <div class="day-item">
                                    <span class="active">60</span>
                                    <span class="active">30</span>
                                    <span>15</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>계약완료</td>
                            <td>배상책임</td>
                            <td>생산물배상책임보험</td>
                            <td>청학씨엔씨</td>
                            <td>청학씨엔씨</td>
                            <td>2023.01.01</td>
                            <td>2023.01.01~2024.01.01</td>
                            <td>김철수</td>
                            <td>02-1234-1234</td>
                            <td>abc@bis.co.kr</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>