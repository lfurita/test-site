<?php 
$menuNo=[4,2,1];
include $_SERVER['DOCUMENT_ROOT']."/CRM/include/header.php"; 
?>
    <div class="servContents">
        <?php include $_SERVER['DOCUMENT_ROOT']."/CRM/include/menu.php"; ?>

        <div class="conts-box">
            <h1>보험 상품</h1>
            <div class="details-table">
                <ul>
                    <li class="title">구분</li>
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
                    <li class="title">보험종목</li>
                    <li>
                        <div class="select-custom">
                            <select name="" id="">
                                <option value="" selected>선택</option>
                                <option value="">영업배상책임111</option>
                                <option value="">영업배상책임222</option>
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

                    <li class="title">보험상품</li>
                    <li>
                        <input type="text" name="" id="" placeholder="보험상품 입력">
                    </li>
                    <li class="title">내부담당</li>
                    <li>
                        <input type="text" name="" id="" placeholder="내부담당 입력">
                    </li>
                    <li class="title">상품 수수료</li>
                    <li class="fees">
                        <input type="number" name="" id="" placeholder="0">%
                        <span>~</span>
                        <input type="number" name="" id="" placeholder="0">%
                    </li>
                </ul>
            </div>
            <div class="btn-box-conts">
                <a href="" class="button search"><i class="icon-search"></i>검색</a>
                <a href="/CRM/service/inprd-register.php" class="button point rgstr">등록</a>
            </div>

            <div class="table-box">
                <table>
                    <colgroup>
                        <col width="3%">
                        <col width="8%">
                        <col width="8%">
                        <col width="7%">
                        <col width="10%">
                        <col width="10%">
                        <col width="7%">
                        <col width="7%">
                        <col width="7%">
                        <col width="*">
                        <col width="8%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>구분</th>
                            <th>보험사</th>
                            <th>분류</th>
                            <th>보험종목</th>
                            <th>보험상품</th>
                            <th>내부 당당자</th>
                            <th>상품 수수료</th>
                            <th>추가 수수료</th>
                            <th>상품 설명</th>
                            <th>자료</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>22</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>종합</td>
                            <td>영업배상책임</td>
                            <td>의료기기 배상책임</td>
                            <td>김성일</td>
                            <td>40%</td>
                            <td>Y</td>
                            <td class="left">보험에 관한 설명</td>
                            <td>
                                <a href="" class="button down">다운로드</a>
                            </td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>종합</td>
                            <td>영업배상책임</td>
                            <td>임직원 배상</td>
                            <td>김성일</td>
                            <td>40%</td>
                            <td>Y</td>
                            <td class="left">보험에 관한 설명</td>
                            <td>
                                <a href="" class="button down">다운로드</a>
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>종합</td>
                            <td>영업배상책임</td>
                            <td>의료기기 배상책임 1</td>
                            <td>김성일</td>
                            <td>40%</td>
                            <td>Y</td>
                            <td class="left">보험에 관한 설명</td>
                            <td>
                                <a href="" class="button down">다운로드</a>
                            </td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>종합</td>
                            <td>영업배상책임</td>
                            <td>의료기기 배상책임 2</td>
                            <td>김성일</td>
                            <td>40%</td>
                            <td>Y</td>
                            <td class="left">보험에 관한 설명</td>
                            <td>
                                <a href="" class="button down">다운로드</a>
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>종합</td>
                            <td>영업배상책임</td>
                            <td>의료기기 배상책임</td>
                            <td>김성일</td>
                            <td>40%</td>
                            <td>Y</td>
                            <td class="left">보험에 관한 설명</td>
                            <td>
                                <a href="" class="button down">다운로드</a>
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>종합</td>
                            <td>영업배상책임</td>
                            <td>의료기기 배상책임</td>
                            <td>김성일</td>
                            <td>40%</td>
                            <td>Y</td>
                            <td class="left">보험에 관한 설명</td>
                            <td>
                                <a href="" class="button down">다운로드</a>
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>종합</td>
                            <td>영업배상책임</td>
                            <td>의료기기 배상책임</td>
                            <td>김성일</td>
                            <td>40%</td>
                            <td>Y</td>
                            <td class="left">보험에 관한 설명</td>
                            <td>
                                <a href="" class="button down">다운로드</a>
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>종합</td>
                            <td>영업배상책임</td>
                            <td>의료기기 배상책임</td>
                            <td>김성일</td>
                            <td>40%</td>
                            <td>Y</td>
                            <td class="left">보험에 관한 설명</td>
                            <td>
                                <a href="" class="button down">다운로드</a>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>종합</td>
                            <td>영업배상책임</td>
                            <td>의료기기 배상책임</td>
                            <td>김성일</td>
                            <td>40%</td>
                            <td>Y</td>
                            <td class="left">보험에 관한 설명</td>
                            <td>
                                <a href="" class="button down">다운로드</a>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>손해보험</td>
                            <td>삼성화재</td>
                            <td>종합</td>
                            <td>영업배상책임</td>
                            <td>의료기기 배상책임</td>
                            <td>김성일</td>
                            <td>40%</td>
                            <td>Y</td>
                            <td class="left">보험에 관한 설명</td>
                            <td>
                                <a href="" class="button down">다운로드</a>
                            </td>
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