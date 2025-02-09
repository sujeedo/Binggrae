<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>단지가 궁금해 online store에 어서오세요</title>
    <meta name="description" content="binggrea promotion event site">
    <meta name="author" content="sujeedo"> 
    <meta property="og:type" content="website">
    <meta property="og:title" content="단지가 궁금해 online store">
    <meta property="og:url" content="http://gomeya.dothome.co.kr/">
    <meta property="og:description" content="단지가 궁금해 스토어가 오픈했어요! 링크 클릭!">
    <meta property="og:image" content="http://gomeya.dothome.co.kr/image/preview.png">
    <link rel="icon" type="image/png" href="./image/pavicon.png">
    <script src="https://kit.fontawesome.com/dc4c876557.js" crossorigin="anonymous"></script><!--폰트어썸연동-->
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index_common1.css?ver=1">
    <link rel="stylesheet" href="./css/index1.css?ver=1"><!--CSS 파일 연동-->
    <link rel="stylesheet" href="./css/index_media query1.css?ver=1">
    <script src="./js/index1.js?ver=1" defer></script><!--defer : html파일이 모두 로딩된 후 자바스크립트를 실행하도록 해줍니다.-->
    <script src="./jquery/jquery-3.5.1.js"></script>
</head>
<body>
    <!--======================= Background ========================-->
    <div class="loading">
        <p></p>
        <p></p>
        <div class="loading_item">
            <p>단지가 궁금해</p>
            <p>online store</p>
            <p>단지가 궁금해 온라인 스토어가 오픈했습니다!</p>
            <p>방문해주신 모든분들을 환영합니다!</p>
            <img src="./image/preview.png" alt="미리보기 이미지" style="display:none">
        </div>
    </div>
    <div id="background"></div>
    <ul id="contetti">
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <!--======================= Header ========================-->
    <header>
        <div class="home-button">
            <a href="index.php">
                <img src="image/home_logo_mint.png" alt="빙그레 로고" width="100">
            </a>
        </div>
        <div class="toggle-button">
            <div class="toggle icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav class="menu">
            <div class="menu__login">
                <ul>
                    <?php include "header.php";?>
                </ul>
            </div>
            <div class="menu__category">
                <ul>
                    <li class="main">제품 소개<span></span><span></span></li>
                    <li class="sub"><span></span><a href="product1.php">단지가 궁금해</a></li>
                    <li class="sub"><span></span><a href="product2.php">성분이 궁금해</a></li>
                    <li class="sub"><span></span><a href="product3.php">효능이 궁금해</a></li>
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
                <p>ⓒ 2020.단지가 궁금해 온라인 스토어<br>all rights reserved.</p>
            </div>
        </nav>
        <ul class="scroll__menu">
            <li><span class="circle here" ></span><a href="#home" class="chek">Home</a><span class="square here2"></span></li>
            <li><span class="circle"></span><a href="#product">Product</a><span class="square"></span></li>
            <li><span class="circle"></span><a href="#event">Event</a><span class="square"></span></li>
            <li><span class="circle"></span><a href="#store">Store</a><span class="square"></span></div></li>
        </ul>
        <div class="direction-arrow">
            <div class="arrow" title="위로"> <!--onclick="window.scrollTo(0,0);"--> 
                <i class="fas fa-arrow-up"></i>
            </div>
            <div class="arrow" title="아래로">
                <i class="fas fa-arrow-down"></i>
            </div>
        </div>
    </header>
    <!--======================= Home ========================-->
    <section id="home">
        <div class="content__container">
            <h1 class="title__main">
                <img src="./image/home_tiltle_main.png" alt="단지가 궁금해 시리즈">
            </h1>
            <div class="title__sub">
                <img src="./image/home_tiltle_sub.png" alt="세상에 없는 맛은 이유가 있지만 그럼에도 우리는 새로운 맛을 원한다! 다시 돌아온 단지가 궁금해 시리즈! 네가 뭘 좋아할지 몰라 5가지 맛 모두 준비했어!">
                <h3>
                    <span>세상에 없는 맛은 이유가 있지만,</span><br>
                    <span>그럼에도 우리는 새로운 맛을 원한다!</span><br>
                    다시 돌아온 단지가 궁금해 시리즈!<br> 네가 뭘 좋아할지 몰라 5가지 맛 모두 준비했어!
                </h3>
            </div>
            <div class="item">
              <div class="milk__Pumpkin milk"> 
                <img src="./image/home_milk4.png" alt="빙그레 호박고구마맛 우유">
              </div>
              <div class="milk__tangerine milk">
                <img src="./image/home_milk2.png" alt="빙그레 귤맛 우유 이미지">
              </div>
              <div class="milk__mulberry milk">
                <img src="./image/home_milk1.png" alt="빙그레 빙그레 오디맛 우유 이미지">
              </div>    
              <div class="milk__RichPeach milk">
                <img src="./image/home_milk3.png" alt="빙그레 리치피치맛 우유 이미지">
              </div>    
              <div class="milk__CottonCandy milk">
                <img src="./image/home_milk5.png" alt="빙그레 코튼캔디맛 우유 이미지">
              </div>
            </div>
            <div class="Phrase">
                <p>
                    빙그레의 ‘단지가 궁금해 시리즈’란 바나나맛 우유의 새로운 경험을 전달하기 위해 국내에서 판매되고 있지 않은 색다른 우유를 시즌 한정으로 판매하는것을 말합니다.<br>
                    4번째로 출시된 바닐라맛은 뜨거운 호응을 얻어 현재 상시 판매중이지만, 단종된 5가지의 맛도 여러분의 꾸준한 성원에 힘입어 재출시되었습니다.<br>
                    보내주신 성원에 감사한 마음으로 재출시 기념 이벤트를 진행중입니다. 더 자세한 내용 및 구매 방법에 대한 사항은 아래 버튼을 클릭해 확인해주시길 바랍니다.
                </p>
            </div>
            <div class="button__container">
                <div class="button product">
                    <img src="./image/home_button1.png" alt="우리가 궁금해?" class="off">
                    <img src="./image/home_button1_1.png" alt="상품 자세히보기" class="on" data-link="#product">
                    <img src="./image/home_button1_2.png" alt="상품 자세히보기" class="on2" data-link="#product">
                </div>
                <div class="button event">
                    <img src="./image/home_button2.png" alt="우리랑 사진찍자!" class="off">
                    <img src="./image/home_button2_1.png" alt="이벤트 자세히보기" class="on" data-link="#event">
                    <img src="./image/home_button2_2.png" alt="상품 자세히보기" class="on2" data-link="#event">
                </div>
                <div class="button store" data-link="#store">
                    <img src="./image/home_button3.png" alt="우리를 데려가줘!" class="off">
                    <img src="./image/home_button3_1.png" alt="스토어 자세히보기" class="on" data-link="#store">
                    <img src="./image/home_button3_2.png" alt="상품 자세히보기" class="on2" data-link="#store">
                </div>
            </div>
        </div>
    </section>
    <!--======================= Product ========================-->
    <section id="product">
        <div class="content__container">
            <h2>우리가 궁금해?<span>우리가 궁금해?</span><span>우리가 궁금해?</span><span>우리가 궁금해?</span></h2>
            <h3>
                <span>단지가 궁금해 시리즈를 아직 모르시나요?</span><br>
                <span>빙그레의 스테디셀러인 단지 모양의 바나나우유가 세상에 없는 맛과 색을 입어 새롭게 태어났습니다!</span><br>
                총 5가지의 색다른 맛과 재미를 느껴보세요!<br>
            </h3>
            <article>
                <div class="product_xscrollbox">
                    <div class="product_img">
                        <img src="./image/product_milk1.png" alt="오디맛 우유 이미지">
                        <div class="pop-up">
                            <div class="pop-icon">
                                <span></span><span></span>
                            </div>
                            <div class="pop-content">
                                안녕! 내 이름은 오디라고해!<br>
                                난 2018년 2월 22일에 태어났어!<br>
                                다시 만나서 반가워!
                            </div>
                        </div>
                    </div>
                    <div class="product_img">
                        <img src="./image/product_milk2.png" alt="오디맛 우유 이미지">
                        <div class="pop-up">
                            <div class="pop-icon">
                                <span></span><span></span>
                            </div>
                            <div class="pop-content">
                                안녕! 내 이름은 오디라고해!<br>
                                난 2018년 2월 22일에 태어났어!<br>
                                다시 만나서 반가워!
                            </div>
                        </div>
                    </div>
                    <div class="product_img">
                        <img src="./image/product_milk3.png" alt="오디맛 우유 이미지">
                        <div class="pop-up">
                            <div class="pop-icon">
                                <span></span><span></span>
                            </div>
                            <div class="pop-content">
                                안녕! 내 이름은 오디라고해!<br>
                                난 2018년 2월 22일에 태어났어!<br>
                                다시 만나서 반가워!
                            </div>
                        </div>
                    </div>
                    <div class="product_img">
                        <img src="./image/product_milk4.png" alt="오디맛 우유 이미지">
                        <div class="pop-up">
                            <div class="pop-icon">
                                <span></span><span></span>
                            </div>
                            <div class="pop-content">
                                안녕! 내 이름은 오디라고해!<br>
                                난 2018년 2월 22일에 태어났어!<br>
                                다시 만나서 반가워!
                            </div>
                        </div>
                    </div>
                    <div class="product_img">
                        <img src="./image/product_milk5.png" alt="오디맛 우유 이미지">
                        <div class="pop-up">
                            <div class="pop-icon">
                                <span></span><span></span>
                            </div>
                            <div class="pop-content">
                                안녕! 내 이름은 오디라고해!<br>
                                난 2018년 2월 22일에 태어났어!<br>
                                다시 만나서 반가워!
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="page-move"><a href="product1.php">자세히보기</a></div>
        </div>
    </section>
    <!--======================= Event ========================-->
    <section id="event">
        <div class="content__container">
            <h2>우리랑 함께하자!<span>우리랑 함께하자!</span><span>우리랑 함께하자!</span><span>우리랑 함께하자!</span></h2>
            <h3>
                <span>여러분의 꾸준한 성원에 보답하기 위해 단지가 궁금해 시리즈 재출시 기념 이벤트가 열렸습니다!</span><br>
                <span>함께 해주시는 모든 분들에게 하나라도 더 드리고 싶은 마음으로 준비했으니 많은 참여 바랍니다!</span><br>
            </h3>
            <article>
                <div class="event__book">
                    <div class="event-book">
                        <img src="./image/event_book1.png" alt="구매인증이벤트소개">
                    </div>
                    <div class="event-book">
                        <img src="./image/event_book3.png" alt="이벤트 커버">
                        <img src="./image/event_book2.png" alt="룰렛이벤트소개">
                    </div>
                    <div class="event-book-btn">
                        <span></span><span></span>
                    </div>
                </div>
                <ul class="event__book2">
                    <li><img src="./image/event_book4.png" alt="구매인증이벤트소개"></li>
                    <li><img src="./image/event_book5.png" alt="룰렛이벤트소개"></li>
                </ul>
            </article>
            <div class="move-btn">
                <div class="page-move"><a href="event_board.php">인증하러가기</a></div>
                <div class="page-move"><a href="roulette.php">룰렛돌리러가기</a></div>
            </div>
        </div>
    </section>
    <!--======================= Store ========================-->
    <section id="store">
        <div class="content__container">
            <h2>이날만 기다렸어!<span>이날만 기다렸어!</span><span>이날만 기다렸어!</span><span>이날만 기다렸어!</span></h2>
            <h3>
                <span>여러분의 성원에 힘입어 단종 되었던 단지가 궁금해 시리즈를 온라인으로 판매합니다!</span><br>
                <span>오직 이곳에서만 만날 수 있는 단지가 궁금해 시리즈를 더욱 할인된 가격으로 만나보세요!</span><br>
            </h3>
            <article>
                <div class="store-card__container">
                    <div class="slider-icons" id="next">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="store-card-wrap">
                        <ul class="store-card-zone">
                            <li class="store-card">
                                <img src="./image/store_card1.png" alt="단지가 궁금해 온라인 스토어 혜택2 당일배송">
                            </li>
                            <li class="store-card">
                                <img src="./image/store_card2.png" alt="단지가 궁금해 온라인 스토어 혜택1 상시할인">
                            </li>
                        </ul>
                    </div>
                    <div class="slider-icons" id="previous">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <ul class="slider-pagination-dot"> 
                </ul>
            </article>
            <div class="page-move"><a href="mini-store-1.html">구매하러가기</a></div>
        </div>
    </section>
    <!--======================= Footer ========================-->
    <footer>
        <div>
            <div class="site logo">
                <a href="blnggrae_index.html">
                    <img src="image/home_logo.png" alt="빙그레 로고" width="150">
                </a>
                <p>ⓒ 2020.단지가 궁금해 온라인 스토어 all rights reserved.</p>
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
</body>
</html>