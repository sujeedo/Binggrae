<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>(제품 소개) 단지가 궁금해! </title>
        <meta name="description" content="단지가궁금해 제품 소개페이지">
    	<meta name="author" content="단지가궁금해 제품 소개페이지">
        <link rel="icon" type="image/png" href="./image/pavicon.png">
        <link rel="stylesheet" type="text/css" href="css/sub_page_nav.css">
        <link rel="stylesheet" type="text/css" href="css/sub_page1.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/dc4c876557.js" crossorigin="anonymous"></script> <!--폰트어썸 연동-->
        <script src="jquery/jquery-3.5.1.js"></script> <!--제이쿼리 연동-->
        <script src="js/sub_page_nav.js" defer></script>
        <script src="js/sub_page1.js"></script>
    </head>
    <body>
       <div id ="container">
        <header>
            <div class="toggle-button">
          	    <div class="toggle icon">
                	<span></span>
                	<span></span>
                	<span></span>
            	</div>
        	</div>
            <div class="mainmove-btn">
                <!--<i class="fas fa-home"></i>-->
                <a href="index.php">
                    <img src="./image/subpage_icon_main.png" alt="메인으로이동"><span>Home</span>
                </a>
            </div>
            <nav class="menu">
                <div class="logo">
                    <img src="./image/home_logo.png" alt="로고" width="120">
                </div>
                <div class="menu__login">
                    <ul>
                        <?php include "header.php";?>
                    </ul>
                </div>
                <div class="menu__category">
                    <ul>
                        <li class="_main">제품 소개<span></span><span></span></li>
                        <li class="_sub"><span></span><a href="product1.php">단지가 궁금해</a></li>
                        <li class="_sub"><span></span><a href="product2.php">성분이 궁금해</a></li>
                        <li class="_sub"><span></span><a href="product3.php">효능이 궁금해</a></li>
                        <li class="main">이벤트<span></span><span></span></li>
                        <li class="sub"><span></span><a href="event_board.php">우리랑 사진 찍자!</a></li>
                        <li class="sub"><span></span><a href="roulette.php">꽝없는 룰렛을 돌려라!</a></li>
                        <li class="main">스토어<span></span><span></span></li>
                        <li class="sub"><span></span><a href="mini-store-1.html">제품 구매</a></li>
                        <li class="main">게시판<span></span><span></span></li>
                        <li class="sub"><span></span><a href="board_list.php">자유게시판</a></li>
                    </ul>
                </div>
                <div class="menu__footer">
                    <p>© 2020. 단지가 궁금해 온라인 스토어</p>
               		<p>All Rights Reserved.</p>
                </div>
            </nav>
        </header>
        <section>
            <div class="top-line">
                <div class="category-name">제품 소개</div>
            </div>
            <div id ="article1">
                <h1><i>단지가 궁금해 <span class="txt1">시리즈란?</span></i></h1>
                <p>이제는 식품을 구매할 때 단순히 맛을 넘어서 재미, 디자인, 브랜드 히스토리 등 경험을 고려하는 소비자가 늘고 있습니다.</p>
				<p>'단지가 궁금해' 시리즈는 그러한 소비 경향에 맞춰 빙그레의 스테디셀러 바나나맛 우유에 <span class="txt2">세상에 없는 맛과 색</span>을 입혀 색다른 경험을 선사하고자 합니다.</p>
                <p>시즌 한정으로 출시 되었던 오디맛, 귤맛, 피치리치맛, 호박고구마맛, 코튼캔디맛을 다시 만나 추억과 재미를 모두 느껴보시길 바랍니다.</p>
            </div>
            <div id ="article2">
                <img src="image/product_bananamilk.png" class="img1">
                <img src="image/product_milk.png" class="img2">
            </div>
            <div id ="article3">
                <h1><i>단지가 된 이유<span class="txt1">는?</span></i></h1>
				<p>대한민국 대표 가공우유, 빙그레 바나나맛우유는<br> 그 달콤한 맛과 독특한 용기 모양으로<br> 전 국민의 사랑을 받고 있는 가공유 NO.1 제품입니다.<br> 단지유유, 항아리우유, 뚱바라고도 불리는 빙그레의 용기 모양은<br> 바나나맛우유가 처음 출시될 무렵인 1970년대의 산업화시대에 <br>농촌을 떠나 대도시로 온 고달픈 도시 생활업자들이<br> 고향을 떠올릴 수 있도록 <span class="txt2">넉넉한 항아리 모양</span>으로 디자인 되었습니다.<br> 독특한 생김새로 인해 수류탄우유 등의 별명을 잔뜩 얻었지만,<br> 추억과 위로가 담긴 디자인은<br> 식품을 넘어 경험과 기억을 쌓아 유형의 가치를 만들어냅니다.</p>
            </div>
        </div>
        </section>
        <footer>
        <div>
            <div class="site logo">
                <a href="blnggrae_index.html">
                    <img src="image/home_logo.png" alt="빙그레 로고" width="150">
                </a>
                <p>© 2020. 단지가 궁금해 온라인 스토어</p>
               		<p>All Rights Reserved.</p>
            </div>
            <div class="site info">
                <p>
                    <span class="bold">상호</span> 단지가 궁금해 온라인 스토어<br>
                    <span class="bold">대표</span> 재현없는재현조<br>
                    <span class="bold">주소</span> 서울시 행복구 행복동 행복길 12<br>
                    <span class="bold">전화</span> 02-123-4567<br>
                    <span class="bold">메일</span> abc123@defg.com<br>
                    <span class="strong">※오전 9시부터 6시까지 상담 시간입니다.</span>
                </p>
                <p>
                    <span class="bold">무통장 입금 계좌번호</span><br>
                    <span class="bold">예금주</span> 단지가 궁금해 온라인 스토어<br>
                    <span class="bold">국민</span> 123456 - 01 - 789101<br>
                    <span class="bold">우리</span> 1234 - 012 - 567891<br>
                    <span class="bold">신한</span> 123 - 456789 - 10111<br>
                    <span class="bold">농협</span> 123 - 45 - 678910
                </p>
            </div>
            <div class="site about">
                <div>
                    <p class="family_box">Family Site<i class="fas fa-caret-down"></p></i>
                    <div class="family">
                        <div>
                            <ul>
                                <li><a href="http://www.bing.co.kr/" target="_blank">빙그레 공식 홈페이지</a></li>
                                <li><a href="https://www.instagram.com/binggraekorea/" target="_blank">빙그레 공식 인스타그램</a></li>
                                <li><a href="https://www.instagram.com/bingicecream.official/?hl=ko" target="_blank">빙그레 아이스크림 인스타그램</a></li>
                                <li><a href="https://www.youtube.com/channel/UCOmz8eDBQ04h6i0_8p_V7eg" target="_blank">빙그레 공식 유튜브</a></li>
                                <li><a href="https://www.youtube.com/channel/UCsCjDynxKUOu7nY6tIXT25Q" target="_blank">빙그레 바나나우유 유튜브</a></li>
                                <li><a href="https://www.youtube.com/channel/UCxjERPPVyHbina73g8Grn-g" target="_blank">빙그레 아이스크림 유튜브</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="icon">
                    <li><a href="https://www.instagram.com/binggraekorea/" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
                    <li><a href="https://ko-kr.facebook.com/bingbalove/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCsCjDynxKUOu7nY6tIXT25Q" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
       </div>
    </body> 
</html>