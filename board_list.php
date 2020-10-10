<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
		<title>단지가 궁금해 자유게시판</title>
		<meta name="description" content="단지가궁금해 스토어">
		<meta name="author" content="단지가궁금해 스토어"> 
		<link rel="icon" type="image/png" href="./image/pavicon.png">
        <link rel="stylesheet" type="text/css" href="./css/nav.css">
        <link rel="stylesheet" type="text/css" href="./css/nav_mediaquery2.css">
		<link rel="stylesheet" type="text/css" href="./css/board_list4.css">
		<link rel="stylesheet" type="text/css" href="./css/button.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <script src="https://kit.fontawesome.com/dc4c876557.js" crossorigin="anonymous"></script> <!--폰트어썸 연동-->
        <script src="./jquery/jquery-3.5.1.js"></script> <!--제이쿼리 연동-->
		<style>
			h1 {
				font-family: dangdanghae;
			}
			th {
				text-align:center;
			}
			#board_title{
				font-family: dangdanghae;
				font-size:4vh;
				margin-bottom:60px;
			}
			#sel_form {
				display:flex;
				position:absolute;
				right:0;
				top:100px;
			}
			#sel_input {
				border:0.5px solid black;;
				border-radius:5px;
			}
			#sel_form>button{
				padding:7px;
				font-size:1.6vh;
				font-family: dangdanghae;
				border-radius:5px;
				box-shadow:2px 2px 2px gray;
				text-shadow:2px 2px 2px lightgray;
				border:none;
			}
			#page_num {
				margin-top:30px;
			}
			footer {
				margin-top:600px;
			}
			@media screen and (max-width:899px) {
				.cols>li  {
					height:70px;
					font-size: 1.5vh;
					padding-top:15px;
				}
				.cols1>li {
					font-size:1.1em;
				}
				footer {
					margin-top:700px;
				}
			}
			
		</style>
		<script>
            function check_input() {
                if (!document.sel_board_form.sel.value)
                {
                    alert("찾는 제목을 입력하세요!");
                    document.sel_board_form.sel.focus();
                    return;
                }

                document.sel_board_form.submit();
            }
        </script>
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
                    <p>ⓒ 2020.단지가 궁금해 온라인 스토어 all rights reserved.</p>
                </div>
            </nav>
            <script src="./js/nav.js"></script>
			<script>
              $(function(){
                $('.main:eq(3) span').eq(1).css('transform','rotate(0deg)');
				$('.sub').eq(6).css("display","block").css("background","rgb(38, 143, 134)");
				$('.sub span ').eq(6).css("width","4px");
				$('.sub').eq(6).css("display","block");
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
			<h1>자유게시판</h1>
			<div id="main_img">
				<img src="image/freeboard.png" alt="bg">
			</div>
			<div id="board_box">
				<h3 id="board_title">
					자유 게시판
				</h3>
				<form action="board_select.php" method="post" name="sel_board_form" id="sel_form">
					<input type="text" name="sel" id="sel_input" placeholder="찾는 제목을 적어주세요~">
					<button onclick="check_input();">찾기</button>
				</form>
					<ul id="board_list">
						<li>
							<ul class="cols cols1">
								<li>No.</li>
								<li>제목</li>
								<li>닉네임</li>
								<li>등록일</li>
								<li>조회수</li>
							</ul>
						</li>
							<?php
								if (isset($_GET["page"]))
									$page = $_GET["page"];
								else $page = 1;

								$con = mysqli_connect("localhost", "gomeya", "gome1243!", "gomeya");
								$sql = "SELECT * from board order by num desc";
								$result = mysqli_query($con, $sql);
								$total_record = mysqli_num_rows($result); // 전체 글 수

								$scale = 15;

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
								$name        = $row["name"];
								$subject     = $row["subject"];
								$regist_day  = $row["regist_day"];
								$hit         = $row["hit"];
							?>
							<li>
								<ul class="cols">
									<li><?=$number?></li>
									<li><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></li>
									<li><?=$name?></li>
									<li><?=$regist_day?></li>
									<li><?=$hit?></li>
								</ul>
							</li>
							<?php
								$number--;
							}
							mysqli_close($con);

							?>
						</ul>
						<ul id="page_num"> 	
							<?php
								if ($total_page>=2 && $page >= 2)	
								{
									$new_page = $page-1;
									echo "<li><a href='board_list.php?page=$new_page'><<</a> </li>";
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
										echo "<li><a href='board_list.php?page=$i'> $i </a><li>";
									}
								}
								if ($total_page>=2 && $page != $total_page)		
								{
									$new_page = $page+1;	
									echo "<li> <a href='board_list.php?page=$new_page'>>></a> </li>";
								}
								else 
									echo "<li>&nbsp;</li>";
							?>
						</ul> <!-- page -->	    
						
						
						<ul class="buttons">
							<li><button onclick="location.href='board_list.php'">목록</button></li>
							<li>
							<?php 
								if($userid) {
							?>
								<button onclick="location.href='board_form.php'">글쓰기</button>
							<?php
								} else {
							?>
								<a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
							<?php
								}
							?>
							</li>
						</ul>
				</div> <!-- board_box -->
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
    </body> 
</html>