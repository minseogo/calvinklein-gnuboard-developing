<?php
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- seo -->
    <meta name="description" content="" /> 
    <meta property="og:locale" content="ko_KR" /> 
    <meta property="og:site_name" content="" /> 
    <meta property="og:url" content=""/> 
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="" /> 
    <meta property="og:description" content="" /> 
    <meta property="og:image" content="" />

    <!-- 파비콘 바로가기 -->
    <link href="//www.calvinklein.co.kr/on/demandware.static/Sites-CK_KR-Site/-/default/dwa0f5f587/images/favicon.ico" rel="shortcut icon" />

    <!-- 텍스트 폰트 -->
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/ck/css/fonts.css">

    <!-- font icon -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/default.css">


    <!-- 초기화 -->
    <link href="//cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css" rel="stylesheet">

    <!-- 그리드 시스템 -->
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="http://gominseo.dothome.co.kr/gnuboard/skin/board/subsecond/style.css?ver=2303229">
    <!-- 플러그인 -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link href="//unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="//unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- 커스터마이징 -->
    <link rel="stylesheet" href="http://gominseo.dothome.co.kr/gnuboard/skin/faq/basic/style.css?ver=2303229">
    <link rel="stylesheet" href="http://gominseo.dothome.co.kr/gnuboard/skin/member/basic/style.css?ver=2303229">
    <link rel="stylesheet" href="/ck/css/common.min.css">
    <link rel="stylesheet" href="/ck/css/ck.min.css">
 
    <script src="//code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  

    <script src="/ck/js/common.js"></script>

   
