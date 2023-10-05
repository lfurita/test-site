<?php 
$menuNo=[2,2];
include $_SERVER['DOCUMENT_ROOT']."/Umarket/admin/include/header.php"; 
?>

<div class="contents-wrap">
    <div class="inner">
        <div class="conts-box">
            <h2 class="order-nmbr">
                <div class="title">주문 번호 : <span id="orderNumber">#0123456789</span></div>

                <div class="datetime-total">
                    <div class="datetime">
                        <strong>주문일시 : </strong>
                        <span>2023-04-30 13:37 (일)</span>
                    </div>
                    <div class="order-total">
                        <strong>주문총액 : </strong>
                        <span>36,720</span>원
                    </div>
                </div>
            </h2>
            
            <!-- 주문관리 상세 Form start -->
            <form id="ordmnDtfrm">
                <div class="order-details-box">
                    <ul>
                        <li><strong>주문상품</strong></li>
                        <li>
                            <input type="text" id="" class="input1" value="Frozen fish 1kg" readonly>
                        </li>

                        <li><strong>상품코드</strong></li>
                        <li>
                            <input type="text" id="" class="input2" value="#2023050100001" readonly>
                        </li>

                        <li><strong>분류</strong></li>
                        <li>
                            <div class="select-box">
                                <select id="cmdtyDscdn" disabled>
                                    <option value="">분류 선택</option>
                                    <option value="Fresh">Fresh</option>
                                    <option value="Frozen" selected>Frozen</option>
                                    <option value="Sauce">Sauce</option>
                                    <option value="Drink">Drink</option>
                                    <option value="Grain">Grain</option>
                                    <option value="Etc">Etc</option>
                                </select>
                            </div>
                        </li>

                        <li><strong>주문상태</strong></li>
                        <li>
                            <div class="select-box">
                                <select id="cmdtyDscdn">
                                    <option value="">분류 선택</option>
                                    <option value="orderCnfrm">주문확인</option>
                                    <option value="payment" selected>결제대기</option>
                                    <option value="orderRcptn">주문접수</option>
                                    <option value="delivery">배송중</option>
                                    <option value="cmpltDlvry">배송완료</option>
                                    <option value="orderCnclt">취소</option>
                                </select>
                            </div>
                        </li>

                        <li><strong>제조사</strong></li>
                        <li>
                            <input type="text" id="" class="input1" value="비아이에스스" readonly>
                        </li>

                        <li><strong>원산지</strong></li>
                        <li>
                            <input type="text" id="" class="input1" value="Made in Korea" readonly>
                        </li>

                        <li><strong>판매규격</strong></li>
                        <li>
                            <input type="text" id="" class="input1" value="1X2X3" readonly>
                        </li>

                        <li><strong>판매단위</strong></li>
                        <li class="select">
                            <input type="number" id="" class="input3" value="1" readonly>

                            <div class="select-box saleUnit">
                                <select id="cmdtyDscdn" disabled>
                                    <option value="">단위선택</option>
                                    <option value="orderBOX">box</option>
                                    <option value="orderKG" selected>kg</option>
                                    <option value="orderEA">ea</option>
                                </select>
                            </div>
                        </li>

                        <li><strong>배송유형</strong></li>
                        <li class="radio-box-item">
                            <div class="radiobox">
                                <input id="Dlvr1" class="radio-custom" name="Delivery" type="radio" checked>
                                <label for="Dlvr1" class="radio-custom-label">직배송</label>
                            </div>
                            <div class="radiobox">
                                <input id="Dlvr2" class="radio-custom"name="Delivery" type="radio">
                                <label for="Dlvr2" class="radio-custom-label">택배배송</label>
                            </div>
                        </li>

                        <li><strong>상품이미지</strong></li>
                        <li class="img-item">
                            <figure>
                                <img src="/Umarket/img/main/best-list-img-03.jpg" alt="">
                            </figure>
                        </li>

                        <li><strong>상품 상세 내용</strong></li>
                        <li>
                            <div class="prdct-dtls-box">
                                <div class="nation-box">
                                    <i class="ko-item">한국어</i>
                                </div>
                                <div class="dtls-conts-box">
                                    <textarea name="" placeholder="내용을 입력해 주세요." readonly="readonly">제품명 : 레몬
중량 : 4kg 내외
과수 : 40과
제조사 : SUNKIST외 타브랜드
원산지 : 미국/칠레
제품사이즈 : 생과이기 때문에 제품마다 크기가 일정하기 어려움</textarea>
                                </div>
                            </div>
                            <div class="prdct-dtls-box">
                                <div class="nation-box">
                                    <i class="eng-item">영어</i>
                                </div>
                                <div class="dtls-conts-box">
                                    <textarea name="" placeholder="내용을 입력해 주세요." readonly="readonly">Product Name: Lemon
Weight: Approximately 4kg
Fruit trees: 40 fruits
Manufacturer: SUNKIST and other brands
Country of origin: USA/Chile
Product size: Because it is a fresh fruit, it is difficult for the size to be consistent for each product.</textarea>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="btn-center-wrap">
                    <a onclick="history.back()" class="button cancel">취소</a>
                    <a href="" class="button point">수정</a>
                </div>
            </form>
            <!-- 주문관리 상세 end -->
        </div>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/Umarket/admin/include/footer.php"; ?>