<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,width=device-width">

  <title>삼성화재 B2B | 투어세이프</title>

  <link rel="stylesheet" type="text/css" href="/samsun.b2b/css/style.css">
  <link rel="stylesheet" type="text/css" href="/samsun.b2b/css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="/samsun.b2b/css/basic.css">
  <link rel="stylesheet" type="text/css" href="/samsun.b2b/css/main.css">
  <link rel="stylesheet" type="text/css" href="/samsun.b2b/css/sub.css">
  <link rel="stylesheet" type="text/css" href="/samsun.b2b/css/button.css">
  <link rel="stylesheet" type="text/css" href="/samsun.b2b/css/modal.css">

  <script type="text/javascript" src="/samsun.b2b/js/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="/samsun.b2b/js/jquery-ui.js"></script>
  
</head>
<body id="wrap">
<!-- Header start -->
<? if($mNum==0): ?>
<? else: ?>
    <header>
        <div class="head-wrap">
            <h1><img src="/samsun.b2b/img/common/logo-toursafe.png" alt="투어세이프 로고"></h1>
            <nav>
                <ul class="clearfix inb">
                    <li class="<?=($mNum==1)?"active":""?>"><a href="/samsun.b2b/service/register/register.php">보험 가입</a>
                        <ul id="submenu">
                            <li><a href="/samsun.b2b/service/register/register.php">국내여행</a></li>
                            <li><a href="/samsun.b2b/service/register/register.php">해외여행</a></li>
                            <li><a href="/samsun.b2b/service/register/register.php">해외장기체류</a></li>
                        </ul>
                    </li>
                    <li class="<?=($mNum==2)?"active":""?>"><a href="/samsun.b2b/service/check/list.php">신청내역 조회/수정</a></li>
                    <li class="<?=($mNum==3)?"active":""?>"><a href="/samsun.b2b/service/adjustment/list.php">정산관리</a></li>
                    <li class="<?=($mNum==4)?"active":""?>"><a href="/samsun.b2b/service/claim/list.php">청구안내</a></li>
                    <li class="<?=($mNum==5)?"active":""?>"><a href="/samsun.b2b/service/customer/notice.php">고객센터</a></li>
                </ul>
            </nav>
            <div class="box-btn-head">
                <a href="/samsun.b2b/service/member/join-modify.php" class="button id-name">참좋은 여행사</a>
                <a href="#;" class="button logout">로그아웃</a>
            </div>
        </div>
    </header>
<? endif ?>
<!-- Header end -->