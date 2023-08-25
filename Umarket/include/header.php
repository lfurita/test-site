<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,width=device-width">

  <title>유비즈 보험비교 서비스</title>
  
  <meta name="title" content="유비즈 보험비교 서비스" />
  <meta name="description" content="" />
  <meta name="author" content="유비즈 보험비교 서비스">
  <meta name="keywords" content="기업보험,">

  <link rel="canonical" href="https://ubiz.co.kr">
  <meta property="og:type" content="website">
  <meta property="og:title" content="유비즈 보험비교 서비스">
  <meta property="og:description" content="보험솔루션으로 보험서비스 혁신을 주도하기 위해 최선을 다하는 유비즈">
  <meta property="og:image" content="https://ubiz.co.kr/img/">
  <meta property="og:url" content="https://ubiz.co.kr">

  <link rel="shortcut icon" href="/img/favicon.png">
  
  <!-- design style css -->
  <link rel="stylesheet" type="text/css" href="/Umarket/css/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css" href="/Umarket/css/downupPopup.css">
  <link rel="stylesheet" type="text/css" href="/Umarket/css/style.css?v=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="/Umarket/css/basic.css?v=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="/Umarket/css/button.css?v=<?=time()?>">
  <? if($menuNo[0]==0): ?>
  <link rel="stylesheet" type="text/css" href="/Umarket/css/member.css?v=<?=time()?>">
  <? elseif($menuNo[0]==1): ?>
  <link rel="stylesheet" type="text/css" href="/Umarket/css/main.css?v=<?=time()?>">
  <? else: ?>
  <link rel="stylesheet" type="text/css" href="/Umarket/css/service.css?v=<?=time()?>">
  <? endif ?>

  <script type="text/javascript" src="/Umarket/js/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="/Umarket/js/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="/Umarket/js/downupPopup.js"></script>
</head>
<? if($menuNo[0]==4 && $menuNo[1]==2 || $menuNo[0] == 5): ?>
<body class="backg">
<? else: ?>
<body>
<? endif ?>

<!-- Header start -->
    <header id="header">
        <div class="naming">
            <? if($menuNo[0]==5): ?>
                <a href="javascript:history.back()" class="title"></a>Categories
            <? elseif($menuNo[0]==0 && $menuNo[1]==1): ?>
                <a href="javascript:history.back()" class="title"></a>Login
            <? elseif($menuNo[0]==0 && $menuNo[1]==2): ?>
                <a href="javascript:history.back()" class="title"></a>Sign Up
            <? elseif($menuNo[0]==3): ?>
                <a href="javascript:history.back()" class="title"></a>Search
            <? elseif($menuNo[0]==4 && $menuNo[1]==1): ?>
                <a href="javascript:history.back()" class="title"></a><span>Categories </span> List
            <? elseif($menuNo[0]==4 && $menuNo[1]==2): ?>
                <a href="javascript:history.back()" class="title"></a>Products Detail
            <? elseif($menuNo[0]==5 && $menuNo[1]==1): ?>
                <a href="javascript:history.back()" class="title"></a>Cart
            <? else: ?>
                <a href="/Umarket/" class="logo"><img src="/Umarket/img/common/" alt="Umarket 로고"></a>
            <? endif ?>
        </div>

        <div class="icon-menu-wrap">
            <? if($menuNo[0]==1): ?>
                <i class="icon-search" onclick="location.href='/Umarket/service/search.php';">검색 아이콘</i>
                <i class="icon-cart" onclick="location.href='/Umarket/service/basket.php';">장바구니 아이콘</i>
            <? elseif($menuNo[0]==2 || $menuNo[0] == 3 || $menuNo[0] == 4 || $menuNo[0] == 6): ?>
                <i class="icon-search">검색 아이콘</i>
                <i class="icon-hoem" onclick="location.href='/Umarket/';">Home 아이콘</i>
                <i class="icon-cart" onclick="location.href='/Umarket/service/basket.php';">장바구니 아이콘</i>
            <? elseif($menuNo[0] == 5): ?>
                <i class="icon-search" onclick="location.href='/Umarket/service/search.php';">검색 아이콘</i>
                <i class="icon-hoem" onclick="location.href='/Umarket/';">Home 아이콘</i>
            <? else: ?>
            <? endif ?>
        </div>
    </header>
<!-- Header end -->