</head>
<body>
    <header id="hd" class="my-3 px-xl-5 px-3 d-lg-flex align-items-lg-baseline justify-content-between position-relative">
        <div class="d-flex align-items-lg-baseline align-items-center justify-content-between ">
            <button id="hamburger-btn" class="bi bi-list col-3 border-0 bg-transparent ms-sm-1 d-lg-none d-flex"></button> 
            <h1 class="col-auto mb-0 d-block">
                <a href="/ck" class="d-block text-decoration-none text-nowrap">
                    <img class="img-fluid d-block" src="https://www.calvinklein.co.kr/on/demandware.static/-/Library-Sites-calvin-klein-shared-library/default/dw65bf7326/header/full-logo.svg" alt="">
                </a>
            </h1>
            <div class="col-3 d-flex align-items-center d-lg-none mobile_menu justify-content-end">
                <button class="bi bi-search border-0 bg-transparent mx-sm-1"></button>  
                <button class="bi bi-bag border-0 bg-transparent mx-sm-1"></button>
            </div>
            <div class="px-5 d-none d-lg-flex">
              <?php include_once(G5_PATH."/../ck/navi.php");?>
            </div>
        </div>
        <div class="d-flex align-items-center right_topmenu">
            <ul class="d-lg-flex align-items-center position-relative eng_hdr_sub_lt_13 gnb_reg px-xl-5 pe-3">
                
                

                <?php if ($is_member) {  ?>
                    <li><a href="<?php echo G5_BBS_URL ?>/logout.php?url=/ck" class="mx-3">Sign Out</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">Modify</a></li>          
                <?php } else {  ?>
                    <li><a href="<?php echo G5_BBS_URL ?>/login.php?url=/ck" class="mx-3">Sign in</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/register.php">Register</a></li>
                <?php }  ?>


                
            </ul>
            <ul class="d-lg-flex align-items-center position-relative hd_icons">
                <li>
                    <i class="bi bi-search mx-1"></i>
                    <i class="bi bi-geo-alt mx-1"></i>
                    <i class="bi bi-bag mx-1"></i>
                </li>
            </ul>
        </div>
        <div class="d-lg-none">
            <div id="overlay" class="overlay"></div>
            <ul id="mobile-menu" class="position-fixed bg-white">
                <li class="py-2 px-3 d-flex align-items-center mt-5">
                    <button class="menu-btn d-flex justify-content-between align-items-center w-100 bg-white border-0">
                        <span class="ul_name eng_hdr_main_sb_16">MEN</span>
                        <span><i class="bi bi-chevron-right"></i></span>
                    </button>
                    <div class="menu-content mt-5">
                        <button class="menu-btn d-flex justify-content-between align-items-center w-100 bg-white border-bottom border-0 bi bi-chevron-left">
                            <span class="ul_name eng_hdr_main_sb_16">MEN</span>
                            <div></div>
                        </button>
                        <ul class="eng_list_txt_reg_18 mt-5 px-3 list_con"> 
                            <li>
                                <div>
                                    <button class="d-flex justify-content-between align-items-center w-100 border-0 bg-transparent">
                                        온라인 익스클루시브
                                        <span><i class="bi bi-plus"></i></span>
                                    </button>
                                    <ul class="kr_in_list_txt_reg_16 mx-2">
                                        <li class="my-2">모두보기</li>
                                        <li>의류</li>
                                        <li class="my-2">언더웨어</li>
                                        <li>악세서리</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="my-3">
                                <div>
                                    <button class="d-flex justify-content-between align-items-center w-100 border-0 bg-transparent">
                                        남성 의류
                                        <span><i class="bi bi-plus"></i></span>
                                    </button> 
                                </div>
                                <ul class="kr_in_list_txt_reg_16 mx-2">
                                    <li class="my-2">청바지</li>
                                    <li>바지</li>
                                    <li class="my-2">재킷</li>
                                    <li>맨투맨/후드티</li>
                                    <li class="my-2">셔츠</li>
                                    <li>티셔츠</li>
                                </ul>
                            </li>
                            <li class="">
                                <button class="d-flex justify-content-between align-items-center w-100 border-0 bg-transparent">
                                    악세서리
                                    <span><i class="bi bi-plus"></i></span>
                                </button>
                                <ul class="kr_in_list_txt_reg_16 mx-2">
                                    <li class="my-2">가방</li>
                                    <li>벨트</li>
                                    <li class="my-2">양말</li>
                                    <li>지갑</li>
                                    <li class="my-2">모자</li>
                                </ul>
                            </li>
                            <li class="my-3">
                                <button class="d-flex justify-content-between align-items-center w-100 border-0 bg-transparent">
                                    언더웨어
                                    <span><i class="bi bi-plus"></i></span>
                                </button>
                                <ul class="kr_in_list_txt_reg_16 mx-2">
                                    <li class="my-2">모두보기</li>
                                    <li>인텐스 파워</li>
                                    <li class="my-2">모던 코튼</li>
                                    <li>CK 블랙</li>
                                    <li class="my-2">드로즈</li>
                                    <li>브리프</li>
                                    <li class="my-2">박서</li>
                                    <li>잠옷 / 수영복</li>

                                </ul>
                            </li>
                            <li class="">
                                <button class="d-flex justify-content-between align-items-center w-100 border-0 bg-transparent">
                                    슈즈
                                    <span><i class="bi bi-plus"></i></span>
                                </button>
                                <ul class="kr_in_list_txt_reg_16 mx-2">
                                    <li class="my-2">스니커즈</li>
                                    <li>로퍼</li>
                                    <li class="my-2">샌들</li>
                                    <li>부츠</li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </li>
                <li class="d-flex align-items-center py-2 px-3">
                    <button class="d-flex justify-content-between align-items-center w-100 bg-white border-0">
                        <span class="ul_name eng_hdr_main_sb_16">WOMEN</span>
                        <span><i class="bi bi-chevron-right"></i></span>
                    </button>
                </li>
                <li class="d-flex align-items-center py-2 px-3">
                    <button class="d-flex justify-content-between align-items-center w-100 bg-white border-0">
                        <span class="ul_name eng_hdr_main_sb_16">SPORTS</span>
                        <span><i class="bi bi-chevron-right"></i></span>
                    </button>  
                </li>
                <li class="d-flex align-items-center py-2 px-3 border-bottom">
                    <button class="d-flex justify-content-between align-items-center w-100 bg-white border-0">
                        <span class="ul_name eng_hdr_main_sb_16">DISCOVERY</span>
                        <span><i class="bi bi-chevron-right"></i></span>
                    </button>
                </li>
                <li class="py-2 px-3 d-flex align-items-center">
                    <i class="bi bi-person me-2"></i>
                    <a href="" class="d-block kr_m_hdr_sub_reg_15 ">로그인</a>
                </li>
                <li class="py-2 px-3 d-flex align-items-center">
                    <i class="bi bi-geo-alt me-2"></i>
                    <a href="" class="d-block kr_m_hdr_sub_reg_15 ">매장찾기</a>
                </li>
                <li class="py-2 px-3 d-flex align-items-center">
                    <i class="bi bi-telephone me-2"></i>
                    <a href="" class="d-block kr_m_hdr_sub_reg_15 ">문의하기</a>
                </li>    
            </ul>
        </div>
   
    </header>
    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div class="<?php echo $_GET["inner"]; ?>">