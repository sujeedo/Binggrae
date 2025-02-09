<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>로그인</title>
	<script type="text/javascript" src="./js/login.js"></script>
	<link rel="stylesheet" href="./css/login_form1.css">
	<script src="https://kit.fontawesome.com/dc4c876557.js" crossorigin="anonymous"></script><!--폰트어썸연동-->
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
</head>

<body>
	<section>
		<div id="main_content">
			<div id="login_box">
				<h1 id="login_title">
					<a href="#">단지가 궁금해<span>Online Store</span></a>
				</h1>
				<div id="login_form">		
					<form name="login_form" method="post" action="login.php" class="login_input">
						<ul>
							<li>
								<input type="text" name="id" placeholder="아이디" id="user_id">
								<label for="user_id"><i class="fas fa-user"></i></label>
							</li>
							<li>
								<input type="password" id="pass" name="pass" placeholder="비밀번호">
								<label for="pass"><i class="fas fa-lock"></i></label>
							</li> <!-- pass -->
						</ul>
					</form>
					<div id="login_btn">
						<p>아이디 찾기 <span>|</span> 비밀번호 찾기</p>
						<a href="#" onclick="check_input()" class="login_button">로그인 <i class="fas fa-sign-in-alt"></i></a><br>
						<p>단지가 궁금해 온라인 스토어 회원이 아니신가요?</p>
						<a href="member_form.php" class="join_button">회원가입</a>
					</div>
					<div class="page_btn">
						<p>다른 페이지로 이동</p>
						<ul>
						<li><a href="index.php"><i class="fas fa-home"></i>홈</a></li>
						<li><a href="event_board.php"><i class="fas fa-gift"></i>이벤트</a></li>
						<li><a href="mini-store-1.html"><i class="fas fa-shopping-cart"></i>스토어</a></li>
						<li><a href="board_list.php"><i class="fas fa-phone-alt"></i>고객센터</a></li>
					  </ul>
					</div>
				</div> 
				<footer>
					<div id="home_button">
						<a href="header.php"><img src="./image/home_logo.png" width="70"></a>
					</div>
					ⓒ 2020.단지가 궁금해 온라인 스토어 all rights reserved.
				</footer>
			</div> 
		</div>
	</section>
</body>
<script>
	var x = 0;
	function change_pic(b) {
		var list1 = ["img/2.jpg", "img/3.jpg", "img/4.jpg"];

		document.getElementById("advertise_event").src = list1[x];
		x++;

		if (x > list1.length - 1) {
			x = 0;
		}
	}
	setInterval("change_pic()", 1000);
</script>

</html>

