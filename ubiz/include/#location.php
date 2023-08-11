
<div class="location-top">
    <ul class="clearfix inb">
        <li class="home">
            <i class="icon-home"></i>
        </li>
        <li>
        <select onchange="categoryChange(this)">
            <option value="Company">기업보험비교</option>
            <option value="MyUbiz">마이유비즈</option>
            <option value="Reward">간편보상청구</option>
            <option value="Benefit">혜택</option>
            <option value="Customer">고객센터</option>
            <option value="Aboutus">회사소개</option>
        </select>
        </li>
        <li>
            <select id="depth">
                <option></option>
            </select>
        </li>
        <li>
            <select id="3depth">
                <option></option>
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
    function categoryChange(e) {
        var depth_Company = ["지수", "제니", "로제", "리사"];
        var depth_MyUbiz = ["빅토리아", "엠버", "루나", "크리스탈"];
        var depth_Reward = ["LE", "하니", "정화", "혜린", "솔지"];
        var depth_Benefit = ["빅토리아", "엠버", "루나", "크리스탈"];
        var depth_Customer = ["LE", "하니", "정화", "혜린", "솔지"];
        var depth_Aboutus = ["LE", "하니", "정화", "혜린", "솔지"];
        var target = document.getElementById("depth");

        if(e.value == "Company") var d = depth_Company;
        else if(e.value == "MyUbiz") var d = depth_MyUbiz;
        else if(e.value == "Reward") var d = depth_Reward;
        else if(e.value == "Benefit") var d = depth_Benefit;
        else if(e.value == "Customer") var d = depth_Customer;
        else if(e.value == "Aboutus") var d = depth_Aboutus;

        target.options.length = 0;

        for (x in d) {
            var opt = document.createElement("option");
            opt.value = d[x];
            opt.innerHTML = d[x];
            target.appendChild(opt);
        }	
    }
</script>