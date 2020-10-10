<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>단지가 궁금해 EVENT</title>
		<meta name="description" content="단지가궁금해 스토어">
		<meta name="author" content="단지가궁금해 스토어"> 
		<link rel="icon" type="image/png" href="./image/pavicon.png">
        <link rel="stylesheet" type="text/css" href="./css/nav-rou.css">
        <link rel="stylesheet" type="text/css" href="./css/nav_mediaquery1.css">
        <link rel="stylesheet" type="text/css" href="./css/roulette2.css">
        <script src="https://kit.fontawesome.com/dc4c876557.js" crossorigin="anonymous"></script> <!--폰트어썸 연동-->
        <script src="./jquery/jquery-3.5.1.js"></script> <!--제이쿼리 연동-->
        <script src="./js/nav.js" defer></script>
        <style>
            *{
                text-align:center;
            }
            h1 {
				font-family: dangdanghae;
            }
            .mainmove-btn {
                position:fixed;
            }
            article{
                background:url(image/bg1.jpg) no-repeat center;
                background-size:cover;
                /* width:60% */
            }
            #board_title{
				font-family: dangdanghae;
            }
            section{
                padding-top:40px;
            }
        </style>
    </head>
    <body>
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
                    <p>Copyright © 재현없는재현조. All Rights Reserved.</p>
                </div>
            </nav>
            <script>
              $(function(){
                    $('.main:eq(1) span').eq(1).css('transform','rotate(0deg)');
                    $('.sub').eq(4).css("display","block").css("background","rgb(38, 143, 134)");
                    $('.sub span ').eq(4).css("width","4px");
                    $('.sub').eq(3).css("display","block");


                    $(function() {
                        $(".mainmove-btn span").hover(function() {
                            $(this).text("홈으로");
                        },function() {
                            $(this).text("Home");
                        });
                    });
                })
            </script>
                <script src="./js/nav.js"></script>
        </header>
       
        <section>
            <div class="section">
                <p class="event_main">이벤트</p>
                <article>
                    <img id="event" src="image/roulette_event.png" alt="event">
                    <h2><span class="red">100% 당첨 보장</span> 룰렛 이벤트! <br> 누구나 회원가입만 한다면 <span class="red"><span>단 1번!</span> 적립금이 <span>팡팡!</span></span></h2>
                    <img id="max_point" src="image/max_point1.png" alt="point">
                    <div class="chance">
                        룰렛  <span id="chance">O</span>
                    </div>
                    <div id="roulette">
                        <img class="roulette_body" src="image/roulette_body.png" alt="roulette_body">
                        <img class="this" src="image/roulette_pin.png" alt="화살표">
                        <div class='start' onclick='roulette();'>
                            <img id="start_btn" src="image/start_btn.png" alt="start버튼">
                        </div>
                        <div class='pop'>
                        <!-- <img src="image/winner_bg.jpg" alt="win"> -->
                            <h2> !당첨을축하드립니다!</h2>
                            <button class='close_btn' onclick='close();'>
                                    <div></div>
                                    <div></div>
                            </button>
                            <p class="point"></p>
                        </div>
                    </div>
                    <div id="event_day">
                        <div class="event_day">행사 기간</div><p class="event_day1">2020년 7월 29일 ~ 8월 29일까지</p>
                    </div>
                </article>
            </div>


            
        <script>
            
            var chance=99;
            var chance_1=document.querySelector('#chance')
            
            chance_1.innerHTML=chance;

            function roulette() {
                var result=360;
                var pop=document.querySelector('.pop');
                var r_deg=document.querySelector('.roulette_body');//클래스명 변경
                var r_img=document.querySelector('.r_img');
                r_deg.style.transition='6s ease-in-out';
                var i=Math.floor(Math.random()*360);
                

                if(chance<=0){
                    roulette().off;
                    chance=0; return;
                }
                chance--;
                // chance_1.innerHTML="X";
                 
                 
                 result=1080+i //3바퀴는 무조건 돌도록 했음
                 document.querySelector('.this').style.animation="this 6s ease-in-out";
                 r_deg.style.transform='rotate('+result+'deg)';


                //pop에 들어갈거
                if(i>=0 && i<=44) {
                    document.querySelector('.point').innerHTML="1000p";
                }
                else if(i>44 && i<=89) {
                    document.querySelector('.point').innerHTML="5000p";
                }
                
                else if(i>89 && i<=134) {
                    document.querySelector('.point').innerHTML="1000p";
                }
                
                else if(i>134 && i<=179) {
                    document.querySelector('.point').innerHTML="500p";
                }
                
                else if(i>179 && i<=224) {
                    document.querySelector('.point').innerHTML="1000p";
                }
                
                else if(i>224 && i<=269) {
                    document.querySelector('.point').innerHTML="5000p";
                }
        
                else if(i>269 && i<=314) {
                    document.querySelector('.point').innerHTML="10000p";
                }
                
                else {
                    document.querySelector('.point').innerHTML="500p";
                }
 
                 setTimeout(function(){
                     r_deg.style.transition='0s';
                     pop.style.visibility="visible";
                     r_deg.style.transform='rotate('+0+'deg)';
                     chance_1.innerHTML=chance;
                     },7500);
             }
             
 
           
                $(function(){
                    $('.close_btn').click(function(){
                        $('.pop').css('visibility','hidden');
                    });
                });
            </script>
            </section>    
    </body> 
</html>