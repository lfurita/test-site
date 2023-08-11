
<div class="location-top">
    <ul class="clearfix inb">
        <li class="home">
            <i class="icon-home"></i>
        </li>
        <li>
        <select id="select1" onchange="updateSelect2()">
  <option value="1">Option 1</option>
  <option value="2">Option 2</option>
  <option value="3">Option 3</option>
</select>
        </li>
        <li>
<select id="select2" onchange="updateSelect3()">
  <!-- 이 영역은 JavaScript 코드에서 동적으로 업데이트됩니다. -->
</select>
        </li>
        <li>
<select id="select3">
  <!-- 이 영역은 JavaScript 코드에서 동적으로 업데이트됩니다. -->
</select>

        </li>

<!--         
        <li class="depth">
            <select name="" id="">
                <option value="1" selected="selected">기업보험비교</option>
                <option value="2">마이유비즈</option>
                <option value="2">간편보상청구</option>
                <option value="2">혜택</option>
                <option value="2">고객센터</option>
                <option value="2">회사소개</option>
            </select>
        </li>
        <li class="depth">
            <select name="" id="">
                <option value="1">기업보험비교</option>
                <option value="2" selected="selected">보험견적요청</option>
            </select>
        </li>
        <li class="depth">
            <select name="" id="">
                <option value="1" selected="selected">화재/재산/동산</option>
                <option value="2">배상책임</option>
                <option value="3">근로자재해</option>
                <option value="4">해상/적하/운송</option>
                <option value="5">자동차/건설기계</option>
                <option value="6">건설공사/기계/기술</option>
                <option value="7">기타</option>
            </select>
        </li> -->
    </ul>
</div>

<script>
function updateSelect2() {
  var select1 = document.getElementById("select1");
  var select2 = document.getElementById("select2");

  var selectedValue = select1.value;

  if (selectedValue === "1") {
    select2.innerHTML = `
      <option value="a">Option A</option>
      <option value="b">Option B</option>
      <option value="c">Option C</option>
    `;
  } else if (selectedValue === "2") {
    select2.innerHTML = `
      <option value="x">Option X</option>
      <option value="y">Option Y</option>
      <option value="z">Option Z</option>
    `;
  } else if (selectedValue === "3") {
    select2.innerHTML = `
      <option value="foo">Option Foo</option>
      <option value="bar">Option Bar</option>
      <option value="baz">Option Baz</option>
    `;
  }

  // select2를 변경했으므로 select3를 업데이트합니다.
  updateSelect3();
}

function updateSelect3() {
  var select2 = document.getElementById("select2");
  var select3 = document.getElementById("select3");

  var selectedValue = select2.value;

  // select2의 값에 따라 select3를 업데이트합니다.
  if (selectedValue === "a") {
    select3.innerHTML = `
      <option value="apple">Option Apple</option>
      <option value="avocado">Option Avocado</option>
    `;
  } else if (selectedValue === "b") {
    select3.innerHTML = `
      <option value="banana">Option Banana</option>
      <option value="blueberry">Option Blueberry</option>
    `;
  } else if (selectedValue === "c") {
    select3.innerHTML = `
      <option value="carrot">Option Carrot</option>
      <option value="celery">Option Celery</option>
    `;
  } else if (selectedValue === "x") {
    select3.innerHTML = `
      <option value="cat">Option Cat</option>
      <option value="cow">Option Cow</option>
    `;
  } else if (selectedValue === "y") {
    select3.innerHTML = `
      <option value="dog">Option Dog</option>
      <option value="duck">Option Duck</option>
    `;
  } else if (selectedValue === "z") {
    select3.innerHTML = `
      <option value="elephant">Option Elephant</option>
      <option value="eagle">Option Eagle</option>
    `;
  } else if (selectedValue === "foo") {
    select3.innerHTML = `
      <option value="frog">Option Frog</option>
      <option value="fish">Option Fish</option>
    `;
  } else if (selectedValue === "bar") {
    select3.innerHTML = `
      <option value="gorilla">Option Gorilla</option>
      <option value="giraffe">Option Giraffe</option>
    `;
  } else if (selectedValue === "baz") {
    select3.innerHTML = `
      <option value="hedgehog">Option Hedgehog</option>
      <option value="hamster">Option Hamster</option>
    `;
  }

  // 추가 작업을 수행할 수 있습니다.
}

</script>