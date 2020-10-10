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
        <link rel="stylesheet" type="text/css" href="./css/board_form1.css">
        <link rel="stylesheet" type="text/css" href="./css/nav_mediaquery2.css">
		<link rel="stylesheet" type="text/css" href="./css/button.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <script src="https://kit.fontawesome.com/dc4c876557.js" crossorigin="anonymous"></script> <!--폰트어썸 연동-->
        <script src="./jquery/jquery-3.5.1.js"></script>
        <style>
            h1 {
				font-family: dangdanghae;
            }
            #board_title{
				font-family: dangdanghae;
            }
        </style>
        <script>
            function check_input() {
                if (!document.board_form.subject.value)
                {
                    alert("제목을 입력하세요!");
                    document.board_form.subject.focus();
                    return;
                }
                if (!document.board_form.content.value)
                {
                    alert("내용을 입력하세요!");    
                    document.board_form.content.focus();
                    return;
                }
                document.board_form.submit();
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
                    <p>Copyright © 재현없는재현조. All Rights Reserved.</p>
                </div>
            </nav>
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
            <script src="./js/nav.js"></script>

        </header>
        <section>
			<h1>자유게시판</h1>
			<div id="main_img">
                <img src="image/freeboard.png" alt="bg">
            </div>
			<div id="board_box">
				<h3 id="board_title">
						자유게시판
				</h3>
			<?php
				$num  = $_GET["num"];
				$page = $_GET["page"];
				
				$con = mysqli_connect("localhost", "gomeya", "gome1243!", "gomeya");
				$sql = "select * from board where num=$num";
				$result = mysqli_query($con, $sql);
				$row = mysqli_fetch_array($result);
				$name       = $row["name"];
				$subject    = $row["subject"];
				$content    = $row["content"];		
				$file_name  = $row["file_name"];
			?>
				<form  name="board_form" method="post" action="board_modify.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
					<table>
                            <tr>
                                <th>
                                    이름(id)
                                </th>
                                <td class="nic">
                                    <?=$username?> (<?=$userid?>)
                                </td>
                            </tr>
							<tr>
                                <th>
                                    제목  
                                </th>
                                <td>
                                    <div>
                                        <input class="chk_length" name="subject" type="text" value="<?=$subject?>" style="border:none;" maxlength="20">
                                    </div>
                                </td>
                            </tr>
							<tr>
                                <th>
                                    <span>내용 </span>
                                </th>
                                <td>
                                    <textarea class="chk_length" name="content" cols="100" rows="20" style="border:1px solid white"  maxlength="1000"><?=$content?></textarea>
                                </td>
                            </tr>
                        </table>
                        <script>
                            $(function(){
                                $('.chk_length').keyup(function(){
                                    if($(this).val().length>$(this).attr('maxlength')){
                                        alert('제한 길이 초과');
                                        $(this).val($(this).vla().substr(0,$(this).attr('maxlength')));
                                    }
                                });
                            });
                        </script>
					<div class="buttons">
						<button type="button" onclick="check_input()">수정하기</button>
						<button type="button" onclick="location.href='board_list.php'">목록</button>
					</div>
				</form>
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