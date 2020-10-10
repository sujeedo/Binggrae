<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>단지가 궁금해 EVENT</title>
		<meta name="description" content="단지가궁금해 스토어">
		<meta name="author" content="단지가궁금해 스토어"> 
		<link rel="icon" type="image/png" href="./image/pavicon.png">
        <link rel="stylesheet" type="text/css" href="./css/nav.css">
        <link rel="stylesheet" type="text/css" href="./css/event_board6.css">
        <link rel="stylesheet" type="text/css" href="./css/nav_mediaquery2.css">
        <link rel="stylesheet" href="./css/lightbox.min.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <script src="https://kit.fontawesome.com/dc4c876557.js" crossorigin="anonymous"></script> <!--폰트어썸 연동-->
        <script src="./jquery/jquery-3.5.1.js"></script> <!--제이쿼리 연동-->    
        <script src="./js/lightbox-plus-jquery.min.js"></script>
        <style>
            .event_img {
                position:relative;
            }
            h1 {
				font-family: dangdanghae;
            }
            #board_title{
				font-family: dangdanghae;
            }
            .new {
                position:absolute;
                top:67%;
                right:-5%;
                /* display:inline-block; */
                width:22px;
                height:22px;
                font-size:0.9em;
                border-radius:50%;
                background:red;
                color:white;
            }
            footer {
                margin-top:500px;
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
            <script src="./js/nav.js"></script>
			<script>
              $(function(){
                $('.main:eq(1) span').eq(1).css('transform','rotate(0deg)');
				$('.sub').eq(3).css("display","block").css("background","rgb(38, 143, 134)");
				$('.sub span ').eq(3).css("width","4px");
				$('.sub').eq(4).css("display","block");
              });
              $(function() {
                        $(".mainmove-btn span").hover(function() {
                            $(this).text("홈으로");
                        },function() {
                            $(this).text("Home");
                        });
                    });
             
            </script>
        </header>
            <section>
    
                <h1>이벤트</h1>
                <div id="main_img"><img class="mainbg" src="image/eventbg.png" alt="bg"></div>
                <div id="board_box">
                    <h2 id="board_title">
                       EVENT
                    </h2>
                    <div id="event_box">
                        <?php
                                if (isset($_GET["page"]))
                                    $page = $_GET["page"];
                                else $page = 1;

                                $con = mysqli_connect("localhost", "gomeya", "gome1243!", "gomeya");
                                $sql = "SELECT * from event_board order by num desc";
                                $result = mysqli_query($con, $sql);
                                $total_record = mysqli_num_rows($result); // 전체 글 수

                                $scale = 8;

                                // 전체 페이지 수($total_page) 계산 
                                if ($total_record % $scale == 0)     
                                    $total_page = floor($total_record/$scale);      
                                else
                                    $total_page = floor($total_record/$scale) + 1; 
                            
                                // 표시할 페이지($page)에 따라 $start 계산  
                                $start = ($page - 1) * $scale;      

                                $number = $total_record - $start;

                            for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
                            {
                                mysqli_data_seek($result, $i);
                                // 가져올 레코드로 위치(포인터) 이동
                                $row = mysqli_fetch_array($result);
                                // 하나의 레코드 가져오기
                                $num         = $row["num"];
                                $id          = $row["id"];
                                $subject     = $row["subject"];
                                $imgname     = $row["imgname"];
                            ?>
                            <a class="event_img" href="<?=$imgname?>" data-lightbox=<?=$num?> data-title=<?="$id"?>>
                                <div>
                                    <div>
                                        <img src=<?="$imgname"?> alt="event">
                                    </div>
                                    <div class="event_txt">
                                        <h3>
                                            <p><?=$subject?></p>
                                            <div class="new">N</div>
                                        </h3>
                                        <?=$id?>님 
                                    </div>
                                </div> 
                            </a>
                                <script>
                                    $(function(){
                                        lightbox.option({
                                            'resizeDration':1200,//갤러리가 나타나는 시간
                                            'wrapAround':true,//테두리
                                            // 'albumLabel':
                                            'maxWidth':700,
                                            'maxHeight':700,
                                            'positionFromTop':100//갤러리가 나타나는 top위치
                                        });

                                        // setTimeout($('.new').removeClass('new'),100000);
                                    })
                                </script>                  
                            <?php
                                $number--;
                                }
                                mysqli_close($con);
                            ?>
                        <ul id="page_num"> 	
                            <?php
                                if ($total_page>=2 && $page >= 2)	
                                {
                                    $new_page = $page-1;
                                    echo "<li class='nextbtn'><a href='event_board.php?page=$new_page'><<</a> </li>";
                                }		
                                else 
                                    echo "<li>&nbsp;</li>";

                                // 게시판 목록 하단에 페이지 링크 번호 출력
                                for ($i=1; $i<=$total_page; $i++)
                                {
                                    if ($page == $i)     // 현재 페이지 번호 링크 안함
                                    {
                                        echo "<li class='chk_num'><b> $i </b></li>";
                                    }
                                    else
                                    {
                                        echo "<li><a href='event_board.php?page=$i'> $i </a><li>";
                                    }
                                }
                                if ($total_page>=2 && $page != $total_page)		
                                {
                                    $new_page = $page+1;	
                                    echo "<li class='nextbtn'> <a href='event_board.php?page=$new_page'>>></a> </li>";
                                }
                                else 
                                    echo "<li>&nbsp;</li>";
                            ?>
                        </ul> <!-- page -->	    
                        
                        
                        <ul class="buttons">
                            <li>
                            <?php 
                                if($userid) {
                            ?>
                                <button onclick="location.href='event_board_form.php'">이미지 업로드</button>
                            <?php
                                } else {
                            ?>
                                    <a href="javascript:alert('로그인 후 이용해 주세요!')"><button>이미지 업로드</button></a>
                            <?php
                                }
                            ?>
                            </li>
                        </ul>
                    </div>
            </section>
            <footer>
                <div>
                    <div class="site logo">
                        <a href="blnggrae_index.html">
                            <img src="image/home_logo.png" alt="빙그레 로고" width="150">
                        </a>
                        <p>ⓒ 재현없는재현조 all rights reserved.</p>
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
            <script>
                    
            </script>

    </body> 
</html>