<?php 
$menuNo=[4,1,1];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php"; 
?>
    <div class="servContents">
        <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>

        <div class="conts-box">
            <h1>보험사</h1>
            <div class="details-table">
                <ul>
                    <li class="title">구분</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>분류</option>
                                <option value="" >손해보험</option>
                                <option value="" >여행자보험</option>
                                <option value="" >단체상해보험</option>
                            </select>
                        </div>
                    </li>
                    <li class="title">보험사</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>선택</option>
                                <option value="" >삼성화재</option>
                                <option value="" >메리츠화재</option>
                                <option value="" >DB손해보험</option>
                                <option value="" >몰라</option>
                            </select>
                        </div>
                    </li>
                    <li class="title">부서/채널</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>선택</option>
                                <option value="" >GA</option>
                                <option value="" >디지털</option>
                            </select>
                        </div>
                    </li>

                    <li class="title">담당자</li>
                    <li>
                        <input type="text" name="" id="" value="" placeholder="담당자 실명">
                    </li>
                    <li class="title">연락처</li>
                    <li>
                        <input type="number" name="" id="" value="" placeholder="010-2345-6789">
                    </li>
                    <li class="title">이메일</li>
                    <li>
                        <input type="email" name="" id="" value="" placeholder="aa@bis.co.kr">
                    </li>
                </ul>
            </div>
            <div class="btn-box-conts">
                <a href="" class="button search"><i class="icon-search"></i>검색</a>
                <a href="/CRM/service/insur-add.php" class="button point rgstr">등록</a>
            </div>

            <div class="table-box">
                <table>
                    <colgroup>
                        <col width="3%">
                        <col width="7%">
                        <col width="7%">
                        <col width="7%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="12%">
                        <col width="7%">
                        <col width="*">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>구분</th>
                            <th>보험사</th>
                            <th>부서/채널</th>
                            <th>담당자/직책</th>
                            <th>연략처</th>
                            <th>휴대전화번호</th>
                            <th>이메일</th>
                            <th>내부 담당자</th>
                            <th>메모</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>22</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>GA</td>
                            <td>홍길동 / 과장</td>
                            <td>02-1234-1234</td>
                            <td>010-1234-1234</td>
                            <td>aa@bis.co.kr</td>
                            <td>김성일</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>디지털</td>
                            <td>홍길동 / 과장</td>
                            <td>02-1234-1234</td>
                            <td>010-1234-1234</td>
                            <td>aa@bis.co.kr</td>
                            <td>김성일</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <td>20</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>GA</td>
                            <td>홍길동 / 과장</td>
                            <td>02-1234-1234</td>
                            <td>010-1234-1234</td>
                            <td>aa@bis.co.kr</td>
                            <td>김성일</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>디지털</td>
                            <td>홍길동 / 과장</td>
                            <td>02-1234-1234</td>
                            <td>010-1234-1234</td>
                            <td>aa@bis.co.kr</td>
                            <td>김성일</td>
                            <td>-</td>
                        </tr>
                        
                        <tr>
                            <td>18</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>GA</td>
                            <td>홍길동 / 과장</td>
                            <td>02-1234-1234</td>
                            <td>010-1234-1234</td>
                            <td>aa@bis.co.kr</td>
                            <td>김성일</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>디지털</td>
                            <td>홍길동 / 과장</td>
                            <td>02-1234-1234</td>
                            <td>010-1234-1234</td>
                            <td>aa@bis.co.kr</td>
                            <td>김성일</td>
                            <td>-</td>
                        </tr>
                        
                        <tr>
                            <td>16</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>GA</td>
                            <td>홍길동 / 과장</td>
                            <td>02-1234-1234</td>
                            <td>010-1234-1234</td>
                            <td>aa@bis.co.kr</td>
                            <td>김성일</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>디지털</td>
                            <td>홍길동 / 과장</td>
                            <td>02-1234-1234</td>
                            <td>010-1234-1234</td>
                            <td>aa@bis.co.kr</td>
                            <td>김성일</td>
                            <td>-</td>
                        </tr>
                        
                        <tr>
                            <td>14</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>GA</td>
                            <td>홍길동 / 과장</td>
                            <td>02-1234-1234</td>
                            <td>010-1234-1234</td>
                            <td>aa@bis.co.kr</td>
                            <td>김성일</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>디지털</td>
                            <td>홍길동 / 과장</td>
                            <td>02-1234-1234</td>
                            <td>010-1234-1234</td>
                            <td>aa@bis.co.kr</td>
                            <td>김성일</td>
                            <td>-</td>
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