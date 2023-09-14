<?php 
$menuNo=[4,3,1];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php";
?>
<div class="servContents">
    <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>
    <div class="conts-box">
        <h1>회원 관리</h1>
        
        <h2 class="subtitle">회원 리스트</h2>
        <div class="memb-table">
            <table>
                <colgroup>
                    <col width="3%">
                    <col width="8%">
                    <col width="8%">
                    <col width="8%">
                    <col width="10%">
                    <col width="12%">
                    <col width="*">
                    <col width="10%">
                    <col width="10%">
                    <col width="8%">
                </colgroup>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>아이디</th>
                        <th>이름</th>
                        <th>하이웍스 아이디</th>
                        <th>휴대폰</th>
                        <th>이메일</th>
                        <th>권한</th>
                        <th>최종 로그인</th>
                        <th>등록일</th>
                        <th>상태</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>id-5</td>
                        <td>조현우</td>
                        <td>id-5</td>
                        <td>010-1213-1234</td>
                        <td>1234@bis.co.kr</td>
                        <td>고객관리, 계약관리, 정보 관리</td>
                        <td>2023-09-13</td>
                        <td>2023-09-13</td>
                        <td>정상</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>id-4</td>
                        <td>구정희</td>
                        <td>id-4</td>
                        <td>010-1213-1234</td>
                        <td>1234@bis.co.kr</td>
                        <td>고객관리, 계약관리, 정보 관리</td>
                        <td>2023-09-13</td>
                        <td>2023-09-13</td>
                        <td>정상</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>id-3</td>
                        <td>김성일</td>
                        <td>id-3</td>
                        <td>010-1213-1234</td>
                        <td>1234@bis.co.kr</td>
                        <td>고객관리, 계약관리, 정보 관리</td>
                        <td>2023-09-13</td>
                        <td>2023-09-13</td>
                        <td>정상</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>id-2</td>
                        <td>민경선</td>
                        <td>id-2</td>
                        <td>010-1213-1234</td>
                        <td>1234@bis.co.kr</td>
                        <td>고객관리, 계약관리, 정보 관리</td>
                        <td>2023-09-13</td>
                        <td>2023-09-13</td>
                        <td>퇴사</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>id-1</td>
                        <td>임우리</td>
                        <td>id-1</td>
                        <td>010-1213-1234</td>
                        <td>1234@bis.co.kr</td>
                        <td>고객관리, 계약관리, 정보 관리</td>
                        <td>2023-09-13</td>
                        <td>2023-09-13</td>
                        <td>정상</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="btn-pot-right">
                <a href="mmbr-register.php" class="button point rgstr">등록</a>
            </div>
            <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/service/pagination.php"; ?>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/footer.php"; ?>