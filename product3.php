<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>(제품 소개) 효능이 궁금해! </title>
        <meta name="description" content="단지가궁금해 제품 소개페이지">
    	<meta name="author" content="단지가궁금해 제품 소개페이지">
        <link rel="icon" type="image/png" href="./image/pavicon.png">
        <link rel="stylesheet" type="text/css" href="css/sub_page_nav.css">
        <link rel="stylesheet" type="text/css" href="css/sub_page3.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" href="bx_slider/jquery.bxslider.css">
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/dc4c876557.js" crossorigin="anonymous"></script> <!--폰트어썸 연동-->
        <script src="jquery/jquery-3.5.1.js"></script> <!--제이쿼리 연동-->
        <script src="js/sub_page_nav.js" defer></script>
        <script src="js/sub_page3.js"></script>
        <script src="bx_slider/jquery.bxslider.min.js"></script>
    </head>
    <body>
       <div id = container>
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
            <article>
                <h1>효능이 궁금해</h1>
                <p>효능 또한 알고 먹으면 금상첨화. 우유 속 대표 성분이 가진 효능에 대해 알려드립니다.</p>
            </article>
            <div class="slider_box">
            <div class ="bx_slider">
            <div class = "bigbox bigbox1">
            <div class ="fruit_text fruit_text_left">
                <h3>오디의 효능</h3>
                <p>비타민,칼륨,칼슘 미네랄의 함량이 다른 과일보다 높고, 철분과 아연이 풍부해 면역유지와 상처 회복에 좋습니다.</p>
            </div>
            <div class ="fruit_box">
                <img src ="image/product_hyo1.jpg" class ="fruit">
            </div>
            <div class ="fruit_box">
                <img src ="image/product_hyo2.jpg" class ="fruit">
            </div>
            <div class ="fruit_text fruit_text_right">
                <h3>귤의 효능</h3>
                <p>면역력증강,항산화 작용으로 감기예방과 피로해소, 피부 미용, 스트레스 해소, 눈건강에 좋고 혈압과 동맥경화를 예방합니다.</p>
            </div>
            <div class ="fruit_text fruit_text_left">
                <h3>리치의 효능</h3>
                <p>면역력 향상에 좋아 감기 예방에 탁월하고, 식이섬유가 풍부하여 변비 개선과 예방, 간암 세포의 증식을 억제해주는 효과로 암 예방에 좋습니다.</p>
            </div>
            <div class ="fruit_box">
                <img src ="image/product_hyo3.png" class ="fruit">
            </div>
            </div>
            <div class ="bigbox bigbox2">
            <div class ="fruit_box">
                <img src ="image/product_hyo4.jpg" class ="fruit">
            </div>
            <div class ="fruit_text fruit_text_right">
                <h3>복숭아의 효능</h3>
                <p>비타민C, 카테킨, 베타카로틴 등 피부건강에 좋은 성분이며 노화 예방, 생리불순 개선, 변비 완화, 피로 해소, 숙취해결 및 흡연욕 저하, 체중 감소에 좋습니다.</p>
            </div>
            <div class ="fruit_text fruit_text_left">
                <h3>호박고구마의 효능</h3>
                <p>장건강, 노화방지, 혈관건강, 항암작용, 눈건강에 좋고 고혈압과 동맥경화를 예방합니다.</p>
            </div>
            <div class ="fruit_box">
                <img src ="image/product_hyo5.jpg" class ="fruit">
            </div>
            <div class ="fruit_box">
                <img src ="image/product_hyo6.jpg" class ="fruit">
            </div>
            <div class ="fruit_text fruit_text_right">
                <h3>캔디바의 효능</h3>
                <p>무더운 여름 몸의 체온을 낮춰주고 갈증 해소, 혈당 증가로 스트레스 해소 등 불쾌지수를 낮춰줍니다.</p>
            </div>
            </div>
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