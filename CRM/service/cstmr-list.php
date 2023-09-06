<?php 
$menuNo=[2,1,1];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php"; 
?>
    <div class="servContents">
        <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>

        <div class="conts-box">
            <h1>고객(사) 리스트</h1>
            <div class="details-table">
                <ul>
                    <li class="title">고객(사)</li>
                    <li>
                        <input type="text" name="" id="" placeholder="거래처명 입력">
                    </li>
                    <li class="title">가입상품</li>
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
                    <li class="title">계약 담당자</li>
                    <li>
                        <input type="text" name="" id="" placeholder="계약 담당자 입력">
                    </li>
                </ul>
            </div>
            <div class="btn-box-conts">
                <a href="" class="button search"><i class="icon-search"></i>검색</a>
            </div>

            <div class="table-box">
                <table class="table-link">
                    <colgroup>
                        <col width="3%">
                        <col width="7%">
                        <col width="10%">
                        <col width="7%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="*">
                        <col width="7%">
                        <col width="7%">
                        <col width="8%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>유형</th>
                            <th>고객(사)명</th>
                            <th>거래처 담당자</th>
                            <th>연락처</th>
                            <th>휴대폰번호</th>
                            <th>이메일</th>
                            <th>주소</th>
                            <th>가입상품</th>
                            <th>최근 업데이트</th>
                            <th>취급 담당자</th>
                            <th>상태</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">22</td>
                            <td onclick="location.href='cstmr-view.php';">개인</td>
                            <td onclick="location.href='cstmr-view.php';">홍길동</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">배상책임 보험</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">김성일</td>
                            <td onclick="location.href='cstmr-view.php';">상담/설계</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">21</td>
                            <td onclick="location.href='cstmr-view.php';">법인 사업자</td>
                            <td onclick="location.href='cstmr-view.php';">알톤스포츠</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">배상책임 보험</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">민경선</td>
                            <td onclick="location.href='cstmr-view.php';">유지</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">20</td>
                            <td onclick="location.href='cstmr-view.php';">개인 사업자</td>
                            <td onclick="location.href='cstmr-view.php';">미용실</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">배상책임 보험 외 1</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">김성일</td>
                            <td onclick="location.href='cstmr-view.php';">유지</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">19</td>
                            <td onclick="location.href='cstmr-view.php';">법인 사업자</td>
                            <td onclick="location.href='cstmr-view.php';">알톤스포츠</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">민경선</td>
                            <td onclick="location.href='cstmr-view.php';">유지</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">18</td>
                            <td onclick="location.href='cstmr-view.php';">개인</td>
                            <td onclick="location.href='cstmr-view.php';">홍길동</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">김성일</td>
                            <td onclick="location.href='cstmr-view.php';">상담거부</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">17</td>
                            <td onclick="location.href='cstmr-view.php';">법인 사업자</td>
                            <td onclick="location.href='cstmr-view.php';">알톤스포츠</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">민경선</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                        </tr>

                        <tr>
                            <td onclick="location.href='cstmr-view.php';">16</td>
                            <td onclick="location.href='cstmr-view.php';">개인</td>
                            <td onclick="location.href='cstmr-view.php';">홍길동</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">김성일</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">15</td>
                            <td onclick="location.href='cstmr-view.php';">법인 사업자</td>
                            <td onclick="location.href='cstmr-view.php';">알톤스포츠</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">민경선</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">14</td>
                            <td onclick="location.href='cstmr-view.php';">개인</td>
                            <td onclick="location.href='cstmr-view.php';">홍길동</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">김성일</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">13</td>
                            <td onclick="location.href='cstmr-view.php';">법인 사업자</td>
                            <td onclick="location.href='cstmr-view.php';">알톤스포츠</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">민경선</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">12</td>
                            <td onclick="location.href='cstmr-view.php';">개인</td>
                            <td onclick="location.href='cstmr-view.php';">홍길동</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">김성일</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">11</td>
                            <td onclick="location.href='cstmr-view.php';">법인 사업자</td>
                            <td onclick="location.href='cstmr-view.php';">알톤스포츠</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">민경선</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">10</td>
                            <td onclick="location.href='cstmr-view.php';">개인</td>
                            <td onclick="location.href='cstmr-view.php';">홍길동</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">김성일</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                        </tr>
                        <tr>
                            <td onclick="location.href='cstmr-view.php';">09</td>
                            <td onclick="location.href='cstmr-view.php';">법인 사업자</td>
                            <td onclick="location.href='cstmr-view.php';">알톤스포츠</td>
                            <td onclick="location.href='cstmr-view.php';">김미경</td>
                            <td onclick="location.href='cstmr-view.php';">02-1234-1234</td>
                            <td onclick="location.href='cstmr-view.php';">010-1234-5678</td>
                            <td onclick="location.href='cstmr-view.php';">abcd@bis.co.kr</td>
                            <td onclick="location.href='cstmr-view.php';">서울시 중구 광희동</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                            <td onclick="location.href='cstmr-view.php';">2023.02.07</td>
                            <td onclick="location.href='cstmr-view.php';">민경선</td>
                            <td onclick="location.href='cstmr-view.php';">-</td>
                        </tr>
                    </tbody>
                </table>

                <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/service/pagination.php"; ?>
            </div>
        </div>
    </div>
    <script>
    </script>

<?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/footer.php"; ?>